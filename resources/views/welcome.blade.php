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
Hello world!
<form action="add" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name">
    <label for="email">email:</label>
    <input type="text" name="email">
    <label for="message">Message:</label>
    <textarea name="message"></textarea>
    <button>Send</button>
</form>
</body>
</html>
