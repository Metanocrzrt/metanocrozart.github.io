<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Nav</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>   
    <button id="myButton">klik saya</button> 
    
    <div class="nav" id="navi">
        <ul>
            <li><img src="download-removebg-preview.png" alt="logotoko" width="40px"></li>
            <li id="namatoko" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Metano Shoes</li>
            <li><a href="#Home">Home</a></li>
            <li><a href="#aboutme">About Me</a></li>
            <!-- <li><a href="#">Contact</a></li> -->
            <li><a href="#basket">Basket</a></li>
            <li><a href="form.php">Form</a></li>
            <label class="switch">
                <input type="checkbox" id="cb" value="true" onchange="check()">
                <span class="slider round"></span>
            </label>
            <!-- <li><a href="#">Searching</a></li> -->
        </ul>
    </div>
    
    <div class="contain" id="container">
        <div class="logo">
            <img src="fotoitu.avif" alt="">
    
        </div>
        <div id="basket"><p>All Items</p></div>
        
        
        
    
        <div class="card-row">
            <div class="card-column">
                <div class="card">
                    <img src="sepatu2.jpg" alt="">
                    <h3>Adidas Shoes</h3>
                    <p>RP.600.000</p>
                    <p> Metano Shoes</p>
    
    
                </div>
    
            </div> 
            <div class="card-column">
                <div class="card">
                    <img src="sepatu3.jpg" alt="">
                    <h3>Nike Shoes</h3>
                    <p>RP.700.000</p>
                    <p> Metano Shoes</p>
    
    
                </div>
    
            </div> 
            <div class="card-column">
                <div class="card">
                    <img src="sepatu4.jpg" alt="">
                    <h3>Adidas Shoes</h3>
                    <p>RP.500.000</p>
                    <p> Metano Shoes</p>
    
    
                </div>
    
            </div> 
            <div class="card-column">
                <div class="card">
                    <img src="sepatu5.avif" alt="">
                    <h3>Vans Shoes</h3>
                    <p>RP.900.000</p>
                    <p> Metano Shoes</p>
    
    
                </div>
    
            </div> 
    
        </div>

        <center>
            <h2 id="aboutme">About Me</h2>
            <button type="button" onclick="translate()">ubah</button>
            
            <div class="card">
                <img src="fotoku.jpg" alt="">
                <div class="card-desk">
                    <h2>Sancto Metano Crozart</h2>
                    <p>Teknik Informatika 2021</p>
                    <p>2109106112</p>
                    <p>suka main futsal tapi ga suka mainin hati perempuan</p>
    
                </div>
    
            </div>
        </center>
    </div>
        
    <section class="footer">
        <div class="social">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-snapchat"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
        </div>
        <ul class="list">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Service</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Terms</a>
            </li>
            <li>
                <a href="#">Privacy Policy</a>
            </li>
            
    
        </ul>
        <p class="copyright">
            @copyright by MetanoCrzrt
        </p>
    </section>
    

    
<script type="text/javascript" src="script.js"></script>
</body>
</html>