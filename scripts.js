$("#contactForm").validator().on("submit", (function(event){
    if (event.isDefaultPrevented()){
        // handle the invalid form

    }else{
    event.preventDefault();
    submitForm();
}
}));

function submitForm(){
    //initiate variable with form content
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();

    $.ajax({
        type: "POST",
        url: "php/form-process.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success: function(text){
            if (text == "success"){
                formSuccess();
            }
            
        }
    });
}

function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" );
}