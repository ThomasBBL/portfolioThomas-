<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>

</head>

<body style="width: 70%;
margin-left: auto;
margin-right: auto;">
    <div class="logo">
        <img src="./images/facebook.png" alt="">
        <img src="./images/twitter.png" alt="">
        <img src="./images/google.png" alt="">
        <img src="./images/youtube.png" alt="">
    </div>

 



    <div class="koo">

        <div class="container">
            <div class="left-column">
                <div class="search-bar">

                    <div style="display: flex; flex-direction: row;">
                        <img src="./images/koo_2_fourchette.png" alt="fourchette">
                        <a class="input-container">
                            <input type="search" placeholder="rechercher une recette" />
                            <a id="search">ok</a>
                        </a>
                    </div>



                    <div class="miam-miam">
                        <em>miam miam, gloup gloup, laps laps</em>
                    </div>
                </div>

           

            
            </div>
            <div class="olala">
                <div class="button-container">
                    <button form method="POST" action="login.php" class="btn se-connecter">se connecter </button>
                    <button class="btn creer-compte">créer un compte</button>
                </div>
                <button class="btn deposer-recette">déposer une recette</button>
            </div>
        </div>


        <div class="menu">
<div class="form">
       
         <form method="POST" action="recettes.php">
              <button class="menu" type="submit">RECETTES</button>
         </form>

                  <form method="POST" action="recettes.php">
                     <button class="menu" type="submit">MENUS</button>
                  </form>

                        <form method="POST" action="recettes.php">
                              <button class="menu" type="submit">DESERTS</button>
                        </form>

                               <form method="POST" action="recettes.php">
                                     <button class="menu" type="submit">MINCEURS </button>
                               </form>

                                     <form method="POST" action="recettes.php">
                                          <button class="menu" type="submit">ATELIER</button>
                                     </form>

                                           <form method="POST" action="recettes.php">
                                                <button class="menu" type="submit">CONTACT</button>
                                           </form>
</div>
           
        </div>  

        <div class="photo1">
            <img src="./images/creme-petits-poids.jpg" alt="">
            <p class="sous-menu">Block1 <br>140/300</br> </p>
            <p class="sous-menu2">Block1<br>140/300</br></p>
        </div>


    </div>
    </div>
    <div>
        <p class="jour"> RECETTES DU JOUR</p>
    </div>

    <div class="cartes">

        <div class="carte">
            <img src="./images/marmelade-carottes.jpg" alt="">

            <div class="description" id="carte1">
                <h3>Marmelade de carottes </h3>
                <p> Marmelade de carottes Marmelade de carottes</p>
                <p> Marmelade de carottes Marmelade de carottes</p>
                <p> Marmelade de carottes Marmelade de carottes</p>
                <p>Marmelade de carottes Marmelade de carottes</p>

            </div>
            <p class="auteur"><img class="auteur-image" src="./images/natha.png" alt="">
                Proposé par Laura </p>
        </div>

        <div class="carte">
            <img src="./images/pomme-de-terre-aux-herbes.jpg" alt="">

            <div class="description" id="carte2">
                <h3>Pommes de terres aux herbes </h3>
                <p> Pommes de terres aux herbes Pommes de terres aux herbes</p>
                <p>Pommes de terres aux herbes Pommes de terres aux herbes</p>
                <p>Pommes de terres aux herbes Pommes de terres aux herbes</p>
                <p>Pommes de terres aux herbes Pommes de terres aux herbes</p>

            </div>
            <p class="auteur"><img src="./images/laurence.png" alt="">
                Proposé par Laurence</p>
        </div>

        <div class="carte">
            <img src="./images/girolles-paysanne.jpg" alt="">

            <div class="description" id="carte3">
                <h3>Girolles paysanne </h3>
                <p>Girolles paysanne Girolles paysanne</p>
                <p>Girolles paysanne Girolles paysanne</p>
                <p>Girolles paysanne Girolles paysanne</p>
                <p>Girolles paysanne Girolles paysanne</p>

            </div>
            <p class="auteur"><img src="./images/annie.png" alt="">
                Proposé par Annie</p>
        </div>


    </div>





</body>

</html>
