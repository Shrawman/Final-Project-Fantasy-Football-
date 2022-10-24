function validateform(){
    var tname = document.forms["registration_form"]["teamname"].value;
    var email = document.forms["registration_form"]["email"].value;
    var password = document.forms["registration_form"]["password"].value;
    var pasrepeat = document.forms["registration_form"]["repassword"].value;
    
    tname = tname.trim();
    if (tname.length < 5) {
        alert("Teamname must contian atleast 5 characters");
        return false;
    }

   //password = password.trim();
    if (password.length < 5) {
        alert("Password must contian at least 5 characters");
        return false;
    }

    //pasrepeat = pasrepeat.trim();
    if(password != pasrepeat){
        alert("Both passwords does not match");
        return false;
        
        
        
    }
}

