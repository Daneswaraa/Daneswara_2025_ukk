<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PKL SIJA - Portal Siswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }

        /* Floating shapes for unique design */
        .floating-shape {
            position: absolute;
            opacity: 0.1;
            pointer-events: none;
            animation: float 6s ease-in-out infinite;
        }

        .shape-1 {
            top: 10%;
            left: 5%;
            width: 80px;
            height: 80px;
            background: #667eea;
            border-radius: 50%;
            animation-delay: 0s;
        }

        .shape-2 {
            top: 70%;
            right: 10%;
            width: 120px;
            height: 120px;
            background: #764ba2;
            transform: rotate(45deg);
            animation-delay: 2s;
        }

        .shape-3 {
            bottom: 20%;
            left: 15%;
            width: 60px;
            height: 60px;
            background: #f093fb;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        .main-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 25px;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.1),
                0 0 0 1px rgba(255, 255, 255, 0.2);
            width: 100%;
            max-width: 1100px;
            min-height: 600px;
            position: relative;
            overflow: hidden;
        }

        .content-wrapper {
            display: flex;
            align-items: center;
            min-height: 600px;
            position: relative;
        }

        .left-section {
            flex: 1;
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        .welcome-badge {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
            width: fit-content;
            margin-bottom: 20px;
            letter-spacing: 0.5px;
            animation: slideInLeft 0.8s ease-out;
        }

        .main-title {
            font-size: 3.2rem;
            font-weight: 700;
            color: #2d3748;
            line-height: 1.2;
            margin-bottom: 15px;
            animation: slideInLeft 0.8s ease-out 0.2s both;
        }

        .subtitle {
            font-size: 1.3rem;
            font-weight: 600;
            background: linear-gradient(45deg, #667eea, #764ba2);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
            animation: slideInLeft 0.8s ease-out 0.4s both;
        }

        .description {
            font-size: 1.1rem;
            color: #718096;
            line-height: 1.6;
            margin-bottom: 40px;
            animation: slideInLeft 0.8s ease-out 0.6s both;
        }

        .button-group {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            animation: slideInUp 0.8s ease-out 0.8s both;
        }

        .btn {
            padding: 15px 30px;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 140px;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            background: rgba(113, 128, 150, 0.1);
            color: #4a5568;
            border: 2px solid rgba(113, 128, 150, 0.2);
        }

        .btn-secondary:hover {
            background: rgba(113, 128, 150, 0.15);
            border-color: rgba(113, 128, 150, 0.3);
            transform: translateY(-2px);
        }

        .right-section {
            flex: 1;
            padding: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .image-container {
            position: relative;
            animation: slideInRight 0.8s ease-out 0.4s both;
        }

        .main-image {
            width: 380px;
            height: 380px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .main-image:hover {
            transform: scale(1.02);
        }

        .image-decoration {
            position: absolute;
            width: 100px;
            height: 100px;
            background: linear-gradient(45deg, #f093fb, #f5576c);
            border-radius: 50%;
            top: -20px;
            right: -20px;
            opacity: 0.8;
            animation: pulse 3s ease-in-out infinite;
        }

        .image-decoration-2 {
            position: absolute;
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #4facfe, #00f2fe);
            border-radius: 12px;
            bottom: -15px;
            left: -15px;
            opacity: 0.7;
            animation: pulse 3s ease-in-out infinite 1.5s;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.7; }
            50% { transform: scale(1.1); opacity: 0.9; }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .content-wrapper {
                flex-direction: column;
                text-align: center;
            }

            .left-section {
                padding: 40px 30px 20px;
            }

            .right-section {
                padding: 20px 30px 40px;
            }

            .main-title {
                font-size: 2.5rem;
            }

            .subtitle {
                font-size: 1.1rem;
            }

            .description {
                font-size: 1rem;
            }

            .main-image {
                width: 300px;
                height: 300px;
            }

            .button-group {
                justify-content: center;
            }

            .btn {
                min-width: 120px;
                padding: 12px 24px;
            }
        }

        @media (max-width: 480px) {
            .main-container {
                margin: 10px;
                border-radius: 20px;
            }

            .left-section {
                padding: 30px 20px 15px;
            }

            .right-section {
                padding: 15px 20px 30px;
            }

            .main-title {
                font-size: 2rem;
            }

            .main-image {
                width: 250px;
                height: 250px;
            }

            .button-group {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 100%;
                max-width: 200px;
            }
        }
    </style>
</head>
<body>
    <!-- Floating shapes for decoration -->
    <div class="floating-shape shape-1"></div>
    <div class="floating-shape shape-2"></div>
    <div class="floating-shape shape-3"></div>

    <div class="main-container">
        <div class="content-wrapper">
            <!-- Left Section: Text Content -->
            <div class="left-section">
                <div class="welcome-badge">Selamat Datang</div>
                
                <h1 class="main-title">Portal PKL</h1>
                <h2 class="subtitle">SISTEM INFORMASI JARINGAN & APLIKASI</h2>
                
                <p class="description">
                    Akses mudah untuk mengelola kegiatan Praktik Kerja Lapangan (PKL) Anda. 
                    Pantau progress, upload laporan, dan berkomunikasi dengan pembimbing 
                    dalam satu platform terintegrasi.
                </p>

                <div class="button-group">
            <a href="{{ route('login') }}" class="btn btn-primary">
                Masuk
            </a>
            <a href="{{ route('register') }}" class="btn btn-secondary">
                Daftar
            </a>
        </div>
            </div>

            <!-- Right Section: Image -->
            <div class="right-section">
                <div class="image-container">
                    <img src="https://cdn.pixabay.com/photo/2020/07/08/04/12/work-5382501_1280.jpg" 
                         alt="Students working" class="main-image">
                    <div class="image-decoration"></div>
                    <div class="image-decoration-2"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showLogin() {
            alert('Fitur Login akan segera tersedia!\n\nAnda akan diarahkan ke halaman login.');
            // window.location.href = '/login';
        }

        function showRegister() {
            alert('Fitur Registrasi akan segera tersedia!\n\nAnda akan diarahkan ke halaman registrasi.');
            // window.location.href = '/register';
        }

        // Add some interactive hover effects
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.btn');
            const mainImage = document.querySelector('.main-image');
            
            buttons.forEach(button => {
                button.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-3px) scale(1.02)';
                });
                
                button.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Parallax effect for floating shapes
            document.addEventListener('mousemove', function(e) {
                const shapes = document.querySelectorAll('.floating-shape');
                const x = e.clientX / window.innerWidth;
                const y = e.clientY / window.innerHeight;
                
                shapes.forEach((shape, index) => {
                    const speed = (index + 1) * 10;
                    const xPos = x * speed;
                    const yPos = y * speed;
                    shape.style.transform += ` translate(${xPos}px, ${yPos}px)`;
                });
            });
        });
    </script>
</body>
</html>