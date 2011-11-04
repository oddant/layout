<?php
    define( 'PAGE', isset($_GET['page']) ? $_GET['page'] : 'home' );
    define( 'LANG', isset($_GET['hl']) ? $_GET['hl'] : 'FR' );

    $content = @file_get_contents('content/'.PAGE.'/'.LANG);
    $meta = json_decode(
            @file_get_contents('meta/'.PAGE.'/'.LANG.'_json'),
            true
    );
?>
<!doctype html>
<html lang=<?=LANG?>>
<head>
<meta charset="utf-8">
    <title><?=$meta['t']?></title>
<meta name="description" content="<?=$meta['d']?>">
<meta name="keywords" content="<?=@implode(',', $meta['k'])?>">
</head>
<body>
    <?=$content?>
</body>
</html>