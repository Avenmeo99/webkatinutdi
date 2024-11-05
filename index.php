<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTDI Kantin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #1e1e1e;
            color: #ffffff;
        }
        .logo {
            font-size: 24px;
            font-weight: 700;
            color: #d4a373;
        }
        .main-content h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .main-content h1 span {
            color: #d4a373;
        }
        .main-content p {
            font-size: 18px;
            margin-bottom: 30px;
        }
        .main-content .buttons a {
            padding: 15px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
        }
        .main-content .buttons .explore-btn {
            background-color: #d4a373;
            color: #1e1e1e;
        }
        .main-content .buttons .order-btn {
            background-color: #333333;
            color: #ffffff;
        }
        .main-content .ratings .rating {
            background-color: #333333;
            padding: 10px 20px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .main-content .ratings .rating i {
            color: #d4a373;
        }
        .product {
            background-color: #333333;
            border-radius: 10px;
            overflow: hidden;
            text-align: left;
        }
        .product img {
            width: 100%;
            height: auto;
        }
        .product .content {
            padding: 20px;
        }
        .product .content h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .product .content p {
            font-size: 14px;
            margin-bottom: 20px;
        }
        .product .content .rating i {
            color: #d4a373;
        }
        .product .content .more-btn {
            background-color: #1e1e1e;
            color: #d4a373;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
        }
        .login-section {
            background-color: #333333;
            padding: 50px 20px;
            border-radius: 10px;
            margin-top: 50px;
            text-align: center;
        }
        .login-section h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }
        .login-section form input {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
        }
        .login-section form button {
            width: 100%;
            padding: 15px;
            background-color: #d4a373;
            color: #1e1e1e;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
        }
        .footer {
            background-color: #333333;
            padding: 20px;
            text-align: center;
            margin-top: 50px;
            border-radius: 10px;
        }
        .footer p {
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header d-flex justify-content-between align-items-center py-3">
            <div class="logo">AD Cafe</div>
            <nav>
                <a href="#" class="text-white mx-2">Home</a>
                <a href="#" class="text-white mx-2">About</a>
                <a href="#" class="text-white mx-2">Product</a>
                <a href="#" class="text-white mx-2">Category</a>
                <a href="#" class="text-white mx-2">Contact</a>
            </nav>
            <a class="btn btn-primary login-btn" href="#">Login</a>
        </header>
        <div class="main-content text-center py-5">
            <h1>Selamat datang di <span>UTDI Kantin</span></h1>
            <p>Menikmati menu menu dari kami .</p>
            <div class="buttons d-flex justify-content-center gap-3">
                <a class="btn explore-btn" href="#">Explore</a>
                <a class="btn order-btn" href="#">Order</a>
            </div>
            <div class="ratings d-flex justify-content-center gap-3 mt-4">
                <div class="rating d-flex align-items-center">
                    <i class="fas fa-star"></i>
                    <span>4.9 out of 5 </span>
                </div>
                <div class="rating d-flex align-items-center">
                    <i class="fas fa-star"></i>
                    <span>4.9 out of 5 </span>
                </div>
            </div>
        </div>
        <div class="products row">
            <div class="product col-md-3 mb-4">
                <img src="https://storage.googleapis.com/a1aa/image/fVc4GfWbYjrfLosR06RD3Sp6sK7n9O3Cg7yFJA9S7kvP7kbnA.jpg" alt="A coffee drink typically made from equal parts espresso and hot water, giving it a similar strength to but different flavor from drip coffee.">
                <div class="content p-3">
                    <h3>Americano</h3>
                    <p>A coffee drink typically made from equal parts espresso and hot water, giving it a similar strength to but different flavor from drip coffee.</p>
                    <div class="rating d-flex align-items-center">
                        <i class="fas fa-star"></i>
                        <span>(4.9)</span>
                    </div>
                    <a class="more-btn" href="#">More</a>
                </div>
            </div>
            <div class="product col-md-3 mb-4">
                <img src="https://storage.googleapis.com/a1aa/image/q2eFDzz2Mq3xbKsSLmuscgg7i30vBQAYDLhZc7hBCxc1O52JA.jpg" alt="Black coffee is a hot coffee beverage simply made.">
                <div class="content p-3">
                    <h3>Black Coffee</h3>
                    <p>Black coffee is a hot coffee beverage simply made.</p>
                    <div class="rating d-flex align-items-center">
                        <i class="fas fa-star"></i>
                        <span>(4.9)</span>
                    </div>
                    <a class="more-btn" href="#">More</a>
                </div>
            </div>
            <div class="product col-md-3 mb-4">
                <img src="https://storage.googleapis.com/a1aa/image/apZHftJeZvg2iUfvgSLPHf3xdv9UaEo5lgQjtzNVfVyxsTudC.jpg" alt="A coffee drink known for its chocolate sweet, rich, and creamy flavor.">
                <div class="content p-3">
                    <h3>Mocha</h3>
                    <p>A coffee drink known for its chocolate sweet, rich, and creamy flavor.</p>
                    <div class="rating d-flex align-items-center">
                        <i class="fas fa-star"></i>
                        <span>(4.9)</span>
                    </div>
                    <a class="more-btn" href="#">More</a>
                </div>
            </div>
            <div class="product col-md-3 mb-4">
                <img src="https://storage.googleapis.com/a1aa/image/j1omjgTSeiQxLqhgMXlOMe5WR40CNMWl3XkVUC1jfx5R7kbnA.jpg" alt="Breve is a coffee drink made with equal parts espresso and steamed half-and-half instead of milk.">
                <div class="content p-3">
                    <h3>Breve</h3>
                    <p>Breve is a coffee drink made with equal parts espresso and steamed half-and-half instead of milk.</p>
                    <div class="rating d-flex align-items-center">
                        <i class="fas fa-star"></i>
                        <span>(4.9)</span>
                    </div>
                    <a class="more-btn" href="#">More</a>
                </div>
            </div>
        </div>
        <div class="login-section">
            <h2>Login</h2>
            <form>
                <input type="email" placeholder="Email" class="form-control mb-3">
                <input type="password" placeholder="Password" class="form-control mb-3">
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        <footer class="footer mt-5">
            <p>&copy; 2023 UTDI Kantin. All rights reserved.</p>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>