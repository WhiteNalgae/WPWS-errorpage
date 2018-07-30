<?php

$rand = mt_rand(1,3);


switch($rand){
    case 1:
        $msg = "뭔가 없는데 뭐가 없는지 모르겠어요";
        break;
    case 2:
        $msg = "왠진 몰라도 누가 내 등을 좀 긁어주면 좋겠어요";
        break;
    case 3:
        $msg = "엥? 뭔가 없는데 왜 없는지 저도 몰라요";
        break;
    default:
        $msg = "에러페이지에서도 에러가 났어요";
        break;
}
?>
<!DOCTYPE html>
<html>
    <head>
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, user-scalable=no">
         <title>PageTitle</title>
         <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <div id="center" class="container">
            <h1>#404</h1>
            <h2><?php echo $msg; ?></h2>
            <br />
            <p>- 서버에서 해당 경로를 찾을 수 없어요.</p>
            <p>- 관리자에게 문의하거나 아래 버튼으로 이동해요.</p>
            <br />
            <button type="button" onclick="wpws();">Link [1]</button>
            <button type="button" onclick="othere();">Link [2]</button>
            <br />
            <br />
        </div>
        <script src="./error.js"></script>
    </body>
</html>
