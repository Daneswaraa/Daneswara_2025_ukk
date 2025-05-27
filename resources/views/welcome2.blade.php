<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, rgba(255, 255, 255, 0.9), rgba(112, 219, 140, 0.7)), url('https://cdn.pixabay.com/photo/2015/10/26/09/17/architecture-1004581_1280.jpg'); /* Gradien lembut dan gambar latar belakang */
            background-size: cover; /* Pastikan gambar menutupi seluruh layar */
            background-position: center; /* Pusatkan gambar */
            flex-direction: column;
        }


        /* body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('/images/smk.png'); /* Path ke foto Anda */
            background-size: cover; /* Agar gambar memenuhi seluruh halaman */
            background-position: center; /* Pusatkan gambar */
            background-repeat: no-repeat; /* Jangan ulangi gambar */
            flex-direction: column;
        } */

        .right img {
            max-width: 100%; /* Gambar akan menyesuaikan lebar kontainer */
            height: auto; /* Menjaga rasio aspek gambar */
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .container {
            text-align: center;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 1200px;
            padding: 40px;
        }
        
        h1 {
            color: #333;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .left {
            flex: 1;
            padding: 20px;
        }

        .left h2 {
            color: #4caf50;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .right {
            flex: 1;
            padding: 20px;
            text-align: center;
        }

        .right img {
            width: 200px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .button-container {
            margin-top: 20px;
        }

        button {
            background-color: #4caf50;
            color: white;
            font-size: 1.1rem;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        @media (max-width: 768px) {
            .content {
                flex-direction: column;
                align-items: center;
            }

            .left, .right {
                flex: none;
                width: 100%;
                margin: 10px 0;
            }
        }

        .left h2 {
            font-family:'Lobster', cursive;  /* Menggunakan font Poppins */
            color: #4caf50;
            font-size: 2.5rem; /* Ukuran font lebih besar */
            font-weight: 700;  /* Tebal */
            text-transform: uppercase;  /* Membuat semua huruf kapital */
            letter-spacing: 2px;  /* Memberikan jarak antar huruf */
            margin-bottom: 20px;
            text-align: center;  /* Meratakan teks di tengah */
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to the Application</h1>

        <div class="content">
            <div class="left">
                <h2> WEBSITE PKL SIJA</h2>
                <br></br>

                <a href="{{ route('login') }}">
                    <button>Login</button>
                </a>
            </div>

            <div class="right">
                <img src="https://cdn.pixabay.com/photo/2018/02/17/19/25/person-3160685_1280.png" alt="Profile Image">
                <div class="button-container">
                    
                </div>
            </div>
        </div>
    </div>

</body>
</html>
