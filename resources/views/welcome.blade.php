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

    <div class="container">
        <header>
            <!-- <h1>Pure <strong>CSS</strong> Progress</h1>
            <p>... a pretty liquid progress-bar.</p> -->
        </header>
        <section>
            <article>

                <div class="chart">
                    <div class="bar bar-30 lime">
                        <div class="face top">
                            <div class="growing-bar"></div>
                        </div>
                        <div class="face side-0">
                            <div class="growing-bar"></div>
                        </div>
                        <div class="face floor">
                            <div class="growing-bar"></div>
                        </div>
                        <div class="face side-a"></div>
                        <div class="face side-b"></div>
                        <div class="face side-1">
                            <div class="growing-bar"></div>
                        </div>
                    </div>
                </div>
                <p>30% tickets left</p>
            </article>

        </section>
    </div>


    <div class="container2" id="countdown">
        <ul>
            <li><span id="days"></span>Day</li>
            <li><span id="hours"></span>Hour</li>
            <li><span id="minutes"></span>Minute</li>
            <li><span id="seconds"></span>Second</li>
        </ul>
    </div>


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

                        <a href="{{Storage::url(\Session::get('fileName'))}}" id="fileRequest" class="btn btn-light" target="_blank">Download</a>
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

    body,
    html {
        height: 100%;
        min-height: 100%;
        max-width: 80%;
        overflow: hidden;
    }



    .container {
        color: #333;
        margin: 0 auto;
        text-align: center;
    }


    .container2 {
        position: absolute;
        color: #333;
        margin: 0 auto;
        text-align: center;
        left: 15em;
        top: 0em;
        width: 30em;
    }


    h1 {
        font-weight: normal;
        letter-spacing: .125rem;
        text-transform: uppercase;
    }

    li {
        display: inline-block;
        font-size: 1.5em;
        list-style-type: none;
        text-transform: uppercase;
    }

    li span {
        display: block;
        font-size: 2.5rem;
    }

    .emoji {
        display: none;
        padding: 1rem;
    }

    .emoji span {
        font-size: 4rem;
        padding: 0 .5rem;
    }

    @media all and (max-width: 768px) {
        h1 {
            font-size: calc(1.5rem * var(--smaller));
        }

        li {
            font-size: calc(1.125rem * var(--smaller));
        }

        li span {
            font-size: calc(3.375rem * var(--smaller));
        }
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
        background-image: url(https://thumbs.gfycat.com/AccomplishedMatureLemur-size_restricted.gif);

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


    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    caption,
    th,
    td {
        text-align: left;
        font-weight: normal;
        vertical-align: middle;
    }

    q,
    blockquote {
        quotes: none;
    }

    q:before,
    q:after,
    blockquote:before,
    blockquote:after {
        content: "";
        content: none;
    }

    a img {
        border: none;
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    main,
    menu,
    nav,
    section,
    summary {
        display: block;
    }

    em,
    strong {
        font-weight: 700;
    }

    input {
        display: none;
    }

    section {
        display: flex;
        justify-content: center;
        flex-direction: column;
        margin-bottom: 2em;
        padding: 0;
    }

    section:last-of-type {
        margin-bottom: 0;
    }

    section article {
        align-self: center;
        width: 20em;
        margin-bottom: 2em;
    }

    p {
        position: relative;
        bottom: -18.5em;
    }

    .chart {
        font-size: 1em;
        perspective: 1000px;
        perspective-origin: 50% 50%;
        -webkit-backface-visibility: visible;
        backface-visibility: visible;
    }

    .bar {
        font-size: 1em;
        position: relative;
        height: 10em;
        transition: all 0.3s ease-in-out;
        transform: rotateX(60deg) rotateY(0deg);
        transform-style: preserve-3d;
        bottom: -20em;
    }

    .bar .face {
        font-size: 2em;
        position: relative;
        width: 100%;
        height: 2em;
        background-color: rgba(254, 254, 254, 0.3);
    }

    .bar .face.side-a,
    .bar .face.side-b {
        width: 2em;
    }

    .bar .side-a {
        transform: rotateX(90deg) rotateY(-90deg) translateX(2em) translateY(1em) translateZ(1em);
    }

    .bar .side-b {
        transform: rotateX(90deg) rotateY(-90deg) translateX(4em) translateY(1em) translateZ(-1em);
        position: absolute;
        right: 0;
    }

    .bar .side-0 {
        transform: rotateX(90deg) rotateY(0) translateX(0) translateY(1em) translateZ(-1em);
    }

    .bar .side-1 {
        transform: rotateX(90deg) rotateY(0) translateX(0) translateY(1em) translateZ(3em);
    }

    .bar .top {
        transform: rotateX(0deg) rotateY(0) translateX(0em) translateY(4em) translateZ(2em);
    }

    .bar .floor {
        box-shadow: 0 0.1em 0.6em rgba(0, 0, 0, 0.3), 0.6em -0.5em 3em rgba(0, 0, 0, 0.3), 1em -1em 8em #fefefe;
    }

    .growing-bar {
        transition: all 0.3s ease-in-out;
        background-color: rgba(236, 0, 140, 0.6);
        width: 100%;
        height: 2em;
    }

    .bar.yellow .side-a,
    .bar.yellow .growing-bar {
        background-color: rgba(241, 196, 15, 0.6);
    }

    .bar.yellow .side-0 .growing-bar {
        box-shadow: -0.5em -1.5em 4em rgba(241, 196, 15, 0.8);
    }

    .bar.yellow .floor .growing-bar {
        box-shadow: 0em 0em 2em rgba(241, 196, 15, 0.8);
    }

    .bar.red .side-a,
    input[id='red']:checked~.chart .side-a,
    .bar.red .growing-bar,
    input[id='red']:checked~.chart .growing-bar {
        background-color: rgba(236, 0, 140, 0.6);
    }

    .bar.red .side-0 .growing-bar,
    input[id='red']:checked~.chart .side-0 .growing-bar {
        box-shadow: -0.5em -1.5em 4em rgba(236, 0, 140, 0.8);
    }

    .bar.red .floor .growing-bar,
    input[id='red']:checked~.chart .floor .growing-bar {
        box-shadow: 0em 0em 2em rgba(236, 0, 140, 0.8);
    }

    .bar.cyan .side-a,
    input[id='cyan']:checked~.chart .side-a,
    .bar.cyan .growing-bar,
    input[id='cyan']:checked~.chart .growing-bar {
        background-color: rgba(87, 202, 244, 0.6);
    }

    .bar.cyan .side-0 .growing-bar,
    input[id='cyan']:checked~.chart .side-0 .growing-bar {
        box-shadow: -0.5em -1.5em 4em #57caf4;
    }

    .bar.cyan .floor .growing-bar,
    input[id='cyan']:checked~.chart .floor .growing-bar {
        box-shadow: 0em 0em 2em #57caf4;
    }

    .bar.navy .side-a,
    .bar.navy .growing-bar {
        background-color: rgba(10, 64, 105, 0.6);
    }

    .bar.navy .side-0 .growing-bar {
        box-shadow: -0.5em -1.5em 4em rgba(10, 64, 105, 0.8);
    }

    .bar.navy .floor .growing-bar {
        box-shadow: 0em 0em 2em rgba(10, 64, 105, 0.8);
    }

    .bar.lime .side-a,
    input[id='lime']:checked~.chart .side-a,
    .bar.lime .growing-bar,
    input[id='lime']:checked~.chart .growing-bar {
        background-color: rgba(118, 201, 0, 0.6);
    }

    .bar.lime .side-0 .growing-bar,
    input[id='lime']:checked~.chart .side-0 .growing-bar {
        box-shadow: -0.5em -1.5em 4em #76c900;
    }

    .bar.lime .floor .growing-bar,
    input[id='lime']:checked~.chart .floor .growing-bar {
        box-shadow: 0em 0em 2em #76c900;
    }

    .bar.white .side-a,
    .bar.white .growing-bar {
        background-color: rgba(254, 254, 254, 0.6);
    }

    .bar.white .side-0 .growing-bar {
        box-shadow: -0.5em -1.5em 4em #fefefe;
    }

    .bar.white .floor .growing-bar {
        box-shadow: 0em 0em 2em #fefefe;
    }

    .bar.gray .side-a,
    .bar.gray .growing-bar {
        background-color: rgba(68, 68, 68, 0.6);
    }

    .bar.gray .side-0 .growing-bar {
        box-shadow: -0.5em -1.5em 4em #444;
    }

    .bar.gray .floor .growing-bar {
        box-shadow: 0em 0em 2em #444;
    }

    .chart .bar.yellow-face .face {
        background-color: rgba(241, 196, 15, 0.2);
    }

    .chart .bar.lime-face .face {
        background-color: rgba(118, 201, 0, 0.2);
    }

    .chart .bar.red-face .face {
        background-color: rgba(236, 0, 140, 0.2);
    }

    .chart .bar.navy-face .face {
        background-color: rgba(10, 64, 105, 0.2);
    }

    .chart .bar.cyan-face .face {
        background-color: rgba(87, 202, 244, 0.2);
    }

    .chart .bar.gray-face .face {
        background-color: rgba(68, 68, 68, 0.2);
    }

    .chart .bar.lightGray-face .face {
        background-color: rgba(145, 145, 145, 0.2);
    }

    .bar-0 .growing-bar {
        width: 0%;
    }

    .bar-1 .growing-bar {
        width: 1%;
    }

    .bar-2 .growing-bar {
        width: 2%;
    }

    .bar-3 .growing-bar {
        width: 3%;
    }

    .bar-4 .growing-bar {
        width: 4%;
    }

    .bar-5 .growing-bar {
        width: 5%;
    }

    .bar-6 .growing-bar {
        width: 6%;
    }

    .bar-7 .growing-bar {
        width: 7%;
    }

    .bar-8 .growing-bar {
        width: 8%;
    }

    .bar-9 .growing-bar {
        width: 9%;
    }

    .bar-10 .growing-bar {
        width: 10%;
    }

    .bar-11 .growing-bar {
        width: 11%;
    }

    .bar-12 .growing-bar {
        width: 12%;
    }

    .bar-13 .growing-bar {
        width: 13%;
    }

    .bar-14 .growing-bar {
        width: 14%;
    }

    .bar-15 .growing-bar {
        width: 15%;
    }

    .bar-16 .growing-bar {
        width: 16%;
    }

    .bar-17 .growing-bar {
        width: 17%;
    }

    .bar-18 .growing-bar {
        width: 18%;
    }

    .bar-19 .growing-bar {
        width: 19%;
    }

    .bar-20 .growing-bar,
    input[id='exercise-2']:checked~.chart.grid .exercise .bar:nth-child(1) .growing-bar {
        width: 20%;
    }

    .bar-21 .growing-bar {
        width: 21%;
    }

    .bar-22 .growing-bar {
        width: 22%;
    }

    .bar-23 .growing-bar {
        width: 23%;
    }

    .bar-24 .growing-bar {
        width: 24%;
    }

    .bar-25 .growing-bar,
    input[id='pos-0']:checked~.chart .growing-bar {
        width: 25%;
    }

    .bar-26 .growing-bar {
        width: 26%;
    }

    .bar-27 .growing-bar {
        width: 27%;
    }

    .bar-28 .growing-bar {
        width: 28%;
    }

    .bar-29 .growing-bar {
        width: 29%;
    }

    .bar-30 .growing-bar {
        width: 30%;
    }

    .bar-31 .growing-bar {
        width: 31%;
    }

    .bar-32 .growing-bar {
        width: 32%;
    }

    .bar-33 .growing-bar {
        width: 33%;
    }

    .bar-34 .growing-bar {
        width: 34%;
    }

    .bar-35 .growing-bar {
        width: 35%;
    }

    .bar-36 .growing-bar {
        width: 36%;
    }

    .bar-37 .growing-bar {
        width: 37%;
    }

    .bar-38 .growing-bar {
        width: 38%;
    }

    .bar-39 .growing-bar {
        width: 39%;
    }

    .bar-40 .growing-bar {
        width: 40%;
    }

    .bar-41 .growing-bar {
        width: 41%;
    }

    .bar-42 .growing-bar {
        width: 42%;
    }

    .bar-43 .growing-bar {
        width: 43%;
    }

    .bar-44 .growing-bar {
        width: 44%;
    }

    .bar-45 .growing-bar {
        width: 45%;
    }

    .bar-46 .growing-bar {
        width: 46%;
    }

    .bar-47 .growing-bar {
        width: 47%;
    }

    .bar-48 .growing-bar {
        width: 48%;
    }

    .bar-49 .growing-bar {
        width: 49%;
    }

    .bar-50 .growing-bar,
    input[id='pos-1']:checked~.chart .growing-bar,
    input[id='exercise-2']:checked~.chart.grid .exercise .bar:nth-child(2) .growing-bar,
    input[id='exercise-4']:checked~.chart.grid .exercise .bar:nth-child(1) .growing-bar,
    input[id='exercise-4']:checked~.chart.grid .exercise .bar:nth-child(2) .growing-bar {
        width: 50%;
    }

    .bar-51 .growing-bar {
        width: 51%;
    }

    .bar-52 .growing-bar {
        width: 52%;
    }

    .bar-53 .growing-bar {
        width: 53%;
    }

    .bar-54 .growing-bar {
        width: 54%;
    }

    .bar-55 .growing-bar {
        width: 55%;
    }

    .bar-56 .growing-bar {
        width: 56%;
    }

    .bar-57 .growing-bar {
        width: 57%;
    }

    .bar-58 .growing-bar {
        width: 58%;
    }

    .bar-59 .growing-bar {
        width: 59%;
    }

    .bar-60 .growing-bar {
        width: 60%;
    }

    .bar-61 .growing-bar {
        width: 61%;
    }

    .bar-62 .growing-bar {
        width: 62%;
    }

    .bar-63 .growing-bar {
        width: 63%;
    }

    .bar-64 .growing-bar {
        width: 64%;
    }

    .bar-65 .growing-bar {
        width: 65%;
    }

    .bar-66 .growing-bar {
        width: 66%;
    }

    .bar-67 .growing-bar {
        width: 67%;
    }

    .bar-68 .growing-bar {
        width: 68%;
    }

    .bar-69 .growing-bar {
        width: 69%;
    }

    .bar-70 .growing-bar,
    input[id='exercise-3']:checked~.chart.grid .exercise .bar:nth-child(1) .growing-bar,
    input[id='exercise-3']:checked~.chart.grid .exercise .bar:nth-child(2) .growing-bar,
    input[id='exercise-3']:checked~.chart.grid .exercise .bar:nth-child(3) .growing-bar {
        width: 70%;
    }

    .bar-71 .growing-bar {
        width: 71%;
    }

    .bar-72 .growing-bar {
        width: 72%;
    }

    .bar-73 .growing-bar {
        width: 73%;
    }

    .bar-74 .growing-bar {
        width: 74%;
    }

    .bar-75 .growing-bar,
    input[id='pos-2']:checked~.chart .growing-bar {
        width: 75%;
    }

    .bar-76 .growing-bar {
        width: 76%;
    }

    .bar-77 .growing-bar {
        width: 77%;
    }

    .bar-78 .growing-bar {
        width: 78%;
    }

    .bar-79 .growing-bar {
        width: 79%;
    }

    .bar-80 .growing-bar,
    input[id='exercise-2']:checked~.chart.grid .exercise .bar:nth-child(3) .growing-bar {
        width: 80%;
    }

    .bar-81 .growing-bar {
        width: 81%;
    }

    .bar-82 .growing-bar {
        width: 82%;
    }

    .bar-83 .growing-bar {
        width: 83%;
    }

    .bar-84 .growing-bar {
        width: 84%;
    }

    .bar-85 .growing-bar {
        width: 85%;
    }

    .bar-86 .growing-bar {
        width: 86%;
    }

    .bar-87 .growing-bar {
        width: 87%;
    }

    .bar-88 .growing-bar {
        width: 88%;
    }

    .bar-89 .growing-bar {
        width: 89%;
    }

    .bar-90 .growing-bar {
        width: 90%;
    }

    .bar-91 .growing-bar {
        width: 91%;
    }

    .bar-92 .growing-bar {
        width: 92%;
    }

    .bar-93 .growing-bar {
        width: 93%;
    }

    .bar-94 .growing-bar {
        width: 94%;
    }

    .bar-95 .growing-bar {
        width: 95%;
    }

    .bar-96 .growing-bar {
        width: 96%;
    }

    .bar-97 .growing-bar {
        width: 97%;
    }

    .bar-98 .growing-bar {
        width: 98%;
    }

    .bar-99 .growing-bar {
        width: 99%;
    }

    .bar-100 .growing-bar,
    input[id='pos-3']:checked~.chart .growing-bar,
    input[id='exercise-4']:checked~.chart.grid .exercise .bar:nth-child(3) .growing-bar {
        width: 100%;
    }

    /*
END // CHART'S RULES
*
*
*/
    .chart.grid {
        display: flex;
        flex-direction: row;
    }

    .chart.grid .exercise {
        flex: 0 0 100%;
        display: flex;
    }

    .chart.grid .exercise .bar {
        flex: 1;
        margin: 0 .5em;
    }

    .chart.grid .exercise .bar:nth-child(2) {
        z-index: 8;
        flex: 1 0 40%;
    }

    .chart.grid .exercise .bar:first-child {
        z-index: 10;
        margin-left: 0;
    }

    .chart.grid .exercise .bar:last-child {
        margin-right: 0;
    }

    .actions {
        display: flex;
        justify-content: center;
        margin-bottom: 0;
        padding-bottom: 2em;
        border-bottom: 1px dotted rgba(68, 68, 68, 0.4);
    }

    label {
        box-sizing: border-box;
        padding: 1em;
        margin: 0 .2em;
        cursor: pointer;
        transition: all .15s ease-in-out;
        color: #0a4069;
        border: 1px solid rgba(254, 254, 254, 0.6);
        border-radius: 0;
        flex: 1;
    }

    label:first-child {
        margin-left: 0;
        border-radius: .2em 0 0 .2em;
    }

    label:last-child {
        margin-right: 0;
        border-radius: 0 .2em .2em 0;
    }

    input[id='exercise-1']:checked~.actions label[for='exercise-1'],
    input[id='exercise-2']:checked~.actions label[for='exercise-2'],
    input[id='exercise-3']:checked~.actions label[for='exercise-3'],
    input[id='exercise-4']:checked~.actions label[for='exercise-4'],
    input[id='pos-0']:checked~.actions label[for='pos-0'],
    input[id='pos-1']:checked~.actions label[for='pos-1'],
    input[id='pos-2']:checked~.actions label[for='pos-2'],
    input[id='pos-3']:checked~.actions label[for='pos-3'],
    input[id='red']:checked~.actions label[for='red'],
    input[id='cyan']:checked~.actions label[for='cyan'],
    input[id='lime']:checked~.actions label[for='lime'] {
        color: #76c900;
        border: 1px solid #031523;
        background-color: #0a4069;
    }

    input[id='exercise-2']:checked~.chart.grid .exercise .bar:nth-child(1) {
        flex: 1 0 0%;
    }

    input[id='exercise-2']:checked~.chart.grid .exercise .bar:nth-child(2) {
        flex: 1;
    }

    input[id='exercise-2']:checked~.chart.grid .exercise .bar:nth-child(3) {
        flex: 1 0 30%;
    }

    input[id='exercise-3']:checked~.chart.grid .exercise .bar:nth-child(1),
    input[id='exercise-3']:checked~.chart.grid .exercise .bar:nth-child(2),
    input[id='exercise-3']:checked~.chart.grid .exercise .bar:nth-child(3) {
        flex: 1;
    }

    input[id='exercise-4']:checked~.chart.grid .exercise .bar:nth-child(1),
    input[id='exercise-4']:checked~.chart.grid .exercise .bar:nth-child(2) {
        flex: 1 0 30%;
    }

    input[id='exercise-4']:checked~.chart.grid .exercise .bar:nth-child(3) {
        flex: 1;
    }
</style>
<script>
    (function() {
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        const countDown = new Date('November 27, 18:00 2021').getTime(),
            x = setInterval(function() {

                const now = new Date().getTime(),
                    distance = countDown - now;

                document.getElementById("days").innerText = Math.floor(distance / (day)),
                    document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                    document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                    document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                //do something later when date is reached
                if (distance < 0) {
                    document.getElementById("headline").innerText = "It's my birthday!";
                    document.getElementById("countdown").style.display = "none";
                    document.getElementById("content").style.display = "block";
                    clearInterval(x);
                }
                //seconds
            }, 0)
    }());

    const countDownClock = (number = 100, format = 'seconds') => {

        const d = document;
        const daysElement = d.querySelector('.days');
        const hoursElement = d.querySelector('.hours');
        const minutesElement = d.querySelector('.minutes');
        const secondsElement = d.querySelector('.seconds');
        let countdown;
        convertFormat(format);


        function convertFormat(format) {
            switch (format) {
                case 'seconds':
                    return timer(number);
                case 'minutes':
                    return timer(number * 60);
                case 'hours':
                    return timer(number * 60 * 60);
                case 'days':
                    return timer(number * 60 * 60 * 24);
            }
        }

        function timer(seconds) {
            const now = Date.now();
            const then = now + seconds * 1000;

            countdown = setInterval(() => {
                const secondsLeft = Math.round((then - Date.now()) / 1000);

                if (secondsLeft <= 0) {
                    clearInterval(countdown);
                    return;
                };

                displayTimeLeft(secondsLeft);

            }, 1000);
        }

        function displayTimeLeft(seconds) {
            daysElement.textContent = Math.floor(seconds / 86400);
            hoursElement.textContent = Math.floor((seconds % 86400) / 3600);
            minutesElement.textContent = Math.floor((seconds % 86400) % 3600 / 60);
            secondsElement.textContent = seconds % 60 < 10 ? `0${seconds % 60}` : seconds % 60;
        }
    }


    /*
      start countdown
      enter number and format
      days, hours, minutes or seconds
    */
    countDownClock(2.7, 'days');
    const d = new Date('November 27, 2021 12:00');
    const now = new Date();

    if (d - now < 0) {
        document.getElementById('card1').style.display = "none";
    }

    // A $( document ).ready() block.
    $(document).ready(function() {

        if ($('#fileRequest').length) {
            window.onbeforeunload = function() {
                return true;
            };
        }



        $("#fileRequest").click(function() {
            var href = $(this).attr('href');
            // hope the server sets Content-Disposition: attachment!
            window.location = href;
        });
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