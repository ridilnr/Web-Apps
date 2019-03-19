var filterFood, filterTypeValueFood, selectedTypeSavedFood,
    filterDrink, filterTypeValueDrink, selectedTypeSavedDrink;
filterFood = document.querySelector("#filterParamFood");
filterDrink = document.querySelector("#filterParamDrink");
selectedTypeSavedFood = filterFood.getAttribute("data-selected-food-option");
selectedTypeSavedDrink = filterDrink.getAttribute("data-selected-drink-option");
//
setSelectedFilterFood();
setSelectedFilterDrink();
//
function filterFoodProduct(form) {
    filterTypeValueFood = filterFood.options[filterFood.selectedIndex].value;
    if(filterTypeValueFood === "Choose..."){
        alert("Please select a filter type !");
    }
    else{
        form.setAttribute("action", "/en/FoodDrink/filterFood");
    }
}
//
function filterDrinkProduct(form) {
    filterTypeValueDrink = filterDrink.options[filterDrink.selectedIndex].value;
    if(filterTypeValueDrink === "Choose..."){
        alert("Please select a filter type !");
    }
    else{
        form.setAttribute("action", "/en/FoodDrink/filterDrink");
    }
}
//
function setSelectedFilterFood() {
    for(var i=0; i<filterFood.length; i++){
        //console.log(filterFood[i].getAttribute("selected"));
        if(filterFood[i].getAttribute("selected") === "selected"){
            filterFood[i].removeAttribute("selected");
        }
    }
    for(var j=0; j<filterFood.length; j++){
        if(filterFood[j].getAttribute("value") === selectedTypeSavedFood){
            filterFood[j].setAttribute("selected", "selected");
        }
    }
}
//
function setSelectedFilterDrink() {
    for(var i=0; i<filterDrink.length; i++){
        if(filterDrink[i].getAttribute("selected") === "selected"){
            filterDrink[i].removeAttribute("selected");
        }
    }
    for(var j=0; j<filterDrink.length; j++){
        if(filterDrink[j].getAttribute("value") === selectedTypeSavedDrink){
            filterDrink[j].setAttribute("selected", "selected");
        }
    }
}
//
