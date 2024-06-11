<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/trangchu.css">
    <title>Trang chủ</title>
</head>
<body> 
    <header>
        <div id="header">  
            <div class="nav-container">
                <ul class="nav collapse" id="myNav">
                    <li><a href="dieuphoi.php">Điều phối</a></li>
                    <li><a href="thongtinkho.php">Thông tin kho</a></li>
                    <li><a href="donhang.php">Đơn hàng</a></li>
                    <li><a href="index1.php?viewkhotp">Danh sách thành phẩm</a></li>
                    <li><a href="index1.php?viewkhonvl">Danh sách nguyên vật liệu</a></li> 
                    
                    
                  </ul>
            </div>  
            <div class="logo">
                <a href="index.php"><img src="./image/logo.png" class="logo-img"></a>
            </div>
            <div class="icon">
                <div class="user-icon ">
                    <a href=""><i class="fa-solid fa-user" ></i></a>
                </div>
            </div>
            <div class="search" >
                <form action="">
                  <input type="text" placeholder="Tìm kiếm.." name="search" class="search-btn">
                  <i class="fa fa-search"></i>
                </form>
            </div>
        </div>
    </header>
    <section class="sectionindex">
        <div class="section-left">
                <img src="../khang2/image/kho3.jpg" alt="" width="100%" height="630px">
        </div>

        <div class="section-right">
            
          <center> <h1>QUẢN LÝ KHO</h1></center>
           <div class="quanlykhocha">
            <div class="quanlykho"><h4><a href="dieuphoi.php">ĐIỀU PHỐI</a></h4></div>
           <div class="quanlykho"><h4><a href="thongtinkho.php">THÔNG TIN KHO</a></h4></div>
           <div class="quanlykho"><h4><a href="donhang.php">ĐƠN HÀNG</a></h4></div>
           <div class="quanlykho"><h4><a href="index1.php?viewkhotp">QUẢN LÝ THÀNH PHẨM</a></h4> </div>
           <div class="quanlykho" ><h4><a href="index1.php?viewkhonvl">QUẢN LÝ NGUYÊN VẬT LIỆU</a></h4></div>
           </div>
        </div>
    </section>
   <footer id="footer" styles="margin-top: 300px;";>
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
   
