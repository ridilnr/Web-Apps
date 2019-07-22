//
let environmentRobots, canvasEnvironment, linksTag, imgEnvironment, imgBackground, linkTheme, spinnerCommunication,
	divRobot1, divRobot2, divImageRobot1, divImageRobot2, imgCarouselRobot, radioNumberRobot, selectedNumRobot,
	countSelectedRobot, arraySrcImgSelectedRobot, srcImgSelectedRobot1, srcImgSelectedRobot2, selectSteps, numSteps,
	rangeSpeed, speed;
//
environmentRobots = document.querySelector("#environmentRobots");
canvasEnvironment = document.querySelector("#canvasEnvironment");
//
imgEnvironment = document.querySelectorAll(".imgEnvironment");
//
imgBackground = document.querySelectorAll(".imgBackground");
//
linksTag = document.querySelectorAll("link");
//
linkTheme = linksTag[5];
//
arraySrcImgSelectedRobot = [];
//
countSelectedRobot = 0;
//
spinnerCommunication = document.querySelector(".spinner-grow");
//
imgCarouselRobot = document.querySelectorAll(".imgRobot");
//
divRobot1 = document.querySelector("#robot1");
divRobot2 = document.querySelector("#robot2");
divImageRobot1 = document.querySelector("#divImageRobot1");
divImageRobot2 = document.querySelector("#divImageRobot2");
//
radioNumberRobot = document.querySelectorAll("[name=numberOfRobot]");
//
selectSteps = document.querySelector("#selectSteps");
//
rangeSpeed = document.querySelector("#customSpeed");
//
speed = 100 - parseInt(rangeSpeed.value);
//
rangeSpeed.addEventListener("change", () => { speed = 100 - parseInt(rangeSpeed.value); });
//
numSteps = selectSteps.options[selectSteps.selectedIndex].value;
if(numSteps === "Choose...") numSteps = 0.1;
//
selectSteps.addEventListener("change", () => {
	numSteps = selectSteps.options[selectSteps.selectedIndex].value;
	if(numSteps === "Choose...") numSteps = 0.1;
	else numSteps = parseInt(selectSteps.options[selectSteps.selectedIndex].value) * 0.1;
});
//
for(let i=0; i<imgEnvironment.length; i++)
	imgEnvironment[i].addEventListener("click", function () {
		canvasEnvironment.style.background = "url(" + this.getAttribute("src") + ") no-repeat center";
	})
//
for(let i=0; i<imgBackground.length; i++){
	let imageBg, newTheme;
	imageBg = imgBackground[i];
	newTheme = "css/themes/" + imageBg.getAttribute("data-theme") + ".css";
	imgBackground[i].addEventListener("click", () => { linkTheme.setAttribute("href", newTheme); });
}
//

for(let i=0; i<radioNumberRobot.length; i++)
	radioNumberRobot[i].addEventListener("change", () => {
		if(radioNumberRobot[i].checked){
			selectedNumRobot = parseInt(radioNumberRobot[i].value);
			switch(selectedNumRobot){
				case 1:
					divRobot1.setAttribute("class", "d-flex");
					divRobot2.setAttribute("class", "d-none");
					spinnerCommunication.setAttribute("class", "spinner-grow d-none");
					createSpanElement(divImageRobot1, "iconRobot1");
					resetSelectionRobot();
				break;
				case 2:
					divRobot1.setAttribute("class", "d-flex");
					divRobot2.setAttribute("class", "d-flex");
					spinnerCommunication.setAttribute("class", "spinner-grow");
					createSpanElement(divImageRobot1, "iconRobot1");
					createSpanElement(divImageRobot2, "iconRobot2");
					resetSelectionRobot();
				break;
				default:
					resetSelectionRobot();
				break;
			}
		}
	})
//
for(let j=0; j<imgCarouselRobot.length; j++)
	imgCarouselRobot[j].addEventListener("click", ()=>{
		switch(selectedNumRobot){
			case 1:
				if(countSelectedRobot === 0){
					arraySrcImgSelectedRobot.push(imgCarouselRobot[j].src);
					imgCarouselRobot[j].setAttribute("class", "imgRobot img-fluid img-thumbnail active");
					displayImageRobot();
					countSelectedRobot++;
				}else
					resetSelectionRobot();
			break;
			case 2:
				if(countSelectedRobot < 2){
					arraySrcImgSelectedRobot.push(imgCarouselRobot[j].src);
					imgCarouselRobot[j].setAttribute("class", "imgRobot img-fluid img-thumbnail active");
					displayImageRobot();
					countSelectedRobot++;
				}else
					resetSelectionRobot();
			break;
			default:
				alert("Please select number of robot !");
			break;
		}
	})
//
function displayImageRobot() {
	switch(arraySrcImgSelectedRobot.length){
		case 1:
			createImageElement(divImageRobot1, 0);
		break;
		case 2:
			createImageElement(divImageRobot1, 0);
			createImageElement(divImageRobot2, 1);
		break;
		default:
		break;
	}
}
//
function createImageElement(containerImage, idx) {
	let image = document.createElement("img");
	image.src = arraySrcImgSelectedRobot[idx];
	image.className = "img-fluid smallSizeRobot";
	image.id = "selectedRobot" + (idx + 1);
	containerImage.innerHTML = null;
	containerImage.append(image);
}
//
function createSpanElement(containerSpan, classValue) {
	let span, i;
	i = document.createElement("i");
	span = document.createElement("span");
	span.setAttribute("class", classValue);
	i.setAttribute("class", "pt-5 fab fa-android fa-4x");
	span.append(i);
	containerSpan.innerHTML = null;
	containerSpan.append(span);
}
//
function resetSelectionRobot() {
	for(let k=0; k<imgCarouselRobot.length; k++)
		if(imgCarouselRobot[k].getAttribute("class") === "imgRobot img-fluid img-thumbnail active")
			imgCarouselRobot[k].setAttribute("class", "imgRobot img-fluid img-thumbnail");
	if(selectedNumRobot === 1)
		createSpanElement(divImageRobot1, "iconRobot1");
	else{
		createSpanElement(divImageRobot1, "iconRobot1");
		createSpanElement(divImageRobot2, "iconRobot2");
	}
	countSelectedRobot = 0;
	arraySrcImgSelectedRobot = [];
}


