<!DOCTYPE html>
<html lang="en">

<head>
    @include ('layouts.header')
</head>

<body>
    @include ('layouts.sidebar')
        <div class="main-panel" style="background-image: url('{{asset('img/farm.jpg')}}');">  
            @yield ('content')
            @include ('layouts.script')
        </div>
</body>