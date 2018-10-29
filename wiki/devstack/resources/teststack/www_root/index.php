<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hello World!</title>
<link rel="stylesheet" href="/css/main.css">
<script src="/js/header.js"></script>
</head>
<body>
<h1>Hello World!</h1>
<script>
(function () {
    document.write('<p>(embedded critical JS, závislost na JS v hlavičce)</p>');
}());
</script>
<script src="/js/footer.js"></script>
</body>
</html>

<!-- 

node.js
npm/yarn
gulp + plugins
                =>

jQuery  https://stackoverflow.com/a/41605459/1823774
https://www.interval.cz/clanky/jak-na-lepsi-javascript-s-promisy/
1.12 ?
3.3.1

Bootstrap ... ?

-->

<!--

load critical <meta> (charset, http-equiv, google, viewport) a <title> ....................... 1  ......... 1
(async) load concat CSS v hlavičce ........................................................... 2  ......... A1
((async) load component specific CSS v hlavičce) ............................................. 3  ......... A2
critical scaffolding embedded JS ............................................................. 4  ......... 2
async load JS v hlavičce (project scaffolding + jeho závislosti) ............................. A1 ......... A3
    spuštění okamžitě po načtení
    spuštění na DOM ready
    spuštění na onload
async load fontů (JS + fallback) ............................................................. A2 ......... A4
    spuštění na load fontů
(embedded critical CSS) ...................................................................... -  ......... 3
zbývající <meta> a embedded JS ............................................................... 5  ......... 4
<body> content (alty & rozměry obrázků) ...................................................... 6  ......... 5
(embedded critical JS, závislost na JS v hlavičce) ........................................... 7  ......... 6
load JS v patičce ............................................................................ 8  ......... 7
    okamžité spuštění nezávislé na head JS
    spuštění závislé na head JS
        spuštění na DOM ready
        spuštění na onload

=============================================
tohle je primárně jQuery/Zepto/Backbone/Underscore stack, jak do toho zapadá React, Angular, Vue?
co Modernizer, RequireJS, ...?
-->

