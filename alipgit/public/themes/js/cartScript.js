displayProductNumber();

var myNewCartArray = [];

function checkShoppingCart() {
    if(sessionStorage.shoppingCart === undefined || sessionStorage.shoppingCart === ""){
        return "true";
    }
    else
        return "false"
}

function getterSession(myValue, keyStorage) {
    var storage = cryptio;
    var options = {
        storage: 'session'
    };
    storage.get(options, keyStorage, function(err, results){
        if (err) throw err;
        console.log(results);
        if(results !== undefined) {
            myValue = JSON.parse(JSON.stringify(results));
        }
    });
    return myValue;
}

function menuEvent(itemMenu, linkItem) {
    for(var j = 0; j < document.querySelector(".categoryMenu").childElementCount ; j++){
        itemMenu[j] = document.querySelector(".categoryMenu").children[j];
    }

    itemMenu[0].firstElementChild.addEventListener('click', function () {
        linkItem = itemMenu[0].firstElementChild.getAttribute("href");
        sessionStorage.shoppingPage = JSON.stringify(linkItem);
        //setterSession(linkItem, "shoppingPage");
    });

    itemMenu[1].firstElementChild.addEventListener('click', function () {
        linkItem = itemMenu[1].firstElementChild.getAttribute("href");
        sessionStorage.shoppingPage = JSON.stringify(linkItem);
        //setterSession(linkItem, "shoppingPage");
    });

    itemMenu[2].firstElementChild.addEventListener('click', function () {
        linkItem = itemMenu[2].firstElementChild.getAttribute("href");
        sessionStorage.shoppingPage = JSON.stringify(linkItem);
        //setterSession(linkItem, "shoppingPage");
    });

    itemMenu[3].firstElementChild.addEventListener('click', function () {
        linkItem = itemMenu[3].firstElementChild.getAttribute("href");
        sessionStorage.shoppingPage = JSON.stringify(linkItem);
        //setterSession(linkItem, "shoppingPage");
    });

    itemMenu[4].firstElementChild.addEventListener('click', function () {
        linkItem = itemMenu[4].firstElementChild.getAttribute("href");
        sessionStorage.shoppingPage = JSON.stringify(linkItem);
        //setterSession(linkItem, "shoppingPage");
    });

    itemMenu[5].firstElementChild.addEventListener('click', function () {
        linkItem = itemMenu[5].firstElementChild.getAttribute("href");
        sessionStorage.shoppingPage = JSON.stringify(linkItem);
        //setterSession(linkItem, "shoppingPage");
    });

    document.querySelector(".idLogo").addEventListener('click', function () {
        linkItem = "../ecommerce";
        sessionStorage.shoppingPage = JSON.stringify(linkItem);
        //setterSession(linkItem, "shoppingPage");
    });

}

function  displayProductNumber() {
    var myCartArray = [];
    if(checkShoppingCart() === "false"){
        myCartArray = getterSession(myNewCartArray, "shoppingCart");
        document.querySelector(".productNum").innerHTML = "" + myCartArray.length;
    }
}