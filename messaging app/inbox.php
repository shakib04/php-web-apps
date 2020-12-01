<?php 
    require_once "database-conn.php";

    //validation

    if (isset($_POST['see-message'])) {
        $receiver = $_POST['receiver'];
        echo  "You are " . $receiver;
        
        $sql = "SELECT * FROM `inbox` WHERE receiver = '$receiver';";
        $result = getMessages($sql);
        echo "<pre>";
        //print_r($result);
        echo "</pre>";
    }

?>

<html>
<head>

</head>
<body>
<a href="send.php">Send</a> <br> <br>

    <table>
        <tr>
            <th>Sender</th>
            <th>Message</th>
        </tr>
        <?php
        while ( $row = mysqli_fetch_assoc($result)) {
            
        ?>  
        <tr>
            <td><?php echo $row['sender']; ?></td>
            <td><?php echo $row['message']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <form action="" method="post">
        <!-- <input type="text" name="sender" id="" placeholder="sender"> <br> -->
        <input type="text" name="receiver" id="" placeholder="Who Are You?"> <br>
        <input type="submit" name="see-message" value="See Messages">
    </form>
</body>
</html>