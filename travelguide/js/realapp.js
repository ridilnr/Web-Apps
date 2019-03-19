var linkHome, linkReply, linkSetting, sectionHome, divUserPicture, divTitleApp,
    divMenuIconApp, divPostActivity, tempPostActivity, divReplySection,
    divPostComment, divUserCommentReply, divInformationPlace, tempPostComment, divContainerSlider, divCarouselPlaceImage,
    tempCarouselPlaceImage, divContainerMap, divIconNewPost, divNewPost, AllSpanCloseMessage,
    divEditAccountSection, divMainBodyApp, divNavigationMenu, divDisconnect, divSignupMessage,
    exitMessage, spanStateLogin, spanCloseMessage, headerApp, allHeaderApp, bodyApp, divBtnChangeMap,
    divBoxPlace, arrayPlace, getValueUrl, returnSectionPost, booleanClickPost,
    divNoReplyComment, divDeleteImgBtn, divUpdateUserAccount,
    userName, userEmail, userPhone, userPassword, userAvatar, inputUpdateUser;

//
const tempSpanStateLogin = document.querySelector("#tempSpanStateLogin");

linkHome = document.querySelector(".item-home");
linkSetting = document.querySelector("#divItemSetting");
linkReply = document.querySelector("#divReplyPlusNumber");
sectionHome = document.querySelector("#divItemHome");
divUserPicture = document.querySelector("#divUserPicture");
divTitleApp = document.querySelector("#divTitleApp");
divMenuIconApp = document.querySelector("#divMenuIconApp");
divPostActivity = document.querySelector("#divPostActivity");
tempPostActivity = divPostActivity.cloneNode(true);
divReplySection = document.querySelector("#divReplySection");
divPostComment = document.querySelector("#divPostComment");
divUserCommentReply = document.querySelector("#anyUserCommentSection");
divInformationPlace = document.querySelector("#divInformationPlace");
tempPostComment = divPostComment.cloneNode(true);
divContainerSlider = document.querySelector("#divContainerSlider");
divCarouselPlaceImage = document.querySelector("#carouselPlaceImage");
tempCarouselPlaceImage = divCarouselPlaceImage.cloneNode(true);
divContainerMap = document.querySelector("#containerMap");
divIconNewPost = document.querySelector("#divIconNewPost");
//divReplyPlusNumber = document.querySelector("#divReplyPlusNumber");
divNewPost = document.querySelector("#divNewPost");
divEditAccountSection = document.querySelector("#editAccountSection");
divMainBodyApp = document.querySelector("#mainBodyApp");
divNavigationMenu = document.querySelector("#navigationMenu");
divSignupMessage = document.querySelector("#signupMessage");
divDisconnect = document.querySelector("#divDisconnect");
//divItemSetting = document.querySelector("#divItemSetting");
spanCloseMessage = document.querySelector(".closeMessage");
AllSpanCloseMessage = document.querySelectorAll(".closeMessage");
exitMessage = document.querySelector("#exitMessage");
spanStateLogin = document.querySelector("#spanStateLogin");
allHeaderApp = document.querySelectorAll("header");
headerApp = document.querySelector("header");
bodyApp = document.querySelector("main");
divBtnChangeMap = document.querySelector("#divBtnChangeMap");
divBoxPlace = document.querySelectorAll(".boxPlace");
getValueUrl = getValueFromUrl();
arrayPlace = [];
booleanClickPost = false;
divNoReplyComment = document.querySelector("#divNoReplyComment");
divDeleteImgBtn = document.querySelector(".deleteImgBtn");
divUpdateUserAccount = document.querySelector("#updateUserAccount");
inputUpdateUser = document.querySelectorAll('.changeState');

//
userName = document.querySelector("#editUname");
userEmail = document.querySelector("#editEmail");
userPhone = document.querySelector("#editPhone");
userPassword = document.querySelector("#editPassword");
userAvatar = document.querySelector("#editAvatar");
//

if((sessionStorage.getItem("currentPostId") === null) || (sessionStorage.getItem("currentPostId") === "")){
    sessionStorage.setItem("currentPostId", getValueUrl);
}

if(sessionStorage.check === "Good") {
    sessionStorage.check = "not";
    window.onload = initialzeState;
}

//alert(window.location.href);

