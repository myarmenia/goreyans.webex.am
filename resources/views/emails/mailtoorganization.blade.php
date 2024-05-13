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
            <p>Organization name: {{ $details['organization_name'] }},</p>
            <p>Organization email: {{ $details['email'] }},</p>
            <p>Number of guests: {{ $details['number_guest'] }},</p>
            <p>Messages: {{ $details['message'] }},</p>


        </div>

    </div>

</body>
</html>
