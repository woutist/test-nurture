<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
    <meta charset="utf-8" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick.css">
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">
    <link rel="stylesheet" href="css/style.css">
<!--    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">-->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!--    <script src="js/jquery.js"></script>-->
    <script src="js/slick.js"></script>
    <script src="js/index.js"></script>
</head>
<body>
<div class="module-1">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Long headline to turn your visitors into users</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet dolor id leo hendrerit malesuada vitae nec quam. Fusce quis purus vitae ligula pretium sollicitudin ac vitae lorem. Fusce interdum eget nunc a pellentesque. </p>
                <h3>Feature</h3>
                <p>Gorgeous, high-quality video sharing on desktop, mobile, tablet</p>
            </div>
            <div class="col-sm-6">
                <div class="module-1__slider">
                    <?php for($i=0; $i<5; $i++) { ?>
                        <div>slide <?= $i ?></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class="container-fluid">-->
<!--    <div class="row">-->
<!--        <div class="col">-->
<!--            <h1>Homepage !</h1>-->
<!--            <p>Lorem ipsum...</p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!--<div class="module-1">-->
<!--    <div class="container module-1__wrap">-->
<!--        <div class="row">-->
<!--            <div class="col-sm-4 module-1__wrap-tile">-->
<!--                <div class="module-1__tile">-->
<!--                    <h2>Lorem ipsum heading 1</h2>-->
<!--                    <p>Lorem ipsum some example text 1</p>-->
<!--                    <a class="module-1__btn-1" href="#">Read more</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-sm-4 module-1__wrap-tile">-->
<!--                <div class="module-1__tile">-->
<!--                    <h2>Lorem ipsum heading 1</h2>-->
<!--                    <p>Lorem ipsum some example text 1 Lorem ipsum some example text 1 Lorem ipsum some example text 1</p>-->
<!--                    <a class="module-1__btn-1" href="#">Read more</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-sm-4 module-1__wrap-tile">-->
<!--                <div class="module-1__tile">-->
<!--                    <h2>Lorem ipsum heading 1</h2>-->
<!--                    <p>Lorem ipsum some example text 1 Lorem ipsum some example text 1</p>-->
<!--                    <a class="module-1__btn-1" href="#">Read more</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


</body>
</html>