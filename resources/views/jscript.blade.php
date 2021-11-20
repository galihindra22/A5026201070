<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
        function convert(){
            var c = document.getElementById('data').value;
            var f = (c * 1.8)+32;
            document.getElementById('res').innerText = '${c} C = ${f} F';
        }
    </script>

</head>
<body>
    <input id="data" /> C
    <br/>
    <button onclick="convert()">Convert</button>
    <h4 id="res"></h4>
</body>
</html>
