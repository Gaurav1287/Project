<?php
// Start the session
session_start();

// Check if the user is logged in, otherwise redirect to the login page
if (!isset($_SESSION['user_id'])) {
    header("Location: sign_in_frontend.php");
    exit();
}

// Include the database connection
include 'db_php.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - AutoMob-Mechanic</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="logo">
            <a href="dashboard.php"><img class="logoImg" src="logo.jpg" alt="Logo">AutoMob-Mechanic Dashboard</a>
        </div>
        <nav>
        <a href="profile.php"><i class="bi bi-person"></i> Profile</a>
        <a href="logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="main">
        <h1>Welcome, <?php echo $_SESSION['user_name']; ?>!</h1>
    <section id="services">
    <h2>Services</h2>
    <h3>Car Repairing Services</h3>
    <div class="card-container">
        <div class="card">
            <img src="engin.jpeg" alt="Engine Repair">
            <h4>Engine Repair</h4>
            <p>Comprehensive diagnostics and repairs to keep your engine running smoothly.</p>
            <button onclick="location.href='book.php?service=engine_repair'">Book Now</button>
            <button onclick="location.href='details.php?service=engine_repair'">View Details</button>
        </div>
        <div class="card">
            <img src="brek.jpeg" alt="Brake Service">
            <h4>Brake Service</h4>
            <p>Expert brake inspection and replacement for optimal safety and performance.</p>
            <button onclick="location.href='book.php?service=brake_service'">Book Now</button>
            <button onclick="location.href='details.php?service=brake_service'">View Details</button>
        </div>
        <div class="card">
            <img src="oil.jpeg" alt="Oil Change">
            <h4>Oil Change</h4>
            <p>Regular oil changes to maintain engine health and efficiency.</p>
            <button onclick="location.href='book.php?service=oil_change'">Book Now</button>
            <button onclick="location.href='details.php?service=oil_change'">View Details</button>
        </div>
        <div class="card">
            <img src="tireR.jpeg" alt="Tire Rotation">
            <h4>Tire Rotation</h4>
            <p>Extend the life of your tires with our professional rotation services.</p>
            <button onclick="location.href='book.php?service=tire_rotation'">Book Now</button>
            <button onclick="location.href='details.php?service=tire_rotation'">View Details</button>
        </div>
        <div class="card">
            <img src="Transmission.jpeg" alt="Transmission Repair">
            <h4>Transmission Repair</h4>
            <p>Thorough diagnostics and repair for your vehicle's transmission system.</p>
            <button onclick="location.href='book.php?service=transmission_repair'">Book Now</button>
            <button onclick="location.href='details.php?service=transmission_repair'">View Details</button>
        </div>
        <div class="card">
            <img src="Suspension.jpeg" alt="Suspension Repair">
            <h4>Suspension Repair</h4>
            <p>Ensure a smooth ride with our expert suspension repair services.</p>
            <button onclick="location.href='book.php?service=suspension_repair'">Book Now</button>
            <button onclick="location.href='details.php?service=suspension_repair'">View Details</button>
        </div>
        <div class="card">
            <img src="rediator.jpeg" alt="Radiator Repair">
            <h4>Radiator Repair</h4>
            <p>Keep your engine cool with our radiator inspection and repair services.</p>
            <button onclick="location.href='book.php?service=radiator_repair'">Book Now</button>
            <button onclick="location.href='details.php?service=radiator_repair'">View Details</button>
        </div>
        <div class="card">
            <img src="ac.jpeg" alt="AC Service">
            <h4>AC Service</h4>
            <p>Stay comfortable with our air conditioning repair and maintenance services.</p>
            <button onclick="location.href='book.php?service=ac_service'">Book Now</button>
            <button onclick="location.href='details.php?service=ac_service'">View Details</button>
        </div>
        <div class="card">
            <img src="exhust1.jpeg" alt="Exhaust Repair">
            <h4>Exhaust Repair</h4>
            <p>Expert exhaust system repairs for better performance and fuel efficiency.</p>
            <button onclick="location.href='book.php?service=exhaust_repair'">Book Now</button>
            <button onclick="location.href='details.php?service=exhaust_repair'">View Details</button>
        </div>
       <!--  <div class="card">
            <img src="full.jpeg" alt="Detailing Service">
            <h4>Detailing Service</h4>
            <p>Comprehensive cleaning and detailing for your vehicle's interior and exterior.</p>
            <button onclick="location.href='book.php?service=detailing_service'">Book Now</button>
            <button onclick="location.href='details.php?service=detailing_service'">View Details</button>
        </div> -->
    </div>

    <h3>Bike Repairing Services</h3>
    <div class="card-container">
        <div class="card">
            <img src="bike1.jpeg" alt="Engine Tune-Up">
            <h4>Engine Tune-Up</h4>
            <p>Optimize your bike's performance with a professional engine tune-up.</p>
            <button onclick="location.href='book.php?service=engine_tuneup'">Book Now</button>
            <button onclick="location.href='details.php?service=engine_tuneup'">View Details</button>
        </div>
        <div class="card">
            <img src="bike2.jpeg" alt="Brake Inspection">
            <h4>Brake Inspection</h4>
            <p>Thorough inspection and maintenance of your bike's braking system.</p>
            <button onclick="location.href='book.php?service=brake_inspection'">Book Now</button>
            <button onclick="location.href='details.php?service=brake_inspection'">View Details</button>
        </div>
        <div class="card">
            <img src="bike3.jpeg" alt="Chain Lubrication">
            <h4>Chain Lubrication</h4>
            <p>Keep your bike running smoothly with regular chain lubrication.</p>
            <button onclick="location.href='book.php?service=chain_lubrication'">Book Now</button>
            <button onclick="location.href='details.php?service=chain_lubrication'">View Details</button>
        </div>
        <div class="card">
            <img src="bike4.jpeg" alt="Tire Replacement">
            <h4>Tire Replacement</h4>
            <p>Professional tire replacement services for a safer ride.</p>
            <button onclick="location.href='book.php?service=tire_replacement'">Book Now</button>
            <button onclick="location.href='details.php?service=tire_replacement'">View Details</button>
        </div>
        <div class="card">
            <img src="bike5.jpeg" alt="Suspension Adjustment">
            <h4>Suspension Adjustment</h4>
            <p>Adjustments to improve handling and comfort on your bike.</p>
            <button onclick="location.href='book.php?service=suspension_adjustment'">Book Now</button>
            <button onclick="location.href='details.php?service=suspension_adjustment'">View Details</button>
        </div>
        <div class="card">
            <img src="bik6.jpeg" alt="Electrical System Repair">
            <h4>Electrical System Repair</h4>
            <p>Expert diagnosis and repair of electrical issues in your bike.</p>
            <button onclick="location.href='book.php?service=electrical_system_repair'">Book Now</button>
            <button onclick="location.href='details.php?service=electrical_system_repair'">View Details</button>
        </div>
        <div class="card">
            <img src="bike7.jpeg" alt="Fuel System Cleaning">
            <h4>Fuel System Cleaning</h4>
            <p>Enhance performance with our comprehensive fuel system cleaning.</p>
            <button onclick="location.href='book.php?service=fuel_system_cleaning'">Book Now</button>
            <button onclick="location.href='details.php?service=fuel_system_cleaning'">View Details</button>
        </div>
        <div class="card">
            <img src="bike8.jpeg" alt="Battery Replacement">
            <h4>Battery Replacement</h4>
            <p>Quick and efficient battery replacement services for your bike.</p>
            <button onclick="location.href='book.php?service=battery_replacement'">Book Now</button>
            <button onclick="location.href='details.php?service=battery_replacement'">View Details</button>
        </div>
        <div class="card">
            <img src="bike9.jpeg" alt="Carburetor Cleaning">
            <h4>Carburetor Cleaning</h4>
            <p>Ensure optimal fuel delivery with professional carburetor cleaning.</p>
            <button onclick="location.href='book.php?service=carburetor_cleaning'">Book Now</button>
            <button onclick="location.href='details.php?service=carburetor_cleaning'">View Details</button>
        </div>
        <!-- <div class="card">
            <img src="fullbike.jpeg" alt="General Maintenance">
            <h4>General Maintenance</h4>
            <p>Comprehensive maintenance services to keep your bike in top condition.</p>
            <button onclick="location.href='book.php?service=general_maintenance'">Book Now</button>
            <button onclick="location.href='details.php?service=general_maintenance'">View Details</button>
        </div> -->
    </div>
 </section>

    </main>
</body>
</html>
