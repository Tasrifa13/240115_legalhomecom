@extends('master.master')
@section('content')
<!-- carousel -->
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/img/jaksa3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item active">
                    <img src="assets/img/jaksa2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item active">
                    <img src="assets/img/jaksa1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>

              </div><!-- End carousel -->


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="200">
      <h1 class="text-dark">Better Solutions For Your Business</h1>
      <h2 class="text-dark">We are team of talented designers making websites with Bootstrap</h2>
      <div class="d-flex justify-content-center justify-content-lg-start">
        <a href="#" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
      <img src="assets/img/img1.jpg" class="img-fluid animated" alt="">
    </div>
  </div>
</div>
</section>
<!-- End Hero -->

<!-- ======= Skills Section ======= -->
<section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="200">
            <img src="assets/img/img2.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="200">
            <h3>Voluptatem dignissimos provi quasi corporis voluptates</h3>
            <p data-aos="fade-left" data-aos-delay="200">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam itaque odio nostrum, distinctio harum vel. Ducimus quibusdam delectus nesciunt. Veniam dolorem dolorum animi ipsum aperiam sapiente unde, et sit error.
            </p>
            <p data-aos="fade-left" data-aos-delay="200">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam itaque odio nostrum, distinctio harum vel. Ducimus quibusdam delectus nesciunt. Veniam dolorem dolorum animi ipsum aperiam sapiente unde, et sit error.
            </p>
            <p data-aos="fade-left" data-aos-delay="200">
              do eiusmod tempor incididunt ut labore et dolore Veniam dolorem dolorum animi ipsum aperiam sapiente unde, et sit error. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur aliquam praesentium temporibus fuga, non, excepturi odit facilis hic similique corporis veritatis ea commodi perspiciatis dicta voluptatum, beatae quod dignissimos deserunt!
            </p>
          </div>
        </div>

      </div>
@endsection
