<?php
  include_once "./vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="customstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        #section1 {
          height: 100vh;
          background: transparent url('img/dm98fhoPgzbjittCqEEZcC.png') 0% 0% no-repeat padding-box;
          background-size: contain;
          opacity: 1;
        }
        body {
            padding: 0;
            overflow-x: hidden;
            font-family: 'Poppins', sans-serif;
        }
        .header {
            top: 0px;
            left: 0px;
            height: 90px;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            background-size: contain;
            opacity: 1;
            padding: 0;
        }
        .navbar{
            height: 100% !important;
        }
        .nav-item{
          width: 120px;
          height: 100%;
          text-align: left;
          font: normal normal 600 15px/18px Open Sans;
          color: #000000 !important;
          text-transform: capitalize;
          opacity: 1;
        }
        .navbar-collapse {
          background-color: white;
          z-index: 1;
        }
        h6 {
          font-size: 12px !important;
          font-weight: bolder;
        }
        hr {
          margin-top: 1rem;
          margin-bottom: 1rem;
          border: 0;
          border-top: 2.7px solid #4D6303;
        }
        .list-group-item{
          background-color: #F5F5F5 !important;
          width: 60%;
          border-radius: 0;
        }
        footer .list-group-item{
          background-color: black !important;
          width: 100%;
        }
        .list-group .active{
          
          border-left: 3px solid #4D6303 !important;
          opacity: 1;
          color: white !important;;
        }

        .info-header{
          font-weight: bolder;
          font-size: clamp(0.9rem, 1.2vw, 3rem);
        }
        .content{
          font-size: clamp(0.8rem, 1.2vw, 1.5rem);
        }
        .btn:focus, .btn:active:focus, .btn.active:focus { 
          outline: none ! important; 
          outline-style: none; 
        }
        .bg {
          background-image: url(./img/Group\ 1.png);
          background-size: cover;
          height: auto;
          width: 100%;
        }

        .qouter {
          background-image: url(./img/Group\ 1.png);
          background-size: cover;
          height: 540px;
          width: 100%;
        }
        .container{
    position: relative;
}

.player-buttons{
    background: url('http://cdn1.iconfinder.com/data/icons/iconslandplayer/PNG/64x64/CircleBlue/Play1Pressed.png') center center no-repeat;
    height: 128px;
    left: 50%;
    margin: -64px 0 0 -64px;
    position: absolute;
    top: 50%;
    width: 128px;
    z-index: 1; 
}
ul li>a:hover{
          color: #707070;
          opacity: 1;
          width: 80%;
          height: auto;
}
ul li>a{
  color: black !important;
}
    </style>
    <script>
      const popQoute = (id) => {
          let info = $("#"+id).parent().children(".qoute-info").text().trim("");
          $("#qoute-info-reciever").html(info);
          $("#staticBackdrop").modal("hide");
          $("#static").modal("show");
      }
    </script>
