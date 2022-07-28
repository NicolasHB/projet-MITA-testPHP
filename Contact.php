<?php 
$titles="Contact";

include("partials/_header.php"); 
?>
  <div class="container mx-auto">
    <div class="text-center">
      <h1 class="text-red-500">Nous contactez</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum adipisci quam repellat qui officia, deleniti accusantium et perferendis saepe, quasi, expedita similique ex illo quis.
      </p>
    </div>
    <div class="">
      <form action="Contact.php" method="POST">
        <div class="">
          <label for="name">name</label>
          <input type="name" name="name">
        </div>
        <div class="">
          <label for="email">name</label>
          <input type="email" name="email">
        </div>
        <div class="">
          <label for="message">name</label>
          <input type="text" name="message">
        </div>
        
      </form>
    </div>
  </div>

<?php include("partials/_footer.php"); ?>

