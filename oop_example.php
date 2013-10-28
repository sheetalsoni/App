<?php  
  
class MyClass  
{  
    public $prop1 = "I'm a class property!<br />";  
    public static $count = 0;
    
    
    public function __construct() {
        echo "The class " . __CLASS__ . " is initiated <br /><br />";
    }
    
//    public function __destruct() {
//        echo "The class " . __CLASS__ . " is destructed. <br /> ";
//    }
    
    public function __toString() {
        return $this->getProperty();
    }


    public function setProperty($newValue){
        $this->prop1 = $newValue;
    }
    
    protected function getProperty(){
        return $this->prop1;
    }
    
    public static function plusOne(){
        return "The count is " . ++self::$count . "<br />";
    }
}  

class MyOtherClass extends MyClass{
    
    public function __construct() {
        parent::__construct();
        echo "A new constructer in class " . __CLASS__ . "<br />" ; 
    }
    public function checkValue(){
        echo "From a new method in a class " . __CLASS__ ;
    }
    
    public function callProtected(){
        return $this->getProperty();
    }
}
  
$obj = new MyClass;  
$obj2 = new MyClass;

do{
    echo $obj->plusOne();
} while (MyClass::$count < 10 );



//echo $obj->getProperty();
//echo $obj2->getProperty();

$newobj = new MyOtherClass();
//echo $newobj->checkValue();
//echo "=====================" ;
//echo $newobj->callProtected();

//$obj->setProperty("I am loving it!<br /> It is object1 property <br /><br />");
//$obj2->setProperty("This is awesome!<br /> It is object2 property <br /><br />");

//echo $obj; 
// because we have used __tostring function with $this->getproperty - 
// we dont have to write it again here like we did in below line.
//echo $obj->getProperty();
//echo $obj2->getProperty();

//unset($obj); - this function destruct the object. 
//echo "End of file!";

//echo $obj->prop1;
//var_dump($obj);  
  
?>  
