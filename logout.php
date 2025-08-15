<?php
session_start();
session_unset();
session_destroy();
header("Location: ?section=home");
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: codenew.php");
    exit();
}
// Start the session
session_start();

// Unset all session variables
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session
session_destroy();

// Redirect to home page
header("Location: codenew.php?section=home");
exit();

?>
