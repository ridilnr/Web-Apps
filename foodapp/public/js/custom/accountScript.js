setTimeout(function () {
    document.querySelector("#displayMessage").innerHTML = null;
}, 9000);

var linkAccountSettings, linkApplicationSettings, bodyAccountSettings, bodyApplicationSettings;

linkAccountSettings = document.querySelector("#linkAccountSettings");
linkApplicationSettings = document.querySelector("#linkApplicationSettings");
bodyAccountSettings = document.querySelector("#bodyAccountSettings");
bodyApplicationSettings = document.querySelector("#bodyApplicationSettings");

linkAccountSettings.addEventListener("click", function () {
    bodyApplicationSettings.setAttribute("class", "card-body displayNone");
    bodyAccountSettings.setAttribute("class", "card-body");
    this.setAttribute("class", "nav-link active");
    linkApplicationSettings.setAttribute("class", "nav-link");
});

linkApplicationSettings.addEventListener("click", function () {
    bodyAccountSettings.setAttribute("class", "card-body displayNone");
    bodyApplicationSettings.setAttribute("class", "card-body");
    this.setAttribute("class", "nav-link active");
    linkAccountSettings.setAttribute("class", "nav-link");
});
