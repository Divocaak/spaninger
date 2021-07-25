<!doctype html>
<html lang="cs">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title>Úvod</title>

    <link rel="stylesheet" href="styles/index.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3" data-0="opacity: 0;"
        data-250="opacity: .9;">
        <div class="container-fluid">
            <a class="navbar-brand text-uppercase" href="#">txt</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link text-uppercase" href="#shadow">btn1</a>
                    <a class="nav-link text-uppercase" href="#href2">btn2</a>
                </div>
            </div>
        </div>
    </nav>

    <video id="videoBG" autoplay muted loop>
        <source src="imgs/vid.mp4" type="video/mp4">
    </video>

    <div class="container-fluid con shadow" id="panelFirst" style="background-image: url(imgs/0.jpg);">
        <div class="filter" data-center-top="opacity: 0;" data-top="opacity: .7;">
        </div>
        <div class="text-center content content-grid-center text-light" data--100-bottom="opacity: 0;"
            data-center="opacity: 1;">
            <h1>O nás?</h1>
            <hr class="bg-white border-5 border-top border-white">
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris suscipit, ligula sit amet
                pharetra semper, nibh ante cursus purus, vel sagittis velit mauris vel metus. Etiam neque. Duis
                viverra diam non justo.
            </p>
            <a href="work.php" class="link-primary link">about?</a>
        </div>
    </div>

    <div class="container-fluid con shadow" id="href2" style="background-image: url(imgs/1.jpg);">
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
                        <b>SWIFT/BIC</b>: KÓD
                    </p>
                </div>
                <div class="col-6 p-5">
                    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://www.openstreetmap.org/export/embed.html?bbox=14.472690224647524%2C48.955921256492026%2C14.476230740547182%2C48.957492261620075&amp;layer=mapnik&amp;marker=48.95670620002507%2C14.474460399999998"
                        style="height:50vh; width: 40vw"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bgImage" style="background-image: url(imgs/2.jpg);"></div>

    <div class="container-fluid con shadow" id="href3" style="background-image: url(imgs/0.jpg);">
        <div class="filter" data-center-top="opacity: 0;" data-top="opacity: .7;">
        </div>
        <div class="text-center content content-grid-wide text-light" data--100-bottom="opacity: 0;"
            data-center="opacity: 1;">
            <div class="row">
                <div class="col-6 p-5">
                    <img src="imgs/0.jpg" class="img-fluid content-img">
                </div>
                <div class="col-6 p-5">
                    <h1>Pohledávky?</h1>
                    <hr class="bg-white border-5 border-top border-white">
                    <form>
                        <div class="row">
                            <div class=" col-6">
                                <input type="text" class="form-control customInput" id="fName" placeholder="Jméno">
                            </div>
                            <div class=" col-6">
                                <input type="text" class="form-control customInput" id="lName" placeholder="Příjmení">
                            </div>
                            <div class="mt-2 col-6">
                                <input type="email" class="form-control customInput" id="email" placeholder="E-mail">
                            </div>
                            <div class="mt-2 col-6">
                                <input type="tel" class="form-control customInput" id="phone" placeholder="Tel. číslo">
                            </div>
                            <div class="mt-2">
                                <label for="date" class="form-label">Požadovaný datum zahájení</label>
                                <input type="date" class="form-control customInput" id="date">
                            </div>
                            <div class="mt-2">
                                <textarea class="form-control customInput" id="text"
                                    placeholder="Rozměry, speciální požadavky, ..."></textarea>
                            </div>
                            <div class="mt-1">
                                <label for="files" class="form-label">Přílohy (výkresy, fotky)</label>
                                <input type="file" class="form-control customInput" id="files">
                            </div>
                            <div class="mt-2 col-6">
                                <label class="form-check-label" for="check">Souhlasím se zpracováním zadaných
                                    údajů</label>
                                <input type="checkbox" class="form-check-input mx-2 customInput" id="check">
                            </div>
                            <button type="submit" class="btn btn-primary col-6 mt-2 customInput">Odeslat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid con" id="href3" style="background-image: url(imgs/1.jpg);">
        <div class="filter" data-center-top="opacity: 0;" data-top="opacity: .7;">
        </div>
        <div class="text-center content content-grid-wide text-light" data--100-bottom="opacity: 0;"
            data-center="opacity: 1;">
            <h1>Kontakt</h1>
            <hr class="bg-white border-5 border-top border-white">
            <div id="carouselExampleIndicators" class="carousel slide w-50" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imgs/0.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="imgs/1.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="imgs/2.jpg" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <a href="#" class="link">Vstoupit do galerie</a>
        </div>
    </div>

    <footer class="footer mt-auto py-5 bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-4">
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
                </div>
                <div class="col-4 text-center">
                    <a href="#" class="link-primary link">panel link</a><br>
                    <a href="#" class="link-primary link">panel link</a><br>
                    <a href="#" class="link-primary link">panel link</a><br>
                    <a href="#" class="link-primary link">panel link</a><br>
                </div>
                <div class="col-4 text-center">
                    <a href="#" class="link-primary link">panel link</a><br>
                    <a href="#" class="link-primary link">panel link</a><br>
                    <a href="#" class="link-primary link">panel link</a><br>
                    <a href="#" class="link-primary link">panel link</a><br>
                </div>
            </div>
        </div>
    </footer>
    <div class="videoOver"></div>

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