

<?php
include_once("DBconnection.php");
class Student{
    private $firstname;
    private $lastname;
    private $email; 
  
 function _construct($firstname,$lastname,$email)
    {
        $this->firstname=$firstname;
        
        $this->lastname=$lastname;
        $this->email=$email;
    }
public function insertStudent(){
    $sql="INSERT INTO Student(firstname,lastname,email) 
    values('".$this->firstname."','".$this->lastname."','".$this->email."')";
    $result=DBconnection::exequery($sql);
    if($result)
     {
        echo "data inserted succefully";
    }
}
}

?>