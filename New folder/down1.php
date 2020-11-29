<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <input type="text"> -->

    <script>
        downloadURI("https://s2.aconvert.com/convert/p3r68-cdx67/aprzq-gx4pa.pdf",'');
        // window.open(pdfUrl, '_blank');
        function downloadURI(uri, name) 
        {
            var link = document.createElement("a");
            // If you don't know the name or want to use
            // the webserver default set name = ''
            link.setAttribute('download', name);
            link.href = uri;
            document.body.appendChild(link);
            link.click();
            link.remove();
            }
    </script>
    
</body>
</html>
<?php
?>