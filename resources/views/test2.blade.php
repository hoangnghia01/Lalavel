<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <?php
    // $arrayAnimal = ['Meo', 'Cho','Heo','Ca'];
    // foreach($arrayAnimal as $key => $animal){
        // $color = 'green';
        // if(($key+1) % 2 === 0){
            // $color = 'red';
        // }
        // echo ($key+1).". <span style='color: $color;'>" . $animal . "</span> <br>";
    // }
    ?> -->
    @php
        $arrayAnimal = ['Meo', 'Cho','Heo','Ca'];
    @endphp
    @foreach($arrayAnimal as $key => $animal)
        {{-- {{ $animal }} --}}
        @if ($loop->even)
            {!! $loop->iteration ."<span style='color: red;'>" . $animal . "</span> <br>" !!}
        @elseif($loop->oll)
            {!! $loop->iteration ."<s pan style='color: green;'>" . $animal . "</span> <br>" !!}
        @endif
    @endforeach

</body>
</html>
