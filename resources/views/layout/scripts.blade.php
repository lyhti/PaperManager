<!-- plugin-scripts Starts -->
<script type="text/javascript" src="{{ asset('js/jquery-3.6.0.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-latest.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
@stack('plugin-scripts')
<!-- plugin-scripts Ends -->

<!-- custom-scripts Starts -->
<script type="text/javascript" src="{{ asset('js/jspdf.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.textarea_autosize.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/html2canvas.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scrollTop.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/signature_pad.umd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/html2pdf.bundle.js') }}"></script>
@stack('custom-scripts')
<!-- custom-scripts Ends -->
