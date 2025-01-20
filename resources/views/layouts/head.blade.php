<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/default.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
<link href="{{asset("assets/vendors/bootstrap/bootstrap.min.css")}}" rel="stylesheet">
<link href="{{asset("assets/vendors/animate.min.css")}}" rel="stylesheet">
<link href="{{asset("assets/vendors/plyr/plyr.css")}}" rel="stylesheet">
{{--<link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/github-dark-dimmed.min.css" rel="stylesheet">--}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/xcode.min.css" rel="stylesheet">
<link href="{{asset("assets/css/style.css")}}" rel="stylesheet">
<link href="{{asset("assets/css/responsive.css")}}" rel="stylesheet">

{{--<script src="https://cdn.jsdelivr.net/npm/markdown-it@14.1.0/dist/markdown-it.min.js"></script>--}}
<script src="https://momentjs.com/downloads/moment.min.js"></script>
<script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/highlight.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="{{asset("assets/vendors/bootstrap/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/vendors/markdown-it.min.js")}}"></script>
<script src="{{asset("assets/vendors/jquery.min.js")}}"></script>
<script src="{{asset("assets/vendors/plyr/plyr.js")}}"></script>
<script src="{{asset("assets/js/common.js")}}"></script>

<style>

    ul{
        list-style: square;
    }

    ul li::marker {
        font-size: 20px; /* Increase marker size */
        color: black;    /* Optional: Change color */
    }

    pre code{
        border-radius: 5px;

    }


    /* Style for the copy button */
    .copy-button {
        position: absolute;
        top: 5px;
        right: 5px;
        background-color: transparent;
        color: var(--site-bg-primary-color);
        border: none;
        padding: 3px 6px;
        cursor: pointer;
        font-size: 10px;
    }

    .copy-button:hover {
        background-color: var(--site-bg-primary-color);
        color: white;
    }

    /* Code block container */
    .code-container {
        position: relative;
    }

    .hljs{
        background-color: var(--site-body-color);
    }
    .hljs-tag{
        /*color: white;*/
    }

    .hljs-tag .hljs-attr, .hljs-tag .hljs-name {
        /*color: #efe29b;*/
    }

    .hljs-tag .htjs-attr{

    }
    .hljs-tag .htjs-string{

    }
</style>
<script>
    const md = window.markdownit();
</script>
