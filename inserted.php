<?php
include('student.php');
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];;
 $email=$_POST['email']; 
 $stud=new Student($firstname,$lastname, $email);
 $stud->insertStudent();
?>




