<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Admin</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/gallery.css">
</head>
<body style="background-image: url('<?=base_url()?>assets/yellow.png');">
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
<ul class="slides">
    <input type="radio" name="radio-btn" id="img-1" checked />
    <li class="slide-container">
        <div class="slide">
            <img src="<?=base_url()?>assets/c1.jpg" />
        </div>
        <div class="nav">
            <label for="img-5" class="prev">&#x2039;</label>
            <label for="img-2" class="next">&#x203a;</label>
        </div>
    </li>

    <input type="radio" name="radio-btn" id="img-2" />
    <li class="slide-container">
        <div class="slide">
          <img src="<?=base_url()?>assets/c2.jpg" />
        </div>
        <div class="nav">
            <label for="img-1" class="prev">&#x2039;</label>
            <label for="img-3" class="next">&#x203a;</label>
        </div>
    </li>

    <input type="radio" name="radio-btn" id="img-3" />
    <li class="slide-container">
        <div class="slide">
          <img src="<?=base_url()?>assets/c3.jpg" />
        </div>
        <div class="nav">
            <label for="img-2" class="prev">&#x2039;</label>
            <label for="img-4" class="next">&#x203a;</label>
        </div>
    </li>

    <input type="radio" name="radio-btn" id="img-4" />
    <li class="slide-container">
        <div class="slide">
          <img src="<?=base_url()?>assets/c4.jpg" />
        </div>
        <div class="nav">
            <label for="img-3" class="prev">&#x2039;</label>
            <label for="img-5" class="next">&#x203a;</label>
        </div>
    </li>

    <input type="radio" name="radio-btn" id="img-5" />
    <li class="slide-container">
        <div class="slide">
          <img src="<?=base_url()?>assets/c5.jpg" />
        </div>
        <div class="nav">
            <label for="img-4" class="prev">&#x2039;</label>
            <label for="img-1" class="next">&#x203a;</label>
        </div>
    </li>

    <li class="nav-dots">
      <label for="img-1" class="nav-dot" id="img-dot-1"></label>
      <label for="img-2" class="nav-dot" id="img-dot-2"></label>
      <label for="img-3" class="nav-dot" id="img-dot-3"></label>
      <label for="img-4" class="nav-dot" id="img-dot-4"></label>
      <label for="img-5" class="nav-dot" id="img-dot-5"></label>
    </li>
</ul>
</body>
</html>