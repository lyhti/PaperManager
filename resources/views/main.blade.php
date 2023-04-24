@extends('layout.master')

@section('content')
    <div class="jumbotron text-center">
        <h1>PAPER Manager</h1>
        <br>
        @guest
            <p>
                <a style="margin-right: 30px;" class="btn btn-primary btn-lg" href="{{url('login')}}" role="button">로그인</a>
                <a class="btn btn-success btn-lg" href="register" role="button">회원등록</a>
            </p>
        @endguest
    </div>
@endsection

@push('custom-scripts')
    <script>
        $(document).ready(function() {
            localStorage.removeItem('page')
        });
    </script>
@endpush
