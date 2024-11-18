<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Analytics Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
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
        .dashboard {
            width: 100%;
            max-width: 1200px;
            background: #1E1E1E;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            padding: 20px;
        }
        .dashboard h1 {
            text-align: center;
            font-size: 2rem;
            font-weight: 600;
            color: orange;
            margin-bottom: 20px;
        }
        .metrics, .charts {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .metric, .chart {
            background: #2E2E2E;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
            flex: 1 1 calc(33% - 20px);
            text-align: center;
        }
        .metric h2, .chart h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: orange;
        }
        .metric p {
            font-size: 1.25rem;
            color: #ffffff;
        }
        .chart canvas {
            max-width: 100%;
        }
        @media (max-width: 768px) {
            .metric, .chart {
                flex: 1 1 calc(50% - 20px);
            }
        }
        @media (max-width: 480px) {
            .metric, .chart {
                flex: 1 1 100%;
            }
        }
        .back-button {
            display: inline-block;
            text-align: center;
            margin-top: 20px;
        }
        .back-button a {
            font-size: 16px;
            color: orange;
            text-decoration: none;
            padding: 10px 20px;
            border: 2px solid orange;
            border-radius: 35px;
            transition: all 0.3s ease;
        }
        .back-button a:hover {
            background: orange;
            color: #1E1E1E;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>Company Analytics Dashboard</h1>
        <div class="metrics">
            <div class="metric">
                <h2>Total Sales (this month)</h2>
                <p id="total-sales">$0</p>
            </div>
            <div class="metric">
                <h2>Total Revenue(this month)</h2>
                <p id="total-revenue">$0</p>
            </div>
            <div class="metric">
                <h2>Total Profits(this month)</h2>
                <p id="total-profits">$0</p>
            </div>
        </div>
        <div class="charts">
            <div class="chart">
                <h2>Top-Selling Products</h2>
                <canvas id="top-products-chart"></canvas>
            </div>
            <div class="chart">
                <h2>Monthly Sales</h2>
                <canvas id="monthly-sales-chart"></canvas>
            </div>
        </div>
        <div class="back-button">
            <a href="work.html">Back to Work</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const totalSales = 5000;
            const totalRevenue = 1200000;
            const totalProfits = 600000;

            document.getElementById("total-sales").textContent = `$${totalSales.toLocaleString()}`;
            document.getElementById("total-revenue").textContent = `$${totalRevenue.toLocaleString()}`;
            document.getElementById("total-profits").textContent = `$${totalProfits.toLocaleString()}`;

            const topProductsCtx = document.getElementById('top-products-chart').getContext('2d');
            const topProductsChart = new Chart(topProductsCtx, {
                type: 'bar',
                data: {
                    labels: ['PS5', 'Graphics Card', 'Monitor', 'Macbook', 'Apple VR '],
                    datasets: [{
                        label: 'Sales',
                        data: [1200, 1900, 3000, 500, 2000],
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            const monthlySalesCtx = document.getElementById('monthly-sales-chart').getContext('2d');
            const monthlySalesChart = new Chart(monthlySalesCtx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                    datasets: [{
                        label: 'Revenue',
                        data: [150000, 200000, 300000, 250000, 350000, 450000],
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
