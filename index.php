<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Getting Images from Google Using PHP</title>
</head>
<body>
    <div class="content">
        <h1>Getting Images from Google</h1>
    </div>
    <?PHP

    require_once('libs/simple_html_dom.php');

    $search_keyword=str_replace(' ','+','car love image');
    $newhtml =file_get_html("https://www.google.com/search?q=".$search_keyword."&tbm=isch");
    $result_image_source = $newhtml->find('img');

    $noOfPictureToGet = 10;
    for($i=0;$i<$noOfPictureToGet;$i){
        echo '<img src="'.$result_image_source[$i]->src.'">';            
        $i++;
    }

    ?>
    
</body>
</html>