<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESINDENCE Form</title>
    <link rel="stylesheet" href="sytle1.css">
</head>
<body>
    <div class="Container">
        <form  method="POST" action="">
            <h2>RESINDENCE Form</h2>
             <div class="content">
                <div class="input-box">
                    <label for="id"> Id</label>
                    <input type="text" placeholder="Enter your id" name="name" required>
                </div>
                <div class="input-box">
                    <label for="name"> First Name</label>
                    <input type="text" placeholder="Enter first name" name="name" required>
                </div>
                <div class="input-box">
                    <label for="name"> Last Name</label>
                    <input type="text" placeholder="Enter last name" name="name" required>
                </div>
               
                <div class="input-box">
                    <label for="age">Age</label>
                    <input type="age" placeholder="Enter your age" name="age" required>
                </div>
                <div class="input-box">
                    <label for="phone"> Phone Number</label>
                    <input type="tel" placeholder="Enter phone number" name="phone" required>
                </div>
                <div class="input-box">
                    <label for="province"> Province</label>
                    <input type="province" placeholder="Enter your province" name="province" required>
                </div>
                <div class="input-box">
                    <label for="district">District</label>
                    <input type="district" placeholder="Enter your district" name="district" required>
                </div>
                <div class="input-box">
                    <label for="sector">Sector</label>
                    <input type="sector" placeholder="Enter your sector" name="sector" required>
                </div>
                <div class="input-box">
                    <label for="cell">Cell</label>
                    <input type="cell" placeholder="Enter your cell" name="cell" required>
                </div>
                <div class="input-box">
                    <label for="village">Village</label>
                    <input type="village" placeholder="Enter your village" name="village" required>
                </div>
                <span class="gender-title">Gender</span>
                <div class="gender-category">
                    <input type="radio" name="gender" id="male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="others">
                    <label for="others">Others</label>
                </div>
                <div class="button-container">

                <input type="submit" value="insert person">
                </div>
             </div>
        </form>
    </div>
</body>
</html>