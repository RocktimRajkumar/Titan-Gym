<?php
require '../../include/db_conn.php';
page_protect();

$msgid = $_POST['name'];
if (strlen($msgid) > 0) {
    mysqli_query($con, "DELETE FROM timetable WHERE tid='$msgid'");
    echo "<html><head><script>alert('Routine Deleted');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=editroutine.php'>";
} else {
    echo "<html><head><script>alert('ERROR! Delete Opertaion Unsucessfull');</script></head></html>";
   echo "error".mysqli_error($con);
}

?>