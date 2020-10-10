<?php
$name=filter_input(INPUT_POST,'name');
$id=filter_input(INPUT_POST,'id');
$phone=filter_input(INPUT_POST,'phone');
$email=filter_input(INPUT_POST,'email');
$university=filter_input(INPUT_POST,'university');
$level=filter_input(INPUT_POST,'level');
$majer=filter_input(INPUT_POST,'majer');
$GPA_System=filter_input(INPUT_POST,'GPA_System');
$GPA=filter_input(INPUT_POST,'GPA');
$term=filter_input(INPUT_POST,'term');
$StartDate=filter_input(INPUT_POST,'StartDate');
$EndDate=filter_input(INPUT_POST,'EndDate');
$HoursNum=filter_input(INPUT_POST,'HoursNum');
$MonthNum=filter_input(INPUT_POST,'MonthNum');
$s_name=filter_input(INPUT_POST,'SupervisorName');
$s_phone=filter_input(INPUT_POST,'SupervisorPhone');
$s_email=filter_input(INPUT_POST,'SupervisorEmail');
$Status="N";



//$db=mysqli_connect("localhost","root","","training");
$db=new mysqli("localhost","root","","training");
mysqli_set_charset($db,"utf8");
//$stmt=$
 $q=mysqli_query($db,"INSERT INTO student (id,Name,Phone,Email,university,Level,Major,GPA_System,GPA,Semester,StartDate,EndDate,HoursNum,MonthNum,SupervisorName,SupervisorPhone,SupervisorEmail,Status) VALUES ('$id','$name','$phone','$email','$university','$level','$majer','$GPA_System','$GPA','$term','$StartDate','$EndDate','$HoursNum','$MonthNum','$s_name','$s_phone','$s_email','$Status')");

?>
