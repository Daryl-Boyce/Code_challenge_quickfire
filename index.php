<?php
// This calls the header files and uses them on the page //
    include ('php/header.php');
?>
<body>

    <!-- container for the slideshow -->
<div class="slideshow_container">

<!-- Full-width images with number and caption text -->
<div class="slides_main fade">
  <div class="numbertext">1 / 3</div>
  <img src="assets\sofa_tan_regular.png" style="width:100%">
  <div class="text">tan sofa</div>
</div>

<div class="slides_main fade">
  <div class="numbertext">2 / 3</div>
  <img src="assets\sofa_tan_regular.png" style="width:100%">
  <div class="text">tan sofa</div>
</div>

<div class="slides_main fade">
  <div class="numbertext">3 / 3</div>
  <img src="assets\sofa_tan_regular.png" style="width:100%">
  <div class="text">tan sofa</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>








    <!-- slider menu to choose product details from -->
    <!-- <div class="product_info_menu">
        <ul>
            <li>
                <a>product description</a>
            </li>
            
            <li>
                <a>size guide</a>
            </li>
            
            <li>
                <a>delivery &amp; returns</a>
            </li>
            
            <li>
                <a>reviews</a>
            </li>
        </ul>
    </div> -->
    <!-- Display under the slider menu used for the content display of products -->
    <div class="product_info_display">
        <div class="product_info_display_text"></div>
        <div class="product_info_display_img"></div>
    </div>

    <script src="slider.js"></script>
</body>