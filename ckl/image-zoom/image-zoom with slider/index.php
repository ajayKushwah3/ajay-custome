<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image zoom with slider </title>
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/magnific.min.css">
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>
<section class="section">
    
    <div class="SignProductBody">
        <div class="SPLeftCart">
            <div class="SPImageWrapper">
                <div class="SPMineImageView">
                    <div class="SPIitem">
                        <img src="assets/img/product_01.png" class="SignProductImage drift-demo-trigger" data-zoom="assets/img/product_01.png">
                        <div class="SPIGalleryPopup">
                            <?php for($i=1; $i<8; $i++){?>
                                    <a href="assets/img/product_0<?= $i ?>.png" class="magnificPopupGallery"></a>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="SPImageThumb">
                    <?php for($i=1; $i<8; $i++){?>
                        <div class="SPItemThumb">
                                <img src="assets/img/product_0<?= $i ?>.png" data-src="assets/img/product_0<?= $i ?>.png">
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="SPRightCart">
            <div class="SPRContent">
                <h1 class="product_title entry-title">Product one</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis similique nam labore dolor, assumenda atque culpa quasi temporibus natus voluptates dolorem molestiae a iste possimus fugiat eos itaque dolore suscipit? Totam deleniti
                    facilis optio quisquam vitae excepturi vel dolorum veniam explicabo libero tempora ipsa nisi adipisci, sequi laudantium iusto ab repellat doloribus aspernatur sit corporis esse rem dolorem nostrum! Esse! Reprehenderit, labore consequatur
                    animi, natus deleniti quae ipsam temporibus odio quis odit corrupti est placeat rerum similique. Itaque fugiat, error eum, expedita optio, reprehenderit recusandae commodi laboriosam quaerat maxime corporis? Ea excepturi possimus
                    iure debitis quidem dicta voluptatibus iste minima eligendi neque, veritatis quis ut iusto nemo incidunt facere nulla earum. Necessitatibus corporis quos accusamus explicabo incidunt voluptatum? Optio, repudiandae. Maiores ab praesentium,
                    necessitatibus magni molestias adipisci, commodi rem quasi, excepturi minima possimus voluptatem odio ea quas itaque nostrum nesciunt omnis eius veniam esse dicta atque expedita! Aliquam, ex totam? Laudantium minima rem repellendus
                    repudiandae possimus modi saepe recusandae quia fugit. Molestias debitis veniam fuga et praesentium eum quos, nulla, ipsam laboriosam vel laudantium excepturi doloremque voluptatum aspernatur veritatis ullam! Labore totam earum
                    atque possimus. Tenetur minima quaerat quidem optio architecto quos similique asperiores harum corrupti velit fuga, nemo mollitia eveniet esse ullam autem illo? Necessitatibus eum itaque natus! Fugit! Natus soluta quos non magnam
                    quasi officia repellat corrupti atque, optio, architecto eaque itaque debitis amet accusantium minima incidunt quo rem ea sunt quisquam ullam magni inventore, dicta error. Sequi. Omnis ab quibusdam expedita quaerat non ipsam, fuga
                    odit possimus repellat, maiores vel ratione, accusantium sapiente! Distinctio ducimus, quia sunt vitae iste a ut incidunt quisquam blanditiis deleniti alias iure! Aliquam perspiciatis, ducimus suscipit, exercitationem nisi porro
                    iure vitae dolorum labore consequatur, quas sit neque ipsam deserunt. Aliquam nesciunt mollitia eligendi tempore, velit quam beatae cumque, cupiditate repellendus cum neque!</p>
            </div>
        </div>
    </div>
    </section>


</body>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/Drift.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/script.js"></script>

</html>