<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel CREATE</title>
    </head>
    <body>

      @if ($errors->any())
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      @endif

      <form action="{{route('create.post')}}" method="post">
        @csrf
        bir title oluştur <input type="text" name="title"> <br> <br>
        Kategorisini seç:
        <select name="categories">
          <option>Seçim yap ulan</option>
        @foreach ($category as $categories)
          <option value="{{$categories->id}}">{{$categories->name}}</option>
        @endforeach
        </select>
        <br><br>
        <button type="submit">başlığı oluştur</button>
      </form>
      <a href="/">anasayfa</a>
    </body>
</html>
