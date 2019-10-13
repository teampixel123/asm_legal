<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include('head.php'); ?>
  <body id="Home">

    <?php include('navbar.php'); ?>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/images/slide1.png" class="d-none d-sm-block w-100" alt="...">
          <img src="assets/images/mob_slidea1.png" class="d-block d-sm-none w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>FAMILY MATTERS</h5>
            <p class="">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod tempor incididunt ut <br>labore et dolore magna aliqua.
            </p>
            <!-- <div class="text-left mt-3">
              <a href="Contact" class="btn btn-primary btn-dental" name="button">Book Appointment Now</a>
            </div> -->
          </div>
        </div>

        <div class="carousel-item ">
          <img src="assets/images/slide2.png" class="d-none d-sm-block w-100 " alt="...">
          <img src="assets/images/mob_slidea2.png" class="d-block d-sm-none w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>PROPERTY MATTERS</h5>
            <p class="">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod tempor incididunt ut <br>labore et dolore magna aliqua.
            </p>
          </div>
        </div>

        <div class="carousel-item ">
          <img src="assets/images/slide3.png" class="d-none d-sm-block w-100" alt="...">
            <img src="assets/images/mob_slidea3.png" class="d-block d-sm-none w-100" alt="...">
          <div class="carousel-caption d-none d-md-block ">
            <h5>FINANCIAL CASES</h5>
            <p class="">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod tempor incididunt ut <br>labore et dolore magna aliqua.
            </p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>




  <div id="About-Us">
    <section class="padding-80 asm-about">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="asm-about-info">
              <h1 class="title hr-bottom-l">About ASM Legal Services</h1>
              <p>
                In ASM Legal service, we have dynamic team of professionals who are versatile in the field of law and legal services which furnish the clients with specialized services since last 13 years run by Adv. ABDUL MULLA. ASM Legal service is located at C.S. No. 260/2, Indira Apartment, Flat no. 7, Tarabai Park, near Aditya Corner, Opp. Bank of Maharashtra, Kolhapur, Maharashtra. Our team and Advocates are dynamic who are very specialized in different fields of law practice. We have diversified client base & we believe in resolving the cases and disputes in a very short time frame so that our clients feel comfortable in their daily activities.
              </p>
              <p class="text-center">
                <a href="<?php echo base_url("About")?>"> <button class="btn btn-primary text-center btn-asm" type="button" name="button">Read More</button> </a>
              </p>

            </div>
          </div>
          <div class="col-md-4 margin-m">
            <div class="quote d-none d-sm-block">
              <div class="quote-head">
                  <h1 class="title text-center text-white">Book an Appointment</h1>
              </div>
              <div class="quote-form">
                <form id="form_quote" action="Website/send_quote_mail">
                  <div class="form-group">
                    <input type="text" class="form-control required2" name="name" id="name" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control required2 email" name="email" id="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control required2" name="subject" id="subject" placeholder="Subject">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control required2" name="massege" id="massege" rows="5" cols="80" placeholder="Massege"></textarea>
                  </div>
                  <div class="form-group text-center">
                    <button class="btn btn-primary btn-asm" id="btn_quote" type="button" name="button">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="asm-work padding-80">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="">
              <h1 class="title text-white hr-bottom-l">Why ASM Legal</h1>
              <p class="asm-work-info">
                We have a proven track record of successful cases in all the different areas of law.
                We have diversified client base & we believe in solving the cases and disputes in a very short time frame so that our clients feel
                comfortable in their daily activities. We keep our commitments in providing legal advisory services with consistent attention and
                highest degree of responsiveness. We are always appreciated by our clients because of our services in providing day to day advice
                and appropriate legal documentation with prompt reporting
              </p>
            <a href="<?php echo base_url()?>Contact">  <button class="btn btn-primary btn-asm-2 go-contact" type="button" name="button">Contact Us</button></a>
            </div>
          </div>
          <div class="col-md-6">
            <img src="assets/images/why.jpeg" >
          </div>
        </div>
      </div>
    </section>

    <section class="padding-80 vision d-none d-sm-block">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card card-gray">
              <div class="card-body text-center">
                <i>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 80" x="0px" y="0px">
                    <path d="M32,0A32,32,0,1,0,64,32,32,32,0,0,0,32,0Zm0,62A30,30,0,1,1,62,32,30,30,0,0,1,32,62Z"/>
                    <path d="M32,20c-.9,0-10.35-.05-21.7,11.29a1,1,0,0,0,0,1.41C21.06,43.48,30.13,44,31.79,44h.42c1.67,0,10.73-.53,21.5-11.3a1,1,0,0,0,0-1.41C42.29,19.87,32.79,20,32,20ZM12.43,32A41.31,41.31,0,0,1,22.5,24.7a11.92,11.92,0,0,0,0,14.61A41.38,41.38,0,0,1,12.43,32ZM32,42A10,10,0,1,1,42,32,10,10,0,0,1,32,42Zm9.5-2.69a11.92,11.92,0,0,0,0-14.62A41.39,41.39,0,0,1,51.57,32,41.34,41.34,0,0,1,41.5,39.31Z"/>
                    <path d="M32,25a7,7,0,0,0,0,14,1,1,0,0,0,1-1V33h5a1,1,0,0,0,1-1A7,7,0,0,0,32,25Zm0,6a1,1,0,0,0-1,1v4.9A5,5,0,1,1,36.9,31Z"/>
                    <path d="M7,32H5A27,27,0,0,0,32,59V57A25,25,0,0,1,7,32Z"/>
                    <path d="M57,32h2A27,27,0,0,0,32,5V7A25,25,0,0,1,57,32Z"/>
                    <rect x="57" y="34" width="2" height="2"/>
                    <rect x="5" y="28" width="2" height="2"/>
                  </svg>
                </i>
                <h1 class="title text-center">Vision</h1>
                <p class="prev-p">
                ASM legal services core values are embodied in our way of doing business and serve the client defined by Ethos,
                Integrity, Confidentiality, Trust and Credibility.  <br>
                <a href="<?php echo base_url()?>About"> <button class="btn btn-primary text-center btn-vision" type="button" name="button">Read More</button> </a>
                </p>
                <p class="hover-p">
                  Customer focused sincerely. Integrity and committed to working with open communication & timely work.
                  "We aim to be leading legal services provider of our region. To become key players in assisting the achievement
                  of clients all legal issues.

                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-color">
              <div class="card-body text-center">
                <i>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 80" x="0px" y="0px">
                    <path d="M32,60A28,28,0,1,1,60,32,28,28,0,0,1,32,60ZM32,6A26,26,0,1,0,58,32,26,26,0,0,0,32,6Z"/>
                    <path d="M32,53A21,21,0,1,1,53,32,21,21,0,0,1,32,53Zm0-40A19,19,0,1,0,51,32,19,19,0,0,0,32,13Z"/>
                    <path d="M32,9a1,1,0,0,1-1-1V2a1,1,0,0,1,2,0V8A1,1,0,0,1,32,9Z"/>
                    <path d="M32,63a1,1,0,0,1-1-1V56a1,1,0,0,1,2,0v6A1,1,0,0,1,32,63Z"/>
                    <path d="M8,33H2a1,1,0,0,1,0-2H8a1,1,0,0,1,0,2Z"/>
                    <path d="M62,33H56a1,1,0,0,1,0-2h6a1,1,0,0,1,0,2Z"/>
                    <path d="M32,37a8,8,0,0,1-8-8V20a1,1,0,0,1,1-1H39a1,1,0,0,1,1,1v9A8,8,0,0,1,32,37ZM26,21v8a6,6,0,0,0,12,0V21Z"/>
                    <path d="M32,41a1,1,0,0,1-1-1V36a1,1,0,0,1,2,0v4A1,1,0,0,1,32,41Z"/>
                    <path d="M37,47H27a1,1,0,0,1-1-1V40a1,1,0,0,1,1-1H37a1,1,0,0,1,1,1v6A1,1,0,0,1,37,47Zm-9-2h8V41H28Z"/>
                    <path d="M38,47H26a1,1,0,0,1,0-2H38a1,1,0,0,1,0,2Z"/>
                    <path d="M39,33a1,1,0,0,1-1-1V25.5a3.5,3.5,0,0,1,7,0V27A6,6,0,0,1,39,33Zm2.5-9A1.5,1.5,0,0,0,40,25.5v5.37A4,4,0,0,0,43,27V25.5A1.5,1.5,0,0,0,41.5,24Z"/>
                    <path d="M25,33a6,6,0,0,1-6-6V25.5a3.5,3.5,0,0,1,7,0V32A1,1,0,0,1,25,33Zm-2.5-9A1.5,1.5,0,0,0,21,25.5V27a4,4,0,0,0,3,3.87V25.5A1.5,1.5,0,0,0,22.5,24Z"/>
                  </svg>

                </i>
                <h1 class="title text-center">Mission</h1>
                <p class="prev-p">
                  Our mission throughout this website is to furnish a wide range of professional legal services with quality standards and with competitive price to our client.
                  We work with clients to understand their objectives,  <br>
                    <a href="<?php echo base_url()?>About"> <button class="btn btn-primary text-center btn-vision2" type="button" name="button">Read More</button> </a>
                </p>
                <p class="hover-p">
                  To provide official and timely services to all valuable clients. To serve the clients by resolving disputes in a
                  way beneficial to clients. The client should feel valued & respected. passionate to serve clients.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-gray">
              <div class="card-body text-center">
                <i>
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 32 40" enable-background="new 0 0 32 32" xml:space="preserve">
                    <path d="M27.639,10.599c-0.351,0.155-0.51,0.564-0.356,0.915c0.743,1.686,1.12,3.482,1.12,5.341c0,7.31-5.947,13.257-13.258,13.257  c-7.31,0-13.257-5.947-13.257-13.257c0-7.311,5.947-13.258,13.257-13.258c1.858,0,3.656,0.378,5.342,1.121  c0.352,0.152,0.76-0.004,0.916-0.355c0.154-0.351-0.005-0.761-0.355-0.916c-1.864-0.821-3.85-1.238-5.902-1.238  C7.07,2.209,0.5,8.779,0.5,16.855C0.5,24.93,7.07,31.5,15.145,31.5c8.076,0,14.646-6.57,14.646-14.645  c0-2.052-0.416-4.038-1.237-5.9C28.398,10.604,27.989,10.446,27.639,10.599z"/>
                    <path d="M19.109,9.978c0.163-0.348,0.012-0.761-0.335-0.922c-1.141-0.531-2.361-0.801-3.628-0.801c-4.742,0-8.6,3.858-8.6,8.6  c0,4.742,3.858,8.599,8.6,8.599c4.742,0,8.6-3.857,8.6-8.599c0-1.269-0.271-2.491-0.804-3.633c-0.163-0.349-0.575-0.499-0.922-0.336  c-0.348,0.162-0.498,0.575-0.336,0.922c0.447,0.958,0.673,1.983,0.673,3.047c0,3.976-3.235,7.211-7.212,7.211  c-3.976,0-7.211-3.235-7.211-7.211c0-3.977,3.235-7.212,7.211-7.212c1.063,0,2.087,0.226,3.042,0.67  C18.534,10.476,18.947,10.325,19.109,9.978z"/>
                    <path d="M15.326,14.567c0.378,0.035,0.716-0.257,0.745-0.64c0.029-0.382-0.257-0.716-0.639-0.745  c-0.094-0.007-0.19-0.011-0.287-0.011c-2.03,0-3.683,1.652-3.683,3.683c0,2.03,1.652,3.683,3.683,3.683  c2.031,0,3.683-1.652,3.683-3.683c0-0.096-0.003-0.192-0.01-0.287c-0.029-0.382-0.362-0.665-0.745-0.64  c-0.382,0.029-0.669,0.362-0.64,0.745c0.005,0.06,0.007,0.121,0.007,0.182c0,1.265-1.029,2.294-2.295,2.294  c-1.265,0-2.294-1.029-2.294-2.294C12.851,15.528,14.029,14.46,15.326,14.567z"/><path d="M31.441,4.532c-0.116-0.262-0.369-0.438-0.666-0.415l-3.025,0.132l0.131-3.025c0.012-0.286-0.152-0.55-0.414-0.666  c-0.261-0.115-0.567-0.058-0.77,0.145l-4.604,4.604c-0.157,0.157-0.229,0.379-0.194,0.599l0.438,2.776l-7.533,7.532  c-0.271,0.271-0.271,0.71,0,0.981c0.136,0.135,0.313,0.203,0.491,0.203c0.178,0,0.355-0.068,0.491-0.203l7.533-7.532l2.775,0.438  c0.036,0.006,0.072,0.009,0.108,0.009c0.183,0,0.36-0.072,0.491-0.203l4.604-4.604C31.499,5.099,31.557,4.793,31.441,4.532z   M25.961,8.674l-2.276-0.359l-0.359-2.277l3.092-3.092l-0.086,1.999c-0.008,0.195,0.065,0.383,0.203,0.521  c0.138,0.137,0.321,0.211,0.521,0.203l1.999-0.086L25.961,8.674z"/></svg>
                </i>
                <h1 class="title text-center">Goal</h1>
                <p class="prev-p">
                We aspires to be the foremost innovative law firm by building long-term relationships
                with clients based on trust, sincerity and highest standards of professional ethics. <br>
                    <a href="<?php echo base_url()?>About"> <button class="btn btn-primary text-center btn-vision" type="button" name="button">Read More</button> </a>
                </p>
                <p class="hover-p">
                  To serve as a voice of clients & to respect them. To listen and understand clients & continuously seek ways to
                  impress our work, skills & quality services. To create & maintain professional lifelong trustworthy relations.
                  Client satisfaction with improved services of our team
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="padding-80 vision vision-mobile d-block d-sm-none">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body text-center">
                <i>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 80" x="0px" y="0px">
                    <path d="M32,0A32,32,0,1,0,64,32,32,32,0,0,0,32,0Zm0,62A30,30,0,1,1,62,32,30,30,0,0,1,32,62Z"/>
                    <path d="M32,20c-.9,0-10.35-.05-21.7,11.29a1,1,0,0,0,0,1.41C21.06,43.48,30.13,44,31.79,44h.42c1.67,0,10.73-.53,21.5-11.3a1,1,0,0,0,0-1.41C42.29,19.87,32.79,20,32,20ZM12.43,32A41.31,41.31,0,0,1,22.5,24.7a11.92,11.92,0,0,0,0,14.61A41.38,41.38,0,0,1,12.43,32ZM32,42A10,10,0,1,1,42,32,10,10,0,0,1,32,42Zm9.5-2.69a11.92,11.92,0,0,0,0-14.62A41.39,41.39,0,0,1,51.57,32,41.34,41.34,0,0,1,41.5,39.31Z"/>
                    <path d="M32,25a7,7,0,0,0,0,14,1,1,0,0,0,1-1V33h5a1,1,0,0,0,1-1A7,7,0,0,0,32,25Zm0,6a1,1,0,0,0-1,1v4.9A5,5,0,1,1,36.9,31Z"/>
                    <path d="M7,32H5A27,27,0,0,0,32,59V57A25,25,0,0,1,7,32Z"/>
                    <path d="M57,32h2A27,27,0,0,0,32,5V7A25,25,0,0,1,57,32Z"/>
                    <rect x="57" y="34" width="2" height="2"/>
                    <rect x="5" y="28" width="2" height="2"/>
                  </svg>
                </i>
                <h1 class="title text-center">Vision</h1>
                <p class="">
                  ASM legal services core values are embodied in our way of doing business and serve the client defined by Ethos,
                  Integrity, Confidentiality, Trust and Credibility.
                </p>
                <p class="text-center"><a href="<?php echo base_url()?>About"> <button class="btn btn-primary text-center btn-vision" type="button" name="button">Read More</button> </a></p>

              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card dark">
              <div class="card-body text-center">
                <i>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 80" x="0px" y="0px">
                    <path d="M32,60A28,28,0,1,1,60,32,28,28,0,0,1,32,60ZM32,6A26,26,0,1,0,58,32,26,26,0,0,0,32,6Z"/>
                    <path d="M32,53A21,21,0,1,1,53,32,21,21,0,0,1,32,53Zm0-40A19,19,0,1,0,51,32,19,19,0,0,0,32,13Z"/>
                    <path d="M32,9a1,1,0,0,1-1-1V2a1,1,0,0,1,2,0V8A1,1,0,0,1,32,9Z"/>
                    <path d="M32,63a1,1,0,0,1-1-1V56a1,1,0,0,1,2,0v6A1,1,0,0,1,32,63Z"/>
                    <path d="M8,33H2a1,1,0,0,1,0-2H8a1,1,0,0,1,0,2Z"/>
                    <path d="M62,33H56a1,1,0,0,1,0-2h6a1,1,0,0,1,0,2Z"/>
                    <path d="M32,37a8,8,0,0,1-8-8V20a1,1,0,0,1,1-1H39a1,1,0,0,1,1,1v9A8,8,0,0,1,32,37ZM26,21v8a6,6,0,0,0,12,0V21Z"/>
                    <path d="M32,41a1,1,0,0,1-1-1V36a1,1,0,0,1,2,0v4A1,1,0,0,1,32,41Z"/>
                    <path d="M37,47H27a1,1,0,0,1-1-1V40a1,1,0,0,1,1-1H37a1,1,0,0,1,1,1v6A1,1,0,0,1,37,47Zm-9-2h8V41H28Z"/>
                    <path d="M38,47H26a1,1,0,0,1,0-2H38a1,1,0,0,1,0,2Z"/>
                    <path d="M39,33a1,1,0,0,1-1-1V25.5a3.5,3.5,0,0,1,7,0V27A6,6,0,0,1,39,33Zm2.5-9A1.5,1.5,0,0,0,40,25.5v5.37A4,4,0,0,0,43,27V25.5A1.5,1.5,0,0,0,41.5,24Z"/>
                    <path d="M25,33a6,6,0,0,1-6-6V25.5a3.5,3.5,0,0,1,7,0V32A1,1,0,0,1,25,33Zm-2.5-9A1.5,1.5,0,0,0,21,25.5V27a4,4,0,0,0,3,3.87V25.5A1.5,1.5,0,0,0,22.5,24Z"/>
                  </svg>

                </i>
                <h1 class="title text-center text-white">Mission</h1>
                <p class="text-white">
                  Our mission throughout this website is to furnish a wide range of professional legal services with quality standards and with competitive price to our client.
                  We work with clients to understand their objectives
                </p>
                <p class="text-center">
                  <a href="<?php echo base_url()?>About"> <button class="btn btn-primary text-center btn-vision2" type="button" name="button">Read More</button> </a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body text-center">
                <i>
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 32 40" enable-background="new 0 0 32 32" xml:space="preserve">
                    <path d="M27.639,10.599c-0.351,0.155-0.51,0.564-0.356,0.915c0.743,1.686,1.12,3.482,1.12,5.341c0,7.31-5.947,13.257-13.258,13.257  c-7.31,0-13.257-5.947-13.257-13.257c0-7.311,5.947-13.258,13.257-13.258c1.858,0,3.656,0.378,5.342,1.121  c0.352,0.152,0.76-0.004,0.916-0.355c0.154-0.351-0.005-0.761-0.355-0.916c-1.864-0.821-3.85-1.238-5.902-1.238  C7.07,2.209,0.5,8.779,0.5,16.855C0.5,24.93,7.07,31.5,15.145,31.5c8.076,0,14.646-6.57,14.646-14.645  c0-2.052-0.416-4.038-1.237-5.9C28.398,10.604,27.989,10.446,27.639,10.599z"/>
                    <path d="M19.109,9.978c0.163-0.348,0.012-0.761-0.335-0.922c-1.141-0.531-2.361-0.801-3.628-0.801c-4.742,0-8.6,3.858-8.6,8.6  c0,4.742,3.858,8.599,8.6,8.599c4.742,0,8.6-3.857,8.6-8.599c0-1.269-0.271-2.491-0.804-3.633c-0.163-0.349-0.575-0.499-0.922-0.336  c-0.348,0.162-0.498,0.575-0.336,0.922c0.447,0.958,0.673,1.983,0.673,3.047c0,3.976-3.235,7.211-7.212,7.211  c-3.976,0-7.211-3.235-7.211-7.211c0-3.977,3.235-7.212,7.211-7.212c1.063,0,2.087,0.226,3.042,0.67  C18.534,10.476,18.947,10.325,19.109,9.978z"/>
                    <path d="M15.326,14.567c0.378,0.035,0.716-0.257,0.745-0.64c0.029-0.382-0.257-0.716-0.639-0.745  c-0.094-0.007-0.19-0.011-0.287-0.011c-2.03,0-3.683,1.652-3.683,3.683c0,2.03,1.652,3.683,3.683,3.683  c2.031,0,3.683-1.652,3.683-3.683c0-0.096-0.003-0.192-0.01-0.287c-0.029-0.382-0.362-0.665-0.745-0.64  c-0.382,0.029-0.669,0.362-0.64,0.745c0.005,0.06,0.007,0.121,0.007,0.182c0,1.265-1.029,2.294-2.295,2.294  c-1.265,0-2.294-1.029-2.294-2.294C12.851,15.528,14.029,14.46,15.326,14.567z"/><path d="M31.441,4.532c-0.116-0.262-0.369-0.438-0.666-0.415l-3.025,0.132l0.131-3.025c0.012-0.286-0.152-0.55-0.414-0.666  c-0.261-0.115-0.567-0.058-0.77,0.145l-4.604,4.604c-0.157,0.157-0.229,0.379-0.194,0.599l0.438,2.776l-7.533,7.532  c-0.271,0.271-0.271,0.71,0,0.981c0.136,0.135,0.313,0.203,0.491,0.203c0.178,0,0.355-0.068,0.491-0.203l7.533-7.532l2.775,0.438  c0.036,0.006,0.072,0.009,0.108,0.009c0.183,0,0.36-0.072,0.491-0.203l4.604-4.604C31.499,5.099,31.557,4.793,31.441,4.532z   M25.961,8.674l-2.276-0.359l-0.359-2.277l3.092-3.092l-0.086,1.999c-0.008,0.195,0.065,0.383,0.203,0.521  c0.138,0.137,0.321,0.211,0.521,0.203l1.999-0.086L25.961,8.674z"/></svg>
                </i>
                <h1 class="title text-center">Goal</h1>
                <p class="">
                  We aspires to be the foremost innovative law firm by building long-term relationships
                  with clients based on trust, sincerity and highest standards of professional ethics.
                </p>
                <p class="text-center">
                    <a href="<?php echo base_url()?>About"> <button class="btn btn-primary text-center btn-vision" type="button" name="button">Read More</button> </a>
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div id="Services">
    <section class="padding-80 home-services" id="Services">
      <div class="container">
        <h1 class="title text-center hr-bottom-m">Services We Render</h1>
        <p class="text-center home-services-detail">
          <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->
        </p>

        <div class="row">
          <div class="col-md-6">
            <img class="web-img" src="assets/images/propertie1.png" >
          </div>
          <div class="col-md-6">
            <h1 class="title">Property Matters</h1>
            <ul>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;All Types Of Civil Matters</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Injunction Suit & Stay Matter</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Construction Cases</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Tenant and Landlord</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Partition Suit</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Land and Acquisition</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Reality Sale ,Purchase & Lease Documentation</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Search & Title report</li>
            </ul>
          </div>

          <div class="col-md-6 d-block d-sm-none">
            <img class="web-img" src="assets/images/bank2.png" >
          </div>
          <div class="col-md-6">
            <h1 class="title">Banking Cases</h1>
            <ul>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Property Legal Search Report</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Debt Recovery Casesr</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Civil Suits</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Civil Recovery Proceedings & Executions</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Cases U/s 138 Of Negotiable Instrument Act (Cheque Bounce Matters.)</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Recovery Matters</li>
            </ul>
          </div>
          <div class="col-md-6 d-none d-sm-block">
            <img class="web-img" src="assets/images/bank2.png" >
          </div>

          <div class="col-md-6">
            <img class="web-img" src="assets/images/criminal.png" >
          </div>
          <div class="col-md-6">
            <h1 class="title">Criminal Matters</h1>
            <ul>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Customs and Excise Matter</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Injunction Suit & Stay Matter</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Rape, Sexual Harassment</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Murder All Case under the IPC</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;FEMA</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Matrimonial Cases</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Domestic Violence Act Cases</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Divorce Cases</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Dowry Cases</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Marriage Registration Matters</li>
            </ul>
          </div>

          <div class="col-md-12">
            <div class="row">
              <div class="text-center w-100 mt-5">
                  <a href="<?php echo base_url()?>Services"> <button class="btn btn-primary text-center btn-asm" type="button" name="button">Read More</button> </a>
              </div>
            </div>
          </div>

          <!-- <div class="col-md-6 d-block d-sm-none">
            <img class="web-img" src="assets/images/cyber.png" >
          </div>
          <div class="col-md-6">
            <h1 class="title">Cyber Crime</h1>
            <ul>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Hacking</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Security Related Crimes</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Internet Fraud</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Alteration & Destruction Of Digital Information</li>
            </ul>
          </div>
          <div class="col-md-6 d-none d-sm-block">
            <img class="web-img" src="assets/images/cyber.png" >
          </div>

          <div class="col-md-6">
            <img class="web-img" src="assets/images/consumer.png" >
          </div>
          <div class="col-md-6">
            <h1 class="title">Consumers Matters</h1>
            <ul>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Consumers Litigations</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Execution Petitions</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Matter before State Commissions</li>
              <li> <i class="fa fa-arrow-circle-o-right"></i> &nbsp;&nbsp;Matter before National Commissions</li>
            </ul>
          </div> -->

        </div>
      </div>
    </section>

    <section class="testimonials">

      <div class="container-flued padding-80 ">
        <div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
          <ol class="carousel-indicators testimonials-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active text-center">
              <p>
                It was really very good experience while working with ASM legal services. They have very professional and well experienced team working with them. This is being engaged in criminal, civil, family cases. Subsequently entire staff is very humble and cooperative with their clients.
              </p>
              <img class="mx-auto" src="assets/images/testimonial1.jpg" alt="First slide">
              <h2 class="sub-title">Anil Patil</h2>
              <!-- <p class="m-center">Cli</p> -->
            </div>
            <div class="carousel-item text-center">
              <p>
                I am very thankful to ASM legal services pertaining to helping in various legal suits and cased. Every stage of the case is being explained very promptly to me. Total team of the office is well educated, very professional and well mannered.
              </p>
              <img class="mx-auto" src="assets/images/testimonial2.jpg" alt="First slide">
              <h2 class="sub-title">Kausar Naikwadi</h2>
              <!-- <p class="m-center">Web Developer</p> -->
              <!-- <img class="d-block w-100" src="..." alt="Second slide"> -->
            </div>
            <div class="carousel-item text-center">
              <p>
                 Truly Professional Service ....Got my Agreement Registered in 2 Days, Staff  are very Supportive and helpful, Highly Recommended to this service provider to other peoples in Kolhapur.Thank you ASM Legal Services.
              </p>
              <img class="mx-auto" src="assets/images/testimonial3.jpg" alt="First slide">
              <h2 class="sub-title">Samad Sayyad</h2>
              <!-- <p class="m-center">Web Developer</p> -->
              <!-- <img class="d-block w-100" src="..." alt="Third slide"> -->
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
  </div>

    <!-- <section class="padding-80 home-contact" id="Contact">
      <div class="container">
        <h1 class="title text-center hr-bottom-m">Email us with any questions or enquiries.</h1>

        <div class="row">
          <div class="col-md-8 offset-md-2">
            <p>We would be happy to answer your questions and set up a meeting with you. ASM Legal Services can help set you apart from the flock !</p>
            <form action="Website/send_contact_email" method="post" id="form_contact">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">First Name*</label>
                  <input type="text" class="form-control required" name="contact_firstname" id="contact_firstname" placeholder="First Name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Last Name*</label>
                  <input type="text" class="form-control required" name="contact_lastname" id="contact_lastname" placeholder="Last Name" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email*</label>
                  <input type="email" class="form-control required email" name="conatact_email" id="conatact_email" placeholder="Email" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Mobile*</label>
                  <input type="number" class="form-control required mobile" name="contact_phone" id="contact_phone" placeholder="Phone" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputEmail4">Message*</label>
                  <textarea name="message" class="form-control required" name="contact_message" id="contact_message" rows="8" cols="80" required></textarea>
                </div>
              </div>
              <button type="button" id="btn_contact" class="btn btn-primary btn-asm float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <div class="alert-box w-100">
      <div class="alert alert-success mx-auto text-center" role="alert">
        Mail Sent Successfully.
      </div>
      <div class="alert alert-danger mx-auto text-center" role="alert">
        Mail Not sent.
      </div>
    </div> -->


    <?php include('footer.php'); ?>
    <!-- <?php
    $send_contact_email = $this->session->flashdata('send_email');
    if($send_contact_email){ ?>
    <input type="text" id="send_email" value="<?php echo $send_contact_email; ?>">
    <script type="text/javascript">
      $(document).ready(function(){
        var send_email = $('#send_email').val();
        if(send_email == 'success'){
          $('.alert-success').show().delay(5000).fadeOut();
        }
        else{
          $('.alert-danger').show().delay(5000).fadeOut();
        }
      });
    </script>
    <?php  } ?> -->

  </body>
</html>
