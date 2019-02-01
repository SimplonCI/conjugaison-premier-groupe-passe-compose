<?php 
//$auxi = $_POST['auxiliaire']; 
$verbe = $_POST['verbe']; 
$ter = substr($verbe,-2);// terminaison du verbe
if ($ter=='ir' || $ter=='re' ) {
    echo $verbe.' n \'est pas du premier groupe';
}
elseif($verbe=='aller'){
    echo $verbe.' n \'est pas du premier groupe';
}

elseif ($verbe !=='tomber'&& $verbe !=='manger'&& $verbe !=='balayer'&& $verbe !=='boter'
&& $verbe !=='voter') {

  
    echo 'conjugaison du verbe '. $verbe.'avec l\'auxiliaire etre: '; echo'<br><br>';
    echo'je suis '; echo rtrim($verbe,"er").'é';echo'<br>';
    echo'tu es '; echo rtrim($verbe,"er").'é'; echo'<br>';
    echo'il est ';echo rtrim($verbe,"er").'é'; echo'<br>';
    echo'elle est ';echo rtrim($verbe,"er").'ée'; echo'<br>';
    echo'nous sommes '; echo rtrim($verbe,"er").'és'; echo'<br>';
    echo'vous etes '; echo rtrim($verbe,"er").'és'; echo'<br>';
    echo'ils sont '; echo rtrim($verbe,"er").'és'; echo'<br>';
    echo'elles sont '; echo rtrim($verbe,"er").'ées'; echo'<br>';

    echo'==========================================<br>';

    echo 'conjugaison du verbe '. $verbe.'avec l\'auxiliaire avoir: '; echo'<br><br>';
    echo'j\'ai '; echo rtrim($verbe,"er").'é';echo'<br>';
    echo'tu as '; echo rtrim($verbe,"er").'é'; echo'<br>';
    echo'il/elle a ';echo rtrim($verbe,"er").'é'; echo'<br>';
    echo'nous avons '; echo rtrim($verbe,"er").'é'; echo'<br>';
    echo'vous avez '; echo rtrim($verbe,"er").'é'; echo'<br>';
    echo'ils/elles ont '; echo rtrim($verbe,"er").'é'; echo'<br>';
    
    }
    elseif ($verbe =='tomber') {

  
        echo 'conjugaison du verbe '. $verbe.' avec l\'auxiliaire etre: '; echo'<br>';
        echo'je suis '; echo rtrim($verbe,"er").'é';echo'<br>';
        echo'tu es '; echo rtrim($verbe,"er").'é'; echo'<br>';
        echo'il est ';echo rtrim($verbe,"er").'é'; echo'<br>';
        echo'elle est ';echo rtrim($verbe,"er").'ée'; echo'<br>';
        echo'nous sommes '; echo rtrim($verbe,"er").'és'; echo'<br>';
        echo'vous etes '; echo rtrim($verbe,"er").'és'; echo'<br>';
        echo'ils sont '; echo rtrim($verbe,"er").'és'; echo'<br>';
        echo'elles sont '; echo rtrim($verbe,"er").'ées'; echo'<br>';
    
        echo'=================================================================';
    }

    elseif ($verbe =='manger'||$verbe =='balayer'||$verbe =='boter'||$verbe =='voter') {
    echo 'conjugaison du verbe '. $verbe.'avec l\'auxiliaire avoir: '; echo'<br><br>';
    echo'j\'ai '; echo rtrim($verbe,"er").'é';echo'<br>';
    echo'tu as '; echo rtrim($verbe,"er").'é'; echo'<br>';
    echo'il/elle a ';echo rtrim($verbe,"er").'é'; echo'<br>';
    echo'nous avons '; echo rtrim($verbe,"er").'é'; echo'<br>';
    echo'vous avez '; echo rtrim($verbe,"er").'é'; echo'<br>';
    echo'ils/elles ont '; echo rtrim($verbe,"er").'é'; echo'<br>';
    }
?>