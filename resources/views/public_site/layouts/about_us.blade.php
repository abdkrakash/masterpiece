@extends('/welcome')
@section('title' , 'About Us')

@section ('content')
  <!--==================================================-->
         <!--start lovebird breadcumb Area-->
      <!--==================================================-->
      <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content" data-aos="flip-up">
                      <h4>About Us</h4>
                      <ul class="breadcumb-list">
                        <li><a href="/">Home</a></li>
                        <li class="list-arrow">&lt;</li>
                        <li>About Us</li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   <!--==================================================-->
       <!--end lovebird breadcumb Area-->
    <!--==================================================-->


    
    <!--==================================================-->
         <!--start lovebird about us area         abd -->
      <!--==================================================-->
      <div class="about-us-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumb" data-aos="zoom-in">
                        <img src="assets/images/inner/about-img1.png" alt="thumb">
                        <div class="about-thu">
                            <img src="assets/images/inner/about-img2.png" alt="thumb">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content" data-aos="flip-up">
                        <div class="section-title text-left cursor-scale" data-aos="flip-up">
                            <div class="section-main-title cursor-scale">
                              <h3>About Us</h3>
                            </div>
                            <div class="section-title-desc">
                                <p>

                                  White Wedding is a unique eCommerce platform designed to simplify wedding planning by offering a seamless, all-in-one booking experience. Unlike traditional marketplaces, we provide fixed-price wedding services directly to couples, ensuring a hassle-free process without the need to contact multiple vendors. From venue booking to beauty services and luxury car rentals, couples can browse, select, and pay for everything they need in one place. We handle all service fulfillment through trusted vendors, giving you a stress-free way to plan your big day with confidence and ease.
                                </p>
                            </div>
                        </div>
                  
                        {{-- <div class="about-us-btn">
                            <a href="/about_us">Discover more</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
       <!--End lovebird about us area            abd-->
    <!--==================================================-->



   <!--==================================================-->
<!-- Start Why Choose Us Section -->
<!--==================================================-->
<div class="why-choose-us-area">
    <div class="container">
        <div class="row align-items-center">
             <!-- Content Column -->
             <div class="col-lg-6">
                <div class="why-choose-content" data-aos="fade-up">
                    <div class="section-title cursor-scale">
                        <div class="section-main-title cursor-scale">
                            <h3>Why Choose Us?</h3>
                        </div>
                        <div class="section-title-desc">
                            <p>
                                At White Wedding, we simplify your wedding planning process by offering a seamless, all-in-one booking experience. Here's why couples trust us:
                            </p>
                            <ul>
                                <li><i class="fa-solid fa-heart" style="color: #97aa85; font-size: 20px;"></i> Fixed-price services with no hidden fees.</li>
                                <li><i class="fa-solid fa-heart" style="color: #97aa85; font-size: 20px;"></i> Hassle-free booking without contacting multiple vendors.</li>
                                <li><i class="fa-solid fa-heart" style="color: #97aa85; font-size: 20px;"></i> Comprehensive wedding packages tailored to your needs.</li>
                                <li><i class="fa-solid fa-heart" style="color: #97aa85; font-size: 20px;"></i> Trusted vendors for every service you book.</li>
                                <li><i class="fa-solid fa-heart" style="color: #97aa85; font-size: 20px;"></i> Flexible booking options – choose only what you need.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Image Column -->
            <div class="col-lg-6">
                <div class="why-choose-thumb" data-aos="zoom-in">
                    <img src="assets/images/inner/Wedding3.jpg" alt="Why Choose Us" class="img-fluid">
                </div>
            </div>
           
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Why Choose Us Section -->
<!--==================================================-->



<!--==================================================-->
<!-- Start Our Mission & Vision Area -->
<!--==================================================-->
<div class="mission-vision-area">
  <div class="container">
      <div class="row align-items-center">
        <!-- Image Column -->
        <div class="col-lg-6">
            <div class="mission-vision-thumb" data-aos="zoom-in">
                <img src="assets/images/inner/blog-details-thu.jpg" alt="Mission & Vision" class="img-fluid">
            </div>
        </div>
          <!-- Text Column -->
          <div class="col-lg-6">
              <div class="section-title text-left cursor-scale" data-aos="flip-up">
                  <div class="section-main-title cursor-scale">
                      <h3>Our Mission & Vision</h3>
                  </div>
                  <div class="section-title-desc">
                      <p>
                          Our mission is to make wedding planning stress-free and enjoyable for every couple. We aim to provide a centralized platform where couples can find everything they need for their big day, from venue booking to beauty services, all at fixed prices.
                      </p>
                      <p>
                          Our vision is to become the go-to destination for wedding services worldwide, empowering couples to plan their dream weddings with confidence and ease.
                      </p>
                  </div>
              </div>
          </div>
          {{-- <!-- Image Column -->
          <div class="col-lg-6">
              <div class="mission-vision-thumb" data-aos="zoom-in">
                  <img src="assets/images/inner/blog-details-thu.jpg" alt="Mission & Vision" class="img-fluid">
              </div> --}}
          </div>
      </div>
  </div>
</div>
<!--==================================================-->
<!-- End Our Mission & Vision Area -->
<!--==================================================-->




   {{-- <!--==================================================-->
    <!--start lovebird brand area-->
    <!--==================================================-->
    
    <div class="brand-area">
        <div class="container">
          <div class="row">
            <div class="swiper band-active cursor-scale" data-aos="zoom-in-left">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="col-lg-2">
                    <div class="brand-box">
                      <div class="brand-thumb">
                        <img
                          src="assets/images/home-1/brand-img.png"
                          alt="brand img"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="col-lg-3">
                    <div class="brand-box">
                      <div class="brand-thumb">
                        <img
                          src="assets/images/home-1/brand-img2.png"
                          alt="brand img"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="col-lg-2">
                    <div class="brand-box">
                      <div class="brand-thumb">
                        <img
                          src="assets/images/home-1/brand-img3.png"
                          alt="brand img"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="col-lg-3">
                    <div class="brand-box">
                      <div class="brand-thumb">
                        <img
                          src="assets/images/home-1/brand-img4.png"
                          alt="brand img"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="col-lg-2">
                    <div class="brand-box">
                      <div class="brand-thumb">
                        <img
                          src="assets/images/home-1/brand-img5.png"
                          alt="brand img"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="col-lg-2">
                    <div class="brand-box">
                      <div class="brand-thumb">
                        <img
                          src="assets/images/home-1/brand-img.png"
                          alt="brand img"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="col-lg-3">
                    <div class="brand-box">
                      <div class="brand-thumb">
                        <img
                          src="assets/images/home-1/brand-img2.png"
                          alt="brand img"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="col-lg-2">
                    <div class="brand-box">
                      <div class="brand-thumb">
                        <img
                          src="assets/images/home-1/brand-img3.png"
                          alt="brand img"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="col-lg-3">
                    <div class="brand-box">
                      <div class="brand-thumb">
                        <img
                          src="assets/images/home-1/brand-img4.png"
                          alt="brand img"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="col-lg-2">
                    <div class="brand-box">
                      <div class="brand-thumb">
                        <img
                          src="assets/images/home-1/brand-img5.png"
                          alt="brand img"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!--==================================================-->
      <!--End lovebird brand area-->
      <!--==================================================--> --}}
@endsection
