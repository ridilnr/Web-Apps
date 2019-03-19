(function (window) {
    {
        var unknown = '-';

        // screen
        var screenSize = '';
        if (screen.width) {
            width = (screen.width) ? screen.width : '';
            height = (screen.height) ? screen.height : '';
            screenSize += '' + width + " x " + height;
        }

        // browser
        var nVer = navigator.appVersion;
        var nAgt = navigator.userAgent;
        var browser = navigator.appName;
        var version = '' + parseFloat(navigator.appVersion);
        var majorVersion = parseInt(navigator.appVersion, 10);
        var nameOffset, verOffset, ix;

        // Opera
        if ((verOffset = nAgt.indexOf('Opera')) != -1) {
            browser = 'Opera';
            version = nAgt.substring(verOffset + 6);
            if ((verOffset = nAgt.indexOf('Version')) != -1) {
                version = nAgt.substring(verOffset + 8);
            }
        }
        // Opera Next
        if ((verOffset = nAgt.indexOf('OPR')) != -1) {
            browser = 'Opera';
            version = nAgt.substring(verOffset + 4);
        }
        // Edge
        else if ((verOffset = nAgt.indexOf('Edge')) != -1) {
            browser = 'Microsoft Edge';
            version = nAgt.substring(verOffset + 5);
        }
        // MSIE
        else if ((verOffset = nAgt.indexOf('MSIE')) != -1) {
            browser = 'Microsoft Internet Explorer';
            version = nAgt.substring(verOffset + 5);
        }
        // Chrome
        else if ((verOffset = nAgt.indexOf('Chrome')) != -1) {
            browser = 'Chrome';
            version = nAgt.substring(verOffset + 7);
        }
        // Safari
        else if ((verOffset = nAgt.indexOf('Safari')) != -1) {
            browser = 'Safari';
            version = nAgt.substring(verOffset + 7);
            if ((verOffset = nAgt.indexOf('Version')) != -1) {
                version = nAgt.substring(verOffset + 8);
            }
        }
        // Firefox
        else if ((verOffset = nAgt.indexOf('Firefox')) != -1) {
            browser = 'Firefox';
            version = nAgt.substring(verOffset + 8);
        }
        // MSIE 11+
        else if (nAgt.indexOf('Trident/') != -1) {
            browser = 'Microsoft Internet Explorer';
            version = nAgt.substring(nAgt.indexOf('rv:') + 3);
        }
        // Other browsers
        else if ((nameOffset = nAgt.lastIndexOf(' ') + 1) < (verOffset = nAgt.lastIndexOf('/'))) {
            browser = nAgt.substring(nameOffset, verOffset);
            version = nAgt.substring(verOffset + 1);
            if (browser.toLowerCase() == browser.toUpperCase()) {
                browser = navigator.appName;
            }
        }
        // trim the version string
        if ((ix = version.indexOf(';')) != -1) version = version.substring(0, ix);
        if ((ix = version.indexOf(' ')) != -1) version = version.substring(0, ix);
        if ((ix = version.indexOf(')')) != -1) version = version.substring(0, ix);

        majorVersion = parseInt('' + version, 10);
        if (isNaN(majorVersion)) {
            version = '' + parseFloat(navigator.appVersion);
            majorVersion = parseInt(navigator.appVersion, 10);
        }

        // mobile version
        var mobile = /Mobile|mini|Fennec|Android|iP(ad|od|hone)/.test(nVer);

        // cookie
        var cookieEnabled = (navigator.cookieEnabled) ? true : false;

        if (typeof navigator.cookieEnabled == 'undefined' && !cookieEnabled) {
            document.cookie = 'testcookie';
            cookieEnabled = (document.cookie.indexOf('testcookie') != -1) ? true : false;
        }

        // system
        var os = unknown;
        var clientStrings = [
            {s: 'Windows 10', r: /(Windows 10.0|Windows NT 10.0)/},
            {s: 'Windows 8.1', r: /(Windows 8.1|Windows NT 6.3)/},
            {s: 'Windows 8', r: /(Windows 8|Windows NT 6.2)/},
            {s: 'Windows 7', r: /(Windows 7|Windows NT 6.1)/},
            {s: 'Windows Vista', r: /Windows NT 6.0/},
            {s: 'Windows Server 2003', r: /Windows NT 5.2/},
            {s: 'Windows XP', r: /(Windows NT 5.1|Windows XP)/},
            {s: 'Windows 2000', r: /(Windows NT 5.0|Windows 2000)/},
            {s: 'Windows ME', r: /(Win 9x 4.90|Windows ME)/},
            {s: 'Windows 98', r: /(Windows 98|Win98)/},
            {s: 'Windows 95', r: /(Windows 95|Win95|Windows_95)/},
            {s: 'Windows NT 4.0', r: /(Windows NT 4.0|WinNT4.0|WinNT|Windows NT)/},
            {s: 'Windows CE', r: /Windows CE/},
            {s: 'Windows 3.11', r: /Win16/},
            {s: 'Android', r: /Android/},
            {s: 'Open BSD', r: /OpenBSD/},
            {s: 'Sun OS', r: /SunOS/},
            {s: 'Linux', r: /(Linux|X11)/},
            {s: 'iOS', r: /(iPhone|iPad|iPod)/},
            {s: 'Mac OS X', r: /Mac OS X/},
            {s: 'Mac OS', r: /(MacPPC|MacIntel|Mac_PowerPC|Macintosh)/},
            {s: 'QNX', r: /QNX/},
            {s: 'UNIX', r: /UNIX/},
            {s: 'BeOS', r: /BeOS/},
            {s: 'OS/2', r: /OS\/2/},
            {s: 'Search Bot', r: /(nuhk|Googlebot|Yammybot|Openbot|Slurp|MSNBot|Ask Jeeves\/Teoma|ia_archiver)/}
        ];
        for (var id in clientStrings) {
            var cs = clientStrings[id];
            if (cs.r.test(nAgt)) {
                os = cs.s;
                break;
            }
        }

        var osVersion = unknown;

        if (/Windows/.test(os)) {
            osVersion = /Windows (.*)/.exec(os)[1];
            os = 'Windows';
        }

        switch (os) {
            case 'Mac OS X':
                osVersion = /Mac OS X (10[\.\_\d]+)/.exec(nAgt)[1];
                break;

            case 'Android':
                osVersion = /Android ([\.\_\d]+)/.exec(nAgt)[1];
                break;

            case 'iOS':
                osVersion = /OS (\d+)_(\d+)_?(\d+)?/.exec(nVer);
                osVersion = osVersion[1] + '.' + osVersion[2] + '.' + (osVersion[3] | 0);
                break;
        }

        // flash (you'll need to include swfobject)
        /* script src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js" */
        var flashVersion = 'no check';
        if (typeof swfobject != 'undefined') {
            var fv = swfobject.getFlashPlayerVersion();
            if (fv.major > 0) {
                flashVersion = fv.major + '.' + fv.minor + ' r' + fv.release;
            }
            else {
                flashVersion = unknown;
            }
        }
    }

    window.jscd = {
        screen: screenSize,
        browser: browser,
        browserVersion: version,
        browserMajorVersion: majorVersion,
        mobile: mobile,
        os: os,
        osVersion: osVersion,
        cookies: cookieEnabled,
        flashVersion: flashVersion
    };
}(this));


