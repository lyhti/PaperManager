{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> --}}
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #001529";>
    <div class="container-fluid">
        <a class="navbar-brand" href="/" style="color: white; font-weight: bold;">PAPER Manager</a>
        @guest
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/login" style="color: lightgrey;">로그인</a>
                </li>
            </ul>
        @else
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
{{--                    <button type="button" class="btn btn-link" onclick="window.location='{{ url("pwdChange") }}'">{{ Auth::user()->user_nm }}</button>--}}
                    <button type="button" class="btn btn-link" style="color: lightgrey;">{{ Auth::user()->user_nm }}</button>
                </li>
                <li class="nav-item">
                    <form method="POST" action="/logOut">
                        {!! csrf_field() !!}
                        <button type="submit" class="btn btn-link" style="color: lightgrey;">로그아웃</button>
                    </form>
                </li>
            </ul>
        @endguest
</nav>