runInitialize();
assignPlaceToArray();

setInterval(function () {
    loadDoc();
}, 2500);

function loadDoc() {
    var xhttp, arrayNumTuple = [];
    if(
        ((sessionStorage.getItem("numComment") === null) || (sessionStorage.getItem("numComment") === "")) &&
        ((sessionStorage.getItem("numPlace") === null) || (sessionStorage.getItem("numPlace") === "")) &&
        ((sessionStorage.getItem("numReply") === null) || (sessionStorage.getItem("numReply") === "")) &&
        ((sessionStorage.getItem("numImage") === null) || (sessionStorage.getItem("numImage") === ""))
    ){
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                arrayNumTuple = JSON.parse(this.responseText);
                sessionStorage.setItem("numComment", arrayNumTuple[0]);
                sessionStorage.setItem("numPlace", arrayNumTuple[1]);
                sessionStorage.setItem("numReply", arrayNumTuple[2]);
                sessionStorage.setItem("numImage", arrayNumTuple[3]);
            }
        };
        xhttp.open("GET", "reloadpage.php", true);
        xhttp.send();
    }else if(
        (sessionStorage.getItem("numComment") > 0) || (sessionStorage.getItem("numPlace") > 0) ||
        (sessionStorage.getItem("numReply") > 0) || (sessionStorage.getItem("numImage") > 0)
    ){
        arrayNumTuple[0] = sessionStorage.getItem("numComment");
        arrayNumTuple[1] = sessionStorage.getItem("numPlace");
        arrayNumTuple[2] = sessionStorage.getItem("numReply");
        arrayNumTuple[3] = sessionStorage.getItem("numImage");
        setInterval(checkAgain(arrayNumTuple), 2500);
    }
}

function checkAgain(array) {
    var xhttp, newArrayNumTuple = [];
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            newArrayNumTuple = JSON.parse(this.responseText);
            if(
                (newArrayNumTuple[0] > sessionStorage.getItem("numComment")) || (newArrayNumTuple[1] > sessionStorage.getItem("numPlace")) ||
                (newArrayNumTuple[2] > sessionStorage.getItem("numReply")) || (newArrayNumTuple[3] > sessionStorage.getItem("numImage"))
            ){
                sessionStorage.setItem("numComment", newArrayNumTuple[0]);
                sessionStorage.setItem("numPlace", newArrayNumTuple[1]);
                sessionStorage.setItem("numReply", newArrayNumTuple[2]);
                sessionStorage.setItem("numImage", newArrayNumTuple[3]);
                location.reload();
            }
            else if(
                (newArrayNumTuple[0] < sessionStorage.getItem("numComment")) || (newArrayNumTuple[1] < sessionStorage.getItem("numPlace")) ||
                (newArrayNumTuple[2] < sessionStorage.getItem("numReply")) || (newArrayNumTuple[3] < sessionStorage.getItem("numImage"))
            ){
                sessionStorage.setItem("numComment", newArrayNumTuple[0]);
                sessionStorage.setItem("numPlace", newArrayNumTuple[1]);
                sessionStorage.setItem("numReply", newArrayNumTuple[2]);
                sessionStorage.setItem("numImage", newArrayNumTuple[3]);
                location.reload();
            }
        }
    };
    xhttp.open("GET", "reloadpage.php", true);
    xhttp.send();
}

function getValueFromUrl() {
    var final_id, url, id_check, match;
    url = document.URL;
    id_check = /[?&]plc=([^&]+)/i;
    match = id_check.exec(url);
    if (match != null) {
        final_id = match[1];
    } else {
        final_id = "";
    }
    return final_id;
}

function assignPlaceToArray() {
    //
    for (var i=0; i<divBoxPlace.length; i++) {
        arrayPlace[i] = divBoxPlace[i].id;
    }
    sessionStorage.setItem("allPostId", JSON.stringify(arrayPlace));
    //
}

