function check() {
    var username = document.form.username.value;
    var password = document.form.password.value;
    var letters = /^[A-Za-z]+$/;
    var paswd = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
  
    if (!username.match(letters)) {
      alert("Special Character and numbers are not allowed");
      return false;
    }
  
    if (username.length < 3 || username.length > 50) {
      alert("Username should be between 3 and 50 letters");
      return false;
    }
  
    if (!password.match(paswd)) {
      alert(
        " password must be between 7 to 15 characters which contain at least one numeric digit and a special character"
      );
      return false;
    }
    return true;
  }