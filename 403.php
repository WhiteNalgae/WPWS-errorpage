<?php

$rand = mt_rand(1,3);

switch($rand){
    case 1:
        $msg = "그런 페이지는 접근할 수 없네요";
        break;
    case 2:
        $msg = "방패에 가로막혀서 더이상 나아가지 못해요";
        break;
    case 3:
        $msg = "안타깝게도 당신이랑 방패랑 싸워서 졌어요";
        break;
    default:
        $msg = "에러페이지에서도 에러가 났어요";
}
?>
<!DOCTYPE html>
<html>
    <head>
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, user-scalable=no">
         <meta property="og:description" content="WPWS : E403">
         <meta property="og:title" content="WPWS : E403">
         <meta property="og:type" content="website">
         <title>WPWS : 404E</title>
         <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <div id="center" class="container">
            <h1>#403</h1>
            <h2><?php echo $msg; ?></h2>
            <br />
            <p>- 해당 경로에 접근 할 권한이 없어요.</p>
            <p>- 관리자에게 문의하거나 아래 버튼으로 이동해요.</p>
            <br />
            <button type="button" onclick="wpws();">WPWS로 돌아가기</button>
            <button type="button" onclick="othere();">다른 에러페이지 보기</button>
            <br />
            <br />
        </div>
        <script src="./error.js"></script>
    </body>
</html>
