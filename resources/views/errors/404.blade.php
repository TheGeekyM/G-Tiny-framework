<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page not found | InVision</title>

    <!-- Meta -->
    <meta name="description"
          content="InVision lets you transform your designs into beautiful, interactive web &amp; mobile (iOS, Android) mockups and prototypes!">
    <meta name="google-site-verification" content="Nq_Yj3Q_tSPxLPiBNkk_JXHlogQlR6XK7YNWXRlS2T0">

    <!-- typekit -->
    <script type="text/javascript">
        (function (d) {
            var config = {
                    kitId: 'tdi5ghm',
                    scriptTimeout: 3000
                },
                h = d.documentElement, t = setTimeout(function () {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout), tk = d.createElement("script"), f = false,
                s = d.getElementsByTagName("script")[0], a;
            h.className += " wf-loading";
            tk.src = '//use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function () {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {
                }
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>

    <link href='//fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>

    <!-- Included CSS Files -->
    <style>
        [class*=" icon-"], [class^=icon-] {
            font-family: icomoon;
            speak: none;
            font-style: normal;
            font-weight: 400;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }


        body, html {
            width: 100%;
            height: 100%
        }

        body {
            background: url(https://www.invisionapp.com/assets/img/wallpapers/404.jpg) center center no-repeat fixed;
            background-size: cover;
            -webkit-font-smoothing: antialiased;
            margin: 0;
            display: table;
            vertical-align: middle
        }

        body a {
            color: #f36;
            text-decoration: none
        }

        body a:hover {
            color: #f42156
        }

        .error-message-container {
            position: relative;
            display: table-cell;
            vertical-align: middle;
            width: 100%;
            text-align: center
        }

        .logo {
            position: absolute;
            background: url(https://www.invisionapp.com/assets/img/404/logo.png?1497293413) top center no-repeat;
            display: block;
            width: 60px;
            height: 58px;
            top: 85px;
            left: 50%;
            margin-left: -30px
        }

        .error-message {
            max-width: 510px;
            margin: 0 auto;
            padding: 100px 20px 30px
        }

        .title {
            font: 600 50px/1.5em brandon-grotesque, sans-serif;
            color: #C26356;
            margin-top: -240px;
            margin-bottom: 5px
        }

        .message {
            font: 300 30px/1.5em "Open Sans", open-sans, sans-serif;
            color: #fff
        }

        @media (-webkit-min-device-pixel-ratio: 1.5),(min--moz-device-pixel-ratio: 1.5),(min-device-pixel-ratio: 1.5),(min-resolution: 144dpi) {
            .logo {
                background-image: url(https://www.invisionapp.com/assets/img/404/logo.png?1497293413);
                background-size: 60px 58px
            }
        }

        @media (max-width: 475px) {
            .title {
                font-size: 35px
            }

            .message {
                font-size: 20px
            }

        }

        @media (max-height: 750px) {
            .title {
                margin-top: -100px
            }
        }

        @media (max-height: 580px) {
            .logo {
                top: 40px
            }
        }

        @media (max-height: 500px) {
            .title {
                margin-top: 0
            }
        }

        @media (max-height: 370px) {
            .logo {
                top: 20px
            }
        }
    </style>
</head>

<body class="error404">

<div class="error-message-container">

    <a href="/" class="logo"></a>

    <div class="error-message">
        <h1 class="title">Page Not Found</h1>
        <p class="message">The link you clicked may be broken or the page may have been removed.</p>
    </div>

</div>

</body>
</html>
