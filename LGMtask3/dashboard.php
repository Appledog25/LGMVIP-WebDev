<?php
    include("init.php");
    
    $no_of_classes=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `class`"));
    $no_of_students=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `students`"));
    $no_of_result=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `result`"));
?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="normalize.css">
    <title>Dashboard</title>
    <style>
        .main{
            border-radius: 10px;
            border-width: 5px;
            border-style: solid;
            padding: 20px;
            margin: 7% 20% 0 20%;
            background-color:black;
        }
        .p1{
            color:#fff;
        }
        .toggle{
            color:#fff;
        }
        .dropbtn{
            color:#fff;
        }
        .bg{
            background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url("./images/bg.jpeg");
            background-color:black;
        }
        .content :hover{
         background-color:black;
        
            border: 2px solid #fff;
            border-radius: 2.5rem;
           
            
        }
        
        
        
    </style>
</head>
<body class="bg">
        
    <div class="title">
        <a href="dashboard.php"><img src="./images/logo1.png" alt="" class="logo"></a>
        <span class="heading" style="color:#fff; text-shadow:10px 10px 10px #fff"><i class="fa fa-graduation-cap" aria-hidden="true" style="color:black; text-shadow:5px 5px 5px #fff;"></i> Dashboard <i class="fa fa-graduation-cap" aria-hidden="true" style="color:black; text-shadow:5px 5px 5px #fff;"></i></span>
        <a href="logout.php" style="color: white; text-decoration:none;"><span class="fa fa-sign-out"></span> Logout</a>
    </div>

    <div class="nav">
        <ul class="content">
            <li>
                <a href="dashboard.php" class="toggle">Dashboard</a>
            </li>
            <li class="dropdown" onclick="toggleDisplay('1')">
                <a href="" class="dropbtn" >Class &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="1">
                    <a href="add_classes.php" style="color:#fff; background-color:black;">Add Class</a>
                    <a href="manage_classes.php" style="color:#fff; background-color:black;">Manage Class</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="#" class="dropbtn">Students &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="2">
                    <a href="add_students.php" style="color:#fff; background-color:black;">Add Students</a>
                    <a href="manage_students.php" style="color:#fff; background-color:black;">Manage Students</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn">Results &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
                    <a href="add_results.php" style="color:#fff; background-color:black;">Add Results</a>
                    <a href="manage_results.php" style="color:#fff; background-color:black;">Manage Results</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="main">
        <?php
            echo '<p class="p1">Available Classes:'.$no_of_classes[0].'</p>';
            echo '<p class="p1">Registered Students:'.$no_of_students[0].'</p>';
            echo '<p class="p1">Results Generated:'.$no_of_result[0].'</p>';
        ?>
    </div>

    
</body>
</html>

<?php
   include('session.php');
?>