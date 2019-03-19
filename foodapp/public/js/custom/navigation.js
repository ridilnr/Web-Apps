//
var mainRight, mainLeft1, mainLeft2, arrowLeft1, arrowLeft2, selectBoxConnectivity, buttonConnectivity, switcherMenu;
//
var boxMainNavigation, mainNavigation, dashboardMenu, configurationMenu, notificationMenu, foodDrinkMenu, customerMenu,
    orderSumMenu, logoutMenu;
//
var divRestaurantNamePhoto, divRestaurantName, divRestaurantPhoto, navDashboardMenu, navConfigurationMenu,
    navNotificationMenu, navFoodDrinkMenu, navCustomerMenu, navOrderSumMenu, navLogoutMenu, divArrowLeftRight,
    arrow, setIcons;
//
boxMainNavigation = document.getElementById("boxMainNavigation");
mainNavigation = document.getElementById("mainNavigation");
dashboardMenu = document.getElementById("dashboardMenu");
configurationMenu = document.getElementById("configurationMenu");
notificationMenu = document.getElementById("notificationMenu");
foodDrinkMenu = document.getElementById("foodDrinkMenu");
customerMenu = document.getElementById("customerMenu");
orderSumMenu = document.getElementById("orderSumMenu");
logoutMenu = document.getElementById("logoutMenu");
//
mainLeft1 = document.querySelector("#mainLeft1");
mainLeft2 = document.querySelector("#mainLeft2");
arrowLeft1 = document.querySelector("#mainLeft1 .divArrow > span");
arrowLeft2 = document.querySelector("#mainLeft2 .divArrow > span");
mainRight = document.querySelector("#mainRight");
selectBoxConnectivity = document.querySelector("#selectBoxConnectivity");
buttonConnectivity = document.querySelector("#buttonConnectivity");
//
divRestaurantNamePhoto = mainLeft2.firstElementChild;
divRestaurantName = mainLeft2.firstElementChild.firstElementChild;
divRestaurantPhoto = mainLeft2.children[1];
navDashboardMenu = boxMainNavigation.firstElementChild;
navConfigurationMenu = mainNavigation.firstElementChild;
navOrderSumMenu = mainNavigation.children[1];
navFoodDrinkMenu = mainNavigation.children[2];
navNotificationMenu = mainNavigation.children[3];
navCustomerMenu = mainNavigation.children[4];
navLogoutMenu = mainNavigation.lastElementChild;
divArrowLeftRight = mainLeft2.firstElementChild.lastElementChild;
arrow = divArrowLeftRight.firstElementChild;
setIcons = mainLeft2.querySelectorAll("i.rIcon.fas");
//
setLinksMenu();
checkSessionBeforeDisplayNav();
//
if(sessionStorage.getItem("connect") !== null){
    for(var r=0; r<selectBoxConnectivity.options.length; r++)
        if(selectBoxConnectivity.options[r].getAttribute("value") === sessionStorage.getItem("connect")){
            selectBoxConnectivity.options[r].setAttribute("selected", "selected");
            break;
        }
}
//
if(selectBoxConnectivity !== null) {
    selectBoxConnectivity.addEventListener("change", function () {
        var connectivityVal =  selectBoxConnectivity.options[selectBoxConnectivity.selectedIndex].value;
        sessionStorage.setItem("connect", connectivityVal);
        buttonConnectivity.click();
    });
}
//
//
if(divArrowLeftRight !== null){
    divArrowLeftRight.addEventListener("click", function () {
        if(arrow.getAttribute("class") === "pl-2 fas fa-angle-double-left"){
            showSmallNavigation();
        }else if(arrow.getAttribute("class") === "pl-2 fas fa-angle-double-right"){
            showLargeNavigation();
        }
    });
}

window.addEventListener("resize", function (ev) {
    if(window.innerWidth <= 787) {
        sessionStorage.setItem("typeNavMenu", "small");
        checkSessionBeforeDisplayNav();
    }else {
        checkSessionBeforeDisplayNav();
    }
});

function checkSessionBeforeDisplayNav() {
    if(sessionStorage.getItem("typeNavMenu")){
        if(sessionStorage.getItem("typeNavMenu") === "small"){
            showSmallNavigation();
        }else if(sessionStorage.getItem("typeNavMenu") === "large"){
            showLargeNavigation();
        }
    }else {
        showLargeNavigation();
    }
}

function setLinksMenu() {
    addEventToMenuElements(dashboardMenu, "Dashboard");
    addEventToMenuElements(configurationMenu, "Account");
    addEventToMenuElements(notificationMenu, "Notification");
    addEventToMenuElements(foodDrinkMenu, "FoodDrink");
    addEventToMenuElements(customerMenu, "Customer");
    addEventToMenuElements(orderSumMenu, "OrderSum");
    addEventToMenuElements(logoutMenu, "Index/logout");
}

function addEventToMenuElements(element, link) {
    if(element !== null){
        element.addEventListener("click", function () {
            location.href = link;
        });
    }
}

function showSmallNavigation() {
    arrow.setAttribute("class", "pl-2 fas fa-angle-double-right");
    toggleNavigation("none");
    mainLeft2.setAttribute("class", "mainLeft col-1 bg-danger font-weight-bold");
    mainRight.setAttribute("class", "col-11");
    for(var k = 0; k < setIcons.length; k++){
        setIcons[k].style.fontSize = "2em";
    }
    sessionStorage.setItem("typeNavMenu", "small");
}

function showLargeNavigation() {
    arrow.setAttribute("class", "pl-2 fas fa-angle-double-left");
    toggleNavigation("block");
    mainLeft2.setAttribute("class", "mainLeft col-4 col-sm-3 col-lg-2 bg-danger font-weight-bold");
    mainRight.setAttribute("class", "col-8 col-sm-9 col-lg-10");
    for(var k = 0; k < setIcons.length; k++){
        setIcons[k].style.fontSize = "1em";
    }
    sessionStorage.setItem("typeNavMenu", "large");
}


function toggleNavigation(value) {
    divRestaurantName.style.display = value;
    //divRestaurantPhoto.style.display = value;
    navDashboardMenu.lastElementChild.style.display = value;
    navConfigurationMenu.lastElementChild.style.display = value;
    navLogoutMenu.lastElementChild.style.display = value;

    for(var j = 1; j < navOrderSumMenu.childElementCount; j++)
        navOrderSumMenu.children[j].style.display = value;

    for(var j = 1; j < navFoodDrinkMenu.childElementCount; j++)
        navFoodDrinkMenu.children[j].style.display = value;

    for(var j = 1; j < navNotificationMenu.childElementCount; j++)
        navNotificationMenu.children[j].style.display = value;

    for(var j = 1; j < navCustomerMenu.childElementCount; j++)
        navCustomerMenu.children[j].style.display = value;
}
