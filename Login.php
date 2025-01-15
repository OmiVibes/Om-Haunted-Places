<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login's.css">
    <link rel="stylesheet" href="css/hf_normal.css">
</head>
<body>
    <header>
        <nav id="navbar">
            <span class="logo">
                SPOOKY TRIP
            </span>
            <ul>
                <li class="item"><a href="index1.php">Home</a></li>
                <li class="item"><a href="Login.php">Login</a></li>
                <li class="item"><a href="Login.php">Maps</a></li>
                <li class="item"><a href="Login.php">Services</a></li>

            </ul>
        </nav>
    </header>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form name="" action = "authentication.php" onsubmit = "return validation()" method = "POST">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="username" required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember me  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Forget Password</a></label>
                    </div>
                    <a href="explore.php"><button>Log in</button></a>
                    <div class="register">
                        <p>Don't have a account&nbsp;&nbsp;<a href="Register.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
    </script>
</body>
</html>