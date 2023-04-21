function validateLoginForm() {
    var email = document.forms["loginForm"]["useremail"].value;
    var password = document.forms["loginForm"]["userpassword"].value;
    
    // Check if email is valid
    var emailRegex = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
    if (!emailRegex.test(email)) {
      alert("Please enter a valid email address.");
      return false;
    }
    
    // Check if password is at least 6 characters long
    if (password.length < 6) {
      alert("Password must be at least 6 characters long.");
      return false;
    }
    
    return true;
  }
  