//
var linkFoodPage, linkNotificationPage, linkDrinkPage, linkCustomerPage, linkOrderPage, linkAccountPage;
//
if(document.querySelector("#displayMessage") !== null){
    setTimeout(function () {
        document.querySelector("#displayMessage").innerHTML = null;
    }, 9000);
}
//
linkFoodPage = document.querySelector("#linkFoodPage");
linkNotificationPage = document.querySelector("#linkNotificationPage");
linkDrinkPage = document.querySelector("#linkDrinkPage");
linkCustomerPage = document.querySelector("#linkCustomerPage");
linkOrderPage = document.querySelector("#linkOrderPage");
linkAccountPage = document.querySelector("#linkAccountPage");

linkFoodPage.addEventListener("click", function () {
    location.href = "FoodDrink";
});

linkNotificationPage.addEventListener("click", function () {
    location.href = "Notification";
});

linkDrinkPage.addEventListener("click", function () {
    location.href = "FoodDrink";
});

linkCustomerPage.addEventListener("click", function () {
    location.href = "Customer";
});

linkOrderPage.addEventListener("click", function () {
    location.href = "OrderSum";
});

linkAccountPage.addEventListener("click", function () {
    location.href = "Account";
});
