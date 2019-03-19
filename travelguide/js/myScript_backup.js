var linkHome, linkToSignUp, linkToLogin, LinkReply, linkSetting,
    sectionHome, sectionLogin, sectionSignup, divUserPicture, divTitleApp,
    divMenuIconApp, divPostActivity, tempPostActivity, divReplySection,
    divPostComment, tempPostComment, divContainerSlider, divCarouselPlaceImage,
    tempCarouselPlaceImage, divContainerMap, divIconNewPost, divNewPost,
    divEditAccountSection, divMainBodyApp, divNavigationMenu, divSignupMessage,
    spanCloseMessage, spanStateLogin;

const tempSpanStateLogin = document.querySelector("#spanStateLogin");

linkToSignUp = document.querySelector("#linkSignup");
linkToLogin = document.querySelector("#linkLogin");
sectionLogin = document.querySelector("#loginSection");
sectionSignup = document.querySelector("#signupSection");
linkHome = document.querySelector(".item-home");
linkSetting = document.querySelector(".item-setting");
LinkReply = document.querySelector("#divReplyPlusNumber");
sectionHome = document.querySelector(".item-home");
divUserPicture = document.querySelector("#divUserPicture");
divTitleApp = document.querySelector("#divTitleApp");
divMenuIconApp = document.querySelector("#divMenuIconApp");
divPostActivity = document.querySelector("#divPostActivity");
tempPostActivity = divPostActivity.cloneNode(true);
divReplySection = document.querySelector("#divReplySection");
divPostComment = document.querySelector("#divPostComment");
tempPostComment = divPostComment.cloneNode(true);
divContainerSlider = document.querySelector("#divContainerSlider");
divCarouselPlaceImage = document.querySelector("#carouselPlaceImage");
tempCarouselPlaceImage = divCarouselPlaceImage.cloneNode(true);
divContainerMap = document.querySelector("#containerMap");
divIconNewPost = document.querySelector("#divIconNewPost");
divNewPost = document.querySelector("#divNewPost");
divEditAccountSection = document.querySelector("#editAccountSection");
divMainBodyApp = document.querySelector("#mainBodyApp");
divNavigationMenu = document.querySelector("#navigationMenu");
divSignupMessage = document.querySelector("#signupMessage");
spanCloseMessage = document.querySelector(".closeMessage");
spanStateLogin = document.querySelector("#spanStateLogin");

//window.onload = initialzeState;

homePage();

function homePage() {
    if(spanStateLogin.innerHTML !== tempSpanStateLogin.innerHTML){
        alert(spanStateLogin.innerHTML);
        divPostActivity.innerHTML = tempPostActivity.innerHTML;
        sectionLogin.setAttribute("class", "row mt-1 w-100 hidden");
        sectionSignup.setAttribute("class", "row mt-1 w-100 hidden");
        divReplySection.setAttribute("class", "container-fluid hidden");
        divNewPost.setAttribute("class", "container-fluid hidden");
        divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
        divNavigationMenu.setAttribute("class", "container-fluid mt-0");
        divMainBodyApp.style.minHeight = "450px";
        divPostComment.innerHTML = "";
    }else {
        alert(window.location.href);
        sectionLogin.setAttribute("class", "row mt-1 w-100");
        sectionSignup.setAttribute("class", "row mt-1 w-100 hidden");
        divReplySection.setAttribute("class", "container-fluid hidden");
        divIconNewPost.setAttribute("class", "container-fluid hidden");
        divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
        divNavigationMenu.setAttribute("class", "container-fluid mt-0 hidden");
        divMainBodyApp.style.minHeight = "535px";
        divPostActivity.innerHTML = "";
        divPostComment.innerHTML = "";
    }
}

function switchLoginSignup() {
    divPostComment.innerHTML = "";
    linkToSignUp.addEventListener("click", function () {
        sectionLogin.setAttribute("class", "row mt-1 w-100 hidden");
        sectionSignup.setAttribute("class", "row mt-1 w-100");
        divMainBodyApp.style.minHeight = "450px";
        if(spanStateLogin.innerHTML !== "Login"){
            divMainBodyApp.style.minHeight = "535px";
        }
    });

    linkToLogin.addEventListener("click", function () {
        sectionSignup.setAttribute("class", "row mt-1 w-100 hidden");
        sectionLogin.setAttribute("class", "row mt-1 w-100");
        divReplySection.setAttribute("class", "container-fluid hidden");
        divMainBodyApp.style.minHeight = "450px";
        if(spanStateLogin.innerHTML !== "Login"){
            divMainBodyApp.style.minHeight = "535px";
        }
    });
}

/*function initialzeState() {
    if(spanStateLogin.innerHTML === tempSpanStateLogin.innerHTML){
        sectionLogin.setAttribute("class", "row mt-1 w-100");
        sectionSignup.setAttribute("class", "row mt-1 w-100 hidden");
        divReplySection.setAttribute("class", "container-fluid hidden");
        divIconNewPost.setAttribute("class", "container-fluid hidden");
        divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
        divNavigationMenu.setAttribute("class", "container-fluid mt-0 hidden");
        divMainBodyApp.style.minHeight = "535px";
        divPostActivity.innerHTML = "";
        divPostComment.innerHTML = "";
    }
}*/

