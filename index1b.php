<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table de multiplication javascript</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="flex-container">
    <h1>Table de multiplication</h1>
  
                            <br>
                            <form name="calc" method="post" action="">
                 
                                                <input type="radio" name="table[]" id="tab1" value="1" >
                                                <label for="table">Table 1</label>
                                                <br>
                                                <input type="radio" name="table[]" id="tab2" value="2" >
                                                <label for="table">Table 2</label>
                                                <br>
                                                <input type="radio" name="table[]" id="tab3" value="3">
                                                <label for="table">Table 3</label>
                                                <br >
                                                <input type="radio" name="table[]" id="tab4" value="4" >
                                                <label for="table">Table 4</label>
                                                <br>
                                                <input type="radio" name="table[]" id="tab5" value="5" >
                                                <label for="table">Table 5</label>
                                                <br>
                                                <input type="radio" name="table[]" id="tab6" value="6" >
                                                <label for="table">Table 6</label>
                                                <br >
                                                <input type="radio" name="table[]" id="tab7" value="7" >
                                                <label for="table">Table 7</label>
                                                <br>
                                                <input type="radio" name="table[]" id="tab8" value="8" >
                                                <label for="table">Table 8</label>
                                                <br>
                                                <input type="radio" name="table[]" id="tab9" value="9" >
                                                <label for="table">Table 9</label>
                                                <br >
                                                <input type="radio" name="table[]" id="tab10" value="10" >
                                                <label for="table">Table 10</label>
                                                <br >
                                        
                                           <br>
                                        <input type="submit" name="submit" value="Voir">
                                </form>
                                
      
                        <div class="results">
                        
                        
                        <?php
                        foreach($_POST['table'] as $valeur)
                        {
                           echo "La checkbox $valeur a été cochée<br>";
                        }

                        if(!$_POST['table']){
                            echo "Aucune checkbox n'a été cochée";
                         }

                         
                        
include 'multiply.php'
?>
                          
                              </div>
                                    </div>  

</body>
</html>
