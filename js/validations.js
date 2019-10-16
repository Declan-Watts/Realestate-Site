function myFunction() {
    // retrieve values from form
        firstName = document.forms["myForm"].firstName;
        lastName = document.forms["myForm"].lastName;
        email = document.forms["myForm"].email;
        phone = document.forms["myForm"].phone;
        message = document.forms["myForm"].message;
        
    // resets all error colors and placeholder messages
        document.getElementById("firstName").style.backgroundColor = "#c0c0c0";
        document.getElementById("lastName").style.backgroundColor = "#c0c0c0";
        document.getElementById("email").style.backgroundColor = "#c0c0c0";
        document.getElementById("phone").style.backgroundColor = "#c0c0c0";
        document.getElementById("message").style.backgroundColor = "#c0c0c0";
        document.getElementById("phone_error").innerHTML = "";
    
    // checks first name
        if (firstName.value == "") {
        document.getElementById("firstName").style.backgroundColor = "#FFBABA";
        document.getElementById("firstName").classList.add('placeholderRed');
        document.getElementById("firstName").placeholder = "First Name required!";
        }
            
    // checks last name
        if (lastName.value == "") {
        document.getElementById("lastName").style.backgroundColor = "#FFBABA";
        document.getElementById("lastName").classList.add('placeholderRed');
        document.getElementById("lastName").placeholder = "Last Name required!";
        }
        
    // checks email
        if (email.value == "") {
        document.getElementById("email").style.backgroundColor = "#FFBABA";
        document.getElementById("email").classList.add('placeholderRed');
        document.getElementById("email").placeholder = "Email Required!";
        }
        
    // checks phone
        if (phone.value == "") {
        document.getElementById("phone").style.backgroundColor = "#FFBABA";
        document.getElementById("phone").classList.add('placeholderRed');
        document.getElementById("phone").placeholder = "Phone Number Required!";
        }
        
        else if (isNaN(phone.value)) {
        document.getElementById("phone").style.backgroundColor = "#FFBABA";
        document.getElementById("phone").classList.add('placeholderRed');
        document.getElementById("phone_error").innerHTML = "Phone Number is not valid!";
        }
    
    // checks message
        if (message.value == "") {
        document.getElementById("message").style.backgroundColor = "#FFBABA";
        document.getElementById("message").classList.add('placeholderRed');
        document.getElementById("message").placeholder = "Please Leave A Message!";
        }
    
        
    } //end of function