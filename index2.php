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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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


<style>
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
    html,body{
        background-color:#2193b0
    }
    </style>


    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <title>Network</title>
</head>
<body>
   
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <span class="logo navLogo" id="ggg"><a href="#"><img src="./assests/logo1.png" style="height: 35px;margin-top: 0px;"></a></span>

            <div class="menu">
                <div class="logo-toggle" >
                    <span class="logo" style="margin-top:40px;"><a href="#">GRITUP</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                <li><a href="index2.php" style="text-transform: uppercase;"><b>View Message</b></a></li>
                    <li><a href="index.php"style="text-transform: uppercase;"><b>Logout</b></a></li>
               </ul>
            </div>

            <div class="darkLight-searchBox">
                <div class="dark-light" style="margin-bottom: 20px;"><a href="signin.php">
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
   
    
    <?php
    session_start();
    $sn = $_SESSION['user'];
    echo "<table border='2' cellspacing='10' cellpadding='10' width='80%' align='center' >
    <tr><td>S.No</td><td>User</td><td>User Query</td><td>Response</td><td>Reply</td></tr>";
    
    $q = "select * from chat where adminemail='$sn'";
    $r = mysqli_query($db,$q);
    $i=1;
    while($d = mysqli_fetch_assoc($r)){
        $id = $d['id'];
        $em = $d['useremail'];
      echo "<tr>";
      echo "<td>".$i++."</td>";
      echo "<td>".$d['useremail']."</td>";
      echo "<td>".$d['question']."</td>";
      echo "<td>".$d['answer']."</td>";
      echo "<td><a href='reply.php?id=$id&email=$em'>Reply</td>";
      echo "</tr>";
      
    }

    
    ?>

    



    



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