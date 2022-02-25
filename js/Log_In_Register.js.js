    function populate(s1,s2){

        var s1 = document.getElementById(s1);
        var s2 = document.getElementById(s2);
        s2.innerHTML = "";

        if(s1.value == "Kosova"){
            var optionArray = ["prishtina|Prishtinë", "prizreni|Prizren", "gjilan|Gjilani", "ferizaj|Ferizaj", "gjakove|Gjakovë"];
     
        }
        else if(s1.value == "Shqiperia"){
            var optionArray = ["tirane|Tiranë", "diber|Dibër", "durres|Durrës", "vlore|Vlorë"];
        }
        else if(s1.value == "Mali Zi"){
            var optionArray = ["ulqin|Ulqin", "podgorice|Podgoricë", "budva|Budva", "cetinje|Cetinjë"];
        }
        else if(s1.value == "Maqedonia"){
            var optionArray = ["kumanove|Kumanovë", "shkup|Shkup", "tetove|Tetovë", "struge|Strugë"];
        }
        else if(s1.value == "Serbia"){
            var optionArray = ["presheve|Preshevë", "bujanoc|Bujanoc", "medvegje|Medvegjë", "beograd|Beograd"];
        }

    for(var option in optionArray){
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");

        newOption.value = pair[0];
        newOption.innerHTML=pair[1];
        s2.options.add(newOption);
    } 

} 

    function checkInputs(){
        var inputs = document.getElementById('emailId').value;  
        var pass = document.getElementById('passId').value; 
         if(inputs == ''){
                alert('Plotësoni Email-in apo Emrin e Përdouresit!');
                return false;
         }
         else if(pass == ''){
            alert('Plotësoni Passwordin!');
            return false;
     }
        else{
            window.location.href = 'index.html';
        }
      }


    //  register js
    function redirectToLogin(){
        
      var x =  document.getElementsByClassName('r-input')[0,1,2,3,4,5].value;
      var pass =  document.getElementById('input-pass').value
      var y =  document.querySelector('.gender:checked');
      var z =  document.getElementById('select1').value;
      if(x == ''){
        alert('Plotesoni fushat zbrazëta!');
        return false;
        
      }
      if(y == null){
        alert('Selektoni gjininë!');
        return false;
      }
    if(z == ''){
        alert('Selektoni Shtetin!');
        return false;
    }
    if(pass.search(/[A-Z]/) == -1){
        alert('Paswordi duhet të përmabjë të paktën një shkronjë të madhe!');
        return false;
    }
    if(pass.search(/[0-9]/) == -1){
        alert('Paswordi duhet të përmabjë të paktën një karakter numerik!');
        return false;
    }
    if(pass.search(/[a-z]/) == -1){
        alert('Paswordi duhet të përmabjë të paktën një shkronjë të vogel!');
        return false;
    }
    if(pass.search(/[~\!\@\#\$\%\^\&\*\(\)\_\+\=\-\{\}\:\;\|\,\.\?\>\<]/) == -1){
        alert('Paswordi duhet të përmabjë të paktën një karakter të veçantë!');
        return false;
    }
      else{
        window.location.href = 'successfully.html'
      }
        
    }


