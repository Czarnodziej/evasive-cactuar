<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link
        href='//fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext'
        rel='stylesheet'>

    <link href="{{ asset('assets/css/impress.min.css') }}" rel="stylesheet" />

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"
          type="image/x-icon">
</head>
<!--

Based on https://github.com/bartaz/impress.js

-->
<body class="impress-not-supported">

<div class="fallback-message">
    <p>Twoja przeglądarka <b>nie obsługuje funkcji wymaganych</b> przez impress.js, więc to co widzisz to jedynie uproszczona wersja prezentacji.</p>
    <p>Zalecam korzystanie z aktualnej wersji przeglądarki.</p>
</div>

<div id="impress">

    <div id="start" class="step slide" data-x="-1000" data-y="-1500" >
        <q>Witam serdecznie<br>
uwielbiam <strong>web developing</strong> <br>oraz kontakt z nowymi rozwiązaniami</q>
    </div>

    <div id="rozwoj" class="step slide" data-x="0" data-y="-1500">
        <q>wszelkiego rodzaju <strong>ulepszeniami</strong> oraz innymi efektami <strong>rozwoju</strong> technik sieciowych.</q>
    </div>

    <div id="praktyka" class="step slide" data-x="1000" data-y="-1500">
        <q>Wykorzystywanie w praktyce<br>
            <strong>codziennie</strong> zdobywanej wiedzy</q>
    </div>

    <div id="satysfakcja" class="step" data-x="0" data-y="0" data-scale="4">
        <span class="try">daje mi ogromną<sup>*</sup></span>
        <h1>satysfakcję</h1>
        <span class="footnote"><sup>*</sup> rozmiar zastosowany celowo</span>
    </div>

    <div id="niewielkie" class="step" data-x="2825" data-y="2325" data-z="-3000" data-rotate="300" data-scale="1">
        <p><b>niewielkie</b> doświadczenie zawodowe</p>
    </div>

    <div id="duze" class="step" data-x="3500" data-y="2100" data-rotate="180" data-scale="6">
        <p>rekompensuję <b>wielkim</b> <span class="thoughts">entuzjazmem</span></p>
    </div>

    <div id="atuty" class="step" data-x="3500" data-y="-850" data-rotate="270" data-scale="6">
        <p>niepohamowanym <b class="positioning">głodem wiedzy</b> <b class="rotating">inteligencją</b><br> <b class="scaling">organizacją pracy</b></p>
    </div>

    <div id="wyobraznia" class="step" data-x="6700" data-y="-300" data-scale="6">
        <p>brakiem <b>złych nawyków</b> oraz <b class="wyobraznia">wyobraźnią.</b></p>
    </div>

    <div id="zrodlo" class="step" data-x="6300" data-y="2000" data-rotate="20" data-scale="4">
        <p>Efekt prezentuję na stronie:</p>

        <q><a href="http://insanet.pl/">insaNet.pl</a></q>
    </div>

    <div id="dodatkowo" class="step" data-x="6000" data-y="4000" data-scale="2">
        <p>a źródła...</p>
    </div>

    <div id="trzeci-wymiar" class="step" data-x="6200" data-y="4300" data-z="-100" data-rotate-x="-40" data-rotate-y="10" data-scale="2">
        <p><span class="pod">pod</span> <span class="adresem">adresem</span>
            <span class="takim">takim</span> <span class="jak">jak</span><a href="https://github.com/Czarnodziej">github.com/Czarnodziej</a></p>
    </div>

</div>
<div class="hint">
    <p>Użyj spacji lub klawiszy strzałek w celu nawigowania.</p>
</div>
<script>
if ("ontouchstart" in document.documentElement) {
    document.querySelector(".hint").innerHTML = "<p>Dotknięcie z lewej lub prawej strony służy do nawigacji.</p>";
}
</script>
<script src="{{ asset('assets/js/vendor/impress.min.js') }}"></script>
<script>impress().init();</script>

</body>
</html>
