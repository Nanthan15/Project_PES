<!DOCTYPE html>
<html lang="en"
  xmlns:th="http://www.thymeleaf.org"
>
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <!-- Google Font -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <!-- Google Font -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <title>Document</title>
</head>
<body>
  <div id="preloader">
    <img src="./assests/new.gif"  alt="Loading..." style="width: 1000px; padding: 0px; margin: 0px;"/><br>
    
  </div>

 
  
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <span class="logo navLogo" id="ggg"><a href="#"><img src="./assests/logo1.png" style="height: 35px;margin-top: 10px;"></a></span>

            <div class="menu">
                <div class="logo-toggle" >
                    <span class="logo" style="margin-top:40px;"><a href="#">GRITUP</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                    <li><a href="index.php" >Home</a></li>
                    <li><a href="index.php#services">Services</a></li>
                    <li><a href="check.html">Customize</a></li>
                    <li><a href="viewstudent.php">Network</a></li>
                    <li><a href="#ab">About</a></li>
                    <li><a href="login.php">Admin</a></li>
                </ul>
            </div>

            <div class="darkLight-searchBox">
                <div class="dark-light" style="margin-bottom: 20px;"><a href="signin.php">
                    <i class="fa-solid fa-user"></i></a>
                </div>

                <div class="searchBox">
                   <div class="searchToggle">
                    
                   </div>

                    <div class="search-field">
                        
                    </div>
                </div>
            </div>
        </div>
    </nav>
<section class="home" id="home" style="
    background-image: url('./assests/home1.png');">



      <section class="heading1">
        <div class="one">
            <h1 class="ml9">
              <span class="text-wrapper">
                

                <span class="letters" style="font-size: 35px; ">Reach Your Career Goals </span><br>
                <span class="letterss" style="font-size: 35px; margin-top: 1px;" id="ey" >With GRITUP</span>
              </span>
            </h1>
            
          
            
     
        <p class="subhead">We help Diploma students to plan and manage thier career goals. With a wide range of personalized resources including Jobs, Internships</p>
        
        <br>
        <br>
        <a href="#services" class="button is-primary">
          Get Started
                  </a>
                </div>
              </div>
        </div>  
        
           
       
        

              
      </section>
      
        
          
        <section class="animation">
            <img src="./assests/ani.gif" alt="ani" class="ani">
        </section>
    </section>
    <section class="next">
        <div class="logoo">
            <img src="./assests/design-3.png" alt="" >
        </div>
        <div class="logoo1">
          <img src="./assests/design-2.png" alt="" style="height: 200px;">
      </div>
        <div class="video">
          <video autoplay loop>
          <source src="./assests/video.mp4">
          </video>
        </div>
    </section>
    <section class="services" id="services">
      <div class="row" id="row1">
        <h1 class="section-heading"><b>Our Services</b></h1>
      </div>
      <div class="row" id="row2">
        <div class="column">
          <a href="viewqp.php">
          <div class="card" id="card">
            <div class="icon-wrapper">
              <i class="fa-sharp fa-solid fa-newspaper"></i>
            </div>
            <h3>Old QP</h3>
            <p>
              
            </p>
          </div></a>
        </div>
        <div class="column">
          <a href="viewnotes.php">
          <div class="card" id="card">
            <div class="icon-wrapper">
             <i class="fa-solid fa-laptop"></i>
            </div>
            <h3>E-Notes</h3>
            <p>
            
            </p>
          </div></a>
        </div>
        <div class="column">
          <a href="elearn.php">
          <div class="card" id="card">
            <div class="icon-wrapper">
              <i class="fa-solid fa-video"></i>
            </div>
            <h3>E-learning</h3>
            <p>
             
            </p>
          </div></a>
        </div>
        <div class="column">
          <a href="viewdcet.php">
          <div class="card" id="card">
            <div class="icon-wrapper">
              <i class="fas fa-pen"></i>
            </div>
            <h3>DCET</h3>
            <p>
              
            </p>
          </div></a>
        </div>
        <div class="column">
          <a href="viewbook.php">
          <div class="card" id="card">
            <div class="icon-wrapper">
              <i class="fa-solid fa-book"></i>
            </div>
            <h3>Text Books</h3>
            <p>
              
            </p>
          </div></a>
        </div>
         <div class="column">
          <a href="viewfaq.php">
          <div class="card" id="card">
            <div class="icon-wrapper">
              <i class="fa-solid fa-question"></i>
            </div>
            <h3>FAQ's</h3>
            <p>
              
            </p>
          </div></a>
        </div>
         <div class="column">
         <a href="viewstudent.php">
          <div class="card" id="card">
            <div class="icon-wrapper">
              <i class="fa-solid fa-globe"></i>
            </div>
            <h3>Network</h3>
            <p>
              
            </p>
          </div></a>
        </div>
      
        <div class="column">
        <a href="viewjob.php">
                
          <div class="card" id="card">
            <div class="icon-wrapper">
              <i class="fa-solid fa-calendar"></i>
            </div>
            <h3>Jobs and Intership</h3>
            <p>
             
            </p>
          </div></a>
        </div>
        
      </div>
    </section>
    
    <section class="per" id="cus">
      <div class="i">
        <img src="./assests/cus.png" style="width: 500px;">
      </div>
      <div class="do">
         
        <ul class="c">
          <h1 class="doo"><b>Customised Resources</b></h1>
          <br>
          <li>Get Customized Resource based on your Priority. <br>
            </li>
            <br>
            <li>Customized resources offer personalization and efficiency <br>
              </li>
              <br>
        <li>Get all the resource in one single portal. <br>
                ,<br>
                 </li>
                 <br>
                 <a href="./check.html"><button class="button is-primary is-rounded">Get Started</button></a>
        </ul>

        
      </div>


    </section>
    
    
      <section class="updates" id="up">
        <div class="uphead">
          <h1><b>News & Latest Updates</b></h1>
        </div>
        <div class="row">
          
          <div class="column">
            <a href="./viewjob.php"><div class="card" style="height: 20px;" id="caa1">
              <i href="https://www.flaticon.com/free-icons/graduation" title="graduation icons"></i>
              <h3></h3>
              <p>Jobs and Intership</p>
              
            </div></a>
          </div>
          <div class="column" >
            <div class="card" style="height: 20px;">
             
              <h3>Scholoships</h3>
              <p></p>
              
            </div>
          </div>
          <div class="column">
          <a href="./viewdcet.php"><div class="card" style="height: 20px;">
             
              <h3>DCET</h3>
              <p></p>
              
            </div></a>
          </div>
          
          <div class="column">
            <div class="card" style="height: 20px;">
              
              <h3>Diploma</h3>
              <p></p>
              
            </div>
          </div>
        </div>
      </section>
      
      <footer id="ab">
        <div class="content" >
          <div class="left box" id="goal">
            <div class="upper">
              <div class="topic">About us</div>
              <p>We help Diploma students to plan and manage thier career goals. With a wide range of personalized resources including Jobs, Internships</p>
            </div>
            <div class="lower">
              <div class="topic">Contact us</div>
              <div class="phone">
                <a href="#"><i class="fas fa-phone-volume"></i>+91 8660101432</a>
              </div>
              <div class="email">
                <a href="#"><i class="fas fa-envelope"></i>gritupweb@gmail.com</a>
              </div>
            </div>
          </div>
          <div class="middle box" id="goal2">
            <div class="topic">Our Services</div>
            <div><a href="#">Diploma</a></div>
            <div><a href="#">DCET</a></div>
            <div><a href="#">E-Notes</a></div>
            <div><a href="#">E-Learning</a></div>
            <div><a href="#">Network</a></div>
            <div><a href="#">FAQ's</a></div>
          </div>
          <div class="right box" id="goal3">
            <div class="topic">Mail us</div>
            <form action="#">
              <input type="text" placeholder="Enter email address">
              <input type="submit" name="" value="Send">
              <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </form>
          </div>
        </div>
        <div class="bottom" id="last">
          <p>Copyright © 2020 <a href="#" id="l">GRITUP</a> All rights reserved</p>
        </div>
      </footer>
     
   
    
