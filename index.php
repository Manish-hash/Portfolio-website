<?php
include 'include/config.php';
$sql= "select * from `users` where `users`.`id`=1";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);
?>

<?php
include 'include/config.php';
$sql= "select * from `about`";
$result=mysqli_query($conn,$sql);
$detail=mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $data["name"] ?>-<?php echo $data["title"]?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/photo/favico.png" rel="icon">
  <link href="/assets/img/photo/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.php"><?php echo $data["name"]  ?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I'm a passionate <span><?php echo $data["title"]  ?></span> from <?php echo $data["city"]?></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#services">Services</a></li>
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <?php
        if($data["twitter"]){
          ?>
          <a href="<?= $data["twitter"]?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
          <?php
        } 
        ?>
        <?php
        if($data["facebook"]){
          ?>
          <a href="<?= $data["facebook"]?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
          <?php
        } 
        ?>
        <?php
        if($data["instagram"]){
          ?>
          <a href="<?= $data["instagram"]?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
          <?php
        } 
        ?>
        <?php
        if($data["linkdin"]){
          ?>
          <a href="<?= $data["linkdin"]?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
          <?php
        } 
        ?>
        <?php
        if($data["github"]){
          ?>
          <a href="<?= $data["github"]?>" target="_blank"  class="linkedin"><i class="bi bi-github"></i></a>
          <?php
        } 
        ?>
        
        
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
        <img src="assets/img/photo/pic.jpg" class="img-fluid" alt="" >
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?= $data["title"]?></h3>
          <p class="fst-italic">
          Let your website be your digital ambassador with front end!
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?= $detail["birthday"]?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?= $detail["website"]?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?= $detail["phone"]?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?= $detail["city"]?></span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?= $detail["age"]?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?= $detail["degree"]?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?= $detail["email"]?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span><?php if($detail["freelance"]){
                  echo "Available";
                }
                else{
                  echo "Not Available";
                }
                  ?></span></li>
              </ul>
            </div>
          </div>
          <p>
            Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
            Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
          </p>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <?php
    $counter="SELECT * FROM `counter`";
    $counter_result=mysqli_query($conn,$counter);
    ?>

<div class="counts container">

<div class="row">

<?php
    if($counter_result -> num_rows > 0){
      while($row= $counter_result -> fetch_assoc())
      {
        ?>
        <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="<?=$row['icon'];?>"></i>
          <span data-purecounter-start="<?=$row['pre'];?>" data-purecounter-end="<?=$row['post']; ?>" data-purecounter-duration="1" class="purecounter"></span>
          <p><?=$row['title']; ?></p>
        </div>
      </div>
      <?php
      
      }
    }
    ?>
  
      </div>

    </div><!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">HTML <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">PHP <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">WordPress/CMS <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Photoshop <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div><!-- End Skills -->

    <!-- ======= Interests ======= -->
    <?php
    $interest="SELECT * FROM `interest`";
    $interest_result=mysqli_query($conn,$interest);
    ?>

<div class="interests container">

<div class="section-title">
  <h2>Interests</h2>
</div>

<div class="row">

<?php
  if($interest_result-> num_rows > 0){
    while($row=$interest_result->fetch_assoc()){
      ?>
      <div class="col-lg-3 col-md-4 mt-5">
      <div class="icon-box">
        <i class="<?=$row['icon']; ?>" style="color: #ffbb2c;"></i>
        <h3><?=$row['title']; ?></h3>
      </div>
    </div>
    <?php
  }
}

      ?>
</div> 
        
      </div>

    </div><!-- End Interests -->

    <!-- ======= Testimonials ======= -->

    <div class="testimonials container">

      <div class="section-title">
        <h2>Testimonials</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
    <?php
     $testimonial="SELECT * FROM `testimonial`";
     $testimonial_review=mysqli_query($conn,$testimonial);

    if($testimonial_review->num_rows > 0){
      while($testimonial_row=$testimonial_review->fetch_assoc()){
        ?>
      <div class="swiper-slide">
      <div class="testimonial-item">
        <p>
          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
        <?=$testimonial_row['quote'];?>
          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
        </p>
        <h3><?=$testimonial_row['name']; ?></h3>
        <h4><?=$testimonial_row['post'];?></h4>
      </div>
    </div>

    <?php
       }
     }

    ?>
