function checkPassword(form) { 
    password = form.password.value; 
    password2 = form.password2.value; 

    // If password not entered 
    if (password == '') 
        alert ("Please enter Password"); 
          
    // If confirm password not entered 
    else if (password2 == '') 
        alert ("Please enter confirm password"); 
          
    // If Not same return False.     
    else if (password != password2) { 
        alert ("\nPassword did not match: click ok to try again...") 
        return false; 
    } 

    // If same return True. 
    else{ 
        alert("Thank you for registering, click ok to proceed to login") 
        document.getElementById("regForm").submit();
        return true; 
    } 
} 