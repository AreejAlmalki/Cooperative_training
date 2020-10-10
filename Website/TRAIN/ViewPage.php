<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            .tab{
                color: #CA8B8B;
                font-size: 24px;

            }
            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            font-size: 20px;
            width: 50%;
            margin-left:600px
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: right;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
            .button {
    background-color: #003366;
    border: none;
    color: white;
    padding:  14px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    cursor: pointer;
     margin-left: 4px;


}
          .button2 {
    background-color: #003366;
    border: none;
    color: white;
    padding:  14px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    cursor: pointer;
         margin-left: 600px;

}
    .button1:hover {
    background-color:whitesmoke;
        color: black;}
        
        
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
        <link rel="stylesheet" type="text/css" href="Style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>عرض المعلومات  </title>
          <link rel="shortcut icon" href="images/logo.png">
    </head>
    <body>
        <script type="text/javascript" src="cordova.js"></script>

          <div class="header">
          </div>

        <ul >
  <li style=" font-family: Calibri;"><a  class="tab" href="rejected.html" > <b> الطلبات المرفوضة</b> </a> </li>

 <li style=" font-family: Calibri;"> <a class="tab" href="accepted.html"  > <b>الطلبات المقبولة </b></a> <li>

  <li style=" color=#3C5E83; font-family: Calibri;"><a  class="tab"  href="index.html" ><b> الطلبات الحالية</b> </a> </li>

      </ul>


        <!-- All you need is this one div!-->
        <div class="simple-ss" id="simple-ss"></div>

          <div class="column middle" style="text-align: right; color: #3C5E83;">
          <strong><p dir="rtl" lang="ar" style="font-size:35px; color:  #CA8B8B ; margin-right:15px; ">بيانات المتقدمة :</p></strong>
<?php
$id = $_GET['name'];
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "training";
$conn = new mysqli($host, $user, $pass, $dbname)or ($conn->error);
mysqli_query($conn,"set character_set_server 'utf8'");
mysqli_query($conn,"SET NAMES 'utf8'");
$sql = "SELECT * FROM student WHERE id=".$id." ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
    echo '<table>
  <tr>
    <td>'.$row["Name"].'</td>
    <td style="color: #9d4848"> اسم الطالبة</td>
  </tr>
  <tr>
    <td>'.$row["id"].'</td>
    <td style="color: #9d4848"> الهوية الوطنية </td>
  </tr>
  <tr>
    <td>'.$row["Phone"].'</td>
    <td style="color: #9d4848">رقم الجوال</td>
  </tr>
  <tr>
    <td>'. $row["Email"].'</td>
    <td style="color: #9d4848">البريد الالكتروني </td>
  </tr>
  <tr>
    <td>'.$row["university"].'</td>
    <td style="color: #9d4848">جهة الطالبة</td>
  </tr>
  <tr>
    <td>'.$row["Level"].'</td>
    <td style="color: #9d4848">المستوى </td>
  </tr>
    <tr>
    <td>'.$row["Major"].'</td>
    <td style="color: #9d4848">التخصص</td>
  </tr> 
  <tr>
    <td>'. $row["GPA"].'</td>
    <td style="color: #9d4848">المعدل التراكمي </td>
  </tr> 
  <tr>
    <td>'. $row["GPA_System"].'</td>
    <td style="color: #9d4848">نظام المعدل التراكمي المستخدم </td>
  </tr> 
  <tr>
    <td>'.$row["Semester"].'</td>
    <td style="color: #9d4848">وقت التدريب</td>
  </tr> 
    <tr>
    <td>'.$row["StartDate"].'</td>
    <td style="color: #9d4848">تاريخ بداية التدريب</td>
  </tr>
  <tr>
    <td>'.$row["EndDate"].'</td>
    <td style="color: #9d4848">تاريخ نهاية التدريب</td>
    </tr>
  ';
        if($row["HoursNum"]!='0'){
            echo '
  <tr>
    <td>'.$row["HoursNum"].'</td>
    <td style="color: #9d4848">عدد ساعات التدريب</td>
  </tr>';}
          if($row["MonthNum"]!='0'){
            echo '
  <tr>
    <td>'.$row["MonthNum"].'</td>
    <td style="color: #9d4848">عدد أشهر التدريب</td>
  </tr>';}
              echo'
  <tr>
    <td>'.$row["SupervisorName"].'</td>
    <td style="color: #9d4848">اسم مشرفة التدريب </td>
  </tr>
  <tr>
    <td>'. $row["SupervisorPhone"].'</td>
    <td style="color: #9d4848">رقم التواصل مع المشرفة </td>
  </tr>
   <tr>
    <td>'. $row["SupervisorEmail"].'</td>
    <td style="color: #9d4848">البريد الاكتروني لمشرفة التدريب</td>
  </tr>
</table><br><br>';
$usermail=$row["Email"]; 
$sm=$row["SupervisorEmail"];
?>
    </div>
       <form method="post">

        <button type="submit" class="button2 button1" name="rej" onclick="return confirm('هل أنت متأكد؟');">
            إلغاء القبول</button>


        <?php
   if(isset($_POST['rej'])){
       $del="UPDATE student"." SET Status='F' WHERE id=".$id." "; 
       $result = $conn->query($del);$conn->close();
       echo "<script type='text/javascript'> window.location.href='ViewPage1.php ?name=".$id."';</script>";
    }
            
    ?>
              <button class="button button1" href="javascript:void(0);" onclick="javascript:window.location.href='mailto:<?=$usermail?>?subject=بخصوص التدريب في أمانة منطقة الرياض &body=السلام عليكم و رحمة الله وبركاته: نفيد سعادتكم بأن الإدارة العامة للخدمات النسائية على أتم الاستعداد لقبولكم . &cc=<?=$sm?>;'; return false">إرسال بريد  </button>
        <footer>
          <p style="  text-align: center;   color: #c58989; ">
          <img src="images/logoo.png"width="100px" height="100px"> </a>
          </br>
          &copy; امانة منطقة الرياض

          </p>

        </footer>
    
</html>