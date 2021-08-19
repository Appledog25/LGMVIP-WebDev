<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/student.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <title>student</title>
</head>
<body>
  <h1>Result</h1>
    <?php
        include("init.php");

        if(!isset($_GET['class']))
            $class=null;
        else
            $class=$_GET['class'];
        $rn=$_GET['rn'];

        if (empty($class) or empty($rn) or preg_match("/[a-z]/i",$rn)) {
            if(empty($class))
                echo '<p class="error">Please select your class</p>';
            if(empty($rn))
                echo '<p class="error">Please enter your roll number</p>';
            if(preg_match("/[a-z]/i",$rn))
                echo '<p class="error">Please enter valid roll number</p>';
            exit();
        }

        $name_sql=mysqli_query($conn,"SELECT `name` FROM `students` WHERE `rno`='$rn' and `class_name`='$class'");
        while($row = mysqli_fetch_assoc($name_sql))
        {
        $name = $row['name'];
        }

        $result_sql=mysqli_query($conn,"SELECT `p1`, `p2`, `p3`, `p4`, `p5`, `marks`, `percentage` FROM `result` WHERE `rno`='$rn' and `class`='$class'");
        while($row = mysqli_fetch_assoc($result_sql))
        {
            $p1 = $row['p1'];
            $p2 = $row['p2'];
            $p3 = $row['p3'];
            $p4 = $row['p4'];
            $p5 = $row['p5'];
            $mark = $row['marks'];
            $percentage = $row['percentage'];
        }
        if(mysqli_num_rows($result_sql)==0){
            echo "no result";
            exit();
        }
    ?>

   


        <div class="main2">
            <table>
                <thead>
                  <tr>
                    <td> Sr No. </td>
                    <td colspan="10">Subjects </td>
                    <td rowspan="2"> Obtained Marks </td>
                  </tr>   
                </thead>
                <tbody>
                  <tr>
                    <td> 1 </td>
                    <td colspan="10">Paper 1 </td>
                    <td> <?php echo '<p>'.$p1.' / 100</p>';?> </td>
                  </tr>
                
                  <tr>
                    <td> 2 </td>
                    <td colspan="10">Paper 2 </td>
                    <td> <?php echo '<p>'.$p2.' / 100</p>';?></td>
                  </tr>
            
                  <tr>
                    <td> 3 </td>
                    <td colspan="10">Paper 3 </td>
                    <td> <?php echo '<p>'.$p3.' / 100</p>';?> </td>
                  </tr>
            
                  <tr>
                    <td> 4 </td>
                    <td colspan="10">Paper 4 </td>
                    <td> <?php echo '<p>'.$p4.' / 100</p>';?> </td>
                  </tr>
            
                  <tr>
                    <td> 5 </td>
                    <td colspan="10">Paper 5 </td>
                    <td> <?php echo '<p>'.$p5.' / 100</p>';?> </td>
                  </tr>
                </tbody>
            
                
                <tfoot>
                    
                    <tr>
                    <td>#</td>
                    <td colspan="10" class="footer">Total Marks Obtained</td>
                    <td colspan="2"> <?php echo $mark;?> / 500 </td>
                    </tr>
                    
                    <tr>
                    <td colspan="10" class="footer">Percentage</td>
                    <td colspan="2"><?php echo $percentage;?>% </td>
                    </tr>

                    <tr>
                        <td colspan="10" class="footer">Student's Name</td>
                        <td colspan="2"><?php echo $name;?> </td>
                        </tr>

                    <tr>
                        <td colspan="10" class="footer">Class</td>
                        <td colspan="2"><?php echo $class;?> </td>
                        </tr>
                
                        <tr>
                        <td colspan="10" class="footer">Roll</td>
                        <td colspan="2"><?php echo $rn;?> </td>
                        </tr>
                </tfoot>
              </table>

              <div class="row">
                  <div class="container">
                  <div class="button">
                    <button class="button" onclick="window.print()">Print Result</button>
        </div>
                  </div>
              </div>
        </div>
    </div>
</body>
</html>

<style>
  
  td {
    border: 1px solid #726E6D;
    padding: 7px;
  }
  
  thead{
    font-weight:bold;
    text-align:center;
    background: #625D5D;
    color:white;
  }

  .button {
  background-color: #253941;
  border: none;
  color: white;
  padding: 3px 6px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
  
  table {
    border-collapse: collapse;
  }
  
  .footer {
    text-align:right;
    font-weight:bold;
  }
  
  tbody >tr:nth-child(odd) {
    background: #D1D0CE;
  }
  h1{
    font-size:2.55rem ;
    padding-bottom: 0.4rem;
    font-family: 'Oxygen', sans-serif;
    text-align:center;
    font-weight:700;
    text-shadow:2px 2px 2px black;

  }
  
  </style>