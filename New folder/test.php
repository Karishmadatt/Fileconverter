<?php
?>
<html>
<head>
    <title>Test REST Web API</title>
</head>
<body>
     <form action="#" method="post" enctype="multipart/form-data" name="conversionform" id="conversionform">
         <!-- <p>API Key: <input id="key" name="key" type="text" /></p> -->
         <p>Local file: <input id="file" name="file" type="file" /></p>
         <p>Target format:
             <select name="targetformat" id="targetformat"">
                 <option value="pdf" selected >PDF</option>
                 <option value="docx">DOCX</option>
                 <option value="doc">DOC</option>
                 <option value="rtf">RTF</option>
                 <option value="pptx">PPTX</option>
                 <option value="epub">EPUB</option>
                 <option value="html">HTML</option>
                 <option value="txt">TXT</option>
                 <option value="jpg">JPG</option>
                 <option value="tif">TIFF</option>
                 <option value="png">PNG</option>
             </select>
         </p>
         <p><input type="button" value="Convert" onclick="convertpdfform()" /></p>
         <p style="visibility: hidden;"><span id="resulttext"></span></p>
     </form>
<script src="https://www.aconvert.com/js/jquery.min.js"></script>
<script src="https://www.aconvert.com/js/jquery.form.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
  });
  function showResponse(responseText, statusText, xhr, $form)  {
    resulttext.innerHTML=responseText;
    // var dm=responseText["result"];
    // console.log( dm );
    var dm = JSON.parse(responseText);
    // alert(result.id);
    // console.log(dm.result);
    // window.open(dm.result, '_blank');
    downloadURI(dm.result,'');
  }
  function showError(responseText, statusText, xhr, $form)  {
  }
  function convertpdfform() {
    options = {
      success:       showResponse, 
      error:         showError,
      url:       "https://s2.aconvert.com/convert/api-win.php",
    };

     $('#conversionform').ajaxForm(options);
     $('#conversionform').ajaxSubmit(options);
    
    return false;
  }
</script>
<!-- download script  -->
<script>
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