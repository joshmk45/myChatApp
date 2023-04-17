const form=document.querySelector(".typing-area"),
      sendBtn=form.querySelector("button"),
      inputField=form.querySelector("input"),
      chatArea=document.querySelector(".chat-area .chat-box");

      form.onsubmit=(e)=>{
        e.preventDefault();
     }
sendBtn.addEventListener("click",sendMsg);
function sendMsg(){
    let req=new XMLHttpRequest();
    req.open("POST","php/insert_chat.php",true);
    req.onload=()=>{
        if(req.readyState==XMLHttpRequest.DONE)
        {
         if(req.status==200)
         {
          inputField.value="";
         }
         
        }
    }
    let formData= new FormData(form);
    req.send(formData);
}     


