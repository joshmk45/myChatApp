<?php
session_start();
include_once 'config.php';
$item=mysqli_real_escape_string($conn,$_POST['searchTerm']);
$sql=mysqli_query($conn,"SELECT * FROM users WHERE fname LIKE '%{$item}%' OR lname LIKE '%{$item}'");
$output="";
if(mysqli_num_rows($sql)>0){
    while($row=mysqli_fetch_assoc($sql)){
        $output.='<a href="chat.php?user_id='.$row['unique_id'].'">
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
else{
    $output.="user does not exist";
}
echo $output;
