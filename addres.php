<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paying with Card</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #121212;
            color: #ddd;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        form {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            background-color: #1f1f1f;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #f39c12;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="tel"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #444;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            background-color: #222;
            color: #ddd;
        }

        input[type="submit"] {
            background-color: #f39c12;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #e67e22;
        }

        .button {
            display: block;
            padding: 10px 20px;
            margin: 10px auto;
            background-color: #f39c12;
            color: white;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 16px;
            font-weight: 600;
        }

        .button:hover {
            background-color: #e67e22;
        }
    </style>
</head>
<body>

<form action="process_cod.php" method="post">
    <h2>Paying with Card</h2>
    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" required>

    <label for="address">Address:</label>
    <textarea id="address" name="address" rows="2" required></textarea>

    <label for="Email">Email:</label>
    <textarea id="Email" name="Email" rows="2" required></textarea>

    <label for="additional_info">Additional Information (Optional):</label>
    <textarea id="additional_info" name="additional_info" rows="4"></textarea>

    <a href="kartela.html" class="button">Confirm Order</a>
</form>

</body>
</html>
