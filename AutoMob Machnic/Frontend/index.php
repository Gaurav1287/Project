<?php
session_start();
include 'db_php.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>AutoMob-Mechanic</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo"><a href="index.php"><img class="logoImg" src="logo.jpg" alt="Logo">AutoMob-Mechanic</a></div>
        <nav>
            <a href="#home"><i class="bi bi-house"></i> Home</a> |
            <a href="#about"><i class="bi bi-person"></i> About</a> |
            <a href="#services"><i class="bi bi-tools"></i> Services</a> |
            <a href="#contact-enquiry"><i class="bi bi-telephone"></i> Enquiry</a> |
            <?php if(isset($_SESSION['user_id'])): ?>
                <!-- <a href="php/profile.php">Profile</a> |
                <a href="php/logout.php">Logout</a> -->
            <?php else: ?>
                <a href="sign_in_frontend.php"><i class="bi bi-box-arrow-in-right"></i> Sign In</a> |
                <a href="Sing Up_Frontend.php"><i class="bi bi-person-plus"></i> Sign Up</a>
            <?php endif; ?>
        </nav>
    </header>


    <!-- Main Content -->
    <main>
        <!-- Home Section -->
        <section id="home">
            <h2>Welcome to AutoMob-Mechanic</h2>
            <p>Your trusted partner for car and bike repairs.</p>
        </section>

        <!-- About Section -->
    <section id="about">
     <div class="about-container">
        <img class="im" src="aboutus.jpeg" alt="About Us Image">
        <div class="about-content">
            <h2>About Us</h2>
            <p>
                AutoMob-Mechanic is dedicated to providing top-quality car and bike repair services. With years of experience in the automotive industry, we understand the importance of reliable and professional services. Our team of skilled technicians is equipped with the latest tools and technologies to handle all types of vehicle repairs and maintenance. We offer a wide range of services, from preventive maintenance to full body repair, ensuring your vehicle remains in optimal condition. Our customer-centric approach ensures that we prioritize your needs, delivering services that are both efficient and affordable.
            </p>

        </div>
    </div>
</section>

        <!-- Services Section -->

