<?php
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

    <title>front end</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">File Converter</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.php">About</a>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="htmltopdf.php">Html 
                            </a>
                        <a class="dropdown-item" href="pdftoword.php">Pdf 
                           </a>
                        <a class="dropdown-item" href="wordtopdf.php">Word 
                            </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <h1 class='text-center'>Convert Pdf File</h1>
    <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: url("/stars.jpg");
  background-color: #cccccc;
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: left;
  position: absolute;
  top: 20%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: skyblue;
}
</style>
</head>
<body>

<div class="hero-image">
  <div class="hero-text">
    <!-- <div class="text-center mr-8 my-5"> -->
      
      <form action="#" method="post" enctype="multipart/form-data" name="conversionform" id="conversionform">
        <!-- <p>API Key: <input id="key" name="key" type="text" /></p> -->
        <div style = " top:2px; text-align: center;"><h1 >Insert File</h2></div>
        <div style = " top:8px; text-align: center; width: 100%;"></div>
        <div style = " top:50%; text-align: center; bottom: 40px ; width: 100%;"></div>
        <p> <input id="file" name="file" type="file" /></p>
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
      </div>
        <link rel="stylesheet" href="New folder\style.css">
        <div style = " top:50%;  position: absolute;
        width: 100%;
        bottom: 20px;
        left: 40%;
        
         ">
        <p><input type="button" value="Convert" onclick="convertpdfform()" /"></p>
        <p style="visibility: hidden;"><span id="resulttext"></span></p></div>
    </form>
  
    <!-- <div> -->
    
    <!-- <div>
      <button type="button" class="btn btn-primary" onclick="convertpdfform()" >Convert</button>
    </div> -->
    <!-- script -->
  
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
   </div>
  </div>
  </div>
</div>
  
</body>
</html>
  <footer class="container fixed-bottom">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>© 2020-2021, Document Converter Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer> 
</body>

</html>
<?php
?>