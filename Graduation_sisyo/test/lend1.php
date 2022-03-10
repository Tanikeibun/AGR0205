<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/lend.css">
    <title>貸出画面</title>

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
        <br>
        <hr>
    </header>
    <main>
        <!-- <div class="img1">
            <img src="../img/c.jpeg" alt="" width="150px" height="250px">
        </div> -->
        <h4>図書カードを読み取ってください！</h4>
        <p>
            うまく読み取れなかった場合は、利用者番号を入力してください！
        </p>
        <form action="lenda.php" method="get">
            利用者番号：<input type="number" name="userNum" required>
            <br>
            <input type="submit" value="次へ">
            <input type="button" onclick="history.back()" value="戻る">
        </form>

    </main>

</body>

</html>

</script>