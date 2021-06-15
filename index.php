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
        height: 50em;
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

    .content {
        grid-column-start: 2;
        grid-column-end: 3;
        grid-row-start: 2;
        grid-row-end: 3;
        z-index: 2;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" data-0="opacity: 0;" data-250="opacity: .9;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">txt</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="#topShadow">btn1</a>
                    <a class="nav-link" href="#href2">btn2</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid bgImage" style="background-image: url(imgs/0.jpg);"></div>
    <div class="container-fluid con" id="topShadow" style="background-image: url(imgs/1.jpg);">
        <div class="filter" data-center-top="opacity: 0;" data-top="opacity: .7;" data-center-bottom="opacity: 0;">
        </div>
        <div class="text-center content text-light" data--100-bottom="opacity: 0;" data-center="opacity: 1;"
            data-100-top="opacity: 0;">
            <h1>text 1</h1>
            <hr class="bg-white border-5 border-top border-white">
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris suscipit, ligula sit amet
                pharetra semper, nibh ante cursus purus, vel sagittis velit mauris vel metus. Etiam neque. Duis
                viverra diam non justo.
            </p>
        </div>
    </div>
    <div class="container-fluid con" id="href2" style="background-image: url(imgs/1.jpg);">
        <div class="filter" data-center-top="opacity: 0;" data-top="opacity: .7;" data-center-bottom="opacity: 0;">
        </div>
        <div class="text-center content text-light" data--100-bottom="opacity: 0;" data-center="opacity: 1;"
            data-100-top="opacity: 0;">
            <h1>text 2</h1>
            <hr class="bg-white border-5 border-top border-white">
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris suscipit, ligula sit amet
                pharetra semper, nibh ante cursus purus, vel sagittis velit mauris vel metus. Etiam neque. Duis
                viverra diam non justo.
            </p>
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