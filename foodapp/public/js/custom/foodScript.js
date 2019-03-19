//
var viewButton, editButton, deleteButton, viewFoodSection, updateFoodSection, editFoodButton, stateFoodInput,
    defaultCheckedStateFood, defaultCheckedAvailFood;
//
viewFoodSection = document.querySelectorAll(".viewFoodSection");
updateFoodSection = document.querySelectorAll(".updateFoodSection");
//
defaultCheckedStateFood = document.querySelectorAll(".defaultCheckedStateFood");
defaultCheckedAvailFood = document.querySelectorAll(".defaultCheckedAvailFood");
//
stateFoodInput = document.querySelectorAll(".stateFood");
//
initializeStateFood();
initializeCheckedStateFood();
initializeCheckedAvailFood();
//
function initializeCheckedAvailFood() {
    for (var k=0; k<defaultCheckedAvailFood.length; k++)
        if(defaultCheckedAvailFood[k].value === "yes")
            defaultCheckedAvailFood[k].nextElementSibling.firstElementChild.setAttribute("checked", "checked");
        else
            defaultCheckedAvailFood[k].nextElementSibling.nextElementSibling.firstElementChild.setAttribute("checked", "checked");
}
//
function initializeCheckedStateFood() {
    for (var k=0; k<defaultCheckedStateFood.length; k++)
        if(defaultCheckedStateFood[k].value === "on")
            defaultCheckedStateFood[k].nextElementSibling.firstElementChild.setAttribute("checked", "checked");
        else
            defaultCheckedStateFood[k].nextElementSibling.nextElementSibling.firstElementChild.setAttribute("checked", "checked");
}
//
function initializeStateFood() {
    var nameFood;
    for(var j=0; j<stateFoodInput.length; j++) {
        nameFood = stateFoodInput[j].previousElementSibling.parentElement.parentElement.parentElement.parentElement.previousElementSibling.firstElementChild.innerHTML;
        if(stateFoodInput[j].value === "on"){
            stateFoodInput[j].nextElementSibling.firstElementChild.setAttribute("class", "oi oi-lock-unlocked");
            stateFoodInput[j].previousElementSibling.parentElement.parentElement.setAttribute("title", "Click to lock " + nameFood);
        }
        else{
            stateFoodInput[j].nextElementSibling.firstElementChild.setAttribute("class", "oi oi-lock-locked");
            stateFoodInput[j].previousElementSibling.parentElement.parentElement.setAttribute("title", "Click to unlock " + nameFood);
        }
        //console.log(stateFoodInput[j].value);
    }
}
//
//editFoodButton = document.querySelector("#editFoodButton");
//
hideViewAndUpdateFoodDetails();
//
function hideViewAndUpdateFoodDetails() {
    for(var i=0, j=0; i<viewFoodSection.length, j<updateFoodSection.length; i++, j++){
        viewFoodSection[i].style.display = "none";
        updateFoodSection[j].style.display = "none";
    }
}
//
printMessage();
//
/*editFoodButton.addEventListener("click", function () {
    var boxEdit = document.querySelector(".ml-3.boxEdit");
    viewEditFoodDetails(boxEdit, boxEdit.parentElement, boxEdit.parentElement.parentElement.parentElement.nextElementSibling,
                        boxEdit.parentElement.parentElement.parentElement.nextElementSibling.nextElementSibling);
});*/
//
function viewEditFoodDetails(divBox, parentDivBox, viewFoodSection, updateFoodSection) {
    var iconElement, iconView, iconEdit, iconDelete, allDivBox;
    iconElement = divBox.querySelector("a > span > i");
    //allDivBox = [parentDivBox.firstElementChild, parentDivBox.firstElementChild.nextElementSibling];
    allDivBox = [parentDivBox.children[2], parentDivBox.children[3]];
    iconView = allDivBox[0].querySelector("a > span");
    iconEdit = allDivBox[1].querySelector("a > span");
    //iconDelete = allDivBox[2].querySelector("a > span");
    if(iconElement.getAttribute("class") === "fas fa-eye"){
        viewFoodSection.style.display = "block";
        iconElement.setAttribute("class", "fas fa-eye-slash");
        if (iconEdit !== null && iconEdit.firstElementChild.getAttribute("class")==="fas fa-edit eOpen"){
            updateFoodSection.style.display = "none";
            iconEdit.firstElementChild.setAttribute("class", "fas fa-edit eClose");
        }
    } else if(iconElement.getAttribute("class")==="fas fa-eye-slash"){
        viewFoodSection.style.display = "none";
        iconElement.setAttribute("class", "fas fa-eye");
    } else if(iconElement.getAttribute("class")==="fas fa-edit eClose"){
        updateFoodSection.style.display = "block";
        iconElement.setAttribute("class", "fas fa-edit eOpen");
        if(iconView !== null){
            if (iconView.firstElementChild.getAttribute("class")==="fas fa-eye-slash"){
                viewFoodSection.style.display = "none";
                iconView.firstElementChild.setAttribute("class", "fas fa-eye");
            }
        }
        //setSelectedType(type);
    } else if(iconElement.getAttribute("class")==="fas fa-edit eOpen"){
        updateFoodSection.style.display = "none";
        iconElement.setAttribute("class", "fas fa-edit eClose");
    }
}
//
function setSelectedType(selectBox, type) {
    /*var selectBox, selectedItem;
    selectBox = document.querySelector("#updateFoodType");
    selectedItem = selectBox.options[selectBox.selectedIndex].value;*/
    for(var i=0 ; i<selectBox.options.length; i++){
        if(selectBox.options[i].value === type){
            selectBox.options[i].setAttribute("selected", "selected");
            break;
        }
    }
}
//
function deleteFood(item) {
    location.href = "/en/FoodDrink/deleteFood";
}
//
//
function changeIconState(spanIcon) {
    if(spanIcon.getAttribute("class") === "oi oi-lock-unlocked")
        spanIcon.setAttribute("class", "oi oi-lock-locked");
    else
        spanIcon.setAttribute("class", "oi oi-lock-unlocked");
}
//
function printNameFoodImage(imageName) {
    var fullPath = imageName.value;
    if(fullPath){
        var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
        var filename = fullPath.substring(startIndex);
        if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
            filename = filename.substring(1);
        }
        imageName.nextElementSibling.innerHTML = filename;
    }
}
//
function validateFormAndSetStateAddFoodForm(form) {
    // var foodType, foodTypeValue;
    // foodType = document.querySelector("#addFoodType");
    // foodTypeValue = foodType.options[foodType.selectedIndex].value;
    sessionStorage.setItem("stateAddFoodForm", "submitted");
    sessionStorage.setItem("newFoodForm", "submitted");
    // if(foodTypeValue === "null"){
    //     alert("Please select a type of food");
    //     return false;
    // }
    form.setAttribute("action", "FoodDrink/addFood");
}
//
function unsetStateAddForm() {
    sessionStorage.setItem("stateAddFoodForm", "not submitted");
    sessionStorage.setItem("newFoodForm", "not submitted");
    sessionStorage.setItem("stateAddDrinkForm", "not submitted");
    sessionStorage.setItem("newDrinkForm", "not submitted");
}

function printMessage() {
    var listGroup, divBoxMessage1, divBoxMessage2;
    listGroup = document.querySelector("#boxListFood > ul");
    divBoxMessage1 = document.querySelector("#displayMessage1");
    divBoxMessage2 = document.querySelector("#displayMessage2");
    /*if(listGroup !== undefined){
        if(listGroup.childElementCount === 0){
            listGroup.innerHTML = "<div class='bg-danger'><h1 class='text-light text-center'>You did not any food yet. Please add one !</h1></div>";
        }
    }*/
    if(sessionStorage.getItem("newFoodForm") === "submitted"){
        divBoxMessage1.innerHTML = divBoxMessage2.innerHTML;
        setTimeout(function () {
            divBoxMessage1.innerHTML = null;
        }, 9000);
    }
    if(divBoxMessage2.childElementCount !== 0){
        setTimeout(function () {
            divBoxMessage2.innerHTML = null;
        }, 9000);
    }
}
//
