<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>4each_blog</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>

        <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01; host=localhost;","root","root");
        $stmt=$pdo->query("select * from 4each_keijiban");
        ?>



        <div class="logo"><img src="4eachblog_logo.jpg"></div>

        <header>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>お問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>

        <main>

            <div class="left">

                <h1>プログラミングに役立つ掲示板</h1>

                <form method="post" action="insert.php">

                    <div>
                        <h3>入力フォーム</h3>
                    </div>

                    <div>
                        <label>ハンドルネーム</lavel>
                        <br>
                        <input type="text" class="text" size="35" name="handlename">
                    </div>

                    <div>
                        <label>タイトル</lavel>
                        <br>
                        <input type="text" class="text" size="35" name="title">
                    </div>

                    <div>
                        <label>コメント</lavel>
                        <br>
                        <textarea cols="35" rows="7" name="comments"></textarea>
                    </div>

                    <div>
                        <input type="submit" class="submit" value="投稿する">
                    </div>

                </form>

                <?php

                    while($row = $stmt->fetch()){
                        echo "<div class='kiji'>";
                            echo "<h3>".$row['title']."</h3>";
                            echo "<div class='contents'>";
                                echo $row['comments'];
                                echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                            echo "</div>";
                        echo "</div>";
                    }
                ?>
                
            </div>

            <div class="right">
                
                <h3>人気の記事</h3>

                <ul>
                    <li>PHP　オススメ本</li>
                    <li>PHP　MyAdominの使い方</li>
                    <li>今人気のエディタ Top5</li>
                    <li>HTMLの基本</li>
                </ul>

                <h3>オススメリンク</h3>

                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>

                <h3>カテゴリ</h3>

                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>

            </div>

        </main>

        <footer>copyright © internous|4each blog is the one which provides A to Z about programming.</footer>
    </body>
</html>