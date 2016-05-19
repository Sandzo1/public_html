<!DOCTYPE html>
<html>
<head>
    <title>Translate</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/TextMinded.css" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>

</head>
<body>
<div id="div-form">
    <form method="get" id="form1" action="Service/Respone_Service.php" accept-charset="UTF-8">
        <fieldset>
            <legend>Translation</legend>

            <label for="navn">Termbase</label>

            <select name="lang_from">
                <option value="Dansk">da</option>
                <option value="vanilla">en</option>
            </select>
            <select name="lang_to">
                <option value="en">en</option>
                <option value="da">da</option>
            </select>

            <br><br>
            <input type="search" value="" id="search_txt" name="navn" autofocus>
            <input type="submit" name="search" value="Translate"">
            <br><br>

            <p id="result"></p>


        </fieldset>
    </form>
</div>


<script>

    $("#form1").submit(function (evt) {
        evt.preventDefault();
        var formData = $(this).serialize();
        var url = $(this).attr("action");

        $.get(url, formData, function(response){
            $("#result").html(response);
        });

    });





</script>

</body>
</html>
