<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiFinalCapturePDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <?php
    //Get a list of file paths using the glob function.
    $fileList = glob('capture/*');
    ?>
    <div class="container-fluid my-3">
        <div class="row">
        <?php
        $i = 1;
        $list = 28*7;
        foreach($fileList as $filename){
            if($i >= $list+1 && $i <= $list+28){
        ?>
            <div class="col-md-3">
                <div class="card w-100" style="border: 0;">
                    <img src="<?php echo $filename;?>" class="card-img-top">
                    <div class="card-body" style="padding: 1em !important;">
                        <h6 class="card-title text-center">
                            <?php 
                                $qc1 = str_replace("capture/","", $filename);
                                $qc2 = str_replace(".png","", $qc1);
                                echo $qc2;
                            ?>
                        </h6>
                    </div>
                </div>
            </div>
        <?php
            }
            $i++;
        }
        ?>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>