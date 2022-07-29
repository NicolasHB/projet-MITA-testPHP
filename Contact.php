<?php 
$titles="Contact";

include("partials/_header.php");
include("functions.php");

// creation array error
$error= [];
$errorMessage = "<span class='text-danger'>*Ce champ est obligatoire </span>";

//Variable Success
/////////////////
$success= false;

// validation du formulaire
////////////////////////////
// [1]je vérifie si le formulaire est soumis  / !empty = si c'est vide montre echo, alors que empty montre la valeur indiquer
if(!empty($_POST["submited"])){
  echo "tu as cliqué sur envoyer";
//[2] faille XSS (protection contre les balise dans les formulaires)
  $nom = trim(htmlspecialchars($_POST["name"]));
  $message = trim(htmlspecialchars($_POST["message"]));
//[3] validation de chaque input
////////////////////////////////
  //name//
  ///////
  if (!empty ($nom)) {
    if (strlen($nom)<= 2) {
      $error["nom"] = "<span class='text-danger'>3 caractères minimum</span>";
    }elseif (strlen($nom)> 30) {
      $error["nom"] = "<span class='text-danger'> 30 caractères maximum</span>";
    }
  }else{
   $error["nom"] = $errorMessage;
   debug_array($error);
  };
  
  //Message text//
  ///////////////
  if (!empty($message)) {
    if (strlen($message)<= 30) {
      $error["message"] = "<span class='text-danger'>30 caractères minimum</span>";
    }elseif (strlen($message)> 120) {
      $error["message"] = "<span class='text-danger'> 300 caractères maximum</span>";
    }
  } else {
    $error["message"] = $errorMessage;
   debug_array($error);
  }
  
  //EMAIL//
  ////////
  if (!empty($email)) {
    //vérfie si le format de l'email est bon 
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $error["email"] = 
      "<span class='text-danger'> *Email invalide !</span>";
    }
  }else{
    $error["email"] = $errorMessage;

  }
  //[4] inscription en Base de Donnée
  // if no error
  if(count($error) == 0) {
  $success = true;
  }
  
}





?>
<div class="container mx-auto">
  <div class="text-center">
    <h1 class="font-bold text-xl">Nous contactez</h1>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum adipisci quam repellat qui officia, deleniti accusantium et perferendis saepe, quasi, expedita similique ex illo quis.
    </p>
  </div>
  <div class="bg-slate-300 pl-96 flex flex-col justify-center items-center">  
    <?php 
    if($success){ ?>
    <div class="alert alert-success w-50 mx-auto" role="alert">
    Votre message à bien été envoyer 
    </div>
    <?php } else { ?>
      <form class="w-25 pt-5  " action="" method="POST">
      <!-- input Name -->
        <div class="">
          <label for="">Nom:</label>
          <input  type="text" placeholder="Nom" 
                  class="text-sm text-gray-base w-full mr-3 py-5 px-4 h-2 border border-gray-200 rounded mb-2"
                  value="<?php if(!empty ($_POST["name"])) { echo $_POST["name"];}?>" />
          <p>
          <?php 
          if(!empty($error["nom"])) { 
          echo $error["nom"];
          }else{
          echo "";
          }
          ?>
          </p>
        </div>
      <!-- Textarea => Message
      validation form => caractère mini 10 & maxi 120
      -Message erreur -->
        <div class="">
        <label for="">Message:</label>
        <input  type="message" placeholder="Message"
                class="text-sm text-gray-base w-full mr-3 py-5 px-4 h-96 border border-gray-200 rounded mb-2" 
                value="<?php if (!empty($_POST["message"])) { echo $_POST["message"];} ?>"/>
        <!-- Message d'erreur -->
          <p>
          <?php 
          if(!empty($error["message"])) { 
          echo $error["message"];
          }else{
          echo "";
          }
          ?>
          </p>
        </div>
      <!-- Input age -->
      <div class="mt-2 flex">
        <label class="display-block" for="">Age:<span class="text-red-500 ">*</span></label>
        <input type="number" name="age" class="form-control" value="<?php if(!empty ($_POST["age"])) { echo $_POST["age"];}?>">
        <!-- Message d'erreur -->
        <p>
          <?php 
          if(!empty($error["age"])) { 
          echo $error["age"];
          }else{
          echo "";
          }
          ?>
        </p>
      </div>
        
      <button type="submit"
              class="bg-blue-700 w-full mt-4"
              value="envoyer"
              name="submited">
              envoyer
      </button>
    </form>
  <?php } ?>
  </div>
</div>


<div class="h-screen flex flex-col items-center justify-center">
            <p class="text-green-700 text-xl mb-3">
              Welcome to GeeksforGeeks
            </p>
  
            <form>
              <label for="">Nom:</label>
              <input  type="text" placeholder="Nom" 
                      class="text-sm text-gray-base w-full mr-3 py-5 px-4 h-2 border border-gray-200 rounded mb-2"
                      value="<?php if(!empty ($_POST["name"])) { echo $_POST["name"];}?>" />
                <label for="">Message:</label>
                <input  
                       type="message" placeholder="Message"
                       class="text-sm text-gray-base w-full mr-3 
                              py-5 px-4 h-96 border border-gray-200 
                              rounded mb-2" 
                              value="<?php if (!empty($_POST["message"])) { echo $_POST["message"];} ?>"/>
  
                <button type="submit"
                        class="bg-green-400 w-full mt-4"
                        value="envoyer"
                        name="submited">
                    envoyer
                </button>
            </form>
        </div>




<?php include("partials/_footer.php"); ?>

