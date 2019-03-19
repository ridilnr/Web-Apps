var openAddFoodModal, openAddDrinkModal, searchSection, boxSearchIcon, menuLeft1, menuLeft2, mainRight,
    windowInnerSize, windowOuterSize, documentBodySize, documentBodySizeIE, newLeftAndRightHeight, mainContent;

openAddFoodModal = setInterval(function () {
    if(sessionStorage.stateAddFoodForm === "submitted"){
        document.querySelector('#addFoodButton').click();
        var messageDrinkOperation = document.querySelector('#displayMessage2');
        messageDrinkOperation.style.backgroundColor = 'green !important';
        messageDrinkOperation.innerHTML = "vhhgjhj jkjk";
    }
    clearInterval(openAddFoodModal);
}, 1000);

openAddDrinkModal = setInterval(function () {
    if(sessionStorage.stateAddDrinkForm === "submitted"){
        document.querySelector('#addDrinkButton').click();
    }
    clearInterval(openAddDrinkModal);
}, 1000);
//
setTimeout(function () {
    var divMessage = document.querySelector("#displayMessage");
    if(divMessage !== null || divMessage !== undefined)
        divMessage.innerHTML = null;
}, 9000);
//
searchSection = document.querySelector("#searchSection");
boxSearchIcon = document.querySelector("#boxSearchIcon");
//
menuLeft1 = document.querySelector("#mainLeft1");
menuLeft2 = document.querySelector("#mainLeft2");
mainRight = document.querySelector("#mainRight");
mainContent = document.querySelector("#mainContent");
//
//
if(boxSearchIcon !== null){
    boxSearchIcon.addEventListener("click", function () {
        if(searchSection.getAttribute("class") === "ml-3 mr-3 mt-2 disabled"){
            searchSection.setAttribute("class", "ml-3 mr-3 mt-2 enabled");
        }else if(searchSection.getAttribute("class") === "ml-3 mr-3 mt-2 enabled"){
            searchSection.setAttribute("class", "ml-3 mr-3 mt-2 disabled");
        }
    });
}

getWindowAndBodySize();

function getWindowAndBodySize() {
    windowInnerSize = {
        width : window.innerWidth,
        height : window.innerHeight
    };
    windowOuterSize = {
        width : window.outerWidth,
        height : window.outerHeight

    };
    documentBodySize = {
        width : document.body.clientWidth,
        height : document.body.clientHeight

    };
    documentBodySizeIE = {
        width : document.documentElement.clientWidth,
        height : document.documentElement.clientHeight
    };

    newLeftAndRightHeight = (windowInnerSize.height - 20) + "px";
    //document.querySelector("#mainRight").style.height = windowOuterSize.height + "px";
    if(menuLeft1 !== null && menuLeft2 !== null && mainContent !== null){
        menuLeft1.style.minHeight = newLeftAndRightHeight;
        menuLeft2.style.minHeight = newLeftAndRightHeight;
        mainContent.style.minHeight = (windowInnerSize.height - 160) + "px";//(windowInnerSize.height / 1.815) + "px";
    }
    /*console.log("Menu left height = " + mainLeft1.offsetHeight + "\n" +
                "Main Content Right Height = " + mainRight.offsetHeight + "\n" +
                "Window inner height = " + windowInnerSize.height);
    console.log("Window inner width : " + windowInnerSize.width + "\nWindow inner height : " + windowInnerSize.height + "\n" +
                "Window outer width : " + windowOuterSize.width + "\nWindow outer height : " + windowOuterSize.height + "\n\n" +
                "Document width : " + documentBodySize.width + "\nDocument height : " + documentBodySize.height);*/
}

window.onresize = function (ev) {
    //console.clear();
    //console.log(ev);
    getWindowAndBodySize();
};
