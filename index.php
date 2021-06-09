<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./style/all.css" />
    <link rel="stylesheet" href="./style/style.css" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;700&display=swap"
      rel="stylesheet"
    />

    <title>Power Tel</title>
    <link rel="stylesheet" href="./style/lightbox.min.css" />
    <script src="./js/lightbox-plus-jquery.min.js"></script>

    <script src="./js/all.js"></script>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="assets/logo.png" /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./partners.html">Partners</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contact.php">Contact</a>
            </li>
             
            <li class="nav-item">
              <a class="nav-link" href="./testimonials.html">Testimonials</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <div class="header">
      <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="3"
            aria-label="Slide 4"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="4"
            aria-label="Slide 5"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="./assets/slider/first.jpg"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="./assets/slider/second.jpg"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="./assets/slider/third.jpg"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="./assets/slider/forth.jpg"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="./assets/slider/fifth.jpg"
              class="d-block w-100"
              alt="..."
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- start the container from here-->
    <div class="about" id="services">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-5 col-lg-5 about1">
            <h5>Let's Build</h5>

            <h5>Your Dream Together</h5>
          </div>
          <div class="col-sm-12 col-md-1 col-lg-1">
            <span class="rectangle"></span>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-5 about2">
            <p>
              Many years of serving the Electric Constructions with the most
              advanced Equipments, the most reliable and productive maintenance
              and the expert services  that set PowerTel apart. That’s the
              PowerTel difference.
            </p>
          </div>
        </div>
      </div>

      <!--Features-->
      <div class="feature">
        <div class="container-fluid">
          <div class="row d-flex justify-content-around flex-wrap">
            <div class="col-sm-2 card">
              <span class="icon">
                <i class="fas fa-bolt"></i>
              </span>
              <h6>Electrical</h6>
              <ul>
                <li>Install power plants</li>
                <li>Install solar cell plants</li>
                <li>Install msan cabinets</li>
                <li>Install Battery system</li>
                <li>Dummy load Battery test</li>
              </ul>
            </div>

            <div class="col-sm-2 card">
              <span class="icon">
                <i class="fas fa-cogs"></i>
              </span>
              <h6>Electromechanical</h6>
              <ul>
                <li>Pumps</li>
                <li>Torquing</li>
                <li>Diesel</li>
                <li>Greasing</li>
                <li>Lubrication</li>
              </ul>
            </div>

            <div class="col-sm-2 card">
              <span class="icon">
                <i class="fas fa-broadcast-tower"></i>
              </span>
              <h6>Telecommunications</h6>
              <ul>
                <li>Cabinets commission</li>
                <li>Power modification</li>
                <li>Hybrid sites</li>

                <li>Telecom & civil works</li>
                <li>Fiber to Home</li>
              </ul>
            </div>

            <div class="col-sm-2 card">
              <span class="icon">
                <i class="fas fa-wrench"></i>
              </span>
              <h6>maintenance</h6>
              <ul>
                <li>Msan cabinets</li>
                <li>Indoor cabinets</li>
                <li>UPS systems</li>

                <li>Earthing systems</li>
                <li>Rectifiers and modules</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="aboutUs" id="about">
        <h2>ABOUT US</h2>
        <p>
          PowerTEL company established in 2013 with a great experience, dealing
          <br />
          with AC and DC power plants with GenSet plants which apply to
          companies <br />
          appliances and telecommunication equipment systems. <br />
        </p>
      </div>

      <div class="projects">
        <h2>FEATURED PROJECTS</h2>
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <img src="./assets/featured/8.jpg" class="fixMargin" />
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <img src="./assets/featured/1.jpg" class="fixMargin" />
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <img src="./assets/featured/2.jpg" class="fixMargin" />
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <img src="./assets/featured/3.jpg" class="fixMargin" />
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <img src="./assets/featured/4.jpg" />
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <img src="./assets/featured/5.jpg" />
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <img src="./assets/featured/6.jpg" />
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <img src="./assets/featured/7.jpg" />
          </div>
        </div>
      </div>
    </div>
    <div class="team">
      <h2>EXPERT TEAMS</h2>
      <p>Well Trained Engineers And Technician With Many Years of Experience</p>
      <p>And All safety Certifications Who will Do their Best For You</p>
      <div class="adv">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-2 prof">
              <h6>Expert And Professionals</h6>
            </div>
            <div class="col-sm-2 work">
              <h6>High Quality Work</h6>
            </div>
            <div class="col-sm-2 emergency">
              <h6>24x7 Emergency</h6>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>

            <div class="col-sm-3"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="fasel">
      <h2>Leader Of</h2>
      <h1>Electrical Constructions</h1>
    </div>

    <div class="mainProjects">
      <div class="container-fluid">
        <h2>PROJECTS</h2>

        <ul
          class="nav nav-pills mb-3 d-flex justify-content-center"
          id="pills-tab"
          role="tablist"
        >
          <li class="nav-item" role="presentation">
            <button
              class="nav-link active"
              id="pills-small-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-small"
              type="button"
              role="tab"
              aria-controls="pills-small-tab"
              aria-selected="true"
            >
              Small Stations
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-large-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-large"
              type="button"
              role="tab"
              aria-controls="pills-large"
              aria-selected="false"
            >
              Large Stations
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-hybrid-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-hybrid"
              type="button"
              role="tab"
              aria-controls="pills-hybrid"
              aria-selected="false"
            >
              Hybrid
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-topBox-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-topBox"
              type="button"
              role="tab"
              aria-controls="pills-topBox"
              aria-selected="false"
            >
              Top Box
            </button>
          </li>

          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-ups-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-ups"
              type="button"
              role="tab"
              aria-controls="pills-ups"
              aria-selected="false"
            >
              UPS
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-telecom-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-telecom"
              type="button"
              role="tab"
              aria-controls="pills-telecom"
              aria-selected="false"
            >
              Telecom
            </button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div
            class="tab-pane fade show active"
            id="pills-small"
            role="tabpanel"
            aria-labelledby="pills-small-tab"
          >
            <a
              href="./assets/projects/smallStation/1-min.jpg"
              data-lightbox="gallery"
              data-title="600AH Huawei Station"
            >
              <img src="./assets/projects/smallStation/1-min.jpg" />
            </a>
            <a
              href="./assets/projects/smallStation/2-min.jpg"
              data-lightbox="gallery"
              data-title="Battery Installation"
            >
              <img src="./assets/projects/smallStation/2-min.jpg" />
            </a>
            <a
              href="./assets/projects/smallStation/3-min.jpg"
              data-lightbox="gallery"
              data-title="Duct Management"
            >
              <img src="./assets/projects/smallStation/3-min.jpg" />
            </a>
            <br />
            <a
              href="./assets/projects/smallStation/4-min.jpg"
              data-lightbox="gallery"
              data-title="Ladders Installation"
            >
              <img src="./assets/projects/smallStation/4-min.jpg" />
            </a>

            <a
              href="./assets/projects/smallStation/6-min.jpg"
              data-lightbox="gallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/smallStation/6-min.jpg" />
            </a>
            <a
              href="./assets/projects/smallStation/7-min.jpg"
              data-lightbox="gallery"
              data-title="AC Box"
            >
              <img src="./assets/projects/smallStation/7-min.jpg" />
            </a>
          </div>
          <div
            class="tab-pane fade"
            id="pills-large"
            role="tabpanel"
            aria-labelledby="pills-large-tab"
          >
            <a
              href="./assets/projects/largestations/1-min.jpg"
              data-lightbox="largeGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/largestations/1-min.jpg" />
            </a>

            <a
              href="./assets/projects/largestations/2-min.jpg"
              data-lightbox="largeGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/largestations/2-min.jpg" />
            </a>
            <a
              href="./assets/projects/largestations/3-min.jpg"
              data-lightbox="largeGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/largestations/3-min.jpg" />
            </a>
            <a
              href="./assets/projects/largestations/4-min.jpg"
              data-lightbox="largeGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/largestations/4-min.jpg" />
            </a>
            <a
              href="./assets/projects/largestations/5-min.jpg"
              data-lightbox="largeGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/largestations/5-min.jpg" />
            </a>
            <a
              href="./assets/projects/largestations/6-min.jpg"
              data-lightbox="largeGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/largestations/6-min.jpg" />
            </a>
            <a
              href="./assets/projects/largestations/7-min.jpg"
              data-lightbox="largeGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/largestations/7-min.jpg" />
            </a>
            <a
              href="./assets/projects/largestations/8-min.jpg"
              data-lightbox="largeGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/largestations/8-min.jpg" />
            </a>
            <a
              href="./assets/projects/largestations/9-min.jpg"
              data-lightbox="largeGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/largestations/9-min.jpg" />
            </a>
            <a
              href="./assets/projects/largestations/10-min.jpg"
              data-lightbox="largeGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/largestations/10-min.jpg" />
            </a>
            <a
              href="./assets/projects/largestations/11-min.jpg"
              data-lightbox="largeGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/largestations/11-min.jpg" />
            </a>

            <a
              href="./assets/projects/largestations/12-min.jpg"
              data-lightbox="largeGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/largestations/12-min.jpg" />
            </a>
          </div>
          <div
            class="tab-pane fade"
            id="pills-hybrid"
            role="tabpanel"
            aria-labelledby="pills-hybrid-tab"
          >
            <a
              href="./assets/projects/hybrid/1-min.jpg"
              data-lightbox="hybridGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/hybrid/1-min.jpg" />
            </a>
            <a
              href="./assets/projects/hybrid/2-min.jpg"
              data-lightbox="hybridGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/hybrid/2-min.jpg" />
            </a>
            <a
              href="./assets/projects/hybrid/3-min.jpg"
              data-lightbox="hybridGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/hybrid/3-min.jpg" />
            </a>
            <a
              href="./assets/projects/hybrid/4.jpg"
              data-lightbox="hybridGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/hybrid/4.jpg" />
            </a>
            <a
              href="./assets/projects/hybrid/5-min.jpg"
              data-lightbox="hybridGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/hybrid/5-min.jpg" />
            </a>

            <a
              href="./assets/projects/hybrid/6-min.jpg"
              data-lightbox="hybridGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/hybrid/6-min.jpg" />
            </a>

            <a
              href="./assets/projects/hybrid/7-min.jpg "
              data-lightbox="hybridGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/hybrid/7-min.jpg" />
            </a>

            <a
              href="./assets/projects/hybrid/8-min.jpg"
              data-lightbox="hybridGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/hybrid/8-min.jpg" />
            </a>
          </div>
          <div
            class="tab-pane fade"
            id="pills-topBox"
            role="tabpanel"
            aria-labelledby="pills-topBox-tab"
          >
            <a
              href="./assets/projects/topbox/1-min.jpg"
              data-lightbox="topboxGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/topbox/1-min.jpg" />
            </a>

            <a
              href="./assets/projects/topbox/2-min.jpg"
              data-lightbox="topboxGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/topbox/2-min.jpg" />
            </a>
            <a
              href="./assets/projects/topbox/3-min.jpg"
              data-lightbox="topboxGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/topbox/3-min.jpg" />
            </a>
            <a
              href="./assets/projects/topbox/4-min.jpg"
              data-lightbox="topboxGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/topbox/4-min.jpg" />
            </a>
            <a
              href="./assets/projects/topbox/5-min.jpg"
              data-lightbox="topboxGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/topbox/5-min.jpg" />
            </a>
          </div>
          <div
            class="tab-pane fade"
            id="pills-ups"
            role="tabpanel"
            aria-labelledby="pills-ups-tab"
          >
            <a
              href="./assets/projects/ups/1.jpg"
              data-lightbox="upsGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/ups/1.jpg" />
            </a>

            <a
              href="./assets/projects/ups/2.jpg"
              data-lightbox="upsGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/ups/2.jpg" />
            </a>
            <a
              href="./assets/projects/ups/3.jpg"
              data-lightbox="upsGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/ups/3.jpg" />
            </a>
            <a
              href="./assets/projects/ups/4.jpg"
              data-lightbox="upsGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/ups/4.jpg" />
            </a>
            <a
              href="./assets/projects/ups/5.jpg"
              data-lightbox="upsGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/ups/5.jpg" />
            </a>
            <a
              href="./assets/projects/ups/6.jpg"
              data-lightbox="upsGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/ups/6.jpg" />
            </a>
          </div>
          <div
            class="tab-pane fade"
            id="pills-telecom"
            role="tabpanel"
            aria-labelledby="pills-telecom-tab"
          >
            <a
              href="./assets/projects/telecom/1-min.jpeg"
              data-lightbox="telecomGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/telecom/1-min.jpeg" />
            </a>

            <a
              href="./assets/projects/telecom/2-min.jpeg"
              data-lightbox="telecomGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/telecom/2-min.jpeg" />
            </a>
            <a
              href="./assets/projects/telecom/3-min.jpeg"
              data-lightbox="telecomGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/telecom/3-min.jpeg" />
            </a>
            <a
              href="./assets/projects/telecom/4-min.jpeg"
              data-lightbox="telecomGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/telecom/4-min.jpeg" />
            </a>
            <a
              href="./assets/projects/telecom/5-min.jpeg"
              data-lightbox="telecomGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/telecom/5-min.jpeg" />
            </a>
            <a
              href="./assets/projects/telecom/6-min.jpeg"
              data-lightbox="telecomGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/telecom/6-min.jpeg" />
            </a>
            <a
              href="./assets/projects/telecom/7-min.jpeg"
              data-lightbox="telecomGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/telecom/7-min.jpeg" />
            </a>
            <a
              href="./assets/projects/telecom/8-min.jpeg"
              data-lightbox="telecomGallery"
              data-title="DC Cables Installation"
            >
              <img src="./assets/projects/telecom/8-min.jpeg" />
            </a>
          </div>
        </div>
      </div>
    </div>

    




    <div class="container" id="contact">
      <div class="row">
          <div class="col-lg-6 m-auto">
              <div class="card mt-5">
                  <div class="card-title">
                      <h2 class="text-center py-2"> Contact Us </h2>
                      <hr>
                    
         <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>


                  </div>
                  <div class="card-body">
                      <form action="process.php" method="post">
                          <input type="text" name="UName" placeholder="User Name" class="form-control mb-2">
                          <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                          <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                          <input type="number" name="number" placeholder="Number" class="form-control mb-2">
                          
                          <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                          <button class="formButton" name="btn-send"> Send </button>
                      </form>
                  </div>
              </div>
          </div>
      </div>


      
    

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