function switwhSlideMap(classChild) {
    var actualClass, carouselImage, containerMap, tempCarousel, divUserPlacePicture;
    actualClass = classChild.getAttribute("class");
    carouselImage = document.querySelector("#carouselPlaceImage");
    containerMap = document.querySelector("#containerMap");
    divUserPlacePicture = document.querySelector("#userPlacePicture");
    if(actualClass === "fa fa-map fa-2x"){
        classChild.setAttribute("class", "fa fa-picture-o fa-2x");
        carouselImage.style.display = "none";
        containerMap.setAttribute("class", "container-fluid");
        divUserPlacePicture.setAttribute("class", "p-2 hidden");
    }
    if(actualClass === "fa fa-picture-o fa-2x"){
        classChild.setAttribute("class", "fa fa-map fa-2x");
        carouselImage.style.display = "block";
        divUserPlacePicture.style.display = "block";
        divUserPlacePicture.setAttribute("class", "p-2");
        containerMap.setAttribute("class", "container-fluid hidden");
    }
}

function clickPostSection(idPost) {
    console.log(idPost);
    divPostComment.innerHTML = tempPostComment.innerHTML;
    sectionLogin.setAttribute("class", "row mt-1 w-100 hidden");
    sectionSignup.setAttribute("class", "row mt-1 w-100 hidden");
    divReplySection.setAttribute("class", "container-fluid hidden");
    divIconNewPost.setAttribute("class", "container-fluid");
    divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    divMainBodyApp.style.minHeight = "450px";
    divPostActivity.innerHTML = "";
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
    //alert("the input id is : " + inputElem.getAttribute("class") + " and the span class is : " + iconElem.getAttribute("class"));
}

linkHome.addEventListener("click", function () {
    divPostActivity.innerHTML = tempPostActivity.innerHTML;
    sectionLogin.setAttribute("class", "row mt-1 w-100 hidden");
    sectionSignup.setAttribute("class", "row mt-1 w-100 hidden");
    divReplySection.setAttribute("class", "container-fluid hidden");
    divNewPost.setAttribute("class", "container-fluid hidden");
    divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    divMainBodyApp.style.minHeight = "450px";
    divPostComment.innerHTML = "";
});

linkSetting.addEventListener("click", function () {
    divEditAccountSection.setAttribute("class", "row mt-1 w-75");
    sectionLogin.setAttribute("class", "row mt-1 w-100 hidden");
    sectionSignup.setAttribute("class", "row mt-1 w-100 hidden");
    divReplySection.setAttribute("class", "container-fluid hidden");
    divNewPost.setAttribute("class", "container-fluid hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    divMainBodyApp.style.minHeight = "450px";
    divPostComment.innerHTML = "";
    divPostActivity.innerHTML = "";
});

spanCloseMessage.addEventListener("click", function () {
    divSignupMessage.setAttribute("class", "row w-100 ml-2 hidden");
});

divTitleApp.addEventListener("click", function () {
    divPostActivity.innerHTML = tempPostActivity.innerHTML;
    sectionLogin.setAttribute("class", "row mt-1 w-100 hidden");
    sectionSignup.setAttribute("class", "row mt-1 w-100 hidden");
    divReplySection.setAttribute("class", "container-fluid hidden");
    divNewPost.setAttribute("class", "container-fluid hidden");
    divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    divMainBodyApp.style.minHeight = "450px";
    divPostComment.innerHTML = "";
});

divIconNewPost.addEventListener("click", function () {
    divNewPost.setAttribute("class", "container-fluid");
    sectionLogin.setAttribute("class", "row mt-1 w-100 hidden");
    sectionSignup.setAttribute("class", "row mt-1 w-100 hidden");
    divReplySection.setAttribute("class", "container-fluid hidden");
    divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    divMainBodyApp.style.minHeight = "450px";
    divPostComment.innerHTML = "";
    divPostActivity.innerHTML = "";
});

divMenuIconApp.addEventListener("click", function () {
    divPostActivity.innerHTML = tempPostActivity.innerHTML;
    sectionLogin.setAttribute("class", "row mt-1 w-100 hidden");
    sectionSignup.setAttribute("class", "row mt-1 w-100 hidden");
    divReplySection.setAttribute("class", "container-fluid hidden");
    divNewPost.setAttribute("class", "container-fluid hidden");
    divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    divMainBodyApp.style.minHeight = "450px";
    divPostComment.innerHTML = "";
});

LinkReply.addEventListener("click", function () {
    divReplySection.setAttribute("class", "container-fluid");
    sectionLogin.setAttribute("class", "row mt-1 w-100 hidden");
    sectionSignup.setAttribute("class", "row mt-1 w-100 hidden");
    divNewPost.setAttribute("class", "container-fluid hidden");
    divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    divMainBodyApp.style.minHeight = "450px";
    divPostActivity.innerHTML = "";
    divPostComment.innerHTML = "";
});

divUserPicture.addEventListener("click", function () {
    sectionLogin.setAttribute("class", "row mt-1 w-100");
    sectionSignup.setAttribute("class", "row mt-1 w-100 hidden");
    divReplySection.setAttribute("class", "container-fluid hidden");
    divNewPost.setAttribute("class", "container-fluid hidden");
    divEditAccountSection.setAttribute("class", "row mt-1 w-75 hidden");
    divNavigationMenu.setAttribute("class", "container-fluid mt-0");
    divMainBodyApp.style.minHeight = "450px";
    divPostActivity.innerHTML = "";
    divPostComment.innerHTML = "";
    if(spanStateLogin.innerHTML !== "Login"){
        divMainBodyApp.style.minHeight = "535px";
        divNavigationMenu.setAttribute("class", "container-fluid mt-0 hidden");
    }
});
