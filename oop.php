<?php
class Animal{

    // 這裡只能接固定值 或就像這樣留空
    public $name="";
protected $age=0;
private $heartbeat=0;

public function _construct(){
    $this->age=rand(10,20);
    $this->name='john';
    $this->heartbeat=rand(20,60);
}
public function getName(){
    return $this->name;
}
public function getHeartbeat(){
    return $this->heartbeat;
}
public function setName($name){
    $this->name=$name;
}
}

// 結果這邊 沒有用方法 比方get set存取 出現紅字
$animal=new Aniamal;
// echo $animal->name;
echo $animal->getName();
// $animal->name="mack";
$animal->setName('mack');
echo $animal->getName();
echo $animal->getHeartbeat();
echo"<hr>";
$dog->setName('herry');
echo $dog->getName();
//echo $animal->heartbeat;

class Dog extends Animal{
protected $hair_color="black";


}

$dog=new Dog;
echo $dog->getName();
echo "<br>";
$dog->setName('mack');
echo "<br>";
echo $dog->getName();
echo"<br>";

?>