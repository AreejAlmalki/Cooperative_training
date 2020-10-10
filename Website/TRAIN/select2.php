<!DOCTYPE html>
<html>
<head>


  <title></title>
  <style >
  th, td {
    padding: 20px;
    text-align: right;
    border-bottom: 3px solid #C0C0BE;
    color: #3C5E83;
}
.a {
    color: #0b7acb  ;
    font-size: 60; 
    
}
.b{
  color: #C58989;
}


  </style>
</head>
<body>
  <?php  
 $connect = mysqli_connect("localhost", "root", "", "training");  
 $output = '';  
 $sql1 = 'SET CHARACTER SET utf8';
 $sql = "SELECT id, Name
FROM student
Where Status='N'";
  $result1= mysqli_query($connect, $sql1);  
 $result = mysqli_query($connect, $sql); 

 $output .= '  
      <div align=right font-size=50   ">  
           <table class="table table-bordered">  
                <tr align=right>  
                     <th width="10%" ></th>  
                     <th width="40%" class="b" style="font-size: 23px; font-family: Calibri; font-color=#C58989;" >طلبات التدريب</th>  
                </tr>'; 
                

      while($row = mysqli_fetch_array($result)) 

      {  
       
         
 $output .= '
                <tr >

 <td  align=right > <a class="a"  href= "phpview.php ?name='.$row["id"].'">عرض</a></td >
 <td align="right" style="font-size: 20px; font-family: Calibri; data-Id="'.$row["id"].'" contenteditable>'.$row["Name"].'</td>  
              
                     
                     

                </tr> ';  
      }  
      
   
 
 $output .= '</table>  
      </div>';  
 echo $output;  

 ?>

</body>
</html>
