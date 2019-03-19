var linkHome, linkReply, linkSetting, sectionHome, divUserPicture, divTitleApp,
    divMenuIconApp, divPostActivity, tempPostActivity, divReplySection,
    divPostComment, divInformationPlace, tempPostComment, divContainerSlider, divCarouselPlaceImage,
    tempCarouselPlaceImage, divContainerMap, divIconNewPost, divNewPost, AllSpanCloseMessage,
    divEditAccountSection, divMainBodyApp, divNavigationMenu, divDisconnect, divSignupMessage,
    exitMessage, spanStateLogin, spanCloseMessage, headerApp, allHeaderApp, bodyApp, divBtnChangeMap,
    divBoxPlace, arrayPlace, getValueUrl, returnSectionPost, booleanClickPost,
    divNoReplyComment;

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
//getValueFromUrl();

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
        if(/Login/.test(spanStateLogin.innerHTML)){
            location.href = "http://travelguide.univertek.com";
        }
        initialzeState();
    }
    if (performance.navigation.type === 1) {
        if((sessionStorage.getItem("successLogin")!== "") && (sessionStorage.getItem("successLogin")!== null)){
            history.pushState(null, null, "../../realapp.php");
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
            history.pushState(null, null, "../../realapp.php");
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
    divPostActivity.innerHTML = tempPostActivity.innerHTML;
    sectionHome.setAttribute("class", "d-flex item-home align-items-center active");
    sectionHome.addEventListener("mouseover", function () {
        sectionHome.style.cursor = "text";
    });
    divReplySection.setAttribute("class", "container-fluid hidden");
    divIconNewPost.setAttribute("class", "container-fluid");
    divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    divMainBodyApp.style.minHeight = "450px";
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


function processAjaxData(response, urlPath){
    document.getElementById("content").innerHTML = response.html;
    document.title = response.pageTitle;
    window.history.pushState({"html":response.html,"pageTitle":response.pageTitle},"", urlPath);
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
            //alert(newArrayPlace[x] + " = " + idPost);
            break;
        }
    }
    sessionStorage.setItem("currentPostId", idPost);
    /*
    var dataString = 'cmtid=' + idPost;
    $.ajax({
        type: "POST",
        url: "realapp.php",
        data: dataString,
        dataType: 'json',
        cache: false});
    //window.location = "realapp.php?cmtid="+idPost;
    int = setInterval(function (){
        window.location = "realapp.php";
    },5);
    keepPostSession();*/
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
    divMainBodyApp.style.minHeight = "450px";
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
    divMainBodyApp.style.minHeight = "450px";
    divPostComment.innerHTML = "";
}

function displayReplySection() {
    divReplySection.setAttribute("class", "container-fluid");
    divNewPost.setAttribute("class", "container-fluid hidden");
    divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    divMainBodyApp.style.minHeight = "450px";
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
    divMainBodyApp.style.minHeight = "450px";
}

function displayNewPostSection() {
    divNewPost.setAttribute("class", "container-fluid");
    divReplySection.setAttribute("class", "container-fluid hidden");
    divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    divMainBodyApp.style.minHeight = "450px";
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
    history.pushState(null, null, "../../realapp.php");
});

divTitleApp.addEventListener("click", function () {
    divPostActivity.innerHTML = tempPostActivity.innerHTML;
    divReplySection.setAttribute("class", "container-fluid hidden");
    divNewPost.setAttribute("class", "container-fluid hidden");
    divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    divMainBodyApp.style.minHeight = "450px";
    divPostComment.innerHTML = "";
});

divIconNewPost.addEventListener("click", function () {
    divNewPost.setAttribute("class", "container-fluid");
    divReplySection.setAttribute("class", "container-fluid hidden");
    divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    divMainBodyApp.style.minHeight = "450px";
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
    divMainBodyApp.style.minHeight = "450px";
    divPostComment.innerHTML = "";
});