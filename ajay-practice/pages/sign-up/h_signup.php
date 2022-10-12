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
                                    <h1>Signup</h1>
                                    <p>Don't have an account? <a href="<?= base_url()?>/H-Login">Login</a></p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="number" name="number" placeholder="Contact Number">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="passwordla" name="password" placeholder="Password">
                                        <span toggle="#passwordla" class="fa fa-fw fa-eye field-icon toggle-password"></span>

                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="passwordl" name="c_password" placeholder="Confirm Password">
                                        <span toggle="#passwordl" class="fa fa-fw fa-eye field-icon toggle-password"></span>

                                    </div>
                                    <div class="Forgot-Password">
                                        <span class="checkbox">
                                            <input type="checkbox" class="aj-radio1" name="radiogroup-type" id="acolor-1">
                                            <label for="acolor-1" class="aj-radio1">I Have Accepted The Terms & Conditions</label>
                                        </span>
                                    </div>
                                    <button class="disabled_button btn default-btn">Sign In</button>
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