<li><a href="https://vocal-marshmallow-2af6f7.netlify.app/">  Project Link</a></li>
<h1 align="center">AutoMob-Mechanic</h1>

<p align="center">
    AutoMob-Mechanic is a web-based platform designed to streamline vehicle repair services for both customers and mechanics. Users can sign up, log in, and book vehicle repair services like car and bike repairs, while mechanics can manage service requests and customer inquiries efficiently. This application enhances the customer experience by allowing easy service booking, tracking, and inquiry submission.
</p>

<h2>Table of Contents</h2>
<ul>
    <li><a href="#features">Features</a></li>
    <li><a href="#tech-stack">Tech Stack</a></li>
    <li><a href="#installation">Installation</a></li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#file-structure">File Structure</a></li>
    <li><a href="#future-enhancements">Future Enhancements</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
</ul>

<h2 id="features">Features</h2>
<ul>
    <li><strong>User Registration and Login:</strong> Secure user sign-up and login using PHP sessions and password encryption.</li>
    <li><strong>Service Booking:</strong> Users can book repair services for their vehicles with a single click.</li>
    <li><strong>Profile Management:</strong> Users can view and update their profile and check past services.</li>
    <li><strong>Dashboard for Services:</strong> Displays services with options to book or view details.</li>
    <li><strong>Enquiry Section:</strong> Allows users to make inquiries about specific services.</li>
    <li><strong>Logout:</strong> Securely logs the user out of the application.</li>
</ul>

<h2 id="tech-stack">Tech Stack</h2>
<ul>
    <li><strong>Frontend:</strong> HTML, CSS, JavaScript</li>
    <li><strong>Backend:</strong> PHP</li>
    <li><strong>Database:</strong> MySQL</li>
</ul>

<h2 id="installation">Installation</h2>
<ol>
    <li><strong>Clone the Repository:</strong>
        <pre><code>git clone https://github.com/yourusername/AutoMob-Mechanic.git
cd AutoMob-Mechanic</code></pre>
    </li>
    <li><strong>Set Up XAMPP/WAMP:</strong>
        <p>Download and install <a href="https://www.apachefriends.org/index.html">XAMPP</a> or <a href="https://www.wampserver.com/">WAMP</a>. Start Apache and MySQL.</p>
    </li>
    <li><strong>Database Setup:</strong>
        <p>Import the database: Open <code>phpMyAdmin</code>, create a new database (e.g., <code>automob</code>), and import the <code>automob.sql</code> file provided in the project.</p>
    </li>
    <li><strong>Configure Database Connection:</strong>
        <p>Open <code>db.php</code> and update the database configuration settings according to your setup.</p>
    </li>
    <li><strong>Run the Project:</strong>
        <p>Place the project folder in the <code>htdocs</code> directory (for XAMPP) or the <code>www</code> directory (for WAMP). Open your browser and go to <code>http://localhost/AutoMob-Mechanic</code>.</p>
    </li>
</ol>

<h2 id="usage">Usage</h2>
<ol>
    <li><strong>Sign Up:</strong> Create an account to start using the application.</li>
    <li><strong>Log In:</strong> Log in with your registered credentials.</li>
    <li><strong>Book a Service:</strong> Browse available services and book the one you need.</li>
    <li><strong>View Profile:</strong> Access your profile to see booked services and inquiries.</li>
    <li><strong>Enquiry:</strong> Use the Enquiry section to ask questions about the services offered.</li>
</ol>

<h2 id="file-structure">File Structure</h2>
<ul>
    <li><code>index.php</code>: Home page and navigation to other parts of the site.</li>
    <li><code>dashboard.php</code>: Dashboard page showing available services and user options.</li>
    <li><code>profile.php</code>: User profile page with service history and settings.</li>
    <li><code>db.php</code>: Database connection file.</li>
    <li><code>signup.php</code>: Handles user registration.</li>
    <li><code>signin.php</code>: Handles user login.</li>
    <li><code>logout.php</code>: Logs the user out and ends the session.</li>
    <li><code>style.css</code>: Contains styles for the application UI.</li>
</ul>

<h2 id="future-enhancements">Future Enhancements</h2>
<ul>
    <li><strong>Admin Panel:</strong> A dashboard for managing services, users, and inquiries.</li>
    <li><strong>Email Notifications:</strong> Send email notifications upon successful bookings or updates.</li>
    <li><strong>Payment Integration:</strong> Enable secure payment options for booking services.</li>
    <li><strong>Service Tracking:</strong> Allow users to track the status of their vehicle repairs.</li>
</ul>

<h2 id="contributing">Contributing</h2>
<p>Contributions are welcome! Please submit a pull request or open an issue to discuss improvements.</p>

<h2 id="license">License</h2>
<p>This project is open-source and available under the MIT License.</p>
