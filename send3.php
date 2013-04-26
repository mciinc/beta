<?
     foreach($_POST  as $key => $value){
          $mess .=str_replace("_"," ",$key).": ".$value."\n";
     }
     
     $to ="online@microconnectors.com";
     
     $subj = "Website Contact From";
     
     mail($to,$subj,$mess);
     
     header("Location: http://store01.prostores.com/servlet/microconnectors/the-template/thankyou/Page");
?>
