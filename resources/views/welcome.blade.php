<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Document</title>
</head>
<br>
<form action="/add" method="POST">
    @csrf
    <div><label for="name" >Name:</label>
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
    <div><button>Submit</button></div>
</form>
<?php
foreach ($messages as $message) {
?>
<div>Name: <?=$message->name?></div>
<div>Email: <?=$message->email?></div>
<div>Message: <?=$message->message?></div>
</br>
<?php
}
?>
</body>
</html>
