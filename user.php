<?php
session_start();
include_once('php/config.php');
if(!isset($_SESSION['unique_id'])) {
    header("location: ./login.php");
}
?>
<?php include_once('header.php')?>
<body>
    <div class="wrapper">
        <section class="user">
            <header>
                <?php
                $sql=mysqli_query($conn,"SELECT * FROM users WHERE unique_id={$_SESSION['unique_id']}");
                if(mysqli_num_rows($sql)>0){
                    $row=mysqli_fetch_assoc($sql);
                }
                ?>
                <div class="content">
                  <img src="php/uploadedImages/<?php echo $row['image'];?>" alt="avatar">
                  <div class="details">
                    <span><?php echo $row['fname']." ".$row['lname'];?></span>
                    <p><?php echo $row['status']?></p>
                  </div>
                </div>
                <a href="" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select user to start chat</span>
                <input type="text" name="item" placeholder="Enter name to search...">
                <button><i class="fa fa-search"></i></button>
            </div>
            <div class="user-list">
            </div>
        </section>
    </div>
    <script src="javascript/users.js"></script>
    <script>
        const userList=document.querySelector(".user .user-list");
        setInterval(myfunction,500);
        function myfunction(){
        let req=new XMLHttpRequest();
        req.open("GET","php/user.php",true);
        req.onload=()=>{
       if(req.readyState===XMLHttpRequest.DONE)
       {
        if(req.status===200){
           userList.innerHTML=req.response;
        }   
      }
   }
   req.send();
}
    </script>
</body>
</html>