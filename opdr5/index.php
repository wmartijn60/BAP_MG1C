<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="sendmail.php">
    <label> Afzender:
        <input type="Email" name="From" /></label>
        <br>
    <label>Onderwerp:
        <input type="onderwerp" name="onderwerp" /></label>
    <br>
    <label>Bericht:
        <textarea cols="100" rows="10" name="message" /></textarea></label>
    <br>

    <input type="submit" name = "submit" value="SEND MAIL">
</body>
</html>
