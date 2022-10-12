<!doctype html>
<html lang="zxx">
    <head>
    	<?php include("include/head.php")?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style type="text/css">
            .search-overlay.aj-search {
                    opacity: 0;
                    visibility: hidden;
                }
        </style>
    </head>
    <body>
        <div  class="auth-box">
                <div id="loginform">
                    <div class="logo">
                        <?php
        if($this->session->flashdata('check')){ ?>
            <script type="text/javascript">
                 swal({
                     title: "Opps",
                     text: "Please Login To See The Next Page!",
                     icon: "error",
                     timer: 2000
                     });

            </script>
        <?php }?>
    </div>
</div>
</div>
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

		<section class="forms login">   
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="login-form">
                            <div class="left">
                                <div class="content">
                                    <a href="<?= base_url()?>"><img src="<?= base_url()?>assets/user/img/aj-image/logo_codeelearning.png" alt=""></a>

                                    <div class="image">
                                    <img src="<?= base_url()?>assets/user/img/aj-image/login-page.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                 <form method="POST" action="<?= base_url().'User/check_login' ?>">
                                    <h1>Login</h1>
                                    <p>Don't have an account? <a href="<?= base_url().'User/Sign_Up'?>">Sign Up!</a></p>
                                    <center><span style="color: red;"><b><?= $this->session->flashdata('error');?></b></span></center>
                                     <center><span style="color: red;"><b><?= $this->session->flashdata('msssssg');?></b></span></center>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Email" name="email"  placeholder="Email or Mobile">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="passwordl"  name="password" placeholder="password">
                                        <span toggle="#passwordl" class="fa fa-fw fa-eye field-icon toggle-password"></span>

                                    </div>
                                    <div class="Forgot-Password">
                                        <span class="checkbox">
                                            <input type="checkbox" class="aj-radio1" name="radiogroup-type" id="acolor-1">
                                            <label for="acolor-1" class="aj-radio1">Remember</label>
                                        </span>
                                        <a href="<?= base_url().'Forgot-Password'?>">Forgot Password?</a>
                                    
                                    </div>
                                    <button class="disabled_button btn btn-theme1">Sign In</button>
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