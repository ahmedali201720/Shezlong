@extends('head')
    <body>

        <header id="header">
            @extends('navbar')
        </header>

        <footer id="footer">
            @extends('footer')
        </footer>

        <script src={{asset('bootstrap/jquery/jquery.js')}}></script>
        <script src={{asset('bootstrap/js/bootstrap.js')}}></script>
    </body>
</html>
