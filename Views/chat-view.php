<?php
    include('header.php');
    if($logged->getUserType()->getId() == 1)
        include('owner-nav-bar.php');
    else
        include('keeper-nav-bar.php');
?>

<?php if(isset($viewMessage)) echo $viewMessage; ?>

<h2> Chat with <?php echo $name; ?></h2>

<div class="chat-box">
    <?php foreach($messageList as $message) {
        if($message->getIdSender() == $logged->getId()) { ?>
            <p class="msg sent"><?php echo $message->getMessage(); ?></p>
        <?php } else { ?>
            <p class="msg rcvd"><?php echo $message->getMessage() ?></p>
    <?php } } ?>
</div>

<form action="<?php echo FRONT_ROOT."ChatMessage/add" ?>" method="post">
    <input type="text" name="newMessage" maxlength="100" required>
    <input type="hidden" name="name" value="<?php echo $name; ?>" maxlength="100">
    <button type="submit" name="chatId" value="<?php echo $chatId; ?>">ENVIAR</button>
</form>
