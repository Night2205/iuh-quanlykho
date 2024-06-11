<?php
  error_reporting (E_ALL ^ E_NOTICE);
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="../assert/css/styles.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style>
        *{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: 'Times New Roman', Times, serif;
}

/* base*/
:root {
--primary-color: #233d5a;
--while-color: #fff;
--black-color: #000;
--boder-color: #dbdbdb;
--base-color: #cfdded;
--button-color:#233d5a;
--textbt-color:#fff;
--textbd-color:#000;
}
html {
  font-size: 62.5%;
  line-height: 1.6rem;
  font-family: 'Roboto', sans-serif;
  box-sizing: border-box;
}
.nav-container1 li a:hover{
background-color: rgb(108, 108, 108);
}
/*main*/
#header{
  width: 100%;
  height: 110px;
  background-color: var(--primary-color);
  color: var(--while-color);
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1;
  
}

.logo-img{
  width: 110px;
  height: 105px;
  float: left;
  position: absolute;
  left: 6%;
  padding-top: 5px;
}

.search{
  margin-top: 38px;
  width: 330px;
  position: relative;
  display: inline-block;
  float: right;
  margin-right: 15%;
  font-size: 15px;
}
.search-btn
{
  padding: 5px;
  width: 330px;
  border: 1.5px solid var(--text-color);
  height: 35px;
}
.search-icon{
  padding-right: 30px;
  padding: 5px;
  border-radius: 30px;
  border-color: var(--text-color);
  background-color: var(--primary-color);
}

.fa-search {
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
}

.user-icon,
.fa-search{
  cursor: pointer;
}
.icon {
  font-size: 22px;
  position: absolute;
  top: 37%;
  right: 7%;
}

.cart-icon,
.user-icon {
  display: inline;
  padding: 10px;
  
}
.fa-user:before{
  color: var(--while-color);
}
.nav-container1 {
  position: absolute;
  top: 50%; /* Đưa menu lên giữa theo chiều cao */
  transform: translateY(-50%); 
  left: 15%;
}

.nav1 {
  list-style: none;
  width: 100%;
  padding: 0;
  display: flex; /* Chuyển menu thành dạng ngang */
}

.nav1 li {
  display: inline;
  position: relative;
  
}

.nav1 li a {
  text-decoration: none;
  padding: 0 15px;
  font-size: 1.7em;
  color: var(--text-color);
  line-height: 50px;
  display: block;
  width: max-content; 
  width: auto;
  height: auto;
}

.nav1 li a:hover {
  opacity: 0.8;
}

/* Menu con (Submenu) */
.nav1 li ul {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #fff;
  border: 1px solid #ccc;
  width: 200px; 
}

.nav1 li:hover ul {
  display: block;
}

.nav1 li ul li {
  display: block;
}

.nav1 li ul li a {
  color: #333;
  text-decoration: none;
  padding: 10px 15px;
  display: block;
}

.nav1 li ul li a:hover {
  background-color: #8BCAC8;
}


/* footer*/
footer{
  width: 100%;
  height:420px;
  background-color: var(--primary-color);
  float: left;
  color: var(--while-color);
}

.policy,
.contact {
width: 30%;
}

.policy,
.contact ,
.CustomerCare{
  height: auto;
  text-align: center;
  color: var(--text-color);
  text-align: center;
  float: left;
}
.CustomerCare{
  width: 40%;
}

.policy-title,
.contact-title,
.CustomerCare-title{
  font-size: 1.8em;
  padding-top: 40px;
  padding-bottom: 10px;
  width: 100%;
}
.policy-information a,
.contact-information {
font-size: 1.7em;
text-decoration: none;
color: var(--text-color);
}

.policy-information a,
.contact-information p{
  line-height: 40px;
}

.Community-title{
  font-size: 1.8em;
  margin-top: 25px;
  padding-bottom: 20px;
}
.Community-icon{
  color: var(--text-color);
  font-size: 35px;
  padding-right: 30px;
}

/* Thêm CSS cho biểu tượng menu */
.menu-icon {
  display: none;
  color: var(--text-color);
  font-size: 24px;
  cursor: pointer;
  position: absolute;
  top: 20px;
  right: 20px;
}
h1{
margin-bottom: 20px;
}


    </style>
</head>

