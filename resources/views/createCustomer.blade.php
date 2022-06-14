<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Customer Registration</title>
</head>
<body>
<h1>New Customer Registration</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="create" method="post">
    @csrf
    <div class="form-group">
        <label for="firstName">Voornaam</label>
        <input type="text" class="form-control" name="klant_voornaam" placeholder="First Name">
    </div>
    <div class="form-group">
        <label for="middleName">Tussenvoegsel</label>
        <input type="text" class="form-control" name="klant_tussenvoegsel" placeholder="Middle Name">
    </div>
    <div class="form-group">
        <label for="lastName">Achternaam</label>
        <input type="text" class="form-control" name="klant_achternaam" placeholder="Last Name">
    </div>
    <div class="form-group">
        <label for="mobileNumber">Mobiel Nummer</label>
        <input type="tel" class="form-control" name="klant_mobiel" placeholder="Mobile Number">
    </div>
    <div class="form-group">
        <label for="straatnaam">Straatnaam</label>
        <input type="text" class="form-control" name="klant_straatnaam" placeholder="Straatnaam">
    </div>
    <div class="form-group">
        <label for="huisnummer">Huisnummer</label>
        <input type="number" class="form-control" name="klant_huisnummer" placeholder="Huisnummer">
    </div>
    <div class="form-group">
        <label for="postcode">Postcode</label>
        <input type="text" class="form-control" name="klant_postcode" placeholder="Postcode">
    </div>
    <div class="form-group">
        <label for="woonplaats">Woonplaats</label>
        <input type="text" class="form-control" name="klant_woonplaats" placeholder="Woonplaats">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" name="klant_email" placeholder="E-mail">
    </div>

    <input type="submit" value="Submit">

</form>
</body>
</html>
