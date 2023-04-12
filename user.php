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
                <input type="text" placeholder="Enter name to search...">
                <button><i class="fa fa-search"></i></button>
            </div>
            <div class="user-list">
                <a href="">
                    <div class="content">
                        <img src="img.JPG" alt="">
                        <div class="details">
                            <span>ChatApp</span>
                            <p style="color:#333;">This is test message...</p>
                          </div>
                    </div>
                    <div class="status-dot"><i class="fa fa-circle"></i></div>
                </a>
                <a href="">
                    <div class="content">
                        <img src="img.JPG" alt="">
                        <div class="details">
                            <span>ChatApp</span>
                            <p style="color:#333;">This is test message...</p>
                          </div>
                    </div>
                    <div class="status-dot"><i class="fa fa-circle"></i></div>
                </a>
                <a href="">
                    <div class="content">
                        <img src="img.JPG" alt="">
                        <div class="details">
                            <span>ChatApp</span>
                            <p style="color:#333;">This is test message...</p>
                          </div>
                    </div>
                    <div class="status-dot"><i class="fa fa-circle"></i></div>
                </a>
                <a href="">
                    <div class="content">
                        <img src="img.JPG" alt="">
                        <div class="details">
                            <span>ChatApp</span>
                            <p style="color:#333;">This is test message...</p>
                          </div>
                    </div>
                    <div class="status-dot"><i class="fa fa-circle"></i></div>
                </a>
                <a href="">
                    <div class="content">
                        <img src="img.JPG" alt="">
                        <div class="details">
                            <span>ChatApp</span>
                            <p style="color:#333;">This is test message...</p>
                          </div>
                    </div>
                    <div class="status-dot"><i class="fa fa-circle"></i></div>
                </a>
            </div>
        </section>
    </div>
    <script src="javascript/users.js"></script>
</body>
</html>