
@extends('/welcome')
@section('title' , 'Home')

@section ('content')



    <!--==================================================-->
    <!--start lovebird slider area                abd-->
    <!--==================================================-->

    <section class="lovebird-slider-area">
      <div class="lovebird-slider-wrapper">
        <div class="swiper-container lovebird-slider-active">
          <div class="swiper-wrapper">
            <!-- slide item 1 -->
            <div class="swiper-slide">
              <div class="lovebird-slider-height">
                <div class="lovebird-slider-bg"></div>
                <div class="container">
                  <div class="row">
                    <div class="col-xl-12">
                      <div class="lovebird-slider-content text-center">
                        <div class="lovebird-slider-title-box cursor-scale">
                          <span class="lovebird-slider-sub-title"
                            >Save the date for the wedding of June 10,2024</span
                          >
                          <h1 class="lovebird-slider-title cursor-scale">
                            Muskan & Mursalin
                          </h1>
                        </div>
                        <div class="lovebird-slider-btn">
                          <div class="slider-btn">
                            <a href="about-us.html">wedding</a>
                          </div>
                          <div class="slider-video-btn">
                            <a
                              class="video-vemo-icon venobox vbox-item"
                              data-vbtype="youtube"
                              data-autoplay="true"
                              href="https://www.youtube.com/watch?v=Wx48y_fOfiY"
                              ><i class="fa-solid fa-play"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- slide item 2 -->
            <div class="swiper-slide">
              <div class="lovebird-slider-height">
                <div class="lovebird-slider-bg2"></div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="lovebird-slider-content text-center">
                        <div class="lovebird-slider-title-box cursor-scale">
                          <span class="lovebird-slider-sub-title"
                            >Save the date for the wedding of June 10, 2024
                          </span>
                          <h1 class="lovebird-slider-title cursor-scale">
                            Muskan & Mursalin
                          </h1>
                        </div>
                        <div class="lovebird-slider-btn">
                          <div class="slider-btn">
                            <a href="about-us.html">wedding</a>
                          </div>
                          <div class="slider-video-btn">
                            <a
                              class="video-vemo-icon venobox vbox-item"
                              data-vbtype="youtube"
                              data-autoplay="true"
                              href="https://www.youtube.com/watch?v=Wx48y_fOfiY"
                              ><i class="fa-solid fa-play"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="lovebird-slider-arrow-box">
          <button class="slider-prev" tabindex="0" aria-label="Previous slide">
            <i class="fa-solid fa-angle-left"></i>
          </button>
          <button class="slider-next" tabindex="0" aria-label="Next slide">
            <i class="fa-solid fa-angle-right"></i>
          </button>
        </div>
      </div>
    </section>
    <!--==================================================-->
    <!--end lovebird slider area                  abd-->
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
                  
                        <div class="about-us-btn">
                            <a href="/about_us">Discover more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
       <!--End lovebird about us area            abd-->
    <!--==================================================-->

 <!--==================================================-->
        <!--start lovebird service area style-2    abd-->  
    <!--==================================================-->
    <div class="service-area style-2">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                <div class="section-title text-center cursor-scale" data-aos="flip-up">
                    {{-- <div class="section-sub-title">
                      <h5>Our Best Supply</h5>
                    </div> --}}
                    <div class="section-main-title cursor-scale">
                      <h3>Wedding Services</h3>
                    </div>
                </div> 
              </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-service-box" data-aos="flip-down">
                    <div class="service-icon">
                        <img src="assets/images/inner/ser-icon6.png" alt="icon">
                    </div>
                    <div class="service-content">
                        <h1 class="service-title"> Wedding Hall Booking
                        </h1>
                        <p class="service-desc">Browse and book elegant wedding venues with fixed-price packages. Choose from a curated selection of ballrooms, gardens, and banquet halls—all with transparent pricing and no hidden fees.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-service-box" data-aos="flip-down">
                  <div class="service-icon">
                      <img src="assets/images/inner/ser-icon2.png" alt="icon">
                  </div>
                  <div class="service-content">
                      <h1 class="service-title"> Bridal & Groom Attire 
                      </h1>
                      <p class="service-desc">Discover premium wedding dresses and groom suits from top designers. Rent or buy with hassle-free fittings and alterations included.
                      </p>
                  </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-service-box">
                  <div class="service-icon">
                      <img src="assets/images/inner/ser-icon5.png" alt="icon">
                  </div>
                  <div class="service-content">
                      <h1 class="service-title"> Luxury Wedding Car</h1>
                      <p class="service-desc">Arrive in style with chauffeur-driven luxury cars or vintage classics. Options include Rolls-Royce, Mercedes, and more.
                      </p>
                  </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-service-box" data-aos="flip-down">
                  <div class="service-icon">
                      <img src="assets/images/inner/ser-icon.png" alt="icon">
                  </div>
                  <div class="service-content">
                      <h1 class="service-title">  Photoshoot
                      </h1>
                      <p class="service-desc">Book expert photographers for pre-wedding, ceremony, and post-wedding shoots. Packages include editing, prints, and digital albums.
                      </p>
                  </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-service-box" data-aos="flip-down">
                  <div class="service-icon">
                      <img src="assets/images/inner/ser-icon3.png" alt="icon">
                  </div>
                  <div class="service-content">
                      <h1 class="service-title"> Wedding Cake 
                      </h1>
                      <p class="service-desc">Order a custom-designed luxury cake with your choice of flavors, tiers, and decorations—crafted by renowned bakeries.
                      </p>
                  </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-service-box" data-aos="flip-down">
                  <div class="service-icon">
                      <img src="assets/images/inner/ser-icon4.png" alt="icon">
                  </div>
                  <div class="service-content">
                      <h1 class="service-title"> Bridal Beauty Center
                      </h1>
                      <p class="service-desc">All-in-one bridal beauty services: hair, makeup, nails, and skincare by professional artists for a flawless wedding-day look.
                      </p>
                  </div>
              </div>
            </div>
          </div>
      </div>
  </div>
  <!--==================================================-->
      <!--End lovebird service area                abd-->
  <!--==================================================-->


 <!--==================================================-->
        <!--start lovebird blog area--             abd-->
    <!--==================================================-->
    <div class="blog-area">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                <div class="section-title text-center cursor-scale" data-aos="fade-up">
                    
                    <div class="section-main-title cursor-scale">
                      <h1>Wedding Blog Guide</h1>
                    </div>
                </div> 
              </div>
          </div>
          <div class="row">
             
              <div class="col-lg-4 col-md-6">
                <div class="blog-singele-box" data-aos="fade-down">
                    <div class="blog-thumb">
                        <img src="assets/images/home-1/blog-thumb.png" alt="blog">
                        <div class="blog-content">
                           
                            <h3 class="blog-title"><a href="/blog">Dream Venue </a></h3>
                            <p class="blog-desc">Mistakes to Avoid When Choosing  a Wedding Venue</p>
                            <div class="blog-btn">
                                <a href="/blog" class="open-modal-btn">CLICK HERE</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-meta-title">
                        <h2><a href="/blog">Dream Venue
                        </a></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-singele-box" data-aos="fade-down">
                    <div class="blog-thumb">
                      <img src="assets/images/home-1/blog-thumb2.png" alt="blog2">
                      <div class="blog-content">
                        
                        <h3 class="blog-title"><a href="blog-details.html">Stress-Free Wedding</a></h3>
                        <p class="blog-desc">Tips to Make Your Wedding Day Stress-Free
                        </p>
                        <div class="blog-btn">
                          <a href="/blog">CLICK HERE</a>
                        </div>
                    </div>
                    </div> 
                    <div class="blog-meta-title">
                      <h2><a href="/blog">Stress-Free Wedding</a></h2>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="blog-singele-box" data-aos="fade-down">
                    <div class="blog-thumb">
                      <img src="assets/images/home-1/blog-thumb3.png" alt="blog3">
                      <div class="blog-content">
                      
                        <h3 class="blog-title"><a href="blog-details.html"> Best Wedding</a></h3>
                        <p class="blog-desc">   One of the most enchanting weddings we organized in 2024! </p>
                        <div class="blog-btn">
                          <a href="blog-details.html">CLICK HERE</a>
                        </div>
                    </div>
                    </div>
                    <div class="blog-meta-title">
                      <h2><a href="/blog"> Best Wedding</a></h2>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="blog-singele-box" data-aos="fade-down">
                    <div class="blog-thumb">
                      <img src="assets/images/home-1/blog-thumb4.png" alt="blog">
                      <div class="blog-content">
                       
                        <h3 class="blog-title"><a href="blog-details.html">Wedding Tale
                        </a></h3>
                        <p class="blog-desc"> How We Planned the Perfect Wedding in Just One Month!</p>
                        <div class="blog-btn">
                          <a href="blog-details.html">CLICK HERE</a>
                        </div>
                    </div>
                    </div>
                    <div class="blog-meta-title">
                        <h2><a href="/blog">Wedding Tale
                        </a></h2>
                    </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="blog-singele-box" data-aos="fade-down">
                    <div class="blog-thumb">
                      <img src="assets\images\inner\cake.jpg" alt="Perfect Wedding Cake">
                      <div class="blog-content">
                        
                        <h3 class="blog-title"><a href="blog-details.html">Perfect Wedding Cake

                        </a></h3>
                        <p class="blog-desc">How to Choose a Wedding Cake That Matches Your Style & Budget? </p>
                        <div class="blog-btn">
                          <a href="blog-details.html">CLICK HERE</a>
                        </div>
                    </div>
                    </div> 
                    <div class="blog-meta-title">
                      <h2><a href="/blog">Perfect Wedding Cake

                      </a></h2>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="blog-singele-box" data-aos="fade-down">
                    <div class="blog-thumb">
                      <img src="assets/images/home-1/blog-thumb6.png" alt="blog3">
                      <div class="blog-content">
                        
                        <h3 class="blog-title"><a href="blog-details.html">Your Perfect Dress</a></h3>
                        <p class="blog-desc">How to Choose a Wedding Dress That Flatters Your Body Shape?</p>
                        <div class="blog-btn">
                          <a href="blog-details.html">CLICK HERE</a>
                        </div>
                    </div>
                    </div>
                    <div class="blog-meta-title">
                      <h2><a href="/blog">Your Perfect Dress</a></h2>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>

    <!--==================================================-->
      <!--End lovebird blog area--                  abd-->
    <!--==================================================-->


    <!--==================================================-->
    <!--start lovebird gallery area-->
    <!--==================================================-->
    <div class="gallery-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title text-center cursor-scale" data-aos="flip-up">
              <div class="section-sub-title">
                <h5>Gallery of Love</h5>
              </div>
              <div class="section-main-title cursor-scale">
                <h1>Picture Perfect Moments</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="gallery__wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery__thumb-box">
                <div class="gallery__thumb">
                  <a
                    class="popup-image"
                    href="assets/images/home-1/gallery-thu.png"
                    ><img
                      class="w-100"
                      src="assets/images/home-1/gallery-thu.png"
                      alt=""
                    />
                    <div class="gallery__thumb-icon">
                      <img
                        src="assets/images/home-1/gallery-icon.png"
                        alt="icon"
                      />
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery__thumb-box">
                <div class="gallery__thumb">
                  <a
                    class="popup-image"
                    href="assets/images/home-1/gallery-thu2.png"
                    ><img
                      class="w-100"
                      src="assets/images/home-1/gallery-thu2.png"
                      alt=""
                    />
                    <div class="gallery__thumb-icon">
                      <img
                        src="assets/images/home-1/gallery-icon.png"
                        alt="icon"
                      />
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery__thumb-box" data-aos="zoom-in">
                <div class="gallery__thumb">
                  <a
                    class="popup-image"
                    href="assets/images/home-1/gallery-thu3.png"
                    ><img
                      class="w-100"
                      src="assets/images/home-1/gallery-thu3.png"
                      alt=""
                    />
                    <div class="gallery__thumb-icon">
                      <img
                        src="assets/images/home-1/gallery-icon.png"
                        alt="icon"
                      />
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery__thumb-box" data-aos="zoom-in">
                <div class="gallery__thumb">
                  <a
                    class="popup-image"
                    href="assets/images/home-1/gallery-thu4.png"
                    ><img
                      class="w-100"
                      src="assets/images/home-1/gallery-thu4.png"
                      alt=""
                    />
                    <div class="gallery__thumb-icon">
                      <img
                        src="assets/images/home-1/gallery-icon.png"
                        alt="icon"
                      />
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery__thumb-box" data-aos="zoom-in">
                <div class="gallery__thumb">
                  <a
                    class="popup-image"
                    href="assets/images/home-1/gallery-thu5.png"
                    ><img
                      class="w-100"
                      src="assets/images/home-1/gallery-thu5.png"
                      alt=""
                    />
                    <div class="gallery__thumb-icon">
                      <img
                        src="assets/images/home-1/gallery-icon.png"
                        alt="icon"
                      />
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery__thumb-box" data-aos="zoom-in">
                <div class="gallery__thumb">
                  <a
                    class="popup-image"
                    href="assets/images/home-1/gallery-thu6.png"
                    ><img
                      class="w-100"
                      src="assets/images/home-1/gallery-thu6.png"
                      alt=""
                    />
                    <div class="gallery__thumb-icon">
                      <img
                        src="assets/images/home-1/gallery-icon.png"
                        alt="icon"
                      />
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery__thumb-box" data-aos="zoom-in">
                <div class="gallery__thumb">
                  <a
                    class="popup-image"
                    href="assets/images/home-1/gallery-thu7.png"
                    ><img
                      class="w-100"
                      src="assets/images/home-1/gallery-thu7.png"
                      alt=""
                    />
                    <div class="gallery__thumb-icon">
                      <img
                        src="assets/images/home-1/gallery-icon.png"
                        alt="icon"
                      />
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery__thumb-box" data-aos="zoom-in">
                <div class="gallery__thumb">
                  <a
                    class="popup-image"
                    href="assets/images/home-1/gallery-thu8.png"
                    ><img
                      class="w-100"
                      src="assets/images/home-1/gallery-thu8.png"
                      alt=""
                    />
                    <div class="gallery__thumb-icon">
                      <img
                        src="assets/images/home-1/gallery-icon.png"
                        alt="icon"
                      />
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--==================================================-->
    <!--End lovebird gallery area-->
    <!--==================================================-->


    <!--==================================================-->
    <!--start lovebird contact area-->
    <!--==================================================-->
    <div class="contact-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title text-center cursor-scale" data-aos="fade-up">
              <div class="section-sub-title">
                <h5>GET IN TOUCH</h5>
              </div>
              <div class="section-main-title cursor-scale">
                <h1>Contact Us</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <form action="https://formspree.io/f/myyleorq" method="POST">
            <div class="row form">
              <div class="col-lg-6">
                <div class="form-box">
                  <input
                    type="text"
                    name="Name"
                    placeholder="Name"
                    required=""
                  />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-box">
                  <input
                    type="Email"
                    name="Email"
                    placeholder="Email"
                    required=""
                  />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-box">
                  <input
                    type="text"
                    name="Address"
                    placeholder="Address"
                    required=""
                  />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-box">
                  <input
                    type="text"
                    name="Phone"
                    placeholder="Phone"
                    required=""
                  />
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-box">
                  <label>message</label>
                  <textarea
                    name="massage"
                    id="massage"
                    cols="10"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="submit-button">
                  <button type="submit">sumit now</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!--==================================================-->
    <!--End lovebird contact area-->
    <!--==================================================-->

    {{-- <!--==================================================-->
    <!--start lovebird testimonial area-->
    <!--==================================================-->
    <div class="testimonial-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="swiper testi-active cursor-scale" data-aos="zoom-in-left">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="testi-box" data-aos="fade-up">
                    <div class="testi-single-box">
                      <div class="autor-rating">
                        <ul class="testi-rating">
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                        </ul>
                      </div>
                      <div class="testi-content">
                        <p class="testi-desc">
                          You have always been someone I can count on, and I
                          hope you know that I'll always be here for you.<br />
                          I can't wait to see what the future holds for you and
                          your partner Christin.
                        </p>
                        <div class="testi-author">
                          <img
                            src="assets/images/home-1/testi-autor.png"
                            alt="img"
                          />
                        </div>
                        <h3 class="testi-user-name">
                          Fariska mandon<span>Bridesmanid</span>
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testi-box" data-aos="fade-up">
                    <div class="testi-single-box">
                      <div class="autor-rating">
                        <ul class="testi-rating">
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                        </ul>
                      </div>
                      <div class="testi-content">
                        <p class="testi-desc">
                          You have always been someone I can count on, and I
                          hope you know that I'll always be here for you.<br />
                          I can't wait to see what the future holds for you and
                          your partner Christin.
                        </p>
                        <div class="testi-author">
                          <img
                            src="assets/images/home-1/testi-autor.png"
                            alt="img"
                          />
                        </div>
                        <h3 class="testi-user-name">
                          Fariska mandon<span>Bridesmanid</span>
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="lovebird-testi-arrow-box">
                <button
                  class="testi-prev"
                  tabindex="0"
                  aria-label="Previous slide"
                >
                  <i class="fa-solid fa-angle-left"></i>
                </button>
                <button class="testi-next" tabindex="0" aria-label="Next slide">
                  <i class="fa-solid fa-angle-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--==================================================-->
    <!--End lovebird testimonial area-->
    <!--==================================================--> --}}

    {{-- <!--==================================================-->
    <!--start lovebird blog area-->
    <!--==================================================-->
    <div class="blog-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title text-center cursor-scale" data-aos="fade-up">
              <div class="section-sub-title">
                <h5>WEDDING NEWS</h5>
              </div>
              <div class="section-main-title cursor-scale">
                <h1>Romantic Revelations</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="blog-singele-box" data-aos="fade-down">
              <div class="blog-thumb">
                <img src="assets/images/home-1/blog-thumb.png" alt="blog" />
                <div class="blog-content">
                  <div class="blog-date">
                    <span>June 8, 2024</span>
                  </div>
                  <h3 class="blog-title">
                    <a href="blog-details.html">Flower Design</a>
                  </h3>
                  <p class="blog-desc">
                    When it comes to planning the perfect wedding, flowers make
                    all the difference. When it comes to,
                  </p>
                  <div class="blog-btn">
                    <a href="blog-details.html">CLICK HERE</a>
                  </div>
                </div>
              </div>
              <div class="blog-meta-title">
                <h2><a href="blog-details.html">We Love Passion</a></h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="blog-singele-box" data-aos="fade-down">
              <div class="blog-thumb">
                <img src="assets/images/home-1/blog-thumb2.png" alt="blog2" />
                <div class="blog-content">
                  <div class="blog-date">
                    <span>June 8, 2024</span>
                  </div>
                  <h3 class="blog-title">
                    <a href="blog-details.html">Flower Design</a>
                  </h3>
                  <p class="blog-desc">
                    When it comes to planning the perfect wedding, flowers make
                    all the difference. When it comes to,
                  </p>
                  <div class="blog-btn">
                    <a href="blog-details.html">CLICK HERE</a>
                  </div>
                </div>
              </div>
              <div class="blog-meta-title">
                <h2><a href="blog-details.html">Flower Design</a></h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="blog-singele-box" data-aos="fade-down">
              <div class="blog-thumb">
                <img src="assets/images/home-1/blog-thumb3.png" alt="blog3" />
                <div class="blog-content">
                  <div class="blog-date">
                    <span>June 8, 2024</span>
                  </div>
                  <h3 class="blog-title">
                    <a href="blog-details.html">Flower Design</a>
                  </h3>
                  <p class="blog-desc">
                    When it comes to planning the perfect wedding, flowers make
                    all the difference. When it comes to,
                  </p>
                  <div class="blog-btn">
                    <a href="blog-details.html">CLICK HERE</a>
                  </div>
                </div>
              </div>
              <div class="blog-meta-title">
                <h2><a href="blog-details.html">Special Events</a></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--==================================================-->
    <!--End lovebird blog area-->
    <!--==================================================--> --}}

  
 @endsection

 


