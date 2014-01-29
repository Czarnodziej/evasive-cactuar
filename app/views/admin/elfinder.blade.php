<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>elFinder 2.0</title>
        <link rel="stylesheet" href="{{ asset('assets/css/smoothness/jquery-ui-1.8.13.custom.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/elfinder.min.css') }}">

        <script src="{{ asset('assets/js/vendor/jquery-1.6.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery-ui-1.8.13.custom.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/elfinder.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/i18n/elfinder.pl.js') }}"></script>

        <script type="text/javascript">
                    var FileBrowserDialogue = {
                    init: function() {
                    // Here goes your code for setting your custom things onLoad.
                    },
                            mySubmit: function(URL) {
                            // pass selected file path to TinyMCE
                            parent.tinymce.activeEditor.windowManager.getParams().setUrl(URL);
                                    // close popup window
                                    parent.tinymce.activeEditor.windowManager.close();
                            }
                    };
                    $().ready(function() {
            var elf = $('#elfinder').elfinder({
            lang: 'pl',
                    url: 'http://laraveil.dev/php/connector.php', // connector URL
                    getFileCallback: function(file) { // editor callback
                    // actually file.url - doesnt work for me, but file does. (elfinder 2.0-rc1)
                    FileBrowserDialogue.mySubmit(file); // pass selected file path to TinyMCE 
                    }
            }).elfinder('instance');
            });
        </script>
    </head>
    <body>
        <!-- Element where elFinder will be created (REQUIRED) -->
        <div id="elfinder"></div>
    </body>
</html>