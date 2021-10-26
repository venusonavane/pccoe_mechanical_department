<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y33X5YZFHF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Y33X5YZFHF');
</script>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Icon -->
    <link href="vender/img/logo/PCCOE_LOGO_b.jpg"  rel="shortcut icon" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="vender/css/bootstrap.css" rel="stylesheet" />		
    <!-- PCCOE HEADER FOOTER CSS FILE -->	
    <link rel="stylesheet" href="imp-pccoe-style.css" type="text/css" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> -->
    <link href="vender/css/navbar.css" rel="stylesheet" />
    <link href="vender/css/style1.css" rel="stylesheet" />		
     <!-- Icon Link -->
     <link href="vender/icon/css/brands.css" rel="stylesheet" />
     <link href="vender/icon/css/fontawesome.css" rel="stylesheet" />
     <link href="vender/icon/css/solid.css" rel="stylesheet" />	 	 	 
    <title>Department Of Mechanical Engineering | PCCOE</title>
    <style>
      html {
        scroll-behavior: smooth;
      }
    </style>
</head>

<body>
 <!-- Start Header -->  
 <?php include("pccoe-header.php"); ?>
 <header>
  <div class="container-fluid header">
      <div class="row">
          <div class="col-lg-3 text-center d-flex justify-content-around align-items-center">
              <div>
                <div class="extern-btn">
                  <a href="http://www.pccoepune.com/" class="text-decoration-none">
                    <i class="fas fa-home"></i> PCCOE
                  </a>
                </div>
              </div>
          </div>
          <div class="col-lg-6">
              <div class="text-center">
                   <h4 class="dept-name fs-3 mb-3">Department Of Mechanical Engineering</h4>
              </div>
          </div>
          <div class="col-lg-3"></div>
      </div>
  </div>
