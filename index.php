<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="EvaGms, RollonDaim, SamiaBous,Kateya, NinjaRetroGaming">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Explorateur de fichiers</title>
</head>
<body>
<div class="container">
 <div class="row">
  <div class="noPadding maPage col-lg-12">
    <?php 
        if(isset($_GET['dir']))
        {
             $d = str_replace( "..", "",$_GET['dir']);
        }
        else 
        {
            $d = '.';
        }
    ?>    
            <header class="col-lg-12">
                <?PHP include 'filesExplorer.php';
                if($d != '.')
                {
                echo "<a href=\"http://localhost/FilesExplorer/?dir=".$go."\" class='btnHeader'>RETOUR</a>";
                }
                else 
                {
                echo "<a href=\"\" class='btnHeader'>RETOUR</a>";
                }
                ?>
                            <h1>Documents</h1>
                <a href="." class='btnHeader'>ACCUEIL</a>
            </header>
            <!-- <div id="navbar" class="col-lg-12">       
                <form class="form-inline my-2 my-lg-0" action="filesExplorer.php" method="post">
                <input class="Searchbar" type="search" placeholder="Recherche" aria-label="Search">
                </form>
            </div>-->
            <section class="contain col-lg-12">
                <ul>
                <?php 
                    scan($d);
                ?>
                </ul>
            </section>
            <!-- Fin SECTION container -->
            <footer class="col-lg-12">
                <p class="nom">NinjaRetroGaming</p>
                <div class="mini_footer">
                    <!--<a href="download.php?download=<?=$d?>" class="dowload"><img class="telecharger" src="images/telecharger.png"></a>-->
                </div>
            </footer>
            </div>
            <!-- Fin mapage -->
            <!--<script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>-->
            <!--<script src="explorer.js"></script>-->
        </div>
    </div>
</body>
</html>