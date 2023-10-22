// application/views/user_json.php
<?php
header('Content-Type: application/json');
echo json_encode($user_data);
