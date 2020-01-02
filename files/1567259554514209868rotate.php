<html>
<head>
    <meta charset="utf-8">
    <style>
        #test{
            background: red;
            height: 500px;
            width: 400px;
            transform: rotate(90deg) !important;
        }
    </style>
</head>
<body>
    <div id="test"></div>
    <script>
        document.querySelector("#test").style.transform ="rotate(90deg)";
        document.querySelector("#test").style.transform ="rotate(45deg)";
        document.querySelector("#test").style.transform ="rotate(5deg)";
    </script>
</body>
</html>