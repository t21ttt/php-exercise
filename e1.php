<?php

class Student {
   
            private $firstname;
            private $lastname;
            private $email; 
            private $host ="localhost";
            private $username="root";
            private $password="";
            private $database="Registration";
            private $tbname="Student";
        public function connect()
        {
            $con=mysqli_connect($this->host,$this->username,$this->password,$this->database);
            return $con;
        }
    
            public function saveData($fname,$lname,$email)
            {
                $conn=$this->connect();
                mysqli_query($conn,"insert into ".$this->tbname."(firstname,lastName,email)
                values('$fname','$lname','$email')") or die(mysqli_error($conn));
                echo "<div style='padding:20px;background-color:yellow;'>Data Added SuccessFully</div>";
            }  
}
   
    if(isset($_POST['submit']))
    {
    
      $firstname=$_POST['firstname'];
      $lastname=$_POST['lastname'];
      $email=$_POST['email'];
  
      $stud1=new Student();
      $stud1->saveData($firstname,$lastname,$email);
    }  

?>