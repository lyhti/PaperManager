@extends('pdf.master_pdf')

@push('plugin-scripts')
    {!! Html::script('js/signature_pad.umd.min.js') !!}
    {!! Html::script('js/html2canvas.min.js') !!}
    {!! Html::script('js/jspdf.min.js') !!}
    {!! Html::script('js/jquery.textarea_autosize.min.js') !!}
@endpush

@section('pdf_content')
    <div id="ttestt"></div>
@endsection

@push('custom-styles')
    {!! Html::style('css/ttestt2.css') !!}
    {!! Html::style('css/loader.css') !!}
@endpush

@push('custom-scripts')
    <script>
        $(function () {
            var pdfData = sessionStorage.getItem("pdfData");
            $('#ttestt').append(pdfData);

            setTimeout(function () {
                window.print()
            }, 800);
        });
    </script>
@endpush
