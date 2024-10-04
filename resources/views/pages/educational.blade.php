<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Educational Background</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f2f5;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }

        .education-container {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 600px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .education-container:hover {
            transform: translateY(-10px);
        }

        .education-header {
            background: linear-gradient(135deg, #2ecc71, #27ae60);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .education-header h1 {
            font-size: 28px;
            font-weight: bold;
        }

        .education-details {
            padding: 30px;
        }

        .education-item {
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e0e0e0;
        }

        .education-item:last-child {
            border-bottom: none;
        }

        .education-item h2 {
            font-size: 20px;
            color: #3498db;
            margin-bottom: 10px;
        }

        .education-item p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .education-item ul {
            padding-left: 20px;
            list-style-type: disc;
        }

        .education-item li {
            font-size: 16px;
            color: #555;
            margin-bottom: 8px;
        }

        .home-link {
            display: inline-block;
            margin: 15px;
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .home-link:hover {
            color: #2ecc71;
        }
    </style>
</head>
<body>
    <div class="education-container">
        <a href="{{ url('/home') }}" class="home-link">Home</a>

        <header class="education-header">
            <h1>Educational Background</h1>
        </header>
        
        <div class="education-details">
            @foreach($education as $edu)
                <div class="education-item">
                    <h2>{{ $edu['degree'] }}</h2>
                    <p><strong>{{ $edu['institution'] }}</strong> - {{ $edu['duration'] }}</p>
                    <p>{{ $edu['description'] }}</p>
                </div>
            @endforeach

            <div class="education-item">
                <h2>Certifications</h2>
                <ul>
                    @foreach($certifications as $certification)
                        <li>{{ $certification }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>
</html>