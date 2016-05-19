<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/TextMinded.css" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>

</head>
<body>
<div id="div-form">
    <form method="get" action="https://translate.textminded.com/web/api/v3/auth/whoAmI" id="form1" accept-charset="UTF-8">
        <fieldset>
            <legend>Translation</legend>

            <label for="navn">Termbase</label>

            <select name="drpSourceTBLang">
                <option value="da">da</option>
                <option value="en_gb">en</option>
            </select>
            <select name="drpTargetTBLang">
                <option value="en_gb">en</option>
                <option value="da">da</option>
            </select>

            <br><br>
            <input type="text" name="token" id="token"  autofocus>

            <input type="submit" name="btnTranslate" value="Translate"">
            <br><br>

            <p id="result"></p>


        </fieldset>
    </form>
</div>


<script>

    $("#form1").submit(function (evt)
    {
        evt.preventDefault();
        var name = $("userName").val();
        var formData = $(this).serialize();
        var url = $(this).attr("action");

//        var j = $.get(url, formData, function(response){
////            $("#result").html(response);
//        });
        $.getJSON(url,formData,function(result){
//            $.each(result, function(i, field){
//                $("div").append([i]);
//            });
//            var txt = result.user.firstName;
//            $(#result).innerHTML = txt;
//            alert("Succes" + txt)
            $.each(result, function(i, field){
                $("div").append(field + i.user.firstName  " ");
            });
        });


    });

</script>

</body>
</html>
