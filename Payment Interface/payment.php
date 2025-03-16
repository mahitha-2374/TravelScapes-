<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="images\download.png">
    <style>
        body {
            margin: 0;
            padding: 10px;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            background: linear-gradient(to bottom, #78C7D4, #005273);
        }

        .travel-content {
            position: absolute;
            left: 0;
            width: 45%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 20px;
            box-sizing: border-box;
        }

        .card-container {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 600px;
            background-color: #fff;
            border-radius: 20px 20px 0 0;
            box-shadow: 0px -5px 15px rgba(0, 0, 0, 0.2);
            opacity: 0;
            transform: translateY(100%);
            transition: transform 0.5s, opacity 0.5s;
            height: 100vh;
        }

        .card {
            padding: 20px;
        }

        .payment-button {
            text-align: center;
            margin-bottom: 20px;
            margin:20px;
        }

        .payment-button a {
            text-decoration: none;
        }

        .payment-button button {
            background-color: #6064b6;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .payment-button button:hover {
            background-color: #48508f;
        }
    </style>
</head>
<body>
    <div class="travel-content">
        <h3 style="margin:20px; padding:20px">Unlock your next adventure with hassle-free payments. From flights to accommodations, we make sure your travel dreams are just a click away!</h3>
        <br><br><br><br>
        <p style="margin:10px; padding:10px;"><i>"Embark on unforgettable journeys with our curated travel packages, designed to ignite your wanderlust and create memories that last a lifetime.
             Explore new horizons, indulge in diverse cultures, and embrace adventure with ease –
              because every journey begins with a single click. Discover the world with us and let your wanderlust thrive!"</i></p>
    </div>

    <div class="card-container">
        <div class="card">
            <h1>Pay using this QR Code</h1>
        <div>
            <img src="../images/ss.png" alt="QR Code" style="max-width: 90%; max-height:10%;">
            <img src="../images/QR_Code.jpeg" alt="QR Code" style="max-width:25%; max-height:30%;">
        </div>
            <div class="payment-button">
                <a href="success.html">
                    <button>Payment done</button>
                </a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const cardContainer = document.querySelector(".card-container");
            cardContainer.style.transform = "translateY(0)";
            cardContainer.style.opacity = "1";
        });
    </script>
</body>
</html>