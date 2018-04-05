<?php
session_start();
session_destroy();
echo '<script>

    window.setTimeout(function(){window.location.href = "../index.php"},1);
</script>';
?>