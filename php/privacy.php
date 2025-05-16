<?php
// Include the database connection file
require 'connfig.php';
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedActions = $_POST['selectedActions'];

    // Process the selected actions
    if ($selectedActions) {
        $selectedActionsArray = explode(',', $selectedActions);

        // Handle each selected action
        foreach ($selectedActionsArray as $action) {
            switch ($action) {
                case 'accessData':
                    // Handle access data action
                    break;
                case 'updateInfo':
                    // Handle update info action
                    break;
                case 'deleteAccount':
                    // Handle delete account action
                    break;
                default:
                    // Invalid action
                    break;
            }
        }
    }

    // exit;
}
?>
