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
        <h1>Services</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, similique!</p>
      </div>
    </div>
  </div>
</header>

<!-- Services -->
<section id="services" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card text-center">
          <div class="card-header">
            <h3>Service Plan One</h3>
          </div>
          <div class="card-body">
            <h4 class="card-title">
              $59.99/Month
            </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <ul class="list-group">
              <li class="list-group-item">
                <i class="fa fa-check"></i> Feature One
              </li>
              <li class="list-group-item">
                <i class="fa fa-check"></i> Feature Two
              </li>
              <li class="list-group-item">
                <i class="fa fa-check"></i> Feature Three
              </li>
              <li class="list-group-item">
                <i class="fa fa-check"></i> Feature Four
              </li>
              <li class="list-group-item">
                <i class="fa fa-check"></i> Feature Five
              </li>
            </ul>
            <a href="#" class="btn btn-danger btn-block mt-2">Get It</a>
            <div class="card-footer text-muted">
              1 Year Plan
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center">
          <div class="card-header">
            <h3>Service Plan One</h3>
          </div>
          <div class="card-body">
            <h4 class="card-title">
              $99.99/Month
            </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <ul class="list-group">
              <li class="list-group-item">
                <i class="fa fa-check"></i> Feature One
              </li>
              <li class="list-group-item">
                <i class="fa fa-check"></i> Feature Two
              </li>
              <li class="list-group-item">
                <i class="fa fa-check"></i> Feature Three
              </li>
              <li class="list-group-item">
                <i class="fa fa-check"></i> Feature Four
              </li>
              <li class="list-group-item">
                <i class="fa fa-check"></i> Feature Five
              </li>
            </ul>
            <a href="#" class="btn btn-danger btn-block mt-2">Get It</a>
            <div class="card-footer text-muted">
              1 Year Plan
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center">
          <div class="card-header">
            <h3>Service Plan One</h3>
          </div>
          <div class="card-body">
            <h4 class="card-title">
              $129.99/Month
            </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <ul class="list-group">
              <li class="list-group-item">
                <i class="fa fa-check"></i> Feature One
              </li>
              <li class="list-group-item">
                <i class="fa fa-check"></i> Feature Two
              </li>
              <li class="list-group-item">
                <i class="fa fa-check"></i> Feature Three
              </li>
              <li class="list-group-item">
                <i class="fa fa-check"></i> Feature Four
              </li>
              <li class="list-group-item">
                <i class="fa fa-check"></i> Feature Five
              </li>
            </ul>
            <a href="#" class="btn btn-danger btn-block mt-2">Get It</a>
            <div class="card-footer text-muted">
              1 Year Plan
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq" class="p-5 bg-dark text-white">
  <div class="container">
    <h1 class="text-center">Frequently Asked Question</h1>
     <br>
     <div class="row">
       <div class="col-md-6">
         <div id="accordion">
           <div class="card">
             <div class="card-header" id="headingOne">
               <h5 class="mb-0">
                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Question One?</a>
               </h5>
             </div>
             <div id="collapseOne" class="collapse">
               <div class="card-body">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum eos enim vitae soluta quaerat exercitationem nobis obcaecati quisquam doloribus sunt?
               </div>
             </div>
           </div>
           <div class="card">
             <div class="card-header" id="headingTwo">
               <h5 class="mb-0">
                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Question Two?</a>
               </h5>
             </div>
             <div id="collapseTwo" class="collapse">
               <div class="card-body">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum eos enim vitae soluta quaerat exercitationem nobis obcaecati quisquam doloribus sunt?
               </div>
             </div>
           </div>
           <div class="card">
             <div class="card-header" id="headingThree">
               <h5 class="mb-0">
                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Question Three?</a>
               </h5>
             </div>
             <div id="collapseThree" class="collapse">
               <div class="card-body">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum eos enim vitae soluta quaerat exercitationem nobis obcaecati quisquam doloribus sunt?
               </div>
             </div>
           </div>
         </div>
       </div>
         <div class="col-md-6">
           <div id="accordion">
             <div class="card">
               <div class="card-header" id="headingFour">
                 <h5 class="mb-0">
                   <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Question Four?</a>
                 </h5>
               </div>
               <div id="collapseFour" class="collapse">
                 <div class="card-body">
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum eos enim vitae soluta quaerat exercitationem nobis obcaecati quisquam doloribus sunt?
                 </div>
               </div>
             </div>
             <div class="card">
               <div class="card-header" id="headingFive">
                 <h5 class="mb-0">
                   <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Question Five?</a>
                 </h5>
               </div>
               <div id="collapseFive" class="collapse">
                 <div class="card-body">
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum eos enim vitae soluta quaerat exercitationem nobis obcaecati quisquam doloribus sunt?
                 </div>
               </div>
             </div>
             <div class="card">
               <div class="card-header" id="headingSix">
                 <h5 class="mb-0">
                   <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Question Six?</a>
                 </h5>
               </div>
               <div id="collapseSix" class="collapse">
                 <div class="card-body">
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum eos enim vitae soluta quaerat exercitationem nobis obcaecati quisquam doloribus sunt?
                 </div>
               </div>
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
