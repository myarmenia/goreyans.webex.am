<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">

        <div class="message">
            <p>Կազմակերպության անվանումը: {{ $details['organization_name'] }},</p>
            @if ($details['email']!=null)
            <p>Կազմակերպության էլ․հասցեն: {{ $details['email'] }},</p>
            @endif

            <p>Հյուրերի քանակը: {{ $details['number_guest'] }},</p>
            <p>Հաղորդագրություն: {{ $details['message'] }},</p>


        </div>

    </div>

</body>
</html>
