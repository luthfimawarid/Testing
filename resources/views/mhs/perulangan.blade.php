<!DOCTYPE html>
<html lang="en">
<head>
    <title>Perulangan Kontrol WebSaya.Com</title>
</head>
<body>
    <h3>Perulangan FOR</h3>
    @for($i=0; $i < count($mhs); $i++)
        {{ 'Nama: '. $mhs[$i] }} <br>
    @endfor
    <hr>
    <h3>Perulangan FOREACH</h3>
    @foreach ($mhs as $item)
        {{ 'Nama: '. $item }} <br>
    @endforeach
    <hr>
    <h3>Perulangan WHILE</h3>
    @php
        $x=0;
    @endphp
    @while($x < count($mhs))
        {{ 'Nama: '. $mhs[$x] }} <br>
        @php
        $x++;
        @endphp
    @endwhile
    <hr>
</body>
</html>