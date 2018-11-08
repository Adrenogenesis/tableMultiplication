function tablecalc() {
    //  document.getElementById("add").value;
    //  console.log("add");
 // if(document.getElementById('calc').value == "add")
  var nm1 = parseFloat(document.getElementById("numIpt").value);
  
  console.log(nm1);
 
  if(document.getElementById('tab1').selected===true) {
      var result = document.getElementById("result");
      var calc = Number(nm1) * 1;
      result.textContent = calc;

  
  }else if(document.getElementById('tab2').selected===true){
      var result = document.getElementById("result");
      var calc = Number(nm1) * 2;
      result.textContent = calc;
       
  }else if(document.getElementById('tab3').selected===true){
    var result = document.getElementById("result");
    var calc = Number(nm1) * 3;
    result.textContent = calc;
     
  }else if(document.getElementById('tab4').selected===true){
    var result = document.getElementById("result");
    var calc = Number(nm1) * 4;
    result.textContent = calc;
     
  }else if(document.getElementById('tab5').selected===true){
    var result = document.getElementById("result");
    var calc = Number(nm1) * 5;
    result.textContent = calc;
     
  }else if(document.getElementById('tab6').selected===true){
    var result = document.getElementById("result");
    var calc = Number(nm1) * 6;
    result.textContent = calc;
     
  }else if(document.getElementById('tab7').selected===true){
    var result = document.getElementById("result");
    var calc = Number(nm1) * 7;
    result.textContent = calc;
     
  }else if(document.getElementById('tab8').selected===true){
    var result = document.getElementById("result");
    var calc = Number(nm1) * 8;
    result.textContent = calc;
     
  }else if(document.getElementById('tab9').selected===true){
    var result = document.getElementById("result");
    var calc = Number(nm1) * 9;
    result.textContent = calc;
     
  }else if(document.getElementById('tab10').selected===true){
    var result = document.getElementById("result");
    var calc = Number(nm1) * 10;
    result.textContent = calc;
 
  }else {
      console.log("!");
  }

}

var x = 0;
x++;

function tableCal(){
  
    if(document.getElementById('tab1').selected===true ) {
       
       // var result = document.getElementById("result");
        var calc = 1 * 1;
        
        result.textContent = calc;

        document.getElementById('result').innerHTML = resultat;
        
        }else{
            console.log("!");
        }
}

console.log('result');
