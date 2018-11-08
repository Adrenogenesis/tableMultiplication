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
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                
        <select  id="calc" name="calc" size="1">
        <option id="tab1" value="1">Table 1</option>
                                                <option id="tab2" value="2">Table 2</option>
                                                <option id="tab3" value="3">Table 3</option>
                                                <option id="tab4" value="4">Table 4</option>
                                                <option id="tab5" value="5">Table 5</option>
                                                <option id="tab6" value="6">Table 6</option>
                                                <option id="tab7" value="7">Table 7</option>
                                                <option id="tab8" value="8">Table 8</option>
                                                <option id="tab9" value="9">Table 9</option>
                                                <option id="tab10" value="10">Table 10</option>
                                        </select>
                                        <br>
                                        <button type="submit" name="submit" value="Get Selected Values">Voir</button>
                                </form>
                                
      
                        <div class="results">
                        
                        
                        <?php
include 'multiply.php'
?>
                          
                              </div>
                                    </div>  

</body>
</html>
