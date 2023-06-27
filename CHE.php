<?php
class Fruit{
    public $name;
    protected $color;
    private $weight;
    public function _construct($name,$color) {
        $this->name=$name;
        $this->color=$color;

    } 

    public function intro(){
        echo "the fruit is {$this->name} and the color is{$this->color}";
    }
}




class Strawberry extends Fruit{
    public $weight;
    public function __construct($name,$color,$weight)
    {

$this->name=$name;
$this->color=$color;
$this->weight=$weight;


    }
    public function intro(){
        echo "the fruit is {$this->name},the color is {$this->color},and weght is {$this->weight} gram.";
    } }
$strawberry=new Strawberry("Strawberry","red",50);
$strawberry->intro();
?>

























    <!-- function _construct($name){
        $this->name=$name;

    }

    function _destruct(){
        echo "the friut is "{$this->name}.";
    
$apple=new Fruit('Apple');
?>
 -->
