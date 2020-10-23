@extends('head')
    <body>

        <header id="header">
            @include('navbar')
        </header>

        <div class="message">
            <img class="img_msg" src="/img/message.svg" alt="message" style="width:50px;height:50px;">
        </div>

        <footer class="footer py-5" id="footer">
            @include('footer')
        </footer>

        <script src={{asset('bootstrap/jquery/jquery.js')}}></script>
        <script src={{asset('bootstrap/js/bootstrap.js')}}></script>
        <script src={{asset('js/behaviors.js')}}></script>
    </body>
</html>
