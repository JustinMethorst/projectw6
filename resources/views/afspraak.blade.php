<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Afspraak</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">
</head>
<body>

<h1>Afspraak</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/afspraak/create" method="post">
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
        <label for="datum">
            Datum
            <input type="text" id="datepicker">
        </label>
    </div>

    <div class="form-group">
        <label for="tijd">
            Tijd
            <select id="timeSelector" name="time">
                @for($i = 8; $i <= 17; $i++)
                    <option value="{{ $i }}:00">{{ $i }}:00</option>
                    <option value="{{ $i }}:15">{{ $i }}:15</option>
                    <option value="{{ $i }}:30">{{ $i }}:30</option>
                    <option value="{{ $i }}:45">{{ $i }}:45</option>
                @endfor
            </select>
        </label>
    </div>
    <div class="form-group">
        <label for="afspraak_omschrijving">
            Afspraak Omschrijving
            <input type="text" class="form-control" name="afspraak_omschrijving" placeholder="Afspraak Omschrijving">
        </label>
    </div>
    <div class="form-group">
        <label for="afspraak_handeling">
            Afspraak Handeling
{{--            <input type="text" class="form-control" name="afspraak_handeling" placeholder="Afspraak Handeling">--}}
            <select id="handelingSelector" name="handeling">
                <option value="Kleine Beurt">Kleine Beurt</option>
                <option value="Grote Beurt">Grote Beurt</option>
                <option value="Reparatie">Reparatie</option>
            </select>
        </label>
    </div>

    <input type="submit" value="Afspraak Toevoegen">
</form>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script>
    $( function() {
        $( "#datepicker" ).datepicker({
            changeYear: true,
            changeMonth: true,
            minDate: 1,
            dateFormat: "yy-mm-dd",
            yearRange: "-100:+20",
            onSelect: function(date) {
                const datesObject = JSON.parse(<?php echo json_encode($usedDates); ?>);
                const usedDates = datesObject[date];
                if(usedDates){
                    $('#timeSelector > option').each(function() {
                        const currentElement = $(this)
                        if(usedDates.includes(currentElement.val())){
                            currentElement.attr('disabled', 'disabled');
                        }
                    })
                }
            }
        });
    } );
</script>
</html>
