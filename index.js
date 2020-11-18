$('#reg').on('click',function(){
    console.log("hgjhagsjh");
    var email = $("#email").val(); 
    var name = $("#name").val(); 
    var college = $("#col").val(); 
    var age = $("#age").val(); 
    var dob = $("#dob").val(); 
    var password = $("#pwd").val(); 
    let data = {
        email : email,
        name : name,
        college : college,
        age : age,
        dob : dob,
        password : password
    }
    $.ajax({
        type: "POST",
        url: "index.php",
        data: data,
        success: function (response) {
            console.log(response);
            let msg =  JSON.parse(response);
            if(msg.msg == "exist")
            {
                alert("Email Already Exist");
            }
        }
      });
}); 