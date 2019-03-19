//
var divDisplayMessage, spanStars, arrayRatingCustomers, filter, filterTypeValue, selectedTypeSaved, rateCustomerConfirm, ratingCustomerValue;
//
divDisplayMessage = document.querySelector("#displayMessage");
//
arrayRatingCustomers = [];
filter = document.querySelector("#filterParam");

setTimeout(function () {
    if(divDisplayMessage !== null)
        divDisplayMessage.innerHTML = null;
}, 9000);


if(filter !== null){
    selectedTypeSaved = filter.getAttribute("data-selected-option");
}

//console.log(arrayRatingCustomers);

if(Object.keys(sessionStorage).length !== 0){
    for(var b=0; b<Object.keys(sessionStorage).length; b++){
        if(Object.keys(sessionStorage)[b].indexOf("RateCustomer") !== -1 ){
            arrayRatingCustomers.push(Object.keys(sessionStorage)[b]);
        }
    }
    if(arrayRatingCustomers.length !== 0){
        for(var l=0; l<arrayRatingCustomers.length; l++){
            getAndKeepNumStar(arrayRatingCustomers[l]);
        }
    }
    console.log(Object.keys(sessionStorage));
    //console.log(arrayRatingCustomers);
}

setSelectedFilter();

function getAndKeepNumStar(idElement) {
    var divRating = document.querySelector("#"+idElement);
    if(divRating !== null){
        spanStars = divRating.querySelectorAll(".spanStar");
        if(sessionStorage.getItem(idElement) !== null){
            for(var k=0; k<sessionStorage.getItem(idElement); k++){
                spanStars[k].firstElementChild.setAttribute('class', 'fas fa-star set');
            }
        }
    }
}

function changeMultipleStarMouseMove(num, divRating, event) {
    spanStars = divRating.querySelectorAll(".spanStar");
    switch (event.type){
        case "mouseover":
            for(var v=0; v<5; v++){
                spanStars[v].firstElementChild.setAttribute('class', 'far fa-star');
            }
            for(var w=0; w<num; w++){
                if(spanStars[w].firstElementChild.getAttribute("class") === "far fa-star")
                    spanStars[w].firstElementChild.setAttribute('class', 'fas fa-star');
            }
            break;
        case "mouseleave":
            for(var x=0; x<num; x++)
                if(spanStars[x].firstElementChild.getAttribute("class") === "fas fa-star"){
                    spanStars[x].firstElementChild.setAttribute('class', 'far fa-star');
                }
            break;
        default:
            break;
    }
    //console.log(event.type);
}

function changeMultipleStarMouseClick(num, divRating, event, currentStar, divRatingId, modalId) {
    spanStars = divRating.querySelectorAll(".spanStar");
    switch (event.type){
        case "click":
        case "dblclick":
            sendCustomerRating(modalId, num, divRatingId);
            break;
        default:
            break;
    }
    //console.log(event.type);
}

function filterCustomer(form) {
    filterTypeValue = filter.options[filter.selectedIndex].value;
    if(filterTypeValue === "Choose..."){
        alert("Please select a filter type !");
    }
    else{
        form.setAttribute("action", "/en/Customer/filter");
    }
}

function setSelectedFilter() {
    if(filter !== null){
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
}

function sendCustomerRating(modalId, numStars, divRatingId) {
    var modal, divRating;
    modal = document.querySelector("#"+modalId);
    divRating = modal.querySelector(".modal-body").children[1];
    divRating.innerHTML = "";
    if(numStars >= 1 && numStars <= 5){
        for(var i = 0; i < numStars; i++){
            divRating.innerHTML += '<span class="fas fa-star text-warning"></span>';
        }
        if(numStars === 1) divRating.innerHTML += " ("+numStars+" star)";
        else divRating.innerHTML += " ("+numStars+" stars)";
        $("#"+modalId).modal("show");
    }
    sessionStorage.setItem(divRatingId, numStars);
    sessionStorage.setItem("ratingCustomerValue", numStars);
}

function getResponseConfirmRate(modalId, answer, customer, orderCode) {
    var statusRequest = false;
    sessionStorage.setItem("rateCustomerConfirm", answer);
    $("#"+modalId).modal("hide");
    ratingCustomerValue = sessionStorage.getItem("ratingCustomerValue");
    rateCustomerConfirm = sessionStorage.getItem("rateCustomerConfirm");
    if(rateCustomerConfirm === "yes"){
        if(orderCode === ''){
            $.ajax({
                method: "POST",
                url: "Customer/rateCustomer",
                data: {
                    customer: customer,
                    rateValue: ratingCustomerValue
                }
            })
            .done(function( msg ) {
                console.log( "Response Backend: " + msg);
                msg = JSON.parse(msg);
                statusRequest = msg.success;
                if(msg.success){
                    $("body").load("Customer");
                    //checkSessionBeforeDisplayNav();
                }
            });
        }else{
            $.ajax({
                method: "POST",
                url: "Order/rateCustomer",
                data: {
                    customer: customer,
                    orderCode: orderCode,
                    rateValue: ratingCustomerValue
                }
            })
            .done(function( msg ) {
                console.log( "Response Backend: " + msg);
                msg = JSON.parse(msg);
                statusRequest = msg.success;
                if(msg.success){
                    $("body").load("Order");
                    //checkSessionBeforeDisplayNav();
                }
            });
        }
        sessionStorage.removeItem("ratingCustomerValue");
        sessionStorage.removeItem("rateCustomerConfirm");
    }
}