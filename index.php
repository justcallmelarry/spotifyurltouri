<?php  ?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>url=>uri</title>
    <link rel="stylesheet" type="text/css" href="uri.css" />
</head>

<body>
    <div id="divaf">
        <form onsubmit="fixaf()" action="#">
            <input type="text" name="urlaf" id="urlaf" />
            <input type="submit" value="uri" id="knappaf" /><br />
            <div id="clipboardaf">to clipboard?
            <input type="checkbox" id="boxaf" /></div>
        </form>
        <div id="uriaf">
        </div>
        <script type="text/javascript">
            window.onload = document.querySelector("#urlaf").focus();
            function fixaf() {
                var urlaf1 = document.querySelector("#urlaf").value;
                var testaf = new RegExp('https:\/\/.{4}\.spotify\.com', 'i');
                if (!testaf.test(urlaf1)) {
                    window.alert("please enter a spotify link");
                    return;
                }
                var urlaf2 = urlaf1.replace(/https:\/\/.{4}\./g, "").replace(".com", "").replace(/\//g, ":");
                var divaf1 = document.querySelector("#uriaf");
                divaf1.innerHTML = urlaf2 + "<br />" + divaf1.innerHTML;
                document.querySelector("#urlaf").value = "";
                document.querySelector("#urlaf").focus();
                if(document.querySelector("#boxaf").checked == true) {
                  window.prompt("cmd+c", urlaf2);
                }
                return false;
            }
        </script>
    </div>
    </div>
</body>

</html>
