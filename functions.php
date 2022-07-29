<?php 
function trim_stag($val_form)
{
    echo trim(htmlspecialchars($_GET[$val_form]));
};
function trim_stag_post($val_form)
{
    echo trim(htmlspecialchars($_POST[$val_form]));
};

//function for protect input fields
function protect_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
};
//la fonction permet d'afficher la balise <pre> et print_r (fonction à utiliser dans tout les projet PHP)
function debug_array($arr) {
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
};

?>