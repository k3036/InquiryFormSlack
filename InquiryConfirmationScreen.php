<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>InquiryConfirmationScreen.php</title>
  <link rel="stylesheet" href="form0css.php">
  <style type="text/css">
  body {
    margin: 0;
    padding: 0;
  }
  </style>
</head>

<body>
  <?php include "inquiryHeader2.php";?>


  <main>
    <div class="contentOfTransmission2">
      <p class="inquiry">お問い合わせ</p>
      <div class="inquiryLine"></div>
      <p class=Notes0>下記の内容をご確認の上送信ボタンを押してください</p>
      <p class=Notes1>内容を訂正する場合は戻るを押してください。</p>
      <div class="Inquiry0LinesBelow"></div>
      <div class="Inquiry1LinesBelow"></div>
      <div class="Inquiry2LinesBelow"></div>
      <div class="Inquiry3LinesBelow"></div>
      <div class="Inquiry4LinesBelow"></div>
      <p class="fillInYourName">氏名</p>
      <p class="Confirmation0">山田太郎</p>
      <p class="howToRead">フリガナ</p>
      <p class="Confirmation1">ヤマダタロウ</p>
      <p class="fillInThePhoneNumber">電話番号</p>
      <p class="Confirmation2">09012345678</p>
      <p class="fillInYourEmailAddress">メールアドレス</p>
      <p class="Confirmation3">test@test.co.jp</p>
      <p class="ContentsOfInquiry">お問い合わせ内容</p>
      <p class="Confirmation4">Cafe-Cafe 御中</p>



      <p class="ProgressConfirmationText1stLine">いつも大変お世話になっております。</p>
      <p class="ProgressConfirmationText2stLine">株式会社〇〇の山田です。</p>
      <P class="ProgressConfirmationText3stLine">先日メールにてお願いしておりましたXXの商品サンプルの件についてです</p>
      <p class="ProgressConfirmationText4stLine">が、</p>
      <p class="ProgressConfirmationText5stLine">その後の進捗は、いかがでしょうか。</p>
      <p class="ProgressConfirmationText6stLine">当サンプルが必要となる会議が今週金曜日と迫っているため、本日15時ま</p>
      <p class="ProgressConfirmationText7stLine">でにご送付をお願いできますでしょうか。</p>
      <p class="ProgressConfirmationText8stLine">また、本メールと行き違いでご連絡をいただいておりましたら申し訳あり</p>
      <p class="ProgressConfirmationText9stLine">ません。</p>
      <p class="ProgressConfirmationText10stLine">お忙しいところ大変恐れ入りますが、お取り計らいの程、何卒よろしくお</p>
      <p class="ProgressConfirmationText11stLine">願いいたします。</p>

      <a href="thankYouForYourInquiry.php" input type=" submit" class="submitButton4" style=text-decoration:none;
        text-area="name=mutter;">
        <p class="sendSize2"> 送&nbsp;&nbsp;信</p>
      </a> <a href="inquiryScreen.php" input type=" submit" class="submitButton5" style=text-decoration:none;
        text-area="name=mutter;">
        <p class="sendSize2"> 戻&nbsp;&nbsp;る</p>
      </a>

    </div>




  </main>
  <div class=inquiryFooter2>
    <div class=" FooterLine2">
    </div>
    <div class="FooterList2"></div>
    <div class="footerMove"><?php include "footer.php";?>
    </div>
  </div>

</body>

</html>
