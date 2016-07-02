<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Potvrdite Vašu e-mail adresu</h2>

<div>
    <p>Veoma nam je drago što ste postali član naše zajednice.</p>
    <p>Molimo Vas da potvrdite Vašu e-mail adresu klikom na dugme "POTVRDI" ispod.</p> <br>
    <a href="{{ URL::to('register/verify/' . $confirmation_code) }}">POTVRDI</a>

    <style>
        a {
            padding: 10px;
            background-color: limegreen;
            color: white;
            margin: 0 auto;
            text-decoration: none;
            border: 1px solid green;
        }

        a:hover {
            color: yellow;
            text-decoration: none;
            border: 1px solid darkgreen;
        }
    </style>
</div>
</body>
</html>