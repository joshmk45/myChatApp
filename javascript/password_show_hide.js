const PasswordField=document.querySelector(".form .field input[type='password']");
const toggleBtn=document.querySelector(".form .field i");
toggleBtn.onclick=()=>{
    if(PasswordField.type=="password")
    {
        PasswordField.type="text";
        toggleBtn.classList.add("active");
    }
    else{
        PasswordField.type="password";
        toggleBtn.classList.remove("active");
    }

}