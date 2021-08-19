<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type='text/css' href="css/manage.css">
    <title>Managestudent</title>
    <style>
        .main{
            border-radius: 10px;
            border-width: 5px;
            border-style: solid;
            padding: 20px;
            background-color:black;
            color:#fff;
            
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
        <span class="heading" style="color:#fff; text-shadow:10px 10px 10px #fff">Student's Section</span>
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
            include('init.php');
            include('session.php');

            $sql = "SELECT `name`, `rno`, `class_name` FROM `students`";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
               echo "<table>
               <caption><a style='font-size:2rem; text-shadow:5px 5px 5px #fff;'> Manage Students</a></caption>
                <tr>
                <th>Sr no.</th>
                <th>NAME</th>
                <th>ROLL</th>
                <th>CLASS</th>
                <th>ACTION</th>
                </tr>";
                $cnt=1;
                while($row = mysqli_fetch_array($result))
                  {
                    echo "<tr>";
                    echo"<td>$cnt</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['rno'] . "</td>";
                    echo "<td>" . $row['class_name'] . "</td>";
                    echo "<td><a href='delete-student.php?rno=".$row['rno']."' style='color:#D5D3D9; text-decoration:none;'><span class='fa fa-trash'></span> Remove</a></td>";
                    echo "</tr>";
                 $cnt++; }

                echo "</table>";
            } else {
                echo "0 Students";
            }
        ?>
    </div>

  
</body>
</html>
