function prices(getUrl){
    $(document).ready(function () {
        if(document.getElementById("Price").value != "volvo"){
            window.location.href = "Index/set_price?price="+document.getElementById("Price").value;
            var value1 = document.getElementById("Price").value;
            $.ajax({
                type: "GET",
                url:"Index/set_price",
                data:{price:value1}
            });
            //location.href = getUrl;
            location.reload(false);
        }
    });
}
