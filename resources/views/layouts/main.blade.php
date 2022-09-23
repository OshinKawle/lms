<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    @include('include.head')
</head>
<body>
 @include("layouts.header")
    @yield("wrapper")
@include('include.script')
@yield("script")
   
</body>

</html>