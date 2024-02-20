<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link rel='stylesheet' type='text/stylesheet' href='public/index.css'>

        <title>sai catering service</title>
        <link rel="icon" type="image/x-icon" href="img/im.png">
    </head>
    <body>
        <script src="main.js"></script>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid" id="navbar">
                <div>
                    <img src="img/im.png" width="150" height="60" border-radius="40px">
                </div>
        
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item">
                            <a href="#a-z" class="select">A-Z</a>
                            <!-- Dropdown menu for A-Z -->
                            <ul class="dropdown">
                                <li><a href="#veg-list">Veg list</a></li>
                                <li><a href="#non-veg-list">Non-veg list</a></li>
                            </ul>
                        </li>
                        <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>
        
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>
        

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title"><br> <span class="home__title-color">sai catering service</span><br> nedamangalam</h1>

                    <button><a href="#contact" class="button" >Contact</a></button>
                </div>

                <div class="home__social">
                    <a href="" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-behance' ></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>

                <div class="home__img">
                
                    <img src="img/v1.jpg" width="350" height="450">
                    
                    <img src="img/v2.jpg" width="350 " height="450">
                 </div>
            </section>
                 <!--===== ABOUT =====-->

                 <section class="about section " id="about">
                    <h2 class="section-title">About</h2>
    
                    <div class="about__container bd-grid">
                        <div class="about__img">
                            <img src="" alt="">
                        </div>
                        
                        <div>
                            <h2 class="about__subtitle"></h2>
                            <p class="about__text"></p>           
                        </div>                                   
                    </div>
                </section>


           


            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Work</h2>

                <div class="work__container bd-grid">
                 
                </div>
            </section>


            <!--===== CONTACT =====-->
        
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                <form name="myform" method="post" action="contact.php" class="contact__form" onsubmit="return validateForm()">
    Name: <input type="text" id="name" name="name" placeholder="Name" class="contact__input">
    Email: <input type="email" id="email" name="email" placeholder="Email" class="contact__input">
    Location: <textarea id="location" name="location" cols="30" rows="10" class="contact__input"></textarea>
    <input type="submit" value="Contact" class="contact__button button">
</form>

                </div>
            </section> 
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">catering service</p>
            <div class="footer__social">
                <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p class="footer__copy">&#169; Bedimcode. All rigths reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script >
             function validateForm() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var location = document.getElementById("location").value;

        if (name == "" || email == "" || location == "") {
            alert("Please enter all the fields");
            if (name == "") {
                document.getElementById("name").focus();
            } else if (email == "") {
                document.getElementById("email").focus();
            } else {
                document.getElementById("location").focus();
            }
            return false;
        }
        return true;
    }
  
    // Get URL parameters function
    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    // Check if success parameter is true and show alert
    var successParam = getParameterByName('success');
    if (successParam === 'true') {
        alert('Email sent successfully!');
    } else if (successParam === 'false') {
        alert('Failed to send email. Please try again later.');
    }


        </script>


       
    </body>
</html>