@extends('/welcome')
@section('title' , 'Contact')

@section ('content')
{{-- 
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
                  <h1>Confirmation at Marriage</h1>
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
      <!--==================================================--> --}}

 
  
  
  
  
  
      <!--==================================================-->
          <!--start lovebird breadcumb Area-->
      <!--==================================================-->
      <div class="breadcumb-area">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="breadcumb-content" data-aos="fade-up">
                        <h4>contact us</h4>
                        <ul class="breadcumb-list">
                          <li><a href="/">Home</a></li>
                          <li class="list-arrow">&lt;</li>
                          <li>contact us</li>
                        </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      <!--==================================================-->
          <!--end lovebird breadcumb Area-->
      <!--==================================================-->
  
  
  
  
      {{-- <!--==================================================-->
          <!--start lovebird contact section-->
      <!--==================================================-->
        <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                  <div class="section-title text-left cursor-scale" data-aos="fade-up">
                    <div class="section-sub-title">
                      <h5>contact Information</h5>
                    </div>
                    <div class="section-main-title cursor-scale">
                      <h3>Write to us for a fast</h3>
                      <h3>Feedback</h3>
                    </div>
                  </div> 
                  <div class="row contact-address">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="contact-address" data-aos="fade-down">
                          <div class="single-contact-box">
                              <div class="contact-icon">
                                  <i class="bi bi-telephone"></i>
                              </div>
                              <div class="contact-info">
                                <div class="contact-title">
                                  <h5>Call Us</h5>
                                </div>
                                <div class="contact-addres">
                                  <p>(00) 123 654 789</p>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="contact-address" data-aos="fade-down">
                          <div class="single-contact-box">
                              <div class="contact-icon">
                                <i class="fa-regular fa-envelope"></i>
                              </div>
                              <div class="contact-info">
                                <div class="contact-title">
                                  <h5>Email</h5>
                                </div>
                                <div class="contact-addres">
                                  <p>info@yourmail.com</p>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-lg-12 col-md-6">
                    <div class="contact-address line" data-aos="fade-down">
                      <div class="single-contact-box">
                          <div class="contact-icon">
                            <i class="fa-solid fa-location-dot"></i>
                          </div>
                          <div class="contact-info">
                            <div class="contact-title">
                              <h5>Location</h5>
                            </div>
                            <div class="contact-addres">
                              <p>255 Sheet, New City. USA</p>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="row form-bg">
                    <form action="https://formspree.io/f/myyleorq" method="POST">
                      <div class="row form">
                          <div class="contact-form-title" data-aos="fade-down">
                              <h2>Write to us for a quote</h2>
                          </div>
                          <div class="col-lg-12">
                              <div class="form-box">
                                <input type="text" name="Name" placeholder="Name" required="">
                              </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-box">
                              <input type="text" name="Address" placeholder="Address" required="">
                            </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="form-box">
                                <input type="Email" name="Email" placeholder="E-Mail" required="">
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="form-box">
                                <input type="text" name="Phone" placeholder="Phone Number" required="">
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="form-box">
                                <textarea name="massage" id="massage" cols="30" rows="10" placeholder="Your Message Here"></textarea>
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
        </div>
        </div>
  
    <!--==================================================-->
        <!--End lovebird contact section-->
    <!--==================================================--> --}}
  
  <!--==================================================-->
<!-- Start Confirmation at Marriage Section -->
<!--==================================================-->
<div class="contact-section">
  <div class="container">
      <div class="row">
          <!-- Left Column: Contact Information -->
          <div class="col-lg-6">
              <div class="section-title text-left cursor-scale" data-aos="fade-up">
                  <div class="section-sub-title">
                      {{-- <h5>Confirmation at Marriage</h5> --}}
                  </div>
                  <div class="section-main-title cursor-scale">
                      <h3>Contact Us for Confirmation </h3>
                      <h3>and Support</h3>
                  </div>
              </div>

              <!-- Contact Details -->
              <div class="row contact-address">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="single-contact-box" data-aos="fade-down">
                          <div class="contact-icon">
                              <i class="bi bi-telephone"></i>
                          </div>
                          <div class="contact-info">
                              <div class="contact-title">
                                  <h5>Call Us</h5>
                              </div>
                              <div class="contact-addres">
                                  <p>(00) 123 654 789</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="single-contact-box" data-aos="fade-down">
                          <div class="contact-icon">
                              <i class="fa-regular fa-envelope"></i>
                          </div>
                          <div class="contact-info">
                              <div class="contact-title">
                                  <h5>Email</h5>
                              </div>
                              <div class="contact-addres">
                                  <p>info@yourmail.com</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Location -->
              <div class="col-lg-12 col-md-6">
                  <div class="single-contact-box line" data-aos="fade-down">
                      <div class="contact-icon">
                          <i class="fa-solid fa-location-dot"></i>
                      </div>
                      <div class="contact-info">
                          <div class="contact-title">
                              <h5>Location</h5>
                          </div>
                          <div class="contact-addres">
                              <p>255 Sheet, New City. USA</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Right Column: Contact Form -->
          <div class="col-lg-6">
              <div class="form-bg">
                  <form action="https://formspree.io/f/myyleorq" method="POST">
                      <div class="contact-form-title" data-aos="fade-down">
                          <h2>Send Us a Message</h2>
                      </div>
                      <div class="row form">
                          <div class="col-lg-12">
                              <div class="form-box">
                                  <input type="text" name="name" placeholder="Your Name" required="">
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="form-box">
                                  <input type="email" name="email" placeholder="Your Email" required="">
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="form-box">
                                  <input type="text" name="phone" placeholder="Phone Number" required="">
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="form-box">
                                  <textarea name="message" id="message" cols="30" rows="6" placeholder="Your Message Here"></textarea>
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="submit-button">
                                  <button type="submit">Submit Now</button>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
