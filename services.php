<?php
// Include header file
include('includes/header.php');

// Display some content for the service page
echo '<section class="showcase-area" id="showcase">
            <div class="showcase-container">
                <h1 class="main-title" id="home">OUR SERVICES</h1>
                <p>Scroll Down To See Services We Offer</p>
                
            </div>
        </section>';

echo '<section>
            <h2>Film Services</h2>
            <div class="card-container">
              <div class="card">
                <img src="images/Video_Production.png" alt="Video production">
                <h3>Video Production</h3>
                <p>We specialize in producing high-quality videos for businesses, events, and more. Let us help you tell your story through video.</p>
              </div>
              <div class="card">
                <img src="images/script.png" alt="Scriptwriting">
                <h3>Scriptwriting</h3>
                <p>Our experienced writers can craft compelling scripts for your video or film project. Whether you need a commercial, documentary, or narrative, we\'ve got you covered.</p>
              </div>
              <div class="card">
                <img src="images/editing.png" alt="Editing">
                <h3>Editing and Post-Production</h3>
                <p>We offer comprehensive editing and post-production services to bring your video or film project to life. From color grading to sound design, we\'ve got you covered.</p>
              </div>
            </div>
          </section>
          
          <section>
            <h2>Graphics Services</h2>
            <div class="card-container">
              <div class="card">
                <img src="images/graphic-design.png" alt="Graphic design">
                <h3>Graphic Design</h3>
                <p>Our talented designers can create stunning graphics for your business, event, or project. From logos to posters, we\'ve got you covered.</p>
              </div>
              <div class="card">
                <img src="images/animation.png" alt="Animation">
                <h3>Animation</h3>
                <p>We specialize in creating engaging animations that can help bring your brand or message to life. Let us help you stand out with creative animation.</p>
              </div>
              <div class="card">
                <img src="images/webdev.png" alt="Web design">
                <h3>Web Design and Development</h3>
                <p>We can create a beautiful and functional website for your business or project. From design to development, we\'ll work with you every step of the way.</p>
              </div>
            </div>
          </section>';

// Include footer file
include('includes/footer.php');
?>
