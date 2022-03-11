<?php 
     $nom = $_POST["nom2"];
     $prenom = $_POST["prenom"];
      $age= $_POST["age"];
      $tel= "0658728348";
      $mail ="bobiss972@gmail.com";
      echo " votre nom est ".$nom."<br>votre prenom est ".$prenom."<br>votre age est ".$age."<br>votre numero de telephone est ".$tel."<br>votre mail est ".$mail;
      $nombre1 = 12;
      $nombre2 = 6;
      $soustract= $nombre1 - $nombre2;
    
     echo "<br>"  .$soustract;
      if ($age <62 )

      {?>
          <h1 style="background:red">INTERDIT </h1>
          <?php 
          $autorisation ="non";
         
      }
       
      else if($age >62 )
      {
        echo "il est temps de se reposer";
        $autorisation ="oui";
      }

      echo "<br> vous etes rentrer ? ".$autorisation;

?>
    

