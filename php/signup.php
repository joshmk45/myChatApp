<?php
session_start();
include_once "config.php";
$fname=mysqli_real_escape_string($conn,$_POST['fname']);
$lname=mysqli_real_escape_string($conn,$_POST['lname']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password))
{
      //email validation
      if(filter_var($email,FILTER_VALIDATE_EMAIL))
      {
           //check email in database
          $emails=mysqli_query($conn,"SELECT email FROM  users WHERE email='{$email}'");
          if(mysqli_num_rows($emails)>0){
             echo "$email- This email already exist!";
          }
          else{
          //checking for image uploaded
          if(isset($_FILES['image']))
          {
          $img_name=$_FILES['image']['name'];
          $img_type=$_FILES['image']['type'];
           $tmp_name=$_FILES['image']['tmp_name']; 

           $img_explode=explode('.',$img_name);
           $img_ext=strtolower(end($img_explode));
           $extension=['png','jpg','jpeg']; 
           if(in_array($img_ext,$extension)==true){
           $time=time();
           $new_img_name=$time.$img_name;
           if(move_uploaded_file($tmp_name,"uploadedImages/".$new_img_name)){
            $status="Active now";
            $random_id=rand(time(),10000000);
            $sql=mysqli_query($conn,"INSERT INTO users (unique_id,fname,lname,email,password,image,status) VALUES('$random_id','$fname','$lname','$email','$password','$new_img_name','$status')");
          if($sql)
          {
           $sql2=mysqli_query($conn,"SELECT * FROM users WHERE email='{$email}'");
           if(mysqli_num_rows($sql2)>0){
            $row=mysqli_fetch_assoc($sql2);
            $_SESSION['unique_id']=$row['unique_id'];
            echo "success";
           }
        }
        else{
            echo "something went Wrong!!";
        }
      }
      
     }
     else{
        echo "please upload an image file with jpg, jpeg, png!";
     }
    }
    else{
        echo "please upload an image file";
    }
   }
  }
  else{
    echo "$email This is not a valid email";
  }
}
else{
    echo "All input field are required!";
}