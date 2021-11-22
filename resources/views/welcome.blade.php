<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <!-- Styles -->

</head>
<div class='container'>
    <section class='card'>
        <div class='card_inner'>
            <div class='card_inner__circle'>
                <img src='https://cdn-icons.flaticon.com/png/512/798/premium/798725.png?token=exp=1637617732~hmac=78f2f5fb1649e102b590858df89aae74'>
            </div>
            <div class='card_inner__header'>
                <img src='https://i.gifer.com/86yA.gif'>
            </div>
            <div class='card_inner__content'>
                <div class='title'>Early Bird</div>
                <div class='price'>5€</div>
                <div class="text">Line UP:
                    <br>
                    LUIVI
                    KING TRILL
                    LAFLLAMME
                </div>
            </div>
            <div class='card_inner__cta'>
                <button>
                    <span>Buy Now</span>
                </button>
            </div>
        </div>
    </section>
    <section class='card'>
        <div class='card_inner'>
            <div class='card_inner__circle'>
                <img src='https://cdn-icons-png.flaticon.com/128/638/638410.png'>
            </div>
            <div class='card_inner__header'>
                <img src='https://media3.giphy.com/media/oiklTGjmLNJVm/giphy.gif'>
            </div>
            <div class='card_inner__content'>
                <div class='title'>Regular</div>
                <div class='price'>6€</div>
                <div class="text">Line UP:
                    <br>
                    LUIVI
                    KING TRILL
                    LAFLLAMME
                </div>
            </div>
            <div class='card_inner__cta'>
                <button>
                    <span>
                        <a href='#'>Buy Now</a>
                    </span>
                </button>
            </div>
        </div>
    </section>
    <section class='card'>
        <div class='card_inner'>
            <div class='card_inner__circle'>
                <img src='https://cdn-icons-png.flaticon.com/512/6161/6161638.png'>
            </div>
            <div class='card_inner__header'>
                <img src='https://data.whicdn.com/images/237944979/original.gif'>
            </div>
            <div class='card_inner__content'>
                <div class='title'>Abendkasse</div>
                <div class='price'>7€</div>
                <div class="text">Line UP:
                    <br>
                    LUIVI
                    KING TRILL
                    LAFLLAMME
                </div>
            </div>
            <div class='card_inner__cta'>
                <button>
                    <span>Buy Now</span>
                </button>
            </div>
        </div>
    </section>

</div>

<!-- <div id="app">
     <example-component></example-component>
 </div> -->
</body>

