<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Select Demo Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts for more aesthetic typography -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', 'Roboto', Arial, sans-serif;
            background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 24px;
            box-shadow: 0 12px 40px 0 rgba(31, 38, 135, 0.18);
            padding: 48px 36px 40px 36px;
            max-width: 420px;
            width: 92%;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .container::before {
            content: '';
            position: absolute;
            top: -60px;
            right: -60px;
            width: 140px;
            height: 140px;
            background: linear-gradient(135deg, #3a86ff 60%, #a8c0ff 100%);
            opacity: 0.13;
            border-radius: 50%;
            z-index: 0;
        }

        h1 {
            margin-bottom: 18px;
            color: #2d3a4b;
            font-weight: 700;
            font-size: 2.2rem;
            letter-spacing: 1.5px;
            font-family: 'Montserrat', Arial, sans-serif;
            z-index: 1;
            position: relative;
        }

        .subtitle {
            color: #6c7a89;
            font-size: 1.08rem;
            margin-bottom: 32px;
            font-family: 'Roboto', Arial, sans-serif;
            z-index: 1;
            position: relative;
        }

        .demo-buttons {
            display: flex;
            flex-direction: column;
            gap: 20px;
            z-index: 1;
            position: relative;
        }

        .demo-btn {
            padding: 15px 0;
            border: none;
            border-radius: 12px;
            background: linear-gradient(90deg, #3a86ff 60%, #4361ee 100%);
            color: #fff;
            font-size: 1.13rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.22s, transform 0.18s, box-shadow 0.18s;
            box-shadow: 0 3px 14px rgba(58, 134, 255, 0.10);
            text-decoration: none;
            letter-spacing: 1.2px;
            position: relative;
            overflow: hidden;
        }

        .demo-btn::after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 0;
            height: 100%;
            background: rgba(255, 255, 255, 0.13);
            transition: width 0.3s;
            z-index: 0;
        }

        .demo-btn:hover::after {
            width: 100%;
        }

        .demo-btn:hover {
            background: linear-gradient(90deg, #265bb5 60%, #3a86ff 100%);
            transform: translateY(-3px) scale(1.035);
            box-shadow: 0 6px 24px rgba(58, 134, 255, 0.13);
        }

        @media (max-width: 500px) {
            .container {
                padding: 28px 8px 22px 8px;
            }

            h1 {
                font-size: 1.25rem;
            }

            .subtitle {
                font-size: 0.98rem;
                margin-bottom: 22px;
            }

            .demo-btn {
                font-size: 1rem;
                padding: 12px 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Pilih Demo Desain</h1>
        <div class="subtitle">Jelajahi berbagai gaya homepage. Klik di bawah untuk melihat pratinjau setiap demo.</div>
        <div class="demo-buttons">
            <a href="{{ url('/home1') }}" class="demo-btn">Demo Desain 1</a>
            <a href="{{ url('/home2') }}" class="demo-btn">Demo Desain 2</a>
            <a href="{{ url('/home3') }}" class="demo-btn">Demo Desain 3</a>
            <a href="{{ url('/home4') }}" class="demo-btn">Demo Desain 4</a>
            <a href="{{ url('/home5') }}" class="demo-btn">Demo Desain 5</a>
            <a href="{{ url('/home6') }}" class="demo-btn">Demo Desain 6</a>
            <a href="{{ url('/home7') }}" class="demo-btn">Demo Desain 7</a>
            <a href="{{ url('/home8') }}" class="demo-btn">Demo Desain 8</a>
            <a href="{{ url('/home9') }}" class="demo-btn">Demo Desain 9</a>
            <a href="{{ url('/home10') }}" class="demo-btn">Demo Desain 10</a>
        </div>
    </div>
</body>

</html>