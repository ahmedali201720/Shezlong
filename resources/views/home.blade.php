@extends('head')
    <body>

        <header id="header">
            @include('navbar')
        </header>

        <div class="message">
            <img class="img_msg" src="/img/message.svg" alt="message" style="width:50px;height:50px;">
        </div>
        <div class="chat">
            <a href="#">
                <img src="/img/logo-en.png" alt="logo" style="width:80px;height:30px;">
            </a>
            <h4 class="chat-heading mx-1 my-3">Hi there !  <span><img src="/img/hello.svg" alt="hello" style="width: 30px;height:30px;"></span></h4>
            <p class="chat-subtitle mx-1">This chat belongs to support team , please contact us for help.</p>
        </div>

        <footer class="footer py-5" id="footer">
            @include('footer')
        </footer>

        <script src={{asset('bootstrap/jquery/jquery.js')}}></script>
        <script src={{asset('bootstrap/js/bootstrap.js')}}></script>
        <script src={{asset('js/behaviors.js')}}></script>
    </body>
</html>