</head>
<body class="bg-light">
  <header class="header-area">
    <!-- Top Header Area -->

    <!-- Navbar Area -->
    <div class="famie-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="famieNav">
                    <!-- Nav Brand -->
                    <a href="index.php" class="nav-brand my-auto"><img src="./img/unnamed.png" alt="" style="height: 90%;width: 90px;"></a>
                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler me-3">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Navbar Start -->
                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="#">Home</a></li>
                                
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Navbar End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
  <div id="section1" class="row col-12 bg-white p-lg-5 p-2">
    <div class="col-6 col-lg-4 col-md-4 ms-md-5 ms-lg-5 right-side-hero pt-5">
      <!--div class="col-6 border col-lg-6 col-md-7 ms-md-1 ms-lg-5 right-side-hero mt-lg-0 mt-4"-->
        <h1 class="hero-title"></h1>
      <!--/div-->
      <!--div class="col-12 col-lg-12 col-md-3 ms-2 span text-center">
        <p class="font-weight-bold mt-1 mt-lg-5 mt-md-5 text-muted" style="font-size: 16px;"></p>
      </div-->
    </div>
    <div class="col-12 col-lg-5 col-md-4 resize">
      <div class="form d-flex justify-content-center row py-3 px-1 mx-auto" data-aos="zoom-in" data-aos-delay="90"
      data-aos-duration="1000"
      data-aos-easing="ease-in-out"
      data-aos-once="true">
        <h4 class= "text-white font-weight-bold text-center form-header">Request demo</h4>
        <form class="">
          <div class="mb-1 mb-lg-3">
            <input type="text" class="form-control" id="firstName" placeholder="First Name">
          </div>
          <div class="mb-1 mb-lg-3">
            <input type="text" class="form-control" id="lastName" placeholder="Last Name">
          </div>
          <div class="mb-1 mb-lg-3">
            <input type="text" class="form-control" id="trainees" placeholder="Who do you train">
          </div>
          <div class="mb-1 mb-lg-3">
            <input type="number" class="form-control" id="numberOfEmployees" placeholder="Number of employees" min="0">
          </div>
          <div class="mb-1 mb-lg-3">
            <input type="email" class="form-control" id="email" placeholder="Company email">
          </div>
          <div class="mb-1 mb-lg-3">
            <input type="number" class="form-control" id="phoneNumber" placeholder="Phone number">
          </div>
        </form>
        <div class="submit mb-1 mb-lg-3 p-0 text-bold rounded btn btn-sm col-9" style="height: 45px;">
          <button class="btn btn-sm w-100 h-100" id="seeDemo">
            See Demo
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="container row mx-auto" style="height: auto;">
        <div class="col-12 col-lg-7 mt-5" style="height: 100%;">
          <h3 class="info-header mb-3 font-weight-bold">Central Learning Management System</h3>
                <p class="card-text">Give your learners on-the-go access to training, assessments and other corperate information anywhere, anytime on mobile devices.</p>
                <br>
                <p class="card-text">Central Mobile App is integerated with the web-based Central LMS. All training activities conducted on mobile devices are synchronized with the LMS.This means Learners can start a training on the LMS and complete it the mobile app and vice versa.</p>
                <p class="card-text">Central Mobile App Supports Android and iOS Platform</p>
        </div>
        <div class="col-12 col-lg-5 mt-5 carousel slide" id="carouselExampleCaptions" data-bs-ride="carousel" style="height: 100%;">
          <!--div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"-->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./img/young-businessman-1.png" class="d-block w-100 h-80 my-auto" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./img/Group 14.png" class="d-block w-100" alt="...">
                
              </div>
          </div>
        </div>
  </div>
    <div class="container mt-3" style="height: auto;width: 100%;">
      <div class="row mx-auto gy-3 bg-white py-3 px-1 h-100 gx-5 gx-lg-5 gy-3 gy-md-3 w-100" style="background-color: #F9F9F9;">
        <h5 class="text-center info-header">There's So Much You Can Do With Central LMS</h5>
        <div class="col-6 col-lg-2 col-md-4 ms-lg-5 px-0">
          <div class="card border-0" style="width: 100%;font-size: 13px;">
            <div class="card-body px-2" >
              <h6 class="card-title">Reduce Training Cost</h6>
              <p class="card-text" style="font-size: 14px;">Cost of print media,Training Instructors, Facilities, Transportaion, Accomodation etc.</p>
            </div>
            <div class="ms-4 ms-lg-0 bg-white d-flex justify-content-center align-items-center shadow py-3 px-0" style="width: 150px;height: 150px;">
              <img src="img/reduce-training.png" alt="..." style="height: 90%; width: 60%;">
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-2 col-md-4 ms-lg-3 px-0" >
          <div class="card border-0 h-100"  style="width: 100%;font-size: 13px;">
            <div class="ms-4 ms-lg-0 bg-white d-flex justify-content-center align-items-center shadow py-3 px-0" style="width: 150px;height: 150px;">
              <img src="img/kodek-innovation-conduct-test.png" class="card-img-top" alt="..." style="height: 60%; width: 60%;">
            </div>
            <div class="card-body px-2">
              <h6 class="card-title">Conduct test for prospective hires</h6>
              <p class="card-text">Do more than just training,use central LMS to conduct training for job applicants during recruitment.</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-2 col-md-4 ms-lg-3 px-0" >
          <div class="card border-0 h-100"  style="width: 100%;font-size: 13px;">
            <div class="card-body px-2">
              <h6 class="card-title">Improve employee's effectiveness</h6>
              <p class="card-text">Enhance the integeration of employees to become effective members of the organization.</p>
            </div>
            <div class="ms-4 ms-lg-0 bg-white d-flex justify-content-center align-items-center shadow py-3 px-0" style="width: 150px;height: 150px;">
              <img src="img/onboard-new.png" class="card-img-top" alt="..." style="height: 60%; width: 60%;">
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-2 col-md-4 ms-lg-3 px-0" >
          <div class="card border-0 h-100"  style="width: 100%;font-size: 13px;">
            <div class="ms-4 ms-lg-0 bg-white d-flex justify-content-center align-items-center shadow py-3 px-0" style="width: 150px;height: 150px;">
              <img src="img/smarter.png" class="card-img-top" alt="..." style="height: 60%; width: 60%;">
            </div>
            <div class="card-body px-2">
              <h6 class="card-title">Smarter, well-informed workforce</h6>
              <p class="card-text">Achieve a knowledgable workforce by making training available at all times.</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-2 col-md-4 ms-lg-3 " >
          <div class="card border-0 h-100"  style="width: 100%;font-size: 13px;">
            <div class="card-body px-2">
              <h6 class="card-title">Increase revenue</h6>
              <p class="card-text">Better trained employees sell more and quicker.</p>
            </div>
            <div class="ms-3 ms-lg-0 bg-white border d-flex justify-content-center align-items-center shadow py-3 px-0" style="width: 150px;height: 150px;">
              <img src="img/kodek-innovations-increase-revenue.png" class="card-img-top" alt="..." style="height: 60%; width: 60%;">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container iframe col-9 col-lg-12 col-md-9 px-0 border mx-auto my-3">
      <!--video src="./What is LMS [Learning Management System]_.mp4" style="width: 100%;
      height: 100%;
      object-fit: cover;
      display: inline-block;
      vertical-align: middle;" id="video-player"></video-->
      <!--div class="d-flex justify-content-center align-items-center">
        <span role="button" id="play-button" class="btn rounded-circle player-buttons" style="background: transparent url('img/youtube (1).png') 0% 0% no-repeat padding-box;opacity: 1;height:150px;width:150px"></span>
      </div-->
      <iframe style="width: 100%;
      height: 100%;
      object-fit: cover;
      display: inline-block;
      vertical-align: middle;" src="https://www.youtube.com/embed/ezbJwaLmOeM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  <!--/section-->
  <!--section  style="background-color: #F5F5F5;width:100vw;height:auto"-->
    <div class="container" style="background-color: #F5F5F5;width:100vw;">
      <div class="mt-5 row mx-auto" style="height: auto;">
        <h3 class="font-weight-bold">Features</h3>
      <hr>
      <div class="col-lg-4 col-12 col-md-6 py-3">
        <ul class="list-group text-muted toggler">
          <li class="list-group-item border-0 rounded-0 content active text-muted"><a href="#" class="text-decoration-none">Course Management</a></li>
          <li class="list-group-item border-0 content"><a href="#" class="text-decoration-none text-muted">Learning delivery</a></li>
          <li class="list-group-item border-0 content"><a href="#" class="text-decoration-none text-muted">Enterprise ready</a></li>
          <li class="list-group-item border-0 content"><a href="#" class="text-decoration-none text-muted">Ecommerce</a></li>
          <li class="list-group-item border-0 content"><a href="#" class="text-decoration-none text-muted">Technology</a></li>
          
        </ul>
      </div>
      <div class="col-12 col-lg-8 mt-4 col-md-6">
        <h4 class="font-weight-bold ms-5" id="feature-header">
          Course Management
        </h4>
        <div id="toggle-container">
          <ul class="list-group course-management-toggle" style="font-size: 12px;">
            <li class="list-group-item border-0 row d-flex font-weight-bold" style="width: 100%;">
              <div class="col-2 col-lg-1 d-flex justify-content-center align-items-center">
                <img src="img/comment (1).png" alt="" style="height: 30px;width: 30px;">
              </div>
              <div class="col-10 col-lg-8">
                <h6>content Friendly</h6>
                <p style="font-size: 13px;">Re-use youe best content on multiple courses.Import useful material from the web to enhance them better.</p>
              </div>
            </li>
            <li class="list-group-item border-0 row d-flex font-weight-bold" style="width: 100%;">
              <div class="col-2 col-lg-1 d-flex justify-content-center align-items-center">
                <img src="img/comment (1).png" alt="" style="height: 30px;width: 30px;">
              </div>
              <div class="col-10 col-lg-8">
                <h6>content Friendly</h6>
                <p style="font-size: 13px;">Re-use youe best content on multiple courses.Import useful material from the web to enhance them better.</p>
              </div>
            </li>
            <li class="list-group-item border-0 row d-flex font-weight-bold" style="width: 100%;">
              <div class="col-2 col-lg-1 d-flex justify-content-center align-items-center">
                <img src="img/comment (1).png" alt="" style="height: 30px;width: 30px;">
              </div>
              <div class="col-10 col-lg-8">
                <h6>content Friendly</h6>
                <p style="font-size: 13px;">Re-use youe best content on multiple courses.Import useful material from the web to enhance them better.</p>
              </div>
            </li>
          </ul>
  
          <ul class="list-group learning-delivery-toggle d-none" style="font-size: 12px;">
            <li class="list-group-item border-0 row d-flex font-weight-bold" style="width: 100%;">
              <div class="col-2 col-lg-1 d-flex justify-content-center align-items-center">
                <img src="img/comment (1).png" alt="" style="height: 30px;width: 30px;">
              </div>
              <div class="col-10 col-lg-8">
                <h6>content Friendly</h6>
                <p style="font-size: 13px;">Re-use youe best content on multiple courses.Import useful material from the web to enhance them better.</p>
              </div>
            </li>
            <li class="list-group-item border-0 row d-flex font-weight-bold" style="width: 100%;">
              <div class="col-2 col-lg-1 d-flex justify-content-center align-items-center">
                <img src="img/comment (1).png" alt="" style="height: 30px;width: 30px;">
              </div>
              <div class="col-10 col-lg-8">
                <h6>content Friendly</h6>
                <p style="font-size: 13px;">Re-use youe best content on multiple courses.Import useful material from the web to enhance them better.</p>
              </div>
            </li>
            <li class="list-group-item border-0 row d-flex font-weight-bold" style="width: 100%;">
              <div class="col-2 col-lg-1 d-flex justify-content-center align-items-center">
                <img src="img/comment (1).png" alt="" style="height: 30px;width: 30px;">
              </div>
              <div class="col-10 col-lg-8">
                <h6>content Friendly</h6>
                <p style="font-size: 13px;">Re-use youe best content on multiple courses.Import useful material from the web to enhance them better.</p>
              </div>
            </li>
          </ul>
  
          <ul class="list-group enterprise-ready-toggle d-none" style="font-size: 12px;">
            <li class="list-group-item border-0 row d-flex font-weight-bold" style="width: 100%;">
              <div class="col-2 col-lg-1 d-flex justify-content-center align-items-center">
                <img src="img/comment (1).png" alt="" style="height: 30px;width: 30px;">
              </div>
              <div class="col-10 col-lg-8">
                <h6>content Friendly</h6>
                <p style="font-size: 13px;">Re-use youe best content on multiple courses.Import useful material from the web to enhance them better.</p>
              </div>
            </li>
            <li class="list-group-item border-0 row d-flex font-weight-bold" style="width: 100%;">
              <div class="col-2 col-lg-1 d-flex justify-content-center align-items-center">
                <img src="img/comment (1).png" alt="" style="height: 30px;width: 30px;">
              </div>
              <div class="col-10 col-lg-8">
                <h6>content Friendly</h6>
                <p style="font-size: 13px;">Re-use youe best content on multiple courses.Import useful material from the web to enhance them better.</p>
              </div>
            </li>
            <li class="list-group-item border-0 row d-flex font-weight-bold" style="width: 100%;">
              <div class="col-2 col-lg-1 d-flex justify-content-center align-items-center">
                <img src="img/comment (1).png" alt="" style="height: 30px;width: 30px;">
              </div>
              <div class="col-10 col-lg-8">
                <h6>content Friendly</h6>
                <p style="font-size: 13px;">Re-use youe best content on multiple courses.Import useful material from the web to enhance them better.</p>
              </div>
            </li>
            <li class="list-group-item border-0 row d-flex font-weight-bold" style="width: 100%;">
              <div class="col-2 col-lg-1 d-flex justify-content-center align-items-center">
                <img src="img/comment (1).png" alt="" style="height: 30px;width: 30px;">
              </div>
              <div class="col-10 col-lg-8">
                <h6>content Friendly</h6>
                <p style="font-size: 13px;">Re-use youe best content on multiple courses.Import useful material from the web to enhance them better.</p>
              </div>
            </li>
            <li class="list-group-item border-0 row d-flex font-weight-bold" style="width: 100%;">
              <div class="col-2 col-lg-1 d-flex justify-content-center align-items-center">
                <img src="img/comment (1).png" alt="" style="height: 30px;width: 30px;">
              </div>
              <div class="col-10 col-lg-8">
                <h6>content Friendly</h6>
                <p style="font-size: 13px;">Re-use youe best content on multiple courses.Import useful material from the web to enhance them better.</p>
              </div>
            </li>
          </ul>

          <ul class="list-group ecommerce-toggle d-none" style="font-size: 12px;">
            <li class="list-group-item border-0 row d-flex font-weight-bold" style="width: 100%;">
              <div class="col-2 col-lg-1 d-flex justify-content-center align-items-center">
                <img src="img/comment (1).png" alt="" style="height: 30px;width: 30px;">
              </div>
              <div class="col-10 col-lg-8">
                <h6>content Friendly</h6>
                <p style="font-size: 13px;">Re-use youe best content on multiple courses.Import useful material from the web to enhance them better.</p>
              </div>
            </li>
            <li class="list-group-item border-0 row d-flex font-weight-bold" style="width: 100%;">
              <div class="col-2 col-lg-1 d-flex justify-content-center align-items-center">
                <img src="img/comment (1).png" alt="" style="height: 30px;width: 30px;">
              </div>
              <div class="col-10 col-lg-8">
                <h6>content Friendly</h6>
                <p style="font-size: 13px;">Re-use youe best content on multiple courses.Import useful material from the web to enhance them better.</p>
              </div>
            </li>
            <li class="list-group-item border-0 row d-flex font-weight-bold" style="width: 100%;">
              <div class="col-2 col-lg-1 d-flex justify-content-center align-items-center">
                <img src="img/comment (1).png" alt="" style="height: 30px;width: 30px;">
              </div>
              <div class="col-10 col-lg-8">
                <h6>content Friendly</h6>
                <p style="font-size: 13px;">Re-use youe best content on multiple courses.Import useful material from the web to enhance them better.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
      </div>
    </div>
  <!--/section-->
  <section style="background-color: #EFEFEF; height: auto;">
    <div class="container mx-auto row gy-3 h-75 mt-4 py-4 px-0" style="width: 69%;">
      <div class="col-lg-3 col-6" style="height: 90px;">
        <div class="mx-auto bg-white d-flex justify-content-center align-items-center p-lg-2 p-md-2 p-2" style="width: 90%;height: 100%;border: 1px solid #707070;">
          <img src="img/microsoft-teams-logo.png" alt="" class="mx-auto">
        </div>
      </div>
      <div class="col-lg-3 col-6" style="height: 90px;">
        <div class="mx-auto bg-white d-flex justify-content-center align-items-center p-lg-2 p-md-2 p-2" style="width: 90%;height: 100%;border: 1px solid #707070;">
          <img src="img/Zoom-Logo-Free-PNG-Image.png" alt="" class="mt-2">
        </div>
      </div>
      <div class="col-lg-3 col-6" style="height: 90px;">
        <div class="mx-auto bg-white d-flex justify-content-center align-items-center p-lg-2 p-md-2 p-2" style="width: 90%;height: 100%;border: 1px solid #707070;">
          <img src="img/skype.png" alt=""class="mx-auto">
        </div>
      </div>

      <div class="col-lg-3 col-6" style="height: 90px;">
        <div class="mx-auto bg-white d-flex justify-content-center align-items-center p-lg-2 p-md-2 p-2" style="width: 90%;height: 100%;border: 1px solid #707070;">
          <img src="./img/LMS_Cloud_Logo.png" alt=""class="mx-auto">
        </div>
      </div>


      <div class="col-lg-3 col-6" style="height: 90px;">
        <div class="mx-auto bg-white d-flex justify-content-center p-lg-2 p-md-2 p-2 align-items-center" style="width: 90%;height: 100%;border: 1px solid #707070;">
          <img src="img/bluejeans-logo.png" alt="" class="mx-auto">
        </div>
      </div>
      <div class="col-lg-3 col-6" style="height: 90px;">
        <div class="mx-auto bg-white d-flex justify-content-center align-items-center p-lg-2 px-2" style="width: 90%;height: 100%;border: 1px solid #707070;">
          <img src="img/TeamViewer-Logo.png" alt="" class="mx-auto">
        </div>
      </div>
      <div class="col-lg-3 col-6" style="height: 90px;">
        <div class="mx-auto bg-white d-flex justify-content-center align-items-center p-lg-2 px-2" style="width: 90%;height: 100%;border: 1px solid #707070;">
          <img src="img/go-to-meeting-logo.png" alt="" class="mx-auto">
        </div>
      </div>
      <!--div class="col-lg-3 col-6" style="height: 90px;">
        <div class="mx-auto bg-white d-flex justify-content-center align-items-center p-lg-5 px-2" style="width: 90%;height: 100%;border: 1px solid #707070;">
          <img src="./img/microsoft.jpg" alt="" class="mx-auto">
        </div>
      </div>
      <div class="col-lg-3 col-6" style="height: 90px;">
        <div class="mx-auto bg-white d-flex justify-content-center align-items-center p-lg-2 p-md-2 p-2" style="width: 90%;height: 100%;border: 1px solid #707070;">
          <img src="./img/oracle.jpg" alt="" class="mx-auto">
        </div>
      </div-->
      <!--div class="col-lg-3 col-6" style="height: 90px;">
        <div class="mx-auto bg-white d-flex justify-content-center align-items-center p-lg-5 px-2" style="width: 90%;height: 100%;border: 1px solid #707070;">
          <img src="./img/microsoft.jpg" alt="" class="mx-auto">
        </div>
      </div-->
    </div>
  </section>
  <section style="background-color:#F5F5F5; height:auto">
    <div class="container row mx-auto" style="width: 90%;height: 100%;">
      <div class="col-lg-4 col-12 h-auto mt-5 pt-5">
        <p class="expert mt-5 fs-4">
          In an ever growing global market, employees are a great asset but they must have the skills and knowledge to be able to keep driving your business forward.
        </p>

        <!--div class="submit mb-1 mb-lg-3 text-bold rounded btn col-9" style="height: 30px;width: 180px;"-->
          <a href="#" class="btn submit mb-1 mt-3 text-bold rounded mt-lg-5" style="height: 36px;width: 180px;">
            Talk to an expert
          </a>
        <!--/div-->

      </div>
      <div class="col-lg-8 col-12 p-2">
        <div class="mx-auto col-11 h-75 row p-lg-1 px-0 mt-5 h-lg-50 col-lg-9 col-md-12">
          <img src="./img/business tycoon.png" alt="" class="img-fluid ms-lg-5">
        </div>
      </div>
    </div>
  </section>
  <div class="container-fluid" style="background-color: #EFEFEF;height: auto;">
    <div class="col-lg-6 col-11 col-md-9 h-auto my-auto py-4 mx-auto">
      <p class="expert fs-4 fst-italic">
        In an ever growing global market, employees are a great asset but they must have the skills and knowledge to be able to keep driving your business forward.
      </p>

      <!--div class="submit mb-1 mb-lg-3 text-bold rounded btn col-9" style="height: 30px;width: 180px;"-->
        <a href="#" class="btn submit mb-1 mt-3 rounded mt-lg-5 d-flex justify-content-center align-items-center" style="height: 69px;width: 210px;font-weight: bold;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Get Qoute
        </a>
        <!-- Button trigger modal -->
        <!--button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Launch static backdrop modal
        </button-->

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content mx-auto w-auto w-75">
              <!--div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div-->
              <div class="modal-body px-0 py-5 bg">
                <div class="modal-header border-0" style="margin-top: -54px;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                <div class="container d-flex justify-content-between gx-5 h-100 w-lg-75 w-100 mx-auto px-0 px-lg-5 py-3 row">
                  <div class="card my-auto border-0 p-0 col-lg-5 col-8 col-md-6 mx-auto mx-lg-o mx-md-0 mt-5 mt-lg-0 mt-md-0" style="height: 90%;">
                    <div class="card-body">
                      <div class="h-auto border py-2 bg-white text-center">
                        <h4 class="info-header">Cloud-Based</h4>
                        <p style="margin-top: -9px;">(software-as-a-service)</p>
                        <div style="margin-top: -24px;height: 150px;">
                          <img src="./img/cloud-network.png" alt="" class="h-100 w-50 mx-auto py-3">
                        </div>
                        <button class="btn btn-sm rounded-pill text-white" id="pop-1" onclick="popQoute(id)" style="background-color: #4D6303;">Contact us</button>
                        <!--div id="qoute-info" style="display: none;"-->
                          <p class="mt-5 fs-4 d-none qoute-info">
                            In 1 an ever growing global market, employees are a great asset but they must have the skills and knowledge to be able to keep driving your business forward.
                          </p>
                        <!--/div-->
                      </div>
                      <div class="h-auto border p-2" style="background-color: #E9E9E9;">
                        <p>No IT infrastructure required. Enjoy seamless connection to on-line central LMS through a secure, customized and dedicated URL.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card my-auto border-0 p-0 col-lg-5 col-8 col-md-6 mx-auto mx-lg-o mx-md-0 gx-2" style="height: 90%;">
                    <div class="card-body">
                      <div class="h-auto border py-2 bg-white text-center">
                        <h5 class="info-header">On-site-developement</h5>
                        <div style="margin-top: 18px;height: 150px;">
                          <img src="./img/data.png" alt="" class="h-100 w-50 mx-auto py-3"></div>
                        <button class="btn btn-sm rounded-pill text-white" id="pop-2" onclick="popQoute(id)" style="background-color: #4D6303;">Contact us</button>
                        <p class="mt-5 fs-4 d-none qoute-info">
                          In 2 an ever growing global market, employees are a great asset but they must have the skills and knowledge to be able to keep driving your business forward.
                        </p>
                      </div>
                      <div class="h-auto border p-2" style="background-color: #E9E9E9;">
                        <p>Deloyment of Central LMS on your domain leveraging on the existing IT infrastructure without incurring additional hardware cost.</p>
                      </div>
                    </div>
                  </div>
                  <!--div class="card" style="width: 12rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     
                    </div>
                  </div-->
                </div>
              </div>
            </div>
          </div>
        </div>
      <!--/div-->

    </div>
  </div>
  <footer class="" style="background-color : #000000;height: auto;">
    <div class="container row px-0 mx-auto h-100 w-lg-75 w-100" style="background-color: #000000;height: auto;">
      <div class="col-lg-7 col-md-8 col-12 h-100 py-3 px-lg-5">
        <h4 class="info-header text-white ms-3 ms-lg-0 ms-md-0">Contact Information</h4>
        <ul class="list-group col-lg-12" style="font-size: 12px;">
          <li class="list-group-item black border-0 py-md-0 row d-flex font-weight-bold" style="background-color:black;">
            <div class="col-1 col-lg-1">
              <svg class="ms-lg-2" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="15" height="15"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#000000"></path><g fill="#ffffff"><path d="M86,1.24038c-28.52885,0 -51.68269,23.15385 -51.68269,51.68269c0,28.52885 45.06731,79.46214 45.06731,117.83654h13.23077c0,-38.27103 45.06731,-91.60757 45.06731,-111.83654c0,-28.52885 -23.15385,-51.68269 -51.68269,-51.68269zM86,74.11298c-11.70613,0 -21.1899,-9.50962 -21.1899,-21.1899c0,-11.68029 9.48378,-21.1899 21.1899,-21.1899c11.70613,0 21.1899,9.48378 21.1899,21.1899c0,11.70613 -9.48378,21.1899 -21.1899,21.1899z"></path></g></g></svg>
            </div>
            <div class="col-11 col-lg-10 text-white">
              <h5 class="font-weight-normal mt-1 footer-info" style="font-size: 12px">100, opebi road, Ikeja Lagos.</h5>
            </div>
          </li>
          

          <li class="list-group-item black border-0 row d-flex font-weight-bold" style="background-color:black;">
            <div class="col-1 col-lg-1">
              <svg class="ms-lg-2" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="15" height="15"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g transform=""><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#000000"></path><path d="" fill="none"></path><g fill="#ffffff"><path d="M134.2675,161.68c-0.05375,0 -0.1075,0 -0.16125,0c-25.85375,-0.84656 -56.14187,-25.9075 -77.01031,-46.78937c-20.89531,-20.88188 -45.95625,-51.18344 -46.7625,-76.91625c-0.29562,-9.03 21.86281,-25.08781 22.09125,-25.24906c5.75125,-4.00438 12.13406,-2.58 14.75438,1.04812c1.77375,2.45906 18.57062,27.90969 20.39812,30.79875c1.89469,2.99656 1.6125,7.45781 -0.7525,11.9325c-1.30344,2.48594 -5.63031,10.09156 -7.65937,13.63906c2.19031,3.1175 7.98187,10.76344 19.94125,22.72281c11.97281,11.95937 19.60531,17.76437 22.73625,19.95469c3.5475,-2.02906 11.15312,-6.35594 13.63906,-7.65937c4.4075,-2.33813 8.84187,-2.63375 11.86531,-0.77938c3.09063,1.89469 28.47406,18.77219 30.81219,20.39813c1.96187,1.38406 3.225,3.74906 3.48031,6.50375c0.24188,2.78156 -0.61812,5.72437 -2.40531,8.29094c-0.14781,0.215 -16.0175,22.10469 -24.96688,22.10469z"></path></g></g></g></svg>
            </div>
            <div class="col-11 col-lg-10 text-white">
              <h5 class="font-weight-normal mt-1 footer-info" style="font-size: 12px;">+234 8134384128, +234 8055801534, +234 9028551188</h5>
            </div>
          </li>


          <li class="list-group-item black border-0 row d-flex font-weight-bold" style="background-color:black;">
            <div class="col-1 col-lg-1">
              <svg class="ms-lg-2" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="15" height="15"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#000000"></path><g fill="#ffffff"><path d="M14.54609,34.4l64.63438,60.32317c3.82413,3.5776 9.82066,3.5776 13.63906,0l64.63438,-60.32317zM5.73333,41.85781v95.74219h160.53333v-95.74219l-65.61979,61.24141c-4.1108,3.8356 -9.37794,5.75573 -14.64688,5.75573c-5.26893,0 -10.53608,-1.92013 -14.64688,-5.75573z"></path></g></g></svg>
            </div>
            <div class="col-11 col-lg-10 text-white">
              <h5 class="font-weight-normal mt-1 footer-info" style="font-size: 12px">info@kodekinnovations.com</h5>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-5 col-md-4 col-12 h-100 align-items-center justify-content-center py-3">
        <h4 class="info-header text-white text-center">Lets stay in touch</h4>
        <div class="d-flex col-6 col-md-12 col-lg-6 mx-auto justify-content-between">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="36" height="36"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#000000"></path><g fill="#ffffff"><path d="M103.68375,6.88c-11.24966,0 -20.96758,3.42947 -27.78875,10.20578c-6.82117,6.77631 -10.535,16.70818 -10.535,28.89735v15.93687h-20.64c-1.89978,0.00019 -3.43981,1.54022 -3.44,3.44v27.52c0.00019,1.89978 1.54022,3.43981 3.44,3.44h20.64v65.36c0.00019,1.89978 1.54022,3.43981 3.44,3.44h27.52c1.89978,-0.00019 3.43981,-1.54022 3.44,-3.44v-65.36h24.08c1.73358,-0.0001 3.19628,-1.29004 3.41313,-3.01l3.44,-27.52c0.1233,-0.97953 -0.18016,-1.96483 -0.83319,-2.70527c-0.65302,-0.74044 -1.59268,-1.16465 -2.57994,-1.16473h-27.52v-13.76c0,-3.84133 3.03867,-6.88 6.88,-6.88h20.64c1.89978,-0.00019 3.43981,-1.54022 3.44,-3.44v-26.33078c-0.00216,-1.72428 -1.28042,-3.18062 -2.98985,-3.40641c-3.03984,-0.40333 -14.01348,-1.22281 -24.0464,-1.22281zM103.68375,13.76c8.38621,0 16.49301,0.67096 20.15625,1.01453v19.62547h-17.2c-7.55883,0 -13.76,6.20117 -13.76,13.76v17.2c0.00019,1.89978 1.54022,3.43981 3.44,3.44h27.06313l-2.58,20.64h-24.48313c-1.89978,0.00019 -3.43981,1.54022 -3.44,3.44v65.36h-20.64v-65.36c-0.00019,-1.89978 -1.54022,-3.43981 -3.44,-3.44h-20.64v-20.64h20.64c1.89978,-0.00019 3.43981,-1.54022 3.44,-3.44v-19.37687c0,-10.81755 3.16585,-18.71456 8.50594,-24.01953c5.34009,-5.30497 13.06243,-8.20359 22.93781,-8.20359z"></path></g></g></svg>
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            width="36" height="36"
            viewBox="0 0 172 172"
            style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#000000"></path><g fill="#ffffff"><path d="M114.66667,21.5c-19.46258,0 -35.2577,15.72629 -35.67936,35.09147c-17.20803,-2.0639 -28.41361,-8.49774 -35.28744,-14.83724c-7.62293,-7.03039 -10.03613,-13.27653 -10.03613,-13.27653c-0.71735,-1.80745 -2.35492,-3.08657 -4.28229,-3.34491c-1.92736,-0.25834 -3.84398,0.54439 -5.01198,2.09914c0,0 -6.4528,8.6014 -6.4528,21.14307c0,7.1702 2.26393,12.47557 4.96208,16.97184c-0.09939,-0.04655 -0.76986,-0.27995 -0.76986,-0.27995c-1.74446,-0.87099 -3.82379,-0.72907 -5.43374,0.37086c-1.60994,1.09993 -2.49805,2.98541 -2.32082,4.92715c0,0 2.06882,15.12211 16.28597,26.17513l-1.48372,0.37093c-1.6327,0.40759 -2.98031,1.55625 -3.64138,3.10378c-0.66107,1.54753 -0.55929,3.31532 0.275,4.77676c0,0 2.41082,4.07812 7.46061,8.37044c2.99407,2.54496 7.39232,5.17108 12.57666,7.60059c-6.36683,2.32654 -15.86071,4.65413 -29.70247,4.65413c-2.10958,-0.00024 -4.0243,1.23349 -4.89589,3.1546c-0.87159,1.92111 -0.53891,4.17446 0.85065,5.76174c0,0 4.10733,4.52475 12.22672,8.46143c8.1194,3.93668 20.62664,7.70557 38.40186,7.70557c31.24558,0 53.69502,-14.98854 67.7054,-33.98568c14.01039,-18.99713 20.08626,-41.76201 20.08626,-59.18099c0,-1.10529 -0.06902,-2.19502 -0.16797,-3.27539c7.5653,-7.2897 10.40421,-12.76994 10.54004,-13.03857c0.68083,-1.36525 0.4272,-3.0049 -0.62988,-4.09424c-1.0535,-1.09292 -2.68649,-1.40069 -4.07324,-0.76286l-0.58089,0.26595c-0.49808,0.22933 -0.99606,0.46012 -1.49772,0.68587c1.45842,-2.32558 2.60928,-4.81079 3.40837,-7.38363c0.44433,-1.419 -0.03544,-2.97394 -1.21078,-3.89128c-1.17533,-0.91733 -2.79416,-1.01554 -4.06624,-0.23796c-4.37972,2.6618 -8.57784,4.52524 -12.94759,5.77393c-6.43069,-6.10022 -15.08696,-9.87516 -24.60742,-9.87516zM114.66667,32.25c13.91472,0 25.08333,11.16861 25.08333,25.08333c0,14.83102 -5.56996,35.96198 -17.98665,52.79818c-12.4167,16.8362 -31.17559,29.61849 -59.05501,29.61849c-13.49197,0 -22.46682,-2.44046 -29.19157,-5.08106c7.04421,-1.09391 13.10938,-2.55371 17.46875,-4.24121c7.55964,-2.92631 11.63884,-6.30583 11.63883,-6.30583c1.52533,-1.30914 2.19282,-3.35991 1.7303,-5.31606c-0.46252,-1.95616 -1.97778,-3.49082 -3.92789,-3.97821c-9.75643,-2.43911 -16.01375,-6.38412 -19.93929,-9.6722l5.60596,-1.39974c2.27511,-0.5678 3.91966,-2.54482 4.06373,-4.88528c0.14408,-2.34046 -1.24557,-4.50426 -3.43385,-5.34682c-11.62835,-4.47244 -16.5114,-10.79743 -19.00846,-16.097c3.03859,0.62904 5.86778,1.40674 9.91016,1.40674c2.49204,-0.00203 4.65595,-1.71656 5.22775,-4.14212c0.5718,-2.42556 -0.59845,-4.92608 -2.82719,-6.04098c0,0 -11.35889,-5.22523 -11.35889,-20.27523c0,-2.70202 0.74836,-4.41339 1.29476,-6.4598c1.87472,2.5194 3.41977,4.94974 6.4458,7.74056c9.22589,8.50874 24.47492,17.18471 47.51416,18.42057c1.47332,0.07861 2.91418,-0.4518 3.98488,-1.46691c1.0707,-1.01511 1.6771,-2.42568 1.67707,-3.90109v-5.375c0,-13.91472 11.16861,-25.08333 25.08333,-25.08333z"></path></g></g></svg>
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="36" height="36"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#000000"></path><g fill="#ffffff"><path d="M49.92548,0c-27.49519,0 -49.92548,22.43029 -49.92548,49.92548v72.14904c0,27.49519 22.43029,49.92548 49.92548,49.92548h72.14904c27.49519,0 49.92548,-22.43029 49.92548,-49.92548v-72.14904c0,-27.49519 -22.43029,-49.92548 -49.92548,-49.92548zM49.92548,13.23077h72.14904c20.33714,0 36.69471,16.33173 36.69471,36.69471v72.14904c0,20.33714 -16.33173,36.69471 -36.69471,36.69471h-72.14904c-20.33714,0 -36.69471,-16.33173 -36.69471,-36.69471v-72.14904c0,-20.33714 16.33173,-36.69471 36.69471,-36.69471zM135.61538,26.46154c-5.47837,0 -9.92308,4.44471 -9.92308,9.92308c0,5.47837 4.44471,9.92308 9.92308,9.92308c5.47837,0 9.92308,-4.44471 9.92308,-9.92308c0,-5.47837 -4.44471,-9.92308 -9.92308,-9.92308zM86,39.69231c-25.50541,0 -46.30769,20.80228 -46.30769,46.30769c0,25.50541 20.80228,46.30769 46.30769,46.30769c25.50541,0 46.30769,-20.80228 46.30769,-46.30769c0,-25.50541 -20.80228,-46.30769 -46.30769,-46.30769zM86,52.92308c18.34736,0 33.07692,14.72957 33.07692,33.07692c0,18.34736 -14.72956,33.07692 -33.07692,33.07692c-18.34735,0 -33.07692,-14.72956 -33.07692,-33.07692c0,-18.34735 14.72957,-33.07692 33.07692,-33.07692z"></path></g></g></svg>
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
              width="36" height="36"
              viewBox="0 0 172 172"
              style=" fill:#000000;"><g transform=""><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#000000"></path><g fill="#ffffff"><path d="M27.52,10.36031c-5.80462,0 -10.88595,1.6509 -14.60656,4.65609c-3.72061,3.00519 -5.99312,7.45786 -5.99312,12.32219c0,9.43788 8.45204,16.74317 19.62547,17.17984c0.31516,0.10089 0.64336,0.15521 0.97422,0.16125c6.03227,0 11.1669,-1.76821 14.835,-4.89797c3.6681,-3.12976 5.76469,-7.64202 5.76469,-12.44312c-0.0005,-0.06276 -0.00274,-0.12549 -0.00672,-0.18812c-0.52983,-9.49748 -8.98372,-16.79016 -20.59297,-16.79016zM27.52,17.15969c8.9752,0 13.40184,4.40686 13.78015,10.26625c-0.02442,2.86303 -1.13279,5.295 -3.35265,7.18906c-2.2444,1.915 -5.70977,3.26531 -10.4275,3.26531c-8.95069,0 -13.80031,-4.85917 -13.80031,-10.54172c0,-2.84128 1.16748,-5.17728 3.46688,-7.03453c2.29939,-1.85725 5.81806,-3.14437 10.33344,-3.14438zM10.32,51.6c-1.89978,0.00019 -3.43981,1.54022 -3.44,3.44v99.76c0.00019,1.89978 1.54022,3.43981 3.44,3.44h34.4c1.89978,-0.00019 3.43981,-1.54022 3.44,-3.44v-32.11563v-67.64437c-0.00019,-1.89978 -1.54022,-3.43981 -3.44,-3.44zM61.92,51.6c-1.89978,0.00019 -3.43981,1.54022 -3.44,3.44v99.76c0.00019,1.89978 1.54022,3.43981 3.44,3.44h34.4c1.89978,-0.00019 3.43981,-1.54022 3.44,-3.44v-55.04v-0.86v-0.86c0,-6.68882 5.35118,-12.04 12.04,-12.04c6.68882,0 12.04,5.35118 12.04,12.04v56.76c0.00019,1.89978 1.54022,3.43981 3.44,3.44h34.4c1.89978,-0.00019 3.43981,-1.54022 3.44,-3.44v-58.48c0,-14.19524 -4.16967,-25.44068 -11.20015,-33.11c-7.03049,-7.66932 -16.83856,-11.61 -27.37219,-11.61c-13.43058,0 -21.55324,4.9057 -26.78765,8.94937v-5.50937c-0.00019,-1.89978 -1.54022,-3.43981 -3.44,-3.44zM13.76,58.48h27.52v64.20437v28.67563h-27.52zM65.36,58.48h27.52v9.07703c0.00045,1.42492 0.87925,2.70209 2.20991,3.21171c1.33067,0.50962 2.83778,0.1462 3.78993,-0.91389c0,0 10.20201,-11.37485 27.66781,-11.37485c8.85077,0 16.60976,3.1726 22.29953,9.37937c5.68977,6.20678 9.39281,15.60027 9.39281,28.46063v55.04h-27.52v-53.32c0.00432,-0.48543 -0.09414,-0.96627 -0.2889,-1.41094c-0.76353,-9.72052 -8.72276,-17.50906 -18.6311,-17.50906c-10.40798,0 -18.92,8.51202 -18.92,18.92v0.86v0.86v51.6h-27.52z"></path></g><path d="" fill="none"></path></g></g></svg>
            </div>
      </div>
    </div>
    <div class="modal fade" id="static" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content mx-auto w-auto w-75">
          <!--div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div-->
          <div class="modal-body px-0 py-5 qouter">
            <div class="modal-header border-0" style="margin-top: -54px;">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-qoute"></button>
          </div>
            <div class="container d-flex justify-content-center align-items-center gx-5 h-100 w-lg-75 w-100 mx-auto px-0 px-lg-5 py-3">
              <div class="w-100 w-lg-75 h-75 mx-auto text-center p-5" id="qoute-info-reciever">
                <a href="#" class="btn submit mb-1 mt-3 rounded mt-lg-5" style="height: 36px;width: 180px;font-weight: bold;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  Get Qoute
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <script src="js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Owl Carousel js -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Classynav -->
  <script src="js/classynav.js"></script>
  <!-- Wow js -->
  <script src="js/wow.min.js"></script>
  <!-- Sticky js -->
  <script src="js/jquery.sticky.js"></script>
  <!-- Magnific Popup js -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <!-- Scrollup js -->
  <script src="js/jquery.scrollup.min.js"></script>
  <!-- Jarallax js -->
  <script src="js/jarallax.min.js"></script>
  <!-- Jarallax Video js -->
  <script src="js/jarallax-video.min.js"></script>
  <!-- Active js -->
  <script src="js/active.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script>
      AOS.init();
      document.addEventListener("readystatechange", () => {
        console.log(window.innerWidth);
        $("#play-button").click(() => {
          $("#video-player").attr("controls","true");
          $("#video-player").attr("autoplay","true");
          $("#play-button").hide();
        })
        $("#seeDemo").click(function() {
          $formData = new FormData();
          $datas = [$("#trainees"),$("#numberOfEmployees"),$("#firstName"),$("#lastName"),$("#email"),$("#phoneNumber")];
          for($data of $datas){
            if($data.val() !== undefined)
              //console.log($data.val());
              $formData.append($data.attr("placeholder"),$data.val());
          }
          let delay = 3000;
          $.ajax({
            url: "requestHandler.php",
            method: "POST",
            data: $formData,
            dataType: "JSON",
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: () => {
              //$("#seeDemo").css("background-image","url(./img/spin.gif)");
              $("#seeDemo").html("<i class='fa fa-spinner fa-spin'></i>");
              $("#seeDemo").attr("disabled",true);
            },
            success: (res) => {
              setTimeout(function() {
                const notyf = new Notyf({
                  types: [
                    {
                      type: 'info',
                      background: 'white',
                      icon: true,
                      position: {x:'right',y:'top'}
                    }
                  ]
                });
                $datas = [$("#trainees"),$("#numberOfEmployees"),$("#firstName"),$("#lastName"),$("#email"),$("#phoneNumber")];
                for($data of $datas){
                  if($data.val() !== undefined)
                  $data.val("")
                    //console.log($data.val());
                    //$formData.append($data.attr("placeholder"),$data.val());
                }
                $("#seeDemo").html("See demo");
                $("#seeDemo").attr("disabled",false);
              notyf.open({
                type: 'info',
                message: `<p class="text-dark" style="background-image:url(./img/Group\ 1.png);font-size:18px">${res.info}</p>`
              });
                }, delay);
                
            }
          })
        })
        const popQoute = (id) => {
          let info = $("#"+id).parent().children(".qoute-info").text().trim("");
          $("#qoute-info-reciever").html(info);
          $("#staticBackdrop").modal("hide");
          $("#static").modal("show");
        }

        $("#close-qoute").click(() => {
          $("#static").modal("hide");
          $("#staticBackdrop").modal("show");
        })
        
        $(".content").click(function(){
          let indexer = 1;
          const panel = $(this).children("a").html().replace(" ","-").toLowerCase()+"-toggle";
          let parent = $("#toggle-container");
          parent.children(".list-group").addClass("d-none");
          if(parent.children("."+panel).hasClass("d-none")){
            $("#feature-header").html($(this).children("a").html())
            parent.children("."+panel).removeClass("d-none")
            AOS.init();
            parent.children("."+panel).children("li").first().attr("data-aos","fade-right")
            /*parent.children("."+panel).children("li").get().forEach(() => {
              if(indexer % 2 == 0){
                //$(element).attr("data-aos","fade-left")
               // console.log(parent.children("."+panel).children("li").get()[indexer]);
               let ele = parent.children("."+panel).children("li").get()[indexer];
               $("ele").attr("data-aos","fade-left")
               $("ele").attr("data-aos-once",false);
               $("ele").attr("data-aos-easing","ease-in-out")
               console.log(ele);
              }
              indexer++;
            });*/
            parent.children("."+panel).addClass("d-block")
            $(this).addClass('active');
            $(this).parent().children('li').not(this).removeClass('active');
          }
        })
      })
      $(function(){
        $(".hero-title").typed({
          strings: ["Promote Individual Learning Culture In Your Organization "],
          typeSpeed: 45,
          showCursor: false,
          callback: showThis()
        });
        function showThis(){

          $(".span p").typed({
              strings: ["...allow employees learn at their own pace."],
              backDelay: 60,    
              typeSpeed: 30,
              showCursor:false,
              backSpeed: 45,
              loop: true, 
          });

        }
      });

    </script>
</body>
</html>