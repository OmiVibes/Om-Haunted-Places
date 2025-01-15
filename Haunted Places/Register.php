


<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Login Form | CodingLab </title>--->
    <!-- <link rel="stylesheet" href="registration.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <style>
    * {
    margin: 0px;
    padding: 0px;
    font-family: Noto Sans;
}
html{
    height: 100%;
}
body{
    background-size: cover;
}
/* the header of your website */
#navbar {
    display: flex;
    align-items: center;
    margin: 0px 25px;
    justify-content: space-between;
    position: relative;
}

header::before {
    background: url('css/img/bg.jpg') no-repeat center/cover;
    filter: brightness(25%);
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: -1;
}

/* logo styling in navbar */
.logo {
    font-family: 'YouMurderer BB Regular';
    font-size: 55px;
    color: rgb(255, 3, 3);
    padding: 20px 15px;
}

/* menubar styling in navbar */

.item{
    font-weight: 900;
}
#navbar ul {
    display: flex;
}

#navbar ul li {
    list-style: none;
    font-size: 1.2rem;
}

#navbar ul li a {
    display: block;
    padding: 3px 22px;
    border-radius: 20px;
    color: red;
    text-decoration: none;
}
section{
    display: flex;
    justify-content: center;
    align-items: center;
    /* height: 23px; */
    min-height: 84vh;
    width: 100%;
    
}
.form-box{
    position: relative;
    width: 370px;
    height: 440px;
    background: transparent;
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 20px;
    backdrop-filter: blur(1px);
    display: flex;
    justify-content: center;
    align-items: center;
}
h2{
    font-size: 2em;
    color: #fff;
    text-align: center;
}
.inputbox{
    position: relative;
    margin: 30px 0;
    width: 310px;
    border-bottom: 2px solid #fff;
}
.inputbox label{
    position: absolute;
    top: 50%;
    left: 4px;
    transform: translateY(-50%);
    color: #fff;
    font-size: 1em;
    pointer-events: none;
    transition: .5s;
}
input:focus ~ label,
input:valid ~ label{
    top: -5px;
}
.inputbox input{
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    color: #fff;
}
.inputbox ion-icon{
    position: absolute;
    right: 8px;
    color: red;
    font-size: 1.2em;
    top: 20px;
}
.forget{
    margin: -15px 0 15px;
    font-size: .9em;
    color: #fff;
    display: flex;
    justify-content: center;
}
.forget label input{
    margin-right: 3px;
}
.forget label a{
    color: #fff;
    text-decoration: none;
}
.forget label a:hover{
    text-decoration: underline;
}
button{
    width: 100%;
    height: 40px;
    border-radius: 40px;
    background-color: #fff;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1em;
    font-weight: 600;
}
.register{
    font-size: .9em;
    color: #fff;
    text-align: center;
    margin: 25px 0 10px;
}
.register p a{
    text-decoration: none;
    color: red;
    font-size: 16px;
    font-weight: 900;
}
.register p a:hover{
    text-decoration: underline;
}
  </style>
  <body>
    <header>
        <nav id="navbar">
            <span class="logo">
                SPOOKY TRIP
            </span>
            <ul>
                <li class="item"><a href="index1.php">Home</a></li>
                <li class="item"><a href="Login.php">Login</a></li>
                <li class="item"><a href="maps.php">Maps</a></li>
                <li class="item"><a href="services.php">Services</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>Sign Up</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="eamil" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Password</label>
                    </div>
                    <button>Sign Up</button>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>