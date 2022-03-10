<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/call.css">
    <title>呼び出し</title>
</head>

<body>
    <header>
        <div class="title">
            <div class="logo_img">
                <img src="../img/title_logo.png" alt="" width="281" height="62">
            </div>
            <div class="logo_txt">
                <p>Shinjuku City Library</p>
            </div>
        </div>
        <div class="button1">
            <div class="button">
                <button onclick="window.location.href='register.php'" type="button"> <span>新規登録</span> </button>
            </div>
        </div>
        <br>
        <hr>
    </header>
    <main>
        <h1 style="text-align: center;">司書に呼び出ししましたので、しばらくお待ちください。</h1>
        <div class="button1">
            <button onclick="history.back()" type="button"> 戻る </button>
        </div>
    </main>
</body>

</html>