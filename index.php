<?php include 'connexion.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loccar_style.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- gps-->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxkX6LOvJLymO9_jhau3_SCf7NFR88T7o&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Document</title>
</head>
<body>
<a class="scroll-up-btn" href="#">
        <i class="fas fa-angle-up"></i>
</a>
<section class="header">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"><img src="images/logo1.png"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto text-right">
                      <li class="nav-item ">
                        <a class="nav-link active-home" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" >About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" >Contact Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="login.php" >login</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
    </div>
    </section>
    <div id="entete">
        <video class="video_entete"  autoplay muted >
            <source src="images/Bugatti.mp4" type="video/mp4"/>
        </video>
        <p class="nomsite">Location CAR</p>

        	<div id="formauto">
                <form name="formauto" action="" method="post">
                    <input type="text" name="motcle" placeholder="  Recherche par Marque" id="motcle">
                    <input type="submit" name="btsubmit" value="Recherche" class="btfind">
                </form>
            </div>
    </div>
    <div class="articles">
    
            <h2 class="title">listes des voitures</h2>
        <?php
        if (isset($_POST['btsubmit']))

        {
            $mc=$_POST['motcle'];

            $reqselect="select * from automobile where MARQUE like '%$mc%'";

        }	
            else{
            $reqselect="select * from automobile";
        }


        $resultat=mysqli_query($cnloccar,$reqselect);

        $nbr=mysqli_num_rows($resultat);
        echo "<p><b> ".$nbr."</b> Resultat de votre Recherche...</p>";
        while($ligne=mysqli_fetch_assoc($resultat))
        {
        ?>
        <div id="auto">
            <img src="<?php echo $ligne['PHOTO']; ?>"><br>
            <?php echo "IMM : ".$ligne['IMM']; ?><br>
            <?php echo "Nom : ".$ligne['MARQUE']; ?><br>
            <?php echo "Prix : ".$ligne['PRIX_LOC']."DH"; ?><br>
        </div>


        <?php } ?>

</div>
<section class="review">
        
        <div class="container" id="about">
        
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            
                <ol class="carousel-indicators">
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <h2 class="title">A propos de nous</h2>   
                  <div class="carousel-item active">
                    <img src="images/user.png">
                    <div class="carousel-caption">
                        <h6>Charki abdelillah</h6>
                        <small>charkiabdillah@gmail.com</small>
                        <p>je suis un étudiant de école supérieure de technologie branche :genie informatique<br>je suis passione a <span style="color: crimson;" class="typing-1"></span></p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/charki.jpg">
                    <div class="carousel-caption">
                        <h6>Charki abdelillah 2 </h6>
                        <small>charkiabdillah@gmail.com</small>
                        <p>xxxxxxxxxxxxxxxxxx, <br>xxxxxxxxxxxxxxxxxxxxxxxxxxxx.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/charki.jpg">
                    <div class="carousel-caption">
                      <h6>Charki abdelillah 3</h6>
                      <small>charkiabdillah@gmail.com</small>
                      <p>xxxxxxxxxxxxxxxxxxxxxxxxx, <br>xxxxxxxxxxxxxxxxxxxxxxxxx.</p>
                    </div>
                  </div>
                </div>
                
              </div>
        </div>
    </section>
    <!-- service section start -->
    <div class="articles">
    <section class="contact" id="services">
        <div class="max-width">
            <h2 class="title">Services</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">GPS:</div>
              <!--The div element for the map -->
                    <div id="map"></div>  
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <div class="content">
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-laptop-house"></i>
                            <div class="info">
                                <div class="head">Jours</div>
                                <div class="sub-title">Lundi > Samedi</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-clock"></i>
                            <div class="info">
                                <div class="head">Temps</div>
                                <div class="sub-title">8 > 18</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">Charkilocation_Traivaille@gmail.com</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-phone-alt"></i>
                            <div class="info">
                                <div class="head">Appelez-Nous</div>
                                <div class="sub-title">+212690784557</div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <!-- contact section start -->
    <div class="articles">
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">contactez nous</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum corporis fuga corrupti. Doloribus quis soluta nesciunt veritatis vitae nobis?</p>
                    <div class="icons">
                        <div class="content">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Prakash Shahi</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Surkhet, Nepal</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">abc@gmail.com</div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </div>
        <!-- footer section start -->
    <footer>
        <span style="text-decoration: none!important;">Created By <a class="kak" href="#">Charki abdelillah</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>
<script src="script.js"></script>
</body>
</html>