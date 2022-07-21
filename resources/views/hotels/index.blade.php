

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tourism</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .checked {
      color: orange;
    }

    
  .card:hover{
     transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}
    </style>
<body>
    <!-- Navbar Start -->
    <div class="container-fluid nav-bar p-0">
        <div class="container-lg p-0">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 text-white display-4"><span class="text-primary">T</span>ou<span class="text-primary">R</span>ism</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="/home" class="nav-item nav-link active">Home</a>
                        <a href="/hotel" class="nav-item nav-link">Hotels</a>
                        <a href="/place" class="nav-item nav-link">Places</a>
                        <a href="/book" class="nav-item nav-link">booking</a>


                        {{-- <a href="service.html" class="nav-item nav-link">Services</a>
                        <a href="pricing.html" class="nav-item nav-link">Receving</a> --}}
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="img/test5.jpg " alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center ">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Creative Agency</h5>
                            <h1 class="display-3 text-white mb-md-4">Creative Services For Brands Grow</h1>
                            <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="img/test3.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Creative Agency</h5>
                            <h1 class="display-3 text-white mb-md-4">Highly Professional Team Members</h1>
                            <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="img/test11.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Creative Agency</h5>
                            <h1 class="display-3 text-white mb-md-4">Happy Clients & Positive Reviews</h1>
                            <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    
    <h1 class="m-0 text-white display-4 text-center"><span class="text-primary">H</span><span class="text-primary">ot</span><span class="text-primary">e</span><span class="text-primary">l</span></h1>
    
    {{-- <div class="container my-5 d-flex justify-content-around">
        <div class="row">
   
    @foreach ($data as $item)
    <div class="col-md-4 col-sm-4 lg-12 mb-5 " style="width:100%;">

<div class="card border-0 shadow p-3 mb-5 bg-body rounded" style="width:100%; ">
    <img src="img/{{$item->name_img}}" class="card-img-top" style="width:100%; height:200px;">
    <div class="card-body">
      <h4 class="card-title">{{$item->name}}</h4>
      <p class="card-text">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
      </p>
      <h5>{{$item->location}}</h5>
      <h5><b>Price : </b>EGP {{$item->price}}</h4>
      <a
      href="{{route ('hotel.show',[$item->id])}}"
       class="btn btn-primary "
      style="width:100%;">
        Details</a>
        
    </div>
    
</div>
</div>
@endforeach

</div>
</div> --}}
<div class="container my-5 d-flex justify-content-around">
    <div class="row">

        @foreach ($data as $item)
        <div class="col-md-4 col-sm-4 lg-12 mb-5 ">

    <div class="card border-0 shadow p-3 mb-5 bg-body rounded" style="width:100%; ">
        <img src="img/{{$item->name_img}}" class="card-img-top" style="width:100%; height:200px;">
        <div class="card-body">
          <h4 class="card-title">{{$item->name}}</h4>
          <p class="card-text">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </p>
          <h5>{{$item->location}}</h5>
          <h5><b>Price : </b>EGP {{$item->price}}</h4>
            <a
            href="{{route ('hotel.show',[$item->id])}}"
             class="btn btn-primary "
            style="width:100%;">
              Details</a>
        </div>
    </div>
</div>
    @endforeach

    </div>
    </div>
<!-- About End -->



    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 pt-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 mt-n2 text-white display-4"><span class="text-primary">T</span>ou<span class="text-primary">R</span>ism</h1>
                </a>
                <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="font-weight-bold text-primary mb-4">Quick Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Places</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Services</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Receving</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="font-weight-bold text-primary mb-4">Popular Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Places</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Services</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Receving</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="font-weight-bold text-primary mb-4">Get In Touch</h5>
                <p>Dolor clita stet nonumy clita diam vero, et et ipsum diam labore</p>
                <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>tal el amrna - el minia</p>
                <p><i class="fa fa-phone-alt text-primary mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope text-primary mr-2"></i>info@example.com</p>
            </div>
        </div>
    </div>
    {{-- <div class="container-fluid py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center">
            &copy; <a class="font-weight-semi-bold" href="#">Tourism</a>. All Rights Reserved. Designed by
            <a class="font-weight-semi-bold" href="https://htmlcodex.com">iTi Team</a>
        </p>
    </div> --}}
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>


