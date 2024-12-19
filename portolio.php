<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio - Thomas Bouyssic Lopes</title>
    <link rel="stylesheet" href="portfolio.css">
</head>
<body>

    <div class="navbar2">
        <a href="profil.php" class="button">Profil </a> 
        <a href="sio.php" class="button">Apprentissage BTS SIO</a>
        <a href="cv.php" class="button">CV et Lettre de Motivation</a>
        <a href="projets.php" class="button">Projets</a>
        <a href="contact.php" class="button contact-button">Contact</a>
    </div>
    
   
    <div class="hero">
        <h1>Bienvenue sur mon portfolio</h1>
        <p>Découvrez mon parcours et mes projets en informatique.</p>
    </div>

 
    <div class="container">
        <div class="sidebar">
            <div class="profile-photo">
                <img src="image0.png" alt="Photo de profil">
            </div>
            <div class="social-icons">
                <a href="mailto:thomasbouyssiclopes@gmail.com" class="social-icon" title="Envoyer un e-mail">
                    <img src="télécharger (1).png" alt="E-mail">
                </a>
                <a href="https://wa.me/33767374833" class="social-icon" title="Me contacter sur WhatsApp" target="_blank">
                    <img src="télécharger.png" alt="WhatsApp">
                </a>
                <a href="https://www.linkedin.com/in/thomas-bouyssic-lopes-59b8a8304" class="social-icon" title="LinkedIn" target="_blank">
                    <img src="télécharger (2).png" alt="LinkedIn">
                </a>
            </div>
        </div>

        <div class="moi">
            <h1>Thomas Bouyssic Lopes</h1>
            <h2>Étudiant en BTS SIO</h2>
            <p class="moi2">Je suis très intéressé par l'univers de l'informatique, cela est d'abord dû aux jeux vidéo, et mes études ont accru cette passion. J'ai pour projet de faire un BAC+5 en informatique, et je souhaiterais en réaliser au moins une à l'étranger.</p>
            
            <div class="sections">
                <section id="about">
                    <h3>À propos de moi</h3>
                    <p class="about2">Je suis encore débutant, mais j'essaie de me former au maximum en autonomie. Je souhaite faire l'option SISR, car même si j'aime bien le développement, j'apprécie la complexité des réseaux.</p>
                </section>

                <section id="experience">
                    <h3>Expérience professionnelle</h3>
                    <ul>
                        <p class="sous-experience">
                            <p>STAGE 2022 - Faciliteam, entreprise de services informatiques</p><br>
                            Stage 2025 - Leclerc au sein de leurs entrepôts, avec leur chef informatique
                        </p>
                    </ul>
                </section>

                <section id="compétences">
                    <h3>Compétence</h3>
                    <div class="project-gallery">
                        <div class="project"> <img src="html.png" alt=""></div>
                        <div class="project"><img src="css.png" alt=""></div>
                        <div class="project"><img src="sql.png" alt=""></div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    


    <script src="snow.js"></script>
 

 <img id="bonhomme" src="bonhomme de neige2.png" alt="Bonhomme de neige" class="snowman">
 
 
 <script>
     const snowman = document.getElementById('bonhomme');
 let isLeft = true;
 
 function showSnowman() {
     
     snowman.classList.remove('from-left', 'from-right', 'visible', 'slide-out-left', 'slide-out-right');
 
     
     if (isLeft) {
         snowman.classList.add('from-left');
     } else {
         snowman.classList.add('from-right');
     }
 
    
     setTimeout(() => {
         snowman.classList.add('visible');
     }, 100);
 
     
     setTimeout(() => {
         snowman.classList.remove('visible');
 
         
         if (isLeft) {
             snowman.classList.add('slide-out-left');
         } else {
             snowman.classList.add('slide-out-right');
         }
     }, 4000); 
 
 
     isLeft = !isLeft;
 }
 
 
 setInterval(showSnowman, 30000);
 
 
 
     
 </script>

</body>
</html>
