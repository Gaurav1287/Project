AutoMob-Mechanic
AutoMob-Mechanic is a web-based platform designed to streamline vehicle repair services for both customers and mechanics. Users can sign up, log in, and book vehicle repair services like car and bike repairs, while mechanics can manage service requests and customer inquiries efficiently. This application enhances the customer experience by allowing easy service booking, tracking, and inquiry submission.

Table of Contents
Features
Tech Stack
Installation
Usage
File Structure
Future Enhancements
Contributing
License
Features
User Registration and Login: Secure user sign-up and login using PHP sessions and password encryption.
Service Booking: Users can book repair services for their vehicles with a single click.
Profile Management: Users can view and update their profile and check past services.
Dashboard for Services: Displays services with options to book or view details.
Enquiry Section: Allows users to make inquiries about specific services.
Logout: Securely logs the user out of the application.
Tech Stack
Frontend: HTML, CSS, JavaScript
Backend: PHP
Database: MySQL
Installation
Clone the Repository:

bash
Copy code
git clone https://github.com/yourusername/AutoMob-Mechanic.git
cd AutoMob-Mechanic
Set Up XAMPP/WAMP:

Download and install XAMPP or WAMP.
Start Apache and MySQL.
Database Setup:

Import the database: Open phpMyAdmin, create a new database (e.g., automob), and import the automob.sql file provided in the project.
Configure Database Connection:

Open db.php and update the database configuration settings according to your setup.
Run the Project:

Place the project folder in the htdocs directory (for XAMPP) or the www directory (for WAMP).
Open your browser and go to http://localhost/AutoMob-Mechanic.
Usage
Sign Up: Create an account to start using the application.
Log In: Log in with your registered credentials.
Book a Service: Browse available services and book the one you need.
View Profile: Access your profile to see booked services and inquiries.
Enquiry: Use the Enquiry section to ask questions about the services offered.
File Structure
index.php: Home page and navigation to other parts of the site.
dashboard.php: Dashboard page showing available services and user options.
profile.php: User profile page with service history and settings.
db.php: Database connection file.
signup.php: Handles user registration.
signin.php: Handles user login.
logout.php: Logs the user out and ends the session.
style.css: Contains styles for the application UI.
Future Enhancements
Admin Panel: A dashboard for managing services, users, and inquiries.
Email Notifications: Send email notifications upon successful bookings or updates.
Payment Integration: Enable secure payment options for booking services.
Service Tracking: Allow users to track the status of their vehicle repairs.
Contributing
Contributions are welcome! Please submit a pull request or open an issue to discuss improvements.

License
This project is open-source and available under the MIT License.
