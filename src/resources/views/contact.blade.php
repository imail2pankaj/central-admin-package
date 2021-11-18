<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact US Page</title>
</head>
<body style="text-align: center">
    <h1>Contact US</h1>

    <form method="POST" style="width:500px;margin:0 auto">
        @csrf

        <input type="text" name="name" placeholder="Enter name"> <br>
        <input type="email" name="email" placeholder="Enter email"> <br>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter message"></textarea> <br>

        <button>Sent</button>
    </form>
</body>
</html>