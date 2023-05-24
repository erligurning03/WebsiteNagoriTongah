const namaField = document.querySelector("[name=nama]");

namaField.addEventListener("keyup", (event) => {
    if(!namaField.validity.valid){
        console.error("nama invalid");
        document.getElementById("invalid-nama").style.display = "block";
    } else {
         console.info("nama  valid");
        document.getElementById("invalid-nama").style.display = "none";
    }

});

const usernameField = document.querySelector("[name=username]");

usernameField.addEventListener("keyup", (event) => {
    if(!usernameField.validity.valid){
        console.error("nama invalid");
        document.getElementById("invalid-username").style.display = "block";
    } else {
         console.info("usernama  valid");
        document.getElementById("invalid-username").style.display = "none";
    }

});

const nikField = document.querySelector("[name=nik]");

nikField.addEventListener("keyup", (event) => {
    if(!nikField.validity.valid){
        console.error("nama invalid");
        document.getElementById("invalid-nik").style.display = "block";
    } else {
         console.info("nama  valid");
        document.getElementById("invalid-nik").style.display = "none";
    }

});
const teleponField = document.querySelector("[name=telepon]");

teleponField.addEventListener("keyup", (event) => {
    if(!teleponField.validity.valid){
        console.error("nama invalid");
        document.getElementById("invalid-telepon").style.display = "block";
    } else {
         console.info("nama  valid");
        document.getElementById("invalid-telepon").style.display = "none";
    }

});
const emailField = document.querySelector("[name=email]");

emailField.addEventListener("keyup", (event) => {
    if(!emailField.validity.valid){
        console.error("nama invalid");
        document.getElementById("invalid-email").style.display = "block";
    } else {
         console.info("nama  valid");
        document.getElementById("invalid-email").style.display = "none";
    }

});
const passwordField = document.querySelector("[name=password]");

passwordField.addEventListener("keyup", (event) => {
    if(!passwordField.validity.valid){
        console.error("nama invalid");
        document.getElementById("invalid-password").style.display = "block";
    } else {
         console.info("nama  valid");
        document.getElementById("invalid-password").style.display = "none";
    }

});

const confirpasswordField = document.querySelector("[name=confirpassword]");

confirpasswordField.addEventListener("keyup", (event) => {
    if(!confirpasswordField.validity.valid){
        console.error("nama invalid");
        document.getElementById("invalid-confirpassword").style.display = "block";
    } else {
         console.info("nama  valid");
        document.getElementById("invalid-confirpassword").style.display = "none";
    }

});

function hidePasswordInput() {
    const passwordInput = document.getElementById("passwordInput");
    const password = passwordInput.value;
    const hiddenPassword = password.replace(/./g, "*");
  
    passwordInput.value = hiddenPassword;
  
    validatePassword();
  }
  
  function hideConfirmPasswordInput() {
    const confirmPasswordInput = document.getElementById("confirmPasswordInput");
    const confirmPassword = confirmPasswordInput.value;
    const hiddenConfirmPassword = confirmPassword.replace(/./g, "*");
  
    confirmPasswordInput.value = hiddenConfirmPassword;
  
    validatePassword();
  }
  
  function validatePassword() {
    const passwordInput = document.getElementById("passwordInput");
    const confirmPasswordInput = document.getElementById("confirmPasswordInput");
    const password = passwordInput.value;
    const confirmPassword = confirmPasswordInput.value;
  
    if (password.length >= 6 && password.length <= 20) {
      if (password == confirmPassword) {
        console.log("Password dan konfirmasi password cocok");
      } else {
        console.log("Password dan konfirmasi password tidak cocok");
      }
    } else {
      console.log("Password harus terdiri dari 6 hingga 20 karakter");
    }
  }
  