function runInitialize() {
//check for navigation time API support
    if (window.performance){
        console.log("this browsr support this api");
        if(/Login/.test(spanStateLogin.innerHTML)){
            location.href = "../travelguide";
        }
        initialzeState();
        if(sessionStorage.getItem("currentPage") === "updateAccount"){
            displaySettingSection();
        }
    }
    if (performance.navigation.type === 1) {
        if((sessionStorage.getItem("successLogin")!== "") && (sessionStorage.getItem("successLogin")!== null)){
            history.pushState(null, null, "travelguide/realapp.php");
        }
        switch (sessionStorage.getItem("currentPage")){
            case "Home":
                displayHomeSection();
                break;
            case "Reply":
                displayReplySection();
                break;
            case "Setting":
                displaySettingSection();
                break;
            case "Post":
                keepPostSession();
                break;
            case "New Post":
                displayNewPostSection();
                break;
            default:
                break;
        }
    } else {
        if(sessionStorage.getItem("clicked")!== null && sessionStorage.getItem("clicked")!== ""){
            history.pushState(null, null, "../travelguide/realapp.php");
            if((sessionStorage.getItem("currentPostId") !== null) && (sessionStorage.getItem("currentPostId") !== "")){
                clickPostSection(sessionStorage.getItem("currentPostId"));
            }
            sessionStorage.setItem("clicked", "no");
        }
        console.info( "This page has not benn reloaded");
    }
}

function initialzeState() {
    if(spanStateLogin.innerHTML === tempSpanStateLogin.innerHTML){
        window.location.href = "index.php";
    }
    if((sessionStorage.getItem("currentPage") === null) || (sessionStorage.getItem("currentPage") === "")){
        sessionStorage.setItem("currentPage", "Home");
    }
    divPostActivity.innerHTML = tempPostActivity.innerHTML;
    sectionHome.setAttribute("class", "d-flex item-home align-items-center active");
    sectionHome.addEventListener("mouseover", function () {
        sectionHome.style.cursor = "text";
    });
    divReplySection.setAttribute("class", "container-fluid hidden");
    divIconNewPost.setAttribute("class", "container-fluid");
    divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    divMainBodyApp.style.minHeight = (screen.height - 320) + "px"; //"450px";
    divPostComment.innerHTML = "";
}

function displayReplyInput(inputElem) {
    inputElem.setAttribute("class", "input-group");
}

