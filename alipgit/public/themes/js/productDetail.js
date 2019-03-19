var maxQuantity, unitPrice, priceTeot;
var myProductDetail, myCurrentProduct;
var myCartArray = [], qtyToSend;
var itemMenu = [], linkItem = "", selectedColor, selectedSize, selectColor, selectSize;
maxQuantity = parseFloat(document.querySelector(".productQty").innerHTML);
unitPrice = parseFloat(document.querySelector("#popup").getAttribute("data-price"));
qtyToSend = parseFloat(document.querySelector("#qty").value);
selectColor = document.querySelector("#color");
selectSize = document.querySelector("#size");
selectedSize = selectSize.options[selectSize.selectedIndex].value;
selectedColor = selectColor.options[selectColor.selectedIndex].value;
selectSize.addEventListener("change", function(){
    selectedSize = selectSize.options[selectSize.selectedIndex].value;
});
selectColor.addEventListener("change", function(){
    selectedColor = selectColor.options[selectColor.selectedIndex].value;
});
priceTot = unitPrice;
checkProductToAdd();
function checkProductToAdd() {
    if(sessionStorage.productToAdd === undefined || sessionStorage.productToAdd === "")
        document.querySelector("#mainContentProduct").innerHTML = "<h3>No product selected</h3>";
}

function changePrice(currentObject) {
    if(currentObject.value  <= maxQuantity){
        document.querySelector(".productPrice").innerHTML  = " " + (unitPrice  * currentObject.value).toFixed(2);
    }
    qtyToSend = currentObject.value;
    priceTot = document.querySelector(".productPrice").innerHTML;
}
function addButton(){
    myCurrentProduct = document.querySelector("#popup");
    myProductDetail = {
        pid : myCurrentProduct.getAttribute("data-pid"),
        barcode : myCurrentProduct.getAttribute("data-barcode"),
        productcode : myCurrentProduct.getAttribute("data-productcode"),
        category : myCurrentProduct.getAttribute("data-category"),
        subcat : myCurrentProduct.getAttribute("data-subcat"),
        price : unitPrice,
        priceTotal : priceTot,
        discount : myCurrentProduct.getAttribute("data-discount"),
        style : myCurrentProduct.getAttribute("data-style"),
        brand : myCurrentProduct.getAttribute("data-brand"),
        name : myCurrentProduct.getAttribute("data-name"),
        image : myCurrentProduct.getAttribute("data-image"),
        size : selectedSize,
        colour : selectedColor,
        qty : qtyToSend,
        qtyMax : myCurrentProduct.getAttribute("data-qty")
    };
    if(checkShoppingCart() === "false"){
        myCartArray = getterSession(myNewCartArray, "shoppingCart");
        for(var j=0; j < myCartArray.length; j++){
            if(myProductDetail.pid === myCartArray[j].pid){
                myCartArray.splice(j, 1);
            }
        }
        myCartArray.push(myProductDetail);
        document.querySelector(".productNum").innerHTML = "" + myCartArray.length;
        setterSession(myCartArray, "shoppingCart");
    }
    else {
        myCartArray.push(myProductDetail);
        setterSession(myCartArray, "shoppingCart");
    }
}

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
itemMenu[itemMenu.length].parentNode.previousSibling.addEventListener('click', function () {
    linkItem = "index";
    sessionStorage.shoppingPage = JSON.stringify(linkItem);
    //setterSession(linkItem, "shoppingPage");
});