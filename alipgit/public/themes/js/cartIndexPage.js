var bodyOfContent, myCartArray;
var subTotal = 0;
var itemMenu = [], linkItem = "";
//var ecoTax, vat ;
//ecoTax = parseFloat(document.querySelector(".ecoTaxPercentage").innerHTML) / 100;
//vat = parseFloat(document.querySelector(".vatPercentage").innerHTML) / 100;
//totalField = document.querySelector(".totalProduct");
bodyOfContent = document.querySelector("#boardBody");
$(document).ready(function() {
    var myLink;
    $('#btnCheckout').click(function (e) {
        location.href = "Checkout";
    });
    $('#btnContinue').click(function (e) {
        if(sessionStorage.shoppingPage===undefined)
        {
            location.href = "Index";
        }
        else
        {
            location.href = getterSession(myLink, "shoppingPage");
        }
    });
    showShoppingCart();
});

menuEvent(itemMenu, linkItem);

function resultTotPrice() {
    document.querySelector(".subTotalProduct").innerHTML = "" + subTotal.toFixed(2);
    document.querySelector(".totalProduct").innerHTML = document.querySelector(".subTotalProduct").innerHTML;
}

function showShoppingCart() {
    var row, column1, column2, column3, column4, column5, column6, buttonElem,
        imageElem, anchorElem, inputBox, spanField1, spanField2;
    if(checkShoppingCart()==="false"){
        myCartArray = getterSession(myNewCartArray, "shoppingCart");
        for(var i=0; i < myCartArray.length; i++){
            subTotal += + parseFloat(myCartArray[i].priceTotal);
            row = document.createElement("tr"); column1 = document.createElement("td");
            column2 = document.createElement("td"); column3 = document.createElement("td");
            column4 = document.createElement("td"); column5 = document.createElement("td");
            column6 = document.createElement("td"); buttonElem = document.createElement("button");
            imageElem = document.createElement("img"); anchorElem = document.createElement("a");
            inputBox = document.createElement("input"); spanField1 = document.createElement("span");
            spanField2 = document.createElement("span");
            anchorElem.href = "ProductDetail"; row.id = myCartArray[i].pid;
            imageElem.alt = ""; imageElem.src = myCartArray[i].image;
            buttonElem.className = "btn btn-inverse";
            imageElem.setAttribute("data-pid", myCartArray[i].pid);
            imageElem.setAttribute("data-barcode", myCartArray[i].barcode);
            imageElem.setAttribute("data-productcode", myCartArray[i].productcode);
            imageElem.setAttribute("data-category", myCartArray[i].category);
            imageElem.setAttribute("data-subcat", myCartArray[i].subcat);
            imageElem.setAttribute("data-price", myCartArray[i].price);
            imageElem.setAttribute("data-discount", myCartArray[i].discount);
            imageElem.setAttribute("data-style", myCartArray[i].style);
            imageElem.setAttribute("data-brand", myCartArray[i].brand);
            imageElem.setAttribute("data-image", myCartArray[i].image);
            imageElem.setAttribute("data-qty", myCartArray[i].qtyMax);
            imageElem.setAttribute("data-size", myCartArray[i].size);
            imageElem.setAttribute("data-colour", myCartArray[i].colour);
            imageElem.onclick = function () {
                getImageLink(this);
            };
            inputBox.type = "number"; inputBox.value = myCartArray[i].qty;
            inputBox.className = "input-mini"; inputBox.disabled = "disabled";
            buttonElem.onclick = function () {
                removeProduct(this.parentNode.parentNode);
                bodyOfContent.removeChild(this.parentNode.parentNode);
            };
            buttonElem.innerHTML = "Remove";
            column1.appendChild(buttonElem); anchorElem.appendChild(imageElem);
            column2.appendChild(anchorElem); column3.innerHTML = myCartArray[i].brand + " product";
            column4.appendChild(inputBox); column5.innerHTML = "TL ";
            spanField1.innerHTML = myCartArray[i].price;
            column5.appendChild(spanField1); column6.innerHTML = "TL ";
            spanField2.innerHTML = myCartArray[i].priceTotal;
            column6.appendChild(spanField2);
            row.appendChild(column1); row.appendChild(column2); row.appendChild(column3);
            row.appendChild(column4); row.appendChild(column5); row.appendChild(column6);
            bodyOfContent.appendChild(row);
        }
    }
    else {
        bodyOfContent.innerHTML = "<h1>Your shopping bag is empty</h1>";
    }
    resultTotPrice();
}

function removeProduct(deleteCurrent) {
    for(var x=0; x < myCartArray.length; x++){
        if(myCartArray[x].pid === deleteCurrent.id){
            subTotal -= parseFloat(myCartArray[x].priceTotal);
            resultTotPrice();
            myCartArray.splice(x, 1);
            if(myCartArray.length !== 0){
                sessionStorage.shoppingCart = JSON.stringify(myCartArray);
            }
            else {
                sessionStorage.removeItem('shoppingCart');
                bodyOfContent.innerHTML = "<h1>You have emptied your bag !</h1>";
            }
        }
        document.querySelector(".productNum").innerHTML = "" + myCartArray.length;
    }
}