var loc = location.href; loc = loc.split('/');
getlang = loc[3];
$(document).ready(function () {
    if (jscd.os == 'Windows') {
        $('#platform-windows').show();
    } else if (jscd.os == 'iOS') {
        $('#platform-ios').show();
    } else if (jscd.os == 'Android') {
        $('#platform-android').show();
    } else if (jscd.os == 'Mac OS X') {
        $('#platform-mac').show();
    } else {
        $('#platform-web').show();
    }

    function hashkontrol() {
        if (window.location.hash) {
            if (window.location.hash == "#platform-windows") {
                $('.plat').hide();
                $('#platform-windows').show();
                $("html, body").animate({scrollTop: 0}, "slow");
            }
            if (window.location.hash == "#platform-ios") {
                $('.plat').hide();
                $('#platform-ios').show();
                $("html, body").animate({scrollTop: 0}, "slow");
            }
            if (window.location.hash == "#platform-android") {
                $('.plat').hide();
                $('#platform-android').show();
                $("html, body").animate({scrollTop: 0}, "slow");
            }
            if (window.location.hash == "#platform-web") {
                $('.plat').hide();
                $('#platform-web').show();
                $("html, body").animate({scrollTop: 0}, "slow");
            }
            if (window.location.hash == "#platform-mac") {
                $('.plat').hide();
                $('#platform-mac').show();
                $("html, body").animate({scrollTop: 0}, "slow");
            }
        }
    }

    $(window).on('hashchange', function () {
        hashkontrol();
    });
    hashkontrol();
});


