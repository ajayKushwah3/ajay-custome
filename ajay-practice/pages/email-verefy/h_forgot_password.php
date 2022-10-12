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
                                    <h1 style="font-size: 42px; ">Forgot Password</h1>
                                  
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="passwordla" name="password" placeholder="Password">
                                        <span toggle="#passwordla" class="fa fa-fw fa-eye field-icon toggle-password"></span>

                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="passwordl" name="c_password" placeholder="Confirm Password">
                                        <span toggle="#passwordl" class="fa fa-fw fa-eye field-icon toggle-password"></span>

                                    </div>
                                    
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