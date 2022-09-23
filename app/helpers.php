<?php 


  function fileUpload($path,$file){
    $name= $file->getClientOriginalName();
      $file->move($path,$name);
      return $path.'/'.$name;
  }
  
  function dateShow($date){
      return date('d/m/Y', strtotime($date));
  }
  function dateSave($date){
      return date('Y-m-d', strtotime($date));
  }
   function currentdate(){
      return date('Y-m-d');
  }
  function currentTime(){
    $date = new DateTime();
      $date->setTimeZone(new DateTimeZone("asia/kolkata"));
      $get_datetime = $date->format('H:i:s');
      return  $get_datetime;
  }
 
  
  function timeShow($time){
      return date('h:i:s a' , strtotime($time));
  }

function smsTriger($message,$mobile){
          $curl_handle=curl_init();
          curl_setopt($curl_handle,CURLOPT_URL,'http://sms.orcainfosolutions.com/api/mt/SendSMS?user=afficity&password=afficity&senderid=AFXCTY&channel=Trans&DCS=0&flashsms=0&number=91'.$mobile.'&text='.$message.'&route=4&PEId=1301164715168126293');
          curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
          curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
          $buffer = curl_exec($curl_handle);
          curl_close($curl_handle);
          if (empty($buffer)){
               return  false;
          }
          else{
              return true;
          }
}

 function timeSave($date){
    return date('H:i:s', strtotime($date));
}




