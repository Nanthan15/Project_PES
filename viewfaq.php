<!DOCTYPE html>
<html lang="en"
  xmlns:th="http://www.thymeleaf.org"
>
<?php
include("./connect.php"); // connection to db
error_reporting(0);




?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="css/nav.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
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



    <!-- additional -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

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
    <title>Document</title>
    <style>
        /*=============== GOOGLE FONTS ===============*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");

:root {
  --accent-color: #a876aa;
}

body {
  font-family: "Poppins", sans-serif;
  background-color: #eee;
  color: #444;
}

h1 {
  margin: 50px 0 30px;
  text-align: center;
  color: var(--accent-color);
}

.faq-container {
  max-width: 500px;
  
  margin: 0 auto;
  border-radius: 10px;
  background-color: #fff;
  overflow: hidden;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
}

.faq {
  box-sizing: border-box;
  background: transparent;
  padding: 30px;
  position: relative;
  overflow: hidden;
}

.faq:not(:first-child) {
  border-top: 1px solid #e6e6e6;
}

.faq-title {
  margin: 0 35px 0 0;
}

.faq-text {
  margin: 30px 0 0;
  display: none;
  line-height: 1.5rem;
}

.faq.active {
  background-color: #f8f8f8;
  box-shadow: inset 4px 0px 0px 0px var(--accent-color);
}

.faq.active .faq-title {
  color: var(--accent-color);
}

.faq.active .faq-text {
  display: block;
}

.faq-toggle {
  background-color: transparent;
  border: 1px solid #e6e6e6;
  color: inherit;
  border-radius: 50%;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 10px;
  padding-top: 3px;
  position: absolute;
  top: 30px;
  right: 30px;
  height: 30px;
  width: 30px;
  transition: 0.3s ease;
}

.faq-toggle:focus {
  outline: none;
}

.faq.active .faq-toggle {
  transform: rotate(180deg);
  background-color: var(--accent-color);
  border-color: var(--accent-color);
  color: #fff;
}

        .d-grid {
            margin: 20px;
            padding: 20px;
           
        }
         a{
            margin-bottom: 20px;
        }
        h1{
            display: flex;
            justify-content: center;
            margin-top: 80px;
        }
        .card{
            margin: 20px;
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');




.faq-container{
  margin:20px;
 
  
}

body{
  display: flex;
  justify-content: center;
}

 
    td{
        padding:10px;
    }
    input{
        height:40px;
        width:80%;
    }
    select{
        height:40px;
        width:80%;
    }
    table{
        font-size:18px;
        background-color:#0abde3;
        color:white;
        box-shadow:0px 0px 5px blue;
    }
    </style>


    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <title>Network</title>
</head>
<body>
   
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <span class="logo navLogo" id="ggg"><a href="#"><img src="./assests/logo1.png" style="height: 35px;margin-top: 20px;"></a></span>

            <div class="menu">
                <div class="logo-toggle" >
                    <span class="logo" style="margin-top:40px;"><a href="#">GRITUP</a></span>
                    <i class='bx bx-x siderbarClose'  ></i>
                </div>

                <ul class="nav-links" style="margin-bottom: 0px;">
                <li><a href="index.php" >Home</a></li>
                    <li><a href="index.php#services">Services</a></li>
                    <li><a href="check.html">Customize</a></li>
                    <li><a href="viewstudent.php">Network</a></li>
                    <li><a href="index.php#ab">About</a></li>
                    <li><a href="login.php">Admin</a></li>
               </ul>
            </div>

            <div class="darkLight-searchBox" >
                <div class="dark-light" style="margin-bottom: 0px;"><a href="Profile.html">
                    <i class="fa-solid fa-user" style="color: black;"></i></a>
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


    <br><br><br><br><br><br>
   
    <div>
    

    <?php
    
    $q = "select * from faq";
    $r = mysqli_query($db,$q);
    $i=1;
    echo "<h1>Frequently Asked Questions</h1>";
    while($d = mysqli_fetch_assoc($r)){

        echo "<section><div class='faq-container' >
        <div class='faq'>
          <h3 class='faq-title'>
          ".$i++.". " .$d['question']."
          </h3>
          <p class='faq-text'>".$d['answer']."</p>
          <button class='faq-toggle'>
            <i class='fas fa-angle-down'></i>
          </button>
        </div></div></section>";



       
        
    }
    ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>



</div>




<script>
    const buttons = document.querySelectorAll(".faq-toggle");

buttons.forEach((button) => {
  button.addEventListener("click", () =>
    button.parentElement.classList.toggle("active")
  );
});

</script>


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

</script>
    



    
</body>
</html>