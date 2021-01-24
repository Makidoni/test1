<?php
final class Item extends Database {
//свойства
  private $int_id; 
  private $str_name; 
  private $int_status; 
  private $bool_changed;
    
  //метод construct с id
   public function __construct($int_id) {
        $this->int_id = $int_id;
   }
    
   // метод init делает запрос в базу данных
    private function init() {
    $sql = 'SELECT name, status FROM objects WHERE id="'. $this->int_id .'"';
    $result = $this->connect()->query($sql);
    $numRows = $result->num_rows;
        if ($numRows > 0) {
            while($row = $result->fetch_assoc()){
            $datael[] = $row; } 
            return $datael;
        } 
    }
    
// методы element передают данные на печать 
// вместо этого по заданию тут должен быть magic methods
    public function element1() {
        $dataels = $this->init();
        foreach ($dataels as $datael) {
            echo $datael['name']." ";
        }  
    }


public function element2() {
        $dataels = $this->init();
        foreach ($dataels as $datael) {
            echo $datael['status']." ";
        }  
    }
}
///далее делать не стала, поскольку это была бы чистая импровизация :)
?>

