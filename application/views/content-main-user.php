
  <section class="big-picture">
    <div class="row g-0">
      <div class="col">
        <div class="college">
          <h1 style="margin-top:1.2rem;">Welcome Back!</h1>
          <h1>Matric Number: <?php echo ucfirst($studentNum)?></h1>
          <p style="color:white !important; text-align:center; margin-top:1.5rem;">use the navigation bar to navigate through different user functions</p>

        </div>
      </div>
    </div>
  </section>

  <!-- FCI Summary -->
  <section class="faculty_summary" id="about">
    <div class="row">
      <div class="col-6">
        <h2>Learn about us <br>at a glance</h2>
      </div>
      <div class="col-6">
        <p>Those who are part of the FCI community join nearly a century of students and scholars in the pursuit of truth, knowledge, and a better world.</p><a href="https://en.wikipedia.org/wiki/Universiti_Malaysia_Sabah" target="_blank">Learn more
          about our history&nbsp;<i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
    <div class="row breakpoint">
      <p></p>
    </div>

    <div class="row small-padding">
      <div class="col-4">
        <h2>4,412</h2>
        <h5>FCI students in the 2021/2022 academic year</h5>
      </div>
      <div class="col-4">
        <h2>1999</h2>
        <h5>The year FCI was founded</h5>
      </div>
      <div class="col-4">
        <h2>200,000+</h2>
        <h5>alumni worldwide</h5>
      </div>
    </div>
  </section>

  <!-- Newsletter -->
  <section class="newsletter text-light p-5">
    <div class="container">
      <div class="d-md-flex justify-content-between align-items-center">
        <h3 class="mb-3 mb-md-0">Receive Our Latest Updates</h3>
        <div class="input-group news-input">
          <input type="text" class="form-control" placeholder="Enter Email" />
          <button class="btn btn-dark btn-lg" type="button" id="button-addon2">Submit</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Card section -->
  <section class="card-sec" id="news">
    <div class="row">
      <div class="col">
        <div>
          <h2>Start exploring</h2>
          <p>At FCI, we strive to create a community where everyone can thrive</p>
        </div>
      </div>
    </div>
    <div class="row-flex">
      <div class="card mb-3">
        <img src="<?=base_url()?>assets/img/vaccine.jpg" alt="Card image cap">
        <div class="card-body">
          <h5>COVID-19 Response</h5>
          <p>FCI continues to fight against COVID-19 through a few of our iniitiatives<br> </p>
          <a href="#" class="btn btn-primary">Learn more</a>
        </div>
      </div>

      <div class="card mb-3">
        <img src="<?=base_url()?>assets/img/mentor.jpg" alt="Card image cap">
        <div class="card-body">
          <h5>Mentor-Mentee Program</h5>
          <p>Registration for Mentorship Program 2022 will be open until 20/5/2022</p>
          <a href="#" class="btn btn-primary">Learn more</a>
        </div>
      </div>

      <div class="card mb-3">
        <img src="<?=base_url()?>assets/img/cybersecu.jpg" alt="Card image cap">
        <div class="card-body">
          <h5>Cybersecurity Talk</h5>
          <p>A Cybersecurity talk by be held on 4/5/22, at 8pm</p>
          <a href="#" class="btn btn-primary">Learn more</a>
        </div>
      </div>
    </div>

  </section>

  <section class="accordion p-5" id="programs">
    <div class="container">
      <h2 class="accordion-title">Programs We Offer</h2>
      <div class="accordion accordion-flush" id="programs">
        <!-- Item 1 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#program-one">
              Bachelor Of Computer Science with Honours (Software Engineering)
            </button>
          </h2>
          <div id="program-one" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#programs">
            <div class="accordion-body">The programme aims to produce graduates with knowledge and skills in computer science and software engineering. Students will be exposed to and trained in the fundamentals of computer systems as well as the
              advancement of technologies in the field of computer science.

            </div>
            <a href="#" class="btn btn-primary">Learn more</a>
          </div>
        </div>
        <!-- Item 2 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#program-two">
              Bachelor Of Computer Science with Honours (Network Engineering)
            </button>
          </h2>
          <div id="program-two" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#programs">
            <div class="accordion-body">The programme aims to produce graduates with knowledge and skills in computer science and software engineering. Students will be exposed to and trained in the fundamentals of computer systems as well as the
              advancement of technologies in the field of computer science.
            </div>
            <a href="#" class="btn btn-primary">Learn more</a>
          </div>
        </div>
        <!-- Item 3 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#program-three">
              Bachelor Of Computer Science with Honours (Data Science)
            </button>
          </h2>
          <div id="program-three" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#programs">
            <div class="accordion-body">The programme aims to produce graduates with knowledge and skills in computer science and software engineering. Students will be exposed to and trained in the fundamentals of computer systems as well as the
              advancement of technologies in the field of computer science.
            </div>
            <a href="#" class="btn btn-primary">Learn more</a>
          </div>
        </div>

        <!-- item 4 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#program-four">
              Bachelor Of Computer Science with Honours (Multimedia Technology)
            </button>
          </h2>
          <div id="program-four" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#programs">
            <div class="accordion-body">The programme aims to produce graduates with knowledge and skills in computer science and software engineering. Students will be exposed to and trained in the fundamentals of computer systems as well as the
              advancement of technologies in the field of computer science.
            </div>
            <a href="#" class="btn btn-primary">Learn more</a>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#program-five">
              Bachelor Of Computer Science with Honours (Business Computing)
            </button>
          </h2>
          <div id="program-five" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#programs">
            <div class="accordion-body">The programme aims to produce graduates with knowledge and skills in computer science and software engineering. Students will be exposed to and trained in the fundamentals of computer systems as well as the
              advancement of technologies in the field of computer science.
            </div>
            <a href="#" class="btn btn-primary">Learn more</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="campus" id="campus">
    <div class="row row-campus">
      <h1>Our Campus</h1>
      <div class="col-6 campus-pictures">
        <h6><i class="fas fa-camera"></i> Snapshots</h6>
        <div id="campus-pics" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#campus-pics" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#campus-pics" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#campus-pics" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?=base_url()?>assets/img/fki.jpg" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?=base_url()?>assets/img/fki-3.jpg" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?=base_url()?>assets/img/haina.jpg" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#campus-pics" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#campus-pics" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-6">
        <h6><i class="fas fa-map-marker-alt"></i> Map</h6>
        <div id="map">

        </div>
      </div>
    </div>
  </section>

  <!-- back-to-top button -->
  <button onclick="topFunction()" id="scrollTopBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>

</body>
