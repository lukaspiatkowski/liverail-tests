<?php


$vars = file_get_contents("php://input");
#print_r($vars);
$vars = str_replace("json=", '', $vars);
$vars = json_decode(urldecode($vars), true);

        //$xml = "%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%20%3F%3E%3CVAST%20version%3D%222.0%22%20xmlns%3Axsi%3D%22http%3A%2F%2Fwww.w3.org%2F2001%2FXMLSchema-instance%22%20xsi%3AnoNamespaceSchemaLocation%3D%22vast.xsd%22%3E%3CAd%3E%3CInLine%3E%3CAdSystem%20version%3D%222.0%22%3EAd%20Server%3C%2FAdSystem%3E%3CAdTitle%3EIn-Stream%20Video%3C%2FAdTitle%3E%3CDescription%3EA%20test%20creative%20with%20a%20description.%3C%2FDescription%3E%3CImpression%3E%3C!%5BCDATA%5Bhttp%3A%2F%2Fadserver.com%2Fimp%5D%5D%3E%3C%2FImpression%3E%3CCreatives%3E%3CCreative%20sequence%3D%221%22%20AdID%3D%22%22%3E%3CLinear%3E%3CDuration%3E00%3A00%3A58%3C%2FDuration%3E%3CVideoClicks%3E%3CClickThrough%3E%3C!%5BCDATA%5Bhttp%3A%2F%2Fadserver.com%2Fclick%5D%5D%3E%3C%2FClickThrough%3E%3C%2FVideoClicks%3E%3CMediaFiles%3E%3CMediaFile%20id%3D%221%22%20delivery%3D%22progressive%22%20type%3D%22video%2Fx-flv%22%20bitrate%3D%22457%22%20width%3D%22300%22%20height%3D%22225%22%3E%3C!%5BCDATA%5Bhttp%3A%2F%2Fadserver.com%2Fvideo.flv%5D%5D%3E%3C%2FMediaFile%3E%3C%2FMediaFiles%3E%3C%2FLinear%3E%3C%2FCreative%3E%3C%2FCreatives%3E%3C%2FInLine%3E%3C%2FAd%3E%3C%2FVAST%3E%0A";
	  $xml = "%3CVAST%20version%3D%222.0%22%20xmlns%3Axsi%3D%22http%3A%2F%2Fwww.w3.org%2F2001%2FXMLSchema-instance%22%20xsi%3AnoNamespaceSchemaLocation%3D%22vast.xsd%22%3E%3CAd%3E%3CInLine%3E%3CAdSystem%20version%3D%222.0%22%3EAd%20Server%3C%2FAdSystem%3E%3CAdTitle%3EIn-Stream%20Video%3C%2FAdTitle%3E%3CDescription%3EA%20test%20creative%20with%20a%20description.%3C%2FDescription%3E%3CImpression%3E%3C!%5BCDATA%5Bhttp%3A%2F%2Fadserver.com%2Fmacro%3D%24%7BAUCTION_PRICE%7D%5D%5D%3E%3C%2FImpression%3E%3CCreatives%3E%3CCreative%20sequence%3D%221%22%20AdID%3D%22%22%3E%3CLinear%3E%3CDuration%3E00%3A00%3A58%3C%2FDuration%3E%3CVideoClicks%3E%3CClickThrough%3E%3C!%5BCDATA%5Bhttp%3A%2F%2Fadserver.com%2Fclick%5D%5D%3E%3C%2FClickThrough%3E%3C%2FVideoClicks%3E%3CMediaFiles%3E%3CMediaFile%20id%3D%221%22%20delivery%3D%22progressive%22%20type%3D%22video%2Fx-flv%22%20bitrate%3D%22457%22%20width%3D%22300%22%20height%3D%22225%22%3E%3C!%5BCDATA%5Bhttp%3A%2F%2Fadserver.com%2Fvideo.flv%5D%5D%3E%3C%2FMediaFile%3E%3C%2FMediaFiles%3E%3C%2FLinear%3E%3C%2FCreative%3E%3C%2FCreatives%3E%3C%2FInLine%3E%3C%2FAd%3E%3C%2FVAST%3E";

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
