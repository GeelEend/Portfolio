<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
    <body>
    <header class="flex justify-between align-center h-[50px] goeie-kleur">
        <span class="sidenav-button" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="{{route('about-me')}}">Over mij</a>
            <a href="{{asset('projecten')}}">Projecten</a>
            <a href="{{asset('contact')}}">Contact</a>
        </div>
        <a class="header-logo" href="{{route('home')}}">Maron Zoutewelle</a>
        <a class="header-nav" href="{{route('about-me')}}">Over mij</a>
        <a class="header-nav" href="{{asset('projecten')}}">Projecten</a>
        <a class="header-nav" href="{{asset('contact')}}">Contact</a>
        <button class="header-login" onclick="location.href='{{route('login')}}';">Login</button>

    </header>

    {{ $slot }}
    </body>
    <footer class="goeie-kleur">
        <span>Copyright &copy; 2022 <i>Ontworpen door: Maron Zoutewelle </i> Alle rechten voorbehouden.</span>
    </footer>
<script src="{{ asset('js/app.js') }}"></script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

</html>
