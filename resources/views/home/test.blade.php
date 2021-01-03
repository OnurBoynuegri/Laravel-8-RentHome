<!DOCTYPE html>
<html>
<head>
    <title>Laravel Test Page</title>
</head>
<body>

<h1>Laravel Test</h1>
Id no: {{$id}}<br>
Name: {{$name}}<br>
<?php
echo "id number : ",$id;
echo "<br> name : ",$name;
?>
<br>
<a href="{{route('home')}}"> Anasayfa</a>
</body>
</html>
