<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="add" method="POST">
    @csrf
    <div><label for="name">Name:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="email">email:</label>
        <input type="text" name="email">
    </div>
    <div>
        <label for="message">Message:</label>
        <textarea name="message"></textarea>
    </div>
    <button>Send</button>
    <?php
    foreach ($messages as $message) {
    ?>
    <div><?=$message->name?></div>
    <div><?=$message->email?></div>
    <div><?=$message->message?></div>
    <?php
    }
    ?>
</form>
</body>
</html>
