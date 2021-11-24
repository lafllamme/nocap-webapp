<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A place for young and talented artists">
    <title>No Cap Events</title>

    <!-- Fonts -->

    <!-- Styles -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body id="body">
    <div class='container'>
        <section class='card' id="card1">
            <div class='card_inner'>
                <div class='card_inner__circle'>
                    <img src='https://cdn-icons-png.flaticon.com/512/3523/3523059.png'>
                </div>
                <div class='card_inner__header'>
                    <img src='https://media2.giphy.com/media/3oKGzsVzLKlGHqxPwY/giphy.gif'>
                </div>
                <div class='card_inner__content'>
                    <div class='title'>Early Bird</div>
                    <div class='price'>5€</div>
                    <div class="text">ELA
                        <br>
                        GABAFROMEARTH
                        <br>
                        KING TRILL
                        <br>
                        LUIVI
                        <br>
                        Yung Soul
                        <br>
                        LGL GRAND
                        <br>
                        Arouna & Anis & Youssou & Eliezer
                        <br>
                        LAFLLAMME
                        <br>
                        Lethalgoth777 & Y.Porsche & Baby Shiva
                    </div>
                </div>
                <div class='card_inner__cta'>
                    <button onclick="document.getElementById('buytickets').click()">
                        <span>
                            <a id="buytickets" href="{{route('processTransaction', 'earlyBird')}}">Buy Now</a>
                        </span> </button>
                </div>
            </div>
        </section>

        <!-- <section class='card'>
            <div class='card_inner'>
                <div class='card_inner__circle'>
                    <img src='https://cdn-icons-png.flaticon.com/512/3522/3522624.png'>
                </div>
                <div class='card_inner__header'>
                    <img src='https://steamuserimages-a.akamaihd.net/ugc/960846733352612281/776D5A177B981530190959C9B8932E3095BA6A94/?imw=512&imh=287&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true'>
                </div>
                <div class='card_inner__content'>
                    <div class='title'>Regular</div>
                    <div class='price'>6€</div>
                    <div class="text">
                        LUIVI
                        <br>
                        KING TRILL
                        <br>
                        LAFLLAMME
                        <br>
                        ELA
                        <br>
                        Young Soul
                        <br>
                        LGL GRAND
                        <br>
                        Aoruna & Anis & Youssou & Elezier
                        <br>
                        Lethalgoth77 & Y.Porsche & Baby Shiva
                    </div>
                </div>
                <div class='card_inner__cta'>
                    <button onclick="document.getElementById('buytickets1').click()">
                        <span>
                            <a id="buytickets1" href="{{route('processTransaction', 'regular')}}">Buy Now</a>
                        </span>
                    </button>
                </div>
            </div>
        </section> -->
        <section class='card'>
            <div class='card_inner'>
                <div class='card_inner__circle'>
                    <img src='https://cdn-icons-png.flaticon.com/512/3522/3522242.png'>
                </div>
                <div class='card_inner__header'>
                    <img src='https://c.tenor.com/t0GDEK--GccAAAAC/travis-scott-highest-in-the-room.gif'>
                </div>
                <div class='card_inner__content'>
                    <div class='title'>Abendkasse</div>
                    <div class='price'>7€</div>
                    <div class="text">ELA
                        <br>
                        GABAFROMEARTH
                        <br>
                        KING TRILL
                        <br>
                        LUIVI
                        <br>
                        Yung Soul
                        <br>
                        LGL GRAND
                        <br>
                        Arouna & Anis & Youssou & Eliezer
                        <br>
                        LAFLLAMME
                        <br>
                        Lethalgoth777 & Y.Porsche & Baby Shiva
                    </div>
                </div>
                <div class='card_inner__cta'>
                    <button onclick="document.getElementById('buytickets2').click()">
                        <a id="buytickets2" href="{{route('processTransaction', 'abendKasse')}}">Buy Now</a>
                    </button>
                </div>
            </div>
        </section>

        <div class="bottomCenter">
            <center>
                @if(\Session::has('error'))
                <div class="alert alert-danger">{{ \Session::get('error') }}</div>
                {{ \Session::forget('error') }}
                @endif
                @if(\Session::has('success'))
                <div class="alert alert-success">{{ \Session::get('success') }}</div>

                <div class="my-sm-3">
                    <div class="col-md-12">
                        <h2 class="text">Das ist dein Ticket!</h2>

                        <!-- <button class="btn btn-success" type="submit">Generate</button> -->

                        <a href="{{\Session::get('url')}}" class="btn btn-light" download>Download</a>
                        <br><br>
                        <img src="{{\Session::get('url')}}" width="150" height="150">
                    </div>
                </div>

                {{ \Session::forget('success') }}
                @endif
            </center>
        </div>
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
        min-height: 100vh;
    }

    h2 {
        color: white;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    header.header {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        transform: translateY(-50%);
    }

    header.header h1 {
        font-size: 8rem;
        color: #222222;
        text-align: center;
        margin-top: 0;
        text-transform: uppercase;
        font-weight: 900;
    }

    .glitch-window {
        position: absolute;
        top: 0;
        left: -2px;
        width: 100%;
        color: #222222;
        text-shadow: 2px 0 #f9f8f8, -1px 0 yellow, -2px 0 green;
        overflow: hidden;
        animation: crt-me 2500ms infinite linear alternate-reverse;
    }

    @-webkit-keyframes crt-me {
        0% {
            clip: rect(31px, 9999px, 94px, 0);
        }

        10% {
            clip: rect(112px, 9999px, 76px, 0);
        }

        20% {
            clip: rect(85px, 9999px, 77px, 0);
        }

        30% {
            clip: rect(27px, 9999px, 97px, 0);
        }

        40% {
            clip: rect(64px, 9999px, 98px, 0);
        }

        50% {
            clip: rect(61px, 9999px, 85px, 0);
        }

        60% {
            clip: rect(99px, 9999px, 114px, 0);
        }

        70% {
            clip: rect(34px, 9999px, 115px, 0);
        }

        80% {
            clip: rect(98px, 9999px, 129px, 0);
        }

        90% {
            clip: rect(43px, 9999px, 96px, 0);
        }

        100% {
            clip: rect(82px, 9999px, 64px, 0);
        }
    }

    @keyframes crt-me {
        0% {
            clip: rect(31px, 9999px, 94px, 0);
        }

        10% {
            clip: rect(112px, 9999px, 76px, 0);
        }

        20% {
            clip: rect(85px, 9999px, 77px, 0);
        }

        30% {
            clip: rect(27px, 9999px, 97px, 0);
        }

        40% {
            clip: rect(64px, 9999px, 98px, 0);
        }

        50% {
            clip: rect(61px, 9999px, 85px, 0);
        }

        60% {
            clip: rect(99px, 9999px, 114px, 0);
        }

        70% {
            clip: rect(34px, 9999px, 115px, 0);
        }

        80% {
            clip: rect(98px, 9999px, 129px, 0);
        }

        90% {
            clip: rect(43px, 9999px, 96px, 0);
        }

        100% {
            clip: rect(82px, 9999px, 64px, 0);
        }
    }

    .inspiration-button {
        font-family: Helvetica, sans-serif;
        position: absolute;
        display: inline-block;
        z-index: 100;
        bottom: 1rem;
        left: 50%;
        bottom: -15%;
        transform: translate(-50%, 0%);
        color: white;
        text-decoration: none;
        padding: 0.75rem 1rem;
        border-radius: 80px;
        background: linear-gradient(270deg, #1edc7a, #04610f);
        transition: transform 250ms ease;
    }

    .inspiration-button:hover,
    .inspiration-button:focus,
    .inspiration-button:active {
        transform: translate(-50%, -10%);
    }

    .bottomCenter {
        position: absolute;
        top: 140%;
        bottom: 0;
        left: -35%;
        right: 0;
        margin: auto;
        width: 600px;
        height: 30%;
    }

    .topCenter {
        position: fixed;
        top: -60%;
        bottom: 0%;
        left: 0%;
        right: 0;
        margin: auto;
        width: 100%;
        height: 30%;
        border: 2px solid green;
        font-family: "Raleway", sans-serif;
        background-color: #65f79b;
    }

    body {
        font-family: "MyWebFont";
        /* Location of the image */
        background-image: url(https://thumbs.gfycat.com/DefenselessFrighteningButterfly-size_restricted.gif);

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
        font-size: 10px;
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
    const d = new Date('November 27, 2021 12:00');
    const now = new Date();

    if (d - now < 0) {
        document.getElementById('card1').style.display = "none";
    }

    // A $( document ).ready() block.
    $(document).ready(function() {
        $("header").append("<div class='glitch-window'></div>");
        //fill div with clone of real header
        $("h1.glitched").clone().appendTo(".glitch-window");
    });
    var audio = document.createElement("AUDIO")
    document.body.appendChild(audio);
    audio.src = "https://media1.vocaroo.com/mp3/1ogAi70YcA6n";
    audio.loop = false;
    document.body.addEventListener("mousemove", function() {
        audio.play();
    });
</script>
<script src="{{ mix('/js/app.js') }}"></script>