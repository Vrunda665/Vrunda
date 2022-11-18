<html>
<body>
<table border = "2" align = "center" cellspacing ="5" cellpadding="2" >
<tr>
<th>Emp_no</th>
<th>Emp_name</th>
<th>Designation</th>
<th>Salary</th>
</tr>
<?php
     $con = mysqli_connect("Localhost" , "root" , "");
     
     $db = mysqli_select_db($con , "dwpd");
   
     $q = mysqli_query($con , "select * from employee");
      
    if($q)
     { 
         echo "<br>Connected.......";
     } 
    else
     {
          echo "<br>Not connected.....";
    }

while($r = mysqli_fetch_array($q))
{
    echo "<tr>";
    echo "<td>" . $r["emp_no"]."</td>";
    echo "<td>" . $r["emp_name"]."</td>";
    echo "<td>" . $r["des"]."</td>";
    echo "<td>" . $r["salary"]."</td>";
   echo "</tr>";
}
?>
</table>
</body>
</html>