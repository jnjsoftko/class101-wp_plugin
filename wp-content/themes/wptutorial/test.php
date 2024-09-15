<?php

$user_count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->users" );
$user_name = $wpdb->get_var( "SELECT user_id FROM $wpdb->users" );
echo "<p>User count is {$user_count}</p>";
echo "<p>User count is {$user_name}</p>";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Searching Spots</title>

</head>
<p id="demo"></p>

<script>
var object_no_one= <?php echo $user_count; ?>; 
document.getElementById("demo").innerHTML = object_no_one;
</script>

</body>
</html>
