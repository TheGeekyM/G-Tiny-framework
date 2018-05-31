<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tiny Framework</title>
    <style>
        body {
            background-color: #2D2D2D;
        }

        h1 {
            color: #C26356;
            font-size: 70px;
            font-family: Menlo, Monaco, fixed-width;
        }

        p {
            color: white;
            font-size: 20px;
            font-family: "Source Code Pro", Menlo, Monaco, fixed-width;
        }

        body {
            position: absolute;
            top: 20%;
            left: 20%;
        }

        .text {
            color: #fbae17;
            display: inline-block;
            margin-left: 5px;
            font-weight: 800;
        }

        .bounceball {
            position: relative;
            display: inline-block;
            height: 37px;
            width: 15px;
        }

        .bounceball:before {
            position: absolute;
            content: '';
            display: block;
            top: 0;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: #fbae17;
            -webkit-transform-origin: 50%;
            transform-origin: 50%;
            -webkit-animation: bounce 500ms alternate infinite ease;
            animation: bounce 500ms alternate infinite ease;
        }

        @-webkit-keyframes bounce {
            0% {
                top: 30px;
                height: 5px;
                border-radius: 60px 60px 20px 20px;
                -webkit-transform: scaleX(2);
                transform: scaleX(2);
            }
            35% {
                height: 15px;
                border-radius: 50%;
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
            }
            100% {
                top: 0;
            }
        }

        @keyframes  bounce {
            0% {
                top: 30px;
                height: 5px;
                border-radius: 60px 60px 20px 20px;
                -webkit-transform: scaleX(2);
                transform: scaleX(2);
            }
            35% {
                height: 15px;
                border-radius: 50%;
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
            }
            100% {
                top: 0;
            }
        }
    </style>

</head>

<body>

<div style="text-align: center">
    <h1>Hello Framework</h1>
    <p>This is a very tiny framework you can use it just include <span class="text">['ORM' , 'Console Commands' , 'Routes' , 'Laravel
        Blade']</span> That's all.</p>

    <div class="loading">
        <div class="bounceball"></div>
        <div class="text">NEVER SETTLE</div>
    </div>

</div>

</body>
</html>