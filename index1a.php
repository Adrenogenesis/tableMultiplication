<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table de multiplication javascript</title>
    <link rel="stylesheet" href="css/style.css">

<script type="text/javascript">
function chkcontrol(j) {
var total=0;
for(var i=0; i < document.calc.table.length; i++){
if(document.calc.table[i].checked){
total =total +1;}
if(total > 1){
alert("1 selection !") 
document.calc.table[j].checked = false ;
return false;
}
}
} </script>
</head>
<body>
<div class="flex-container">
    <h1>Table de multiplication</h1>
  
                            <br>
                            <form name="calc" method="post" action="">
                 
                                                <input type="checkbox" name="table[]" id="tab1" value="1" onclick='chkcontrol(0)';>
                                                <label for="table">Table 1</label>
                                                <br>
                                                <input type="checkbox" name="table[]" id="tab2" value="2" onclick='chkcontrol(1)';>
                                                <label for="table">Table 2</label>
                                                <br>
                                                <input type="checkbox" name="table[]" id="tab3" value="3" onclick='chkcontrol(2)';>
                                                <label for="table">Table 3</label>
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