</body>
<script href="JS/app.js"></script>
<script>

  

const body = document.querySelector("body"),
      nav = document.querySelector("nav"),
      modeToggle = document.querySelector(".dark-light"),
      searchToggle = document.querySelector(".searchToggle"),
      sidebarOpen = document.querySelector(".sidebarOpen"),
      siderbarClose = document.querySelector(".siderbarClose");

      let getMode = localStorage.getItem("mode");
          if(getMode && getMode === "dark-mode"){
            body.classList.add("dark");
          }

// js code to toggle dark and light mode
      modeToggle.addEventListener("click" , () =>{
        modeToggle.classList.toggle("active");
        body.classList.toggle("dark");

        // js code to keep user selected mode even page refresh or file reopen
        if(!body.classList.contains("dark")){
            localStorage.setItem("mode" , "light-mode");
        }else{
            localStorage.setItem("mode" , "dark-mode");
        }
      });

// js code to toggle search box
        searchToggle.addEventListener("click" , () =>{
        searchToggle.classList.toggle("active");
      });
 
      
//   js code to toggle sidebar
sidebarOpen.addEventListener("click" , () =>{
    nav.classList.add("active");
});

body.addEventListener("click" , e =>{
    let clickedElm = e.target;

    if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
        nav.classList.remove("active");
    }
});

var textWrapper = document.querySelector('.ml9 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml9 .letter',
    scale: [0, 1],
    duration: 1500,
    elasticity: 600,
    delay: (el, i) => 45 * (i+1)
  }).add({
    targets: '.ml9',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000000
  });
  var textWrapper = document.querySelector('.ml9 .letterss');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml9 .letter',
    scale: [0, 1],
    duration: 1500,
    elasticity: 600,
    delay: (el, i) => 45 * (i+1)
  }).add({
    targets: '.ml9',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000000
  });
  
    document.addEventListener("DOMContentLoaded", function() {
      var preloader = document.getElementById("preloader");

      setTimeout(function() {
        preloader.style.display = "none";
      }, 1500); // Display preloader for 2 seconds
    });
    document.addEventListener("DOMContentLoaded", function() {
      var preloade = document.getElementById("preloade");

      setTimeout(function() {
        preloader.style.display = "none";
      }, 1000); // Display preloader for 2 seconds
    });



</script>
</html>