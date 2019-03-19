var socket = io.connect('https://destekmarkets.com:7070');
var lastData = [];
socket.on('connect', function () {
    $('.instruments').show();
});


function starter(type){
    $.getJSON("/api/price/"+type, function( dataz ) {


        var instruments = $('.prices_'+type).empty();

        text = '';
        $.each( dataz, function( key, data ) {

            if (data[0] == 'up') {
                type = 'buy';
            } else if (data[0] == 'down') {
                type = 'sell';
            }

            text += '<div class="instruments_row ' + type + '">' +
                '<div class="instruments_col">' + data[1] + '</div>' +
                '<div class="instruments_col icon"><i class="fa fa-angle-up" aria-hidden="true"></i></div>' +
                '<div class="instruments_col">' + data[2] + '</div>' +
                '<div class="instruments_col buysell sell">Sell</div>' +
                '<div class="instruments_col">' + data[3] + '</div>' +
                '<div class="instruments_col buysell buy">Buy</div>' +

                '<div class="instruments_col icon"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>' +
                '</div>';

            lastData[data[1]] = data[2];

        });


        instruments.html(text);
    });
}

starter('forex');
starter('cfd');
starter('com');



socket.on('forexdata', function (datas) {



    var instruments = $('.prices_forex').empty();

    text = '';
    datas.forEach(function (data) {

        if (data[0] == 'up') {
            type = 'buy';
        } else if (data[0] == 'down') {
            type = 'sell';
        }

        if(data[1] != null){

            if(lastData[data[1]]==data[2])
            {
                text += '<div class="instruments_row ">' +
                    '<div class="instruments_col">' + data[1] + '</div>' +
                    '<div class="instruments_col icon"><i class="fa fa-angle-up" aria-hidden="true"></i></div>' +
                    '<div class="instruments_col">' + data[2] + '</div>' +
                    '<div class="instruments_col buysell sell">Sell</div>' +
                    '<div class="instruments_col">' + data[3] + '</div>' +
                    '<div class="instruments_col buysell buy">Buy</div>' +

                    '<div class="instruments_col icon"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>' +
                    '</div>';

            }
            else
            {
                text += '<div class="instruments_row ' + type + '">' +
                    '<div class="instruments_col">' + data[1] + '</div>' +
                    '<div class="instruments_col icon"><i class="fa fa-angle-up" aria-hidden="true"></i></div>' +
                    '<div class="instruments_col">' + data[2] + '</div>' +
                    '<div class="instruments_col buysell sell">Sell</div>' +
                    '<div class="instruments_col">' + data[3] + '</div>' +
                    '<div class="instruments_col buysell buy">Buy</div>' +

                    '<div class="instruments_col icon"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>' +
                    '</div>';


                lastData[data[1]] = data[2];
            }

        }

    });


    instruments.html(text);


});



socket.on('comdata', function (datas) {
    var instruments = $('.prices_com').empty();

    text = '';
    datas.forEach(function (data) {

        if (data[0] == 'up') {
            type = 'buy';
        } else if (data[0] == 'down') {
            type = 'sell';
        }

        if(data[1] != null){

            if(lastData[data[1]]==data[2])
            {
                text += '<div class="instruments_row ">' +
                    '<div class="instruments_col">' + data[1] + '</div>' +
                    '<div class="instruments_col icon"><i class="fa fa-angle-up" aria-hidden="true"></i></div>' +
                    '<div class="instruments_col">' + data[2] + '</div>' +
                    '<div class="instruments_col buysell sell">Sell</div>' +
                    '<div class="instruments_col">' + data[3] + '</div>' +
                    '<div class="instruments_col buysell buy">Buy</div>' +

                    '<div class="instruments_col icon"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>' +
                    '</div>';

            }
            else
            {
                text += '<div class="instruments_row ' + type + '">' +
                    '<div class="instruments_col">' + data[1] + '</div>' +
                    '<div class="instruments_col icon"><i class="fa fa-angle-up" aria-hidden="true"></i></div>' +
                    '<div class="instruments_col">' + data[2] + '</div>' +
                    '<div class="instruments_col buysell sell">Sell</div>' +
                    '<div class="instruments_col">' + data[3] + '</div>' +
                    '<div class="instruments_col buysell buy">Buy</div>' +

                    '<div class="instruments_col icon"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>' +
                    '</div>';


                lastData[data[1]] = data[2];
            }

        }

    });


    instruments.html(text);


});


socket.on('cfddata', function (datas) {
    var instruments = $('.prices_cfd').empty();

    text = '';
    datas.forEach(function (data) {

        if (data[0] == 'up') {
            type = 'buy';
        } else if (data[0] == 'down') {
            type = 'sell';
        }

        if(data[1] != null){

            if(lastData[data[1]]==data[2])
            {
                text += '<div class="instruments_row ">' +
                    '<div class="instruments_col">' + data[1] + '</div>' +
                    '<div class="instruments_col icon"><i class="fa fa-angle-up" aria-hidden="true"></i></div>' +
                    '<div class="instruments_col">' + data[2] + '</div>' +
                    '<div class="instruments_col buysell sell">Sell</div>' +
                    '<div class="instruments_col">' + data[3] + '</div>' +
                    '<div class="instruments_col buysell buy">Buy</div>' +

                    '<div class="instruments_col icon"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>' +
                    '</div>';

            }
            else
            {
                text += '<div class="instruments_row ' + type + '">' +
                    '<div class="instruments_col">' + data[1] + '</div>' +
                    '<div class="instruments_col icon"><i class="fa fa-angle-up" aria-hidden="true"></i></div>' +
                    '<div class="instruments_col">' + data[2] + '</div>' +
                    '<div class="instruments_col buysell sell">Sell</div>' +
                    '<div class="instruments_col">' + data[3] + '</div>' +
                    '<div class="instruments_col buysell buy">Buy</div>' +

                    '<div class="instruments_col icon"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>' +
                    '</div>';


                lastData[data[1]] = data[2];
            }

        }

    });


    instruments.html(text);


});


