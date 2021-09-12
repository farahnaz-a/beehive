<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loader</title>
    
<script> setTimeout(function(){window.location="{{ route('customer.dashboard') }}"}, 500); </script>
</head>
<body>
    
    <div style="text-align: center; padding-top:100px;">
        <img src="{{ asset('r.gif') }}" alt="">
    </div>
    
</body>
</html>

