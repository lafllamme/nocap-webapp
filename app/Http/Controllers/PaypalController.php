<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Payment;
class PayPalController extends Controller
{
    /**
     * create transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function createTransaction()
    {
        return view('welcome');
    }

    /**
     * process transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function processTransaction(Request $request, String $id)
    {
        $amount = 0;
        if ($id === 'earlyBird') {
            $amount = 5;
        } elseif ($id === 'regular') {
            $amount = 6;
        } elseif ($id === 'abendKasse') {
            $amount = 7;
        }

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('successTransaction'),
                "cancel_url" => route('cancelTransaction'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "EUR",
                        "value" => round($amount * 1.05, 2)
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {

            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }

            return redirect()
                ->route('createTransaction')
                ->with('error', 'Something went wrong.');
        } else {
            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    /**
     * success transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function successTransaction(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);


        function flatten($array)
        {
            $return = array();
            while (count($array)) {
                $value = array_shift($array);
                if (is_array($value))
                    foreach ($value as $sub)
                        $array[] = $sub;
                else
                    $return[] = $value;
            }
            return $return;
        }

        //FIX ME: find better solution
        $cleanedArr = flatten($response);
        $transactionCode = $cleanedArr[17];
        $personName = $cleanedArr[5] . ' ' . $cleanedArr[6];
        $email = $cleanedArr[2];
        $amount = $cleanedArr[23];

        $qrData = [
            $personName, $email, $amount, $transactionCode
        ];

        $shortString = [$qrData[0], $qrData[3]];
        $qrString = implode("|", $shortString);
        $qrcode = QrCode::size(500)
            ->style('round')
            //->gradient(131, 58, 180, 53, 159, 196, 'radial')
            ->backgroundColor(163,255,180)
            ->errorCorrection('H')
            ->generate($qrString);

        $date = date("Ymd");

        $fileName = $transactionCode . "QrCode.svg";
        $folderName = "transaction/" . $date . "/" . $fileName;
        $finalFolderName = str_replace(' ', '', $folderName);


        Storage::disk('public')->put($finalFolderName, $qrcode);
        $url = Storage::url($finalFolderName);

        $payment = new Payment;
        $payment->transactionId = $transactionCode;
        $payment->name = $personName;
        $payment->amount = $amount;
        $payment->email = $email;
        $payment->save();

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            return redirect()
                ->route('createTransaction')
                ->with('success', 'Transaction complete.')
                ->with('url', $url);
        } else {
            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    /**
     * cancel transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancelTransaction(Request $request)
    {
        return redirect()
            ->route('createTransaction')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }
}
