console.log("connected");


function collect_data(){
   const email = document.getElementById("email").value;
   const password = document.getElementById("password").value;
   if(!email){
    document.getElementById("emailErr").innerHTML = "Email is require";
   }else{
    document.getElementById("emailErr").innerHTML="";

   }
   if(email != "@" ){
    document.getElementById("emailErr").innerHTML = "email must have @";
    
   }

   if(password !="#"){
    document.getElementById("passwordErr").innerHTML ="the pasword need to more then 6 letter or numnbers";
   }
    
 
   if(password.length < 6){
    document.getElementById("passwordErr").innerHTML ="the pasword need to more then 6 letter or numnbers";

    

   }

   const txtemail = "@arnobgmail.com";
   const txtpassword ="12345678#";
   let count =0;


   
    if(txtemail !=email && txtpassword !=password){
        count++;
        console.log(count);
    }else{
        console.log("login");
    }


   if(!password){  
    document.getElementById("passwordErr").innerHTML ="password is require";

   }else{
    document.getElementById("passwordErr").innerHTML ="";
   }
   

   
   return false;
}

function getEmail(){
    const  email = document.getElementById("email").value;
    //console.log(email);
}

function getPassoword(){
    const password = document.getElementById("password").value;
    //console.log(password);
}
