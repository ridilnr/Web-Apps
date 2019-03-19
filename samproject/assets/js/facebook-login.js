$(document).ready(function(){
    //Twitter Connect
    $(".twitter_button_link").click(function(){
        var myWindow = window.open("assets/js/twitter_connect/process.php", "MsgWindow", "width=700,height=400");
    });
    $(".facebook_button_link").click(function(){
        facebookLogin();
    });
});
//Facebook Connect
window.fbAsyncInit = function() {
    FB.init({
        appId      : '1572211986409162',
        status     : true,
        cookie     : true,
        xfbml      : true
    });
};
function facebookLogin() {
    FB.login(function(response) {
            if(response.authResponse){getUserInfo();} else {console.log('Hata');}},
        {scope:'email'});
}
function getUserInfo() {
    FB.api('/me?fields=first_name,last_name,name,email', function(response) {
        $("[name='person_first_name']").val(response.first_name);
        $("[name='person_last_name']").val(response.last_name);
        $("[name='email']").val(response.email);
        console.log('Hata1');
    });
}
(function(d){
    var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement('script'); js.id = id; js.async = true;
    js.src = "//connect.facebook.net/en_US/all.js";
    ref.parentNode.insertBefore(js, ref);
}(document));