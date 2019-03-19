var breadcrumbList, boxListFood, boxListDrink, paginationFood, paginationDrink;
var addFoodPrice, addFoodPriceSmall, addFoodPriceMedium, addFoodPriceBig;
breadcrumbList = document.querySelectorAll(".breadcrumbList-item");
boxListFood = document.querySelector("#boxListFood");
boxListDrink = document.querySelector("#boxListDrink");
paginationFood = document.querySelector("#paginationFood");
paginationDrink = document.querySelector("#paginationDrink");
//
addFoodPrice = document.querySelector("#addFoodPrice");
addFoodPriceSmall = document.querySelector("#addFoodPriceSmall");
addFoodPriceMedium = document.querySelector("#addFoodPriceMedium");
addFoodPriceBig = document.querySelector("#addFoodPriceBig");

if(sessionStorage.getItem("foodDrinkPage") !== null)
    navigationMenu(sessionStorage.getItem("foodDrinkPage"));

breadcrumbList[0].addEventListener("click", function () {
    navigationMenu("food-active");
});

breadcrumbList[1].addEventListener("click", function () {
    navigationMenu("drink-active");
});

mutateRegularMediumPrice(addFoodPrice, addFoodPriceMedium);

function mutateRegularMediumPrice(input1, input2) {
    if((input1 !== null) && (input2 !== null)){
        input1.addEventListener("input", function () {
            changeStateRegularMediumPrice(input1, input2);
        });
        input2.addEventListener("input", function () {
            changeStateRegularMediumPrice(addFoodPriceMedium, input1);
        });
    }
}

function changeStateRegularMediumPrice(input1, input2) {
    if(input1.value !== ""){
        input2.value = input1.value;
        input2.removeAttribute("required");
        input2.setAttribute("disabled", "disabled");
    }else {
        input2.value = "";
        input2.removeAttribute("disabled");
    }
}

function navigationMenu(activeMenu) {
    switch (activeMenu) {
        case "food-active" :
            if(boxListFood.getAttribute("class") === "bg-none mt-2 displayNone") {
                boxListDrink.setAttribute("class", "bg-none mt-2 displayNone");
                boxListFood.setAttribute("class", "bg-none mt-2");
                breadcrumbList[0].setAttribute("aria-current", "page");
                breadcrumbList[0].setAttribute("class", "breadcrumbList-item active");
                breadcrumbList[1].setAttribute("class", "breadcrumbList-item");
                breadcrumbList[1].removeAttribute("aria-current");
                sessionStorage.setItem("foodDrinkPage", "food-active");
                paginationFood.setAttribute("class", "mt-3");
                paginationDrink.setAttribute("class", "mt-3 displayNone");
            }
            break;
        case "drink-active" :
            if(boxListDrink.getAttribute("class") === "bg-none mt-2 displayNone") {
                boxListFood.setAttribute("class", "bg-none mt-2 displayNone");
                boxListDrink.setAttribute("class", "bg-none mt-2");
                breadcrumbList[0].removeAttribute("aria-current");
                breadcrumbList[0].setAttribute("class", "breadcrumbList-item");
                breadcrumbList[1].setAttribute("class", "breadcrumbList-item active");
                breadcrumbList[1].setAttribute("aria-current", "page");
                sessionStorage.setItem("foodDrinkPage", "drink-active");
                paginationFood.setAttribute("class", "mt-3 displayNone");
                paginationDrink.setAttribute("class", "mt-3");
            }
            break;
    }
}

function soldUnsoldLockUnlock(buttonIcon, divSold) {
    if((buttonIcon.getAttribute("class") === "fas fa-times") &&
        (divSold.getAttribute("class") === "foodDrinkSold displayNone")){
        divSold.setAttribute("class", "foodDrinkSold");
        buttonIcon.setAttribute("class", "fas fa-check");
    }
    else{
        divSold.setAttribute("class", "foodDrinkSold displayNone");
        buttonIcon.setAttribute("class", "fas fa-times")
    }
}

function popoverCloseAndOpen(btn) {
    //var dataClicked = btn.getAttribute("data-clicked");
    var divBtnSize = btn.parentElement.parentElement;
    var arrayBtnSize =  divBtnSize.querySelectorAll("button");
    var classBtn = btn.getAttribute("class");
    console.log(classBtn);
    if(btn.getAttribute("data-clicked") !== "yes"){
        btn.setAttribute("data-clicked", "yes");
        for(var i=0; i < arrayBtnSize.length; i++){
            //console.log(arrayBtnSize[i].getAttribute("data-clicked"));
            if((classBtn !== arrayBtnSize[i].getAttribute("class")) &&
                (arrayBtnSize[i].getAttribute("data-clicked").toLowerCase() === "yes")){
                arrayBtnSize[i].click();
                //console.log(arrayBtnSize[i].getAttribute("data-clicked"));
            }
        }
    }else {
        btn.setAttribute("data-clicked", "no");
    }
}

function hideAndShowInputPrice(btn) {
    var input = btn.nextElementSibling;
    var label = input.nextElementSibling;

    if(btn.getAttribute("data-clicked") !== "yes"){
        if((input.getAttribute("class") !== "form-control") && (label.getAttribute("class") !== "input-group-append")){
            input.setAttribute("class", "form-control");
            label.setAttribute("class", "input-group-append");
            btn.setAttribute("data-clicked", "yes");
        }
    }else {
        if((input.getAttribute("class") === "form-control") && (label.getAttribute("class") === "input-group-append")){
            input.setAttribute("class", "form-control invisible");
            label.setAttribute("class", "input-group-append invisible");
            btn.setAttribute("data-clicked", "no");
        }
    }
}

function setPriceToSave(fakeInput) {
    var hiddenInput = fakeInput.parentElement.parentElement.firstElementChild;
    hiddenInput.value = fakeInput.value;
    fakeInput.value = hiddenInput.value;
    console.log(hiddenInput.value);
    console.log(fakeInput.value);
}

function disableStandardPrice(elem) {
        console.log(elem);
}