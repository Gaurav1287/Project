<!DOCTYPE html>
<html>
<head>
    <title>Sign up....</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Sign Up Form Styling */
        .sign-up {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
            margin: 0 auto;
            margin-top: 10px;
            text-align: left;
        }

        /* Form Header */
        .sign-up h2 {
            text-align: center;
            color: #03C1C0;
            margin-bottom: 20px;
            font-size: 24px;
        }

        /* Form Group Styling */
        .form-group {
            margin-bottom: 15px;
        }

        /* Form Label Styling */
        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Form Input and Select Styling */
        form input, form select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        /* Submit Button Styling */
        button {
            background-color: #03C1C0;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #029292;
        }

        /* Centering the Form for Smaller Screens */
        @media (max-width: 768px) {
            .sign-up {
                width: 90%;
                margin: 0 auto;
            }
        }

        /* Card Styling */
        .card {
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
            display: flex;
            align-items: center;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .card i {
            margin-right: 10px;
        }
        .anchor
        {
            text-decoration: none;
        }
        .gotoback
        {
            padding-left:100px; 
            font-size:15px;
            color:grey;  
        }
         .gotoback a
         {
            padding-left:10px; 
            text-decoration: none;
         }
    </style>
</head>
<body>
<!-- Sign Up Form -->
<div class="sign-up">
    <h2>Sign Up <span class="gotoback">  Go to Home<a href="index.php">click</a></span></h2>
    <p id="signupMessage"></p> <!-- Move the message to the top -->
    <form id="signUpForm" method="POST">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>
        </div>
        <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" id="Subject" list="topic" name="subject">
           
        </div>
        <button type="button" onclick="submitForm()">Sign Up</button>
        <h3>Go To Sign In Page<SPAN><a class="anchor" href="sign_in_frontend.php"> Click Here</a></SPAN></h3>
    </form>
</div>

<script>
function submitForm() {
    var form = document.getElementById("signUpForm");
    var formData = new FormData(form);

    // Create a new AJAX request
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "signup.php", true); // Send the data to signup.php
    xhr.onload = function () {
        if (xhr.status === 200) {
            // Display success message if the status is 200 (OK)
            document.getElementById("signupMessage").innerHTML = "<div class='card success'><i class='fas fa-check-circle'></i>" + xhr.responseText + "</div>";
            form.reset(); // Clear form fields upon success
        } else {
            // Display error message if the status is not 200
            document.getElementById("signupMessage").innerHTML = "<div class='card error'><i class='fas fa-exclamation-circle'></i>" + xhr.responseText + "</div>";
        }
    };

    // Handle network errors
    xhr.onerror = function () {
        document.getElementById("signupMessage").innerHTML = "<div class='card error'><i class='fas fa-exclamation-circle'></i>Request failed. Please try again.</div>";
    };

    // Send the form data
    xhr.send(formData);
}
</script>

</body>
</html>
