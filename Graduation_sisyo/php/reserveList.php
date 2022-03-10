<?php
session_start();
require_once 'data.php';

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/delayList.css">
    <title>予約検索</title>

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


        <p>司書：<a href="" class="">黄</a></p>
        <hr>
        
    </header>
    <main>
        <h2>取り置きリスト</h2>
        <?php
        $sql = "SELECT * FROM  DOC
        INNER JOIN Reserve ON DOC.DOC_Num= Reserve.DOC_Num
        INNER JOIN BookState ON DOC.stateNum= BookState.stateNum
        INNER JOIN Genre ON DOC.genreNum= Genre.genreNum
        WHERE \"check\"=0
        ";
//SQL文を実行
$stmt = $dbh->prepare($sql);
$stmt->execute();

// 検索結果のデータを一件ずつ取り出す:fetch() 
$row = $stmt->fetchAll(PDO::FETCH_BOTH);
        ?>

        <!-- <p>1件～20件（全 1,644件）</p> -->

        <!-- <ul class="pagination">
            <li class="prev"><a href="" title="前のページ">前のページ</a></li>
            <li class="this"><a href="" title="1ページ">1</a></li>
            <li><a href="" title="2ページ">2</a></li>
            <li><a href="" title="3ページ">3</a></li>
            <li><a href="" title="4ページ">4</a></li>
            <li><a href="" title="5ページ">5</a></li>
            <li><a href="" title="...">...</a></li>
            <li class="next"><a href="" title="次のページ">次のページ</a></li>
        </ul> -->

        <!-- <a href="indexLibrarian.html" class="btn btn--orange btn--cubic btn--shadow">一斉送信</a> -->
        <a href="reserveList2.php" class="btn btn--orange btn--cubic btn--shadow">取り置き未完了</a>

        <table border="1" width="900" >
            <thead>
                <tr>
                    <th>
                        予約番号
                    </th>
                    <th>
                        資料番号
                    </th>
                    <th>
                        題名
                    </th>
                    
                    <th>
                        資料状態
                    </th>
                    <th>
                        詳細
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                var_dump($_SESSION['Book']);
                $_SESSION['Book']=null;
                foreach($row as $r ){
                echo "<tr>
                    <td>".$r['r_Num']."</td>
                    <td>".$r['DOC_Num']."
                    </td>
                    <td>".$r['title']."</td>";
                    switch ("$r[stateNum]") {
                        case 1:
                            $color = "#D2691E";
                            break;
                        case 2:
                            $color = "#7B68EE";
                            break;
                        case 3:
                            $color = "red";
                            break;
                        case 4:
                            $color = "#008000";
                            break;
                        case 5:
                            $color = "#FF0000";
                            break;
                    }
                    print "<td>";
                    print "<button style=\"background-color:$color\">$r[stateName]</button>";
                    print "</td>
                        <form action=\"reserveDetail.php\">
                    <input type=\"hidden\" name=\"r_Num\" value=\"";
                    echo $r["r_Num"]."\">";
               
                    echo "<td>";
                        // echo $r["DOC_Num"];
                        echo"<input type=\"submit\" value=\"詳細\"></form>
                    </td>";
                };
                echo "</tr>"
                ?>
            </tbody>
        </table>

        <a href="index.php" class="btn btn--orange btn--cubic btn--shadow">ホームに戻る</a>
        <a href="reserveManage.php" class="btn btn--orange btn--cubic btn--shadow">予約管理に戻る</a>

    </main>
    <footer>


    </footer>
</body>

</html>