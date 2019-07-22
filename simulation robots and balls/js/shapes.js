//
function drawRectangle1() {
	ctx.beginPath();
	ctx.rect(x1, y1, 20, 20);
	ctx.fillStyle = "#FF0000";
	ctx.fill();
	ctx.closePath();
}
//
function drawRectangle2() {
	ctx.beginPath();
	ctx.rect(x2, y2, 20, 20);
	ctx.fillStyle = "#FF0000";
	ctx.fill();
	ctx.closePath();
}
//
function drawCircle1() {
	ctx.beginPath();
	ctx.arc(x1, y1, 10, 0, 2*Math.PI);
	ctx.fillStyle = "green";
	ctx.fill();
	ctx.closePath();
}
//
function drawCircle2() {
	ctx.beginPath();
	ctx.arc(x2, y2, 10, 0, 2*Math.PI);
	ctx.fillStyle = "red";
	ctx.fill();
	ctx.closePath();
}
//
function drawLine1() {
	ctxMov.beginPath();
	ctxMov.moveTo(stx1, sty1);
	ctxMov.lineTo(x1, y1);
	ctxMov.stroke();
	ctxMov.closePath();
}
//
function drawLine2() {
	ctxMov.beginPath();
	ctxMov.moveTo(stx2, sty2);
	ctxMov.lineTo(x2, y2);
	ctxMov.stroke();
	ctxMov.closePath();
}
//
