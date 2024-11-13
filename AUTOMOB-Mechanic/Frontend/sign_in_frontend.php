<!DOCTYPE html>
<html>
<head>
    <title>Sign In....</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Sign In Form Styling */
        .sign-in {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
            margin-top: 20px;
            text-align: left;
        }

        /* Form Header */
        .sign-in h2 {
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

        /* Form Input Styling */
        form input {
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
            .sign-in {
                width: 90%;
                margin: 0 auto;
            }
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
    <div class="sign-in">
        <h2>Sign In <span class="gotoback"> Go To Home<a href="index.php">click</a></span></h2>
        <form action="sign.php" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Sign In</button>
             <h3>Go To Sign Up Page<SPAN><a class="anchor" href="Sing Up_Frontend.php"> Click Here</a></SPAN></h3>
        </form>
    </div>
</body>
</html>
