<?php
$vars = file_get_contents("php://input");
#print_r($vars);
$vars = str_replace("json=", '', $vars);
$vars = json_decode(urldecode($vars), true);
$xml = "%3C!DOCTYPE%20html%3E%5Cn%3Chtml%3E%5Cn%3Chead%3E%5Cn%20%20%3Ctitle%3EUp_RTB_320x50.png%3C%2Ftitle%3E%5Cn%20%20%3Cmeta%20charset%3D%5C%22UTF-8%5C%22%20%2F%3E%5Cn%20%20%3Cmeta%20HTTP-EQUIV%3D%5C%22expires%5C%22%20CONTENT%3D%5C%220%5C%22%20%2F%3E%5Cn%20%20%3Cmeta%20HTTP-EQUIV%3D%5C%22Pragma%5C%22%20CONTENT%3D%5C%22no-cache%5C%22%20%2F%3E%5Cn%3C%2F".
"head%3E%5Cn%3Cbody%20style%3D%5C%22border%3Anone%3Bmargin%3A0%3Bbackground%3A%23fff%3Bwidth%3A320px%3Bheight%3A50px%3B%5C%22%3E%5Cn%20%20%3Cdiv%20id%3D%5C%22adsatlas-2582794584%5C%22%20style%3D%5C%22position%3Arelative%3Boverflow%3Ahidden%5C%22%3E%5Cn%20%20%20%20%3Ca%20href%3D%5C%22https%3A%2F%2Fad.atdmt.com%2Fc%2Fgo%3Bp%3D11297200769439%3Bas%".
"3D11297200769451%3Ba%3D11297200769448%3Bcrs%3D11297200769441%3Bcr%3D11297200769446%3Bi.ts%3D1429741964%3Bbc%3DAbBe5fgZ0bgjHgrV0Hq7NWCBgwlD4MdRS50o18-XIZkxeVxOdhpA3BGidNEJjnEAG5rSKI8GpQSAL7HckAhqIdsah3jfLOOMJfKqszn-az7T2YGdrc6SeogGzBs7950YLWlxrNI91RXFw4e7-5ZXWcGlehIvBYn7S4BTlaiLOi4bCSMd3K8NFGbj2c3KoLn9vcDU4NfcA3GMgymnMlZsmLIm_cntd8c2nCF4HOlI9".
"JDaoQdb0BwqEZgD5MN8LP60XECpx6zeWpliigXi6WUNqq5KUINoPbtlzpeyldjur7mc2y7e2wsLCWcZGcljrEr4cBANkA_CJjRLsDhASXy-DVgzgYodszcMcwXphme4Tpb-n6M_szF5rvKiF2viBDVvoYlVoBtTAhO0ncetkDAFBKLG6-Nsn2B4KGl-gpxbWQVXpq7SQxPgZOI_Lz4kVnfqEUQxizX0BJMm4fEYPVrorPDc%5C%22%20target%3D%5C%22_blank%5C%22%3E%3Cimg%20border%3D%5C%220%5C%22%20src%3D%5C%22https%3A%2F%2".
"Fcdn.atlassbx.com%2FFB%2F11297200769446%2FUp_RTB_320x50.png%5C%22%2F%3E%3C%2Fa%3E%5Cn%20%20%3C%2Fdiv%3E%5Cn%20%20%5Cn%20%20%5Cn%3C%2Fbody%3E%5Cn%3C%2Fhtml%3E";

$response = array(
        'id' => "LR123",
        'cur' => "USD",
        'seatbid' => array(
                0 => array(
                        'bid' => array(
                                array(
                                        "id" => "1",
                                        "impid" => "1",
                                        "dealid" => "1872",
                                        "price" => '70',
                                //      //"cur" => "RON",
                                        "nurl" => "http://adserver.com/winnoticeurl",
                                        "adm" => $xml,
                                //      "crid" => "creative123"
                                ),
                        ),
                        'bid' => array(
                                array(
                                        "id" => "1",
                                        "impid" => "1",
                                        "dealid" => "1872",
                                        "price" => '20',
                                        "cur" => "EUR",
                                        'nurl' => 'http://adserver.com/winnoticeurl1/aprice=${AUCTION_SEAT_ID}',
                                        "adm" => $xml,
                                //      "crid" => "creative123"
                                ),
                        ),
                 // "seat" => "76309",
                //  "seat" => "42472",
                    "seat" => "134528",
                ),
                ),
        );

//echo urldecode($xml);
echo json_encode($response);
