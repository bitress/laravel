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
    background-color: #f4f4f4;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    height: 100vh;
}

.education-container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 500px;
    overflow: hidden;
}

.education-header {
    background-color: #2ecc71;
    color: white;
    padding: 20px;
    text-align: center;
}

.education-header h1 {
    font-size: 24px;
}

.education-details {
    padding: 20px;
}

.education-item {
    margin-bottom: 20px;
}

.education-item h2 {
    font-size: 18px;
    color: #3498db;
    margin-bottom: 5px;
}

.education-item p {
    font-size: 14px;
    color: #555;
    margin-bottom: 5px;
}

.education-item ul {
    padding-left: 20px;
    list-style-type: disc;
}

.education-item li {
    font-size: 14px;
    color: #555;
}

    </style>
</head>
<body>
    <div class="education-container">

            <a href="{{ url('/home') }}">Home</a>

        <header class="education-header">
            <h1>Educational Background</h1>
        </header>
        
        <div class="education-details">
            <div class="education-item">
                <h2>Bachelor of Science in Information Technology</h2>
                <p><strong>XYZ University</strong> - 2021 to present</p>
                <p>Specialized in Web Development, and IoT technologies.</p>
            </div>
            
            <div class="education-item">
                <h2>High School Diploma</h2>
                <p><strong>ABC High School</strong> - 2014 to 2018</p>
                <p>Participated in computer science clubs and science fairs, developed foundational skills in programming and electronics.</p>
            </div>

            <div class="education-item">
                <h2>Certifications</h2>
                <ul>
                    <li>Certified Python Developer - 2020</li>
                    <li>Web Development Bootcamp - 2021</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
