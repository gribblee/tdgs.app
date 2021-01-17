<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Gopa</title>
    <meta data-n-head="1" charset="utf-8">
    <meta data-n-head="1" name="viewport" content="width=device-width,initial-scale=1">
    <meta data-n-head="1" data-hid="description" name="description" content="">
    <link data-n-head="1" rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="preload" href="/_nuxt/88013a2.js" as="script">
    <link rel="preload" href="/_nuxt/352365f.js" as="script">
    <link rel="preload" href="/_nuxt/3d54075.js" as="script">
    <link rel="preload" href="/_nuxt/7085b55.js" as="script">
</head>

<body>
    <div id="__nuxt">
        <style>
            #nuxt-loading {
                background: #fff;
                visibility: hidden;
                opacity: 0;
                position: absolute;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                animation: nuxtLoadingIn 10s ease;
                -webkit-animation: nuxtLoadingIn 10s ease;
                animation-fill-mode: forwards;
                overflow: hidden
            }

            @keyframes nuxtLoadingIn {
                0% {
                    visibility: hidden;
                    opacity: 0
                }

                20% {
                    visibility: visible;
                    opacity: 0
                }

                100% {
                    visibility: visible;
                    opacity: 1
                }
            }

            @-webkit-keyframes nuxtLoadingIn {
                0% {
                    visibility: hidden;
                    opacity: 0
                }

                20% {
                    visibility: visible;
                    opacity: 0
                }

                100% {
                    visibility: visible;
                    opacity: 1
                }
            }

            #nuxt-loading>div,
            #nuxt-loading>div:after {
                border-radius: 50%;
                width: 5rem;
                height: 5rem
            }

            #nuxt-loading>div {
                font-size: 10px;
                position: relative;
                text-indent: -9999em;
                border: .5rem solid #f5f5f5;
                border-left: .5rem solid #000;
                -webkit-transform: translateZ(0);
                -ms-transform: translateZ(0);
                transform: translateZ(0);
                -webkit-animation: nuxtLoading 1.1s infinite linear;
                animation: nuxtLoading 1.1s infinite linear
            }

            #nuxt-loading.error>div {
                border-left: .5rem solid #ff4500;
                animation-duration: 5s
            }

            @-webkit-keyframes nuxtLoading {
                0% {
                    -webkit-transform: rotate(0);
                    transform: rotate(0)
                }

                100% {
                    -webkit-transform: rotate(360deg);
                    transform: rotate(360deg)
                }
            }

            @keyframes nuxtLoading {
                0% {
                    -webkit-transform: rotate(0);
                    transform: rotate(0)
                }

                100% {
                    -webkit-transform: rotate(360deg);
                    transform: rotate(360deg)
                }
            }
        </style>
        <script>
            window.addEventListener("error", function() {
                var e = document.getElementById("nuxt-loading");
                e && (e.className += " error")
            })
        </script>
        <div id="nuxt-loading" aria-live="polite" role="status">
            <div>Loading...</div>
        </div>
    </div>
    <script>
        window.__NUXT__ = {
            config: {}
        }
    </script>
    <script src="/_nuxt/88013a2.js"></script>
    <script src="/_nuxt/352365f.js"></script>
    <script src="/_nuxt/3d54075.js"></script>
    <script src="/_nuxt/7085b55.js"></script>
</body>

</html>