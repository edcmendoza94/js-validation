//JavaScript for form validation goes here!

//Hook up form submit button to a validate function
$(document).ready(function(){
   $('input[type="submit"]').on("click", validate); 
});

//Perform validation logic on form inputs
function validate(event)
{
    //Prevent the form from submitting
    event.preventDefault();
    
    //Clear old errors
    removeErrors();
    
    var isError = false;
    
    //Make sure employee ID is exactly 10 characters
    var id = $("#emp-id").val();
    
    if(id.length != 10) {
        report("emp-id-error", "employee ID must be 10 characters long");
        isError = true;
    }
    
    //Make sure hours entry is numeric and from 1-100
    var hours = parseInt($("#hours").val());
    
    if(!Number.isInteger(hours)) {
        report("hours-error", "hours must be numeric");
        isError = true;
    }
    
    else if(hours < 1 || hours > 100) {
        report("hours-error", "hours must be greater than 1 or less than 100");
        isError = true;
    }
    
    //Ensure pay rate entry is numeric and at least 0
    var payrate = parseInt($("#payrate").val());
    
    if(!Number.isInteger(hours)) {
        report("hours-error", "hours must be numeric");
        isError = true;
    }
    
    else if(payrate < 0) {
        report("payrate-error", "please enter a payrate value of at least 0");
        isError = true;
    }
    
    //Submit form is all data entered is valid
    if(!isError) {
        $("$payroll-form").submit();
    }
}

//Update form.php to display error message
function report(id, message)
{
    $("#" + id).html(message);
    $("#" + id).parent().show();
}

//Clear any previous errors
function removeErrors()
{
    $("#emp-id-error").parent().hide();
    $("#hours-error").parent().hide();
    $("#payrate-error").parent().hide();
}