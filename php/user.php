<?php
session_start();
include_once 'config.php';
$sql=mysqli_query($conn,"SELECT * FROM users");
$output="";
if(mysqli_num_rows($sql)==1){
    $output.=" there is no available user";
}
elseif(mysqli_num_rows($sql)>0){
    while($row=mysqli_fetch_assoc($sql)){
        $output.='<a href="">
        <div class="content">
            <img src="php/uploadedImages/'.$row['image'].'" alt="">
            <div class="details">
                <span>'.$row['fname'].' '.$row['lname'].'</span>
                <p style="color:#333;">This is test message...</p>
              </div>
        </div>
        <div class="status-dot"><i class="fa fa-circle"></i></div>
    </a>';     
    }
}
echo $output;