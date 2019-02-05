<?php


function writeMsg() {
    echo $oXML->Record->PCI->FNAME;
}



$curl = curl_init();
$user = "yourUsername";
$password = "yourPassword";
curl_setopt_array($curl, array(
CURLOPT_URL =>
'https://betawebservices.digitalmeasures.com/login/service/v4/SchemaData/INDIVIDUAL-ACTIVITIES-University/USERNAME:jDoe/PCI',
CURLOPT_USERPWD => $user . ':' . $password,
CURLOPT_ENCODING => 'gzip',
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_RETURNTRANSFER => true));
$responseData = curl_exec($curl);
if(curl_errno($curl))
{
$errorMessage = curl_error($curl);
// TODO: Handle cURL error
}
else
{
$statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
// TODO: Handle HTTP status code and response data
//$movies = new SimpleXMLElement($xmlstr);
$oXML = new SimpleXMLElement( $responseData );
//header( 'Content-type: text/xml' );
//echo $oXML->asXML();
//echo $oXML->FNAME . "<br>";
//echo $oXML->Record->PCI[0]->FNAME;
$PREFIX = $oXML->Record->PCI->PREFIX;
$FNAME = $oXML->Record->PCI->FNAME;
$MNAME = $oXML->Record->PCI->MNAME;
$LNAME = $oXML->Record->PCI->LNAME;
$SUFFIX = $oXML->Record->PCI->SUFFIX;
$ALT_NAME = $oXML->Record->PCI->ALT_NAME;
$ENDPOS = $oXML->Record->PCI->ENDPOS;
$EMAIL = $oXML->Record->PCI->EMAIL;
$BUILDING = $oXML->Record->PCI->BUILDING;
$ROOMNUM = $oXML->Record->PCI->ROOMNUM;
$OPHONE1 = $oXML->Record->PCI->OPHONE1;
$OPHONE2 = $oXML->Record->PCI->OPHONE2;
$OPHONE3 = $oXML->Record->PCI->OPHONE3;
$DPHONE1 = $oXML->Record->PCI->DPHONE1;
$DPHONE2 = $oXML->Record->PCI->DPHONE2;
$DPHONE3 = $oXML->Record->PCI->DPHONE3;
$FAX1 = $oXML->Record->PCI->FAX1;
$FAX2 = $oXML->Record->PCI->FAX2;
$FAX3 = $oXML->Record->PCI->FAX3;
$WEBSITE = $oXML->Record->PCI->PCI_WEBSITE->WEBSITE;
$BIO = $oXML->Record->PCI->BIO;
$TEACHING_INTERESTS = $oXML->Record->PCI->TEACHING_INTERESTS;
$RESEARCH_INTERESTS = $oXML->Record->PCI->RESEARCH_INTERESTS;
$CONSULT_INTEREST = $oXML->Record->PCI->CONSULT_INTEREST;
$UPLOAD_PHOTO = $oXML->Record->PCI->UPLOAD_PHOTO;

echo $PREFIX . "<br>";
echo $FNAME. "<br>";
echo $MNAME. "<br>";
echo $LNAME. "<br>";
echo $SUFFIX. "<br>";
echo $ALT_NAME. "<br>";
echo $ENDPOS. "<br>";
echo $EMAIL. "<br>";
echo $BUILDING. "<br>";
echo $ROOMNUM. "<br>";
echo $OPHONE1. "<br>";
echo $OPHONE2. "<br>";
echo $OPHONE3. "<br>";
echo $DPHONE1. "<br>";
echo $DPHONE2. "<br>";
echo $DPHONE3. "<br>";
echo $FAX1. "<br>";
echo $FAX2. "<br>";
echo $FAX3. "<br>";
echo $WEBSITE. "<br>";
echo $BIO. "<br>";
echo $TEACHING_INTERESTS. "<br>";
echo $RESEARCH_INTERESTS. "<br>";
echo $CONSULT_INTEREST. "<br>";
echo '<img src="https://faculty.website.edu/storage/' .$UPLOAD_PHOTO. '"/>';
      


}
curl_close($curl);

?>
