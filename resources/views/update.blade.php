<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel UPDATE</title>
    </head>
    <body>
      <form action="{{route('update.post', $data2->id)}}" method="post">
        @csrf
        title'ı güncelle <input type="text" name="title" value="{{$data2->title}}"> <br> <br>
        <select name="categories">
          <option>Kategoriyi Güncelle</option>
        @foreach ($category as $categories)
          <option @if($data2->category_id == $categories->id) selected @endif value="{{$categories->id}}">{{$categories->name}}</option>
        @endforeach
        </select>
        <button type="submit">başlığı güncelle</button>
      </form>
      <a href="/">anasayfa</a>
    </body>
</html>
