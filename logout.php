<?php
session_start();
unset($_SESSION['uname']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
    <script>
        // JavaScript function to display confirmation prompt
        function confirmLogout() {
            var logout = confirm("Are you sure you want to logout?");
            if (logout) {
                alert("Logged out successfully!");
                window.location = "userlogin.php"; // Redirect to login page
            } else {
                // If user cancels logout, do nothing
            }
        }
        
        // Call the confirmLogout function when the page loads
        window.onload = confirmLogout;
    </script>
</head>
<body>
</body>
</html>
