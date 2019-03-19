//
var viewButton, editButton, deleteButton, viewDrinkSection, updateDrinkSection,
    editDrinkButton, stateDrinkInput, defaultCheckedStateDrink, defaultCheckedAvailDrink;
//
viewDrinkSection = document.querySelectorAll(".viewDrinkSection");
updateDrinkSection = document.querySelectorAll(".updateDrinkSection");
//
stateDrinkInput = document.querySelectorAll(".stateDrink");
defaultCheckedStateDrink = document.querySelectorAll(".defaultCheckedStateDrink");
defaultCheckedAvailDrink = document.querySelectorAll(".defaultCheckedAvailDrink");
//
initializeStateDrink();
initializeCheckedStateDrink();
initializeCheckedAvailDrink();
//
function initializeCheckedAvailDrink() {
    for (var k=0; k<defaultCheckedAvailDrink.length; k++)
        if(defaultCheckedAvailDrink[k].value === "yes")
            defaultCheckedAvailDrink[k].nextElementSibling.firstElementChild.setAttribute("checked", "checked");
        else
            defaultCheckedAvailDrink[k].nextElementSibling.nextElementSibling.firstElementChild.setAttribute("checked", "checked");
}
//
function initializeCheckedStateDrink() {
    for (var k=0; k<defaultCheckedStateDrink.length; k++)
        if(defaultCheckedStateDrink[k].value === "on")
            defaultCheckedStateDrink[k].nextElementSibling.firstElementChild.setAttribute("checked", "checked");
        else
            defaultCheckedStateDrink[k].nextElementSibling.nextElementSibling.firstElementChild.setAttribute("checked", "checked");
}
//
function initializeStateDrink() {
    var nameDrink;
    for(var j=0; j<stateDrinkInput.length; j++) {
        nameDrink = stateDrinkInput[j].previousElementSibling.parentElement.parentElement.parentElement.parentElement.previousElementSibling.firstElementChild.innerHTML;
        if(stateDrinkInput[j].value === "on"){
            stateDrinkInput[j].nextElementSibling.firstElementChild.setAttribute("class", "oi oi-lock-unlocked");
            stateDrinkInput[j].previousElementSibling.parentElement.parentElement.setAttribute("title", "Click to lock " + nameDrink)
        }
        else{
            stateDrinkInput[j].nextElementSibling.firstElementChild.setAttribute("class", "oi oi-lock-locked");
            stateDrinkInput[j].previousElementSibling.parentElement.parentElement.setAttribute("title", "Click to unlock " + nameDrink)
        }
        //console.log(stateDrinkInput[j].value);
    }
}
//
//editDrinkButton = document.querySelector(".editDrinkButton");
//
hideViewAndUpdateFoodDetails2();
//
function hideViewAndUpdateFoodDetails2() {
    for(var i=0, j=0; i<viewDrinkSection.length, j<updateDrinkSection.length; i++, j++){
        viewDrinkSection[i].style.display = "none";
        updateDrinkSection[j].style.display = "none";
    }
    for(var i=0, j=0; i<viewDrinkSection.length, j<updateDrinkSection.length; i++, j++){
        viewDrinkSection[i].style.display = "none";
        updateDrinkSection[j].style.display = "none";
    }
}

