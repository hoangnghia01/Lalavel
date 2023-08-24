<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<style>
header{
    width: 100%;
    height: 10vh;
    background: green;
    border: 1px solid #000;
}
footer{
    width: 100%;
    height: 10vh;
    background: green;
    border: 1px solid #000;
}
main{
    width: 100%;
    height: 20vh;
    background: yellow;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px solid #000;
}
aside{
    width: 50%;
    background: rgb(59, 44, 44);
    height: 18vh;
}
.content{
    width: 50%;
    background: red;
    height: 18vh;
}
</style>

<body>
    <div>
        @include('client.pages.header')
        <main>
            <aside>Menu</aside>
            <div class="content">
                @yield('content')
            </div>
        </main>
        @include('client.pages.footer')
    </div>
</body>
</html>


@yield('js-costom')
