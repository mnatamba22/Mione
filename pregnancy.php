<?php
require_once("../functions/header.php")
?>

<style>
    .card-img {
      height: 100%;
      object-fit: cover;
    }
    .card {
      height: 100%;
    }
    .overlay-caption {
      align-items: center !important;

    }
  </style>

<section id="about" class="about-section-padding">
            <div class="container" style="padding: 30px 0px; margin-top: 100px">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="about-image text-center">
                            <img src="../IMAGES/pregnancy/p1.jpg" alt="an image" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 ps-lg-5 mt-md-5">
                        <div class="about-text" style="font-size: 120%">
                          <h2 class="text-center text-primary">New family member on the way</h2>
                          <p style="margin-left: 15px;">Welcome to your pregnancy journey! Explore everything from the earliest signs to the final moments of labor and delivery in this comprehensive guide. Track your due date, witness your baby's weekly development, discover ways to ease pregnancy discomforts, learn about nutrition do's and don'ts</p>
                          <div class="row">
                            <div class="col-12 text-center">
                              <p class="special-p"><a href="parenthood.php" class="btn btn-warning mt-3">Read More</a></p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
          <div class="row">
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="../IMAGES/pregnancy/p2.jpg" class="card-img" alt="preg">
                <div class="card-img-overlay d-flex align-items-center justify-content-center">
                  <div class="overlay-caption text-center">
                    <p class="special-p">
                      <a href="trimester.php" class="btn btn-warning mt-3">Trimesters</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="../IMAGES/pregnancy/p3.jpg" class="card-img" alt="preg">
                <div class="card-img-overlay d-flex align-items-center justify-content-center">
                  <div class="overlay-caption text-center">
                    <p class="special-p">
                      <a href="exercise.php" class="btn btn-warning mt-3">Exercise</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="../IMAGES/pregnancy/p4.jpg" class="card-img custom-img" alt="preg">
                <div class="card-img-overlay d-flex align-items-center justify-content-center">
                  <div class="overlay-caption text-center">
                    <p class="special-p">
                      <a href="nutrition.php" class="btn btn-warning mt-3">Nutrition</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>


<?php

require_once("../functions/footer.php")
?>