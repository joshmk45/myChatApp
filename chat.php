<?php include_once('header.php')?>
<?php 
session_start();
if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
}
?>
<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
            <?php
                include_once('php/config.php');
                $user_id=mysqli_real_escape_string($conn,$_GET['user_id']);
                $sql=mysqli_query($conn,"SELECT * FROM users WHERE unique_id=$user_id");
                if(mysqli_num_rows($sql)>0){
                    $row=mysqli_fetch_assoc($sql);
                }
                ?>
                <a href="user.php" class="back-icon"><i class="fa fa-arrow-left"></i></a>
                <img src="php/uploadedImages/<?php echo $row['image']?>" alt="avatar"> 
                  <div class="details">
                    <span><?php echo $row['fname']."  ".$row['lname']?></span>
                    <p><?php echo $row['status']?></p>
                  </div>
            </header>
            <div class="chat-box">
                
                
            </div>
            <form action="" method="POST" class="typing-area">
                <input type="text"name="outgoing" value="<?php echo $_SESSION['unique_id']?>" hidden>
                <input type="text"name="incoming" value="<?php echo $user_id?>" hidden>
                <input type="text" name="message" placeholder="Type a message here...">
                <button><i class="fa fa-telegram"></i></button>
            </form>
        </section>
    </div>
    <script src="javascript/chat.js"></script>
    <script>
setInterval(getChats,500);
function getChats(){
 let req=new XMLHttpRequest();
 req.open("POST","php/get_chats.php",true);
 req.onreadystatechange=processRequest;
 function processRequest(){
    if(req.readyState===XMLHttpRequest.DONE && req.status===200){
        chatArea.innerHTML=req.response;

    }
 }
 let formdata=new FormData(form);
 req.send(formdata);
}
    </script>
</body>
</html>