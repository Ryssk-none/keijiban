<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<body>

    <header>
        <img src="4eachblog_logo.jpg">
         <ul>
             <li>トップ</li>
             <li>プロフィール</li>
             <li>4eachについて</li>
             <li>登録フォーム</li>
             <li>問い合わせ</li>
             <li>その他</li>

        </ul>
    </header>
    
    <main>
          <div class="main-container">
            <div class="right">
                <p class="theme">プログラミングに役立つ掲示板</p>
                <h1>入力フォーム</h1>
                <form method="post" action="insert.php">
                    <div>
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" class="text" size="35" name="handlename">
                    </div>
                    
                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text" class="text" size="35" name="title">
                    </div>
                    
                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea cols="35" rows="7" name="comments"></textarea>
                    </div>

                    <div>
                        <input type="submit" class="submit" value="投稿する">
                    </div>

                </form>
            </div>
            
            
            <div class="left">
                <ul>
                    <p>人気の記事</p>
            <div class="list">PHPオススメ本</div>
            <div class="list">PHP MyAdminの使い方</div>
            <div class="list">HTMLの基礎</div>
            <p>オススメリンク</p>
            <div class="list">インターノウス株式会社</div>
            <div class="list">XAMPPのダウンロード</div>
            <div class="list">Eclipseのダウンロード</div>
            <div class="list">Braketsのダウンロード</div>
                    <p>カテゴリ</p>
            <div class="list">HTML</div>
            <div class="list">PHP</div>
            <div class="list">MySQL</div>
            <div class="list">JavaScript</div>
                </ul>
                
            </div>
        </div>

      
    </main>
    
      <footer>
            
        copyright internous | 4each blog is the one which provides A to Z about programming.
            
        </footer>
    
</body>    
</html>