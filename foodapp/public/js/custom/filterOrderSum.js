var filter, filterTypeValue, selectedTypeSaved;
filter = document.querySelector("#filterParam");
selectedTypeSaved = filter.getAttribute("data-selected-option");

setSelectedFilter();
//
function filterOrderSum(form) {
    filterTypeValue = filter.options[filter.selectedIndex].value;
    if(filterTypeValue === "Choose..."){
        alert("Please select a filter type !");
    }
    else{
        form.setAttribute("action", "/en/OrderSum/filter");
    }
}
//
function setSelectedFilter() {
    for(var i=0; i<filter.length; i++){
        if(filter[i].getAttribute("selected") === "selected"){
            filter[i].removeAttribute("selected");
        }
    }
    for(var j=0; j<filter.length; j++){
        if(filter[j].getAttribute("value") === selectedTypeSaved){
            filter[j].setAttribute("selected", "selected");
        }
    }
}
//
