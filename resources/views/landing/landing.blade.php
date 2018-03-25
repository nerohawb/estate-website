@extends('layout')
@include('nav.nav')

@section('head')

    <link href="/css/landing.css" rel="stylesheet">

@endsection


@section('content')

<!-- Carousel -->
<section id="showcase">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item carousel-image-1 active">
        <!-- <div class="container">
          <div class="carousel-caption d-none d-sm-block text-right mb-5">
             <h1 class="display-3">Heading One</h1>
             <p class="lead">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, earum, id. Quis aperiam nisi facilis porro placeat nulla vero veniam.
             </p>
             <a href="#" class="btn btn-danger btn-lg">Sign Up Now</a>
          </div>
        </div> -->
      </div>
      <div class="carousel-item carousel-image-2">
        <!-- <div class="container">
          <div class="carousel-caption d-none d-sm-block text-right mb-5">
             <h1 class="display-3">Heading Two</h1>
             <p class="lead">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, earum, id. Quis aperiam nisi facilis porro placeat nulla vero veniam.
             </p>
             <a href="#" class="btn btn-primary btn-lg">Learn More</a>
          </div>
        </div> -->
      </div>
      <div class="carousel-item carousel-image-3">
        <!-- <div class="container">
          <div class="carousel-caption d-none d-sm-block text-right mb-5">
             <h1 class="display-3">Heading Three</h1>
             <p class="lead">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, earum, id. Quis aperiam nisi facilis porro placeat nulla vero veniam.
             </p>
             <a href="#" class="btn btn-success btn-lg">Learn More</a>
          </div>
        </div> -->
      </div>
    </div>

    <!-- <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
      <span class="carousel-control-prev-icon"></span>
    </a>

    <a href="#myCarousel" data-slide="next" class="carousel-control-next">
      <span class="carousel-control-next-icon"></span>
    </a> -->
  </div>
</section>

<section id="home-icon" class="bg-white bg-light py-3">
  <div class="container align-self-center">
    <div class="row">
      <div class="col-md-6">
        <div class="container">
          <hr>
          <h1 class="text-center"> <i class="fa fa-home text-center"></i> Find Your Home Here!</h1>
          <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat non voluptas ratione, obcaecati iste voluptatum impedit quod hic quam, corporis voluptate soluta omnis facere deserunt odit placeat recusandae, necessitatibus enim laboriosam dolor voluptatibus cupiditate fugiat dolores. Cupiditate hic, blanditiis possimus!</p>
          <hr>
          <div class="text-center"><button class="btn btn-primary">Read More</button></div>
        </div>
      </div>
      <div class="col-md-6 text-center d-none d-md-block">
        <img src="/images/profile.jpeg" alt="" class="img-fluid"style="height: 320px;">
      </div>
    </div>
  </div>
</section>

<!-- Home Heading -->
<section id="home-heading" class="p-5">
  <div class="dark-overlay">
    <div class="row">
      <div class="col">
        <div class="container pt-5">
          <h1>Are you Ready to Get Started</h1>
          <p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium maxime nisi, quam quis eligendi eius iure fuga. Vitae perspiciatis, vero.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- INFO -->
<section id="info" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 align-self-center pb-2" style="height: 200px;">
          <div class="hovereffect">
            <img class="img-responsive img" src="/images/button01.jpg" alt="">
            <div class="overlay">
              <h2>Find Lands</h2>
        			   <p><a href="#">LINK HERE</a></p>
              </div>
            </div>
        </div>
        <div class="col-md-4 align-self-center pb-2" style="height: 200px;">
          <div class="hovereffect">
            <img class="img-responsive img" src="/images/button01.jpg" alt="">
            <div class="overlay">
              <h2>Portfolio</h2>
                 <p><a href="#">LINK HERE</a></p>
              </div>
            </div>
        </div>
        <div class="col-md-4 align-self-center pb-2" style="height: 200px;">
          <div class="hovereffect">
            <img class="img-responsive img" src="/images/button01.jpg" alt="">
            <div class="overlay">
              <h2>Purchase Lands</h2>
                 <p><a href="#">LINK HERE</a></p>
              </div>
            </div>
        </div>
      </div>
    </div>
</section>

<!-- Video Play -->
<section id="video-play">
  <div class="dark-overlay">
    <div class="row">
      <div class="col">
        <div class="container p-5">
          <a href="" class="video" data-video="https://www.youtube.com/embed/g6krjPi4Osc" data-toggle="modal" data-target="#videoModal">
            <i class="fa fa-play"></i>
          </a>
          <h1>See What We Do</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Photo Gallery -->
<section id="gallery" class="py-5">
  <div class="container">
    <h1 class="text-center">Photo Gallery</h1>
    <p class="text-center">Check out our photos</p>
    <div class="row mb-4">
      <div class="col-md-4">
        <a href="https://picsum.photos/560/560?image=0"
          data-toggle="lightbox" data-gallery="img-gallery">
            <img src="https://picsum.photos/400/400?image=0" alt="" class="img-fluid">
          </a>
      </div>
      <div class="col-md-4">
        <a href="https://picsum.photos/560/560?image=1"
          data-toggle="lightbox" data-gallery="img-gallery">
            <img src="https://picsum.photos/400/400?image=1" alt="" class="img-fluid">
          </a>
      </div>
      <div class="col-md-4">
        <a href="https://picsum.photos/560/560?image=2"
          data-toggle="lightbox" data-gallery="img-gallery">
            <img src="https://picsum.photos/400/400?image=2" alt="" class="img-fluid">
          </a>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-md-4">
        <a href="https://picsum.photos/560/560?image=3"
          data-toggle="lightbox" data-gallery="img-gallery">
            <img src="https://picsum.photos/400/400?image=3" alt="" class="img-fluid">
          </a>
      </div>
      <div class="col-md-4">
        <a href="https://picsum.photos/560/560?image=4"
          data-toggle="lightbox" data-gallery="img-gallery">
            <img src="https://picsum.photos/400/400?image=4" alt="" class="img-fluid">
          </a>
      </div>
      <div class="col-md-4">
        <a href="https://picsum.photos/560/560?image=5"
          data-toggle="lightbox" data-gallery="img-gallery">
            <img src="https://picsum.photos/400/400?image=5" alt="" class="img-fluid">
          </a>
      </div>
    </div>
  </div>
</section>

<footer id="main-footer" class="text-center p-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <p>Copyright 2018 &copy; Herrera</p>
      </div>
    </div>
  </div>
</footer>

<!-- Video Modal -->
<div class="modal fade" id="videoModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
        <!-- <iframe src="" height="350" width="100%" frameborder="0" allowfullscreen></iframe> -->
          <iframe width="100%" height="50%" src="https://www.youtube.com/embed/g6krjPi4Osc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

@endsection
