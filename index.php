
<?php
include ('php/head.php')
?>
<body>
<?php include ('php/main_nav.php'); ?>
<?php
// This calls the header files and uses them on the page //
    include ('php/header.php');
?>
    <div class="name_favorite_wrapper">
        <h2 id="product_header">montreal leather sofa</h2>
    <!-- <button id="add_to_favourite">love</button> -->
    
        <i class="heart fa fa-heart-o"></i>
    </div>
    <!-- Slideshow container -->
    <div class="slideshow-container">
        
        <div class="timer_wrapper">
        <span class='countdown_text_left'>order in the next</span>
        <p id="countdown_timer"></p> 
        <span class='countdown_text_right'>for next day delivery</span>
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

        <div class="mySlides fade">
        <img src="assets/sofa_tan.png" alt="tan sofa displayed with a table and mat" style="width:100%">
        </div> 

        <!--  Next and previous buttons  -->
        <div class="slider_buttons">
            <a class="prev" onclick="plusSlides(-1)"><img src="assets/prev_arrow.png" alt="previous arrow on slider"></a>
            <a class="next" onclick="plusSlides(1)" ><img src="assets/next_arrow.png" alt="next arrow on slider"></a>
        </div>

        <div class="slide_under">
            <img class="slide_under_preview" src="assets/sofa_tan.png" onclick="currentSlide(1)" alt="preview of tan sofa under the slider">

            <img class="slide_under_preview" src="assets/sofa_tan_option_2.png" onclick="currentSlide(2)" alt="preview of tan sofa under the slider">

            <img class="slide_under_preview" src="assets/sofa_tan_option_3.png" onclick="currentSlide(3)" alt="preview of tan sofa under the slider">

            <img class="slide_under_preview" src="assets/sofa_tan_option_4.png" onclick="currentSlide(4)" alt="preview of tan sofa under the slider">
        </div> 

    </div>  

    <div class="email_banner">
        <div class="email_banner_inner">
            <h3> get 10% off, sign up today. </h3>
            <form class="email_banner_form" action="email_submit.php">
                <input placeholder="enter your email address" type="email" id="sign_up" name="sign_up"><br><br>
                <button class="email_banner_button" "><i class="fas fa-angle-right"></i></button>
            </form>
            
        </div>
    </div>

    <div class="footer">
        <div class="footer_inner">
            <img src="assets\q_commerce_logo.svg" alt="q commerce logo" class="footer_logo">
            <ul>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </ul>
        </div>
        <div>
            <p></p>
            <aside></aside>
            <aside></aside>
            <aside></aside>
        </div>
    </div>
    
    
  
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/countdown_timer.js"></script>
    <script src="js/main_nav.js"></script>
    <script src="js/favourite.js"></script>
</body>