printMessage();
//
/*editDrinkButton.addEventListener("click", function () {
    var boxEdit = document.querySelector(".ml-3.boxEdit");
    viewEditDrinkDetails(boxEdit, boxEdit.parentElement, boxEdit.parentElement.parentElement.parentElement.nextElementSibling,
                        boxEdit.parentElement.parentElement.parentElement.nextElementSibling.nextElementSibling);
});*/
//
function viewEditDrinkDetails(divBox, parentDivBox, viewDrinkSection, updateDrinkSection, type) {
    var iconElement, iconView, iconEdit, iconDelete, allDivBox;
    iconElement = divBox.querySelector("a > span > i");
    //allDivBox = [parentDivBox.firstElementChild, parentDivBox.firstElementChild.nextElementSibling];
    allDivBox = [parentDivBox.children[2], parentDivBox.children[3]];
    iconView = allDivBox[0].querySelector("a > span");
    iconEdit = allDivBox[1].querySelector("a > span");
    //iconDelete = allDivBox[2].querySelector("a > span");

    if(iconElement.getAttribute("class")==="fas fa-eye"){
        viewDrinkSection.style.display = "block";
        iconElement.setAttribute("class", "fas fa-eye-slash");
        if (iconEdit !== null && iconEdit.firstElementChild.getAttribute("class")==="fas fa-edit eOpen"){
            updateDrinkSection.style.display = "none";
            iconEdit.firstElementChild.setAttribute("class", "fas fa-edit eClose");
        }
    } else if(iconElement.getAttribute("class")==="fas fa-eye-slash"){
        viewDrinkSection.style.display = "none";
        iconElement.setAttribute("class", "fas fa-eye");
    } else if(iconElement.getAttribute("class")==="fas fa-edit eClose"){
        updateDrinkSection.style.display = "block";
        iconElement.setAttribute("class", "fas fa-edit eOpen");
        if (iconView.firstElementChild.getAttribute("class")==="fas fa-eye-slash"){
            viewDrinkSection.style.display = "none";
            iconView.firstElementChild.setAttribute("class", "fas fa-eye");
        }
        //setSelectedType(type);
    } else if(iconElement.getAttribute("class")==="fas fa-edit eOpen"){
        updateDrinkSection.style.display = "none";
        iconElement.setAttribute("class", "fas fa-edit eClose");
    }
}
//
function setSelectedType(selectBox, type) {
    /*var selectBox, selectedItem;
    selectBox = document.querySelector("#updateDrinkType");
    selectedItem = selectBox.options[selectBox.selectedIndex].value;*/
    if(selectBox !== null){
        for(var i=0 ; i<selectBox.options.length; i++){
            if(selectBox.options[i].value === type){
                selectBox.options[i].setAttribute("selected", "selected");
                break;
            }
        }
    }
}
//
function deleteDrink(item) {
    location.href = "/en/FoodDrink/deleteDrink";
}
//
function changeIconState(spanIcon) {
    if(spanIcon.getAttribute("class") === "oi oi-lock-unlocked")
        spanIcon.setAttribute("class", "oi oi-lock-locked");
    else
        spanIcon.setAttribute("class", "oi oi-lock-unlocked");
}
//
function printNameDrinkImage(imageName) {
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
function validateFormAndSetStateAddDrinkForm(form) {
    var drinkType, drinkTypeValue;
    drinkType = document.querySelector("#addDrinkType");
    drinkTypeValue = drinkType.options[drinkType.selectedIndex].value;
    sessionStorage.setItem("stateAddDrinkForm", "submitted");
    sessionStorage.setItem("newDrinkForm", "submitted");
    if(drinkTypeValue === "null"){
        alert("Please select a type of drink");
        return false;
    }
    form.setAttribute("action", "FoodDrink/addDrink");
}
//
function unsetStateAddForm() {
    sessionStorage.setItem("stateAddDrinkForm", "not submitted");
    sessionStorage.setItem("newDrinkForm", "not submitted");
    sessionStorage.setItem("stateAddFoodForm", "not submitted");
    sessionStorage.setItem("newFoodForm", "not submitted");
}

function printMessage() {
    var listGroup, divBoxMessage1, divBoxMessage2;
    listGroup = document.querySelector("#boxListDrink > ul");
    divBoxMessage1 = document.querySelector("#displayMessage1");
    divBoxMessage2 = document.querySelector("#displayMessage2");
    /*if(listGroup !== undefined){
        if(listGroup.childElementCount === 0){
            listGroup.innerHTML = "<div class='bg-danger'><h1 class='text-light text-center'>You did not any drink yet. Please add one !</h1></div>";
        }
    }*/
    if(sessionStorage.getItem("newDrinkForm") === "submitted"){
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

function filterDrink(form) {
    var filter, filterType;
    filter = document.querySelector("#inputGroupSelect04");
    filterType = filter.options[filter.selectedIndex].value;
    switch (filterType){
        case "name":
            //alert(filterType);
                $.ajax({
                    type: "GET",
                    url: "Drink",
                    data: {
                        filter : filterType
                    },
                    datatype: 'Intelligent Guess (xml, json, script, or html)',
                    success: function (data) {
                        console.log("success");
                        //console.log(data);
                    },
                    error: function (xhr, status, error) {
                        console.log("error");
                        //console.log(xhr + "\n\n" + status + "\n\n" + error);
                    }
                });
            location.reload(false);
            //form.setAttribute("action", document.location.href + "/");
            return false;
        case "type":
            window.location.href = "Drink/filter?param="+filterType;
            alert(filterType);
            form.setAttribute("action", document.location.href + "/");
            break;
        case "price":
            alert(filterType);
            form.setAttribute("action", document.location.href + "/");
            break;
        case "size":
            alert(filterType);
            form.setAttribute("action", document.location.href + "/");
            break;
        case "discount":
            alert(filterType);
            form.setAttribute("action", document.location.href + "/");
            break;
        case "dateInserted":
            alert(filterType);
            form.setAttribute("action", document.location.href + "/");
            break;
        case "dateUpdated":
            alert(filterType);
            form.setAttribute("action", document.location.href + "/");
            break;
        default:
            alert("Please select a filter type !");
            form.setAttribute("action", document.location.href);
            return false;
    }
}