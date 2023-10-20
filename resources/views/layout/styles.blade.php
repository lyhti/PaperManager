<!-- plugin-styles Starts -->
{!! Html::style('bootstrap/css/bootstrap.min.css') !!}
@stack('plugin-styles')
<!-- plugin-styles Ends -->

<!-- custom-styles Starts -->
<link type='text/css' rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
<link type='text/css' rel="stylesheet" href="{{ asset('css/nav.css') }}">
<link type='text/css' rel="stylesheet" href="{{ asset('css/all.css') }}">
<link type='text/css' rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
@stack('custom-styles')
<!-- custom-styles Ends -->
