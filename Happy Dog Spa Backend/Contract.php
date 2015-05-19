<?php
session_start();
include 'includes/header.php';

?>

<body>

    <div class="container">
        <?php
            include 'includes/navbar.php';
        ?>
        <div class="jumbotron">
            test
  <!-- you load jquery somewhere above here ... -->
	<!--[if lt IE 9]>
	<script type="text/javascript" src="libs/flashcanvas.js"></script>
	<![endif]-->
	<script src="libs/jSignature.min.js"></script>
	<div id="signature"></div>
	<script>
	    $(document).ready(function() {
	        $("#signature").jSignature()
	    })
            
          

function importImg(sig)
{
	sig.children("img.imported").remove();
	$("<img class='imported'></img").attr("src",sig.jSignature('getData')).appendTo(sig);
}
	
            function importData(sig)
{
	var dataurl=window.prompt("Paste the exported Image data string here to put it back on this canvas","");
	if ($.trim(dataurl)) {
		sig.jSignature('importData',dataurl);
	}
}
            
            
            
            
	</script>
        <button class="btn-info" type="button" onclick="$('#signature').jSignature('clear')">Clear</button>
        <button class="btn-primary" type="button" onclick="$('#signature').jSignature('clear')">Save</button>
        <button type="button" onclick="importImg($('#signature'))">Import Data to Image</button>
        <button type="button" onclick="importData($('#signature'))">Import Data to Canvas</button>
        </div>    
    </div>    
    
</body>