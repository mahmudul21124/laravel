<script setup>
import SearchPopup from '@/Components/SearchPopup.vue';
import NavBar from '@/Components/NavBar.vue';
import Banner from '@/Components/Banner.vue';
import Intro from '@/Components/Intro.vue';
import About from '@/Components/About.vue';
import CourseArea from '@/Components/CourseArea.vue';
import BlogArea from '@/Components/BlogArea.vue';
import Footer from '@/Components/Footer.vue';
</script>

<template>
  <!-- search popup start-->
  <SearchPopup />
  <!-- search popup end-->

  <div class="body-overlay" id="body-overlay"></div>

  <!-- navbar start -->
  <NavBar />
  <!-- navbar end -->

  <!-- banner start -->
  <Banner />
  <!-- banner end -->

  <!-- intro start -->
  <Intro />
  <!-- intro end -->

  <!-- about area start -->
  <About />
  <!-- about area end -->

  <!-- course area start -->
  <CourseArea />
  <!-- course area end -->

  <!--blog-area start-->
  <BlogArea />
  <!--blog-area end-->

  <!-- footer area start -->
  <Footer />
  <!-- footer area end -->

  <!-- back to top area start -->
  <div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
  </div>
  <!-- back to top area end -->
</template>