<section id="services">
    <h2>Services</h2>
     <h3>Car Repairing Services</h3>
        <!--  <button id="startMarquee">Start</button>
         <button id="stopMarquee">Stop</button> -->

    <div class="card-container">
        
        <div class="card">
            <img src="engin.jpeg" alt="Engine Repair">
            <h4>Engine Repair</h4>
            <p>Comprehensive diagnostics and repairs to keep your engine running smoothly.</p>
        </div>
        <div class="card">
            <img src="brek.jpeg" alt="Brake Service">
            <h4>Brake Service</h4>
            <p>Expert brake inspection and replacement for optimal safety and performance.</p>
        </div>
        <div class="card">
            <img src="oil.jpeg" alt="Oil Change">
            <h4>Oil Change</h4>
            <p>Regular oil changes to maintain engine health and efficiency.</p>
        </div>
        <div class="card">
            <img src="tireR.jpeg" alt="Tire Rotation">
            <h4>Tire Rotation</h4>
            <p>Extend the life of your tires with our professional rotation services.</p>
        </div>
        <div class="card">
            <img src="Transmission.jpeg" alt="Transmission Repair">
            <h4>Transmission Repair</h4>
            <p>Thorough diagnostics and repair for your vehicle's transmission system.</p>
        </div>
        <div class="card">
            <img src="Suspension.jpeg" alt="Suspension Repair">
            <h4>Suspension Repair</h4>
            <p>Ensure a smooth ride with our expert suspension repair services.</p>
        </div>
        <div class="card">
            <img src="rediator.jpeg" alt="Radiator Repair">
            <h4>Radiator Repair</h4>
            <p>Keep your engine cool with our radiator inspection and repair services.</p>
        </div>
        <div class="card">
            <img src="ac.jpeg" alt="AC Service">
            <h4>AC Service</h4>
            <p>Stay comfortable with our air conditioning repair and maintenance services.</p>
        </div>
        <div class="card">
            <img src="exhust1.jpeg" alt="Exhaust Repair">
            <h4>Exhaust Repair</h4>
            <p>Expert exhaust system repairs for better performance and fuel efficiency.</p>
        </div>
        <div class="card">
            <img src="full.jpeg" alt="Detailing Service">
            <h4>Detailing Service</h4>
            <p>Comprehensive cleaning and detailing for your vehicle's interior and exterior.</p>
        </div>
    </div>
       <h3>Bike Repairing Services</h3>
    <div class="card-container">
        
        <div class="card">
            <img src="bike1.jpeg" alt="Engine Tune-Up">
            <h4>Engine Tune-Up</h4>
            <p>Optimize your bike's performance with a professional engine tune-up.</p>
        </div>
        <div class="card">
            <img src="bike2.jpeg" alt="Brake Inspection">
            <h4>Brake Inspection</h4>
            <p>Thorough inspection and maintenance of your bike's braking system.</p>
        </div>
        <div class="card">
            <img src="bike3.jpeg" alt="Chain Lubrication">
            <h4>Chain Lubrication</h4>
            <p>Keep your bike running smoothly with regular chain lubrication.</p>
        </div>
        <div class="card">
            <img src="bike4.jpeg" alt="Tire Replacement">
            <h4>Tire Replacement</h4>
            <p>Professional tire replacement services for a safer ride.</p>
        </div>
        <div class="card">
            <img src="bike5.jpeg" alt="Suspension Adjustment">
            <h4>Suspension Adjustment</h4>
            <p>Adjustments to improve handling and comfort on your bike.</p>
        </div>
        <div class="card">
            <img src="bik6.jpeg" alt="Electrical System Repair">
            <h4>Electrical System Repair</h4>
            <p>Expert diagnosis and repair of electrical issues in your bike.</p>
        </div>
        <div class="card">
            <img src="bike7.jpeg" alt="Fuel System Cleaning">
            <h4>Fuel System Cleaning</h4>
            <p>Enhance performance with our comprehensive fuel system cleaning.</p>
        </div>
        <div class="card">
            <img src="bike8.jpeg" alt="Battery Replacement">
            <h4>Battery Replacement</h4>
            <p>Quick and efficient battery replacement services for your bike.</p>
        </div>
        <div class="card">
            <img src="bike9.jpeg" alt="Carburetor Cleaning">
            <h4>Carburetor Cleaning</h4>
            <p>Ensure optimal fuel delivery with professional carburetor cleaning.</p>
        </div>
        <div class="card">
            <img src="fullbike.jpeg" alt="General Maintenance">
            <h4>General Maintenance</h4>
            <p>Comprehensive maintenance services to keep your bike in top shape.</p>
        </div>
    </div>
</section>

              
        <!-- Enquiry Section -->
    
   <!-- Contact and Enquiry Section -->
<section id="contact-enquiry">
    <div class="contact-us">
        <h2>Contact Us</h2>
        <p>If you need to reach us directly, here are our contact details:</p>
        <ul>
            <li><strong>Address:</strong> 123 Auto Lane, Mechanic City, 56789</li>
            <li><strong>Email:</strong> gauravkum1287@gmail.co.in</li>
            <li><strong>Phone:</strong> +91 7979891287</li>
            <li><strong>Working Hours:</strong> Mon - Fri, 9:00 AM - 6:00 PM</li>
        </ul>
    </div>
    
    <div class="enquiry">
        <h2>Enquiry</h2>
        <p>If you have any questions or would like to request more information, please fill out the form below.</p>
        <form action="enquiry.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <!-- <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div> -->
            <button type="submit">Submit Enquiry</button>
            <!-- <button type="reset">Reset</button> -->
        </form>
    </div>
</section>


    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 AutoMob-Mechanic. All rights reserved.</p>
    </footer>


    <!-- <script src="script.js"></script> -->
</body>
</html>
