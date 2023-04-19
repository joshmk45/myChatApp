const form=document.querySelector(".typing-area"),
      sendBtn=form.querySelector("button"),
      inputField=form.querySelector(".input-field"),
      chatArea=document.querySelector(".chat-area .chat-box");

      form.onsubmit=(e)=>{
        e.preventDefault();
     }
sendBtn.addEventListener("click",sendMsg);
function sendMsg(){
    let req=new XMLHttpRequest();
    req.open("POST","php/insert_chat.php",true);
    req.onreadystatechange=processRequest;
    function processRequest(){
        if(req.readyState===XMLHttpRequest.DONE && req.status===200)
        {
            if(req.response=="success"){
                
                inputField.value="";
            }
        }
    }
    let formData= new FormData(form);
    req.send(formData);
}     

setInterval(getChats,500);
function getChats(){
 let req=new XMLHttpRequest();
 req.open("POST","php/get_chats.php",true);
 req.onreadystatechange=processRequest;
 function processRequest(){
    if(req.readyState===XMLHttpRequest.DONE && req.status===200){
        chatArea.innerHTML=req.response;
    }
 }
 let formdata=new FormData(form);
 req.send(formdata);
}

