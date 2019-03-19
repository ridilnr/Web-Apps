displayProductNumber();
getProductInfo();

//initiate the plugin and pass the id of the div containing gallery images
$("#popup").elevateZoom({gallery:'uniformThumbnail', scrollZoom: true, cursor: 'pointer', galleryActiveClass: 'active'});

//pass the images to Fancybox
$("#popup").bind("change", function(e) {
    var ez =   $('#popup').data('elevateZoom');
    $.fancybox(ez.getGalleryList());
    return false;
});

$(function () {
    $('#myTab a:first').tab('show');
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    })
});

var myNewCartArray = [];

function getImageLink(currentImg){
    setVariable();
    for(var i = 0; i<9; i++){
        if(myPid[i] === currentImg.id){
            var storage = cryptio,
                clickedImage = {
                    pid : myPid[i],
                    barcode : myBar[i],
                    productcode : myPro[i],
                    category : myCat[i],
                    subcat : mySub[i],
                    price : myPri[i],
                    discount : myDis[i],
                    style : mySty[i],
                    brand : myBra[i],
                    image : myImg[i],
                    qty : myQty[i]
                };

            var options = {
                storage: 'session'
            };

            storage.set(options, 'productToAdd', clickedImage, function(err, results){
                if (err) throw err;
                console.log(results);
            });
            break;
        }
    }
}

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

function setterSession(myValue, keyStorage) {
    var storage = cryptio
        , clickedImage = myValue;

    var options = {
        storage: 'session'
    };

    storage.set(options, keyStorage, clickedImage, function(err, results){
        if (err) throw err;
        console.log(results);
    });
}

function menuEvent(itemMenu, linkItem) {
    for(var j = 0; j < document.querySelector(".categoryMenu").childElementCount ; j++){
        itemMenu[j] = document.querySelector(".categoryMenu").children[j];
    }

    itemMenu[0].firstElementChild.addEventListener('click', function () {
        linkItem = itemMenu[0].firstElementChild.getAttribute("href");
        setterSession(linkItem, "shoppingPage");    });

    itemMenu[1].firstElementChild.addEventListener('click', function () {
        linkItem = itemMenu[1].firstElementChild.getAttribute("href");
        setterSession(linkItem, "shoppingPage");    });

    itemMenu[2].firstElementChild.addEventListener('click', function () {
        linkItem = itemMenu[2].firstElementChild.getAttribute("href");
        setterSession(linkItem, "shoppingPage");    });

    itemMenu[3].firstElementChild.addEventListener('click', function () {
        linkItem = itemMenu[3].firstElementChild.getAttribute("href");
        setterSession(linkItem, "shoppingPage");    });

    itemMenu[4].firstElementChild.addEventListener('click', function () {
        linkItem = itemMenu[4].firstElementChild.getAttribute("href");
        setterSession(linkItem, "shoppingPage");    });

    itemMenu[5].firstElementChild.addEventListener('click', function () {
        linkItem = itemMenu[5].firstElementChild.getAttribute("href");
        setterSession(linkItem, "shoppingPage");    });

    document.querySelector(".idLogo").addEventListener('click', function () {
        linkItem = "../fr";
        setterSession(linkItem, "shoppingPage");    });

}

function  displayProductNumber() {
    var myCartArray = [];
    if(checkShoppingCart() === "false"){
        myCartArray = getterSession(myNewCartArray, "shoppingCart");
        document.querySelector(".productNum").innerHTML = "" + myCartArray.length;
    }
}

