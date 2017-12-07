<?php

if(isset($_GET['download'])&&!empty($_GET['download']))/*Telecharge un fichier*/

{
  // On instancie la classe.
      $zip = new ZipArchive();

      if(is_dir($_GET['download']))
      {
        // On teste si le dossier existe, car sans ça le script risque de provoquer des erreurs.
        if($zip->open('Archive.zip', ZipArchive::CREATE) == TRUE)
      {

      // Ouverture de l’archive réussie.
      // Récupération des fichiers.

      $fichiers = scandir($_GET['download']);
      // On enlève . et .. qui représentent le dossier courant et le dossier parent.
      unset($fichiers[0], $fichiers[1]);

      foreach($fichiers as $f)
      {
        // On ajoute chaque fichier à l’archive en spécifiant l’argument optionnel.
        // Pour ne pas créer de dossier dans l’archive.
        if(!$zip->addFile("C:/wamp64/www/FilesExplorer/".$f, $f))
        {
        	echo "C:/wamp64/www/FilesExplorer/".$f;
          echo 'Impossible d&#039;ajouter &quot;'.$f.'&quot;.<br/>';
        }
      }

      // On ferme l’archive.
      $zip->close();

      // On peut ensuite, proposer un téléchargement.
      header('Content-Transfer-Encoding: binary'); //Transfert en binaire (fichier).
      header('Content-Disposition: attachment; filename="Archive.zip"'); //Nom du fichier.
      header('Content-Length: '.filesize('Archive.zip')); //Taille du fichier.
      readfile('Archive.zip');
    }
    else
    {
      // Erreur lors de l’ouverture.
      // On peut ajouter du code ici pour gérer les différentes erreurs.
      echo 'Erreur, impossible de créer l&#039;archive.';
    }
      }
      else
      {
        // Possibilité de créer le dossier avec mkdir().
        echo 'Le dossier &quot;FilesExplorer/&quot; n&#039;existe pas.';
      }
// download($_GET['download']);/*....*/

}

?>