//SumbitFormFunction
$("#contactfrm").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
});
function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#comments").val();
 
    $.ajax({
        type: "POST",
        url: "php/form-process.php",
        data: "name=" + name + "&email=" + email + "&comments=" + comments,
        success : function(text){
            if (text == "success"){
				formSuccess();
			}
		}
     
  });
}
function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" )
}