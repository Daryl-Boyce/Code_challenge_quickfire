
<?php
include ('php/head.php')
?>
<body>

<?php
// This calls the header files and uses them on the page //
    include ('php/header.php');
?>

    <h2 id="product_header">montreal leather sofa</h2>

    <!-- Slideshow container -->
    <div class="slideshow-container">
        
        <div class="timer_wrapper">
        <span class='countdown_text_left'>order in the next</span>
        <p id="countdown_timer"></p> 
        <span class='countdown_text_right'>for next day delivery</span>
        </div>
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
        <img src="assets/sofa_tan.png" alt="tan sofa displayed with a table and mat" style="width:100%">
        </div>

        <div class="mySlides fade">
        <img src="assets/sofa_tan.png" alt="tan sofa displayed with a table and mat" style="width:100%">
        </div>

        <div class="mySlides fade">
        <img src="assets/sofa_tan.png" alt="tan sofa displayed with a table and mat" style="width:100%">
        </div>

        <div class="mySlides fade">
        <img src="assets/sofa_tan.png" alt="tan sofa displayed with a table and mat" style="width:100%">
        </div> 

        <!--  Next and previous buttons  -->
        <a class="prev" onclick="plusSlides(-1)"><img src="assets/prev_arrow.png" alt="previous arrow on slider"></a>
        <a class="next" onclick="plusSlides(1)" ><img src="assets/next_arrow.png" alt="next arrow on slider"></a>

        <div class="slide_under">
            <img class="slide_under_preview" src="assets/sofa_tan.png" onclick="currentSlide(1)" alt="preview of tan sofa under the slider">

            <img class="slide_under_preview" src="assets/sofa_tan_option_2.png" onclick="currentSlide(2)" alt="preview of tan sofa under the slider">

            <img class="slide_under_preview" src="assets/sofa_tan_option_3.png" onclick="currentSlide(3)" alt="preview of tan sofa under the slider">

            <img class="slide_under_preview" src="assets/sofa_tan_option_4.png" onclick="currentSlide(4)" alt="preview of tan sofa under the slider">
        </div> 

    </div>  

    <script src="js/slider.js"></script>
    <script src="js/countdown_timer.js"></script>
</body>