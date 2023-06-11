<?php
// Include header file
include('includes/header.php');

// Display some content for the index page



echo '<section class="showcase-area" id="showcase">
            <div class="showcase-container">
                <h1 class="main-title" id="home">NGITI FILMS AND GRAPHICS</h1>
                <p>Your Desire, Our Concern</p>
                <a href="services.php" class="btn btn-primary">Services</a>
            </div>
        </section>';

        echo '<div> <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg> </div>';

echo '<div class="picture-frame">
        <img src="images/ngiti.jpg" alt="Picture">
        <div class="caption-img">CEO Geoffrey Ngiti</div>
      </div>';

// Include footer file
include('includes/footer.php');
?>
