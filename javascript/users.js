const searchBar=document.querySelector(".user .search input"),
     searchBtn=document.querySelector(".user .search button"),
     userList=document.querySelector(".user .user-list");
     searchBtn.onclick=()=>{
        searchBar.classList.toggle('active');
        searchBar.focus();
     }
     searchBar.addEventListener("keyup",search);
     function search(){
      alert("go");
      let searchterm=searchBar.value;
      let req=new XMLHttpRequest();
      req.open("POST","php/search.php",true);
      req.send(searchterm);
      req.onreadystatechange=processrequest;
      function processrequest(){
         if(req.readyState===XMLHttpRequest.DONE && req.status===200){
             userList.innerHTML=req.response;
         }
      }
   }


