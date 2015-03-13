<!doctype html>
<html lang="en" ng-app="ezyFlightApp">
<head>
	@include('partials.head')
</head>
<body>
    <div class="wrapper"> 
    	@yield('content')
    </div>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-xxxxx-xx', '');
        ga('send', 'pageview');
    </script>
</body>
<script src="//localhost:35729/livereload.js"></script>
</html>