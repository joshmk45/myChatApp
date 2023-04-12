const form =document.querySelector(".login form"),
      continueBtn=document.querySelector(".button input"),
      errortext=document.querySelector(".form .error-txt");
      
  form.onsubmit=(e)=>{
     e.preventDefault();
  }
      continueBtn.onclick=()=>{
       let req=new XMLHttpRequest();
       req.open("POST","php/login.php",true);
       req.onload=()=>{
           if(req.readyState==XMLHttpRequest.DONE)
           {
            if(req.status==200)
            {
                if(req.response=="success"){
                    location.href="user.php";
                }
                else{    
                        errortext.textContent=req.response;
                        errortext.style.display="block";       
                }
            }
            
           }
       }
       let formData= new FormData(form);
       req.send(formData);
      }