<body>
    <header>
        <div id="header">  
            <div class="nav-container1">
                <ul class="nav1 collapse1" id="myNav">
                    <li><a href="dieuphoi.php">Điều phối</a></li>
                    <li><a href="thongtinkho.php">Thông tin kho</a></li>
                    <li><a href="donhang.php">Đơn hàng</a></li>
                    <li><a href="index1.php?viewkhotp">Danh sách thành phẩm</a></li>
                    <li><a href="index1.php?viewkhonvl">Danh sách nguyên vật liệu</a></li>         
                </ul>
            </div>  
            <div class="logo">
                <a href="index.html"><img src="./image/logo.png" class="logo-img"></a>
            </div>
            <div class="icon">
                <div class="user-icon ">
                    <a href=""><i class="fa-solid fa-user" ></i></a>
                </div>
            </div>
            
        </div>
    </header>
    <div class="row" id="body">
        <?php

            if(isset($_GET['qldstp'])){
                include_once("view/qlkdstp.php");
            }elseif(isset($_GET['viewkhotp'])) {
                include_once("view/viewkho.php");
            }elseif(isset($_GET['updatetp'])) {
                include_once("view/view_updateTp.php");
            }
            elseif(isset($_REQUEST['timkiem'])){
                include_once("view/view_seachTp.php");
            } elseif(isset($_GET['deletetp'])) {
                include("controller/controller_qltp.php");
                $p = new controlerThanhPham();
                $matp = $_GET['deletetp'];
            
                echo '<script>
                        function confirmDelete() {
                          return confirm("Bạn có chắc chắn muốn xóa?");
                        }
                        
                        if (confirmDelete()) {
                            window.location.href = "index1.php?deletetpa=yes&matp=' . $matp . '";
                        }else {
                            
                            window.history.back();
                        }
                      </script>';
            } 
            if(isset($_GET['deletetpa']) && $_GET['deletetpa'] == 'yes') {
                include("controller/controller_qltp.php");
                $p = new controlerThanhPham();
                $matp = $_GET['matp'];         
                $p->deleteTp($matp);
                echo '<script>window.location.href = "index1.php?qldstp";</script>';
                exit(); 
            }   elseif(isset($_GET['qldsnvl'])){
                    include_once("view/qlkdsnvl.php");
            }  
            elseif(isset($_GET['viewkhonvl'])){
                include_once("view/viewkho2.php");
        } 
            elseif(isset($_GET['updatenvl'])) {
                    include_once("view/view_updateNvl.php");
            }   elseif(isset($_GET['deletenvl'])) {
                    include("controller/controller_qlnvl.php");
                    $p = new controlerNvl();
                    $manvl = $_GET['deletenvl'];
                 
                    echo '<script>
                        function confirmDelete() {
                          return confirm("Bạn có chắc chắn muốn xóa?");
                        }
                        
                        if (confirmDelete()) {
                            window.location.href = "index1.php?deletenvlb=yes&manvl=' . $manvl . '";
                        }else {
                            
                            window.history.back();
                        }
                      </script>';
            }if(isset($_GET['deletenvlb']) && $_GET['deletenvlb'] == 'yes') {
                include("controller/controller_qlnvl.php");
                $p = new controlerNvl();
                $manvl = $_GET['manvl'];       
                $p->deleteNvl($manvl);
                echo '<script>window.location.href = "index1.php?qldsnvl";</script>';
                exit(); 
            }
            elseif(isset($_REQUEST['timkiem1'])){
                include_once("view/view_seachNvl.php");
            }
            
        ?>
            
            
    
    </div>

    <?php

    ?>
    
    
    <footer id="footer" style="margin-top: 120px;">
    <div class="policy">
        <h5 class="policy-title">CHÍNH SÁCH</h5>
        <div class="policy-information">
            <a href="" >Chính sách bảo mật</a><br>
            <a href="">Chính sách vận chuyển</a><br>
            <a href="">Chính sách bảo hành</a><br>
            <a href="">Điều khoản chung</a>
        </div>
    </div>
    <div class="contact">
        <h5 class="policy-title">VỀ CHÚNG TÔI</h5>
        <div class="policy-information">
            <a href="" >Câu chuyện thương hiệu</a><br>
            <a href="">Tầm nhìn và giá trị cốt lõi</a><br>
            <a href="">Lịch sửa phát triển</a><br>
            <a href="">Mạng lưới và quy mô</a>
        </div>
    </div>
    <div class="CustomerCare">
        <h5 class="CustomerCare-title" >THÔNG TIN LIÊN HỆ</h5>
        <div class="contact-information">
            <P>CÔNG TY TNHH ONETOFIVE</P> 
            <p>Onetofive.vn</p> 
                <p>Địa chỉ:Nguyễn văn Bảo, Phường 4, Gò Vấp</p>
            <p>Hotline:033xxxxxxx</p>
        </div>
        <h5 class="Community-title">CỘNG ĐỒNG</h5>
        <a href="" class="Community-icon"><i class="fa-brands fa-facebook"></i></a>
        <a href="" class="Community-icon"><i class="fa-brands fa-square-instagram"></i></a>
        <a href="" class="Community-icon"><i class="fa-brands fa-youtube"></i></a>
        <a href="" class="Community-icon"><i class="fa-brands fa-tiktok"></i></a>
    </div>
</footer>
</body>

</html>