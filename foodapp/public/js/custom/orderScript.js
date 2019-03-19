let rowDetails, orderTable, orderTableHeader, orderTableBody, orderTableFooter,
    reasonCancelSelect, divReasonCancelTextArea, reasonCancelTextArea, orderCancellingForm,
    processingOrderForm, completedOrderForm, buttonCancelOrder, errorMessageOrderCancel,
    actionTableCell, sizeDivOrderDetails, boxOrderCustomerDetails;
//

rowDetails = document.querySelectorAll(".rowDetails");
orderTable = document.querySelector("#orderTable");
orderTableHeader = document.querySelector("#orderTableHeader");
orderTableBody = document.querySelector("#orderTableBody");
orderTableFooter = document.querySelector("#orderTableFooter");
reasonCancelSelect = document.querySelector("#reasonCancelSelect");
divReasonCancelTextArea = document.querySelector("#divReasonCancelTextArea");
reasonCancelTextArea = document.querySelector("#reasonCancelTextArea");
orderCancellingForm = document.querySelector("#orderCancellingForm");
processingOrderForm = document.querySelector("#processingOrderForm");
completedOrderForm = document.querySelector("#completedOrderForm");
buttonCancelOrder = document.querySelector("#buttonCancelOrder");
errorMessageOrderCancel = document.querySelector("#errorMessageOrderCancel");
actionTableCell = document.querySelectorAll(".disableClickInside");
rowDetails = document.querySelectorAll(".rowDetails");
//
sizeDivOrderDetails = document.querySelector("#mainContentOrderDetails");
boxOrderCustomerDetails = document.querySelector("#boxOrderCustomerDetails");
//
window.addEventListener("load", function (ev) {
    let buttonPrintOrder = document.querySelector("#buttonPrintOrder");
    let boxInvoiceOrder = document.querySelector("#invoiceOrder");
    let boxInvoiceCaptured = document.querySelector("#invoiceCaptured");
    displaySizeDivOrder();
    buttonPrintOrder.addEventListener("click", function () {
        boxInvoiceOrder.setAttribute("class", "container text-dark border border-danger mt-3 p-3");
        html2canvas(boxInvoiceOrder).then(canvas => {
            canvas.setAttribute("id", "canvasInvoiceCaptured");
            boxInvoiceCaptured.innerHTML = null;
            boxInvoiceCaptured.appendChild(canvas);
        }).then(() => {
            boxInvoiceOrder.setAttribute("class", "container text-dark border border-danger mt-3 p-3 displayNone");
            $('#modalInvoiceOrder').modal('show');
            // printInvoiceOrder(boxInvoiceCaptured);
        })
    });
});
//
if(reasonCancelSelect !== null){
    reasonCancelSelect.addEventListener("change", function (ev) {
        //console.log(reasonCancelTextArea.value);
        if(reasonCancelSelect.options[reasonCancelSelect.selectedIndex].value === "otherReason")
            divReasonCancelTextArea.setAttribute("class", "form-group d-flex flex-column");
        else
            divReasonCancelTextArea.setAttribute("class", "form-group d-flex flex-column displayNone");
    });
}
if(orderCancellingForm !== null){
    orderCancellingForm.addEventListener("submit", function () {
        let reasonSelected = reasonCancelSelect.options[reasonCancelSelect.selectedIndex].value;
        if(reasonSelected === "otherReason" && reasonCancelTextArea.value === ""){
            sessionStorage.setItem("orderCancelForm", "not submitted");
            alert("Please select a reason of order cancelling or type one !");
            //errorMessageOrderCancel.innerHTML = "Please select a reason of order cancelling or type one !";
        }
        else{
            sessionStorage.setItem("orderCancelForm", "submitted");
            //let code = 5478521;
            orderCancellingForm.setAttribute("action", document.location.href + "/cancelOrder");
        }
    });
}
//
//
if(processingOrderForm !== null){
    processingOrderForm.addEventListener("submit", function () {
        processingOrderForm.setAttribute("action", document.location.href + "/processingOrder");
    });
}
//
if(completedOrderForm !== null){
    completedOrderForm.addEventListener("submit", function () {
        completedOrderForm.setAttribute("action", document.location.href + "/completedOrder");
    });
}

function recallOrderCancel() {
    if(sessionStorage.getItem("orderCancelForm") !== null && sessionStorage.getItem("orderCancelForm") === "not submitted")
        $("#modalOrderCancel").modal('show');
}
//
function submitDetailOrderForm (id) {
    document.getElementById(id).submit();
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

function startTime() {
    let today = new Date();
    let h = today.getHours();
    let m = today.getMinutes();
    let s = today.getSeconds();
    // add a zero in front of numbers<10
    m = checkTime(m);
    s = checkTime(s);
    if(document.getElementById('setTime') !== null){
        document.getElementById('setTime').innerHTML = h + ":" + m + ":" + s;
        t = setTimeout(function () {
            startTime()
        }, 500);
    }
}
startTime();

function displaySizeDivOrder(){
    if(sizeDivOrderDetails){
        if(sizeDivOrderDetails.clientWidth < 872){
            boxOrderCustomerDetails.style.flexDirection = "column";
        }else {
            boxOrderCustomerDetails.style.flexDirection = "row";
        }
    }
}

function displayTextArea(selectBox) {
    let reasonSelected, divErrMsg, reasonTextArea;
    reasonSelected = selectBox.options[selectBox.selectedIndex].value;
    reasonTextArea = selectBox.parentElement.parentElement.nextElementSibling;
    divErrMsg = reasonTextArea.nextElementSibling;
    if (reasonSelected === "otherReason")
        reasonTextArea.setAttribute("class", "form-group d-flex flex-column");
    else{
        reasonTextArea.setAttribute("class", "form-group d-flex flex-column displayNone");
        divErrMsg.innerHTML = null;
    }
}

function submitOrderCancelling(form, e, controller){
    let selectBox, reasonSelected, divErrMsg, reasonTextArea;
    selectBox = form.firstElementChild.nextElementSibling.firstElementChild.firstElementChild.lastElementChild.firstElementChild;
    reasonSelected = selectBox.options[selectBox.selectedIndex].value;
    reasonTextArea = form.firstElementChild.nextElementSibling.firstElementChild.children[1].lastElementChild.firstElementChild;
    divErrMsg = reasonTextArea.parentElement.parentElement.nextElementSibling;
    if(reasonSelected === "otherReason" && reasonTextArea.value === ""){
        alert("Please select a reason of order cancelling or type one !");
        divErrMsg.innerHTML = "Please select a reason of order cancelling or type one !";
        e.preventDefault();
    }else{
        form.setAttribute("action", "/en/" + controller + "/cancelOrder");
    }
}

function printInvoiceOrder(elem){
    // let myWindow = window.open('', 'PRINT', 'height=900,width=1200');
    let myWindow = `<!DOCTYPE html><html><head><title>Invoice Order from ${restaurantName}</title></head><body>${elem.innerHTML}</body></html>`;
    let printMyWindow = window.open('', '', 'height=900,width=1200');
    printMyWindow.document.open();
    printMyWindow.document.write(myWindow);
    printMyWindow.document.close(); // necessary for IE >= 10
    printMyWindow.focus(); // necessary for IE >= 10*/
    printMyWindow.print();
    printMyWindow.close();

    return true;
}

window.addEventListener("resize", function (ev) {
    displaySizeDivOrder()
});
