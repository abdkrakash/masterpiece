@extends('/welcome')
@section('title' , 'Register')

@section ('content')
  <!--==================================================-->
        <!--start lovebird breadcumb Area-       abd   ->
    <!--==================================================-->
    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content" data-aos="flip-up">
                      <h4>Registration</h4>
                      <ul class="breadcumb-list">
                        <li><a href="home">Home</a></li>
                        <li class="list-arrow">&lt;</li>
                        <li>Registration</li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--==================================================-->
        <!--end lovebird breadcumb Area-                 abd->
    <!--==================================================-->


    <!--==================================================-->
	<!--Start mediful login page- ->
	<!--==================================================-->
  {{-- <section class="login-account-form-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 auth-container">
                <h3 class="single-form-title">Log in</h3>
                <form action="https://formspree.io/f/myyleorq" method="POST">
                  <input id="login-username" placeholder="Username" type="text" required="" name="name">
                  <input id="login-password" placeholder="Password" type="password" required="" name="password">
                    <div class="sign-in-checkbox-container d-flex justify-content-between">
                        <div class="stay-sign-in">
                          <input id="sign-in-checkbox" type="checkbox" name="sign-in-checkbox"><label for="sign-in-checkbox">Stay Logged in</label>
                        </div>
                          <span class="password-recovery-btn">Forgot Your Password?</span>
                        </button>
                    </div>
                    <button type="submit" class="single-form-btn">Log in</button>
                </form>
                <div class="other-option">
                    <p>Or continue with</p>
                    <div class="social-box d-flex justify-content-center">
                      <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                      <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                      <a href="#"><i class="fa-solid fa-g"></i></a>
                      <a href="#"><i class="fa-brands fa-pinterest-p"></i></a></div>
                </div>
                <p class="password-recovery-btn registration-link">Don't Have an account?
                    <a href="registration.html">Click here</a>
                </p>
            </div>
        </div>
    </div>
</section> --}}

  <!--==================================================-->
  <!--End mediful login page-->
  <!--==================================================-->


  
 

    

    

    <!-- Start Registration Form Section -->
    <section class="login-account-form-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 auth-container">
                    <h3 class="single-form-title">Register</h3>
                    <form action="https://formspree.io/f/myyleorq" method="POST">
                        <!-- First Name -->
                        <input id="register-first-name" placeholder="First Name" type="text" required="" name="first_name">
                        
                        <!-- Last Name -->
                        <input id="register-last-name" placeholder="Last Name" type="text" required="" name="last_name">
                        
                        <!-- Email -->
                        <input id="register-email" placeholder="Email" type="email" required="" name="email">
                        
                        <!-- Password -->
                        <input id="register-password" placeholder="Password" type="password" required="" name="password">
                        
                        <!-- Confirm Password -->
                        <input id="register-confirm-password" placeholder="Confirm Password" type="password" required="" name="confirm_password">
                        
                        <div class="sign-in-checkbox-container d-flex justify-content-between">
                            <div class="stay-sign-in">
                                <input id="terms-checkbox" type="checkbox" name="terms_checkbox" required="">

                                <label for="terms-checkbox">    I agree to the terms and conditions</label>
                            </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" class="single-form-btn">Register</button>
                    </form>
                    
                    <div class="other-option">
                        <p>Or continue with</p>
                        <div class="social-box d-flex justify-content-center">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#"><i class="fa-solid fa-g"></i></a>
                            <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                        </div>
                    </div>
                    
                    <p class="registration-link">Already have an account?
                        <a href="login.html">Click here to login</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

   

    <!-- JavaScript Files -->
    <script src="assets/js/vendor/jquery-3.6.2.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <script src="assets/js/ScrollToPlugin.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="venobox/venobox.js"></script>
    <script src="venobox/venobox.min.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/jquery.scrollUp.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/magnific-popup-js"></script>
    <script src="assets/js/jquery.barfiller.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/my.js"></script>
</body>
</html>

 


@endsection