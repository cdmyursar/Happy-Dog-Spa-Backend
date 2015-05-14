<script>
$(document).ready(function(){
   if($(".BorG").text() == "Bath"){
   $( "#bathCheckBox" ).prop( "checked", true );
   }else if($(".BorG").text() == "Groom"){
   $( "#groomCheckBox" ).prop( "checked", true );
   }else if($(".BorG").text() == "Undefined"){
   $( "#bathCheckBox,#groomCheckBox" ).prop( "checked", false );
   }

 
   
});

   
  
   
</script>