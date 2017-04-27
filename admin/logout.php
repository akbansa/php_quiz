<?php
session_start();
session_unset();
session_destroy();
include("index.php");
{?>
<script>
alert ("You are succesfully logout");

</script>
<?php
}
?>