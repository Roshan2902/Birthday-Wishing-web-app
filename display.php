<!DOCTYPE html>
    <head>
        <title>Happy Birthday Wishing - Chamaparan Now </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <!-- My Stylesheet -->
        <link rel="stylesheet" href="style.css">
    </head>

<body>

<div class="container-fluid p-4">
    <div class="wish">
        Happy Birthday
    </div>
    <div class="cake">
        <div class="plate"></div>
        <div class="layer"></div>
        <div class="icing">
            <div class="name">
                <?php
                    error_reporting(0);
                    if(isset($_POST['submit'])){
                        $name= $_POST['name'];
                        // $name= "name";
                        ?>
                        <p>Happy Birthday <br/> <span id="name"><?php echo "$name";?></span></p>
                        <?php
                    }
                ?>
            </div>
        </div>
        <div class="candle1">
            <div class="flame1"></div>
        </div>
        <div class="candle2">
            <div class="flame2"></div>
        </div>
        <div class="candle3">
            <div class="flame3"></div>
        </div>
        <div class="candle4">
            <div class="flame4"></div>
        </div>
        <div class="candle5">
            <div class="flame5"></div>
        </div>
    </div>
    <div class ="text">May all your dreams come true and May God crown you with all the success in life. Wishing you many returns of this day. Happy birthday! Dear...</div>
</div>



    <!-- <div class="container frame-img">
       <img src="https://cdn.pixabay.com/photo/2016/09/06/15/16/autumn-1649362_960_720.jpg" alt="image">
    </div> -->



<div class="footer bg-dark text-center text-light mt-0 p-4"><b> Design By Manoj Kumar </b></div>



    <audio controls autoplay id="HBD" loop>
        <source src="https://dl.dropbox.com/s/57hjcyz47o4us25/audio.mp3" type="audio/mpeg">
    </audio>
    <!-- JavaScript Page -->
    <script src="function.js" type="text/javascript"></script>
</body>
</html>