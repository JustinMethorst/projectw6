<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
</head>
<body>
<h1>Betaal Pagina</h1>
<form action="update" method="post">
    @csrf
    <label>
        <input type="text" name="amount" placeholder="Bedrag">
    </label>
    <input type="submit" value="Betaal">

    @foreach($query as $quer){ {{$quer->datum_afspraak}} {{$quer->klant_id}} }
        @endforeach
</form>
</body>
</html>
