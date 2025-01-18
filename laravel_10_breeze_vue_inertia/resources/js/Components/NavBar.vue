<script setup>
import { Link } from '@inertiajs/vue3';
</script>
<template>
  <div class="navbar-area">
    <!-- navbar top start -->
    <div class="navbar-top">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-md-left text-center">
            <ul>
              <li>
                <p><i class="fa fa-map-marker"></i> Chashara, Narayanganj 1400</p>
              </li>
              <li>
                <p><i class="fa fa-envelope-o"></i> mahmudul21124@gmail.com</p>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="topbar-right text-md-right text-center">
              <li class="social-area">
                <Link href="#"><i class="fa fa-facebook" aria-hidden="true"></i></Link>
                <Link href="#"><i class="fa fa-twitter" aria-hidden="true"></i></Link>
                <Link href="#"><i class="fa fa-instagram" aria-hidden="true"></i></Link>
                <Link href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></Link>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-area-2 navbar-area navbar-expand-lg">
      <div class="container nav-container">
        <div class="responsive-mobile-menu">
          <button
            class="menu toggle-btn d-block d-lg-none"
            data-target="#edumint_main_menu"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="icon-left"></span>
            <span class="icon-right"></span>
          </button>
        </div>
        <div class="logo">
          <Link href="index.html"><img src="assets/img/logo-2.png" alt="img" /></Link>
        </div>
        <div class="nav-right-part nav-right-part-mobile">
          <Link class="signin-btn" href="signin.html">Sign In</Link>
          <Link class="btn btn-base" href="signup.html">Sign Up</Link>
          <Link class="search-bar" href="#"><i class="fa fa-search"></i></Link>
        </div>
        <div class="collapse navbar-collapse" id="edumint_main_menu">
          <ul class="navbar-nav menu-open">
            <li class="current-menu-item">
              <Link :href="route('home')">Home</Link>
            </li>
            <li><Link :href="route('about')">About Us</Link></li>
            <li><Link :href="route('instructor')">Instructor</Link></li>
            <li><Link :href="route('blog')">Blog</Link></li>
            <li><Link :href="route('contact')">Contact Us</Link></li>
          </ul>
        </div>
        <div class="nav-right-part nav-right-part-desktop style-black">
          <Link class="signin-btn" href="signin.html">Sign In</Link>
          <Link class="btn btn-base" href="blog.html">Sign Up</Link>
          <Link class="search-bar" href="#"><i class="fa fa-search"></i></Link>
        </div>
      </div>
    </nav>
  </div>
</template>
