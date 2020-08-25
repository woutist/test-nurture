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

</head>
<body>
<div class="module-1">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 d-flex flex-column module-1__col1">
                <h2>Long headline to turn your visitors into users</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet dolor id leo hendrerit malesuada vitae nec quam. Fusce quis purus vitae ligula pretium sollicitudin ac vitae lorem. Fusce interdum eget nunc a pellentesque. </p>
                <h3>Feature</h3>
                <p>Gorgeous, high-quality video sharing on desktop, mobile, tablet</p>
            </div>
            <div class="col-sm-6 module-1__col2">
                <div class="module-1__slider mb-0">
                    <?php for($i=0; $i<5; $i++) { ?>
                        <div style="background-image: url(media/img/cargo-floor.jpg);"><!--slide <?= $i ?>--></div>
                    <?php } ?>
                </div>
                <span class="module-1__info-slider"></span>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="js/slick.js"></script>
<script src="js/index.js"></script>
</body>
</html>