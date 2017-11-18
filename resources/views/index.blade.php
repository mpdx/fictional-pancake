<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Czy w tym tygodniu ktoś złożył wypowiedzenie?</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header id="first">
    <video class="video" muted loop autoplay>
        <source src="mp4/tumbleweed.mp4" type="video/mp4">
        Twoja przeglądarka nie obsługuje wideo HTML5.
    </video>
    <div class="header-content">
        <div class="inner">
            <h4>Czy w tym tygodniu ktoś złożył wypowiedzenie?</h4>
            <h1 @if(isset($isQuit)) class="yes" @endIf>{{isset($isQuit) ? 'TAK' : 'NIE'}}</h1>
            @if(isset($latestQuit))
                <h5><span>{{$latestQuit->created_at->diffForHumans()}} ktoś złożył wypowiedzenie.</span></h5>
            @endif
        </div>
    </div>
</header>
</body>
</html>
