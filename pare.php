<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Credit Card Form</title>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
            text-transform: uppercase;
        }

        body {
            background: #121212;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            color: #ffffff;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .container form {
            background: #1f1f1f;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            padding: 40px;
            width: 100%;
            max-width: 600px;
            margin-top: 30px;
            transition: transform 0.3s ease;
        }

        .container form:hover {
            transform: translateY(-10px);
        }

        .container form .inputBox {
            margin-top: 20px;
        }

        .container form .inputBox span {
            display: block;
            color: #999;
            padding-bottom: 5px;
        }

        .container form .inputBox input,
        .container form .inputBox select {
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            background: #333;
            color: #fff;
            font-size: 16px;
        }

        .container form .flexbox {
            display: flex;
            gap: 15px;
        }

        .container form .flexbox .inputBox {
            flex: 1 1 150px;
        }

        .container form .submit-btn {
            display: inline-block;
            text-align: center;
            width: 100%;
            background: linear-gradient(45deg, #8e44ad, #3498db);
            margin-top: 20px;
            padding: 15px;
            font-size: 20px;
            color: #fff;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.2s ease;
            position: relative;
            overflow: hidden;
        }

        .container form .submit-btn:hover {
            letter-spacing: 2px;
            opacity: 0.8;
        }

        .container form .submit-btn::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .container form .submit-btn:hover::before {
            opacity: 1;
        }

        .container .card-container {
            position: relative;
            height: 250px;
            width: 400px;
        }

        .container .card-container .front, .container .card-container .back {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            background: linear-gradient(45deg, #8e44ad, #3498db);
            border-radius: 10px;
            backface-visibility: hidden;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
            padding: 20px;
            transform: perspective(1000px) rotateY(0deg);
            transition: transform 0.4s ease-out;
        }

        .container .card-container .front .image,
        .container .card-container .back .box {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .container .card-container .front .image img,
        .container .card-container .back .box img {
            height: 50px;
        }

        .container .card-container .front .card-number-box {
            padding: 30px 0;
            font-size: 22px;
            color: #fff;
        }

        .container .card-container .front .flexbox {
            display: flex;
            justify-content: space-between;
        }

        .container .card-container .front .flexbox .box,
        .container .card-container .back .box span {
            font-size: 15px;
            color: #fff;
        }

        .container .card-container .back .stripe {
            background: #000;
            width: 100%;
            height: 50px;
            margin: 10px 0;
        }

        .container .card-container .back .box .cvv-box {
            height: 50px;
            padding: 10px;
            margin-top: 5px;
            color: #333;
            background: #fff;
            border-radius: 5px;
            width: 100%;
            text-align: right;
        }

        .container .card-container .back {
            transform: perspective(1000px) rotateY(180deg);
        }

        .tooltip {
            position: absolute;
            top: -40px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            opacity: 0;
            transition: opacity 0.3s;
            pointer-events: none;
        }

        .container form .submit-btn:hover .tooltip {
            opacity: 1;
        }

    </style>
</head>
<body>

<div class="container">

    <div class="card-container">

        <div class="front">
            <div class="image">
                <img src="chip.png" alt="chip">
                <img src="visa.png" alt="visa">
            </div>
            <div class="card-number-box">################</div>
            <div class="flexbox">
                <div class="box">
                    <span>card holder</span>
                    <div class="card-holder-name">full name</div>
                </div>
                <div class="box">
                    <span>expires</span>
                    <div class="expiration">
                        <span class="exp-month">mm</span>
                        <span class="exp-year">yy</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="back">
            <div class="stripe"></div>
            <div class="box">
                <span>cvv</span>
                <div class="cvv-box"></div>
                <img src="visa.png" alt="visa">
            </div>
        </div>

    </div>

    <form action="">
        <div class="inputBox">
            <span>card number</span>
            <input type="text" maxlength="16" class="card-number-input">
        </div>
        <div class="inputBox">
            <span>card holder</span>
            <input type="text" class="card-holder-input">
        </div>
        <div class="flexbox">
            <div class="inputBox">
                <span>expiration mm</span>
                <select name="" id="" class="month-input">
                    <option value="month" selected disabled>month</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="inputBox">
                <span>expiration yy</span>
                <select name="" id="" class="year-input">
                    <option value="year" selected disabled>year</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
            </div>
            <div class="inputBox">
                <span>cvv</span>
                <input type="text" maxlength="4" class="cvv-input">
            </div>
        </div>
        <a href="kartela.html" class="submit-btn">
            Submit
            <div class="tooltip">Click to submit your card details</div>
        </a>
    </form>

</div>    

<script>
    document.querySelector('.card-number-input').oninput = () => {
        document.querySelector('.card-number-box').innerText = document.querySelector('.card-number-input').value;
    }

    document.querySelector('.card-holder-input').oninput = () => {
        document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
    }

    document.querySelector('.month-input').oninput = () => {
        document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
    }

    document.querySelector('.year-input').oninput = () => {
        document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
    }

    document.querySelector('.cvv-input').onmouseenter = () => {
        document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
        document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
    }

    document.querySelector('.cvv-input').onmouseleave = () => {
        document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
        document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
    }

    document.querySelector('.cvv-input').oninput = () => {
        document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input').value;
    }
</script>

</body>
</html>
