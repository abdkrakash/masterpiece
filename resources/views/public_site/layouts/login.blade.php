@extends('/welcome')
@section('title' , 'Shop')

@section ('content')
 <!--==================================================-->
        <!--start lovebird breadcumb Area-         abd->
    <!--==================================================-->
    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content" data-aos="flip-up">
                      <h4>Login</h4>
                      <ul class="breadcumb-list">
                        <li><a href="/home">Home</a></li>
                        <li class="list-arrow">&lt;</li>
                        <li>Login</li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--==================================================-->
        <!--end lovebird breadcumb Area-   abd ->
    <!--==================================================-->



    <!--==================================================-->
	<!--Start mediful login page-->
	<!--==================================================-->
  <section class="login-account-form-section">
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
</section>

  <!--==================================================-->
  <!--End mediful login page-->
  <!--==================================================-->


@endsection