</header>
<!-- End Header -->

  <!-- Start Navbar -->
  <div class="menu-section d-flex justify-content-around">
    <nav id="menu">
        <label for="tm" id="toggle-menu"><b>Menu</b> <span class="drop-icon"><b>&#9776;</b></span></label>
        <input type="checkbox" id="tm">
        <ul class="main-menu cf">
            <li class="b-left"><a href="index.php">Home</a></li>
            <li class="b-left"><a href="#">About us
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="sm0">▾</label>
                </a>
                <input type="checkbox" id="sm0">
                <ul class="sub-menu">
                    <li><a href="aboutus/hod_desk.php">HOD Desk</a></li>
                    <li><a href="aboutus/vision-mission.php">Vision and Mission</a></li>
                    <li><a href="aboutus/program_outcome.php">PO's/PSO/PEO's</a></li>
                    <li><a href="aboutus/BOS.php">Board Of Studies</a></li>
                    <li><a href="aboutus/student_alumni.php">Student and Alumni's</a></li>
                </ul>
            </li>
            <li class="b-left"><a href="#">People
              <span class="drop-icon">▾</span>
              <label title="Toggle Drop-down" class="drop-icon" for="sm88">▾</label>
              </a>
              <input type="checkbox" id="sm88">
              <ul class="sub-menu">
                  <li><a href="people/faculty.php">Faculty</a></li>
                  <li><a href="people/staff.php">Staff</a></li>
              </ul>
          </li>
            <li class="b-left"><a href="#">Academics
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="sm8">▾</label>
                </a>
                <input type="checkbox" id="sm8">
                </a>
                <ul class="sub-menu">
                    <li><a href="ug/co_cordinator_desk.php">UG</a></li>
                    <li>
                      <a href="">PG
                        <span class="drop-icon">▸</span>
                        <label title="Toggle Drop-down" class="drop-icon" for="sm5">▾</label>
                      </a>
                      <input type="checkbox" id="sm5">
                      </a>
                      <ul class="sub-menu">
                          <li><a href="pg/me-design.php">M.Tech Design Engineering</a></li>
                          <li><a href="pg/me-heatpower.php">M.Tech Heat Power Engineering</a></li>
                      </ul>
                    </li>
                    <li><a href="phd/phd_home.php">Ph. D</a></li>
                </ul>
            </li>
            <li class="b-left"><a href="#">Research
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="smr">▾</label>
                </a>
                <input type="checkbox" id="smr">
                </a>
                <ul class="sub-menu">
                    <li><a href="research/research_team.php">Research Team</a> </li>
                    <li><a href="research/sig.php">Special Interest Groups (SIG)</a></li>
                    <li><a href="research/publication.php">Publication</a></li>
                    <li><a href="research/copyright.php">Intellectual Property Rights</a></li>
                    <li><a href="research/research funding.php">Research Funding </a></li>
                    <li><a href="research/cs_projects.php">Consultancy/Sponsored Projects</a></li>
                    <li><a href="research/student_achivements.php">Student Achievements</a></li>
                    <li><a href="research/entrepreneurship.php">Entrepreneurship</a></li>
                </ul>
            </li>

            <li class="b-left"><a href="#">Training & Placement
              <span class="drop-icon">▾</span>
              <label title="Toggle Drop-down" class="drop-icon" for="sm50">▾</label>
              </a>
              <input type="checkbox" id="sm50">
              </a>
              <ul class="sub-menu">
                  <li><a href="placement/recruiter.php">Major Recruiters</a></li>
                  <li><a href="placement/placement.php">Placement</a></li>
                  <li><a href="placement/internship.php">Internship</a></li>
                  <li><a href="placement/training.php">Industrial Visit & Training Program</a></li>
                  <li><a href="placement/mou.php">MOU's</a></li>
              </ul>
            </li>
            <li class="b-left"><a href="#">Facilities
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="smsfc">▾</label>
                </a>
                <input type="checkbox" id="smsfc">
                </a>
                <ul class="sub-menu">
                    <li><a href="facilities/public_html/laboratories.php">Laboratories</a></li>
                    <li><a href="facilities/public_html/library.php">Library</a></li>
                    <li><a href="facilities/public_html/seminar_hall.php">Seminar Hall</a></li>
                </ul>
            </li>
            <li class="b-left"><a href="#">Student Development & Welfare
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="smsdw">▾</label>
                </a>
                <input type="checkbox" id="smsdw">
                </a>
                <ul class="sub-menu">
                    <li><a href="Student_development&Welfare/public_html/higher_studies.php">Higher study cell</a></li>
                    <li><a href="Student_development&Welfare/public_html/Communication_Personality_Development.php">Communication and Personality Development Cell</a></li>
                    <li><a href="Student_development&Welfare/public_html/professional_development.php">Professional Development Cell</a></li>
                    <li><a href="Student_development&Welfare/public_html/ISR.php">Institutional Social Responsibility</a></li>
                    <li><a href="Student_development&Welfare/public_html/nation_services_scheme.php">National Service Scheme</a></li>
                </ul>
            </li>
            <li class="b-left"><a href="#">Clubs
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="sm9">▾</label>
                </a>
                <input type="checkbox" id="sm9">
                </a>
                <ul class="sub-menu">
                    <li><a href="clubs/mesa.php">MESA</a></li>
                    <li><a href="clubs/ambush.php">Team Ambush</a></li>
                    <li><a href="clubs/redbaron.php">Team Red Baron</a></li>
                    <li><a href="clubs/kratos.php">Team Kratos Racing</a></li>
                    <li><a href="clubs/solarium.php">Team Solarium</a></li>
                    <li><a href="clubs/automaton.php">Team Automatons</a></li>
                    <li><a href="clubs/maverick.php">Team Maverick</a></li>
                    <li><a href="clubs/ishrae.php">ISHRAE</a></li>
                    <li><a href="clubs/iei.php">IEI</a></li>
                    <li><a href="clubs/sport.php">Sports</a></li>
                </ul>
            </li>
            <li class="b-left b-right"><a href="contact_us/contact.php">Contact us</a></li>
        </ul>
    </nav>
