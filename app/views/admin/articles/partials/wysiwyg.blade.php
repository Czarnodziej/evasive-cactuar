@section('bottom_scripts')
<!--[if lt IE 9]>
<script src="{{ asset('assets/js/vendor/respond.min.js') }}" type="text/javascript"></script>
<![endif]-->
<script src="{{ asset('assets/js/vendor/jquery-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/js/script.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.slugit.js') }}"></script>
<script type="text/javascript">
$().ready(function() {
    tinymce.init({
    selector: "textarea",
        file_browser_callback : elFinderBrowser,
        height: 400,
        language: 'pl',
        gecko_spellcheck : true,
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table emoticons paste textcolor"
        ],
        content_css: "css/content.css",
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter\n\
 alignright alignjustify | bullist numlist outdent indent | link image | print preview\n\
 media fullpage | forecolor backcolor emoticons"
    });
        function elFinderBrowser (field_name, url, type, win) {
        tinymce.activeEditor.windowManager.open({
        file: '{{ URL::route('elfinder') }}',
            title: 'elFinder 2.0',
            width: 900,
            height: 450,
            resizable: 'yes'
        }, {
        setUrl: function (url) {
        win.document.getElementById(field_name).value = url;
        }
        });
            return false;
        };
        $('#title').slugIt();
    });
</script>
@stop