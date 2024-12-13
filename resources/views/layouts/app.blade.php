<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="content-security-policy" content="frame-ancestors 'self'; img-src https://*;" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="The official BMW Performance Motors Indonesia website: BMW automobiles, services, technologies and all about BMW sheer driving pleasure." />
    <title>BMW Performance Motors Indonesia Official Website</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('image/icon/BMW_Grey_Logo.svg') }}" type="image/x-icon" />

    <!-- import css file -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('style')

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L23FP7JT48">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-L23FP7JT48');
    </script>

    <!-- Metricool Tag -->
    <script>
        function loadScript(a) {
            var b = document.getElementsByTagName("head")[0],
                c = document.createElement("script");
            c.type = "text/javascript", c.src = "https://tracker.metricool.com/resources/be.js", c.onreadystatechange = a, c.onload = a, b.appendChild(c)
        }
        loadScript(function() {
            beTracker.t({
                hash: "61cd4bb1ca7d3228d113632ece02bb00"
            })
        });
    </script>
    <!-- End Metricool Tag -->
</head>

<body>

    <main role="main" class="max-w-[1800px] mx-auto">

        <x-header></x-header>

        @yield('main')

        <div class="container md:w-[90%] mx-auto my-16 px-4">
            <x-quick-action nameModal="modal-brochure"></x-quick-action>
        </div>
        
        @include("components.bottom-menus")
        
        <x-footer></x-footer>

    </main>




    <!-- import js file -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js" defer></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    {!! NoCaptcha::renderJs() !!}
    <script>
        function enableSubmitTestdrive() {
            document.getElementById("testdrivesubmit").disabled = false;
        }

        function enableSubmitBrochure() {
            document.getElementById("brochuresubmit").disabled = false;
        }

        function enableSubmitService() {
            document.getElementById("servicesubmit").disabled = false;
        }

        function enableSubmitRequestOffer() {
            document.getElementById("requestoffersubmit").disabled = false;
        }
    </script>
    <!-- Start of Qontak Webchat Script -->
    <script>
        const qchatInit = document.createElement('script');
        qchatInit.src = "https://webchat.qontak.com/qchatInitialize.js";
        const qchatWidget = document.createElement('script');
        qchatWidget.src = "https://webchat.qontak.com/js/app.js";
        document.head.prepend(qchatInit);
        document.head.prepend(qchatWidget);
        qchatInit.onload = function() {
            qchatInitialize({
                id: "abd981fa-55b0-4897-a7b0-44d2eea3191a",
                code: "gyRjjZjby20HegLoxfL5rQ",
                user: localStorage.getItem("qchat_user")
            })
        };
    </script>
    <!-- End of Qontak Webchat Script -->


    <script src="{{ mix('js/app.js') }}"></script>
    @yield('scripts')

</body>

</html>