<?php

class edit extends config{
    public $id;
  

        public function __construct($id){
            $this->id = $id;
        }

        public function editTask(){
            $con = $this->connection(); 
            $sql = "UPDATE `tbl_todolist` SET `status` ='COMPLETED',`date_completed` = NOW() WHERE `id` = '$this->id'";
            $data = $con->prepare($sql);
            if($data->execute()){
                return true;
            }else{
                return false;
            }
         
           
        }
     }



?>