<!--==================================================-->
<!-- End Confirmation at Marriage Section -->
<!--==================================================-->
  {{-- <!--==================================================-->
<!-- Start Testimonials Section -->
<!--==================================================-->
<div class="testimonials-area">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="section-title text-center cursor-scale" data-aos="flip-up">
                  <div class="section-main-title cursor-scale">
                      <h3>What Our Clients Say</h3>
                  </div>
                  <div class="section-title-desc">
                      <p>
                          Hear from happy couples who trusted us to make their special day unforgettable.
                      </p>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <!-- Testimonial 1 -->
          <div class="col-lg-4 col-md-6">
              <div class="single-testimonial-box text-center" data-aos="zoom-in">
                  <div class="testimonial-icon">
                      <i class="fa-solid fa-quote-left"></i>
                  </div>
                  <div class="testimonial-content">
                      <p>
                          "White Wedding made our wedding planning effortless and stress-free. Highly recommend!"
                      </p>
                  </div>
                  <div class="testimonial-author">
                      <h5>Emily Johnson</h5>
                      <span>Bride, New York</span>
                  </div>
              </div>
          </div>
          <!-- Testimonial 2 -->
          <div class="col-lg-4 col-md-6">
              <div class="single-testimonial-box text-center" data-aos="zoom-in">
                  <div class="testimonial-icon">
                      <i class="fa-solid fa-quote-left"></i>
                  </div>
                  <div class="testimonial-content">
                      <p>
                          "The team was amazing! Everything was perfectly organized and executed."
                      </p>
                  </div>
                  <div class="testimonial-author">
                      <h5>Michael Smith</h5>
                      <span>Groom, London</span>
                  </div>
              </div>
          </div>
          <!-- Testimonial 3 -->
          <div class="col-lg-4 col-md-6">
              <div class="single-testimonial-box text-center" data-aos="zoom-in">
                  <div class="testimonial-icon">
                      <i class="fa-solid fa-quote-left"></i>
                  </div>
                  <div class="testimonial-content">
                      <p>
                          "We couldn't have asked for a better experience. Thank you, White Wedding!"
                      </p>
                  </div>
                  <div class="testimonial-author">
                      <h5>Sophia Brown</h5>
                      <span>Bride, Dubai</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!--==================================================-->
<!-- End Testimonials Section -->
<!--==================================================--> --}}
 











<!--==================================================-->
<!-- Start Our Approach Section -->
<!--==================================================-->
<div class="our-approach-area">
  <div class="container">
      <div class="row align-items-center">
         
          <!-- Content Column -->
          <div class="col-lg-6">
              <div class="approach-content" data-aos="fade-up">
                  <div class="section-title cursor-scale">
                      <div class="section-main-title cursor-scale">
                          <h3>Our Approach to Wedding Planning</h3>
                      </div>
                      <div class="section-title-desc">
                          <p>
                              At White Wedding, we believe in creating unforgettable moments for every couple. Our approach combines creativity, professionalism, and attention to detail to ensure your special day is perfect.
                          </p>
                          <ul>
                              <li><i class="fa-solid fa-heart" style="color: #97aa85; font-size: 20px;"></i></i> Personalized planning tailored to your needs.</li>
                              <li><i class="fa-solid fa-heart" style="color: #97aa85; font-size: 20px;"></i></i> A team of experienced professionals.</li>
                              <li><i class="fa-solid fa-heart"  style="color: #97aa85; font-size: 20px;"></i></i> Seamless execution with no stress.</li>
                          </ul>
                      </div>
                      
                  </div>
              </div>
          </div>
           <!-- Image Column -->
           <div class="col-lg-6">
            <div class="approach-image" data-aos="zoom-in">
                <img src="assets/images/inner/contact_us.jpg" alt="Our Approach" class="img-fluid out-of-box">
            </div>
        </div>
      </div>
  </div>
</div>
<!--==================================================-->
<!-- End Our Approach Section -->
<!--==================================================-->






    <!--==================================================-->
<!-- Start lovebird google map area -->
<!--==================================================-->
<div class="google-map-area">
  <div class="container-fluid">
      <div class="row" data-aos="fade-down">
          <div class="col-lg-12">
              <div class="map-container">
                  <iframe 
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3471.3379173178714!2d35.01494722467549!3d29.535651975183733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x150071875a9fca41%3A0xf5d61d999f967371!2sOrange%20Digital%20Village%20Aqaba!5e0!3m2!1sar!2sjo!4v1743929779322!5m2!1sar!2sjo" 
                      width="100%" 
                      height="450" 
                      style="border:0;" 
                      allowfullscreen="" 
                      loading="lazy" 
                      referrerpolicy="no-referrer-when-downgrade">
                  </iframe>
              </div>
          </div>
      </div>
  </div>
</div>
<!--==================================================-->
<!-- End lovebird google map area -->
<!--==================================================-->



@endsection