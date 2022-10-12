<!doctype html>
<html lang="zxx">
    <head>
    	<?php include("include/head.php")?>
        <style type="text/css">
            .search-overlay.aj-search {
                    opacity: 0;
                    visibility: hidden;
                }
        </style>
    </head>
    <body>
		<div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
         <?php include("include/header.php")?>

		<section class="forms forgot-password">   
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="forgot-password-form">
                            <div class="left">
                                <div class="content">
                                    <a href="<?= base_url()?>"><img src="<?= base_url()?>assets/user/img/aj-image/logo_codeelearning.png" alt=""></a>

                                    <div class="image">
                                    <img src="<?= base_url()?>assets/user/img/aj-image/login-page.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                             <form method="POST" action="<?= base_url().'User/send_otp_forgot' ?>">
                                    <h1>Forgot Password</h1>
                                    <center><span style="color: red;"><b><?= $this->session->flashdata('msssssg');?></b></span></center>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  onkeypress="return isNumber(event)" minlength="10" maxlength="10" id="name" name="forgotMobile"  placeholder="Enter Your Contact Number!">
                                    </div>
                                   
                                    
                                    <button class="disabled_button btn btn-theme1" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include("include/footer.php")?>

        <?php include("include/foot.php")?>
        <script type="text/javascript">
    function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
    </body>
</html>