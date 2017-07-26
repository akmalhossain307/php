<script type="text/javascript" src="http://bangladate.appspot.com/index4.php"></script>
<!--http://writebangla.com/BanglaDate.html-->


<?php
function getBanglaDate($date){
//if($GLOBALS['lang'] == "bn"){
 
 
 //else if($GLOBALS['lang'] == "en"){
 //$date = date( 'j F, Y, g:i a',strtotime($publisheddate) ) ;


 $engArray = array(
 1,2,3,4,5,6,7,8,9,0,
 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December',
 'am', 'pm'
 );
 $bangArray = array(
 '১','২','৩','৪','৫','৬','৭','৮','৯','০',
 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর',
 'সকাল', 'দুপুর'
 );
 
 $converted = str_replace($engArray, $bangArray, $date);
 return $converted;
}
//$publisheddate=date("D");
//$date = date( 'j F, Y, a g:i',strtotime($publisheddate) ) ;
//$date=date("j F,Y");
 //$date = getBanglaDate($date);
 //echo$date;
 $date=date("j F,Y");
 echo getBanglaDate($date);
 
?>