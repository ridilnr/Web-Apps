var imgArray = [], sizeBgImg = "cover", count = 0;

imgArray = ['img/appbg/bg1.jpg',
            'img/appbg/bg2.jpg',
            'img/appbg/bg3.jpg',
            'img/appbg/bg4.jpg',
            'img/appbg/bg5.jpg'];

//for(var x=0; x < imgArray.length; x++)

document.body.style.background = "url(' " + imgArray[count] + " ') no-repeat center center fixed";
document.body.style.backgroundSize = sizeBgImg;
document.body.style.webkitBackgroundSize = sizeBgImg;
document.body.style.overflow = "hidden";
setInterval(function (args) {
    if(count > 4)
        count = 0;
    changeBackGroundImage(count++);
}, 5000);

function changeBackGroundImage(index){
    document.body.style.background = "url(' " + imgArray[index] + " ') no-repeat center center fixed";
    document.body.style.backgroundSize = sizeBgImg;
    console.log(index);
}