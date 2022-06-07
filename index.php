<?php
include_once('BDconnexion/connexion.php');
include("categorie.php");
include("config.php/header.php");
include('config.php/footer.php');

?>

        <h1 id="acc">LES DERNIERES ACTUALITES </h1>
        <?php for($i=1; $i<=2; $i++){?>

       <section id="section1">
          
              <div class="contenu">
                     <?php
                      $requete = $connexion -> query('SELECT * FROM article WHERE id='.$i.'');
                      $text1 = $requete -> fetch();
                      ?>
                      <h2><?= $text1['titre'] ?> </h2>
                      <p><?php  echo $text1['contenu']; ?></p>
             </div>
        </section>
        <?php }?>

      
     
       
                  
        </body>
</html> 