function switchSlideMap(classChild) {
    var actualClass, carouselImage, containerMap, divUserPlacePicture, updatePostSection,
        divShowMapSlide, divShowUpdateSection, spanEdit, spanSlideMan;

    carouselImage = document.querySelector("#carouselPlaceImage");
    containerMap = document.querySelector("#containerMap");
    divUserPlacePicture = document.querySelector("#userPlacePicture");
    updatePostSection = document.querySelector("#updatePostSection");
    divShowMapSlide = document.querySelector("#showMapSlide");
    divShowUpdateSection = document.querySelector("#showUpdateSection");
    spanEdit = divShowUpdateSection.firstElementChild;
    spanSlideMan = divShowMapSlide.firstElementChild;
    actualClass = classChild.getAttribute("class");

    if(actualClass === "fa fa-map fa-3x"){
        if(spanEdit.getAttribute("class") === "fa fa-pencil-square-o fa-3x"){
            classChild.setAttribute("class", "fa fa-picture-o fa-3x");
            spanEdit.setAttribute("class", "fa fa-pencil-square-o fa-3x");
        }
        if(spanEdit.getAttribute("class") === "fa fa-picture-o fa-3x"){
            classChild.setAttribute("class", "fa fa-picture-o fa-3x");
            spanSlideMan.setAttribute("class", "fa fa-pencil-square-o fa-3x");
        }
        if(spanSlideMan.getAttribute("class") === "fa fa-pencil-square-o fa-3x"){
            classChild.setAttribute("class", "fa fa-picture-o fa-3x");
            spanSlideMan.setAttribute("class", "fa fa-pencil-square-o fa-3x");
        }
        if(spanSlideMan.getAttribute("class") === "fa fa-picture-o fa-3x"){
            classChild.setAttribute("class", "fa fa-pencil-square-o fa-3x");
            spanSlideMan.setAttribute("class", "fa fa-picture-o fa-3x");
        }
        carouselImage.style.display = "none";
        containerMap.setAttribute("class", "container-fluid");
        divUserPlacePicture.setAttribute("class", "p-2 hidden");
        updatePostSection.setAttribute("class", "container-fluid hidden");
        returnSectionPost = actualClass;
    }
    //
    if(actualClass === "fa fa-picture-o fa-3x"){
        if(spanEdit.getAttribute("class") === "fa fa-pencil-square-o fa-3x"){
            classChild.setAttribute("class", "fa fa-map fa-3x");
            spanEdit.setAttribute("class", "fa fa-pencil-square-o fa-3x");
        }
        if(spanEdit.getAttribute("class") === "fa fa-map fa-3x"){
            classChild.setAttribute("class", "fa fa-pencil-square-o fa-3x");
            spanSlideMan.setAttribute("class", "fa fa-map fa-3x");
        }
        if(spanSlideMan.getAttribute("class") === "fa fa-pencil-square-o fa-3x"){
            classChild.setAttribute("class", "fa fa-map fa-3x");
            spanSlideMan.setAttribute("class", "fa fa-pencil-square-o fa-3x");
        }
        if(spanSlideMan.getAttribute("class") === "fa fa-map fa-3x"){
            spanSlideMan.setAttribute("class", "fa fa-pencil-square-o fa-3x");
            spanEdit.setAttribute("class", "fa fa-map fa-3x");
        }
        carouselImage.style.display = "block";
        divUserPlacePicture.style.display = "block";
        divUserPlacePicture.setAttribute("class", "p-2");
        containerMap.setAttribute("class", "container-fluid hidden");
        updatePostSection.setAttribute("class", "container-fluid hidden");
        returnSectionPost = actualClass;
    }
    //
    if(actualClass === "fa fa-pencil-square-o fa-3x"){
        switch (returnSectionPost){
            case "fa fa-map fa-3x":
                classChild.setAttribute("class", "fa fa-pencil-square-o fa-3x");
                spanSlideMan.setAttribute("class", "fa fa-map fa-3x");
                break;
            case "fa fa-picture-o fa-3x":
                classChild.setAttribute("class", "fa fa-pencil-square-o fa-3x");
                spanSlideMan.setAttribute("class", "fa fa-picture-o fa-3x");
                break;
            default:
                if(spanEdit.getAttribute("class") === returnSectionPost){
                    returnSectionPost = spanSlideMan.getAttribute("class");
                }
                if(spanSlideMan.getAttribute("class") === returnSectionPost){
                    returnSectionPost = spanEdit.getAttribute("class");
                }
                classChild.setAttribute("class", "fa fa-picture-o fa-3x");
                spanSlideMan.setAttribute("class", "fa fa-map fa-3x");
                break;
        }
        carouselImage.style.display = "none";
        divUserPlacePicture.setAttribute("class", "p-2 hidden");
        divUserPlacePicture.style.display = "block";
        containerMap.setAttribute("class", "container-fluid hidden");
        updatePostSection.setAttribute("class", "container-fluid");
        returnSectionPost = actualClass;
    }
}

function clickPostSection(idPost){
    var newArrayPlace;
    newArrayPlace = JSON.parse(sessionStorage.getItem("allPostId"));
    booleanClickPost = true;
    for(var x=0; x<newArrayPlace.length; x++){
        if(newArrayPlace[x] === idPost){
            history.pushState(null, null, "realapp.php?plc=" + idPost);
            sessionStorage.setItem("","");
            location.reload();
            keepPostSession();
            break;
        }
    }
    sessionStorage.setItem("currentPostId", idPost);
}

function checkInputState() {
    sessionStorage.setItem("clicked", "yes");
}

function keepPostSession() {
    divPostComment.innerHTML = tempPostComment.innerHTML;
    divReplySection.setAttribute("class", "container-fluid hidden");
    divIconNewPost.setAttribute("class", "container-fluid");
    divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    divMainBodyApp.style.minHeight = (screen.height - 320) + "px"; //"450px";
    divPostActivity.innerHTML = "";
    sessionStorage.setItem("currentPage", "Post");
}

function enableEditAccount(inputElem, iconElem) {
    if(iconElem.getAttribute("state") === "off"){
        inputElem.removeAttribute("disabled");
        iconElem.style.color = "#868e96";
        iconElem.setAttribute("state", "on");
    }
    else {
        inputElem.setAttribute("disabled", "disabled");
        iconElem.style.color = "#007bff";
        iconElem.setAttribute("state", "off");
    }
}

