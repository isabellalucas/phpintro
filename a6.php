<?php

  $my_name = 'Isabella' ;
  $description = "Brazilian social psychologist persuing a carreer change who moved to Canada to be a developer" ;
  $favorite_animals = array('dogs', 'goats', 'cats', 'frogs') ;
  $color = $_POST['color'] ;
?>

<?php 
  
  function the_developer_profile(){

    global $my_name, $description, $favorite_animals ;
     
    
    
    $output =  "<div class='developer-profile'> 
                  <h2>Developer Profile: $my_name  </h2>
                  <p>Description: $description </p>
                  <p>Her favorite animals are " ;
    
    
    echo $output ; 
    foreach ($favorite_animals as $animal) {
      if($animal == $favorite_animals[count($favorite_animals)-1]){
        echo "and $animal.</p>";
      } else {
        echo "$animal" . ", ";}
     };
   
  } 

  function the_color_form(){
    global $color;
    echo "<div class='page-color'>
              <form action='a6.php' method='POST'>
                <label>
                  Which color do you prefer for the text of this page?
                  <input type='color' name='color' value='$color' />
                </label>

                <button type='submit'>Submit</button>
              </form>
          </div>";
  }

  function get_color(){
    global $color;
      if (isset($color)){
        echo $color;
      } else {
        echo "black";
      }
    
  }
?>

<!DOCTYPE html>
<html style="color:<?php get_color(); ?>">
  <head>
    <meta charset="utf-8">
    <title>Assigment 6: Hello PHP World!</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="icomoon/style.css">

  </head>
  <body>

    <header>
        <h1>Hello PHP World!</h1>
        <div class="subtitle">
          An Introduction to Server-Side Scripting.
        </div>
        
    </header>

    <main>
        <?php 
          the_developer_profile();
          the_color_form();
        ?>

        
    </main>

  </body>
</html>
