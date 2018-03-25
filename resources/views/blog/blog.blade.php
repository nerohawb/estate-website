@extends('layout')
@include('nav.nav')

@section('head')

    <link href="/css/landing.css" rel="stylesheet">

@endsection


@section('content')

<header id="page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-6 m-auto text-center">
        <h1>Pricing</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, similique!</p>
      </div>
    </div>
  </div>
</header>

<!-- Blog -->
<section id="blog" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card-columns">
          <div class="card">
            <img src="https://picsum.photos/500/500?image=10" alt="" class="card-img-top img-fluid">
            <div class="card-body">
              <h4 class="card-title">Blog Post One</h4>
              <small class="text-muted">Written by Jeff on 07/20</small>
              <hr>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam amet voluptatibus vitae ut adipisci vero dolorum nobis nemo exercitationem, nihil.</p>
            </div>
          </div>

          <div class="card p-3">
            <blockquote class="card-body card-blockquote">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque aspernatur harum eos non ipsam temporibus.</p>
              <footer>
                <small class="text-muted">Someone Famous in <cite title="Source Titlte">Source Title</cite></small>
              </footer>
            </blockquote>
          </div>

          <div class="card">
            <img src="https://picsum.photos/500/500?image=11" alt="" class="card-img-top img-fluid">
            <div class="card-body">
              <h4 class="card-title">Blog Post Two</h4>
              <small class="text-muted">Written by Mike on 07/20</small>
              <hr>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam amet voluptatibus vitae ut adipisci vero dolorum nobis nemo exercitationem, nihil.</p>
            </div>
          </div>

          <div class="card p-3 bg-danger text-white">
            <blockquote class="card-body card-blockquote">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque aspernatur harum eos non ipsam temporibus.</p>
              <footer>
                <small>Someone Famous in <cite title="Source Titlte">Source Title</cite></small>
              </footer>
            </blockquote>
          </div>

          <div class="card">
            <img src="https://picsum.photos/500/500?image=12" alt="" class="card-img-top img-fluid">
            <div class="card-body">
              <h4 class="card-title">Blog Post Two</h4>
              <small class="text-muted">Written by Mike on 07/20</small>
              <hr>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam amet voluptatibus vitae ut adipisci vero dolorum nobis nemo exercitationem, nihil.</p>
            </div>
          </div>

          <div class="card p-3 bg-primary text-white">
            <blockquote class="card-body card-blockquote">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque aspernatur harum eos non ipsam temporibus.</p>
              <footer>
                <small>Someone Famous in <cite title="Source Titlte">Source Title</cite></small>
              </footer>
            </blockquote>
          </div>

        </div>
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

@endsection
