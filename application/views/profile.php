<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Admin</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/profile.css">
    <style>

.box {     
    width: 450px;     
    height: 601px;     
    background: rgba(0, 0, 0, 0.4);
    padding: 40px;     
    text-align: center;     
    margin-top: 30px;     
    color: white;     
    font-family: 'Century Gothic',sans-serif;   
} 

    header {     
    background-color: #4F99A7;    
    overflow: hidden;     
    margin: -8px;
} 

nav {     
    float: right;     
    margin-right: 48px; 
} 

ul {     
    float: right;     
    list-style: none;     
    margin: 14px; 
} 

li {     
    width: 100px;     
    text-align: center;     
    padding: 30px 0; 
} 

ul li {     
    display: inline-block; 
} 

ul li a {     
    text-decoration: none;     
    color: blanchedalmond;     
    padding: 5px 20px;     
    border: 1px solid transparent;     
    transition: 0.6s ease;     
    font-family: sans-serif; 
} 

ul li a:hover{      
    background-color:#FFF756;     
    color: #4F99A7;   
    border: 2px solid white;    
    border-radius: 40px;     
    transition-duration: 0.5s; 
} 
 
#logo {     
    width: 150px;     
    float: left;     
    height: auto;   
} 

.atas {     
    max-width: 1200px;     
    margin: auto; 
} 
 
 
    </style>
</head>
<body style="background-image:url('<?=base_url()?>assets/blue.png'); background-size: 100%;">
<header class="ob">
        <div class="atas">
            <div id="logo"><img style="width: 127px; margin-left: 40px; float:left;" src="<?=base_url()?>assets/.png" alt=""></div>
            <nav>
                <ul>
                    <li><a href="<?=base_url()?>index.php/welcome/utama">Home</a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/event">Event</a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/gallery">Gallery</a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/contact">Contact</a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/profile">Profile</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="box">
    <img style="width: 200px; border-radius: 10%;" src="<?=base_url()?>assets/1.png" alt="">
    <h1>Wahyu Utami</h1>
    <h5> Web Developer</h5>
<p> Nama saya Wahyu Utami Ningtris, biasa dipanggil Ami. Lahir pada tanggal 16 Januari 2002. Saat ini tengah bersekolah di SMK Telkom Malang</p> 
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum totam quod porro libero vero cum ea eaque rerum perferendis, perspiciatis dolore praesentium possimus amet. Mollitia necessitatibus corporis sed in. Eos. </p> 
<p>Hubungi kontak saya : 085231775902</p>  
    </div>
</body>
</html>