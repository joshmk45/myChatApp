const form =document.querySelector(".signup form"),
      continueBtn=document.querySelector(".button input"),
      errortext=document.querySelector(".form .error-txt");
      
  form.onsubmit=(e)=>{
     e.preventDefault();
  }
      continueBtn.onclick=()=>{
       let req=new XMLHttpRequest();
       req.open("POST","php/signup.php",true);
       req.onload=()=>{
           if(req.readyState==XMLHttpRequest.DONE)
           {
            if(req.status==200)
            {
                let data=req.response;
                if(data=="success"){

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