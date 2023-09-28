<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Pirata+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link rel="stylesheet" href="style.css">
  <title>Anand Choudhary</title>
  <link rel="stylesheet" href="style.css">
  <style>
    html {
      scroll-behavior: smooth;
    }
    .logo--preloader{
  text-decoration: none;
  font-family: 'Pirata One', cursive;
  color: var(--color);
  font-size: 4rem;
  position: absolute;
  left: 50%;
  top: 35%;
  transform: translate(-50%, -50%);
}
.progressWrapper {
  position: absolute;
  width: 100%;
  height: 100vh;
  background-color: #000;
  overflow: hidden;
  z-index: 10;
}

progress {
  border: 5px solid white;
  border-radius: 30px;
  width: 70vw;
  height: 3rem;
  background-color: #fff;
  position: absolute;
  left: 50%;
  top: 55%;
  transform: translate(-50%, -50%);
}

progress::-webkit-progress-bar {
  background-color: #fff;
  border-radius: 30px;

}

progress::-webkit-progress-value {
  border-radius: 30px;
  background-color: black;

}

progress::-moz-progress-bar {
  border-radius: 30px;
  background-color: black;
}

  </style>
</head>

<body>
  <b:section id='Post1'/>
  <section class='progressWrapper'>
    <p class='logo--preloader'>Anand Choudhary</p>
  <progress max='100' value='10'>