</div>
          <!-- End testimonial item -->

          <!-- End testimonial item -->

        
        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel testimonials-carousel"></div>

    </div><!-- End Testimonials  -->

  </section><!-- End About Section -->


  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Sumary</h3>
          <div class="resume-item pb-0">
            <h4>Alice Barkley</h4>
            <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
            <p>
            <ul>
              <li>Portland par 127,Orlando, FL</li>
              <li>(123) 456-7891</li>
              <li>alice.barkley@example.com</li>
            </ul>
            </p>
          </div>

          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>Master of Fine Arts &amp; Graphic Design</h4>
            <h5>2015 - 2016</h5>
            <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
            <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
          </div>
          <div class="resume-item">
            <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
            <h5>2010 - 2014</h5>
            <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
            <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Professional Experience</h3>
          <div class="resume-item">
            <h4>Senior graphic design specialist</h4>
            <h5>2019 - Present</h5>
            <p><em>Experion, New York, NY </em></p>
            <p>
            <ul>
              <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
              <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
              <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
              <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>Graphic design specialist</h4>
            <h5>2017 - 2018</h5>
            <p><em>Stepping Stone Advertising, New York, NY</em></p>
            <p>
            <ul>
              <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
              <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
              <li>Recommended and consulted with clients on the most appropriate graphic design</li>
              <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
            </ul>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>My Services</p>
      </div>
      <?php
      $service="SELECT * FROM `services`";
      $service_result=mysqli_query($conn,$service);
      ?>
      <div class="row">
      <?php
      if($service_result-> num_rows > 0){
        while($row_service=$service_result-> fetch_assoc()){
          ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="<?=$row_service['icon'];?>"></i></div>
            <h4><a href=""><?=$row_service['title']; ?></a></h4>
            <p><?=$row_service['text']; ?></p>
          </div>
        </div>
        <?php
        }
      }
    
      ?>
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <?php
            $cat_list ="SELECT * FROM category";
            $cat_result=mysqli_query($conn,$cat_list);
            if($cat_result->num_rows>0){
              while($cat_data=$cat_result->fetch_assoc()){
                ?>
                <li data-filter=".<?=$cat_data['name'];?>"><?=$cat_data['name'];?></li>
                <?php
              }
            }
            ?>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">
        <?php
        $portfolio ="SELECT * FROM portfolio ";
        $portfolio_result= mysqli_query($conn,$portfolio);
        
        if($portfolio_result-> num_rows > 0){
          while($portfolio_data=$portfolio_result->fetch_assoc()){
            $category= $portfolio_data['category'];
            $category_sql ="SELECT * FROM category WHERE `category`.`id`='$category'";
            $category_result=mysqli_query($conn,$category_sql);
            $category_data=mysqli_fetch_assoc($category_result);
       
              ?>
        <div class="col-lg-4 col-md-6 portfolio-item <?=$category_data['name'];?>">
          <div class="portfolio-wrap">
            <img src="<?=$portfolio_data['image']; ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?=$portfolio_data['title']; ?></h4>
              <p><?=$category_data['name'];?></p>
              <div class="portfolio-links">
                <a href="<?=$portfolio_data['image']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?=$portfolio_data['title']; ?>"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.php?id=<?php echo $portfolio_data['id'];?>" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
              <?php
          }
        }
        else{
          echo "No portfolio found";
        }
        ?>    

        

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <?php
      //  $contact="SELECT * FROM `contact`";
      //  $contact_result=mysqli_query($conn,$contact);
      //  $contact_detail=mysqli_fetch_assoc($contact_result);


      ?>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p><?=$detail['Address']; ?></p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            
      <div class="social-links">
        <?php
        if($data["twitter"]){
          ?>
          <a href="<?= $data["twitter"]?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
          <?php
        } 
        ?>
        <?php
        if($data["facebook"]){
          ?>
          <a href="<?= $data["facebook"]?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
          <?php
        } 
        ?>
        <?php
        if($data["instagram"]){
          ?>
          <a href="<?= $data["instagram"]?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
          <?php
        } 
        ?>
        <?php
        if($data["linkdin"]){
          ?>
          <a href="<?= $data["linkdin"]?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
          <?php
        } 
        ?>
        <?php
        if($data["github"]){
          ?>
          <a href="<?= $data["github"]?>" target="_blank"  class="linkedin"><i class="bi bi-github"></i></a>
          <?php
        } 
        ?>
        
        
      </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p><?=$detail['email']; ?></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class=""></i>
            <h3>Call Me</h3>
            <p><?=$detail['phone']; ?></p>
          </div>
        </div>
      </div>

      <form action="hello.php" method="POST" role="form" class="php-email-form mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        
        <div class="text-center"><button type="submit" name="submt">Send Message </button> </div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>