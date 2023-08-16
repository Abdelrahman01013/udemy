
let getUser =  localStorage.getItem("username");
let getEmail =  localStorage.getItem("email");
let getPassword =  localStorage.getItem("password");

let loginButton = document.querySelector("#submit-login");  

loginButton.addEventListener( 'click' ,  login );  
        
function login(e) {
    e.preventDefault();
    if (username.value === "" || password.value === "") {
     alert("Please Fill Data");
} else {
if (
getUser &&
getUser.trim() === username.value.trim() &&
getPassword &&
getPassword === password.value
) {
setTimeout(() => {
  window.location = "index.php";
}, 1500);
} else {
console.log("username or password is wrong !!");
}
}
}
