<?php 
    require_once "database-conn.php";
    $sendStatus = "";

    //validation

    if (isset($_POST['send'])) {
        $sender = $_POST['sender'];
        $receiver = $_POST['receiver'];
        $message = $_POST['message'];

        $sql = "INSERT INTO `inbox` (`sender`, `receiver`, `message`) VALUES ('$sender', '$receiver', '$message');";
        if (sendMessage($sql)) {
            $sendStatus = "Message Sent";
        }else{
            $sendStatus = "Cannot Send!";
        }

    }

?>

<html>
<head>

</head>
<body>
    <a href="inbox.php">Inbox</a> <br> <br>
    <form action="" method="post">
        <input type="text" name="sender" id="" placeholder="sender"> <br>
        <input type="text" name="receiver" id="" placeholder="receiver"> <br> 
        <textarea name="message" id="" cols="30" rows="10"></textarea> <br>
        
        <input type="submit" name="send" value="Send Message">
    </form>
    <?php echo $sendStatus; ?>
</body>
</html>