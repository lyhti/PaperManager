<!doctype html>
<html lang="ko">
<head>
    @include('layout.head')
    <title>PAPER Manager</title>
</head>
<body>
<!-- side bar Starts -->
@include('layout.sidebar')
<!-- side bar Ends -->

<!-- Nav bar Starts  -->
@include('layout.nav')
<!-- Nav bar Ends  -->

<!-- Content Area Starts -->
<div class="master-content">
    <a id="back-to-top"><span></span></a>
    @yield('content')
</div>
<!-- Content Area Ends -->
</body>
</html>