function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


$(document).delegate("form.sendmessage", "submit", function () {

    $.ajax({
        type: "POST",
        url: $(this).attr('action'),
        data: $(this).serialize(),
        success: function (sonuc) {
            var json = JSON.parse(sonuc);
            if (!json.success) {
                alert(json.error);
            } else {


                if (json.go != '' && json.go != undefined) {
                    window.location = json.go;
                }

                if (json.message != '' && json.message != undefined) {
                    alert(json.message);
                }

            }
        }
    });
    return false;
});


function ajaxPost(page, param) {
    $.ajax({
        type: "POST", url: page, data: param
    });
}

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.sticky-header').css({'border-bottom': '1px solid rgba(0,0,0,0.1)'});
        } else {
            $('.sticky-header').css({'border-bottom': 'none'});
        }
    });
//Contact Page map
    $(".map_layer").click(function () {
        $(".map_layer").hide();
    });
//Mobile Menu
    $(".mobile_menu_button .fa-bars").click(function () {
        $(".mobile_menu").show();
        $(".container,.steps3,.bg-grey,.cookies_alert").hide();
    });
    $(".close-mobile").click(function () {
        $(".mobile_menu").hide();
        $(".container,.steps3,.bg-grey,.cookies_alert").show();
    });
    $(".menu>ul>li").click(function () {
        $(".menu>ul>li>ul").hide();
        $(".lang_button ul").hide();
        $(this).children(".menu>ul>li>ul").show();
    });
    $(".lang_button").click(function () {
        $(".menu>ul>li>ul").hide();
        $(this).children(".lang_button ul").show();
    });
    $(window).resize(function () {
        if ($(window).width() > 738) {
            $(".mobile_menu").hide();
            $(".container").show();
        }
    });
//Fancybox
    $("a.fnc").fancybox({
        'autoDimensions': false,
        'width': '830',
        'height': 'auto',
        'padding': [50, 20, 50, 20],
        'autoSize': false,
        'autoScale': false
    });
    $("a.fnc2").fancybox({
        'height': '900'
    });
    $(".our-team-slider a.fnc").fancybox({
        'autoDimensions': false,
        'width': '620',
        'height': 'auto',
        'padding': [50, 40, 50, 40],
        'autoSize': false,
        'autoScale': false
    });

    $("#popup_submit").on("click", function(){
        if ($("#agree2").is(":not(:checked)")){
            $('.agree2').css('border-color','#f00');
            return false;
        }
    });
});

function selectDocAcc() {

    $('#file_type').find('option').remove().end();
    $('div.risk').hide();
    $('#document-table').hide();

    $.ajax({
        type: "POST",
        url: '/'+getlang+'/my/selectDoc',
        data: {'id': $('#selectAccount').val()},
        success: function (result) {
            var json = JSON.parse(result);
            $('#file_type').append('<option value=""></option>');
            $.each(json, function (i, item) {
                $('#file_type').append('<option value="' + item.id + '">' + item.file_type + '</option>');
                $('#document-table').show();
                $('div#risk'+item.risk_id).show();
            });

        }
    });

}

function openMetaAccount(pw) {
    if (pw == '') {
        alert('Incorrect Password');
    } else {
        $.ajax({
            type: "POST",
            url: '/'+getlang+'/my/setMeta',
            data: {'pw': pw},
            success: function (result) {
                var json = JSON.parse(result);

                if (json.success == true) {
                    location.reload();
                } else {
                    alert(json.error);
                }
            }
        });
    }
}


$(".onlyinteger").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
            // Allow: Ctrl/cmd+A
        (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            // Allow: Ctrl/cmd+C
        (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
            // Allow: Ctrl/cmd+X
        (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
            // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        // let it happen, don't do anything
        return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});
