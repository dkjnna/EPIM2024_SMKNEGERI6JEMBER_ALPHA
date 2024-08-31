<?php include('koneksi.php')  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div class="container">

    <?php require("includes/navbar.php");?>
        <!-- dilaa -->
    <div class="home" id="home">
        <img src="assets/images/bg.jfif" alt="" class="bg-home">
        <div class="foto-home">
            <img src="assets/images/bruno.png" alt="" class="foto-bruno">
        </div>
        <div class="content-home">
            <h2 class="subtitle">Coming soon</h2>
            <h1 class="title">Bruno On Stage</h1>
            <h4 class="location">Jakarta International Stadium</h4>
            <div class="informasi">
                <p>Tour For  The latest Album – ‘24kmagic’</p>
                <p>Sunday, September 13th-14th, 2024</p>
            </div>
        </div>
    </div>
    <div class="c" style="background-color: white; justify-content: center; align-items: center;">
        <div class="subhome" style="justify-content: center; align-items: center;">
            <div class="content1">
                <div class="deskripsi">
                    <div>
                        <h1>The Bruno’s Concert</h1>
                        <P>Get ready for an unforgettable night as the sensational 
                            Bruno Mars takes the stage on his highly anticipated world 
                            tour! Known for his electrifying performances and 
                            chart-topping hits, Bruno Mars promises an evening filled 
                            with energy, emotion, and extraordinary music. Join us for 
                            an exhilarating journey through his greatest hits and 
                            experience the magic of live music like never before. 
                            This is a concert event you won’t want to miss!</P>
                    </div>
                    <a href="" class="button">Get Ticket</a>
                </div>

                <div class="album">
                    <div class="judul-album">
                        <span>A</span>
                        <span>L</span>
                        <span>B</span>
                        <span>U</span>
                        <span>M</span>
                    </div>
                    <div class="foto-album">
                        <img src="assets/images/24k.jpg" alt="" class="satu">
                        <img src="assets/images/monyet.jpg" alt="" class="dua">
                        <img src="assets/images/roket.jpg" alt="" class="tiga">
                        <img src="assets/images/sonic.jpg" alt="" class="empat">
                    </div>
                </div>
            </div>

            <div class="content2">
                <img src="assets/images/bruno-gitar.jpg" alt="" class="foto-bruno">
                <div class="deskripsi">
                    <h1>BRUNO MARS</h1>
                    <p>is now back to entertain us with his beautiful songs on tour.</p>
                    <h2>Get Your Own Ticket Now</h2>
                </div>
            </div>
        </div>

        <hr>

        <?php include("includes/about.php");?>
        

            <!-- abdil -->
        <?php include('includes/howtoorder.php') ?>
        <hr>

        <?php include('includes/ticket.php') ?>
        <hr>

        <?php include('includes/layout.php') ?>
        <hr>
        
        <?php include('includes/galery.php') ?>

        <?php include('includes/footer.php') ?> 


    </div>







    

    
</div>
<script src="assets/js/main.js"></script>

</body>
</html>