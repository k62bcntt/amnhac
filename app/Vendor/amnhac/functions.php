<?php
function MakePropertyValue($name,$value,$osm)
{
    $oStruct = $osm->Bridge_GetStruct("com.sun.star.beans.PropertyValue");
    $oStruct->Name = $name;
    $oStruct->Value = $value;
    return $oStruct;
}
function convert2pdf($document_url, $output_url)
{
    $osm = new COM("com.sun.star.ServiceManager") or die ("Please be sure that OpenOffice.org is installed.\n");
    $args = array(MakePropertyValue("Hidden",true,$osm));
    $oDesktop = $osm->createInstance("com.sun.star.frame.Desktop");
    $oWriterDoc = $oDesktop->loadComponentFromURL($document_url,"_blank", 0, $args);
    $export_args = array(MakePropertyValue("FilterName","writer_pdf_Export",$osm));
    //print_r($export_args);
    $oWriterDoc->storeToURL($output_url,$export_args);
    $oWriterDoc->close(true);
}
function validate_input($input)
{
    $input = trim($input);
    $input = htmlspecialchars($input);
    $input = stripcslashes($input);
    $input = stripScripts($input);
    return $input;  
}
function stripScripts($str) {
    $regex =
        '/(<link[^>]+rel="[^"]*stylesheet"[^>]*>|' .
        '|style="[^"]*")|' .
        '<script[^>]*>.*?<\/script>|' .
        '<style[^>]*>.*?<\/style>|' .
        '<!--.*?-->/is';
    return preg_replace($regex, '', $str);
}
function check_number($input)
{
    $pattern = '/^[0-9]+$/';
    if (preg_match($pattern, $input))
    {
        return true;
    }
    else
    {
        return false;
    }
}
function create_slug($str)
{
    $str = trim(mb_strtolower($str));
    $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
    $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
    $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
    $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
    $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
    $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
    $str = preg_replace('/(đ)/', 'd', $str);
    $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
    $str = preg_replace('/([\s]+)/', '-', $str);
    return $str;
}
function remove_caret($str)
{
    $str = str_replace('\'', '', $str);
    return $str;
}
function stringSummaryFromMetadata($inArray,$len=80,$sep='. ')
{
    $inputs=array_filter($inArray);
    $res=implode($sep,$inputs);
    if(mb_strlen($res, 'utf8')>$len)
    {
        $x=count($inputs);
        $z=round(($len-$x)/$x);
        $t1=array();
        foreach($inputs as $i) $t1[]=mb_substr($i,0,$z);
        $res=implode($sep,$t1);
    }
    return $res;
}
?>