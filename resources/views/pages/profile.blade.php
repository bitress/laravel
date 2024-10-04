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
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 350px;
}

.profile-header {
    background-color: #3498db;
    color: white;
    text-align: center;
    padding: 30px 20px;
}

.profile-header .profile-image {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    border: 4px solid white;
    margin-bottom: 10px;
}

.profile-header h1 {
    font-size: 24px;
    margin-bottom: 10px;
}

.profile-header .bio {
    font-size: 14px;
    font-style: italic;
}

.profile-details {
    padding: 20px;
}

.profile-details h2 {
    font-size: 18px;
    margin-bottom: 10px;
    color: #333;
}

.profile-details p, .profile-details ul {
    font-size: 14px;
    color: #666;
    margin-bottom: 10px;
}

.profile-details ul {
    list-style-type: square;
    padding-left: 20px;
}

.profile-details li {
    margin-bottom: 5px;
}

    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
        <a href="{{url('/home') }}">Home</a>
        
        <h1>
            {{ $data }}
        </h1>
            <p class="bio">Web Developer | Tech Enthusiast | Raspberry Pi Fan</p>
        </div>
        <div class="profile-details">
            <h2>About Me</h2>
            <p>Lastname: {{ $lastname }}, {{ $firstname }}</p>
            
            <h2>Skills</h2>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>Python</li>
            </ul>

            <h2>Contact</h2>
            <p>Email: yourname@example.com</p>
            <p>Phone: +123456789</p>
        </div>
    </div>
</body>
</html>
