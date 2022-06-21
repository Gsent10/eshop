@extends('layouts.frontend')

@section('content')

<main>
  <div class="intro-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-xl-4 ms-auto mt-5">
          <h1>Let's start something big <span class="yellow-stroke">together</span></h1>
          <label for="">Get your update <span>news</span></label>
          <div class="news-form">
            <input type="email" name="email" placeholder="Enter your email" id="">
            <button class="main-btn" type="submit">Send <img style="width: 15px; margin-left: 15px;" src="img/icon/arrow-right-icon-black.svg" alt=""></button>
          </div>
        </div>
        <div class="col-12 d-md-flex justify-content-between mb-5">
          <div class="light-box first">
              <h4>Digital<br>Marketing</h4>
              <p>Lorem Ipsum is simply dummy text of the printing </p>
              <a class="arrow" href=""><img style="width: 20px;" src="assets/img/icon/arrow-right-icon.svg" alt=""></a>
          </div>
          <div  class="light-box second">
              <h4>Corporate<br>Identity</h4>
              <p>Lorem Ipsum is simply dummy text of the printing </p>
              <a class="arrow" href=""><img style="width: 20px;" src="assets/img/icon/arrow-right-icon.svg" alt=""></a>
          </div>
          <div  class="light-box third">
              <h4>Email<br>Marketing</h4>
              <p>Lorem Ipsum is simply dummy text of the printing </p>
              <a class="arrow" href=""><img style="width: 20px;" src="assets/img/icon/arrow-right-icon.svg" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <!-- Clients -->
    <div class="clients text-center">
      <p class="text-muted text-uppercase pb-4">Some of our trusted clients</p>
      <div class="client-logo">
        <div><img src="assets/img/icon/go-sm-logo.svg" alt=""></div>
        <div><img src="assets/img/icon/social-road-logo.svg" alt=""></div>
        <div><img src="assets/img/icon/firmbee-logo.svg" alt=""></div>
        <div><img src="assets/img/icon/create-paper.svg" alt=""></div>
        <div><img src="assets/img/icon/point-design-logo.svg" alt=""></div>
      </div>
    </div>
    <!-- See our projects -->
    <div class="see-our-projects">
      <h1>See our <span class="yellow-stroke">projects</span> </h1>
      <div class="projects-wrapper">
  @if (isset($products))
    @foreach ($products as $product)
      <a href="/{{ $product->slug }}"><div class="project">
        <div class="project-logo">
        <img src="assets/img/icon/go-sm-logo-color.svg" alt="">
        </div>
        <p class="project-title">{{ $product->name }}</p>
        <p class="project-description">{{ $product->description }}</p>
        <p><strike>${{ $product->price }}</strike>    ${{ $product->sale_price }}</p>
      </div></a>
    @endforeach
    @endif
      </div>
      <a href="" class="main-btn">View Full <strong>Portfolio</strong></a>
    </div>
    <!-- What people say -->
    <div class="testimonials">
      <h1>What people say <span class="yellow-stroke">About Us</span> </h1>
      <div id="carouseltestimonials" class="carousel slide w-100" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="testimonial">
              <div class="photo">
                <img src="assets/img/person-1.jpg" alt="">
              </div>
              <div class="testimonial-text">
                <div class="quote-test"><img src="assets/img/icon/quaote.png" alt=""></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                  a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p class="name">-  John Bag</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial">
              <div class="photo">
                <img src="assets/img/person-2.jpg" alt="">
              </div>
              <div class="testimonial-text">
                <div class="quote-test"><img src="assets/img/icon/quaote.png" alt=""></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                  a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p class="name">-  John Bag</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial">
              <div class="photo">
                <img src="assets/img/person-3.jpg" alt="">
              </div>
              <div class="testimonial-text">
                <div class="quote-test"><img src="assets/img/icon/quaote.png" alt=""></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                  a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p class="name">-  John Bag</p>
              </div>
            </div>
          </div>
          <div class="controllers">
            <button  type="button" data-bs-target="#carouseltestimonials" data-bs-slide="prev">
              <img class="black" src="assets/img/icon/arrow-left-icon-black.svg" alt="" >
              <img class="yellow" src="assets/img/icon/arrow-left-icon.svg" alt="">
              <span class="visually-hidden">Previous</span>
            </button>
            <button  type="button" data-bs-target="#carouseltestimonials" data-bs-slide="next">
              <img class="black" src="assets/img/icon/arrow-right-icon-black.svg" alt="">
              <img class="yellow" src="assets/img/icon/arrow-right-icon.svg" alt="">
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>  
      </div>
    </div>
    <!-- Newsletter -->
    <div class="update-news">
      <div class="row">
        <div class="col-md-6 news-text">
          <h2>Get your update news</h2>
          <p>If you going to use a passage of Lotem Ipsum, you need to be sure there  isn’t anything embarrassing.</p>
        </div>
        <div class="col-md-6 news-form">
          <input type="email" name="email" placeholder="Enter your email" id="">
          <button class="main-btn" type="submit">Send <img style="width: 15px; margin-left: 15px;" src="assets/img/icon/arrow-right-icon-black.svg" alt=""></button>
        </div>
      </div>
      </div>
     <!-- Variations -->
    <div class="variations">
        <div class="text">
          <h1>There are many variations</h1>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
          <a href="" class="main-btn">Read more</a>
        </div>
        <div class="img">
          <img src="assets/img/woman.png" alt="">
        </div>
    </div> 
    <!-- Latest Articles -->
    <div class="latest-articles text-center">
      <h1>Our latest <span class="yellow-stroke">Articles</span></h1>
      <div class="latest-articles-wrapper">
        <div class="article">
          <img src="assets/img/post-1.png" alt="">
          <p class="article-meta"><img src="assets/img/icon/calendar.svg" alt=""><span class="data text-muted">August 24, 2021</span></p>
          <a href="single-post.html"><h4 class="title">Develop Marketing</h4></a>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        </div>
        <div class="article">
          <img src="assets/img/post-2.png" alt="">
          <p class="article-meta"><img src="assets/img/icon/calendar.svg" alt=""><span class="data text-muted">July 13, 2021</span></p>
          <a href="single-post.html"><h4 class="title">Resources Your Blog</h4></a>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        </div>
        <div class="article">
          <img src="assets/img/post-3.png" alt="">
          <p class="article-meta"><img src="assets/img/icon/calendar.svg" alt=""><span class="data text-muted">April 18, 2021</span></p>
          <a href="single-post.html"><h4 class="title">Know Your Audience</h4></a>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection
