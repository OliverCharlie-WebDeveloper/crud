<?php

  class insert extends config{
    public $task;
  

        public function __construct($task){
            $this->task = $task;
        }

        public function insertTask(){
            $con = $this->connection(); 
            $sql = "INSERT INTO `tbl_todolist`(`item`)VALUES('$this->task')";
            $data = $con->prepare($sql);
            if($data->execute()){
                return true;
            }else{
                return false;
            }
         
           
        }
     }
?>