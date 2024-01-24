<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form method="post" action = "{{route('create-article')}}">
    {{ @csrf_field()}}
    <label>title</label>
    <input type="text" name ="title">

    <label>image</label>
    <input type="text" name ="image">
    
    <label>isi</label>
    <input type="text" name ="isi">
    <button type="submit">tambah</button>
</form>
  
</body>
</html>