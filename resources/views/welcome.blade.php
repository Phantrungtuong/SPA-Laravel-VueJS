<!DOCTYPE html>
<html lang="vi VN">
<head>
    <meta charset="utf-8">
    <title>SPA Forum - Allaravel.com</title>

    <!-- Main styles for this application -->
    <link href="{{ 'css/app.css' }}" rel="stylesheet">
    <meta id="csrf-token" name="csrf-token" value="{{ csrf_token() }}">
</head>
<body>
<div id="app">
    <example-component></example-component>
</div>

<script src="{{'js/app.js'}}"></script>
</body>
</html>