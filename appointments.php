<?php
include 'connection.php'; 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENT Care Hub</title>
    <style>
        body {
            font-family: Helvetica, sans-serif;
            text-align: center;
            background-color: grey;
            
        }
        h1 {
            color: blue;
    
        }
        p{
            color: white;
        }
        .logo {
            width: 75px;
            
        }
        .navbar {
            display: flex;
            justify-content: space-around;
            background-color: blue;
            padding: 5px;
        }
        .nav-item {
            position: relative;
            flex-grow: 1;
            margin: 5px;
            padding: 10px;
            color: white;
            cursor: pointer;
        }
        .dropdown {
            display: none;
            position: absolute;
            top: 40px;
            left: 0;
            background-color: white;
            min-width: 200px;
        }
        .dropdown a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: black;
        }
        .dropdown a:hover {
            background-color: #f1f1f1;
        }
        .nav-item:hover .dropdown,
        .nav-item.active .dropdown {
            display: block;
        }
    </style>
    <script>
        function toggleDropdown(event) {
            let dropdowns = document.querySelectorAll('.nav-item');
            dropdowns.forEach(item => {
                if (item !== event.currentTarget) {
                    item.classList.remove('active');
                }
            });
            event.currentTarget.classList.toggle('active');
        }
        function logoclick(){
            alert("ENT HUB LOGO")
        }
        function homeclick(){
            window.location.href = "enthub.php";
        }
        function consultclick(){
            window.location.href = "consultants.php";
        }
        function specialclick(){
            window.location.href = "specialities.php";
        }
        function storyclick(){
            window.location.href = "story.php";
        }
         function misvisclick(){
            window.location.href = "misvis.php";
        } 
        function careerclick(){
            window.location.href = "career.php";
        }
         function appointclick(){
            window.location.href = "appointments.php";
        } 
        function supportclick(){
            window.location.href = "supports.php";
        } 
        function locationclick(){
            window.location.href = "location.php";
        } 
         function gitclick(){
            window.location.href = "git.php";
        }
       
        
    </script>
</head>
<body>
	<img src="logo.png" alt="ENT HUB LOGO" class="logo" onclick="logoclick()">
    <h1>Appointments</h1>
    <p>Leading private healthcare provider in the East Midlands specialising in ENT (Ear, Nose, Throat) health services.</p>
    
    
    <div class="navbar">
        <div class="nav-item" onclick="homeclick()">Home
            <div class="dropdown">
               
            </div>
        </div>
        <div class="nav-item" onclick="toggleDropdown(event)">Consultants
            <div class="dropdown">
                <a onclick = "consultclick()">Find a Consultant</a>
                <a onclick="specialclick()">Specialties</a>
                <a onclick="appointclick()">Book an Appointment</a>
            </div>
        </div>
        <div class="nav-item" onclick="toggleDropdown(event)">About
            <div class="dropdown">
                <a onclick ="storyclick()">Our Story</a>
                <a onclick =" misvisclick()">Mission & Vision</a>
                <a onclick ="careerclick()">Careers</a>
            </div>
        </div>
        <div class="nav-item" onclick="toggleDropdown(event)">Contact
            <div class="dropdown">
                <a onclick="supportclick()">Support</a>
                <a onclick="locationclick()">Location</a>
                <a onclick="gitclick()">Get in Touch</a>
        
                
            </div>
        </div>
    </div>
</body>
</html>
