<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Portfolio</title>
    <style>
        /* CSS styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            position: relative;
            overflow: hidden;
        }
        .stars {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><circle cx="50%" cy="50%" r="1" fill="white"/><circle cx="30%" cy="70%" r="1" fill="white"/><circle cx="80%" cy="90%" r="1" fill="white"/><circle cx="10%" cy="30%" r="1" fill="white"/><circle cx="70%" cy="20%" r="1" fill="white"/><circle cx="90%" cy="50%" r="1" fill="white"/><circle cx="20%" cy="10%" r="1" fill="white"/><circle cx="40%" cy="40%" r="1" fill="white"/><circle cx="60%" cy="80%" r="1" fill="white"/><circle cx="5%" cy="90%" r="1" fill="white"/><circle cx="85%" cy="20%" r="1" fill="white"/><circle cx="75%" cy="70%" r="1" fill="white"/><circle cx="35%" cy="10%" r="1" fill="white"/><circle cx="50%" cy="40%" r="1" fill="white"/><circle cx="25%" cy="50%" r="1" fill="white"/><circle cx="90%" cy="30%" r="1" fill="white"/><circle cx="15%" cy="80%" r="1" fill="white"/><circle cx="70%" cy="60%" r="1" fill="white"/><circle cx="45%" cy="25%" r="1" fill="white"/><circle cx="80%" cy="45%" r="1" fill="white"/></svg>');
            animation: animateStars 30s linear infinite;
        }
        @keyframes animateStars {
            from {
                transform: translateY(0);
            }
            to {
                transform: translateY(-100vh);
            }
        }
        .container {
            text-align: center;
            animation: fadeIn 1s ease-in-out;
            z-index: 1;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        h1 {
            font-size: 2rem;
            color: #fff;
            animation: slideInDown 1s ease-in-out;
            text-shadow: 0 0 20px #fff;
        }
        @keyframes slideInDown {
            from {
                transform: translateY(-50px);
            }
            to {
                transform: translateY(0);
            }
        }
        p {
            font-size: 1.2rem;
            color: #fff;
            animation: fadeInUp 1s ease-in-out;
            text-shadow: 0 0 10px #fff;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .next-button {
            margin-top: 20px;
            animation: fadeIn 1s ease-in-out;
        }
        .next-button a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s; /* Menambahkan transition untuk efek animasi */
        }
        .next-button a:hover {
            background-color: #0056b3;
            transform: scale(1.1); /* Mengubah ukuran tombol saat dihover */
        }
    </style>
</head>
<body>
    <div class="stars"></div>
    <div class="container">
        <h1>Welcome to My Portofolio</h1>
        <p>Selamat Berimajinasi!</p>
        <div class="next-button">
            <a href="/portofolio" id="nextButton">Next</a>
        </div>
    </div>

    <script>
        document.getElementById("nextButton").addEventListener("click", function(event) {
            event.preventDefault(); // Mencegah perilaku default dari link
            
            // Menambahkan animasi zoom in
            document.querySelector('.container').style.animation = "zoomIn 0.5s ease";
            document.querySelector('.container').style.animationFillMode = "forwards";

            // Menunggu animasi selesai sebelum navigasi
            setTimeout(function() {
                window.location.href = event.target.href; // Navigasi ke link "Next"
            }, 500); // Sesuaikan dengan durasi animasi zoom in (dalam milidetik)
        });
    </script>

    <style>
        /* Menambahkan animasi zoomIn */
        @keyframes zoomIn {
            from {
                transform: scale(1.1); /* Ukuran zoom in */
            }
            to {
                transform: scale(1); /* Ukuran normal */
            }
        }
    </style>
</body>
</html>
