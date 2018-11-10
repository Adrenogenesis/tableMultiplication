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
                            <form name="calc" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                 
                                                <input name="table1[]" id="tab1" value="1" checked>
                                                <label for="table1">Table 1</label>
                                                <br>
                                                <input name="table2[]" id="tab2" value="2" checked>
                                                <label for="table2">Table 2</label>
                                                <br>
                                                <input name="table3[]" id="tab3" value="3" checked>Table 3
                                                <label for="table3">Table 3</label>
                                                <br>
                                                <input name="table[]" id="tab4" value="4" checked>Table 4<br>
                                                <input name="table[]" id="tab5" value="5" checked>Table 5<br>
                                                <input name="table[]" id="tab6" value="6" checked>Table 6<br>
                                                <input name="table[]" id="tab7" value="7" checked>Table 7<br>
                                                <input name="table[]" id="tab8" value="8" checked>Table 8<br>
                                                <input name="table[]" id="tab9" value="9" checked>Table 9<br>
                                                <input name="table[]" id="tab10" value="10" checked>Table 10<br>
                                           <br>
                                        <button type="submit" name="submit" value="Envoyer">Voir</button>
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
