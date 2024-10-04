<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

nav {
    background-color: #2c3e50;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.nav-menu {
    list-style-type: none;
    display: flex;
    justify-content: space-around;
}

.nav-menu li {
    margin: 0 15px;
}

.nav-menu a {
    text-decoration: none;
    color: white;
    font-size: 18px;
    font-weight: bold;
    padding: 10px 20px;
    background-color: #3498db;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.nav-menu a:hover {
    background-color: #2980b9;
}

    </style>
</head>
<body>

    <nav>
        <ul class="nav-menu">
            <li><a href="{{ url('/profile') }}">Profile</a></li>
            <li><a href="{{ url('/educational-background') }}">Educational Background</a></li>
        </ul>
    </nav>

</body>
</html>
