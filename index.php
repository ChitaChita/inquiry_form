<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./index.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="./index.js"></script>
  <title>Trussardi</title>
</head>

<body>
  <main>
    <header>
      <div class="header__float">
        <h1>Trussardi</h1>
        <nav>
          <ul>
            <li id="open-time">営業時間：11:00 〜 21:00</li>
            <li id="tel-num">TEL：○○○-○○○-○○○○</li>
          </ul>
        </nav>
      </div>
    </header>
<!-- お問い合わせフォーム ここから-->
    <section>
      <div class="contact-background" id="contact-background">
        <div class="contact-form">
          <div class="form-title">
            <h3>お問い合わせフォーム</h3>
            <form action="./system/contact.php" method="post" name="contactForm">
              <table id="form-items">
                <tbody>
                  <tr>
                    <td class="item-name">お名前</td>
                    <td>
                      <label for="l-name">氏：</label>
                      <input class="name-space" id="l-name" type="text" name="lastName" value="" required>
                      <label for="f-name">名：</label>
                      <input class="name-space" id="f-name" type="text" name="firstName" value="" required>
                    </td>
                  </tr>
                  <tr>
                    <td class="item-name">フリガナ</td>
                    <td>
                      <label for="l-furigana">氏：</label>
                      <input class="name-space" id="l-furigana" type="text" name="lastFurigana" value="" required>
                      <label for="f-furigana">名：</label>
                      <input class="name-space" id="f-furigana" type="text" name="firstFurigana" value="" required>
                    </td>
                  </tr>
                  <tr>
                    <td class="item-name">住所</td>
                    <td>
                      <label for="firstpostal">〒</label>
                      <input id="firstpostal" type="number" name="firstpostal" value="" required>
                      <label for="secondpostal">ー</label>
                      <input id="secondpostal" type="number" name="secondpostal" value="" required>
                      <input class="long-column" id="address" type="text" name="address" value="" required>
                    </td>
                  </tr>
                  <tr>
                    <td class="item-name">電話番号</td>
                    <td>
                      <label for="firstphone"></label>
                      <input class="tel-num" id="firstphone" type="tel" name="firstphone" value="" required>
                      <label for="secondphone">ー</label>
                      <input class="tel-num" id="secondphone" type="tel" name="secondphone" value="" required>
                      <label for="thirdphone">ー</label>
                      <input class="tel-num" id="thirdphone" type="tel" name="thirdphone" value="" required>
                    </td>
                  </tr>
                  <tr>
                    <td class="item-name">メールアドレス</td>
                    <td>
                      <input class="long-column" id="email" type="email" name="mail" value="" 　required>
                    </td>
                  </tr>
                  <tr>
                    <td class="item-name">メールアドレス(確認)</td>
                    <td>
                      <input class="long-column" id="email-confirm" type="email" name="email-confirm" value="" required>
                    </td>
                  </tr>
                  <tr>
                    <td class="item-name">質問内容</td>
                    <td>
                      <textarea id="message" name="message" required></textarea>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="btn-area">
                <button class="btn" id="submit-btn" type="submit">送信</button>
                <button class="btn" id="close-btn" type="button">閉じる×</button>
              </div>
            </form>
          </div>
        </div>
        <div class="accept">
          <h2>質問受け付けました</h2>
          <button>閉じる×</button>
        </div>
      </div>
    </section>
<!-- お問い合わせフォーム ここまで-->
    <section class="top-pic">
      <article class="top-bg">
        <a class="welcome">WELCOME</a>
        <div class="circle"></div>
      </article>
    </section>
    <section>
      <article class="menu-bar">
        <h2>メニュー</h2>
      </article>
      <article class="pasta-menu">
        <h3>パスタ</h3>
        <img src="./img/pasta.jpg" alt="パスタpic">
        <nav>
          <ul class="menu-list">
            <div>
              <li>カルボナーラ</li>
              <li>800円</li>
            </div>
            <div>
              <li>ペペロンチーノ</li>
              <li>750円</li>
            </div>
            <div>
              <li>和風明太子パスタ</li>
              <li>860円</li>
            </div>
            <div>
              <li>イカスミパスタ</li>
              <li>820円</li>
            </div>
            <div>
              <li>ジェノベーゼ</li>
              <li>850円</li>
            </div>
          </ul>
        </nav>
      </article>
      <article class="pizza-menu">
        <h3>ピザ</h3>
        <img src="./img/pizza.jpg" alt="ピザpic">
        <nav>
          <ul class="menu-list">
            <div>
              <li>マルゲリータ</li>
              <li>1200円</li>
            </div>
            <div>
              <li>シーフードピザ</li>
              <li>1300円</li>
            </div>
            <div>
              <li>ジェノベーゼ</li>
              <li>1300円</li>
            </div>
            <div>
              <li>マスカルポーネピザ</li>
              <li>1400円</li>
            </div>
          </ul>
        </nav>
      </article>
    </section>
    <section class="access-route">
      <h2>アクセス</h2>
      <p>杜王町駅から西口から徒歩7分</p>
      <img src="./img/map.jpg" alt="マップpic">
      <h2>お問い合わせはこちらから</h2>
      <button class="btn-open" id="contact-button">お問い合わせフォーム</button>
    </section>
    <footer>
      <p>Trussardi</p>
    </footer>
  </main>
</body>

</html>