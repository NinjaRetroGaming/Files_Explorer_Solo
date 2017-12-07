<?php

$fichiers = array();

class Explorer{
    public function scan($dir)
    {
        $files = scandir($dir); 
        unset($files[0], $files[1]);
        natcasesort($files); 
        $dossier = array();
        $string = "";
        foreach($files as $f) 
        {      
            if(is_dir($dir.'/'.$f)) 
            {
                global $dossiers;
                $dossiers = array_push($dossier,$f);
                $string .= '<li class="folder"><a href="?dir='.$dir.'/'.$f.'">'.$f.'</a></li>';
                
                $string .= "<span class='date'>".date ("F d Y", filemtime($dir.'/'.$f))."</span><hr/>"; 
            }
        }
        foreach($files as $f) 
        {
            if(is_file($dir.'/'.$f)) 
            {
                global $fichiers;
                   array_push($fichiers,$f);
                   $string .= '<li class="file" rel="'.$f.'">'.$f.'</li>';
                   $string .= "<span class='date'>".date ("F d Y", filemtime($dir.'/'.$f))."</span><hr/>";
            }        
        } 
        return $string;
    }   
}

$back = retour();
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

if ($d != '.') 
    {
    $retourBack = "\"http://localhost/FilesExplorer/?dir=".$back."\"";
    }
else 
    {
    $retourBack = "\"\"";
    }
?>