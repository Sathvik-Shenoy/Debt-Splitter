<?php
    session_start();
    $conn=mysqli_connect('127.0.0.1','root','mysql123','debt_splitter');
    if(!$conn)
        die("Failed to connect to database".mysqli_connect_error());
    $name1=$_POST['name1'];
    $name2=$_POST['name2'];
    $name3=$_POST['name3'];
    $name4=$_POST['name4'];
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="debt.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Debt Splitter</title>
    </head>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Lato:400,700");

        #bg {
            background-image: url('img/lending money.jpg');
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            filter: blur(2px);
        }

        label{
            color:white;
        }
        body {
            font-family: 'Lato', sans-serif;
            color: #4A4A4A;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
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
            width: 20px;
            height: 20px;
            top: 15px;
        }

        form .form-field:nth-child(2)::before {
            width: 20px;
            height: 20px;
            top: 15px;
        }

        form .form-field:nth-child(3)::before {
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
    <body>
        <div id="bg"></div>
        <form action="calc_4.php" method="post" id="resultformclass">
            <label>Amount <?php echo $name1 ?> has to pay to <?php echo $name2 ?></label>
            <div class="form-field">
            <input type="text" name="amt_12" placeholder="Enter the amount">
            <br> 
    </div>
            <label>Amount <?php echo $name1 ?> has to pay to <?php echo $name3 ?></label>
            <div class="form-field">
            <input type="text" name="amt_13" placeholder="Enter the amount">
            <br>
    </div>
            <label>Amount <?php echo $name2 ?> has to pay to <?php echo $name1 ?></label>
            <div class="form-field">
            <input type="text" name="amt_21" placeholder="Enter the amount">
            <br>
    </div>
            <label>Amount <?php echo $name2 ?> has to pay to <?php echo $name3 ?></label>
            <div class="form-field">
            <input type="text" name="amt_23" placeholder="Enter the amount">
            <br>
    </div>
            <label>Amount <?php echo $name3 ?> has to pay to <?php echo $name1 ?></label>
            <div class="form-field">
            <input type="text" name="amt_31" placeholder="Enter the amount">
            <br>
    </div>
            <label>Amount <?php echo $name3 ?> has to pay to <?php echo $name2 ?></label>
            <div class="form-field">
            <input type="text" name="amt_32" placeholder="Enter the amount">
            <br>
    </div>
            <label>Amount <?php echo $name1 ?> has to pay to <?php echo $name4 ?></label>
            <div class="form-field">
            <input type="text" name="amt_14" placeholder="Enter the amount">
            <br>
    </div>
            <label>Amount <?php echo $name2 ?> has to pay to <?php echo $name4 ?></label>
            <div class="form-field">
            <input type="text" name="amt_24" placeholder="Enter the amount">
            <br>
    </div>
            <label>Amount <?php echo $name3 ?> has to pay to <?php echo $name4 ?></label>
            <div class="form-field">
            <input type="text" name="amt_34" placeholder="Enter the amount">
            <br>
    </div>
            <label>Amount <?php echo $name4 ?> has to pay to <?php echo $name1 ?></label>
            <div class="form-field">
            <input type="text" name="amt_41" placeholder="Enter the amount">
            <br>
    </div>
            <label>Amount <?php echo $name4 ?> has to pay to <?php echo $name2 ?></label>
            <div class="form-field">
            <input type="text" name="amt_42" placeholder="Enter the amount">
            <br>
    </div>
            <label>Amount <?php echo $name4 ?> has to pay to <?php echo $name3 ?></label>
            <div class="form-field">
            <input type="text" name="amt_43" placeholder="Enter the amount">
            <br>
    </div>
        <br>
        <a class="btn btn-primary sub2" onclick="document.getElementById('resultformclass').submit();">Submit</a>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
    </html>

