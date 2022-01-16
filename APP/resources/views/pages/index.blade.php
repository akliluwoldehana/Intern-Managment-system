@extends('layouts.bootStrap')


@section('content')

<header class="masthead">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="text-white-50 mx-auto mt-2 mb-5">Techin</h1>
          <h2 class="text-white-50 mx-auto mt-2 mb-5">Welcome Techin</h2>
          <a href="#about" class="btn btn-primary js-scroll-trigger">GET STARTED</a>
        </div>
      </div>
    </header>
  
    <!-- About Section -->
    <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4">About us</h2>
            <p class="text-white-50">
            
                
               <p> 
              </p>
          </div>
        </div>
        <img src="img/ipad.png" class="img-fluid" alt="">
      </div>
    </section>
  
    <!-- Projects Section -->
    <section id="projects" class="projects-section bg-light">
      <div class="container">
  
        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
          <div class="col-xl-8 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0" src="img/bg-masthead.jpg" alt="">
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h4>techin</h4>
              <p class="text-black-50 mb-0">techin</p>
            </div>
          </div>
        </div>
  
        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/demo-image-01.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h4 class="text-white">TechIn</h4>
                  <p class="mb-0 text-white-50">Techin.</p>
                  <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/demo-image-02.jpg" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                  <h4 class="text-white">Techin</h4>
                  <p class="mb-0 text-white-50">Techin</p>
                  <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
              </div>
            </div>
          </div>
        </div>
  
      </div>
    </section>
  
    <!-- Signup Section -->
    <section id="signup" class="signup-section">
      <div class="container">
        <h1 class="text-white mb-5">Contact Information :-</h1>
  <p class="text-white mb-5">Office Phone +(251) - 11 - 1264994</p>
  
  <p class="text-white mb-5">P.O.Box 2490</p>
  
  <p class="text-white mb-5">Physical Address:- In the compound of old ERPA Building, Arada Subcity, Behind Lycee G/Mariam School,Churchill Road Addis Ababa, Ethiopia</p>
  
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto text-center">
  
            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
            <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
  
            <form class="form-inline d-flex">
              <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
              <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
            </form>
  
          </div>
        </div>
      </div>
    </section>
  
    <!-- Contact Section -->
    <section class="contact-section bg-black">
      <div class="container">
  
        <div class="row">
  
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Address</h4>
                <hr class="my-4">
                <div class="small text-black-50">4killo 5th floor</div>
              </div>
            </div>
          </div>
  
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Email</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  <a href="#">techin@gmail.com</a>
                </div>
              </div>
            </div>
          </div>
  
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Phone</h4>
                <hr class="my-4">
                <div class="small text-black-50">Office Phone +(251) - 11 - 1264994</div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="social d-flex justify-content-center">
          <a href="#" class="mx-2">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-github"></i>
          </a>
        </div>
  
      </div>
    </section>
  
    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
        Copyright &copy; www.techin.et 2019
      </div>
    </footer>
  
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  
    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>
  

@endsection