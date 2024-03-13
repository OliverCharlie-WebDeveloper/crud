<?php

function insertT(){
    if(!empty($_GET['items'])){
        $insert = new insert($_GET['items']);
        if($insert->insertTask()){
          echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Holy guacamole!</strong> Your Inserted Successfully. 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> ';
        }else{
          echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Holy guacamole!</strong> Your Inserted Error. 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> ';
        }
     }
  
}




function deleteT(){
  if(!empty($_GET['delete'])){
      $delete = new delete($_GET['delete']);
      if($delete->deleteTask()){
        echo' <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> Your Inserted Successfully. 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> ';
      }else{
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> Your Inserted Error. 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> ';
      }
   }

}


function editT(){
  if(!empty($_GET['edit'])){
      $edit = new edit($_GET['edit']);
      if($edit->editTask()){
        echo' <div class="alert alert-succcess alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> Your Inserted Successfully. 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> ';
      }else{
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> Your Inserted Error. 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> ';
      }
   }

}







?>