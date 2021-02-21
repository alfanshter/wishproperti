  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Kami melayani jual dan sewa rumah</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  About
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= About Section ======= -->
    <section class="section-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="about-img-box">
              <img src="gambar/tentang/slide1.jpg" alt="" class="img-fluid">
            </div>
            <div class="sinse-box">
              <h3 class="sinse-title">WishProperti
                <span></span>
                <br> Sejak 2020
              </h3>
              <p>Jual dan Sewa Rumah</p>
            </div>
          </div>
          <div class="col-md-12 section-t8">
            <div class="row">
              <div class="col-md-6 col-lg-5">
              <img src="gambar/tentang/slide-about-1.jpg" alt="" class="img-fluid">
              </div>
              <div class="col-md-6 col-lg-5 section-md-t3">
                <div class="title-box-d">
                  <h3 class="title-d">
                    <br> Tentang WishProperti
                  </h3>
                </div>
                <p class="color-text-a">
                🏡 Make your dreams property
.
SPESIALIS PROPERTI SIDOARJO SURABAYA
Terima Titip Jual Properti
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- =======Team Section ======= -->
    <section class="section-agents section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Hubungi Tim Kami</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
         <?php foreach ($tim as $tims) : ?>
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="gambar/tim/<?php echo $tims->foto ?>" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="agent-single.html" class="link-two"><?php echo $tims->nama ?>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                  <?php echo $tims->deskripsi ?>
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Phone: </strong> <?php echo $tims->telepon ?>
                    </p>
                    <p>
                      <strong>Email: </strong> <?php echo $tims->email ?>
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-dribbble" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section><!-- End About Section-->
    

  </main><!-- End #main -->

