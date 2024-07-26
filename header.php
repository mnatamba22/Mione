<!DOCTYPE html>
<html lang="en">
<head>
    <title>smartmum-uganda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="CSS/styleit.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class='nav-1'  style="background:linear-gradient(to right, gold 10%, lightblue 55%); !important; padding:10px;display: flex;
    justify-content: flex-end;position: fixed;width:100%;z-index: 1000;top: 0; border-radius:8px;">
    <section calss=sec-1>
        <div id="first-buttons" style=' display: flex;gap: 10px;' >
            <button class="but-1" type="button"  onclick="openSignInModal()" style=' padding: 5px 10px; margin-left: 5px;background-color: white;border: 1px solid #ccc; border-radius:5px;cursor: pointer;  'onmouseover="this.style.backgroundColor='blue'; this.style.color='white';" 
            onmouseout="this.style.backgroundColor='white'; this.style.color='black';">Sign In</button>
             <!--sign in popup-->
             <div id="signInModal" class="modal" style='width:200px;height:500px;margin-left:80%;margin-top:0px;'>
    <div class="modal-content"  style=' margin-top:0px;'>
        <span class="close" onclick="closeSignInModal()">&times;</span>
        <h2  style='text-align:center; margin-top:2px;'>Sign In</h2>
        <input type="text" id="emailPhone" placeholder="Email or Phone Number" required  style=' margin:8px;border-radius: 10px;'>
        <input type="password" id="password" placeholder="Password" required  style=' margin:8px;border-radius: 10px;'>
        <button type="button"   style='background-color:green; font-family:bold; margin:8px;border-radius: 10px;'>Login</button>
        <button type="button" class="forgot-password" onclick="resetPassword()" style=' margin:8px;border-radius: 10px;'>Forgot Password?</button>
    </div>
</div>

            







            <button class="but-2" type="button" onclick="openModal()" style=' padding: 5px 10px; margin-left: 5px;background-color: white;border: 1px solid #ccc; border-radius:5px;cursor: pointer;' onmouseover="this.style.backgroundColor='blue'; this.style.color='white';" 
            onmouseout="this.style.backgroundColor='white'; this.style.color='black';"> Sign Up</button>
            <!--sign up popup-->
            <div id="myModal" class="modal" style='    display: none;position: fixed;z-index: 1000; align-items: center;
 margin: 0% 0% 0 70%;  width: 400px;height: 450px; overflow: auto;'>
    <div class="modal-content" style='z-index:1000; margin: 0% 0% 0 0%; width: 400px;height: 450px;  display: flex;flex-direction: column;align-items: center;'>
        <span class="close" onclick="closeModal()">&times;</span>
        <h2  style='text-align:center;'>Register </h2>
        <form id="signupForm" style='background-color:cyan; '>
            <label for="firstName">First Name:</label><br>
            <input type="text" id="firstName" name="firstName" required enabled oninput="checkInput(this)" ><br><br>

            <label for="lastName" >Last Name:</label><br>
            <input type="text" id="lastName" name="lastName" required disabled oninput="checkInput(this)"><br><br>

            <label for="email">Email or Phone Number:</label><br>
            <input type="text" id="contact" name="contact" required disabled oninput="checkInput(this)"><br><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required disabled oninput="checkInput(this)"><br><br>

            <button type="button" onclick="validateForm()">Submit</button>
            <p id="error" class="error" style='color:red;' ></p>
        </form>
    </div>
</div>
            <button class="but-3" type="button" style=' padding: 5px 10px; margin-left: 5px;background-color: white;border: 1px solid #ccc; border-radius:5px;cursor: pointer;' onmouseover="this.style.backgroundColor='blue'; this.style.color='white';" 
            onmouseout="this.style.backgroundColor='white'; this.style.color='black';">Support Us</button>
        </div>
        </section>
    
    </nav>

    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="background-color:#dee2e6 !important; margin-top:50px;  border-radius:8px; z-index:1;">
       
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../IMAGES/Teams2/logo.jpg" style="width: 65px;" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <div class="btn-group" role="group">
                    <a href="index.php" class="btn btn-outline-primary">Home</a>
                    <a href="#" class="btn btn-outline-primary">Baby</a>
                    <a href="product.php" class="btn btn-outline-primary">Products</a>
                    <a href="pregnancy.php" class="btn btn-outline-primary">Pregnancy</a>
                    <a href="parenthood.php" class="btn btn-outline-primary">Parenthood</a>
                    <a href="#" class="btn btn-outline-primary">Team</a>
                    <a href="#" class="btn btn-outline-primary">About</a>
                    <a href="#" class="btn btn-outline-primary">Emergency</a>
                </div>
                <form class="d-flex form-inline my-2 my-lg-0" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('.navbar .btn-group .btn');

            function changeActiveLink() {
                navLinks.forEach((link) => link.classList.remove('active'));
                // Determine which link is currently in the viewport
                navLinks.forEach(link => {
                    const sectionId = link.getAttribute('href').substring(1);
                    const section = document.getElementById(sectionId);
                    const rect = section.getBoundingClientRect();
                    if (rect.top <= 50 && rect.bottom >= 50) {
                        link.classList.add('active');
                    }
                });
            }

            changeActiveLink();
            window.addEventListener('scroll', changeActiveLink);
        });


        //sign up script

        function openModal() {
    document.getElementById('myModal').style.display = "block";
}

function closeModal() {
    document.getElementById('myModal').style.display = "none";
}

function checkInput(currentInput) {
    const form = document.getElementById('signupForm');
    const inputs = Array.from(form.querySelectorAll('input'));
    const currentIndex = inputs.indexOf(currentInput);

    // Enable the next input only if the current input is filled
    if (currentInput.value.trim() !== '') {
        if (currentIndex < inputs.length - 1) {
            inputs[currentIndex + 1].disabled = false;
        }
    } else {
        // Disable all following inputs if the current input is not valid
        for (let i = currentIndex + 1; i < inputs.length; i++) {
            inputs[i].disabled = true;
        }
    }
}

// Ensure the current input is valid before allowing the next one
function validateForm() {
    const form = document.getElementById('signupForm');
    const inputs = Array.from(form.querySelectorAll('input'));
    let error = '';

    // Check if all inputs are filled
    for (let input of inputs) {
        if (input.value.trim() === '') {
            error = 'All fields must be filled';
            break;
        }
    }

    if (!error) {
        const contact = document.getElementById('contact').value.trim();
        const password = document.getElementById('password').value.trim();

        if (isNaN(contact)) {
            // Validate email
            if (!validateEmail(contact)) {
                error = 'Invalid email format';
            }
        } else {
            // Validate phone number
            if (contact.length !== 10) {
                error = 'Phone number must be exactly 10 digits';
            }
        }

        // Validate password length
        if ( password.length < 8) {
            error = 'Password must be at least 8 characters';
        }
    }

    if (error) {
        document.getElementById('error').innerText = error;
    } else {
        alert('Form submitted successfully!');
        closeModal();
    }
}



function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}
// for sign in button

function openSignInModal() {
        document.getElementById("signInModal").style.display = "block";
    }

    function closeSignInModal() {
        document.getElementById("signInModal").style.display = "none";
    }

    function resetPassword() {
        alert("Password reset functionality will be implemented here.");
        // You can add your password reset logic here.
    }

    window.onclick = function(event) {
        var modal = document.getElementById("signInModal");
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }








   

        
    







        
    </script>
    


    
</body>
</html>
