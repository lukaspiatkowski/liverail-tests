<?php


$vars = file_get_contents("php://input");
#print_r($vars);
$vars = str_replace("json=", '', $vars);
$vars = json_decode(urldecode($vars), true);

        $xml = "%3CVAST%20version%3D%222.0%22%3E%0A%3CAd%20id%3D%22preroll-1%22%3E%0A%3CInLine%3E%0A%3CAdSystem%3E2.0%3C%2FAdSystem%3E%0A%3CAdTitle%3E5773100%3C%2FAdTitle%3E%0A%3CCreatives%3E%0A%3CCreative%3E%0A%3CLinear%3E%0A%3CDuration%3E00%3A00%3A01%3C%2FDuration%3E%0A%3CMediaFiles%3E%0A%3CMediaFile%20height%3D%22270%22%20width%3D%22370%22%20type%3D%22application%2Fx-shockwave-flash%22%3E%0A%3C!%5BCDATA%5B%0Ahttp%3A%2F%2Fstatic.scanscout.com%2Fads%2Fvpaidad3.swf%3Fprice%3D%24%7BAUCTION_PRICE%7D%0A%5D%5D%3E%0A%3C%2FMediaFile%3E%0A%3C%2FMediaFiles%3E%0A%3C%2FLinear%3E%0A%3C%2FCreative%3E%0A%3CCreative%3E%0A%3CCompanionAds%3E%0A%3CCompanion%20height%3D%22250%22%20width%3D%22300%22%20id%3D%22573242%22%3E%0A%3CHTMLResource%3E%0A%3C!%5BCDATA%5B%0A%3CA%20onClick%3D%22var%20i%3D%20new%20Image(1%2C1)%3B%20i.src%3D%27http%3A%2F%2Fapp.scanscout.com%2Fssframework%2Flog%2Flog.png%3Fa%3Dlogitemaction%26RI%3D573242%26CbC%3D1%26CbF%3Dtrue%26EC%3D0%26RC%3D0%26SmC%3D2%26CbM%3D1.0E-5%26VI%3D44cfc3b2382300cb751ba129fe51f46a%26admode%3Dpreroll%26PRI%3D7496075541100999745%26RprC%3D5%26ADsn%3D20%26VcaI%3D192%2C197%26RrC%3D1%26VgI%3D44cfc3b2382300cb751ba129fe51f46a%26AVI%3D142%26Ust%3Dma%26Uctry%3Dus%26CI%3D1247549%26AC%3D4%26PI%3D567%26Udma%3D506%26ADI%3D5773100%26VclF%3Dtrue%27%3B%22%20HREF%3D%22http%3A%2F%2Fvaseline.com%22%20target%3D%22_blank%22%3E%20%3CIMG%20SRC%3D%22http%3A%2F%2Fmedia.scanscout.com%2Fads%2Fvaseline300x250Companion.jpg%22%20BORDER%3D0%20WIDTH%3D300%20HEIGHT%3D250%20ALT%3D%22Click%20Here%22%3E%20%3C%2FA%3E%20%3Cimg%20src%3D%22http%3A%2F%2Fapp.scanscout.com%2Fssframework%2Flog%2Flog.png%3Fa%3Dlogitemaction%26RI%3D573242%26CbC%3D1%26CbF%3Dtrue%26EC%3D1%26RC%3D0%26SmC%3D2%26CbM%3D1.0E-5%26VI%3D44cfc3b2382300cb751ba129fe51f46a%26admode%3Dpreroll%26PRI%3D7496075541100999745%26RprC%3D5%26ADsn%3D20%26VcaI%3D192%2C197%26RrC%3D1%26VgI%3D44cfc3b2382300cb751ba129fe51f46a%26AVI%3D142%26Ust%3Dma%26Uctry%3Dus%26CI%3D1247549%26AC%3D4%26PI%3D567%26Udma%3D506%26ADI%3D5773100%26VclF%3Dtrue%22%20height%3D%221%22%20width%3D%221%22%3E%0A%5D%5D%3E%0A%3C%2FHTMLResource%3E%0A%3C%2FCompanion%3E%0A%3C%2FCompanionAds%3E%0A%3C%2FCreative%3E%0A%3C%2FCreatives%3E%0A%3C%2FInLine%3E%0A%3C%2FAd%3E%0A%3C%2FVAST%3E";
        
        
$response = array( //ok
        'id' => "LR123",
        'cur' => "USD",
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
