<!DOCTYPE html>
<html>
<head>
    <title>Laravel Bootstrap Datepicker</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>

<body>

<div class="container">
    <h1>Laravel Bootstrap Datepicker</h1>
    <label>
        <input class="date form-control" type="text" id="datepicker">
    </label>
</div>

<script type="text/javascript">
    // $('#datepicker').datepicker({
    //     format: 'dd-mm-yyyy'
    // });

    // $("#datepicker").datepicker( 'getDate' );

    $(function() {
        $("#datepicker").datepicker();

        $("#datepicker").val();

        $("#datepicker").on("change",function(){
            var selected = $(this).val();
            alert(selected);
        });
    });
</script>

</body>

</html>
