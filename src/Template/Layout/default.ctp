<?php
$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ;?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
        <?= $cakeDescription ?>: <?= $this->fetch('title'); ?>
    </title>
    <?= $this->Html->meta('icon'); ?>

    <!--chèn css-->
    <?= $this->Html->css('Site.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('icon.css') ?>
    <?= $this->Html->css('NguoiDungCss.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('nivo-slider.css') ?>
  
    <!--chèn  js-->
    <?= $this->Html->script('jquery-1.12.2.min'); ?>
    <?= $this->Html->script('jquery.nivo.slider'); ?>
    <?= $this->Html->script('jquery.nivo.slider.pack.js'); ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    
    <?= $this->Html->script('bootstrap'); ?>
    <?= $this->Html->script('bootstrap.min'); ?>
<!-- chenf css js cho phaanf danh muc sp -->
    <?=$this->Html->script('carousel', ['block' => true]);?>
    <?=$this->Html->css('carousel', ['block' => true]);?>
    <?=$this->Html->script('carousel', ['block' => 'scriptBottom']);?>  


    <?= $this->fetch('meta'); ?>
    <?= $this->fetch('css') ;?>
    <?= $this->fetch('script'); ?>

 <!--   <?= $this->fetch('title') ?>
    <?= $this->fetch('scriptBottom') ?>  -->
</head>
<body > 
    <div class="toantrang" style="background-color:#0a0758">
       
        <!--"Phần đầu"-->
        <div style="height:48px"></div>
        <div id="bg" background-image:<?= $this->Html->image('/Hinhanh/Netcen Welcome.png', array('alt' => 'CakePHP', 'style' => 'height: 61px; float:left;')); ?> </div>
        </div>

        <!--"Phần Menu"-->
        <div id="noi" class="nav">

         <ul>
             <li> 
             <a href="../Products/viewproduct"><i style="color:white" class="fa fa-home"></i><b>Home</b></a>   
            </li>
            <li>
             <a href="#"><i style="color:white" class="fa fa-list"></i><b>Category</b> </a>
                <ul>
                    <li>
                        <a href="#">
                         <?=  $this->Element('../Types/getListtype'); ?>    
                        </a>
                    </li>
                </ul>
            </li>
             <li>
                    <a href="#"><i style="color:white" class="fa fa-headphones"></i><b>Phụ kiện</b></a>
            </li>

             <li>
                    <a href="#"><i style="color:white" class="fa fa-file-text-o"></i><b>News</b></a>
            </li>

             <li>
                    <a href="#"><i style="color:white" class="fa fa-gift"></i><b>Promotion</b></a>
             </li>
               
             <li>
                <a href="#">Account</a>
                    <ul>
                    <?php if($loggedIn): ?>
                         <li>
                            <i style="color:white"><?=$this->Html->link('Logout',['action'=>'../Users/logout'])?></i>
                         </li> 
                         <li>
                        <i style="color:white"><?= $this->request->session()->read('Auth.User.username') ?></i>
                         </li>  
                    <?php else: ?>
                       <li><i style="color:white"><?=$this->Html->link('Register',['action'=>'register'])?></i></li>
                    <?php endif; ?>
                    </ul>
                </li>
                <li>
                    <a href="#"><i style="color: white" class="fa fa-shopping-cart"></i><b>Shopping</b></a>
                </li>

            </ul>
            <!-- Phần tìm kiếm 
            <div style="width:200px;float:left">
                @using (Html.BeginForm("Ketquatimkiem","Timkiem",FormMethod.Post))
                {
                    @Html.TextBox("txtTimkiem","", htmlAttributes: new { @class = "TextBoxTimkiem", @placeholder = "Nhập từ khóa cần tìm kiếm vào đây" })
                    @*<div>
                        <button class="tim_kiem" type="submit">
                            <img src="/Hinhanh/images.png" />
                        </button>
                    </div>*@
                     @*<form class="tim_kiem">
                               <input style="background-image: url('/Hinhanh/images.png');" type="text" name="search" placeholder="Search...">
                      </form>*@
                }
               
            </div>  -->
           
        </div>

       <div style="height:20px;background-color:#ffd800"></div>
        <!-- chen hinh anh dong *@-->
        <div id="slider" class="nivoSlider" >
        <?= $this->Html->image('Hinhanh/17_03_2016_16_15_21_TGDD-ZTE-Wave3-800-300.jpg',array('alt'=>'CakePHP'))?>
        <?= $this->Html->image('Hinhanh/18_03_2016_16_51_27_TGDD-iPhone6s-800-300.jpg',array('alt'=>'CakePHP'))?>   
        <?= $this->Html->image('Hinhanh/19_03_2016_10_32_38_TGDD-Launching-Galaxy-S7-800-300.jpg',array('alt'=>'CakePHP'))?>     
        <?= $this->Html->image('Hinhanh/22_03_2016_14_50_03_TGDD-Le-hoi-Galaxy-800-300.jpg',array('alt'=>'CakePHP'))?>         
        </div>

    <!--Hình ảnh khuyến mại-->
         <div class="km" >
     <a href="#">
         <?= $this->Html->image('Hinhanh/photoshop.png',array('alt'=>'CakePHP','style'=>'height: 325px;
    width: 320px;; float:left;'))?>
     </a>
      
    </div>
      
         <!--Nội dung hiện thị*@-->
            <?= $this->fetch('content');?>


          <!--"Phần cuối"-->
        <div class="footer" style="background-color:#c1baef;font-size:20px">
            <address style="text-align: left;">
                Designed by Duong Anh<br />
                Email:<a href="#">duonganh95hd@gmail.com</a><i style="color:black" class="fa fa-envelope"> </i>
            </address>
 
            <div style="font-size: 20px; font-weight: bold; color: #0a0758; text-align:left; direction: rtl;">
                SHOP ĐIỆN THOẠI DI ĐỘNG  <br />
                Trụ sở chính: 236 Hoàng Quốc Việt <br />
                Chi nhánh: Học Viện Kỹ Thuật Quân Sự <br />
                Điện thoại:<i style="color:black;font-size:20px" class="fa fa-phone-square"></i> HN - (04) 75463322, HCM - (08) 64673223 <br />
                Mã số doanh nghiệp:1315 do Sở Kế hoạch và Đầu tư TP. Hà Nội cấp lần đầu ngày 06/04/2016
            </div>
    </div>
    <!--Script chay nivo-Slider-->
    <script type="text/javascript">
        $(window).load(function () {
            $('#slider').nivoSlider();
        });
    </script>
</body> 
</html>
<style>
    .nivo-controlNav {
        display: none;
    }
</style>