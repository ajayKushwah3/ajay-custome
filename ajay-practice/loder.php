<!DOCTYPE html>
<html>
<head>
	<title>Loder</title>
	<style type="text/css">
		#preloader {

    background-color: #fff;

    bottom: 0;

    left: 0;

    position: fixed;

    right: 0;

    top: 0;

    z-index: 2147483647;

    width: 100%;

    height: 100%;

}

#status {

    background-position: center center;

    background-repeat: no-repeat;

    height: auto;

    position: absolute;

    left: 50%;

    top: 50%;

    transform: translate(-50%,-50%);

    -webkit-transform: translate(-50%,-50%);

    -ms-transform: translate(-50%,-50%);

    -moz-transform: translate(-50%,-50%);

    -o-transform: translate(-50%,-50%);

}
	</style>
</head>
<body>
	<div id=preloader>
    <div id=status><div id=preloader_image class="image-loder" >
        <?php include("new_loding.php"); ?>
        </div>
    </div>
</div>

</body>
</html>

<script type="text/javascript">
	 jQuery(window).on('load', function() {
        jQuery("#status").fadeOut();
        jQuery("#preloader").delay(150).fadeOut("slow");
    });

</script>