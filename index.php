<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>IFile Output</title>
  </head>
  <body>
    <div class="container">
    <h3 style="margin-top: 20px;">File Output</h3>
        <div class="row">
            <?php
                $dir    = './';
                $files = scandir($dir);

                foreach ($files as $oneFile){
                    if($oneFile != "." && $oneFile != ".." && $oneFile != "index.php"){
                        echo '<div class="col-xl-3 col-lg-3 col-mb-4 col-sm-6 col-12" style="margin-top: 20px;">
                            <a href="'.$oneFile.'">
                                <div class="card text-white bg-dark mb-3" style="">
                                    <div class="card-body">
                                        <p class="card-text">Name: <b>'.$oneFile.'</b></p>
                                    </div>
                                </div>
                            </a>
                        </div>';
                    }
                }
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>
