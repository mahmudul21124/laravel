<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
  <footer class="footer-area footer-area-2 bg-gray">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="widget widget_about text-center">
              <Link href="index.html"><img src="assets/img/logo-3.png" alt="img" /></Link>
              <div class="details">
                <p>
                  Edumint tetur sadipscing elitr tempor invidunt ut labore et dolore magna
                  aliquyam erat, sed diam voluptua.
                </p>
                <ul class="social-media">
                  <li>
                    <Link href="#"><i class="fa fa-facebook"></i></Link>
                  </li>
                  <li>
                    <Link href="#"><i class="fa fa-twitter"></i></Link>
                  </li>
                  <li>
                    <Link href="#"><i class="fa fa-instagram"></i></Link>
                  </li>
                  <li>
                    <Link href="#"><i class="fa fa-pinterest"></i></Link>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="widget widget_contact">
              <h4 class="widget-title">Contact Us</h4>
              <ul class="details">
                <li>
                  <i class="fa fa-map-marker"></i> Chashara, Narayanganj 1400
                </li>
                <li><i class="fa fa-envelope"></i> mahmudul21124@gmail.com</li>
                <li><i class="fa fa-phone"></i> +8801988-674940</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="widget widget_blog_list">
              <h4 class="widget-title">News & Blog</h4>
              <ul>
                <li>
                  <h6>
                    <Link href="blog-details.html">Big Ideas Of Business Branding Info.</Link>
                  </h6>
                  <span class="date"><i class="fa fa-calendar"></i>December 7, 2021</span>
                </li>
                <li>
                  <h6>
                    <Link href="blog-details.html">Ui/Ux Ideas Of Business Branding Info.</Link>
                  </h6>
                  <span class="date"><i class="fa fa-calendar"></i>December 7, 2021</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="widget widget_nav_menu">
              <h4 class="widget-title">Course</h4>
              <ul>
                <li><Link href="course.html">Branding design</Link></li>
                <li><Link href="course.html">Ui/Ux designing </Link></li>
                <li><Link href="course.html">Make Elements</Link></li>
                <li><Link href="course.html">Business</Link></li>
                <li><Link href="course.html">Graphics design</Link></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-5 align-self-center">
            <p>&copy;copyright 2025 by <a href="https://github.com/mahmudul21124/">Mahmudul Haque</a></p>
          </div>
          <div class="col-md-7 text-md-right align-self-center mt-md-0 mt-2">
            <div class="widget_nav_menu">
              <ul>
                <li><Link :href="route('home')">Home</Link></li>
                <li><Link :href="route('about')">About Us</Link></li>
                <li><Link :href="route('instructor')">Instructor</Link></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>