</section> 
  <header>
    <nav class='profileHeader'>
      <section class='logoSection'>
        <a class='logo' href='https://www.anandchoudhary.in/'>Anand Choudhary</a>
      </section>
      <section class='navigation'>

        <a href="#profile"><span class='menu'>About me</span></a>
        <a href="#skillsPage"><span class='menu'>Skills</span></a>
        <a href="#projectsPage"><span class='menu'>Projects</span></a>
        <a href="#blogsPage"><span class='menu'>Blogs</span></a>
        <span class='menu'></span>
        <span class='navigationButton'>
          <div class='topLine' >
          <div class='centerLine' >
          <div class='bottomLine' >
        </span>
      </section>

    </nav>
  </header>
  <main>
    <section id='profile'>
      <section class='descriptionContainer'>
        <section class='description'>
          <span class='helloWord'>Hi</span><br />
          <span class='thereWord'>There</span><br /><br />
          <span class='descriptionSentence'>I'm a passionate web developer who has worked on both
            front-end and back-end
            development. I built over ten websites from the ground up, including two major, three minor, and
            three
            CSS-only sites, among others.&#160;</span>
          <br><br>
          <div class="resumeBtn" type="button">
            <span>Resume</span>
            <img class="resumeDownloadIcon" src="./Images/Download Icon.svg" alt="">
          </div>
        </section>
      </section>

      <section class='profilePictureContainer'>
        <div class='profilePictureFrame'>
          <div class='profilePictureImageContainer'>
            <img alt='Profile Image' class='profilePicture'
              src='./Images/profile.jpg' />
          </div>
        </div>
      </section>
    </section>

    <section id="skillsPage">
      <section class="skillsDataHolder">
        <div class="skillsHeading">
          <h1>Skills</h1>
          <img src="./Images/Arrow.svg" class="arrowAnimation" alt="arrow">
        </div>
        <div class="skillsList">
          <div class="skills"></div>
          <div class="skills"></div>
          <div class="skills">Html</div>
          <div class="skills">MySQL</div>
          <div class="skills">Css</div>
          <div class="skills">C Language</div>
          <div class="skills">JavaScript</div>
          <div class="skills">C++ Language</div>
          <div class="skills">Php Language</div>
          <div class="skills">Figma Software</div>
        </div>
      </section>
    </section>

    <section id="projectsPage">
      <div class="projectDetailcontainer">
        <div class="swiper--linear-effect-at-the-hand-left"></div>
        <div class="swiper--linear-effect-at-the-hand-right"></div>
        <div class="word--Project">
          <img style="transform: scaleX(-1);" src="./Images/decoration-line-for-project-word.svg" alt="">
          <p>Project</p>
          <img src="./Images/decoration-line-for-project-word.svg" alt="">

        </div>


        <div class='swiper mySwiper'>
          <div class='swiper-wrapper'>
            <div class='swiper-slide'>
              <a class='projects' href='/projects/Pure-Health/index.php' target='_blank'>
                <div class='projectDescription'>
                  <p>PureHealth ecommerce with razorpay</p>
                </div>
                <div id='projectViewButton'>
                  <p>view</p>
                  <svg fill='none' height='50' viewBox='0 0 63 50' width='63' xmlns='http://www.w3.org/2000/svg'> <path d='M0 26.5H60M60 26.5L38 1.5M60 26.5L38 48' stroke='white' stroke-width='3'/></svg>
                </div>
              </a>
            </div>

            <div class='swiper-slide'>
              <a class='projects' href='/projects/Acropolis-Notice-Board/index.php' target='_blank'>
                <div class='projectDescription'>
                  <p>Acroplis college notice board</p>
                </div>
                <div id='projectViewButton'>
                  <p>view</p>
                  <svg fill='none' height='50' viewBox='0 0 63 50' width='63' xmlns='http://www.w3.org/2000/svg'> <path d='M0 26.5H60M60 26.5L38 1.5M60 26.5L38 48' stroke='white' stroke-width='3'/></svg>
                </div>
              </a>
            </div>

            <div class='swiper-slide'>
              <a class='projects' target="_blank"  href='/projects/Voting System/index.html'>
                <div class='projectDescription'>
                  <p>Online voting system for college</p>
                </div>
                <div id='projectViewButton'>
                  <p>view</p>
                  <svg fill='none' height='50' viewBox='0 0 63 50' width='63' xmlns='http://www.w3.org/2000/svg'> <path d='M0 26.5H60M60 26.5L38 1.5M60 26.5L38 48' stroke='white' stroke-width='3'/></svg>
                </div>
              </a>
            </div>

            <div class='swiper-slide'>
              <a class='projects' href='/projects/common-english-word-project/index.php' target='_blank'>
                <div class='projectDescription'>
                  <p>Common Meaningful words Website</p>
                </div>
                <div id='projectViewButton'>
                  <p>view</p>
                  <svg fill='none' height='50' viewBox='0 0 63 50' width='63' xmlns='http://www.w3.org/2000/svg'> <path d='M0 26.5H60M60 26.5L38 1.5M60 26.5L38 48' stroke='white' stroke-width='3'/></svg>
                </div>
              </a>
            </div>

            <div class='swiper-slide'>
              <a class='projects' href='/projects/Sunset-at-the-beach-image-made-with-html-and-css-only/index.html' target='_blank'>
                <div class='projectDescription'>
                  <p>Css only art- <br/> Sunset On The Beach</p>
                </div>
                <div id='projectViewButton'>
                  <p>view</p>
                  <svg fill='none' height='50' viewBox='0 0 63 50' width='63' xmlns='http://www.w3.org/2000/svg'> <path d='M0 26.5H60M60 26.5L38 1.5M60 26.5L38 48' stroke='white' stroke-width='3'/></svg>
                </div>
              </a>
            </div>

            <div class='swiper-slide'>
              <a class='projects' href='/projects/Diwali-Special-diya-and-moving-bati-with-html-css-only/index.html' target='_blank'>
                <div class='projectDescription'>
                  <p>Css only art- <br/> Animated Diya bati</p>
                </div>
                <div id='projectViewButton'>
                  <p>view</p>
                  <svg fill='none' height='50' viewBox='0 0 63 50' width='63' xmlns='http://www.w3.org/2000/svg'> <path d='M0 26.5H60M60 26.5L38 1.5M60 26.5L38 48' stroke='white' stroke-width='3'/></svg>
                </div>
              </a>
            </div>

            <div class='swiper-slide'>
              <a class='projects' href='/projects/sunset-road-trip/index.html' target='_blank'>
                <div class='projectDescription'>
                  <p>css only art -<br/>Sunset road trip</p>
                </div>
                <div id='projectViewButton'>
                  <p>view</p>
                  <svg fill='none' height='50' viewBox='0 0 63 50' width='63' xmlns='http://www.w3.org/2000/svg'> <path d='M0 26.5H60M60 26.5L38 1.5M60 26.5L38 48' stroke='white' stroke-width='3'/></svg>
                </div>
              </a>
            </div>

            <div class='swiper-slide'>
              <a class='projects' href='/projects/Windows-10-Replica/index.html' target='_blank'>
                <div class='projectDescription'>
                  <p>Replica of windows 10 (Uncompleted)</p>
                </div>
                <div id='projectViewButton'>
                  <p>view</p>
                  <svg fill='none' height='50' viewBox='0 0 63 50' width='63' xmlns='http://www.w3.org/2000/svg'> <path d='M0 26.5H60M60 26.5L38 1.5M60 26.5L38 48' stroke='white' stroke-width='3'/></svg>
                </div>
              </a>
            </div>

           <!-- <div class='swiper-slide'>
              <a class='projects' href='# Project URL'>
                <div class='projectDescription'>
                  <p># Project Name</p>
                </div>
                <div id='projectViewButton'>
                  <p>view</p>
                  <svg fill='none' height='50' viewBox='0 0 63 50' width='63' xmlns='http://www.w3.org/2000/svg'> <path d='M0 26.5H60M60 26.5L38 1.5M60 26.5L38 48' stroke='white' stroke-width='3'/></svg>
                </div>
              </a>
            </div>  -->


          </div>
		 </div>

    </section>

    <section id="blogsPage">
      <section class="blogsDataHolder">
        <div class="blogsContainter">
          <div class="word--blog">
            <p>Blogs</p>
          </div>
          <div class="date">September 2023</div>
          <div class="blogsListContainer">

            <a href="https://github.com/Its-anand/Pure-Health" class="blogs">
              <div class="blogsDescription">
                <p>An informal introduction</p>
              </div>
              <div id="blogViewButton">
                <p>Read</p>
              </div>
            </a>
            <!--

            <a href="https://github.com/Its-anand/Pure-Health" class="blogs">
              <div class="blogsDescription">
                <p>Sunset On The Beach css only art</p>
              </div>
              <div id="blogViewButton">
                <p>Read</p>
              </div>
            </a>
          </div>
        </div>

        <div class="blogsContainter">

          <div class="date">March 2022</div>
          <div class="blogsListContainer">

            <a href="https://github.com/Its-anand/Pure-Health" class="blogs">
              <div class="blogsDescription">
                <p>Sunset On The Beach css only art</p>
              </div>
              <div id="blogViewButton">
                <p>Read</p>
              </div>
            </a>

            <a href="https://github.com/Its-anand/Pure-Health" class="blogs">
              <div class="blogsDescription">
                <p>Sunset On The Beach css only art</p>
              </div>
              <div id="blogViewButton">
                <p>Read</p>
              </div>
            </a>

            <a href="https://github.com/Its-anand/Pure-Health" class="blogs">
              <div class="blogsDescription">
                <p>Sunset On The Beach css only art</p>
              </div>
              <div id="blogViewButton">
                <p>Read</p>
              </div>
            </a>
          </div>
        </div>

        <div class="blogsContainter">

          <div class="date">March 2022</div>
          <div class="blogsListContainer">

            <a href="https://github.com/Its-anand/Pure-Health" class="blogs">
              <div class="blogsDescription">
                <p>Sunset On The Beach css only art</p>
              </div>
              <div id="blogViewButton">
                <p>Read</p>
              </div>
            </a>
            <a href="https://github.com/Its-anand/Pure-Health" class="blogs">
              <div class="blogsDescription">
                <p>Sunset On The Beach css only art</p>
              </div>
              <div id="blogViewButton">
                <p>Read</p>
              </div>
            </a>
          -->
          </div>
        </div>
      </section>
    </section>

    <section class="certificates--page">
      <div id="cancelButton" onclick="hideCertificatePage()">
        <img src="./Images/cancel button.svg" alt="cancel button">
      </div>
      <div class="certificates--container">

        <div class="word--certificates-container">
          <img src="./Images/certificate decoration line.svg" class="certificate--word-decoration-left-line " alt="">
          <div class="word--certificates"><p>Certificates</p></div>
          <img src="./Images/certificate decoration line.svg" class="certificate--word-decoration-right-line" alt="">
        </div>

        <div class="certificate--image-container">
          <img src="./Images/Problem-solving-through-c-programming.webp" class="certificate--image" alt="">
        </div>

      </div>
    </section>

    <section class="contact--page">

      <div id="contactMe--cancelButton" onclick="hideContactMePage()">
        <img src="./Images/cancel button.svg" alt="cancel button">
      </div>
      <div class="contact--grid-property-container">
        <div class="contactme-contactlinks contactMe--form-container">
          <form class="contactMe--form" method="POST" action="contactForm.php">
          <input type="email" placeholder="Email" id="contactUs-email" name="email" >
          <input type="text" placeholder="Subject" id="contactUs-subject" name="subject" >
          <textarea name="Message" placeholder="Message" id="contactUs-message" name="msg" cols="30" rows="10"></textarea>
          <input type="submit" id="contactUs-submit-button" name="Submit">
          </form>
          <?php 
      $msg= "";
      if(isset($_GET['submit']))
      {
          $msg="Please click submit button";
          echo ( "<div style=' border: 3px solid #fff; border-radius: 35px; padding: 0px 6rem; font-family: sans-serif; background-color: #f53030;'><p>".$msg."</p></div>");
          ;
      }
      else if(isset($_GET['empty'])){
        $msg="Please fill all the option";
        echo ( "<div style=' border: 3px solid #fff; border-radius: 35px; padding: 0px 6rem; font-family: sans-serif; background-color: #f53030;><p>".$msg."</p></div>");
        ;
      }
      else if(isset($_GET['success']))
      {
          $msg="message is sent successfully.";
          echo ( "<div style=' border: 3px solid #fff; border-radius: 35px; padding: 0px 6rem; font-family: sans-serif; background-color: #04aa49;><p>".$msg."</p></div>");
          ;
      }
      ?>

        </div>
        <div class="contactme-contactlinks contactlinks">
          <div class="fancy--border">
          </div>
          <div class="contactMe--word-style">
            <div class="styling-word-contact">
              <p>Contact</p>
            </div>
            <div class="styling-word-me">
              <img src="./Images/contactme-arrow.svg" width="200px" alt="">
              <p>Me</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
  <footer>
    <section class='profileFooter'>
      <div class='socialMedia'>
        <a class='socialMediaLogoContainer' target="_blank" title="My Linkedin Profile" href="https://www.linkedin.com/in/anand-choudhary-4907251b6/">
          <img id='linkedin' src="./Images/linkedin.svg" alt="Linkedin svg" width="512.000000pt" height="512000000pt" />
        </a>
        <a class='socialMediaLogoContainer' target="_blank" title="My Github Profile" href="https://github.com/Its-anand">
          <img id='github' src="./Images/github.svg" alt="Github Svg" />
        </a>
        <a class='socialMediaLogoContainer' title="My certificates" onclick="showCertificate()">
          <img id='certificate' src="./Images/certificate.svg" alt="Certificate svg" />
        </a>
        <a class='socialMediaLogoContainer' title="Contact Me" onclick="contactButton()">
          <img id='contactMe' src="./Images/email.svg" alt="">
        </a>
      </div>
    </section>
  </footer>
  <script>
    let loader = document.querySelector(".progressWrapper");
    let i = 10;
    let interval = setInterval(() => {
      document.querySelector("progress").setAttribute("value", `${i}`);

      if (document.readyState ==
        "loading") //readyState is webapi.  It has three state. Loading: When webpage is loading.
      {
        if (i >= 100) {
          loader.style.display = "none";

          clearInterval(interval)
        } else {
          i += 0.02;
        }
      } else if (document.readyState ==
        "interactive") // It has three state. interactive: When webpage is not fully load but interaction is possible.
      {
        if (i >= 100) {
          loader.style.display = "none";

          clearInterval(interval)

        } else {
          i += 0.1;
        }
      } else if (document.readyState == "complete") // It has three state. complete: When webpage is fully loaded
      {
        if (i >= 100) {
          loader.style.display = "none";
          document.body.style.overflow = "hidden" // To enable scrollbar again
          clearInterval(interval)
        } else {
          i += 0.9;
        }
      }
    }, 10)
  </script> 
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      slideShadows: false,
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 10,
        stretch: 0,
        depth: 100,
        modifier: 1,
      },
      spaceBetween: 100,
      autoplay: {
        delay: 2000,
      }
    });

    //For Certificate page -- show/hide
    function showCertificate() {

      let certificatePagePosition = document.querySelector(".certificates--page").style.left = '0px';
    }

    function hideCertificatePage() {
      let certificatePagePosition = document.querySelector(".certificates--page").style.left = '-100vw';
    }

    //For Contact page -- show/hide
    function contactButton() {
      let contactPagePosition = document.querySelector('.contact--page').style.left = '0px'
    }

    function hideContactMePage() {
      let contactPagePosition = document.querySelector('.contact--page').style.left = '-100vw';
    }
  </script>
</body>

</html>