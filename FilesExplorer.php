<?PHP
$fichiers = array();
function scan($dir) 
{ 
    $files = scandir($dir);
    unset($files[0], $files[1]);
    natcasesort($files);
    $dossier = array();
    foreach($files as $f) 
    {      
        if(is_dir($dir.'/'.$f)) 
        {
            global $dossiers;
            $dossiers = array_push($dossier,$f);
            echo '<li class="folder"><a href="?dir='.$dir.'/'.$f.'">'.$f.'</a></li>';
            //echo "<span >il y a '.$cpt.'fichier(s) dans ce dossier</span>";
            echo "<span class='date'>".date ("F d Y", filemtime($dir.'/'.$f))."</span><hr style='margin-right: 10%;width: 90%'/>";
        }
    }
    foreach($files as $key => $f) 
    {
        if(is_file($dir.'/'.$f)) 
        {
        global $fichiers;
           array_push($fichiers,$f);
            echo '<li class="file b'.$key.' rel="'.$f.'">'.$f.'</li>';
            echo "<span class='date b".$key."'>".date ("F d Y", filemtime($dir.'/'.$f))."</span><a href='delete.php?delete=".$dir.'/'.$f."'> <img src='images/supprimer.png' alt='delete'></a><hr class='date b".$key."'style='margin-right: 10%;width: 90%'/>";
        }
    }
}
$go = retour();
function retour()
    {
        if(isset($_GET['dir']) == TRUE)
        {
        $adresse = $_GET['dir'];
        $tableau = explode('/', $adresse);
        $longeur = count($tableau)-1;
        unset($tableau[$longeur]);
        $adresse = implode('/', $tableau);
        return $adresse;
        }
    }
?>