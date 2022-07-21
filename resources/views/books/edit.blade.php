{{-- <html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
 
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
 
  <!-- Libraries Stylesheet -->
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
 
  <!-- Customized Bootstrap Stylesheet -->
  <link href="../css/style.css" rel="stylesheet">
 
  <!-- Font Awesome Icon Library -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  .checked {
    color: orange;
  }
  </style>
  <body    >
    <!-- Navbar Start -->
  
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
              <a href="service.html" class="nav-item nav-link">Services</a>
              <a href="pricing.html" class="nav-item nav-link">Receving</a>
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
    
{{-- @dd($data) --}}
{{-- <div class="container my-5 d-flex justify-content-around">
  <div class="row">
  <form action="{{route('book.update',[$data->id])}}" method="POST">
    @method("PUT")
    @csrf
   
     
     <table class="table"  >
    
      <tbody>
      
        <tr>
          <td> <div class="mb-3">
            <img src="../img/{{$data->name_img}}" width="200px" height="200px">
            </div></td>

          <td> <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{$data->name}}" readonly>
          </div></td>
          <td> <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">price</label>
            <input type="text" class="form-control" name="price" id="val1" value="{{$data->price}}" readonly>
            <div class="mb-3">
    
              <input type="hidden" class="form-control" name="name_img"  value="{{$data->name_img}}">
              </div>
            </div></td>
          <td>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Arive</label>
              <input type="date"  id="val3"   class="form-control" >
            </div>
          </td>
          <td>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">leave</label>
              <input type="date"  id="val4"   class="form-control" >
            </div>
          </td>
          <td>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">days</label>
              <input type="hidden"  id="m"   class="form-control"   name="days" >
              
           <span id="result"  class="form-control" onmousemove="totalday()" name="days"></span>
          </div>
        </td>
              
          <td>
          
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">total</label>
              <input type="hidden"  id="x"   class="form-control"   name="total" >

            <span   id="tr"   class="form-control" onmousemove="total()" name="total" value="" readonly></span></td>
            </div>
            <td> <div class="mb-3"> 
              <label for="exampleInputEmail1" class="form-label"></label><br><br>
               <button type="submit" class="btn btn-primary">Submit</button>
              </div></td>
        </tr>
           
       
      </tbody>
    </table> 
  

  </form>
</div> --}}

{{-- </div> --}}


{{-- </div>


  <script>
    function total(){
num1 = document.getElementById("result").innerHTML;
num2 = document.getElementById("val1").value;
     c=document.getElementById("tr").innerHTML = num1 * num2 
    document.getElementById("x").value = c



    }

    
    function totalday(){


  let date1 = new Date (document.getElementById("val3").value);
  let date2 = new Date (document.getElementById("val4").value);
// console.log(date1 , date2);
if(date1.getTime() && date2.getTime()){



  let x = date2.getTime() - date1.getTime();
  // console.log(x);
  let z = x/(1000*3600*24);
  // console.log(z);
 d= document.getElementById("result").innerHTML=z;
  document.getElementById("m").value=d;

}
}
    </script>
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
  
    <!-- Footer End -->
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
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
  </html>  --}}
    
