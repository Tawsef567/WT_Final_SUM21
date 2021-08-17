<?php
    session_start();
?>
<html>
    <head></head>
    <body>
        <table align="right" border="1">
            <tr>
                <td colspan="5" style="width: 100%;"></td>
                <td align="right" style="width: 10px;"><a href="dealer_dashboard.php">Home</a></td>
                <td align="right" style="width: 10px;"><a href="../login.php">LogOut</a></td>
            </tr>
        </table>
        <fieldset>
        <center> <h1>Welcome! <?php echo $_SESSION['loggeduser']; ?> Have a nice day.</h1></center>
        </fieldset>
        <fieldset>
            <b>DashBoeard:</b>
            <table border="1">
                <tr>
                    <td><a href="change_password.php">Change Password</a></td>
                    <td><a href="manage_purchage.php">Manage Purchage</a></td>
                    <td><a href="manage_account.php">Manage Dealer</a></td>
                </tr>
            </table>
        </fieldset>
    </body>
</html>