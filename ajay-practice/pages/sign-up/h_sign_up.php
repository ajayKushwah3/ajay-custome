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

		<section class="forms sign-up">   
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="sign-up-form">
                           
                            <div class="right">
                               <form method="POST" action="<?= base_url().'User/signup_function_user' ?>" id="user_signup"> 
								<div class="text-center">
									<a href="<?= base_url()?>"><img src="<?= base_url()?>assets/user/img/aj-image/logo_codeelearning.png" alt=""></a>
								</div>



                                    <h1>School Registration</h1>
                                    <p>Have an account? <a href="<?= base_url().'User/Sign_In'?>">Sign In!</a></p>
                                    <center><span><b><?= $this->session->flashdata('valid');?></b></span></center>

                                    <div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Enter your fullname" id="namefull" name="name" >
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<input type="date" class="form-control" placeholder="Enter your DOB" id="dob" name="dob">
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Enter your Age" id="age" name="age">
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<input type="text" class="textfield form-control" value="" id="contact" placeholder="Enter Your Contact no." name="contact" onkeypress="return isNumber(event)" />
											</div>
										</div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="textfield form-control" value="" id="enrollment" placeholder="Enter Your Enrollment no." name="enrollment"  />
                                            </div>
                                        </div>

										<div class="col-sm-4">
											<div class="form-group">
												<div class="form-group">
													<textarea class="form-control" id="address" placeholder="Enter Your Address" rows="2"  name="address"></textarea>
												</div>	
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<input type="Email" class="form-control" placeholder="Enter your Email" id="email" name="email">
											</div>
										</div>
							
										<div class="col-sm-4">
											<div class="form-group">
												<input type="text" class="form-control" placeholder=" Parents Name" id="pname" name="pname">
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Enter Your Occupation" id="occupation" name="occupation">
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<input type="text" class="textfield form-control" value="" minlength="10" maxlength="10" id="extra7" placeholder="Enter Your Parents Mobile no." name="pcontact" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Enter Your Unique ID" id="unique_id" name="unique_id" >
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Enter Your School Name" id="school" name="school_name">
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Enter Your City" id="city" name="city">
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Enter Your State" id="state" name="state">
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Enter Your Username" id="username" name="username">
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<input type="password" class="form-control" placeholder="Enter Your password" id="password" name="password">
                                                   <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<input type="password" class="form-control" placeholder="Enter Your Confirm Password" id="cpassword" name="c_password">
                                                   <span toggle="#cpassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
											</div>
										</div>
									</div>
                                    <div class="Forgot-Password">
                                        <span class="checkbox">
                                            <input type="checkbox" class="aj-radio1" name="radiogroup-type" id="acolor-1">
                                            <label for="acolor-1" class="aj-radio1">Remember</label>
                                        </span>
                                        
                                    
                                    </div>
                                    <button class="disabled_button btn btn-theme1">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include("include/footer.php")?>

        <?php include("include/foot.php")?>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
        <script type="text/javascript">
            $('#user_signup').validate({
                rules:{ 
                    name:{
                        required : true, 
                    },
                    email:{
                        required : true,
                        email : true,   
                    },
                    contact:{ 
                        required : true,
                        number:true,
                        minlength:10,
                        maxlength:10,                      
                    },
                    password :{
                      required : true,
                      minlength : 6,
                    },
                    c_password : {
                        minlength : 5,
                        equalTo : "#password"
                    },
                    address : {
                        required:true,
                    },
                    dob:{
                      required:true,
                    },
                    age:{
                      required:true,
                    },
                    pname:{
                      required:true,
                    },
                    occupation:{
                      required:true,
                    },
                    pcontact:{
                      required:true,
                    },
                    school_name:{
                      required:true,
                    },
                    city:{
                      required:true,
                    },

                    state:{
                      required: true,
                    },
                    username:{
                      required: true,
                    },
                 
                },
                messages:{
                 
                name:{
                    required: '<span style="color:red">Enter Your First Name</span>',
                }, 
                
                email:{
                    required:'<span style="color:red">Please Enter Email Address</span>',
                    email:'<span style="color:red">Please Enter Valid Email Address</span>',
                   
                },
                contact:{
                      required:'<span style="color:red">Please Enter Contact Number</span>',
                number:'<span style="color:red">Please Enter Valid Contact Number</span>',
                minlength:'<span style="color:red">Please Enter Valid Contact Number</span>',
                maxlength:'<span style="color:red">Please Enter Valid Contact Number</span>',
               
                    
                },
                password:{
                    required: '<span style="color:red">Enter Your Password</span>',
                    minlength : '<span style="color:"red">Enter Your Password min 6</span>',
                    
                },
                c_password:{
                  required: '<span style="color:red">Enter Confirm Password</span>',
                  minlength : '<span style="color:red">Enter Password To Confirm</span>',
                    equalTo :'<span style="color:red">Confirm Password Did Not Match With Password</span>',
                    
                },
                address:{
                  required: '<span style="color:red">Enter Your Address</span>',
                },
                dob:{
                      required: '<span style="color:red">Select Date Of Birth</span>',
                    },
                    age:{
                      required: '<span style="color:red">Enter Your Age</span>',
                    },
                    pname:{
                      required: '<span style="color:red">Enter Your Parent Name</span>',
                    },
                    occupation:{
                      required: '<span style="color:red">Enter Your Parent Occupation</span>',
                    },
                    pcontact:{
                      required: '<span style="color:red">Enter Your Parent Mobile </span>',
                    },
                    school_name:{
                      required: '<span style="color:red">Enter Your Selectchool Name </span>',
                    },
                    city:{
                      required: '<span style="color:red">Enter Your City </span>',
                    },
                    state:{
                      required: '<span style="color:red">Enter Your State </span>',
                    },
                    username:{
                      required: '<span style="color:red">Enter Your Username </span>',
                    },

                    
                },
                    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
    $("#unique_id").change(function(){
        var unique_id = $(this).val();
        /*alert(unique_id);*/

        if (unique_id != '') {                      
        $.ajax({
            type : "POST",
            url  : "<?= base_url().'User/getschool' ?>",
            data : {unique_id:unique_id},
            dataType:'json',
            success : function(data){
                   $('#school').val(data[0]['school_name']);
                    $("#city").val(data[0]['city']);
                    $("#state").val(data[0]['state']);
            }
        });
    }
});
});
</script>

    </body>
</html>