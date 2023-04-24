<!-- plugin-styles Starts -->
{!! Html::style('bootstrap/css/bootstrap.min.css') !!}
@stack('plugin-styles')
<!-- plugin-styles Ends -->

<!-- custom-styles Starts -->
<link type='text/css' rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
<link type='text/css' rel="stylesheet" href="{{ asset('css/nav.css') }}">
<link type='text/css' rel="stylesheet" href="{{ asset('css/all.css') }}">
@stack('custom-styles')
<!-- custom-styles Ends -->
