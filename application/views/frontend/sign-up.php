<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
	<meta charset="utf-8">
	<meta name="author" content="algobasket">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Fully featured and complete ICO Dashboard template for ICO backend management.">
	<!-- Fav Icon  -->
	<link rel="shortcut icon" href="<?php echo base_url();?>/public/images/favicon.png">
	<!-- Site Title  -->
	<title><?php echo $this->lang->line('auth_signup');?></title>
	<!-- Vendor Bundle CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/vendor.bundle.css?ver=104">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/style.css?ver=104">

</head>

<body class="page-ath">

    <div class="page-ath-wrap">
        <div class="page-ath-content" style="background-color: #f2f3f1d1">
            <div class="page-ath-header">
							<a href="<?php echo base_url();?>" class="page-ath-logo">
									<img src="<?php echo base_url();?>/public/images/localstellars-logo2.png" srcset="<?php echo base_url();?>public/landing-2/images/logo.png 2x" alt="logo">
							</a>
            </div> 
            <div class="page-ath-form">
                <h2 class="page-ath-heading"><?php echo $this->lang->line('auth_page_ath_heading2');?></h2>
                <p><?php echo $this->session->flashdata('notify');?></p>
                <form action="<?php echo base_url();?>auth/signup" method="POST" autocomplete="none"> 
                    <div class="input-item">
                        <input type="text" placeholder="Your Real Name" class="input-bordered" name="fname" autocomplete="none" required>
                    </div>
                    <div class="input-item">
                        <input type="text" placeholder="Username" class="input-bordered" name="username" autocomplete="none" autofocus="none" autofill="none" required>
                    </div>
                    <div class="input-item">
                        <input type="text" placeholder="Your Email" class="input-bordered" name="email" autocomplete="no" autofill="off" required> 
                    </div>
                    <div class="input-item">
                        <input type="password" placeholder="Password" class="input-bordered" name="password" autocomplete="false" required>
                    </div>
                    <div class="input-item">
                        <input type="password" placeholder="Repeat Password" class="input-bordered" name="re-password" autocomplete="false" required>
                    </div>
                    <div class="input-item text-left">
                        <input class="input-checkbox input-checkbox-md termCondition" id="term-condition" type="checkbox" /> 
                        <label for="term-condition">I agree to Localstellars’s <a href="regular-page.html">Privacy Policy</a> &amp; <a href="regular-page.html"> Terms.</a></label>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block signupBtn" name="signup" value="<?php echo $this->lang->line('auth_create_account');?>"/>
                </form>

               <!--  <div class="sap-text"><span>Or Sign Up With</span></div>
                <ul class="row guttar-20px guttar-vr-20px">
                    <li class="col"><a href="<?php echo base_url();?>auth/facebook" class="btn btn-outline btn-dark btn-facebook btn-block"><em class="fab fa-facebook-f"></em><span>Facebook</span></a></li>
                    <li class="col"><a href="<?php echo base_url();?>auth/google" class="btn btn-outline btn-dark btn-google btn-block"><em class="fab fa-google"></em><span>Google</span></a></li>
                </ul> -->

                <div class="gaps-2x"></div>
                <div class="gaps-2x"></div>
                <div class="form-note">
                    Already have an account ? <a href="<?php echo base_url();?>auth/login"> <strong>Sign in instead</strong></a>
                </div>
            </div>
            <div class="page-ath-footer">
                <ul class="footer-links">
                    <li><a href="regular-page.html"><?php echo $this->lang->line('site_privacy_policy');?></a></li>
                    <li><a href="regular-page.html"><?php echo $this->lang->line('site_terms');?></a></li>
                    <li><?php echo $this->lang->line('site_copyright');?></li>
                </ul>
            </div>
        </div>
        <div class="page-ath-gfx">
           <!-- <div class="w-100 d-flex justify-content-center">
               <div class="col-md-8 col-xl-5">
                   <img src="<?php //echo base_url();?>/public/images/ath-gfx.png" alt="image">
               </div>
           </div>  -->
        </div>
    </div>

	<!-- JavaScript (include all script here) -->
	<script src="<?php echo base_url();?>/public/assets/js/jquery.bundle.js?ver=104"></script>
	<script src="<?php echo base_url();?>/public/assets/js/script.js?ver=104"></script>
    <script>
    (function($){
      'use strict';
         $('.signupBtn').attr("disabled", true);
         $('.termCondition').click(function(){
          var termCondition = $('.termCondition:checked').val();
          if(termCondition){
            $('.signupBtn').removeAttr("disabled");;
          }else{
            $('.signupBtn').attr("disabled", true);
          }
       });
       $('input[type="text"]').val('');
      })(jQuery);
    </script>
</body>
</html>
