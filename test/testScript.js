var displayMessage = document.querySelector("div").firstElementChild;
if(localStorage.test === "window 1")
    displayMessage.innerHTML = localStorage.test;
else
    displayMessage.innerHTML = "Nothing found in local storage";
