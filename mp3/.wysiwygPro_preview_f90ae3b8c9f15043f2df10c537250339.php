<?php
if ($_GET['randomId'] != "8MP8uDsnrB3Wtb5fj3q0Ycmp0_fmFLyk4rmg7cUtEsGb54JgY5jfqpO4oiDzbTTG") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
