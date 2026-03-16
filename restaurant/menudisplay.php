<?php
<!DOCTYPE html>
<html>
<head>
 <title>DISPLAY MENU</title>
 <style>
  b{
    font-size: 20px;
    font-family: "Arial Black";
    padding: 2px;
    text-align: center;
}
  table 
  {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: "Arial Black";
   font-size: 15px;
   text-align: left;
   font-weight: bold;
   text-align: center;
   
  } 
  th 
  {
   background-color: maroon;
   color: white;
   font-family: "Arial Black";
  }
  h1{
    font-family: "Arial Black";
    font-size: 40px;
    border: 9px solid grey;
    border-radius: 17px;
    color: maroon;
  }
  td{
    padding: 12px;
    font-family: "Arial Black";

  }
  tr:nth-child(even) {background-color: #87CEFA; 
    border-radius: 14px;}
 </style>
</head>
<body style="background-color: lavender; font-family: 'Arial Black';">
  <h1><center><font style="border:9px solid grey; font-family: 'Arial Black';"> DISPLAY OF MENU TABLE </font></center></h1>
 <table>
 <tr>
  <th><br>ITEM_ID<br><br></th> 
  <th><br>ITEM_NAME<br><br></th>
     <th><br>ITEM_RATE<br><br></th>
     <th><br>CATEGORIES_ID<br><br></th>
  <br><br>
 </tr>
     
 <?php
$conn = mysqli_connect("localhost", "root", "", "restaurant");

  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 

  $sql = "SELECT ITEM_ID,ITEM_NAME,ITEM_RATE,CATEGORIES_ID FROM menu";
  $result = $conn->query($sql);
  if ($result->num_rows > 0)
   {
   
   while($row = $result->fetch_assoc())
    {
    echo "<tr><td>" . $row["ITEM_ID"]. "</td><td>" .$row["ITEM_NAME"]. "</td><td>" .$row["ITEM_RATE"]. "</td><td>" .$row["CATEGORIES_ID"]. "</td></tr>";
    }
    echo "</table>";
   
    }
else 
  { 
    echo "0 results"; 
  }
$conn->close();
?>
</table>
    <p style="font-family: Arial Black"><a href="menu.html"><font style="color:black">GO BACK</font></a></p>
</body>
</html>