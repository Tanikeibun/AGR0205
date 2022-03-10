<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>新宿市立図書館</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

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
                <h2><?php echo$_SESSION['name']; ?></h2>
            </div>
            <div class="button">
                <button onclick="window.location.href='index.html'" type="button"> <span>ログオフ</span> </button>
            </div>
        </div>
        <br>
        <hr>
        <!-- タイトル -->
        <ul class="ul1">
            <li class="li"> <a href="login_index.html" class="a1">ホーム</a> </li>
            <li class="li"> <a href="login_guidance.html" class="a1">利用案内</a></li>
            <li class="li"> <a href="login_library_guidance.html" class="a1">図書館案内</a></li>
            <!-- <li class="li"> <a href="childpage.html" class="a1">こどもページ</a></li> -->
            <li class="li"> <a href="login_rireki.php" class="a1">個人情報</a></li>
        </ul>
    </header>
    <main>


        <div class="img1">
            <a href="newbook.html"> <img src="../img/本.jpg" name="sushi" alt="" width="950px" height="250px"></a>

        </div>
        <!-- 図書検索 -->
        <div class="TopKensaku">

            <form action="login_search.html" class="form1">
                <span id="kensaku"> 図書検索：</span><input type="text" name="" width="150px" height="150px" class="kensaku">
                <input type="submit" value="検索" class="button2">
                <input type="button" value="詳細検索" onclick="location.href='login_dsearch.html'" class="button3">
                <!-- <button onclick="window.location.href='lend1.html'" type="button">本を貸出する</button> -->
                <button onclick="window.location.href='login_matingu.html'" type="button">マッチング</button>
            </form>

            <div class="div1" id="p1">
                <a href="#"></a>
                <button onclick="window.location.href='tagu.html'" type="button" style="margin-left: 250px;"> タグ検索</button>
            </div>
            <div class="rankingu">
                <span id="rankingu1">&nbsp&nbsp&nbsp&nbsp&nbspランキング</span>
                <br>
                <br>
                <div class="syasin1">
                    <img src="../img/12_watashito1.jpg" alt="" width="200px" height="250px">
                    <br> <a href="detail.html">私と踊ろって</a>
                </div>
                <div class="syasin1">
                    <img src="../img/A1QUEG4G-UL.jpg" alt="" width="200px" height="250px">
                    <br> <a href="detail.html">服を持たない</a>
                </div>
                <div class="syasin1">
                    <img src="../img/d21468-1.jpg" alt="" width="200px" height="250px">
                    <br> <a href="detail.html">小説宝石</a>
                </div>
                <br>
            </div>
        </div>
    </main>
</body>

</html>