function keepStyleReplyNumber() {
    if(sectionHome.getAttribute("class") === "d-flex item-home align-items-center active"){
        linkReply.lastElementChild.style.background = "#dc3545";
        linkReply.lastElementChild.style.padding = "5px 15px";
        linkReply.lastElementChild.style.borderRadius = "15px";
        linkReply.lastElementChild.style.color = "#fff";
    }
    if(linkReply.getAttribute("class") === "d-flex active"){
        linkReply.lastElementChild.style.background = "#fff";
        linkReply.lastElementChild.style.padding = "5px 20px";
        linkReply.lastElementChild.style.borderRadius = "15px";
        linkReply.lastElementChild.style.color = "#007bff";
    }
    if(linkSetting.getAttribute("class") === "d-flex active"){
        linkReply.lastElementChild.style.background = "#dc3545";
        linkReply.lastElementChild.style.padding = "5px 15px";
        linkReply.lastElementChild.style.borderRadius = "15px";
        linkReply.lastElementChild.style.color = "#fff";
    }
}

function displayHomeSection() {
    divPostActivity.innerHTML = tempPostActivity.innerHTML;
    divReplySection.setAttribute("class", "container-fluid hidden");
    divNewPost.setAttribute("class", "container-fluid hidden");
    divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    sectionHome.setAttribute("class", "d-flex item-home align-items-center active");
    linkSetting.setAttribute("class", "d-flex");
    linkReply.setAttribute("class", "d-flex");
    divMainBodyApp.style.minHeight = (screen.height - 320) + "px"; //"450px";
    divPostComment.innerHTML = "";
}

function displayReplySection() {
    divReplySection.setAttribute("class", "container-fluid");
    divNewPost.setAttribute("class", "container-fluid hidden");
    divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    divMainBodyApp.style.minHeight = (screen.height - 320) + "px"; //"450px";
    divPostActivity.innerHTML = "";
    divPostComment.innerHTML = "";
    sectionHome.setAttribute("class", "d-flex item-home align-items-center");
    linkSetting.setAttribute("class", "d-flex");
    linkReply.setAttribute("class", "d-flex active");
}

