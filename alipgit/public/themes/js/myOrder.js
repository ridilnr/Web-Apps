var itemMenu = [], linkItem = "";
var divInputElem;
divInputElem = document.querySelectorAll('.changeState');

function changeStateInput(myButton){
    myButton.parentNode.previousElementSibling.firstElementChild.removeAttribute('disabled');
    //myButton.parentNode.previousElementSibling.firstElementChild.removeAttribute('placeholder');
}
checkForm();
function checkForm() {
    var myBool = "false";
    for(var i = 0; i < divInputElem.length; i++){
        if((divInputElem[i].hasAttribute("disabled")) && (divInputElem[i].getAttribute("placeholder") === "")){
            myBool = "true";
        }
    }
    if(myBool === "true")
        document.querySelector(".main-content").innerHTML = "<h3 class='text-center'><span class='alert alert-warning'>" +
            "Oups! Sorry, you must be a registered customer to have access to this page</span>" +
            "<br><br><a href='Register'><span class='alert-info'>Click here to register</span></a></h3>";

}

function submitForm(myForm) {
    for(var i = 0; i < divInputElem.length; i++){
        if(divInputElem[i].hasAttribute("disabled")){
            divInputElem[i].removeAttribute("disabled");
            divInputElem[i].value = divInputElem[i].getAttribute("placeholder");
        }
    }
    myForm.submit();
}
menuEvent(itemMenu, linkItem);
$(document).ready(function() {
    $('#checkout').click(function (e) {
        document.location.href = "checkout";
    })
});