<!-- inclure sport.php education.php etc -->
<?php

include_once('BDconnexion/connexion.php');
include("categorie.php");
include('config.php/header.php');
include('config.php/footer.php');
error_reporting(0);

$id = $_GET['id'];

?>



       <section id="section2">

              <div class="contenu2">
                     <?php
                      $requete = $connexion -> query('SELECT * FROM article WHERE categorie='.$id.'');
                      $text1 = $requete -> fetchAll();
                      ?>
                      <?php foreach($text1 as $value){ ?>
                      <h2><?= $value['titre'] ?> </h2>
                      <p><?php  echo $value['contenu']; ?></p>
                    <?php } ?>

             </div>
        </section>
        
     
        <footer>
            <h3>copyring@MGLSI2022</h3>
        </footer>
                  
        </body>
</html> 