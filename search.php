<?php
$curl = curl_init();
$user = "yourUsername";
$password = "yourPassword";
curl_setopt_array($curl, array(
CURLOPT_URL =>
'https://betawebservices.digitalmeasures.com/login/service/v4/SchemaData/INDIVIDUAL-ACTIVITIES-University/USERNAME:jDoe/',
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
header( 'Content-type: text/xml' );
echo $oXML->asXML();

}
curl_close($curl);

?>