</div>
<!-- End Navbar -->
    
       <!-- Start Spot Light -->
    <div class="marquee-section">
        <div class="running-text">
            <span class="static-head">SPOTLIGHT</span>
            <marquee scrollamount="4" class="p-1" onmouseover="this.stop();" onmouseout="this.start();">
              <a class="text-decoration-none text-dark" target="_blank" href="vender/files/department_boucher/1623508314920_samvaad Vol 1, Issue 3.pdf">
                <span class="marquee-text">
                   </span>
              </a>
            </marquee>
        </div>
    </div>
    <!-- End Spot Light -->


    <!-- Content page-->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" interval="100" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="vender/img/slider/img-0.jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption pb-0">
          <span class="title">1/3</span>
        </div>
      </div>
      <div class="carousel-item">
        <img src="vender/img/slider/img-1.jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption pb-0">
          <span class="title">2/3</span>
        </div>
      </div>
      <div class="carousel-item">
        <img src="vender/img/slider/img-2.jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption pb-0">
          <span class="title">3/3</span>
        </div>
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
  <div class="container-fluid pt-2 mt-3">
    <div class="row">
      <div class="col-lg-3">
        <div class="section bg-light">
          <div class="border-bottom border-1 border-primary pt-3">
            <p class="fs-5 color-blue">&nbsp; <i class="fas fa-angle-double-right"></i> Student Corner</p>
          </div>
          <ul class="section-list">
            <a href="student_corner/adminssion.php">
              <li>Admission</li>
            </a>
            <a href="student_corner/syllabus.php">
              <li>Syllabus</li>
            </a>
            <a href="student_corner/time_table.php">
              <li>Time table</li>
            </a>
            <a href="student_corner/results.php">
              <li>Results</li>
            </a>
            <a href="student_corner/university_rank_holder.php">
              <li>University Rank Holders</li>
            </a>
            <a href="student_corner/examination.php">
              <li>Examinations</li>
            </a>
            <a href="student_corner/download.php">
              <li>Downloads</li>
            </a>
            <a href="student_corner/department_boucher.php">
              <li>Department Broucher</li>
            </a>
          </ul>
        </div>



        <div class="implinks-section bg-light">
          <div class="border-bottom border-1 border-primary pt-3">
            <p class="fs-5 color-blue">&nbsp; <i class="fas fa-angle-double-right"></i> Important Links</p>
          </div>
          <ul class="section-list">
            <marquee direction="up" height="235px;" scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();">
            <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLScGsw3nasQ5Htfit1Obw3sK0aurDh7CfJiUT5TZv64gSM4Q1Q/viewform">
              <li>Exit Survey Form Link</li>
            </a>
            <a target="_blank" href="https://forms.gle/R3wQMM5Pk4RoJ9Wh9">
              <li>Alumni Survey Form Link</li>
            </a>
            <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSdWdx0PJ_kQFJ1YD1TtYBo6bOYYzXKZz4hm_Jk6Hh7yjQjH0A/viewform?usp=sf_link">
              <li>Parent Survey Form Link</li>
            </a>
            </marquee>
          </ul>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="container-fluid p-3 about-section bg-light rounded">
            <div class="border-bottom border-1 border-primary">
              <p class="fs-4 color-blue">About Mechanical</p>
            </div>
          <div class="row mt-4">
            <div class="col-lg-5 mt-3">
              <iframe width="100%" height="225" src="https://www.youtube.com/embed/I8FMF-yyyjc" title="PCCOE" class="rounded" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
              <div class="col-lg-7 text-data">
                  <p class="text-data mt-2">
                    The <b>Department of Mechanical Engineering</b>  at Pimpri Chinchwad College of Engineering 
                    believes in producing engineers who take a product from an idea to the market place.
                    The department has highly qualified and experienced faculty with expertise in the areas 
                    of Design, Production, Manufacturing and Thermal.
                  </p>
                  <p class="text-data mt-2">
                    The department has a strong culture of project based learning which is inculcated in 
                    the students through the team of enlightened faculty.
                    The department has defined the programme outcomes and all the good initiatives 
                    are undertaken to facilitate and fulfill the same.
                  </p>
              </div>
          </div>
      </div>
      <div class="row mt-3">
        <div class="col-sm-6">
          <div class="container-fluid p-3 bg-light branch-section">
            <div class="border-bottom border-1 border-primary">
              <p class="fs-4 color-blue">Courses</p>
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-6">
                  <a class="text-decoration-none text-dark" href="ug/co_cordinator_desk.php">
                    <div class="item text-center">
                        <img src="vender/img/logo/b-tech.jpg"/><br>
                        <span class="post">B. Tech</span><br>
                        <div class="branch">Mechanical Engineering</div>
                    </div>
                  </a>
                </div>
                <div class="col-6">
                  <a class="text-decoration-none text-dark" href="pg/me-design.php">
                    <div class="item">
                        <img src="vender/img/logo/m-tech.jpg"/><br>
                        <span class="post">M.Tech</span><br>
                        <div class="branch">Design Engineering</div>
                    </div>
                  </a>
                </div>
                <div class="col-6">
                  <a class="text-decoration-none text-dark" href="pg/me-heatpower.php">
                    <div class="item">
                        <img src="vender/img/logo/m-tech2.png"/><br>
                        <span class="post">M.Tech</span><br>
                        <div class="branch">Heat Power Engineering </div>
                    </div>
                  </a>
                </div> 
                <div class="col-6">
                  <a class="text-decoration-none text-dark" href="phd/2.php">
                    <div class="item">
                        <img src="vender/img/logo/phd.jpg"/><br>
                        <span class="post">Ph.D</span><br>
                        <div class="branch">Mechanical Engineering</div>
                    </div>
                </a>
              </div>
            </div>
        </div>
        </div>
        <div class="col-sm-6">
          <div class="container-fluid news-section mt-3 p-1 bg-light">
            <ul class="nav nav-tabs nav-fill tab-section" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Notices</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Events</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Achievements</button>
              </li>
            </ul>
            <div class="tab-content content-section" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <marquee direction="up" height="300px;" scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();">
                  <ul class="section-list section-list-sm">
                    <a target="_blank" href="vender/files/notices/Very Important register on Internship and NEAT Portal -reg..pdf">
                      <li><small>Very important register on internship and NEAT portal -reg.</small></li>
                    </a>
                    <a target="_blank" href="vender/files/notices/PCCOE INSEM EXAMINATION CIRCULAR BACHELOR OF ENGINEERING (2015 COURSE) B.E (CIVIL) TIME -2.00 TO 2.40 PM.pdf">
                      <li>
                        <small>Pccoe insem examination circular bachelor of engineering (2015 course) B.E time -2.00 to 2.40 pm.</small>
                      </li>
                    </a>
                    <a target="_blank" href="vender/files/notices/insem circular.pdf">
                      <li>
                        <small>TE/BE insem examination circular of sem-1 AY-2021-22 notice to student.</small>
                      </li>
                    </a>
                    <a target="_blank" href="vender/files/notices/PCCOE-Examination Circular Third Year Engineering (2019 Pattern) SEM-I Insemester Examination Time 10.00 am To 10.40 am.pdf">
                      <li>
                        <small>PCCOE-Examination Circular Third Year Engineering (2019 Pattern) SEM-I Insemester Examination Time 10.00 am To 10.40 am.</small>
                      </li>
                    </a>
                  </ul>
                </marquee>
                <p class="read-more"><a href="news_section/announcement.php">read more</a></p>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <marquee direction="up" height="300px;" scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();">
                  <ul class="section-list section-list-sm">
                    <!-- <a target="_blank" href="vender/files/department_boucher/1623508314920_samvaad Vol 1, Issue 3.pdf">
                      <li><small>186+ patents in last six years</small></li>
                    </a> -->
                  </ul>
                </marquee>
                <p class="read-more"><a href="news_section/upcomming_event.php">read more</a></p>
              </div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <marquee direction="up" height="300px;" scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();">
                  <ul class="section-list section-list-sm">
                    <!-- <a target="_blank" href="vender/files/department_boucher/1623508314920_samvaad Vol 1, Issue 3.pdf">
                      <li><small>186+ patents in last six years</small></li>
                    </a> -->
                  </ul>
                </marquee>
                 <p class="read-more"><a href="news_section/highlight_achivement.php">read more</a></p>
              </div>
            </div>
      </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End content-->

   