function displaySettingSection() {
    divEditAccountSection.setAttribute("class", "row mt-1 w-75");
    divReplySection.setAttribute("class", "container-fluid hidden");
    divNewPost.setAttribute("class", "container-fluid hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    sectionHome.setAttribute("class", "d-flex item-home align-items-center");
    linkSetting.setAttribute("class", "d-flex active");
    linkReply.setAttribute("class", "d-flex");
    divPostComment.innerHTML = "";
    divPostActivity.innerHTML = "";
    divMainBodyApp.style.minHeight = (screen.height - 320) + "px"; //"450px";
}

function displayNewPostSection() {
    divNewPost.setAttribute("class", "container-fluid");
    divReplySection.setAttribute("class", "container-fluid hidden");
    divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    divMainBodyApp.style.minHeight = (screen.height - 320) + "px"; //"450px";
    divPostComment.innerHTML = "";
    divPostActivity.innerHTML = "";
}

linkHome.addEventListener("click", function () {
    displayHomeSection();
    keepStyleReplyNumber();
    sectionHome.addEventListener("mouseover", function () {
        sectionHome.style.cursor = "text";
        keepStyleReplyNumber();
    });
    linkReply.addEventListener("mouseover", function () {
        linkReply.style.cursor = "pointer";
        linkReply.lastElementChild.style.background = "#fff";
        linkReply.lastElementChild.style.padding = "5px 20px";
        linkReply.lastElementChild.style.borderRadius = "15px";
        linkReply.lastElementChild.style.color = "#007bff";
    });
    linkReply.addEventListener("mouseout", function () {
        linkReply.style.cursor = "pointer";
        linkReply.lastElementChild.style.background = "#dc3545";
        linkReply.lastElementChild.style.padding = "5px 15px";
        linkReply.lastElementChild.style.borderRadius = "15px";
        linkReply.lastElementChild.style.color = "#fff";
    });
    linkSetting.addEventListener("mouseover", function () {
        linkSetting.style.cursor = "pointer";
        keepStyleReplyNumber();
    });
    sessionStorage.setItem("currentPage", "Home");
});

linkReply.addEventListener("click", function () {
    displayReplySection();
    sectionHome.addEventListener("mouseover", function () {
        sectionHome.style.cursor = "pointer";
        keepStyleReplyNumber();
    });
    linkSetting.addEventListener("mouseover", function () {
        linkSetting.style.cursor = "pointer";
        keepStyleReplyNumber();

    });
    linkReply.addEventListener("mouseover", function () {
        linkReply.style.cursor = "text";
        keepStyleReplyNumber();
    });
    linkReply.addEventListener("mouseout", function () {
        linkReply.style.cursor = "text";
        keepStyleReplyNumber();
    });
    sessionStorage.setItem("currentPage", "Reply");
});

linkSetting.addEventListener("mouseover", function () {
    divDisconnect.setAttribute("class", "text-center");
    divDisconnect.style.marginTop = "-10px";
});

divDisconnect.addEventListener("mouseout", function () {
    this.setAttribute("class", "text-center hidden");
});

headerApp.firstElementChild.addEventListener("mouseover", function () {
    divDisconnect.setAttribute("class", "text-center hidden");
});

bodyApp.addEventListener("mouseover", function () {
    divDisconnect.setAttribute("class", "text-center hidden");
});

linkSetting.addEventListener("click", function () {
    displaySettingSection();
    sectionHome.addEventListener("mouseover", function () {
        sectionHome.style.cursor = "pointer";
        keepStyleReplyNumber();
    });
    linkReply.addEventListener("mouseover", function () {
        linkReply.style.cursor = "pointer";
        linkReply.lastElementChild.style.background = "#fff";
        linkReply.lastElementChild.style.padding = "5px 20px";
        linkReply.lastElementChild.style.borderRadius = "15px";
        linkReply.lastElementChild.style.color = "#007bff";
    });
    linkReply.addEventListener("mouseout", function () {
        linkReply.style.cursor = "pointer";
        linkReply.lastElementChild.style.background = "#dc3545";
        linkReply.lastElementChild.style.padding = "5px 15px";
        linkReply.lastElementChild.style.borderRadius = "15px";
        linkReply.lastElementChild.style.color = "#fff";
    });
    linkSetting.addEventListener("mouseover", function () {
        linkSetting.style.cursor = "text";
        keepStyleReplyNumber();
    });
    sessionStorage.setItem("currentPage", "Setting");
});

spanCloseMessage.addEventListener("click", function () {
    divSignupMessage.setAttribute("class", "row w-100 ml-2 hidden");
    history.pushState(null, null, "../travelguide/realapp.php");
});

divTitleApp.addEventListener("click", function () {
    divPostActivity.innerHTML = tempPostActivity.innerHTML;
    divReplySection.setAttribute("class", "container-fluid hidden");
    divNewPost.setAttribute("class", "container-fluid hidden");
    divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    divMainBodyApp.style.minHeight = "450px";
    divPostComment.innerHTML = "";
    sessionStorage.setItem("currentPage", "Home");
});

divIconNewPost.addEventListener("click", function () {
    divNewPost.setAttribute("class", "container-fluid");
    divReplySection.setAttribute("class", "container-fluid hidden");
    divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    divMainBodyApp.style.minHeight = (screen.height - 320) + "px"; //"450px";
    divPostComment.innerHTML = "";
    divPostActivity.innerHTML = "";
    sessionStorage.setItem("currentPage", "New Post");
});

divMenuIconApp.addEventListener("click", function () {
    divPostActivity.innerHTML = tempPostActivity.innerHTML;
    divReplySection.setAttribute("class", "container-fluid hidden");
    divNewPost.setAttribute("class", "container-fluid hidden");
    divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    divMainBodyApp.style.minHeight = (screen.height - 320) + "px"; //"450px";
    divPostComment.innerHTML = "";
    sessionStorage.setItem("currentPage", "Home");
});

function submitForm(myForm) {
    sessionStorage.setItem("currentPage", "updateAccount");
    for(var i = 0; i < inputUpdateUser.length; i++){
        if(inputUpdateUser[i].hasAttribute("disabled")){
            if(i === 4){
                continue;
            }
            inputUpdateUser[i].removeAttribute("disabled");
            inputUpdateUser[i].value = inputUpdateUser[i].getAttribute("placeholder");
        }
        alert(inputUpdateUser[i].type + " : ".i);
    }
    myForm.submit();
}