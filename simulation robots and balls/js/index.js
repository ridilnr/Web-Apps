let buttonStartSimulation, buttonStopSimulation, buttonResetSimulation, interval, pointA, pointB, pointC,
	pointD, x1, x2, y1, y2, stx1, stx2, sty1, sty2, dx1, dy1, dx2, dy2, count1, count2, startPointRobot1,
	startPointRobot2, spanCoordinateX1, spanCoordinateX2, spanCoordinateY1, spanCoordinateY2, end1, end2;

const canvas = document.querySelector("#canvasEnvironment");
const ctx = canvas.getContext("2d");
const canvasMov = document.querySelector("#canvasMovement");
const ctxMov = canvasMov.getContext("2d");
//
x1 = x2 = y1 = y2 = stx1 = sty1 = stx2 = sty2 = -10;
count1 = count2 = 0;
end1 = false;
end2 = false;
//
buttonStartSimulation = document.querySelector("#initializeSimulation");
buttonStopSimulation = document.querySelector("#stopSimulation");
buttonResetSimulation = document.querySelector("#resetSimulation");
//
spanCoordinateX1 = document.querySelector("#spanCoordinateX1");
spanCoordinateX2 = document.querySelector("#spanCoordinateX2");
spanCoordinateY1 = document.querySelector("#spanCoordinateY1");
spanCoordinateY2 = document.querySelector("#spanCoordinateY2");
//
window.onload = function () {
	const w = canvas.width;
	const h = canvas.width;
	setWidthAndHeightCanvas(w, h);
	setStartingPoints(w, h);
	dx1 = dx2 = 2;
	dy1 = dy2 = 2;
};
//
buttonStartSimulation.addEventListener("click", () => {
	if(checkIfPageIsReloaded() === true) sessionStorage.removeItem("positionOfRobot");
	if(sessionStorage.getItem("positionOfRobot") === "set") startSimulation();
	else {
		positionOfRobots();
		startSimulation();
		sessionStorage.setItem("positionOfRobot", "set");
	}
});
//
buttonStopSimulation.addEventListener("click", () => {
	if(selectedNumRobot === 1) clearInterval(interval);
	else if(selectedNumRobot === 2) clearInterval(interval);
	else alert("You should start the simulation first !");
});
//
buttonResetSimulation.addEventListener("click", () => { location.reload(true) });
//
function startSimulation() {
	if(selectedNumRobot === 1) interval = setInterval(draw1, speed);
	else if(selectedNumRobot === 2)
		interval = setInterval(() => {
			draw1and2();
			collisionDetection();
			endRobotMapping();
		}, speed);
	else alert("Please select number of robot before starting the simulation!");
}
//
function clearCanvasAndDrawShapes(){
	const w = canvas.width;
	const h = canvas.height;
	ctx.clearRect(0, 0, w, h);
	drawCircle1();
	drawCircle2();
	drawLine1();
	drawLine2();
}
//
function collisionDetection() {
	const w = canvas.width;
	const h = canvas.width;
	if(startPointRobot1 === pointA && startPointRobot2 === pointB){
		if((parseInt(x1.toFixed(0)) === 138 && parseInt(x2.toFixed(0)) === 162) && (y1 === 250 && y2 === 250)){
			for(let i=0; i<w; i++){
				x2 -= numSteps;
				y2 += numSteps;
				clearCanvasAndDrawShapes();
			}
			end1 = true;
		}
	}else if(startPointRobot1 === pointB && startPointRobot2 === pointA){
		if((parseInt(x2.toFixed(0)) === 138 && parseInt(x1.toFixed(0)) === 162) && (y1 === 250 && y2 === 250)){
			for(let i=0; i<w; i++){
				x1 -= numSteps;
				y1 += numSteps;
				clearCanvasAndDrawShapes();
			}
			end2 = true;
		}
	}else if(startPointRobot1 === pointC && startPointRobot2 === pointD){
		if((parseInt(x1.toFixed(0)) === 139 && parseInt(x2.toFixed(0)) === 161) && (y1 === 70 && y2 === 70)){
			for(let i=0; i<w+60; i++){
				x2 -= numSteps;
				y2 -= numSteps;
				clearCanvasAndDrawShapes();
			}
			end1 = true;
		}
	}else if(startPointRobot1 === pointD && startPointRobot2 === pointC){
		if((parseInt(x2.toFixed(0)) === 139 && parseInt(x1.toFixed(0)) === 161) && (y2 === 70 && y1 === 70)){
			for(let i=0; i<w+60; i++){
				x1 -= numSteps;
				y1 -= numSteps;
				clearCanvasAndDrawShapes();
			}
			end2 = true;
		}
	}else if(startPointRobot1 === pointA && startPointRobot2 === pointD){
		if((parseInt(x1.toFixed(0)) === 143 && parseInt(x2.toFixed(0)) === 157) && (y1 === 160 && y2 === 140)){
			for(let i=0; i<(w+30); i++){
				x2 -= numSteps;
				clearCanvasAndDrawShapes();
			}
			end1 = true;
		}
	}else if(startPointRobot1 === pointD && startPointRobot2 === pointA){
		if((parseInt(x2.toFixed(0)) === 143 && parseInt(x1.toFixed(0)) === 157) && (y2 === 160 && y1 === 140)){
			for(let i=0; i<(w+30); i++){
				x1 -= numSteps;
				clearCanvasAndDrawShapes();
			}
			end2 = true;
		}
	}else if(startPointRobot1 === pointC && startPointRobot2 === pointB){
		if((parseInt(x1.toFixed(0)) === 143 && parseInt(x2.toFixed(0)) === 157) && (y1 === 138 && y2 === 162)){
			for(let i=0; i<(w+30); i++){
				x2 -= numSteps;
				clearCanvasAndDrawShapes();
			}
			end1 = true;
		}
	}else if(startPointRobot1 === pointB && startPointRobot2 === pointC){
		if((parseInt(x1.toFixed(0)) === 157 && parseInt(x2.toFixed(0)) === 143) && (y1 === 162 && y2 === 138)){
			for(let i=0; i<(w+30); i++){
				x1 -= numSteps;
				clearCanvasAndDrawShapes();
			}
			end2 = true;
		}
	}
}
//
function endRobotMapping() {
	const w = canvas.width;
	if(startPointRobot1 === pointA && startPointRobot2 === pointB){
		if(x1 > ((w/2)+30)) clearInterval(interval);
		console.log("A & B")
	}else if(startPointRobot1 === pointB && startPointRobot2 === pointA){
		if(x2 >((w/2)+30)) clearInterval(interval);
		console.log("B & A")
	}else if(startPointRobot1 === pointC && startPointRobot2 === pointD){
		if(x1 > ((w/2)+30)) clearInterval(interval);
		console.log("C & D")
	}else if(startPointRobot1 === pointD && startPointRobot2 === pointC){
		if(x2 >((w/2)+30)) clearInterval(interval);
		console.log("D & C")
	}else if(startPointRobot1 === pointA && startPointRobot2 === pointD){
		if(x1 > ((w/2)+30)) clearInterval(interval);
	}else if(startPointRobot1 === pointD && startPointRobot2 === pointA){
		if(x2 >((w/2)+30)) clearInterval(interval);
	}else if(startPointRobot1 === pointC && startPointRobot2 === pointB){
		if(x1 > ((w/2)+30)) clearInterval(interval);
		console.log("C & B")
	}else if(startPointRobot1 === pointB && startPointRobot2 === pointC){
		if(x2 >((w/2)+30)) clearInterval(interval);
		console.log("B & C")
	}
}
//
function draw1() {
	const w = canvas.width;
	clearCanvasAndDrawShapes();
	startPointRobot1 === pointA ? movPointA1(w) :
		startPointRobot1 === pointB ? movPointB1(w) :
			startPointRobot1 === pointC ? movPointC1(w) :
				startPointRobot1 === pointD ? movPointD1(w) : console.clear();
}
//
function draw1and2() {
	const w = canvas.width;
	clearCanvasAndDrawShapes();
//
	if(end2 === false){
		startPointRobot1 === pointA ? movPointA1(w) :
			startPointRobot1 === pointB ? movPointB1(w) :
				startPointRobot1 === pointC ? movPointC1(w) :
					startPointRobot1 === pointD ? movPointD1(w) : console.clear();
	}
//
	if(end1 === false){
		startPointRobot2 === pointA ? movPointA2(w) :
			startPointRobot2 === pointB ? movPointB2(w) :
				startPointRobot2 === pointC ? movPointC2(w) :
					startPointRobot2 === pointD ? movPointD2(w) : console.clear();
	}
}
//
function positionOfRobots() {
	if(selectedNumRobot === 1){
		startPointRobot1 = pickRandomStartingPoint();
		x1 = stx1 = startPointRobot1[0];
		y1 = sty1 = startPointRobot1[1];
	}
	else if(selectedNumRobot === 2){
		startPointRobot1 = pickRandomStartingPoint();
		startPointRobot2 = pickRandomStartingPoint();
		if((startPointRobot1[0] === startPointRobot2[0]) && (startPointRobot2[1] === startPointRobot2[1])){
			if(startPointRobot1 === pointA && startPointRobot2 === pointC){
				const randNum = Math.floor(Math.random() * 2) + 1;
				randNum === 1 ? (startPointRobot2 = pointB) : (startPointRobot2 = pointD);
			}
			else if(startPointRobot1 === pointC && startPointRobot2 === pointA){
				const randNum = Math.floor(Math.random() * 2) + 1;
				randNum === 1 ? (startPointRobot2 = pointD) : (startPointRobot2 = pointB);
			}
			else if(startPointRobot1 === pointB && startPointRobot2 === pointD){
				const randNum = Math.floor(Math.random() * 2) + 1;
				randNum === 1 ? (startPointRobot2 = pointA) : (startPointRobot2 = pointC);
			}
			else if(startPointRobot1 === pointD && startPointRobot2 === pointB){
				const randNum = Math.floor(Math.random() * 2) + 1;
				randNum === 1 ? (startPointRobot2 = pointC) : (startPointRobot2 = pointA);
			}
		}
		x1 = stx1 = startPointRobot1[0];
		y1 = sty1 = startPointRobot1[1];
		x2 = stx2 = startPointRobot2[0];
		y2 = sty2 = startPointRobot2[1];
	}
}
//
function pickRandomStartingPoint() {
	const randNum = Math.floor(Math.random() * 4) + 1;
	switch(randNum){
		case 1: return pointA;
		case 2: return pointB;
		case 3: return pointC;
		case 4: return pointD;
		default: return pointA;
	}
}
//
function setStartingPoints(w, h) {
	pointA = [w/30, h/30];
	pointB = [w-10, h/30];
	pointC = [w/30, h-10];
	pointD = [w-10, h-10];
}
//
function setWidthAndHeightCanvas(w, h) {
	canvas.setAttribute("width", w);
	canvas.setAttribute("height", h);
	canvasMov.setAttribute("width", w);
	canvasMov.setAttribute("height", h);
}
//
function movPointA1(w) {
	if(Math.round(x1) === (w-10))
		clearInterval(interval);
	if(count1 <= 140){
		x1 += numSteps;
		y1 += dy1;
		count1++;
		spanCoordinateX1.innerHTML =  x1.toFixed(0);
		spanCoordinateY1.innerHTML =  y1.toFixed(0);
	}else {
		x1 += numSteps;
		y1 -= dy1;
		if((count1%140) === 0) count1 = 0;
		count1++;
		spanCoordinateX1.innerHTML =  x1.toFixed(0);
		spanCoordinateY1.innerHTML =  y1.toFixed(0);
	}
}
//
//
function movPointB1(w) {
	if(Math.round(x1) === (w/30)){
		clearInterval(interval);
	}
	if(count1 <= 140){
		x1 -= numSteps;
		y1 += dy1;
		count1++;
		spanCoordinateX1.innerHTML =  x1.toFixed(0);
		spanCoordinateY1.innerHTML =  y1.toFixed(0);
	}else {
		x1 -= numSteps;
		y1 -= dy1;
		if((count1%140) === 0) count1 = 0;
		count1++;
		spanCoordinateX1.innerHTML =  x1.toFixed(0);
		spanCoordinateY1.innerHTML =  y1.toFixed(0);
	}
}
//
function movPointC1(w) {
	if(Math.round(x1) === (w-10)){
		clearInterval(interval);
	}
	if(count1 <= 140){
		x1 += numSteps;
		y1 -= dy1;
		count1++;
		spanCoordinateX1.innerHTML =  x1.toFixed(0);
		spanCoordinateY1.innerHTML =  y1.toFixed(0);
	}else {
		x1 += numSteps;
		y1 += dy1;
		if((count1%140) === 0) count1 = 0;
		count1++;
		spanCoordinateX1.innerHTML =  x1.toFixed(0);
		spanCoordinateY1.innerHTML =  y1.toFixed(0);
	}
}
//
function movPointD1(w) {
	if(Math.round(x1) === (w/30)){
		clearInterval(interval);
	}
	if(count1 <= 140){
		x1 -= numSteps;
		y1 -= dy1;
		count1++;
		spanCoordinateX1.innerHTML =  x1.toFixed(0);
		spanCoordinateY1.innerHTML =  y1.toFixed(0);
	}else {
		x1 -= numSteps;
		y1 += dy1;
		if((count1%140) === 0) count1 = 0;
		count1++;
		spanCoordinateX1.innerHTML =  x1.toFixed(0);
		spanCoordinateY1.innerHTML =  y1.toFixed(0);
	}
}
//
function movPointA2(w) {
	if(Math.round(x2) === (w-10))
		clearInterval(interval);
	if(count2 <= 140){
		x2 += numSteps;
		y2 += dy2;
		count2++;
		spanCoordinateX2.innerHTML =  x2.toFixed(0);
		spanCoordinateY2.innerHTML =  y2.toFixed(0);
	}else {
		x2 += numSteps;
		y2 -= dy2;
		if((count2%140) === 0) count2 = 0;
		count2++;
		spanCoordinateX2.innerHTML =  x2.toFixed(0);
		spanCoordinateY2.innerHTML =  y2.toFixed(0);
	}
}
//
function movPointB2(w) {
	if(Math.round(x2) === (w/30))
		clearInterval(interval);
	if(count2 <= 140){
		x2 -= numSteps;
		y2 += dy2;
		count2++;
		spanCoordinateX2.innerHTML =  x2.toFixed(0);
		spanCoordinateY2.innerHTML =  y2.toFixed(0);
	}else {
		x2 -= numSteps;
		y2 -= dy2;
		if((count2%140) === 0) count2 = 0;
		count2++;
		spanCoordinateX2.innerHTML =  x2.toFixed(0);
		spanCoordinateY2.innerHTML =  y2.toFixed(0);
	}
}
//
function movPointC2(w) {
	if(Math.round(x2) === (w-10))
		clearInterval(interval);
	if(count2 <= 140){
		x2 += numSteps;
		y2 -= dy2;
		count2++;
		spanCoordinateX2.innerHTML =  x2.toFixed(0);
		spanCoordinateY2.innerHTML =  y2.toFixed(0);
	}else {
		x2 += numSteps;
		y2 += dy2;
		if((count2%140) === 0) count2 = 0;
		count2++;
		spanCoordinateX2.innerHTML =  x2.toFixed(0);
		spanCoordinateY2.innerHTML =  y2.toFixed(0);
	}
}
//
function movPointD2(w) {
	if(Math.round(x2) === (w/30))
		clearInterval(interval);
	if(count2 <= 140){
		x2 -= numSteps;
		y2 -= dy2;
		count2++;
		spanCoordinateX2.innerHTML =  x2.toFixed(0);
		spanCoordinateY2.innerHTML =  y2.toFixed(0);
	}else {
		x2 -= numSteps;
		y2 += dy2;
		if((count2%140) === 0) count2 = 0;
		count2++;
		spanCoordinateX2.innerHTML =  x2.toFixed(0);
		spanCoordinateY2.innerHTML =  y2.toFixed(0);
	}
}
//
function checkIfPageIsReloaded() {
	//check for Navigation Timing API support
	if (window.performance) {
		// console.info("window.performance works fine on this browser");
		console.clear()
	}
	if (performance.navigation.type === 1) {
		// console.info( "This page is reloaded" );
		return true;
	} else {
		// console.info( "This page is not reloaded");
		return false;
	}
}
