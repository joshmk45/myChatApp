<?php
session_start();
if(isset($_SESSION['unique_id'])){
    include_once "config.php";
    $outgoing_id=mysqli_real_escape_string($conn,$_POST['outgoing']);
    $incoming_id=mysqli_real_escape_string($conn,$_POST['incoming']);
    $output="";

    $query="SELECT * FROM messages WHERE (outgoing_msg_id=$outgoing_id and incoming_msg_id=$incoming_id) OR (outgoing_msg_id=$incoming_id and incoming_msg_id=$outgoing_id)";
    $sql=mysqli_query($conn,$query);

     if(mysqli_num_rows($sql)>0){
       while($row=mysqli_fetch_assoc($sql)){
        if($row['outgoing_msg_id']===$outgoing_id){
          $output.='<div class="chat outgoing">
          <div class="details">
              <p>'.$row['msg'].'</p>
          </div>
      </div>';
        }
        else{
             $output.='<div class="chat incoming">
             <img src="php/uploadedImages/" alt="">
             <div class="details">
                 <p>'.$row['msg'].'</p>
             </div>
         </div>';
        }
       }
       echo $output;
     }                        
}
else{
    header("../login.php");
} 