function getProductInfo(){
    var viewImage, linkImagePopup, linkImage1, linkImage2, linkImage3, linkImage4,
        thumbnail1, thumbnail2, thumbnail3, thumbnail4, ProductInfo;
    viewImage = document.querySelector("#popup");
    linkImagePopup = document.querySelector("#tochange");
    linkImage1 = document.querySelector("#mod1");
    linkImage2 = document.querySelector("#modal1");
    linkImage3 = document.querySelector("#modal2");
    linkImage4 = document.querySelector("#modal3");
    thumbnail1 = document.querySelector("#submod1");
    thumbnail2 = document.querySelector("#submodal1");
    thumbnail3 = document.querySelector("#submodal2");
    thumbnail4 = document.querySelector("#submodal3");
    var storage = cryptio;
    var options = {
        storage: 'session'
    };
    storage.get(options, 'productToAdd', function(err, results){
        if (err) throw err;
        console.log(results);
        if(results !== undefined) {
            ProductInfo = JSON.parse(JSON.stringify(results));
            linkImagePopup.href = ProductInfo.image;
            viewImage.src = ProductInfo.image;
            linkImage1.href = ProductInfo.image;
            linkImage2.href = ProductInfo.image;
            linkImage3.href = ProductInfo.image;
            linkImage4.href = ProductInfo.image;
            thumbnail1.src = viewImage.src;
            thumbnail1.href = ProductInfo.image;
            thumbnail1.setAttribute("data-image", ProductInfo.image);
            thumbnail1.setAttribute("data-zoom-image", ProductInfo.image);
            thumbnail2.src = ProductInfo.image;
            thumbnail2.href = ProductInfo.image;
            thumbnail2.setAttribute("data-image", ProductInfo.image);
            thumbnail2.setAttribute("data-zoom-image", ProductInfo.image);
            thumbnail3.src = ProductInfo.image;
            thumbnail3.href = ProductInfo.image;
            thumbnail3.setAttribute("data-image", ProductInfo.image);
            thumbnail3.setAttribute("data-zoom-image", ProductInfo.image);
            thumbnail4.src = ProductInfo.image;
            thumbnail4.href = ProductInfo.image;
            thumbnail4.setAttribute("data-image", ProductInfo.image);
            thumbnail4.setAttribute("data-zoom-image", ProductInfo.image);
            document.querySelector(".productCode").innerHTML = ProductInfo.productcode;
            document.querySelector(".productBarcode").innerHTML = ProductInfo.barcode;
            document.querySelector(".productPrice").innerHTML = ProductInfo.price;
            document.querySelector(".productBrand").innerHTML = ProductInfo.brand;
            document.querySelector(".productQty").innerHTML = ProductInfo.qty;
            document.querySelector(".productDiscount").innerHTML = ProductInfo.discount + " %";
            document.querySelector(".productQtyInput").setAttribute("max", ProductInfo.qty);
            viewImage.setAttribute("data-pid", ProductInfo.pid);
            viewImage.setAttribute("data-barcode", ProductInfo.barcode);
            viewImage.setAttribute("data-productcode", ProductInfo.productcode);
            viewImage.setAttribute("data-category", ProductInfo.category);
            viewImage.setAttribute("data-subcat", ProductInfo.subcat);
            viewImage.setAttribute("data-price", ProductInfo.price);
            viewImage.setAttribute("data-discount", ProductInfo.discount);
            viewImage.setAttribute("data-style", ProductInfo.style);
            viewImage.setAttribute("data-brand", ProductInfo.brand);
            viewImage.setAttribute("data-qty", ProductInfo.qty);
            viewImage.setAttribute("data-image", ProductInfo.image);
            viewImage.setAttribute("data-size", ProductInfo.size);
        }
        else{
            document.querySelector("#mainContentProduct").innerHTML = "<h3>No product selected</h3>";
        }
    });
}

function imageChange(){
    var modal1, modal2;
    modal1 = document.getElementById("popup").src;
    modal2 = document.getElementById("tochange").href;
    document.getElementById("tochange").href = modal1;
    document.getElementById("tochange").href = modal2;
    imageSet();
}

function reBuild(){
    document.getElementById("tochange").href = document.getElementById("popup").src;
    document.getElementById("modal1").href = document.getElementById("submodal1").src;
    document.getElementById("modal2").href = document.getElementById("submodal2").src;
    document.getElementById("modal3").href = document.getElementById("submodal3").src;
    imageChange();
}

function imageSet(){
    var imgSrc1 = document.getElementById("submodal1").src;
    var imgSrc2 = document.getElementById("submodal2").src;
    var imgSrc3 = document.getElementById("submodal3").src;
    var imgHref1 = document.getElementById("mod1").href;
    var imgHref2 = imgSrc1;
    var imgHref3 = imgSrc2;
    if(imgSrc1 == document.getElementById("popup").src)
    {
        document.getElementById("modal1").href = imgHref1;
    }
    if(imgSrc2 == document.getElementById("popup").src)
    {
        document.getElementById("modal2").href = imgHref2;
    }
    if(imgSrc3 == document.getElementById("popup").src)
    {
        document.getElementById("modal3").href = imgHref3;
    }
    if(document.getElementById("tochange").href == document.getElementById("modal2").href)
    {
        document.getElementById("modal2").href = document.getElementById("submodal2").src;
        document.getElementById("modal3").href = document.getElementById("submodal3").src;
    }
    if(document.getElementById("tochange").href == document.getElementById("modal3").href)
    {
        document.getElementById("modal3").href = document.getElementById("submodal3").src;
    }
    if(document.getElementById("modal1").href == document.getElementById("modal2").href)
    {
        document.getElementById("modal2").href = document.getElementById("submodal2").src;
    }
    if(document.getElementById("modal2").href == document.getElementById("modal3").href)
    {
        document.getElementById("modal3").href = document.getElementById("submodal3").src;
    }
}