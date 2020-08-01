<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/91925d8505.js" crossorigin="anonymous"></script>
    <title>Carlos Revilla Portfolio</title>
</head>

<body>
    <div id="progressbar"></div>
    <div id="scrollPath"></div>
    <div class="container navbar">
        <header>
            <div class="lgo">
                <h1>Carlos</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">skills</a></li>
                    <li><a href="#work">my work</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <div class="container main-info-section">
        <div class="text">
            <h1>
                <span>H</span>
                <span class="m-left">o</span>
                <span class="m-left">l</span>
                <span class="m-left">a</span>
                <span class="m-left">,</span>
                <br>
                <span>S</span>
                <span class="m-left">o</span>
                <span class="m-left">y</span>
                <span class="name">C</span>
                <span class="m-left name">a</span>
                <span class="m-left name">r</span>
                <span class="m-left name">l</span>
                <span class="m-left name">o</span>
                <span class="m-left name">s</span>
                <span class="m-left">,</span>
                <br>
                <span>F</span>
                <span class="m-left">u</span>
                <span class="m-left">l</span>
                <span class="m-left">l</span>
                <span>S</span>
                <span class="m-left">t</span>
                <span class="m-left">a</span>
                <span class="m-left">c</span>
                <span class="m-left">k</span>
                <span>D</span>
                <span class="m-left">e</span>
                <span class="m-left">v</span>
                <span class="m-left">e</span>
                <span class="m-left">l</span>
                <span class="m-left">o</span>
                <span class="m-left">p</span>
                <span class="m-left">e</span>
                <span class="m-left">r</span>
                <span class="m-left">.</span>
            </h1>
            <p>Javascript / MERN / MEAN / Php / Laravel</p>
            <a href="#contact">contáctame</a>
        </div>
        <div class="profile-image">
            <img src="img/profile-image2.png" alt="">
        </div>
    </div>
    <div class="container about" id="about">
        <h1>About</h1>
        <div class="about-me-info">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quos nisi unde, corporis vel voluptates
                autem eius laborum iste ab culpa quo sunt tempora reiciendis architecto repellat voluptatem in quidem.
            </p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus quos sunt ipsum atque
                praesentium, beatae quae magnam tenetur. Ipsum voluptate minus ad consequatur. Ratione, laborum eos nisi
                eius et eveniet.
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae ipsa fugiat dignissimos repellendus
                recusandae modi aliquam sit quibusdam in eius perspiciatis aliquid tempore molestias nostrum sunt
                magnam, natus aperiam quis.
            </p>
        </div>
        <img src="img/dotted-shape.png" alt="">
    </div>

    <div class="container skills" id="skills">
        <h1>Skills</h1>
        <p class="skills-info">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. A quasi, totam debitis maiores omnis tempora,
            pariatur, dolorem commodi at iusto delectus. Unde rem non numquam ad, perferendis voluptas vero tempora.
        </p>
        <div class="container-slider">
            <div class="slider-container">
                <div class="slider-test">
                    <img src="./img/js.jpg" alt="Javascript">
                    <div>
                        <h3>Javascript</h3>
                    </div>
                </div>
                <div class="slider-test">
                    <img src="./img/react.png" alt="React">
                    <h3>React</h3>
                </div>
                <div class="slider-test">
                    <img src="./img/angular.jpg" alt="angular">
                    <h3>Angular</h3>
                </div>
                <div class="slider-test">
                    <img src="./img/laravel.png" alt="Laravel">
                    <h3>Laravel</h3>
                </div>
                <div class="slider-test">
                    <img src="./img/mysql.png" alt="mysql">
                    <h3>MySQL</h3>
                </div>
                <div class="slider-test">
                    <img src="./img/mongoDB.png" alt="mongoDB">
                    <h3>MongoDB</h3>
                </div>
                <div class="slider-test">
                    <img src="./img/php.png" alt="Php">
                    <h3>PHP</h3>
                </div>
                <div class="slider-test">
                    <img src="./img/sass.png" alt="sass">
                    <h3>Sass</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container work" id="work">
        <h1>Work</h1>
        <div class="work-category">
            <button id="designing" class="active" onclick="showRequiredCategory(this)">Web Designing</button>
            <button id="animation" onclick="showRequiredCategory(this)">Angular Projects</button>
            <button id="project" onclick="showRequiredCategory(this)">React Projects</button>
        </div>
        <div class="category-designing showCategory">
            <a href=""><img src="img/pelisplus.gif" alt=""></a>
            <a href=""><img src="img/panaderiaNg.gif" alt=""></a>
            <a href=""><img src="img/rickandmorty.gif" alt=""></a>
            <a href=""><img src="img/codesnnipets.gif" alt=""></a>
            <a href=""><img src="img/jquery.gif" alt=""></a>
        </div>
        <div class="category-animation hideCategory">
            <a href=""><img src="img/panaderiaNg.gif" alt=""></a>
        </div>
        <div class="category-project hideCategory">
            <a href=""><img src="img/rickandmorty.gif" alt=""></a>
            <a href=""><img src="img/codesnnipets.gif" alt=""></a>
        </div>
    </div>
    <div class="container contact" id="contact">
        <h1>Contact</h1>
        <form action="https://formspree.io/xpzybdja" method="POST">
            <input type="text" name="name" placeholder="Full Name">
            <input type="email" name="email" placeholder="Email">
            <input type="email" placeholder="PortfolioPersonemail@example.com" disabled>
            <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
            <input type="submit">
        </form>
    </div>

    <footer>
        <hr>
        <div class="social-container">
            <ul class="social-icons">
                <li><a href="https://github.com/karrevi"><i class="fab fa-github"></i></a></li>
                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/in/clrevilla/"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script src="js/ScrollMagic.min.js"></script>
    <script src="js/animation.gsap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/TimelineLite.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/CSSPlugin.min.js"></script>
</body>

</html>