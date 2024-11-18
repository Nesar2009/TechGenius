<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package Order Status</title>
    <link rel="stylesheet" href="https://kit.fontawesome.com/92d70a2fd8.css" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #121212;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #1e1e1e;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            text-align: center;
            max-width: 600px;
            width: 100%;
        }
        h1 {
            margin-bottom: 20px;
            color: #f39c12;
            font-size: 24px;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #f39c12;
        }
        input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #333;
            background-color: #333;
            color: #fff;
            font-size: 16px;
        }
        .button {
            background-color: #f39c12;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            margin-top: 10px;
            width: 100%;
        }
        .button:hover {
            background-color: #e67e22;
        }
        .button-home {
            background-color: #e67e22;
            margin-top: 20px;
        }
        .button-home:hover {
            background-color: #d35400;
        }
        .order-number,
        .order-details,
        .status,
        .status-description {
            margin-bottom: 20px;
        }
        .order-number {
            font-size: 18px;
            font-weight: bold;
        }
        .order-details p {
            margin: 5px 0;
            font-size: 16px;
        }
        .status {
            font-size: 24px;
            font-weight: bold;
        }
        .progress-bar {
            width: 100%;
            background-color: #333;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 20px;
            height: 10px;
        }
        .progress {
            height: 10px;
            background-color: #f39c12;
            width: 0%;
            transition: width 0.3s;
        }
        .package-details {
            display: none;
            text-align: left;
        }
        .status-icon {
            font-size: 24px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Package Order Status</h1>
        <div class="form-group">
            <label for="trackingNumber">Enter Tracking Number:</label>
            <input type="text" id="trackingNumber" placeholder="Tracking Number">
        </div>
        <button class="button" onclick="getPackageDetails()">Get Status</button>
        <div class="package-details" id="packageDetails">
            <div class="order-number">Order Number: <span id="orderNumber"></span></div>
            <div class="order-details">
                <p>Order Date: <span id="orderDate"></span></p>
                <p>Estimated Delivery Date: <span id="deliveryDate"></span></p>
            </div>
            <p class="status"><i class="fas fa-box status-icon" id="statusIcon"></i><span id="status">Order Placed</span></p>
            <div class="progress-bar">
                <div class="progress" id="progress"></div>
            </div>
            <p class="status-description" id="statusDescription">Your order has been placed.</p>
            <button class="button button-home" onclick="goHome()">Back to Home</button>
        </div>
    </div>

    <script>
        function generateOrderNumber() {
            return Math.floor(Math.random() * 1000000000);
        }

        function getOrderDate() {
            const date = new Date();
            return date.toLocaleDateString();
        }

        function getEstimatedDeliveryDate() {
            const date = new Date();
            date.setDate(date.getDate() + 7);
            return date.toLocaleDateString();
        }

        function goHome() {
            window.location.href = 'totali3.html';
        }

        function getPackageDetails() {
            const trackingNumber = document.getElementById('trackingNumber').value;
            if (trackingNumber) {
                document.getElementById('orderNumber').textContent = generateOrderNumber();
                document.getElementById('orderDate').textContent = getOrderDate();
                document.getElementById('deliveryDate').textContent = getEstimatedDeliveryDate();
                document.getElementById('packageDetails').style.display = 'block';
                simulatePackageStatus();
            } else {
                alert('Please enter a tracking number.');
            }
        }

        function simulatePackageStatus() {
            setTimeout(() => {
                updateStatus('Being Delivered', 'Your order is on its way to you.', '#f39c12', 50, 'fa-truck');
            }, 5000); 

            setTimeout(() => {
                updateStatus('Delivered', 'Your order has been delivered.', '#27ae60', 100, 'fa-check-circle');
            }, 10000); 
        }

        function updateStatus(status, description, color, progress, icon) {
            document.getElementById('status').textContent = status;
            document.getElementById('status').style.color = color;
            document.getElementById('statusDescription').textContent = description;
            document.getElementById('progress').style.width = progress + '%';
            document.getElementById('statusIcon').className = `fas ${icon} status-icon`;
        }
    </script>
</body>
</html>
