<!doctype html>
<html lang="cs">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title>Úvod</title>

    <style>
    html {
        scroll-behavior: smooth;
    }

    .bgImage,
    .con {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 75vh
    }

    @media screen and (max-width: 568px) {
        .bgVidWrapper {
            display: none;
        }
    }

    @media screen and (max-width: 1366px) and (min-width: 569px) {
        #topShadow {
            margin-top: 42vh;
        }
    }

    @media screen and (min-width: 1366px) {
        #topShadow {
            margin-top: 100vh;
        }
    }


    .bgImage {
        background-attachment: fixed;
    }

    .con {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: 1fr 1fr 1fr;
    }

    #topShadow {
        -webkit-box-shadow: 0px 0px 15px 0px #000000;
        box-shadow: 0px 0px 15px 0px #000000;
    }

    .filter {
        grid-column-start: 1;
        grid-column-end: 4;
        grid-row-start: 1;
        grid-row-end: 4;
        background-color: black;
        z-index: 1;
        margin: 0px -12px 0px -12px;
    }

    .content-grid-center {
        grid-column-start: 2;
        grid-column-end: 3;
        grid-row-start: 2;
        grid-row-end: 3;
    }

    .content-grid-wide {
        grid-column-start: 1;
        grid-column-end: 4;
        grid-row-start: 2;
        grid-row-end: 3;
    }

    .content {
        z-index: 2;
    }

    .content-img {
        -webkit-box-shadow: 0px 0px 15px 0px #000000;
        box-shadow: 0px 0px 15px 0px #000000;
    }

    figure {
        margin: 0;
        position: relative;
    }

    video {
        width: 100%;
        max-width: 100%;
    }

    .bgVidWrapper {
        position: fixed;
        bottom: 0;
        right: 0;
        height: auto;
        width: auto;
        min-height: 100%;
        min-width: 100%;
        z-index: -9999;
    }

    .link {
        text-decoration: none;
        padding: 5px;
        transition: .5s ease-in-out;

        color: #FFD700;
        box-shadow: inset 0 0 0 0 #FFD700;
    }

    .link:hover {
        color: black;
        box-shadow: inset 100px 0 0 0 #FFD700;
    }
    </style>
</head>

<body style="background-color:black;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3" data-0="opacity: 0;" data-250="opacity: .9;">
        <div class="container-fluid">
            <a class="navbar-brand text-uppercase" href="#">txt</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link text-uppercase" href="#topShadow">btn1</a>
                    <a class="nav-link text-uppercase" href="#href2">btn2</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="bgVidWrapper">
        <figure>
            <video loop="loop" muted="muted" autoplay="autoplay">
                <source src="imgs/vid.mp4" />
            </video>
        </figure>
    </div>

    <div class="container-fluid con" id="topShadow" style="background-image: url(imgs/0.jpg);">
        <div class="filter" data-center-top="opacity: 0;" data-top="opacity: .7;">
        </div>
        <div class="text-center content content-grid-center text-light" data--100-bottom="opacity: 0;"
            data-center="opacity: 1;">
            <h1>text 1</h1>
            <hr class="bg-white border-5 border-top border-white">
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris suscipit, ligula sit amet
                pharetra semper, nibh ante cursus purus, vel sagittis velit mauris vel metus. Etiam neque. Duis
                viverra diam non justo.
            </p>
            <a href="work.php" class="link-primary link">work?</a>
        </div>
    </div>

    <div class="container-fluid con" id="href2" style="background-image: url(imgs/1.jpg);">
        <div class="filter" data-center-top="opacity: 0;" data-top="opacity: .7;">
        </div>
        <div class="text-center content content-grid-wide text-light" data--100-bottom="opacity: 1;"
            data-center="opacity: 0;">
            <div class="row">
                <div class="col-6 p-5">
                    <h1>Kontakt</h1>
                    <hr class="bg-white border-5 border-top border-white">
                    <p style="text-align:left; margin-left:15vw;">
                        <b>Sídlo firmy</b> – NÁZEV<br>
                        ADRESA<br>
                        ADRESA<br>
                        PSČ<br>
                        <br>
                        <b>Fakturační adresa</b> – NÁZEV<br>
                        ADRESA<br>
                        ADRESA<br>
                        PSČ<br>
                        <br>
                        <b>IČ</b>: 12345678<br>
                        <b>DIČ</b>: CZ12345678<br>
                        <br>
                        <b>Email</b>: MAIL<br>
                        <b>Kontaktní tel.</b>: 123 456 789<br>
                        <br>
                        <b>Bankovní spojení</b> - NÁZEV<br>
                        <b>BANKA číslo b.ú.</b>: 1122334455/1234,<br>
                        <b>IBAN</b>: KÓD<br>
                        <b>SWIFT/BIC</b>: KÓD<br>
                    </p>
                </div>
                <div class="col-6 p-5">
                    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://www.openstreetmap.org/export/embed.html?bbox=14.472690224647524%2C48.955921256492026%2C14.476230740547182%2C48.957492261620075&amp;layer=mapnik&amp;marker=48.95670620002507%2C14.474460399999998"
                        style="height:50vh; width: 40vw"></iframe><br /><small><a
                            href="https://www.openstreetmap.org/?mlat=48.95671&amp;mlon=14.47446#map=19/48.95671/14.47446">Zobrazit
                            větší mapu</a></small>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid bgImage" style="background-image: url(imgs/2.jpg);"></div>

    <div class="container-fluid con" id="href3" style="background-image: url(imgs/0.jpg);">
        <div class="filter" data-center-top="opacity: 0;" data-top="opacity: .7;">
        </div>
        <div class="text-center content content-grid-wide text-light" data--100-bottom="opacity: 0;"
            data-center="opacity: 1;">
            <div class="row">
                <div class="col-6 p-5">
                    <img src="imgs/0.jpg" class="img-fluid content-img">
                </div>
                <div class="col-6 p-5">
                    <h1>Kontakt</h1>
                    <hr class="bg-white border-5 border-top border-white">
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris suscipit, ligula sit amet
                        pharetra semper, nibh ante cursus purus, vel sagittis velit mauris vel metus. Etiam neque.
                        Duis
                        viverra diam non justo.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid con" id="href3" style="background-image: url(imgs/1.jpg);">
        <div class="filter" data-center-top="opacity: 0;" data-top="opacity: .7;">
        </div>
        <div class="text-center content content-grid-wide text-light" data--100-bottom="opacity: 0;"
            data-center="opacity: 1;">
            <div class="row">
                <div class="col-6 p-5">
                    <h1>Kontakt</h1>
                    <hr class="bg-white border-5 border-top border-white">
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris suscipit, ligula sit amet
                        pharetra semper, nibh ante cursus purus, vel sagittis velit mauris vel metus. Etiam neque.
                        Duis
                        viverra diam non justo.
                    </p>
                </div>
                <div class="col-6 p-5">
                    <img src="imgs/1.jpg" class="img-fluid content-img">
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="skrollr/dist/skrollr.min.js"></script>
    <script type="text/javascript">
    var s = skrollr.init();
    </script>
</body>

</html>