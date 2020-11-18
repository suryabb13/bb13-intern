$(document).ready(function() {
   let Userdata = localStorage.getItem("sessionData");
   if(Userdata)
   {
       let data = JSON.parse(Userdata);
       data = data[0] 
       $("#email").val(data.email);
       $("#name").val(data.name); 
       $("#col").val(data.college); 
       $("#age").val(data.age); 
       $("#dob").val(data.dob); 
       $("#pwd").val(data.password);

   } 
   else
   {
       alert("U havent loggined in");
       window.location = 'login.html'
   }

});