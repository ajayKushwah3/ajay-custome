<!DOCTYPE html>
<html lang="zxx">
    <head>
    	<?php include("include/head.php")?>
    </head>
    <body>
    	<?php include("include/header.php")?>


        <section class="forms login">   
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="login-form">
                            <div class="right">
                                <form action="">
                                    <h1>OTP</h1>
                                    <p>Don't have an account? <a href="<?= base_url()?>/H-Login">Login</a> <br><span>60</span></p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="otp" placeholder="Enter OTP">
                                    </div>
                                        <p class="text-center">Send OTP On Your Number</p>                                    
                                    <button class="disabled_button btn default-btn">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
       
	    <?php include("include/footer.php")?>
        <?php include("include/foot.php")?>
        
    </body>
</html>