<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laman Login dan registrasi</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<div></div>
<body>
    
    <!-- header -->
    <header class="header">
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#">Login</a>
            <a href="#">Giftcard</a>
            <a href="#">Help</a>
        </nav>

        <form action="#" class="search-bar">
            <input type="text" placeholder="search...">
            <button type="submit"><i class='bx bx-search'></i></button>
        </form>
    </header>
<div class="background"></div>
    <div class="container">
        <div class="content">
            <h2 class="logo"><i class='bx bx-shield-plus' ></i>Brightpath</h2>
            <div class="text-sci">
                <h2>Welcome! <br><span> To our website.</span> </h2>
    
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos suscipit neque voluptatibus maiores aperiam magni facilis repellendus, porro placeat distinctio hic assumenda numquam asperiores quod doloremque incidunt iste nemo quaerat.</p>

                <div class="social-icons">
                    <a href="#"><i class='bx bxl-instagram' ></i></a>
                    <a href="#"><i class='bx bxl-twitter' ></i></a>
                    <a href="#"><i class='bx bxl-facebook' ></i></a>
                    <a href="#"><i class='bx bx-link'></i></a>
                </div>

        </div>

       
        </div>

        <div class="logreg-box">
            <div class="form-box login">
                <form action="">
                    <h2>sign in</h2>

                    <div class="input-box">
                        <span class="icon">
                            <i class='bx bxs-envelope' ></i>
                        </span>
                        <input type="email" name ="emails" required>
                        <label>email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon">
                            <i class='bx bxs-lock-alt' ></i>
                        </span>
                        <input type="password" name = "pass" required>
                        <label>password</label>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">remember me</label>
                        <a href="#">forgot password? </a>
                    
                    </div>

                   <button type="submit" name = "Submit" value = "Submit"class="btn">sign in</button>

                   <div class="login-register"><p>don't have an account? <a href="#" class="register-link">sign in</a> </p></div>
                   

                </form>
                
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html><?php /**PATH C:\applicationweb\brightpath\resources\views/login1.blade.php ENDPATH**/ ?>