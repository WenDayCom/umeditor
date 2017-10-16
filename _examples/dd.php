<!DOCTYPE HTML>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <title>UMEDITOR 简单功能</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0, minimal-ui">
    <link href="http://umeditor.com/themes/default/_css/editor.css" type="text/css" rel="stylesheet">

</head>
<body>
<style>
<?php

for($i=1; $i<=35000; $i++){



	echo '.edui-icon-'.$i.':after{content:"\\'.$i.'";}';

}
?>
</style>
<?php
for($i=1; $i<=35000; $i++){



	echo '<span class=" edui-icon-'.$i.' ">'.$i.'</span>';

}

?>
</body>
</html>