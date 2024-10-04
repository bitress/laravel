<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profile-container {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            width: 400px;
            transition: transform 0.3s ease;
        }

        .profile-container:hover {
            transform: translateY(-10px);
        }

        .profile-header {
            background-color: #3498db;
            color: white;
            text-align: center;
            padding: 40px 20px;
            position: relative;
        }

        .profile-header .profile-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid white;
            margin-bottom: 15px;
        }

        .profile-header h1 {
            font-size: 26px;
            margin-bottom: 5px;
        }

        .profile-header .bio {
            font-size: 15px;
            font-style: italic;
        }

        .profile-details {
            padding: 25px;
        }

        .profile-details h2 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #333;
        }

        .profile-details p, .profile-details ul {
            font-size: 15px;
            color: #444;
            margin-bottom: 15px;
        }

        .profile-details ul {
            list-style-type: disc;
            padding-left: 25px;
        }

        .profile-details li {
            margin-bottom: 10px;
        }

        .home-link {
            margin-bottom: 20px;
            position: absolute;
            top: 15px;
            left: 15px;
            background: #ffffff;
            color: #3498db;
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .home-link:hover {
            background-color: #3498db;
            color: #ffffff;
        }

    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <a href="{{ url('/home') }}" class="home-link">Home</a>
            <h1>{{ $name }}</h1>
            <p class="bio">{{ $bio }}</p>
        </div>
        <div class="profile-details">
            
            <h2>Skills</h2>
            <ul>
                @foreach($skills as $skill)
                    <li>{{ $skill }}</li>
                @endforeach
            </ul>

            <h2>Contact</h2>
            <p>Email: {{ $email }}</p>
            <p>Phone: {{ $phone }}</p>
        </div>
    </div>
</body>
</html>