<!-- start footer -->
<footer class="container-fluid">
  <div class="row bg-blue d-flex justify-content-center px-5 pb-3 mt-md-4">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <div class="text-white">
          <div class="mt-5">
            <h5>
              <p class="text-white text-center">
                Follow us
              </p>
            </h5>
          </div>
          <div class="d-flex justify-content-evenly align-self-center">
            <a targrt="_blank" href="https://www.instagram.com/pccoepune/" class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-instagram"></i>
              </span> 
            </a>
            <a targrt="_blank" href="https://www.linkedin.com/company/pccoe-pune/?trk=biz-companies-cym" class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-linkedin-in"></i>
              </span> 
            </a>
            <a targrt="_blank" href="https://www.facebook.com/PCCOENigadi/" class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-facebook"></i>
              </span> 
            </a>
            
            <a targrt="_blank" href="https://twitter.com/pccoe_pune?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-twitter"></i>
              </span> 
            </a>
            <a targrt="_blank" href="https://www.youtube.com/channel/UCQiPDETOiteTLmAvvPk1WjA" class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-youtube"></i>
              </span> 
            </a>
          </div>
      </div>
    </div>
    <div class="col-md-4"></div>
    
  </div>
  <div class="row bg-blue d-flex justify-content-center px-5 pt-md-5">
    <div class="col-lg-4 col-md-6 mb-3 ps-md-5">
      <div class="border-bottom border-2 border-white mb-3">
        <h5>
          <p class="text-white">
            <i class="fas fa-map-marker-alt"></i> Location
          </p>
        </h5>
      </div>
      <div class="text-white">
        <address>
          <h6>Sector - 26, Pradhikaran, Nigdi,</h6>
          <h6>Near Akurdi Railway Station,</h6>
          <h6>Pune - 411 044.</h6>
        </address>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-3 ps-md-5">
      <div class="border-bottom border-2 border-white mb-3">
        <h5>
          <p class="text-white">
            <i class="fas fa-phone"></i> Contact us
          </p>
        </h5>
      </div>
      <div class="text-white">
          <h6>Tele : 020 – 2765 3168</h6>
          <h6>Tele : 020 – 2765 3166</h6>
          <h6>Ph : +91 9960984347</h6>
          <h6>
            <a targrt="_blank"  href="mailto:admin@pccoepune.org" class="text-decoration-none text-white">
              <i class="fas fa-envelope"></i>&nbsp; admin@pccoepune.org</a>
            </a>
          </h6>
      </div>
    </div>
    <div class="col-lg-4 col-md-12 mb-3 ps-md-5">
      <div class="border-bottom border-2 border-white mb-3">
        <h5>
          <p class="text-white">
            <i class="fas fa-link"></i> Useful Links
          </p>
        </h5>
      </div>
      <div>
        <div>
          <p>
            <a targrt="_blank"  href="index.php" class="text-decoration-none text-white">
              <h6>
                <i class="fas fa-external-link-alt"></i> Homepage
              </h6>
            </a>
          </p>
          <p>
            <a targrt="_blank" href="http://www.pccoepune.com/" class="text-decoration-none text-white">
              <h6>
                <i class="fas fa-external-link-alt"></i> PCCOE
              </h6>
            </a>
          </p>
          <p>
            <a targrt="_blank" href="http://pcet.org.in/" class="text-decoration-none text-white">
              <h6>
                <i class="fas fa-external-link-alt"></i> PCET
              </h6>
            </a>
          </p>
      </div>
      </div>
    </div>
  </div>
</footer>
<?php include("pccoe-footer.php"); ?>
<!-- End footer -->

    <script src="vender/js/bootstrap.bundle.js"></script>
    <!-- <script src="vender/js/navbar.js"></script> -->

</body>
</html>

