<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>inquiryScreen</title>
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
    <div class="contentOfTransmission">
      <p class="inquiry">お問い合わせ</p>
      <div class="inquiryLine"></div>
      <div class="fillInTheFollowingItems">
        <p class="enter">下記の項目をご記入の上送信ボタンを押してください</p>
        <p class="enter1">送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</p>
        <p class="enter2">なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。 </p>
        <p class="enter3"> は必須項目となります。</p>
        <p class="asterisk0">*</p>
        <p class="asterisk1">*</p>
        <p class="asterisk2">*</p>
        <p class="asterisk3">*</p>
        <p class="asterisk4">*</p>
        <p class="asterisk5">*</p>
        <div class="fillInTheFollowingItems2">
          <p class="enter">下記の項目をご記入の上送信ボタンを押してください</p>
        </div>
      </div>


      <div class="entryName"> <input class="entryPlace" type=" text" placeholder="山田太郎"></div>
      <div class="entryName2"> <input class="entryPlace" type=" text" placeholder="ヤマダタロウ"></div>
      <div class="entryNumber"> <input class="entryPlace" type=" text" placeholder="09012345678"></div>
      <div class="entryAddress"> <input class="entryPlace" type=" text" placeholder="test@test.co.jp"></div>
      <p class="fillInYourName0">氏名</p>
      <p class="howToRead0">フリガナ</p>
      <p class="fillInThePhoneNumber0">電話番号</p>
      <p class="fillInYourEmailAddress0">メールアドレス</p>
      <div class="detail"> <input class="entryDetail" type=" text">
      </div>
      <a href="InquiryConfirmationScreen.php" input type=" submit" class="submitButton3" style=text-decoration:none;
        text-area="name=mutter;">
        <p class="sendSize2"> 送&nbsp;&nbsp;信</p>
      </a>

  </main>
  <div class=inquiryFooter>
    <div class=" FooterLine2">
    </div>
    <div class="FooterList2"></div>
    <div class="footerMove"><?php include "footer.php";?>
    </div>
  </div>

</body>

</html>
