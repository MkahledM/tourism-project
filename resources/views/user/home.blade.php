<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tourism</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <style>
        input[type=text] {
  width: 130px;
  height: 50px;

  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 50%;
  
}
    </style>
</head>

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
            <div class="form-search ml-4" >
                <form action="/search" method="GET">
                    <div class="form-group" style="display: flex">
                          <input type="text" name="ttt"  class="form-controll">

                        {{-- <input type="text" name="ttt" class="form-controll"> --}}
                         <button type="submit" class="btn btn-primary" style="  border-radius: 4px;
                         " >Search</button>
                    </div>
                </form>
            </div> 
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




    {{-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> --}}
           <div class=" slide d-flex justify-content-center">
      <div id="carouselExampleCaptions" class="carousel w-25  " data-bs-ride="carousel" style="height:25%;" >
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/h2d2.jpg" class="d-block " width="100%" height="100%">
           
          </div>
          <div class="carousel-item">
            <img src="img/h2d3.jpg" class="d-block " width="100%" height="100%">
            
          </div>
          <div class="carousel-item">
            <img src="img/h2d1.jpg" class="d-block " width="100%" height="100%">
           
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
      </div>
    </div>
   

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center pb-1">
                <div class="col-lg-5">
                    <img class="img-thumbnail p-3" src="img/new.jpg" alt="">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">Who We Are</small>
                    <h1 class="mt-2 mb-4">A brief overview of the ancient Egyptian civilization</h1>
                    <p class="mb-4">Ancient Egyptian architecture included some of the world's most famous monuments, the most important of which were the Pyramids of Giza and the Temple of Karnak at Thebes. The state was the official and financier of construction projects, either for religious and ceremonial purposes or to enhance and demonstrate the authority and power of the pharaoh.</p>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Read More</a>
                </div>
            </div>

        </div>
    </div>

    <!-- About End -->


    <!-- Services Start -->
    {{-- <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">What we do</small>
                    <h1 class="mt-2 mb-3">We give you the best offers</h1>
                    <h4 class="font-weight-normal text-muted mb-4">We book tourist places and offer you the best offers and the best hotels. We care about you and work to provide you with comfort so that you feel happy during your tourist trip.</h4>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Discover More</a>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <div class="d-flex">
                                <i class="fa fa-3x fa-laptop-code text-primary mr-4"></i>
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold mb-3">Reservation of tourist places</h4>
                                    <p>Et kasd justo clita amet kasd, vero amet vero eos kasd diam justo, ipsum diam sed elitr erat</p>
                                    <a class="font-weight-semi-bold" href="/place">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="d-flex">
                                <i class="fa fa-3x fa-code text-primary mr-4"></i>
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold mb-3">Book a hotel</h4>
                                    <p>Et kasd justo clita amet kasd, vero amet vero eos kasd diam justo, ipsum diam sed elitr erat</p>
                                    <a class="font-weight-semi-bold" href="">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="d-flex">
                                <i class="fa fa-3x fa-envelope-open-text text-primary mr-4"></i>
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold mb-3">Car reservation</h4>
                                    <p>Et kasd justo clita amet kasd, vero amet vero eos kasd diam justo, ipsum diam sed elitr erat</p>
                                    <a class="font-weight-semi-bold" href="">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="d-flex">
                                <i class="fa fa-3x fa-chart-line text-primary mr-4"></i>
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold mb-3">Book a tour guide</h4>
                                    <p>Et kasd justo clita amet kasd, vero amet vero eos kasd diam justo, ipsum diam sed elitr erat</p>
                                    <a class="font-weight-semi-bold" href="">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Services End -->


    <!-- Features Start -->

    <!-- Features End -->


    <!-- Team Start -->
 <!-- Team End -->


    <!-- Pricing Plan Start -->
    <!-- Pricing Plan End -->


    <!-- Testimonial Start -->
    {{-- <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">What clients say</small>
                    <h1 class="mt-2 mb-3">Clients Say About Our Services</h1>
                    <h4 class="font-weight-normal text-muted mb-4">Lorem ut kasd elitr sed est duo ea ipsum justo diam, est erat lorem clita diam elitr</h4>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Submit Review</a>
                </div>
                <div class="col-lg-8 mb-5">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item">
                            <div class="testimonial-text position-relative border mb-4" style="padding: 25px 30px;">
                                Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;" alt="Image">
                                <div class="pl-4">
                                    <h6 class="font-weight-bold">Client Name</h6>
                                    <i class="text-muted">Profession</i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-text position-relative border mb-4" style="padding: 25px 30px;">
                                Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;" alt="Image">
                                <div class="pl-4">
                                    <h6 class="font-weight-bold">Client Name</h6>
                                    <i class="text-muted">Profession</i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-text position-relative border mb-4" style="padding: 25px 30px;">
                                Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;" alt="Image">
                                <div class="pl-4">
                                    <h6 class="font-weight-bold">Client Name</h6>
                                    <i class="text-muted">Profession</i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-text position-relative border mb-4" style="padding: 25px 30px;">
                                Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;" alt="Image">
                                <div class="pl-4">
                                    <h6 class="font-weight-bold">Client Name</h6>
                                    <i class="text-muted">Profession</i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-text position-relative border mb-4" style="padding: 25px 30px;">
                                Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle" src="img/testimonial-5.jpg" style="width: 80px; height: 80px;" alt="Image">
                                <div class="pl-4">
                                    <h6 class="font-weight-bold">Client Name</h6>
                                    <i class="text-muted">Profession</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->


    <!-- Blog Start -->
    {{-- <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center">
                <small class="bg-primary text-white text-uppercase font-weight-bold text-center px-1">Our Blog</small>
                <h1 class="mt-2 mb-5">Latest From Blog</h1>
            </div>
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/hotel3.jpg" alt="">
                        <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center"
                            style="width: 80px; height: 80px; bottom: 0; left: 0;">
                            <h6 class="text-uppercase mt-2 mb-n2">Jan</h6>
                            <h1 class="m-0">01</h1>
                        </div>
                    </div>
                    <div class="border border-top-0" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/user.jpg" alt="">
                                <a class="text-muted ml-2" href="">omar omran</a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <i class="far fa-bookmark text-primary"></i>
                                <a class="text-muted ml-2" href="">tour guid</a>
                            </div>
                        </div>
                        <a class="h5 font-weight-bold" href="">Kasd tempor diam sea justo dolor kasd amet dolor labore amet clita est diam dolor</a>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/hotel2.jpg" alt="">
                        <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center"
                            style="width: 80px; height: 80px; bottom: 0; left: 0;">
                            <h6 class="text-uppercase mt-2 mb-n2">Jan</h6>
                            <h1 class="m-0">01</h1>
                        </div>
                    </div>
                    <div class="border border-top-0" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/user.jpg" alt="">
                                <a class="text-muted ml-2" href="">mostaf kh</a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <i class="far fa-bookmark text-primary"></i>
                                <a class="text-muted ml-2" href="">tour guid</a>
                            </div>
                        </div>
                        <a class="h5 font-weight-bold" href="">Kasd tempor diam sea justo dolor kasd amet dolor labore amet clita est diam dolor</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Blog End -->


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
    <div class="container-fluid py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center">
            &copy; <a class="font-weight-semi-bold" href="#">Tourism</a>. All Rights Reserved. Designed by
            <a class="font-weight-semi-bold" href="https://htmlcodex.com">iTi Team</a>
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
