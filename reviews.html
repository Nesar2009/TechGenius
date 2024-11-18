<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Reviews</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #121212;
            color: #ffffff;
            min-height: 100vh;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-x: hidden;
        }

        header {
            width: 100%;
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
            margin-bottom: 30px;
            text-align: center;
        }

        header h1 {
            color: #f4a261;
            font-size: 2rem;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            padding: 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #f4a261;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #e38e43;
        }

        .container {
            width: 100%;
            max-width: 800px;
            background: #1e1e1e;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
        }

        .container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2rem;
            color: #f4a261;
            font-weight: 700;
        }

        .review-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .review-form input,
        .review-form textarea {
            width: 100%;
            padding: 15px;
            background: #2e2e2e;
            border: 1px solid #444;
            border-radius: 10px;
            outline: none;
            font-size: 1rem;
            color: #ffffff;
            transition: border-color 0.3s ease;
        }

        .review-form input:focus,
        .review-form textarea:focus {
            border-color: #f4a261;
        }

        .review-form button {
            width: 100%;
            border: none;
            border-radius: 10px;
            background-color: #f4a261;
            padding: 15px;
            cursor: pointer;
            color: #000;
            font-weight: 700;
            transition: background-color 0.3s;
            font-size: 1.1rem;
        }

        .review-form button:hover {
            background-color: #e38e43;
        }

        .star-rating {
            display: flex;
            justify-content: center;
            margin-bottom: 10px;
        }

        .star-rating i {
            font-size: 1.5rem;
            cursor: pointer;
            color: #444;
            transition: color 0.3s ease;
        }

        .star-rating i.active,
        .star-rating i:hover,
        .star-rating i:hover ~ i {
            color: #f4a261;
        }

        .reviews-list {
            margin-top: 30px;
        }

        .review {
            display: flex;
            flex-direction: column;
            padding: 20px;
            border-top: 1px solid #444;
            animation: fadeIn 0.5s ease-in-out;
        }

        .review h3 {
            font-size: 1.25rem;
            margin-bottom: 5px;
            font-weight: 500;
            color: #f4a261;
        }

        .review .review-text {
            font-size: 1rem;
            margin-bottom: 10px;
            line-height: 1.5;
            color: #bbb;
        }

        .review .review-stars {
            color: #f4a261;
        }

        .no-reviews {
            text-align: center;
            color: #888;
            margin-top: 20px;
            font-size: 1.1rem;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                gap: 10px;
            }

            .container {
                padding: 20px;
            }

            .review h3 {
                font-size: 1.1rem;
            }

            .review .review-text {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Customer Reviews</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="location.html">Location</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="plans.html">Subscriptions</a></li>
                <li><a href="status.html">Delivery</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1>Leave a Review</h1>
        <form class="review-form" id="reviewForm">
            <input type="text" id="reviewerName" placeholder="Your Name" required aria-label="Your Name">
            <textarea id="reviewText" rows="4" placeholder="Your Review" required aria-label="Your Review"></textarea>
            <div class="star-rating" id="starRating" role="radiogroup" aria-label="Rating">
                <i class="fas fa-star" data-star="1" role="radio" aria-checked="false" aria-label="1 star"></i>
                <i class="fas fa-star" data-star="2" role="radio" aria-checked="false" aria-label="2 stars"></i>
                <i class="fas fa-star" data-star="3" role="radio" aria-checked="false" aria-label="3 stars"></i>
                <i class="fas fa-star" data-star="4" role="radio" aria-checked="false" aria-label="4 stars"></i>
                <i class="fas fa-star" data-star="5" role="radio" aria-checked="false" aria-label="5 stars"></i>
            </div>
            <button type="submit">Submit Review</button>
        </form>
        <div class="reviews-list" id="reviewsList">
            <p class="no-reviews">No reviews yet.</p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const starRating = document.getElementById('starRating');
            const reviewForm = document.getElementById('reviewForm');
            const reviewsList = document.getElementById('reviewsList');
            let currentRating = 0;

            starRating.addEventListener('click', (event) => {
                if (event.target.matches('.fa-star')) {
                    currentRating = parseInt(event.target.dataset.star);
                    updateStarRating(currentRating);
                    updateAriaChecked(currentRating);
                }
            });

            reviewForm.addEventListener('submit', (event) => {
                event.preventDefault();
                const name = document.getElementById('reviewerName').value;
                const reviewText = document.getElementById('reviewText').value;

                if (currentRating > 0 && name && reviewText) {
                    addReview(name, reviewText, currentRating);
                    reviewForm.reset();
                    updateStarRating(0);
                    updateAriaChecked(0);
                    currentRating = 0;
                } else {
                    alert('Please fill out all fields and select a rating.');
                }
            });

            function updateStarRating(rating) {
                const stars = starRating.querySelectorAll('.fa-star');
                stars.forEach(star => {
                    star.classList.remove('active');
                    if (parseInt(star.dataset.star) <= rating) {
                        star.classList.add('active');
                    }
                });
            }

            function updateAriaChecked(rating) {
                const stars = starRating.querySelectorAll('.fa-star');
                stars.forEach(star => {
                    star.setAttribute('aria-checked', 'false');
                    if (parseInt(star.dataset.star) === rating) {
                        star.setAttribute('aria-checked', 'true');
                    }
                });
            }

            function addReview(name, reviewText, rating) {
                const review = document.createElement('div');
                review.className = 'review';

                const reviewHeader = document.createElement('h3');
                reviewHeader.textContent = name;

                const reviewBody = document.createElement('p');
                reviewBody.className = 'review-text';
                reviewBody.textContent = reviewText;

                const reviewStars = document.createElement('div');
                reviewStars.className = 'review-stars';
                reviewStars.innerHTML = Array.from({ length: rating }).map(() => '<i class="fas fa-star"></i>').join('');

                review.appendChild(reviewHeader);
                review.appendChild(reviewBody);
                review.appendChild(reviewStars);

                if (reviewsList.querySelector('.no-reviews')) {
                    reviewsList.innerHTML = '';
                }

                reviewsList.appendChild(review);
            }
        });
    </script>
</body>
</html>
