$('#reg').on('click',function(){
    console.log("helo");
    var email = $("#email").val(); 
    var password = $("#pwd").val(); 
    if(password.length != 0){
        let data = {
            email : email,
            password : password
        }
        $.ajax({
            type: "POST",
            url: "login.php",
            data: data,
            success: function (response) {
                console.log(response);
                let a = JSON.parse(response);
                if(a.length != 0){
                    localStorage.setItem("sessionData", response);
                    window.location = "profile.html";
                }
                else{
                    alert("check your email or Password")
                }
                // console.log(a.length);

            }
          });
    }
    else
    {
        alert("password Not found");
    }
    
}); 