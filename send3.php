<?
     foreach($_POST  as $key => $value){
          $mess .=str_replace("_"," ",$key).": ".$value."\n";
     }
     
     $to ="online@microconnectors.com";
     
     $subj = "Website Contact From";
     
     mail($to,$subj,$mess);
     
     header("Location: http://www.microconnectors.com/servlet/the-template/thankyou/Page");
?>
