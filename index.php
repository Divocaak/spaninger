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
    .bgImage {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 1080px;
    }

    .con {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 1080px;
    }

    html {
        scroll-behavior: smooth;
    }

    .overlap {
        position: relative;
        top: 0;
        height: 100%;
        width: 100%;
        z-index: 2;
    }

    .overlap h1{
        background-color:red;
    }

    .overlapBack{
        position: absolute;
        top: 0;
        left: 0;
        background-color: black;
        z-index: 1;
    }
    </style>
</head>

<body>

    <div class="container-fluid bgImage" style="background-image: url(imgs/0.jpg);"></div>
    <div class="container-fluid con" style="background-image: url(imgs/1.jpg);">
        <div class="overlap overlapBack" data-center-top="opacity: 0;" data-top="opacity: .7;"></div>
        <div class="p-5 text-center text-light overlap" data-0="opacity: 0;" data-500="opacity: 1;">
            <h1>Hello, world!</h1>
            <hr class="bg-white border-5 border-top border-white">
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris suscipit, ligula sit amet pharetra
                semper, nibh ante cursus purus, vel sagittis velit mauris vel metus. Etiam neque. Duis viverra diam
                non justo. Nulla non arcu lacinia neque faucibus fringilla. Maecenas fermentum, sem in pharetra
                pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus. Aenean vel massa quis
                mauris vehicula lacinia. Nullam sapien sem, ornare ac, nonummy non, lobortis a enim. Duis
                condimentum augue id magna semper rutrum. Morbi imperdiet, mauris ac auctor dictum, nisl ligula
                egestas nulla, et sollicitudin sem purus in lacus.
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