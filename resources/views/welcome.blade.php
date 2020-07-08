<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
      <h3>Title verileri</h3>

    {{-- {{$category[2]->name}} --}}



      @if (count($data)>0)
        @foreach ($data as $datas)
          <li>{{$datas->title}}<br>
          <em>Kategorisi: <b>{{$datas->getCategory->name}}</b></em><br><br>
          <a href="{{route('single', $datas->title)}}">Başlığı Gör</a>
          <a href="{{route('delete', $datas->id)}}">Sil</a>
          <a href="{{route('update', $datas->id)}}">Güncelle</a>
          <div>
            <b>Oluşturulma Tarihi: </b>
            {{$datas->created_at}}
          </div>
          <div>
            <b>Güncellenme Tarihi: </b>
            {{$datas->updated_at}}
          </div>
           <br> <br>
        @endforeach
      @else
        <h1>Title mevcut değil</h1>
      @endif

        <a href="{{route('create')}}">OLUŞTUR</a>

    </body>
</html>