</html>
<style>
    @font-face {
        font-family: "MyWebFont";
        src: url("/fonts/font.woff2") format("woff2");
    }

    body {
        font-family: "MyWebFont";
        /* Location of the image */
        background-image: url(https://steamuserimages-a.akamaihd.net/ugc/957465844211323441/22EFD8128220CC5CF538745F87DA629B49CB32A5/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false);

        /* Background image is centered vertically and horizontally at all times */
        background-position: center center;

        /* Background image doesn’t tile */
        background-repeat: no-repeat;

        /* Background image is fixed in the viewport so that it doesn’t move when
the content’s height is greater than the image’s height */
        background-attachment: fixed;

        /* This is what makes the background image rescale based
on the container’s size */
        background-size: cover;

        /* Set a background color that will be displayed
while the background image is loading */
        background-color: #464646;
    }

    body a {
        text-decoration: none;
        color: white;
    }

    body .container {
        width: 938px;
        position: absolute;
        top: 50%;
        left: 30px;
        right: 0;
        transform: translateY(-50%);
        margin: auto;
    }

    body .container .card {
        margin: 0 auto;
        display: inline-block;
        margin-right: 10px;
        transform: scale(0);
        width: 280px;
        text-align: center;
        position: relative;
        transition: all 0.2s;
        cursor: pointer;
        opacity: 0.5;
        box-shadow: 0px 17px 46px -10px #777777;
        height: 470px;
        border-radius: 14px;
    }

    body .container .card:nth-of-type(1) {
        -webkit-animation: intro 1s 0.1s forwards;
        animation: intro 1s 0.1s forwards;
    }

    body .container .card:nth-of-type(2) {
        -webkit-animation: intro 1s 0.2s forwards;
        animation: intro 1s 0.2s forwards;
    }

    body .container .card:nth-of-type(3) {
        -webkit-animation: intro 1s 0.3s forwards;
        animation: intro 1s 0.3s forwards;
    }

    body .container .card:nth-of-type(1) {
        background: -webkit-linear-gradient(45deg, #5e5e5e 0%, #080707 100%);
    }

    body .container .card:nth-of-type(2) {
        background: -webkit-linear-gradient(45deg, #5e5e5e 0%, #080707 100%);
    }

    body .container .card:nth-of-type(3) {
        background: -webkit-linear-gradient(45deg, #5e5e5e 0%, #080707 100%);
    }

    body .container .card:hover .card_inner__header img {
        left: -50px;
        transition: all 3.4s linear;
    }

    body .container .card:hover .card_inner__cta button {
        transform: scale(1);
    }

    body .container .card:nth-of-type(1):hover .card_inner__circle img {
        -webkit-animation: launch 4s forwards;
        animation: launch 4s forwards;
    }

    body .container .card:nth-of-type(1) .card_inner__circle img {
        top: 22px;
        left: 1px;
    }

    body .container .card:nth-of-type(2):hover .card_inner__circle img {
        -webkit-animation: spin 1.5s forwards;
        animation: spin 1.5s forwards;
    }

    body .container .card:nth-of-type(2) .card_inner__circle img {
        top: 22px;
    }

    body .container .card:nth-of-type(3):hover .card_inner__circle img {
        -webkit-animation: fly 4s forwards;
        animation: fly 4s forwards;
    }

    body .container .card:nth-of-type(3) .card_inner__circle img {
        top: 22px;
        left: 1px;
    }

    body .container .card:hover {
        opacity: 1;
    }

    body .container .card_inner__circle {
        overflow: hidden;
        width: 70px;
        position: absolute;
        background: #F1F0ED;
        z-index: 10;
        height: 70px;
        border-radius: 100px;
        left: 0;
        box-shadow: 0px 7px 20px rgba(0, 0, 0, 0.28);
        right: 0;
        margin: auto;
        border: 4px solid white;
        top: 82px;
    }

    body .container .card_inner__circle img {
        height: 26px;
        position: relative;
        top: 17px;
        transition: all 0.2s;
    }

    body .container .card_inner__header {
        height: 120px;
        border-top-left-radius: 14px;
        border-top-right-radius: 14px;
        overflow: hidden;
    }

    body .container .card_inner__header img {
        width: 120%;
        position: relative;
        top: -30px;
        left: 0;
        transition: all 0.1s linear;
    }

    body .container .card_inner__content {
        padding: 20px;
    }

    body .container .card_inner__content .price {
        color: white;
        font-weight: 800;
        font-size: 40px;
        text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.42);
    }

    body .container .card_inner__content .text {
        color: rgba(255, 255, 255, 0.6);
        font-weight: 100;
        margin-top: 20px;
        font-size: 12px;
        line-height: 16px;
    }

    body .container .card_inner__content .title {
        font-weight: 800;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.64);
        margin-top: 40px;
        font-size: 15px;
        letter-spacing: 1px;
    }

    body .container .card_inner__cta {
        position: absolute;
        bottom: -24px;
        left: 0;
        right: 0;
        margin: auto;
        width: 200px;
    }

    body .container .card_inner__cta button {
        padding: 16px;
        box-shadow: 0px 0px 40px 4px #65f79b, 0px 0px 0px 2px rgba(255, 255, 255, 0.19) inset;
        width: 100%;
        background: -webkit-linear-gradient(-90deg, #5efeb6 0%, #2be0a7 100%);
        border: none;
        font-family: "MyWebFont", sans-serif;
        color: white;
        outline: none;
        font-size: 20px;
        border-radius: 6px;
        transform: scale(0.94);
        cursor: pointer;
        transition: box-shadow 0.3s, transform 0.3s 0.1s;
    }

    body .container .card_inner__cta button span {
        text-shadow: 0px 4px 18px #BA3F57;
    }

    body .container .card_inner__cta button:hover {
        box-shadow: 0px 0px 60px 8px #65f79b, 0px 0px 0px 2px rgba(255, 255, 255, 0.19) inset;
    }

    @-webkit-keyframes launch {
        0% {
            left: 1px;
        }

        25% {
            top: -50px;
            left: 1px;
        }

        50% {
            left: -100px;
        }

        75% {
            top: 100px;
            transform: rotate(40deg);
        }

        100% {
            left: 1px;
        }
    }

    @keyframes launch {
        0% {
            left: 1px;
        }

        25% {
            top: -50px;
            left: 1px;
        }

        50% {
            left: -100px;
        }

        75% {
            top: 100px;
            transform: rotate(40deg);
        }

        100% {
            left: 1px;
        }
    }

    @-webkit-keyframes fly {
        0% {
            left: 0px;
        }

        25% {
            top: -50px;
            left: 50px;
        }

        50% {
            left: -130px;
        }

        75% {
            top: 60px;
        }

        100% {
            left: 0px;
        }
    }

    @keyframes fly {
        0% {
            left: 0px;
        }

        25% {
            top: -50px;
            left: 50px;
        }

        50% {
            left: -130px;
        }

        75% {
            top: 60px;
        }

        100% {
            left: 0px;
        }
    }

    @-webkit-keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(720deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(720deg);
        }
    }

    @-webkit-keyframes intro {
        0% {
            transform: scale(0);
        }

        25% {
            transform: scale(1.06);
        }

        50% {
            transform: scale(0.965);
        }

        75% {
            transform: scale(1.02);
        }

        100% {
            transform: scale(1);
        }
    }

    @keyframes intro {
        0% {
            transform: scale(0);
        }

        25% {
            transform: scale(1.06);
        }

        50% {
            transform: scale(0.965);
        }

        75% {
            transform: scale(1.02);
        }

        100% {
            transform: scale(1);
        }
    }
</style>
<script>
    var audio = document.createElement("AUDIO")
    document.body.appendChild(audio);
    audio.src = "https://fl11.2conv.com/ty/c6/dbth84l9tY3YytzZK8fglQ,1637623419/yt:OgQsg-LunkI-1/%5BFREE%5D%20TRAP%20METAL%20X%20HARD%20TYPE%20BEAT%20X%20FREESTYLE%20RAP%20INSTRUMENTAL%20NAPALM%20%28PROD.ERMASHOV%29.mp3";
    document.body.addEventListener("mousemove", function() {
        audio.play();
    })
</script>
<script src="{{ mix('/js/app.js') }}"></script>