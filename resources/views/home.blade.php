@extends('head')
    <body>

        <header id="header">
            @include('navbar')
        </header>

        <section class="banner p-5">
            @include('banner')
        </section>

        <div class="message">
            <img class="img_msg" src="/img/message.svg" alt="message" style="width:50px;height:50px;">
        </div>
        <div class="chat">
            <a href="#">
                <img src="/img/logo-en.png" alt="logo" style="width:80px;height:30px;">
            </a>
            <h5 class="chat-heading ml-2 mb-2">Hi there !  <span><img src="/img/hello.svg" alt="hello" style="width: 30px;height:30px;"></span></h5>
            <p class="chat-subtitle ml-2">This chat belongs to support team , please contact us for help.</p>
            <div class="chat-body">
                <p style="color: black;font-size:14px;font-weight:bold;">Start new conversation</p>
                <img class="mr-1" src="/img/me.png" alt="customer" style="width: 35px;height:35px;float:left;"> 
                <p style="font-size:12px;color:gray">Our usual reply time<br><i class="fa fa-clock-o mr-1" style="color: #3DA8C0"></i><strong>A few minutes</strong></p>
                <a href="mailTo:ahmedalimohamed1994@gmail.com" style="text-decoration:none;"><button type="button" class="btn chat-btn"><i class="fa fa-send" style="font-size: 14px"></i> send us message</button></a>
            </div>
        </div>

        <footer class="footer py-5" id="footer">
            @include('footer')
        </footer>

        <script src={{asset('bootstrap/jquery/jquery.js')}}></script>
        <script src={{asset('bootstrap/js/bootstrap.js')}}></script>
        <script src={{asset('js/behaviors.js')}}></script>
    </body>
</html>
