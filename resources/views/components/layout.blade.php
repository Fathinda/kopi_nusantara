<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css_home/style.css">

</head>
<body>
   <x-navbar></x-navbar>
    {{$slot}}
    <x-footer></x-footer>
    <script src='/js/script.js'></script>
</body>
</html>