<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (empty($user)) {
        echo "empty user";
    } else {
        echo "ok";
    }
    ?>

    <!-- @if (empty($user["name"]))
    <p>Khong co ten</p>
    @else
    <p><?= $user['name'] ?></p>
    @endif -->

    @include ("phim/Uyen", ["name" => "Uyen", "age" => 18])

</body>

</html> -->



@extends('layout.layout')
@section('sidebar')
  @parent
  <p>Buoi hoc Laravel can ban</p>
@endsection