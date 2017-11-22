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
            <h4>Czy ktoś złożył wypowiedzenie w tym tygodniu?</h4>
            <h1 @if($isQuit) class="yes" @endif>{{ $isQuit ? 'TAK' : 'NIE' }}</h1>
            @isset($latestQuit)
                <h5><span>Ostatnie wypowiedzenie złożono {{ $latestQuit->created_at->diffForHumans() }}.</span></h5>
            @endisset
            @if($planned)
                <h5><span>{{ trans_choice('stats.planned', $planned, ['total' => $planned]) }}</span></h5>
            @endif
        </div>
    </div>
</header>
</body>
</html>
