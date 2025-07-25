<?php
// Start the session at the beginning of every page
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="navstyles.css">
    <style>
        /* General header styles */
header {
    background-color: #ffffff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    top: 0;
    z-index: 100;
    width: 100vw;
    box-sizing: border-box;
}

.logo-title {
    display: flex;
    align-items: center;
}

.logo {
    height: 40px;
    margin-right: 15px;
}

.logo-title h1 {
    font-size: 18px;
    margin: 0;
    color: #333;
}

/* Navigation styles */
nav ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
    align-items: center;
}

nav li {
    margin: 0 10px;
    position: relative;
}

nav a {
    text-decoration: none;
    color: #333;
    font-weight: 500;
    padding: 10px;
    display: block;
    transition: color 0.3s;
}

nav a:hover {
    color: #4a90e2;
}

/* Profile icon styles */
.profile-dropdown {
    position: relative;
}

.profile-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
    cursor: pointer;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    transition: transform 0.2s;
}

.profile-icon:hover {
    transform: scale(1.05);
}

.profile-icon:active {
    transform: scale(0.95);
}

.profile-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Dropdown menu - Hidden by default */
.dropdown-menu {
    position: absolute;
    top: calc(100% + 10px);
    right: 0;
    background-color: white;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    width: 220px;
    display: none;
    opacity: 0;
    visibility: hidden;
    z-index: 1000;
    overflow: hidden;
    transition: all 0.3s ease;
}

/* Show the dropdown menu when class 'show' is present */
.dropdown-menu.show {
    display: block;
    opacity: 1;
    visibility: visible;
    animation: fadeInUp 0.3s ease-out forwards;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Username display in dropdown */
.username-display {
    padding: 15px;
    font-weight: bold;
    color: #333;
    background-color: #f9f9f9;
    border-bottom: 1px solid #eee;
    display: flex;
    align-items: center;
    font-size: 15px;
}

.username-display i {
    margin-right: 10px;
    color: #4a90e2;
    font-size: 16px;
}

.dropdown-item {
    padding: 12px 15px;
    display: flex;
    align-items: center;
    color: #333;
    transition: all 0.2s;
    text-decoration: none;
    border-bottom: 1px solid #f0f0f0;
}

.dropdown-item:last-child {
    border-bottom: none;
}

.dropdown-item i {
    margin-right: 10px;
    width: 20px;
    text-align: center;
    font-size: 16px;
}

.dropdown-item:hover {
    background-color: #f5f5f5;
}

/* Logout button styling */
.logout-btn {
    color: #e74c3c;
}

.logout-btn i {
    color: #e74c3c;
}

.logout-btn:hover {
    background-color: #ffeeee;
    color: #c0392b;
}

/* Arrow pointing to profile icon */
.dropdown-menu::before {
    content: '';
    position: absolute;
    top: -8px;
    right: 15px;
    width: 0;
    height: 0;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    border-bottom: 8px solid white;
}

/* Responsive styles */
@media (max-width: 900px) {
    .logo-title h1 {
        font-size: 16px;
    }
}

@media (max-width: 768px) {
    header {
        flex-direction: column;
        padding: 10px;
    }

    .logo-title {
        margin-bottom: 12px;
        text-align: center;
        justify-content: center;
    }

    .logo-title h1 {
        font-size: 15px;
    }

    nav {
        width: 100%;
    }

    nav ul {
        flex-wrap: wrap;
        justify-content: center;
    }

    nav li {
        margin: 5px 8px;
    }
    
    .dropdown-menu {
        width: 200px;
        right: 50%;
        transform: translateX(50%);
    }
    
    .dropdown-menu::before {
        right: 50%;
        margin-right: -8px;
    }
    
    .dropdown-menu.show {
        animation: fadeInUpMobile 0.3s ease-out forwards;
    }
    
    @keyframes fadeInUpMobile {
        from {
            opacity: 0;
            transform: translateY(10px) translateX(50%);
        }
        to {
            opacity: 1;
            transform: translateY(0) translateX(50%);
        }
    }
}

@media (max-width: 480px) {
    .logo {
        height: 30px;
        margin-right: 10px;
    }
    
    .logo-title h1 {
        font-size: 13px;
    }

    nav a {
        padding: 8px;
        font-size: 13px;
    }
    
    .profile-icon {
        width: 35px;
        height: 35px;
    }
    
    .dropdown-menu {
        width: 180px;
    }
    
    .dropdown-item {
        padding: 10px 12px;
        font-size: 13px;
    }
    
    .username-display {
        padding: 12px;
        font-size: 13px;
    }
}

@media (max-width: 380px) {
    nav li {
        margin: 3px 5px;
    }
    
    nav a {
        padding: 6px;
        font-size: 12px;
    }
    
    .logo-title h1 {
        font-size: 12px;
    }
    
    .dropdown-menu {
        width: 160px;
    }
}
        body {
            font-family: "Arial", sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f4f4f4;
        }
        .hero {
            background-color: #ffffff;
            padding: 50px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 1px solid #eaeaea;
            text-align: center; /* Center align the text */
            flex-grow: 1; /* Make the hero section grow to fill available space */
        }
        
        .hero-image{
            position: absolute;
            width: 100vw;
            height: 100vh;
            background-image: url("canteen_image.jpg");
            
            opacity: 0.5;
            

        }
        .hero .text-content {
            z-index: 1;
            max-width: 45%;
            margin-right: 20px; /* Add space between text and image */
        }
        .hero h1 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 16px;
            margin-bottom: 40px;
            color: #666;
        }
        .hero img {
            width: 45%; /* Adjust the width as needed */
            height: auto; /* Maintain the aspect ratio */
            max-height: 400px; /* Set a maximum height */
            flex-shrink: 50; /* Prevent the image from shrinking */
        }
        .button {
            background-color: #4a90e2;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
        }
        .button:hover {
            background-color: #357abd;
        }
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: sticky;
            bottom: 0;
            width: 98.7vw;
        }
        .footer a {
            color: #4a90e2;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                padding: 10px;
            }

            .main-content {
                width: 100%;
                padding: 10px;
            }
            
            .hero {
                flex-direction: column;
            }
            
            .hero .text-content {
                max-width: 100%;
                margin-right: 0;
                margin-bottom: 20px;
            }
            
            .footer{
    
                width: 95vw;

            }
            .hero img {
                width: 80%;
            }
        }
        #floater {
            display: none;
            position: absolute;
            bottom: 60px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 100;
            text-align: center;
            transition: opacity 0.3s ease-in-out;
             
            flex-direction:column;
            align-items:flex-start;
        }
        #floater h1 {
            font-size: 16px;
            margin: 8px 0;
            font-weight: normal;
        }
        #develop {
            cursor: pointer;
            transition: color 0.3s;
        }
        #develop:hover {
            color: #4a90e2;
        }
    </style>
