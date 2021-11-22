<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

</head>
<div class='container'>
    <section class='card'>
        <div class='card_inner'>
            <div class='card_inner__circle'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/rocket.png'>
            </div>
            <div class='card_inner__header'>
                <img src='https://i.pinimg.com/originals/68/eb/1f/68eb1f0348df1617f9536e17b82c87f0.jpg'>
            </div>
            <div class='card_inner__content'>
                <div class='title'>Early Bird</div>
                <div class='price'>7€</div>
                <div class="text">Some Content</div>
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
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/cog.png'>
            </div>
            <div class='card_inner__header'>
                <img src='https://wallpaperaccess.com/full/903683.jpg'>
            </div>
            <div class='card_inner__content'>
                <div class='title'>Regular</div>
                <div class='price'>9€</div>
                <div class="text">Some Content</div>
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
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/paperplane.png'>
            </div>
            <div class='card_inner__header'>
                <img src='https://cdn.wallpapersafari.com/44/97/gBN20r.jpg'>
            </div>
            <div class='card_inner__content'>
                <div class='title'>Abendkasse</div>
                <div class='price'>12€</div>
                <div class="text">Some Content</div>
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
    @import url(https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,300);

    body {
        font-family: "Yanone Kaffeesatz", sans-serif;
        /* Location of the image */
        background-image: url(https://data.whicdn.com/images/218810909/original.gif);

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
        margin-right: 30px;
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
        background: -webkit-linear-gradient(45deg, #c96881 0%, #f7b695 100%);
    }

    body .container .card:nth-of-type(2) {
        background: -webkit-linear-gradient(45deg, #6B6ECC 0%, #89BFDF 100%);
    }

    body .container .card:nth-of-type(3) {
        background: -webkit-linear-gradient(45deg, #81B77B 0%, #A3E3C3 100%);
    }

    body .container .card:hover .card_inner__header img {
        left: -50px;
        transition: all 3.4s linear;
    }

    body .container .card:hover .card_inner__cta button {
        transform: scale(1);
    }

    body .container .card:nth-of-type(1):hover .card_inner__circle img {
        -webkit-animation: launch 1s forwards;
        animation: launch 1s forwards;
    }

    body .container .card:nth-of-type(1) .card_inner__circle img {
        top: 22px;
        left: 1px;
    }

    body .container .card:nth-of-type(2):hover .card_inner__circle img {
        -webkit-animation: spin 1s forwards;
        animation: spin 1s forwards;
    }

    body .container .card:nth-of-type(2) .card_inner__circle img {
        top: 22px;
    }

    body .container .card:nth-of-type(3):hover .card_inner__circle img {
        -webkit-animation: fly 1s forwards;
        animation: fly 1s forwards;
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
        font-size: 70px;
        text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.42);
    }

    body .container .card_inner__content .text {
        color: rgba(255, 255, 255, 0.6);
        font-weight: 100;
        margin-top: 20px;
        font-size: 13px;
        line-height: 16px;
    }

    body .container .card_inner__content .title {
        font-weight: 800;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.64);
        margin-top: 40px;
        font-size: 25px;
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
        box-shadow: 0px 0px 40px 4px #F76583, 0px 0px 0px 2px rgba(255, 255, 255, 0.19) inset;
        width: 100%;
        background: -webkit-linear-gradient(-90deg, #fe5e7d 0%, #e5375b 100%);
        border: none;
        font-family: "Yanone Kaffeesatz", sans-serif;
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
        box-shadow: 0px 0px 60px 8px #F76583, 0px 0px 0px 2px rgba(255, 255, 255, 0.19) inset;
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

    .flip-clock {
        text-align: center;
        perspective: 400px;
        margin: 20px auto;
    }

    .flip-clock *,
    .flip-clock *:before,
    .flip-clock *:after {
        box-sizing: border-box;
    }

    .flip-clock__piece {
        display: inline-block;
        margin: 0 5px;
    }

    .flip-clock__slot {
        font-size: 2vw;
    }

    .card {
        display: block;
        position: relative;
        padding-bottom: 0.72em;
        font-size: 9vw;
        line-height: 0.95;
    }

    .card__top,
    .card__bottom,
    .card__back::before,
    .card__back::after {
        display: block;
        height: 0.72em;
        color: #ccc;
        background: #222;
        padding: 0.25em 0.25em;
        border-radius: 0.15em 0.15em 0 0;
        backface-visiblity: hidden;
        transform-style: preserve-3d;
        width: 1.8em;
        transform: translateZ(0);
    }

    .card__bottom {
        color: #FFF;
        position: absolute;
        top: 50%;
        left: 0;
        border-top: solid 1px #000;
        background: #393939;
        border-radius: 0 0 0.15em 0.15em;
        pointer-events: none;
        overflow: hidden;
    }

    .card__bottom::after {
        display: block;
        margin-top: -0.72em;
    }

    .card__back::before,
    .card__bottom::after {
        content: attr(data-value);
    }

    .card__back {
        position: absolute;
        top: 0;
        height: 100%;
        left: 0%;
        pointer-events: none;
    }

    .card__back::before {
        position: relative;
        z-index: -1;
        overflow: hidden;
    }

    .flip .card__back::before {
        -webkit-animation: flipTop 0.3s cubic-bezier(0.37, 0.01, 0.94, 0.35);
        animation: flipTop 0.3s cubic-bezier(0.37, 0.01, 0.94, 0.35);
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        transform-origin: center bottom;
    }

    .flip .card__back .card__bottom {
        transform-origin: center top;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        -webkit-animation: flipBottom 0.6s cubic-bezier(0.15, 0.45, 0.28, 1);
        animation: flipBottom 0.6s cubic-bezier(0.15, 0.45, 0.28, 1);
    }

    @-webkit-keyframes flipTop {
        0% {
            transform: rotateX(0deg);
            z-index: 2;
        }

        0%,
        99% {
            opacity: 0.99;
        }

        100% {
            transform: rotateX(-90deg);
            opacity: 0;
        }
    }

    @keyframes flipTop {
        0% {
            transform: rotateX(0deg);
            z-index: 2;
        }

        0%,
        99% {
            opacity: 0.99;
        }

        100% {
            transform: rotateX(-90deg);
            opacity: 0;
        }
    }

    @-webkit-keyframes flipBottom {

        0%,
        50% {
            z-index: -1;
            transform: rotateX(90deg);
            opacity: 0;
        }

        51% {
            opacity: 0.99;
        }

        100% {
            opacity: 0.99;
            transform: rotateX(0deg);
            z-index: 5;
        }
    }

    @keyframes flipBottom {

        0%,
        50% {
            z-index: -1;
            transform: rotateX(90deg);
            opacity: 0;
        }

        51% {
            opacity: 0.99;
        }

        100% {
            opacity: 0.99;
            transform: rotateX(0deg);
            z-index: 5;
        }
    }
</style>
<script>
    
</script>
<script src="{{ mix('/js/app.js') }}"></script>