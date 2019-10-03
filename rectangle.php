<?php
interface shapes{
    public function Area();
}
class rectangle implements shapes{
    public $length;
    public $breadth;
    public function Area($length = null, $breadth = null){
            $this->length = $length;
            $this->breadth = $breadth;
        echo "the area of the rectangle is " . $this->length* $this->breadth. "</br>";
        }
    
}
class circle implements shapes{
    public $radius;
    public function Area($radius = null){
            $this->radius = $radius;
        echo "the area of the circle is" . (pi()) * $this->radius * $this->radius;
        }     
}
$calculate = new rectangle();
$calculate->Area(5,8);

$cal = new circle();
$cal->Area(8)
?>