</head>
<body>
    <?php include('navbar.php'); ?>
    
    
    <div class="hero">
        <div class="text-content">
            <h1>Welcome to PSG Institute of Technology and Applied Research Printing Services</h1>
            <p>Providing high-quality printing services to students and faculty.</p>
            <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                <a class="button" href="combined_form.php">Place an Order</a>
                <?php else: ?>
                    <a class="button" href="login.php">Get Started</a>
                    <?php endif; ?>
                </div>
                <!-- <img src="canteen_image.jpg" alt="Printer Image"> -->
            </div>
            
    <div class="hero-image"></div>
    <div class="footer">
        <p>&copy; 2025 PSG Institute of Technology and Applied Research. All rights reserved.</p>
        <p id="develop"><strong >DEVELOPED BY SDC </strong></p>
        <div id="floater">
        <h1>Abinaya Devadarshini D - 22CSE</h1>
            <h1>Sangamithra Saravanan - 22CSE</h1>
            <h1>Soorya S S - 23CSBS</h1>
            <h1>Karthika S - 22CSE</h1>
            <h1>Madhumitha - 22CSE</h1>
            <h1>Hemanth R - 23CSBS</h1>
        </div>
    </div>
    <script>
    let developTag= document.getElementById('develop');
    let floaterTag= document.getElementById('floater');
console.log("kkk");

    developTag.addEventListener('mouseover',()=>{
        
        
        floaterTag.style.display="flex";
    },true);
    developTag.addEventListener('mouseout',()=>{
         
        floaterTag.style.display="none";
    },true)
</script>
</body>

</html>