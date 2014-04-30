<?php
if ( $_SERVER['REQUEST_METHOD'] == "POST") {
	sleep(60);
	echo gethostname();
}
else {
    $msg="\n".'<html>';
    $msg.="\n".'<head>';
    $msg.="\n".'<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js"></script>';
    $msg.="\n".'<script>';
    $msg.="\n".'    $(document).ready(function() {';
    $msg.="\n".'        $.ajax({ ';
    $msg.="\n".'          type: "POST",';
    $msg.="\n".'          url: "lbtest.php",';
    $msg.="\n".'          data: { blah: 1 },';
    $msg.="\n".'          dataType: "text",';
    $msg.="\n".'          timeout: 500000, // in milliseconds';
    $msg.="\n".'          success: function(data) {';
    $msg.="\n".'                $(\'#results\').html("Slow request from:   " + data + " completed.");' ;
    $msg.="\n".'          },';
    $msg.="\n".'          error: function(request, status, err) {';
    $msg.="\n".'                console.log(status);';
    $msg.="\n".'          }';
    $msg.="\n".'         })';
    $msg.="\n".'    });';
    $msg.="\n".'</script>';
    $msg.="\n".'</head>';
    $msg.="\n".'<body>';
    $msg.="\n"."Load Balance Test <br/ > Remove " . gethostname() . " from LB" ;
    $msg.="\n".' <div id="results"> Slow request processing... </div>';
    $msg.="\n".'</body>';
    $msg.="\n".'</html>';

    echo $msg;
}
?>
