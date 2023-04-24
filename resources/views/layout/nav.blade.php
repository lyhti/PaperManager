<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">PAPER Manager</a>
        @guest
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/login">로그인</a>
                </li>
            </ul>
        @else
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <button type="button" class="btn btn-link" onclick="window.location='{{ url("pwdChange") }}'">{{ Auth::user()->user_nm }}</button>
                </li>
                <li class="nav-item">
                    <form method="POST" action="/logOut">
                        {!! csrf_field() !!}
                        <button type="submit" class="btn btn-link">로그아웃</button>
                    </form>
                </li>
            </ul>
        @endguest
</nav>
