const searchBar=document.querySelector(".user .search input"),
     searchBtn=document.querySelector(".user .search button"),
     userList=document.querySelector(".user .user-list");
     
     searchBtn.onclick=()=>{
        searchBar.classList.toggle('active');
        searchBar.focus();
     }
     searchBar.addEventListener("keyup",search);
     function search(){
      let searchterm=searchBar.value;
      if(searchterm!=""){
         searchBar.classList.add("active");
      }
      else{
         searchBar.classList.remove("active");
      }
      let req=new XMLHttpRequest();
      req.open("POST","php/search.php",true);
      req.setRequestHeader("content-type","application/x-www-form-urlencoded");
      req.send("searchTerm="+searchterm);
      req.onreadystatechange=processrequest;
      function processrequest(){
         if(req.readyState===XMLHttpRequest.DONE && req.status===200){
             userList.innerHTML=req.response;
         }
      }
   }
   
   setInterval(myfunction,500);
   function myfunction(){
   let req=new XMLHttpRequest();
   req.open("GET","php/user.php",true);
   req.onreadystatechange=processRequest;
   function processRequest(){
  if(req.readyState===XMLHttpRequest.DONE)
  {
   if(req.status===200){
      if(!searchBar.classList.contains("active")){
         userList.innerHTML=req.response;
      }
      
   }   
 }
}
req.send();
}

  


