var linkToSignUp, linkToLogin, sectionLogin, sectionSignup, divUserPicture, divLoginSignupSection,
    divTitleApp, divMenuIconApp, divMainBodyApp, divSignupMessage, spanCloseMessage,
    spanStateLogin;

const tempSpanStateLogin = document.querySelector("#spanStateLogin");

linkToSignUp = document.querySelector("#linkSignup");
linkToLogin = document.querySelector("#linkLogin");
sectionLogin = document.querySelector("#loginSection");
sectionSignup = document.querySelector("#signupSection");
divUserPicture = document.querySelector("#divUserPicture");
divTitleApp = document.querySelector("#divTitleApp");
divMenuIconApp = document.querySelector("#divMenuIconApp");
divMainBodyApp = document.querySelector("#mainBodyApp");
divSignupMessage = document.querySelector("#signupMessage");
divLoginSignupSection = document.querySelector("#loginSignupSection");
spanCloseMessage = document.querySelector(".closeMessage");
spanStateLogin = document.querySelector("#spanStateLogin");

window.onload = function (ev) {
    if(sessionStorage.getItem("allPostId") !== null){
        sessionStorage.removeItem("allPostId");
    }
    if(sessionStorage.getItem("currentPage") !== null){
        sessionStorage.removeItem("currentPage");
    }
    if(sessionStorage.getItem("currentPostId") !== null){
        sessionStorage.removeItem("currentPostId");
    }
};

sessionStorage.setItem("check", "Good");

homePage();

spanCloseMessage.addEventListener("click", function () {
    divSignupMessage.setAttribute("class", "row w-100 ml-2 hidden");
    history.pushState(null, null, "../travelguide/index.php");
    divLoginSignupSection.style.margin = "auto";
});

function homePage() {
    if(spanStateLogin.innerHTML !== tempSpanStateLogin.innerHTML){
        divPostActivity.innerHTML = tempPostActivity.innerHTML;
        sectionLogin.setAttribute("class", "row mt-1 w-100 hidden");
        sectionSignup.setAttribute("class", "row mt-1 w-100 hidden");
        divMainBodyApp.style.minHeight = (screen.height - 230) + "px";
    }else {
        sectionLogin.setAttribute("class", "row mt-1 w-100");
        sectionSignup.setAttribute("class", "row mt-1 w-100 hidden");
        divMainBodyApp.style.minHeight = (screen.height - 230) + "px";//"calc(40vw)";
    }
}

function switchLoginSignup() {
    linkToSignUp.addEventListener("click", function () {
        sectionLogin.setAttribute("class", "row mt-1 w-100 hidden");
        sectionSignup.setAttribute("class", "row mt-1 w-100");
        divMainBodyApp.style.minHeight = (screen.height - 230) + "px";
        if(spanStateLogin.innerHTML !== "Login"){
            divMainBodyApp.style.minHeight = (screen.height - 230) + "px";
    });

    linkToLogin.addEventListener("click", function () {
        sectionSignup.setAttribute("class", "row mt-1 w-100 hidden");
        sectionLogin.setAttribute("class", "row mt-1 w-100");
        divMainBodyApp.style.minHeight = (screen.height - 230) + "px";
        if(spanStateLogin.innerHTML !== "Login"){
            divMainBodyApp.style.minHeight = (screen.height - 230) + "px";
        }
    });
}