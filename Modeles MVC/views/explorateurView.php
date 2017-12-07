<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="EvaGms, RollonDaim, SamiaBous,Kateya,  NinjaRetroGaming">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/   bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/    Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="  anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Explorateur de fichiers</title>
    </head>
    <body>
        <div class="container">
         <div class="row">
          <div class="noPadding maPage col-lg-12">               
            <header class="col-lg-12">
                <a href=<?=$retourBack?> class='btnHeader'>RETOUR</a>
                <h1>Documents</h1>
                <a href="." class='btnHeader'>ACCUEIL</a>
            </header> 
            <div id="navbar" class="col-lg-12">       
                <form class="form-inline my-2 my-lg-0" afilesExplorer.php" method="post">
                <input class="Searchbar" type="search" placeholder="Recherche" aria-label="Search">
                </form>
            </div>
            <section class="contain col-lg-12">
                <ul>
                <?php
                print_r($explorer);
                ?>
                </ul>
            </section>
            <footer class="col-lg-12">        
                <!--<input id="buttontel" type="image" name="buttonte=" valider" src="images/telecharger.png">
                <input id="buttonsup" type="image" name="buttonsu=" valider" src="images/supprimer.png">-->
            </footer>
          </div>            
        </div>
        </div>
    </body>
</html>