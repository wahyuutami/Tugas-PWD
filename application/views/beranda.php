<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style.css">
</head>
<body>
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
    <h1> Selamat Datang <?= $nama_lengkap?>
    </h1>
    <p style="font-size: 18px; margin-left: 56px; margin: 39px;">lorem ipsum dolor sit amet consectetur adipscing elit.</p>
    <img style="width: 823px; margin-left: 510px; margin-top: -312px;" src="<?=base_url()?>assets/back.png" alt="">
</body>
</html>