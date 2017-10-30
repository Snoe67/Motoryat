<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel/Snoe</title>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="h2">
        SnoE/About
    </div>
    @foreach($iller as $il)
        <h1>{{ $il->il_adi }}</h1>
    @endforeach

</div>
</body>
</html>
