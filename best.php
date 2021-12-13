<?php



// 只取一筆 除了id也希望處理陣列
public function find($id){
$sql="SELECT * FROM $this->table WHERE ";
if(is_array($id)){

}else

$sql .=" id='$id'";
}

// echo 4;

return $this->pdo->query($sql)->fetch(PDO::)
?>

 