<?php
    session_start();
    $conn=mysqli_connect('127.0.0.1','root','mysql123','debt_splitter');
    if(!$conn)
        die("Failed to connect to database".mysqli_connect_error());
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Debt Splitter</title>
        <style>
        @import url("https://fonts.googleapis.com/css?family=Lato:400,700");

        #bg {
            background-image: url('img/person.jpg');
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            filter: blur(2px);
        }

        body {
            font-family: 'Lato', sans-serif;
            color: #4A4A4A;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        form {
            width: 350px;
            position: relative;
        }

        form .form-field::before {
            font-size: 20px;
            position: absolute;
            left: 15px;
            top: 17px;
            color: #888888;
            content: " ";
            display: block;
            background-size: cover;
            background-repeat: no-repeat;
        }

        form .form-field:nth-child(1)::before {
            background-image: url(img/user-icon.png);
            width: 20px;
            height: 20px;
            top: 15px;
        }

        form .form-field:nth-child(2)::before {
            background-image: url(img/user-icon.png);
            width: 20px;
            height: 20px;
            top: 15px;
        }

        form .form-field:nth-child(3)::before {
            background-image: url(img/user-icon.png);
            width: 20px;
            height: 20px;
            top: 15px;
        }

        form .form-field:nth-child(4)::before {
            background-image: url(img/user-icon.png);
            width: 20px;
            height: 20px;
            top: 15px;
        }

        form .form-field:nth-child(5)::before {
            background-image: url(img/user-icon.png);
            width: 20px;
            height: 20px;
            top: 15px;
        }

        form .form-field {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 1rem;
            position: relative;
        }

        form input {
            font-family: inherit;
            width: 100%;
            outline: none;
            background-color: #fff;
            border-radius: 4px;
            border: none;
            display: block;
            padding: 0.9rem 0.7rem;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
            font-size: 17px;
            color: #4A4A4A;
            text-indent: 40px;
        }

        form .btn {
            outline: none;
            border: none;
            cursor: pointer;
            display: inline-block;
            margin: 0 auto;
            padding: 0.9rem 2.5rem;
            text-align: center;
            background-color: #47AB11;
            color: #fff;
            border-radius: 4px;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
            font-size: 17px;
        }
    </style>
    </head>
    <body>
    <div id="bg"></div>

    <form action="amt_5.php" method="post" id="resultformclass">
        <div class="form-field">
            <input type="text" name='name1' placeholder="Enter name of person 1" required />
        </div>
        <div class="form-field">
            <input type="text" name='name2' placeholder="Enter name of person 2" required />
        </div>
        <div class="form-field">
            <input type="text" name='name3' placeholder="Enter name of person 3" required />
        </div>
        <div class="form-field">
            <input type="text" name='name4' placeholder="Enter name of person 4" required />
        </div>
        <div class="form-field">
            <input type="text" name='name5' placeholder="Enter name of person 5" required />
        </div>
        <div class="form-field">
            <button class="btn" type="submit">Proceed</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
    </html>

