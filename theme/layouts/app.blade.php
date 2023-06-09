<!DOCTYPE html>
<html lang="{{ $language }}">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="index, follow">
        <title>{{ $seo['title'] }}</title>
        <meta name="description" content="{{ $seo['description'] }}">
        <meta name="keywords" content="{{ $seo['keywords'] }}">
        <meta name="author" content="{{ $seo['author'] }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="favicon/app-icon.webp" type="image/x-icon">
        <link rel="stylesheet" href="assets/theme.min.css">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ $seo['url'] }}">
        <meta property="og:title" content="{{ $seo['title'] }}">
        <meta property="og:description" content="{{ $seo['description'] }}">
        <meta property="og:image" content="{{ $seo['og-image'] }}">
        <meta property="twitter:card" content="summary_large_image">
        <meta name=”twitter:creator” content=”{{ $seo['twitter'] }}”>
        <meta property="twitter:url" content="{{ $seo['url'] }}">
        <meta property="twitter:title" content="{{ $seo['title'] }}">
        <meta property="twitter:description" content="{{ $seo['description'] }}">
        <meta property="twitter:image" content="{{ $seo['og-image'] }}">
        <meta property="twitter:image:alt" content="{{ $seo['description'] }}">
    </head>
    <body class="antialiased text-gray-300 bg-dark-100">
        <script type="text/javascript">
            (function(window, document, dataLayerName, id) {
                window[dataLayerName]=window[dataLayerName]||[],window[dataLayerName].push({start:(new Date).getTime(),event:"stg.start"});var scripts=document.getElementsByTagName('script')[0],tags=document.createElement('script');
                function stgCreateCookie(a,b,c){var d="";if(c){var e=new Date;e.setTime(e.getTime()+24*c*60*60*1e3),d="; expires="+e.toUTCString()}document.cookie=a+"="+b+d+"; path=/"}
                var isStgDebug=(window.location.href.match("stg_debug")||document.cookie.match("stg_debug"))&&!window.location.href.match("stg_disable_debug");stgCreateCookie("stg_debug",isStgDebug?1:"",isStgDebug?14:-1);
                var qP=[];dataLayerName!=="dataLayer"&&qP.push("data_layer_name="+dataLayerName),isStgDebug&&qP.push("stg_debug");var qPString=qP.length>0?("?"+qP.join("&")):"";
                tags.async=!0,tags.src="https://abenevaut.containers.piwik.pro/"+id+".js"+qPString,scripts.parentNode.insertBefore(tags,scripts);
                !function(a,n,i){a[n]=a[n]||{};for(var c=0;c<i.length;c++)!function(i){a[n][i]=a[n][i]||{},a[n][i].api=a[n][i].api||function(){var a=[].slice.call(arguments,0);"string"==typeof a[0]&&window[dataLayerName].push({event:n+"."+i+":"+a[0],parameters:[].slice.call(arguments,1)})}}(i[c])}(window,"ppms",["tm","cm"]);
            })(window, document, 'dataLayer', 'fe476542-08b6-48fc-bd5c-1e3e8345d23d');
        </script>
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
        <script src="assets/theme.min.js"></script>
    </body>
</html>
