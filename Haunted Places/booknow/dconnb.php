<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/hf_normal.css">
    <link rel="stylesheet" href="../css/booknowd.css">
    <!-- <link rel="stylesheet" href="../css/background.css"> -->
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
    background: url('img/bg.jpg') no-repeat center/cover;
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
    padding: 3px 22px;
}

#navbar ul li a {
    display: block;
    border-radius: 20px;
    color: red;
    text-decoration: none;
}
    </style>
</head>
<body>
    <?php
    <header>
        <nav id="navbar">
            <span class="logo">
                SPOOKY TRIP
            </span>
            <ul>
                <li class="item"><a href="index2.html">Home</a></li>
                <li class="item"><a href="login.html">Login</a></li>
                <li class="item"><a href="login.html">Maps</a></li>
                <li class="item"><a href="login.html">Services</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        container
    </div>
    ?>
</body>
</html>