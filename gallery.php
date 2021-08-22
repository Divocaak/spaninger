<!doctype html>
<html lang="cs">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Galerie</title>

    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/gallery.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</head>

<body>
    <img src="imgs/0.jpg" id="bg"/>

    <div class="modal fade" id="galModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nadpis</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" id="galModalContent">
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row transBack text-light">
        <div class="col-3 ps-4">
            <h3 class="display-3">Galerie</h3>
            <ul class="list-unstyled">
                <li class="mb-4"><a href="index.php" class="text-decoration-none link"><i class="bi bi-arrow-left-square"></i> Zpět</a></li>
                <?php
                    $catNames = ["Zahrady", "Kuchyně"];
                    foreach($catNames as $key=>$link){
                        echo '<li class="py-1"><a href=#"' . $key . '" class="text-decoration-none link">' . $link . '</a></li>';
                    }
            ?>
            </ul>
        </div>
        <div class="col-9">
            <div class="row">
                <?php
                    foreach (glob("imgs/gal/*") as $key=>$folder) {
                      echo "<h5 class='display-5' id='" . $key . "'>" . $catNames[$key] . "</h5>";
                      foreach (glob($folder . "/*") as $img) {
                        echo '<div class="card m-1 p-1 galCard bg-dark" style="width: 18rem;" data-selected-imgs="' . $img . '" data-selected-imgs-count="' . count(glob($img . "/*")) . '">
                                <img src="' . $img . '/0.jpg" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">info</p>
                                    <button type="button" class="btn btn-primary stretched-link" data-bs-toggle="modal"
                                        data-bs-target="#galModal">
                                    Zobrazit více
                                  </button>
                                  </div>
                                  </div>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <script>
    $(function() {
        $(".galCard").click(function() {
            $("#galModalContent").empty();
            for (let i = 0; i < $(this).data("selectedImgsCount"); i++) {
                $('#galModalContent').append('<div class="carousel-item' + ((i == 0) ? ' active' : '') +
                    '"><img class="d-block w-100" src="' + $(this).data("selectedImgs") + '/' + i +
                    '.jpg"/></div>');
            }
        });
    });
    </script>
</body>

</html>