

let username = document.querySelector("#username");
let email = document.querySelector("#email");
let password = document.querySelector("#password");
// let sinUpButton = document.querySelector("#sinup-submit"); back end

// sinUpButton.addEventListener('click' , SignUp ); ==> backe end

function SignUp(e){
    e.preventDefault();
    if(username.value === ""   ||  password.value === ""  || email.value === ""){
        alert("please fill data");
    }else {

        localStorage.setItem("username", username.value);
        localStorage.setItem("email", email.value);
        localStorage.setItem("password", password.value);
    
        setTimeout(() => {
          window.location = "login.php";
        }, 1500);
      }
    }
       
