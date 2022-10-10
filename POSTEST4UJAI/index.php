<!DOCTYPE html>
<html lang="en">
<lin>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music world</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
        <header>
            <nav>
                <div class="logo">Music World</div>
                    <div class="menu">
                        <ul>
                            <li><a href='#home'>Home</a></li>
                            <li><a href='#hits'id="hits">Hits</a></li>
                            <li><a href='about.html'>About Me</a></li>
                            <li><a href="#contact" onclick="myFunction()">Contact</a></li>
                            <li><a href='form.php' class="tbl-pink">Member</a></li>
                            <li>
                                <label>
                                    <input type="checkbox" class="checkbox" id="tombol">
                                    <span class="check"></span>
                                </label>
                            </li>
                        </ul>
                    </div>
            </nav>
        </header>
        <main>
            <div class="wrapper">
                <section id="home">
                    <img src="5883069.jpg" width="55%">
                    <div class="column">
                        <p class="description" id="text">#1 Music Platform</p>
                        <h2>Music Is friend~</h2>
                        <p class="desc">This platform helps you find your favorite music!</p>
                    </div>
                </section>
            </div>
        </main>
        <footer>
            <div class="footer">
                <div class="row">
                    <div class="footer-col">
                        <h4> Follow Us </h4>
                        <div class="social-links">
                            <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-linkedin'></i></a>
                        </div>
                    </div>
                        <div class="footer-col">
                            <h4>Layanan</h4>
                            <ul>
                                <li><a href="#">Bantuan</a></li>
                                <li><a href="#">Accept Cookies</a></li>
                                <li><a href="#">tentang</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>jelajah</h4>
                            <ul>
                                <li><a href="#">karir</a></li>
                                <li><a href="#">security</a></li>
                                <li><a href="#">media</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>platform</h4>
                            <ul>
                                <li><a href="#">Spotify</a></li>
                                <li><a href="#">apple music</a></li>
                                <li><a href="#">soundcloud</a></li>
                                <li><a href="#">joox</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="lanjut.js"></script>
        <script>
            var tombol = document.getElementById("tombol");
    
            tombol.onclick = function(){
                document.body.classList.toggle("dark-theme");
            }
        </script>
</body>
</html>