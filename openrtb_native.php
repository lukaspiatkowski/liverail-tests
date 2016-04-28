<?php

$vars = file_get_contents("php://input");
$vars = str_replace("json=", '', $vars);
$vars = json_decode(urldecode($vars), true);

/*
$xml = '<?xml version="1.0" encoding="UTF-8"?>
<VAST version="2.0">
   <Ad id="12345">
      <InLine>
         <AdSystem version="1.0">SpotXchange</AdSystem>
         <AdTitle><![CDATA[Sample VAST]]></AdTitle>
         <Impression>http://sample.com</Impression>
         <Description><![CDATA[A sample VAST feed]]></Description>
         <Creatives>
            <Creative sequence="1" id="1">
               <Linear>
                  <Duration>00:00:30</Duration>
                  <TrackingEvents />
                  <VideoClicks>
                     <ClickThrough><![CDATA[http://sample.com/openrtbtest]]></ClickThrough>
                  </VideoClicks>
                  <MediaFiles>
                     <MediaFile delivery="progressive" bitrate="256" width="640" height="480" type="video/mp4"><![CDATA[http://sample.com/video.mp4]]></MediaFile>
                  </MediaFiles>
               </Linear>
            </Creative>
         </Creatives>
      </InLine>
   </Ad>
</VAST>';

$xml = urlencode($xml);
*/

$native = array(
    'ver' => 1,
    'link' => array(
      'url' => 'deeplink://deeplink/url/into/app',
      'fallback' => 'http: //i.am.a/URL',
      'clicktrackers' => array(
        'http: //a.com/a',
        'http: //b.com/b',
      ),
    ),
    'imptrackers' => array(
      'http: //a.com/a',
      'http: //b.com/b',
    ),
    'assets' => array(
      array(
        'id' => 1,
        'title' => array(
          'text' => 'InstallBOA',
        ),
        'link' => array(
          'url' => 'http: //i.am.a/URL',
        ),
      ),
      array(
        'id' => 2,
        'img' => array(
          'url' => 'http: //cdn.mobad.com/ad.png',
          'w' => 64,
          'h' => 64,
        ),
      ),
      array(
        'id' => 3,
        'img' => array(
          'url' => 'http: //cdn.mobad.com/ad.png',
          'w' => 64,
          'h' => 64,
        ),
      ),
      array(
        'id' => 4,
        'data' => array(
          'value' => 'Install',
        ),
        'link' => array(
          'url' => 'http: //i.am.a/URL',
        ),
      ),
      /*
      array(
        'id' => 6,
        'video' => array(
          'vasttag' => '<VAST version=’2.0’></VAST>',
        ),
      )
      */
    ),
  );

$adm = json_encode($native);

$response = array(
  'id' => $vars['id'],
  'seatbid' => array( //ok
           0 => array(
             'bid' => array( // ok
                0 => array(  // ok
                        "id" => "1",
                        "impid" => "1",
                        "dealid" => "123",
                        "price" => '11',
                //      //"cur" => "RON",
                        "nurl" => "http://adserver.com/winnoticeurl/macro_nurl=${AUCTION_PRICE}",
                        "adm" => $adm,
                //      "crid" => "creative123",
                        'adomain' => array(0 => 'abc.com',),
                ),  // close array 1
              ), // close bid1
            'seat' => "134528",
        ),
  ), // close seatbid
);

echo json_encode($response);
