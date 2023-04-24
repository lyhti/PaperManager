<!doctype html>
<html lang="ko">
<head>
    @include('layout.head')
    <title>PAPER Manager</title>
    <style>
        @media print {
            @page {
                /*size: 211mm 297mm;*/
                size: auto;
                margin: 10mm 0 10mm 0;
            }
        }
    </style>
</head>
<body>
<!-- Content Area Starts -->
@yield('pdf_content')
<!-- Content Area Ends -->
</body>
</html>
