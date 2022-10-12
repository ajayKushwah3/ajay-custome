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

		<section class="forms otp">   
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="otp-form">
                            <div class="left">
                                <div class="content">
                                    <a href="<?= base_url()?>"><img src="<?= base_url()?>assets/user/img/aj-image/logo_codeelearning.png" alt=""></a>

                                    <div class="image">
                                    <img src="<?= base_url()?>assets/user/img/aj-image/login-page.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <form method="POST" action="<?= base_url().'User/verify_otp_frog' ?>" id="user_signup"> 
                                    <h1>OTP <span class="time" id="time" >60</span></h1>

                                    <center><span style="color: red;"><b><?= $this->session->flashdata('msg');?></b></span></center>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="name" name="otp"  placeholder="Enter Your OTP" required>
                                    </div>
                                   
                                    
                                    <button class="disabled_button btn btn-theme1" type="submit">Submit</button><br><br>
                                     <button class="disabled_button btn btn-theme1" id="resend" style="display: none;" >Resend</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include("include/footer.php")?>

        <?php include("include/foot.php")?>
        <?php if ($this->session->userdata('otp3')) {?>

    <script type="text/javascript">
         myTimer();

                $(document).on('click','#resend',function(){
            event.preventDefault();
              $.ajax({
                    type:'post',
                    url:'<?= base_url().'User/resend_otp_forgot' ?>',
                    success:function(data){
                      $('#otpverify').trigger('reset');
                      swal('success','OTP Resend Successfully','success');
                    }
              })
        });
        var timer;
        function myTimer() {
            var sec = 60
            clearInterval(timer);
            timer = setInterval(function() { 
            $('#time').text(sec--);
            if (sec == -1) {
              clearInterval(timer);
              $('#time').empty();
              $('#resend').show();
             } 
            }   , 1000);

        }


    $('#myModal1').modal('show');
    // alert('sdds');
   </script>

<?php } ?>
    </body>
</html>