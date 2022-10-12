<!doctype html>
<html lang="zxx">
    <head>
    	<?php include("include/head.php")?>
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
		<section class="forms reset-password">   
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="reset-password-form">
                            <div class="left">
                                <div class="content">
                                    <a href="<?= base_url()?>"><img src="<?= base_url()?>assets/user/img/aj-image/logo_codeelearning.png" alt=""></a>

                                    <div class="image">
                                    <img src="<?= base_url()?>assets/user/img/aj-image/login-page.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <form onsubmit="return validateForm()" action="<?= base_url().'User/set_new_pass?id='.$_GET['id'] ?>" method="POST">
                                    <h1>Reset Password</h1>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id = "pswd1" placeholder="Enter New Password" name="password" >
                                        <span toggle="#passwordp" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                     <span id = "message1" style="color:red"> </span> 

                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control" id = "pswd2" placeholder="Enter Confirm Password" name="con_password" >
                                        <span toggle="#passwordcp" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                        <span id = "message2" style="color:red"> </span> 

                                    </div>
                                    <button class="disabled_button btn btn-theme1" type="submit">Submit</button>
                                    <span class="helper-text">Know your password? <a href="<?php echo base_url('admin/login'); ?>">Login</a></span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include("include/foot.php")?>
           <script>
function validateForm() {
   
    var pw1 = document.getElementById("pswd1").value;
    var pw2 = document.getElementById("pswd2").value;
    

    //check empty confirm password field
    if(pw2 == "") {
      document.getElementById("message2").innerHTML = "**Enter the password please!";
      return false;
    } 
   
    //minimum password length validation
    if(pw1.length < 5) {
      document.getElementById("message1").innerHTML = "**Password length must be atleast 8 characters";
      return false;
    }

    //maximum length of password validation
    if(pw1.length > 15) {
      document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";
      return false;
    }
  // alert(pw1+' '+pw2);
    if(pw1 != pw2) {
      document.getElementById("message2").innerHTML = "**Passwords are not same";
      return false;
    }

 }

</script>
    </body>
</html>