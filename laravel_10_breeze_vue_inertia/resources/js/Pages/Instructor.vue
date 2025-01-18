<script setup>
import { Link } from "@inertiajs/vue3";
import SearchPopup from "@/Components/SearchPopup.vue";
import NavBar from "@/Components/NavBar.vue";
import Footer from "@/Components/Footer.vue";
</script>

<template>
  <!-- search popup start-->
  <SearchPopup />
  <!-- search popup end-->
  <div class="body-overlay" id="body-overlay"></div>

  <!-- navbar start -->
  <NavBar />
  <!-- navbar end -->

  <!-- breadcrumb start -->
  <div
    class="breadcrumb-area bg-overlay"
    style="background-image: url('assets/img/bg/3.png')"
  >
    <div class="container">
      <div class="breadcrumb-inner">
        <div class="section-title mb-0 text-center">
          <h2 class="page-title">Instructor</h2>
          <ul class="page-list">
            <li><Link :href="route('home')">Home</Link></li>
            <li>Instructor</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- breadcrumb end -->

  <!-- team area start -->
  <div class="team-area pd-top-120 pd-bottom-90">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
          <div class="single-team-inner">
            <div class="thumb">
              <img src="assets/img/team/1.png" alt="img" />
              <div class="social-wrap">
                <div class="social-wrap-inner">
                  <a class="social-share" href="#"><i class="fa fa-share-alt"></i></a>
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="details">
              <h4><a href="#">Doris Jordan</a></h4>
              <span>Design Expert</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-team-inner">
            <div class="thumb">
              <img src="assets/img/team/2.png" alt="img" />
              <div class="social-wrap">
                <div class="social-wrap-inner">
                  <a class="social-share" href="#"><i class="fa fa-share-alt"></i></a>
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="details">
              <h4><a href="#">Eugen Freman</a></h4>
              <span>Executive</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-team-inner">
            <div class="thumb">
              <img src="assets/img/team/3.png" alt="img" />
              <div class="social-wrap">
                <div class="social-wrap-inner">
                  <a class="social-share" href="#"><i class="fa fa-share-alt"></i></a>
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="details">
              <h4><a href="#">Jaction Leo</a></h4>
              <span>Developer</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-team-inner">
            <div class="thumb">
              <img src="assets/img/team/4.png" alt="img" />
              <div class="social-wrap">
                <div class="social-wrap-inner">
                  <a class="social-share" href="#"><i class="fa fa-share-alt"></i></a>
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="details">
              <h4><a href="#">Doris Jordan</a></h4>
              <span>Design Expert</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-team-inner">
            <div class="thumb">
              <img src="assets/img/team/5.png" alt="img" />
              <div class="social-wrap">
                <div class="social-wrap-inner">
                  <a class="social-share" href="#"><i class="fa fa-share-alt"></i></a>
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="details">
              <h4><a href="#">Eugen Freman</a></h4>
              <span>Executive</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-team-inner">
            <div class="thumb">
              <img src="assets/img/team/6.png" alt="img" />
              <div class="social-wrap">
                <div class="social-wrap-inner">
                  <a class="social-share" href="#"><i class="fa fa-share-alt"></i></a>
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="details">
              <h4><a href="#">Jaction Leo</a></h4>
              <span>Developer</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- team area end -->

  <!-- counter area start -->
  <div class="counter-area bg-gray">
    <div class="container">
      <div
        class="counter-area-inner pd-top-110 pd-bottom-120"
        style="background-image: url('assets/img/other/1.png')"
      >
        <div class="row">
          <div class="col-lg-8 mb-5 mb-lg-0">
            <div class="section-title mb-0">
              <h6 class="sub-title right-line">Funfact</h6>
              <h2 class="title">Strength in Numbers</h2>
              <p class="content pb-3">
                The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz
                prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex
                nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived
                waltz. Brick quiz whangs jumpy
              </p>
              <div class="btn-counter bg-base mt-4">
                <h3 class="left-val align-self-center">
                  <span class="counter">2.4</span>k+
                </h3>
                <div class="right-val align-self-center">
                  Successful <br />
                  students
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 align-self-center">
            <ul class="single-list-wrap">
              <li class="single-list-inner style-box-bg">
                <div class="media">
                  <div class="media-left">
                    <img src="assets/img/icon/1.png" alt="img" />
                  </div>
                  <div class="media-body align-self-center">
                    <h5><span class="counter">1200</span>+</h5>
                    <p>Learners & counting</p>
                  </div>
                </div>
              </li>
              <li class="single-list-inner style-box-bg">
                <div class="media">
                  <div class="media-left">
                    <img src="assets/img/icon/2.png" alt="img" />
                  </div>
                  <div class="media-body align-self-center">
                    <h5><span class="counter">320</span>+</h5>
                    <p>Total courses</p>
                  </div>
                </div>
              </li>
              <li class="single-list-inner style-box-bg">
                <div class="media">
                  <div class="media-left">
                    <img src="assets/img/icon/3.png" alt="img" />
                  </div>
                  <div class="media-body align-self-center">
                    <h5><span class="counter">1340</span>+</h5>
                    <p>Successful students</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- counter area end -->

  <!-- footer area start -->
  <Footer />
  <!-- footer area end -->

  <!-- back to top area start -->
  <div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
  </div>
  <!-- back to top area end -->
</template>
