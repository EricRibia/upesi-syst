<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>New message from contact form</h1>
    <h2>Name:{{$contact->name}}</h2>
    <h2>Email:{{$contact->email}}</h2>
    <h2>Phone:{{$contact->phonenumber}}</h2>
    <h2>Message:{{$contact->orgnmessage}}</h2>
</body>
</html>