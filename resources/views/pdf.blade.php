<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{route('pdf.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="File"></label>
        <input type="file" name="file" id="">
        <input type="submit" value="carregar">
    </form>
</body>

</html>
