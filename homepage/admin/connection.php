<?php
 $db = mysqli_connect('localhost', 'root', 'amey_Hajare@#') or
        die ('Unable to connect. Check connection.');
        mysqli_select_db($db, 'placement') or die(mysqli_error($db));
?>