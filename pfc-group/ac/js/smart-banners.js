$(document).ready(function() {
    var myCookie = document.cookie.replace(/(?:(?:^|.*;\s*)noMoreAsking\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    var iOS = DVL.device.os('ios');
    var android = DVL.device.os('android');

    if(myCookie != 'yes') {
        if (android == true) {
            $('.smart-bnr-android').show();
            $('.smart-bnr-wpr').slideDown('300');
        }
        if (iOS == true) {
            $('.smart-bnr-ios').show();
            $('.smart-bnr-wpr').slideDown('300');
        }

        if (android == true || iOS == true) {
            dataLayer.push({
            'event': 'impression',
            'promoLib': {
                  'smartBannerEN': {
                    'id': '00000',
                    'name': 'rbc_homepage_smartbanner_top',
                    'creative': 'https://www.rbcroyalbank.com/_assets-custom/includes/smart-banners/rbc-app-icon.svg',
                    'position': "rbc_homepage_smartbanner_top",
                    'adType': 'other'
                  },
                }
            });
        }
    }

    $('.smart-bnr-close').on('click', function(event) {
        $('.smart-bnr-wpr').slideUp('300');    
    });

    $('.smart-bnr-close, .smart-bnr-btn').on('click', function(event) {
        noMoreAsking();
    });

});
//this creates a cookie so that users isn't always asked
function noMoreAsking() {
    document.cookie="noMoreAsking=yes;expires=Fri, 31 Dec 9999 23:59:59 GMT;";
}