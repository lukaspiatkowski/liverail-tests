<?php


$vars = file_get_contents("php://input");
#print_r($vars);
$vars = str_replace("json=", '', $vars);
$vars = json_decode(urldecode($vars), true);

$xml = "%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22utf-8%22%3F%3E%0A%3CVAST%20version%3D%222.0%22%3E%0A%20%20%3CAd%20id%20%3D%20%2212345%22%20%3E%0A%20%20%20%20%3CInLine%3E%0A%20%20%20%20%20%20%3CAdSystem%3EVIDEOHUB11%3C%2FAdSystem%3E%0A%20%20%20%20%20%20%3CAdTitle%3EF3103M2539%3C%2FAdTitle%3E%0A%20%20%20%20%20%20%3CDescription%20%2F%3E%0A%20%20%20%20%20%20%3CImpression%3Ehttp%3A%2F%2Ftracking.dev.liverail.com%2F%3FTHEIR_IMPRESSION%3D1%2F%3Fnew_tags%3D%5BLR_TAGS%5D%3Fnew_ss_test%3D%5Bss_TEST%5D%3C%2FImpression%3E%0A%20%20%20%20%20%20%3CCreatives%3E%0A%20%20%20%20%20%20%20%20%3CCreative%20id%20%3D%20%2221593874%22%3E%0A%20%20%20%20%20%20%20%20%20%20%3CLinear%20%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3CDuration%3E00%3A00%3A09%3C%2FDuration%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3CMediaFiles%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CMediaFile%20delivery%3D%22progressive%22%20bitrate%3D%22256%22%20width%3D%22192%22%20height%3D%22132%22%20type%3D%22video%2Fx-flv%22%3E%3C!%5BCDATA%5Bhttp%3A%2F%2Fcdn.liverail.com%2Fadasset4-dev%2F1372%2F39580%2F113838%2Flo.flv%3Fprice%3D%24%7BAUCTION_PRICE%7D%5D%5D%3E%3C%2FMediaFile%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CMediaFile%20delivery%3D%22progressive%22%20bitrate%3D%22256%22%20width%3D%22192%22%20height%3D%22144%22%20type%3D%22video%2Fx-ms-wmv%22%3E%3C!%5BCDATA%5Bhttp%3A%2F%2Fcdn.liverail.com%2Fadasset4-dev%2F1372%2F39580%2F113838%2Flo.wmv%3Fprice%3D%24%7BAUCTION_PRICE%7D%5D%5D%3E%3C%2FMediaFile%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CMediaFile%20delivery%3D%22progressive%22%20bitrate%3D%22400%22%20width%3D%22320%22%20height%3D%22240%22%20type%3D%22video%2Fmp4%22%3E%3C!%5BCDATA%5Bhttp%3A%2F%2Fcdn.liverail.com%2Fadasset4-dev%2F1372%2F39580%2F113838%2Flo.mp4%3Fprice%3D%24%7BAUCTION_PRICE%7D%5D%5D%3E%3C%2FMediaFile%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CMediaFile%20delivery%3D%22progressive%22%20bitrate%3D%22400%22%20width%3D%22320%22%20height%3D%22240%22%20type%3D%22video%2Fwebm%22%3E%3C!%5BCDATA%5Bhttp%3A%2F%2Fcdn.liverail.com%2Fadasset4-dev%2F1372%2F39580%2F113838%2Flo.webm%3Fprice%3D%24%7BAUCTION_PRICE%7D%5D%5D%3E%3C%2FMediaFile%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CMediaFile%20delivery%3D%22progressive%22%20bitrate%3D%22512%22%20width%3D%22192%22%20height%3D%22132%22%20type%3D%22video%2Fx-flv%22%3E%3C!%5BCDATA%5Bhttp%3A%2F%2Fcdn.liverail.com%2Fadasset4-dev%2F1372%2F39580%2F113838%2Fme.flv%3Fprice%3D%24%7BAUCTION_PRICE%7D%5D%5D%3E%3C%2FMediaFile%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CMediaFile%20delivery%3D%22progressive%22%20bitrate%3D%22512%22%20width%3D%22192%22%20height%3D%22144%22%20type%3D%22video%2Fx-ms-wmv%22%3E%3C!%5BCDATA%5Bhttp%3A%2F%2Fcdn.liverail.com%2Fadasset4-dev%2F1372%2F39580%2F113838%2Fme.wmv%3Fprice%3D%24%7BAUCTION_PRICE%7D%5D%5D%3E%3C%2FMediaFile%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CMediaFile%20delivery%3D%22progressive%22%20bitrate%3D%22600%22%20width%3D%22640%22%20height%3D%22480%22%20type%3D%22video%2Fmp4%22%3E%3C!%5BCDATA%5Bhttp%3A%2F%2Fcdn.liverail.com%2Fadasset4-dev%2F1372%2F39580%2F113838%2Fme.mp4%3Fprice%3D%24%7BAUCTION_PRICE%7D%5D%5D%3E%3C%2FMediaFile%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CMediaFile%20delivery%3D%22progressive%22%20bitrate%3D%22600%22%20width%3D%22640%22%20height%3D%22480%22%20type%3D%22video%2Fwebm%22%3E%3C!%5BCDATA%5Bhttp%3A%2F%2Fcdn.liverail.com%2Fadasset4-dev%2F1372%2F39580%2F113838%2Fme.webm%3Fprice%3D%24%7BAUCTION_PRICE%7D%5D%5D%3E%3C%2FMediaFile%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CMediaFile%20delivery%3D%22progressive%22%20bitrate%3D%221024%22%20width%3D%22192%22%20height%3D%22144%22%20type%3D%22video%2Fmp4%22%3E%3C!%5BCDATA%5Bhttp%3A%2F%2Fcdn.liverail.com%2Fadasset4-dev%2F1372%2F39580%2F113838%2Fhi.mp4%3Fprice%3D%24%7BAUCTION_PRICE%7D%5D%5D%3E%3C%2FMediaFile%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CMediaFile%20delivery%3D%22progressive%22%20bitrate%3D%221024%22%20width%3D%22192%22%20height%3D%22144%22%20type%3D%22video%2Fwebm%22%3E%3C!%5BCDATA%5Bhttp%3A%2F%2Fcdn.liverail.com%2Fadasset4-dev%2F1372%2F39580%2F113838%2Fhi.webm%3Fprice%3D%24%7BAUCTION_PRICE%7D%5D%5D%3E%3C%2FMediaFile%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CMediaFile%20delivery%3D%22progressive%22%20bitrate%3D%221024%22%20width%3D%22192%22%20height%3D%22132%22%20type%3D%22video%2Fx-flv%22%3E%3C!%5BCDATA%5Bhttp%3A%2F%2Fcdn.liverail.com%2Fadasset4-dev%2F1372%2F39580%2F113838%2Fhi.flv%3Fprice%3D%24%7BAUCTION_PRICE%7D%5D%5D%3E%3C%2FMediaFile%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CMediaFile%20delivery%3D%22progressive%22%20bitrate%3D%221024%22%20width%3D%22192%22%20height%3D%22144%22%20type%3D%22video%2Fx-ms-wmv%22%3E%3C!%5BCDATA%5Bhttp%3A%2F%2Fcdn.liverail.com%2Fadasset4-dev%2F1372%2F39580%2F113838%2Fhi.wmv%3Fprice%3D%24%7BAUCTION_PRICE%7D%5D%5D%3E%3C%2FMediaFile%3E%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2FMediaFiles%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3CTrackingEvents%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CTracking%20event%3D%22midpoint%22%3E%3C%2FTracking%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CTracking%20event%3D%22thirdQuartile%22%3Ehttp%3A%2F%2Ftracking.dev.liverail.com%2F%3FTHIRD_QURTILE%3D1%3C%2FTracking%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CTracking%20event%3D%22thirdQuartile%22%3Ehttp%3A%2F%2Fnewquart.com%3C%2FTracking%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CTracking%20event%3D%22complete%22%3Ehttp%3A%2F%2Ftracking.dev.liverail.com%2F%3FCOMPLETE%3D1%3C%2FTracking%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CTracking%20event%3D%22mute%22%3Ehttp%3A%2F%2Ftracking.dev.liverail.com%2F%3FMUTE%3D1%3C%2FTracking%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CTracking%20event%3D%22unmute%22%3Ehttp%3A%2F%2Ftracking.dev.liverail.com%2F%3FUNMUTE%3D1%3C%2FTracking%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CTracking%20event%3D%22pause%22%3Ehttp%3A%2F%2Ftracking.dev.liverail.com%2F%3FPAUSE%3D1%3C%2FTracking%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CTracking%20event%3D%22resume%22%3Ehttp%3A%2F%2Ftracking.dev.liverail.com%2F%3FRESUME%3D1%3C%2FTracking%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CTracking%20event%3D%22fullscreen%22%3Ehttp%3A%2F%2Ftracking.dev.liverail.com%2F%3FFULLSCREEN%3D1%3C%2FTracking%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CTracking%20event%3D%22leaveFullscreen%22%3Ehttp%3A%2F%2Ftracking.dev.liverail.com%2F%3FLEAVEFULLSCREEN%3D1%3C%2FTracking%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CTracking%20event%3D%22close%22%3Ehttp%3A%2F%2Ftracking.dev.liverail.com%2F%3FCLOSE%3D1%3C%2FTracking%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2FTrackingEvents%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3CVideoClicks%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CClickTracking%3E%3C%2FClickTracking%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2FVideoClicks%3E%0A%20%20%20%20%20%20%20%20%20%20%3C%2FLinear%3E%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%09%20%20%20%20%0A%20%20%20%20%20%20%20%20%3C%2FCreative%3E%0A%20%20%20%20%20%20%3C%2FCreatives%3E%0A%20%20%20%20%3CExtensions%3E%20%20%20%20%20%20%0A%20%20%20%20%3CExtension%20type%3D%22LR-Pricing%22%3E%0A%09%20%20%20%20%3CPrice%20model%20%3D%20%22CPM%22%20currency%3D%22usd%22%20%3E2%3C%2FPrice%3E%0A%20%20%20%20%3C%2FExtension%3E%0A%20%20%20%20%0A%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%3CExtension%20type%3D%22DealID%22%3E%0A%20%20%20%20%20%20%20%20%3CDealID%3E448%3C%2FDealID%3E%0A%20%20%20%20%20%20%20%20%3C%2FExtension%3E%0A%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%3CExtension%20type%3D%22BuyerID%22%3E%0A%20%20%20%20%20%20%20%20%20%3CBuyerID%3E56%3C%2FBuyerID%3E%0A%20%20%20%20%20%20%20%20%3C%2FExtension%3E%0A%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%3CExtension%20type%3D%22CustomTrackingEvents%22%3E%0A%20%20%20%20%09%20%20%20%20%3CTrackingEvents%3E%0A%20%20%20%20%09%09%3CTracking%20event%3D%22fillForfeit%22%3Ehttp%3A%2F%2Fa.b.com%2Fd%2Fe%2Ff%20%3C%2FTracking%3E%0A%20%20%20%20%09%20%20%20%20%3C%2FTrackingEvents%3E%0A%20%20%20%20%20%20%20%20%3C%2FExtension%3E%0A%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%3C%2FExtensions%3E%0A%20%20%20%20%3C%2FInLine%3E%0A%20%20%3C%2FAd%3E%0A%3C%2FVAST%3E";
$response = array( //ok
        'id' => "LR123",
        'cur' => "EUR",
        'seatbid' => array( //ok
               0 => array(
                 'bid' => array( // ok
                                0 => array(  // ok
                                        "id" => "1",
                                        "impid" => "1",
                                        "dealid" => "33231",
                                        "price" => '40',
                                        "nurl" => "http://adserver.com/winnoticeurl/macro_nurl=${AUCTION_PRICE}",
                                        "adm" => $xml,
                                //      "crid" => "creative123",
                                        'adomain' => array(0 => 'abc.com',),
                                ),  // close array 1


                             1 =>    array(  // ok
                                        "id" => "1",
                                        "impid" => "1",
                                        "dealid" => "33243",
                                        "price" => '9',
                                        "nurl" => "http://adserver.com/winnoticeurl",
                                        "adm" => $xml,
                                //      "crid" => "creative123",
                                       'adomain' => array(0 => 'abc.com',),
                                ),  // close array 2

                  ), // close bid1
                'seat' => "134528",
            ),// close zero
             1 => array(
                 'bid' => array( // ok
                           0 => array(  // ok
                                        "id" => "1",
                                        "impid" => "1",
                                        "dealid" => "33231",
                                        "price" => '30',
                                        "nurl" => "http://adserver.com/winnoticeurl",
                                        "adm" => $xml,
                                //      "crid" => "creative123",
                                        'adomain' => array(0 => 'abc.com',),
                                ),  // close array

                          1 => array(  // ok
                                        "id" => "1",
                                        "impid" => "1",
                                        "dealid" => "33243",
                                        "price" => '40',
                                        "nurl" => "http://adserver.com/winnoticeurl",
                                        "adm" => $xml,
                                //      "crid" => "creative123",
                                        'adomain' => array(0 => 'abc.com',),
                                ),  // close array

                  ), // close bid1
                'seat' => "134528",
          ),// close unu
      ), // close seatbid

);  // close response array

echo json_encode($response);
