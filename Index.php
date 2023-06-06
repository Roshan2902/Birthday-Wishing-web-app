

<!DOCTYPE html>
    <head>
        <title>Magic World </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
        <!-- My Stylesheet -->
        <!-- <link rel="stylesheet" href="style.css"> -->

        <style type="text/css">
            body{
                background-color: black;
                color: white;
            }
            .main-content{
                margin-top: 5vw;
                text-align: center;
            }
            .main-content p{
                font-size: 55px;
                font-weight: 800;
            }
            .main-content h4{
                font-size: 35px;
                font-weight: 800;
            }
            label{
                font-size: 22px;
                font-weight: 600;
            }
            input{
                text-align: center;
                margin: 1vw;
                width: 25vw;
                height: 3vw;
                font-size: 16px;
                font-weight: 600;
            }
            button{
                width: 25vw;
                height: 4vw;
                font-size: 20px;
                font-weight: 600;
                background: -webkit-linear-gradient(#ffff00, #ff1493);
                border: none;
                border-radius: 5px;
                margin-top: 4vw;
            }
            button:hover{
                transform: scale(1.08);
            }
        </style>
    </head>

<body>

    <div class="main-content container">
        <p>Magic Page</p>
        <h4>Welcome to the Magic World</h4>               

        <div class="form">
            <form action=" display.php" method="POST">
               <label for="Ques"> Enter Your Name</label> <br>
                <input type="text" placeholder="Enter Your First Name" name="name" required> <br>
                <button type="submit" name="submit">Click To Show The Magic </button>
            </form>
        </div>
    </div>

</body>
</html>




