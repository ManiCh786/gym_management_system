<?php
session_start();
if(isset( $_SESSION['Logged_in'])){   
    echo "<script>
    window.location = 'home.php';
       </script>";  
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>FINAL YEAR PROJECT</title>
    <link rel="" type="" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</head>

<body>
    <div class="hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url(images/afohs_slider_size.jpg);">
        <div class="icon">
            <ul>
                <li class="facebook">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <div class="slider">
                        <a href="https://www.facebook.com/Gujratgymkhana/" target="_blank">
                            <p>Facebook</p>
                        </a>
                    </div>
                </li>

                <li class="twitter">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <div class="slider">
                        <a href="https://twitter.com/gujratgymkhana" target="_blank">
                            <p>twitter</p>
                        </a>
                    </div>
                </li>

                <li class="instagram">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <div class="slider">
                        <a href="https://www.instagram.com/p/BGme30bjCUL/?utm_medium=copy_link" target="_blank">
                            <p>instagram</p>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <header>
        <section id="navbar">
            <div class="wrapper fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
                <nav>
                    <input type="checkbox" id="show-menu">
                    <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
                    <div class="content">
                        <div class="logo"><a href="#">Gujrat Gymkhana</a></div>
                        <ul class="links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#facilities">Facilities</a></li>
                            <!-- <li><a href="#">Gallery</a></li> -->
                            <li><a href="#aboutus">About Us</a></li>
                            <li><a href="#contact-us">Contact Us</a></li>
                        
                            <?php
                             if(isset( $_SESSION['Logged_in'])){
                                 ?>
                            <li><a   href="logout.php" >Logout</a></li>
                            <?php
                             }else{
                            ?>
                            <li><a   href="memberlogin.php" >Login </a></li>
                            <li><a href="membership.php" target="_blank" class="apply">Apply for Membership</a></li>
                            <?php
                             }        
                            ?>
                       
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
    </header>
    <!-- ----------------------------------------------Facilities------------------------------------- -->

    <section id="facilities" class="facilities">
        <h1>FACILITIES</h1>
        <div class="card__collection clear-fix ">
            <div class="cards cards--two">
                <img src="images/Billiard_carso-1.jpg" class="img-responsive" alt="Snooker">
                <span class="cards--two__rect"></span>
                <p>SNOOKER</p>
            </div>
            <div class="cards cards--three">
                <img src="images/pool.jpg" class="img-responsive" alt="Swimming Pool">
                <span class="cards--three__rect-1">
                            <span class="shadow-1"></span>
                <p>SWIMMING POOL</p>
                </span>
                <span class="cards--three__rect-2">
                          <span class="shadow-2"></span>
                </span>
            </div>
            <div class="cards cards--two">
                <img src="images/homepage.jpg" class="img-responsive" alt="Gymnasium">
                <span class="cards--two__rect"></span>
                <p>GYMNASIUM</p>
            </div>
            <div class="cards cards--three">
                <img src="images/t1.jpg" class="img-responsive" alt="Tennnis">
                <span class="cards--three__rect-1">
      <span class="shadow-1"></span>
                <p>TENNIS</p>
                </span>
                <span class="cards--three__rect-2">
      <span class="shadow-2"></span>
                </span>
            </div>
            <div class="cards cards--two">
                <img src="images/hall.jpg" class="img-responsive" alt="banquet Hall">
                <span class="cards--two__rect"></span>
                <p>BANQUET HALL</p>
            </div>
            <div class="cards cards--three">
                <img src="images/001.jpg" class="img-responsive" alt="Rest Room">
                <span class="cards--three__rect-1">
      <span class="shadow-1"></span>
                <p>LIVING ROOM</p>
                </span>
                <span class="cards--three__rect-2">
      <span class="shadow-2"></span>
                </span>
            </div>
            <div class="cards cards--two">
                <img src="images/download.jpg" class="img-responsive" alt="Dinning Hall">
                <span class="cards--two__rect"></span>
                <p>Dinning Hall</p>
            </div>
            <div class="cards cards--three">
                <img src="images/golf-.jpg" class="img-responsive" alt="Golf">
                <span class="cards--three__rect-1">
      <span class="shadow-1"></span>
                <p>GOLF</p>
                </span>
                <span class="cards--three__rect-2">
      <span class="shadow-2"></span>
                </span>
            </div>
        </div>
    </section>
    <!-- ---------------------------------------About Us----------------------------------- -->
    <section class="aboutus" id="aboutus">
        <h1>ABOUT US</h1>
        <p>The primary motivation behind the ambition to assume management of the center is the wish to provide a centrally located, top quality, thriving community club which will improve the quality of life for the whole local community by seeking to promote
            the principles of personal development, healthy lifestyle, well being, community engagement and empowerment and social inclusion within the bounds of our norms, religious / cultural values and socio-economic environment. And that this should
            extend to the long term to achieve this aim the management will operate the club as a multi-faceted resource cultural center. The Center will offer a variety of spaces that will enable many and diverse cultural activities to develop and strengthen.</p>
    </section>
    <!-- -----------------------------------Contact us--------------------------------- -->
    <section id="contact-us">
        <div class="container">
            <div class="contact">
                <div class="left-side">
                    <div class="address details">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="topic">Address</div>
                        <div class="text-one">Court Area, Gujrat, Punjab</div>
                    </div>
                    <div class="phone details">
                        <i class="fas fa-phone-alt"></i>
                        <div class="topic">Phone</div>
                        <div class="text-one">(053) 3607705</div>
                    </div>
                    <div class="email details">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">Email</div>
                        <div class="text-one">gujratgymkhana@creative.com</div>
                    </div>
                </div>
                <div class="right-side">
                    <div class="topic-text">Send us a message</div>
                    <form class="gform pure-form pure-form-stacked" method="POST" data-email="malaikabilal120@gmail.com" action="https://script.google.com/macros/s/AKfycbzBdyOM8S4wLitucH2VAOoRyQUgtfw6j-E_bAzoz5IfQM8fIzBzHjBfRd_BfLvpPCo9/exec">
                        <div class="form-elements">
                            <div class="input-box">
                                <input type="text" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="input-box">
                                <input type="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="input-box message-box">
                                <textarea name="message" placeholder="Enter text here..."></textarea>
                            </div>
                            <button class="button"> Send Now</button>
                        </div>
                        <!-- Thankyou_message --><br>
                        <div class="thankyou_message"><br><br>
                            <h4>Thanks for contacting us!</h4>
                            <h1>*******</h1>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- -------------------------top----------- -->
        <a id="back-to-top" href="#" class="btn btn-danger btn-lg back_to_top" role="button"><i class="fas fa-chevron-up"></i></a>


    </section>

    <script data-cfasync="false" type="text/javascript">
        (function() {
            function validEmail(email) {
                var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                return re.test(email);
            }

            function validateHuman(honeypot) {
                if (honeypot) {
                    console.log("Robot Detected!");
                    return true;
                } else {
                    console.log("Welcome Human!");
                }
            }

            function getFormData(form) {
                var elements = form.elements;

                var fields = Object.keys(elements).filter(function(k) {
                    return (elements[k].name !== "honeypot");
                }).map(function(k) {
                    if (elements[k].name !== undefined) {
                        return elements[k].name;
                    } else if (elements[k].length > 0) {
                        return elements[k].item(0).name;
                    }
                }).filter(function(item, pos, self) {
                    return self.indexOf(item) == pos && item;
                });

                var formData = {};
                fields.forEach(function(name) {
                    var element = elements[name];
                    formData[name] = element.value;
                    if (element.length) {
                        var data = [];
                        for (var i = 0; i < element.length; i++) {
                            var item = element.item(i);
                            if (item.checked || item.selected) {
                                data.push(item.value);
                            }
                        }
                        formData[name] = data.join(', ');
                    }
                });

                // add form-specific values into the data
                formData.formDataNameOrder = JSON.stringify(fields);
                formData.formGoogleSheetName = form.dataset.sheet || "Sheet1"; // default sheet name
                formData.formGoogleSendEmail = form.dataset.email || ""; // no email by default

                console.log(formData);
                return formData;
            }

            function handleFormSubmit(event) {
                event.preventDefault();
                var form = event.target;
                var data = getFormData(form);
                if (data.email && !validEmail(data.email)) {
                    var invalidEmail = form.querySelector(".email-invalid");
                    if (invalidEmail) {
                        invalidEmail.style.display = "block";
                        return false;
                    }
                } else {
                    disableAllButtons(form);
                    var url = form.action;
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', url);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function() {
                        console.log(xhr.status, xhr.statusText);
                        console.log(xhr.responseText);
                        var formElements = form.querySelector(".form-elements")
                        if (formElements) {
                            formElements.style.display = "none"; // hide form
                        }
                        var thankYouMessage = form.querySelector(".thankyou_message");
                        if (thankYouMessage) {
                            thankYouMessage.style.display = "block";
                        }
                        return;
                    };
                    var encoded = Object.keys(data).map(function(k) {
                        return encodeURIComponent(k) + "=" + encodeURIComponent(data[k]);
                    }).join('&');
                    xhr.send(encoded);
                }
            }

            function loaded() {
                console.log("Contact form submission handler loaded successfully.");
                var forms = document.querySelectorAll("form.gform");
                for (var i = 0; i < forms.length; i++) {
                    forms[i].addEventListener("submit", handleFormSubmit, false);
                }
            };
            document.addEventListener("DOMContentLoaded", loaded, false);

            function disableAllButtons(form) {
                var buttons = form.querySelectorAll("button");
                for (var i = 0; i < buttons.length; i++) {
                    buttons[i].disabled = true;
                }
            }
        })();
    </script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 50) {
                    $('#back-to-top').fadeIn();
                } else {
                    $('#back-to-top').fadeOut();
                }
            });
            // scroll body to 0px on click
            $('#back-to-top').click(function() {
                $('body,html').animate({
                    scrollTop: 0
                }, 400);
                return false;
            });
        });
    </script>
</body>

</html>