<?php
$xmlstring = <<<XML
<?xml version="1.0" encoding="ISO-8859-1"?>
<note>
<to>George</to>
<from>John</from>
<heading>Reminder</heading>
<body time1='2015'>Don't forget the meeting!</body>
</note>
XML;

function xml2obj(){

    $obj_xml = simplexml_load_string($xmlstring);

    var_dump($obj_xml);
}

function xml2array($xml){

    return json_decode(json_encode((array) simplexml_load_string($xml)), true);
}

function array2xml($array,$encoding='utf-8') {
    $xml='<?xml version="1.0" encoding="'.$encoding.'"?>';

    function _array2xml($array){

        $xml_str='';
        foreach($array as $key=>$val){
            if(is_numeric($key)){
                $key="item id=\"$key\"";
            }else{
                //去掉空格，只取空格之前文字为key
                list($key,)=explode(' ',$key);
            }
            $xml_str.="<$key>";
            $xml_str.=is_array($val)?_array2xml($val):htmlspecialchars($val);
            //去掉空格，只取空格之前文字为key
            list($key,)=explode(' ',$key);
            $xml_str.="</$key>";
        }
        return $xml_str;
    }

    $xml.=_array2xml($array);

    return simplexml_load_string($xml)->asXML();
}


?>