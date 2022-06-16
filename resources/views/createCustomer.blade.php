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
<form action="/customer/create" method="post">
    @csrf
    <div class="form-group">
        <label for="firstName">
            Voornaam
            <input type="text" class="form-control" name="klant_voornaam" placeholder="First Name">
        </label>
    </div>
    <div class="form-group">
        <label for="middleName">
            Tussenvoegsel
            <input type="text" class="form-control" name="klant_tussenvoegsel" placeholder="Middle Name">
        </label>
    </div>
    <div class="form-group">
        <label for="lastName">
            Achternaam
            <input type="text" class="form-control" name="klant_achternaam" placeholder="Last Name">
        </label>
    </div>
    <div class="form-group">
        <label for="mobileNumber">
            Mobiel Nummer
            <input type="tel" class="form-control" name="klant_mobiel" placeholder="Mobile Number">
        </label>
    </div>
    <div class="form-group">
        <label for="straatnaam">
            Straatnaam
            <input type="text" class="form-control" name="klant_straatnaam" placeholder="Straatnaam">
        </label>
    </div>
    <div class="form-group">
        <label for="huisnummer">
            Huisnummer
            <input type="number" class="form-control" name="klant_huisnummer" placeholder="Huisnummer">
        </label>
    </div>
    <div class="form-group">
        <label for="postcode">
            Postcode
            <input type="text" class="form-control" name="klant_postcode" placeholder="Postcode">
        </label>
    </div>
    <div class="form-group">
        <label for="woonplaats">
            Woonplaats
            <input type="text" class="form-control" name="klant_woonplaats" placeholder="Woonplaats">
        </label>
    </div>
    <div class="form-group">
        <label for="email">
            E-mail
            <input type="email" class="form-control" name="klant_email" placeholder="E-mail">
        </label>
    </div>

    <input type="submit" value="Submit">

</form>
</body>
</html>
