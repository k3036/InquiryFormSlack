<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>confirm.php</title>
  <link rel="stylesheet" href="form0css.php">
  <style type="text/css">
  body {
    margin: 0;
    padding: 0;
  }
  </style>
</head>

<body>
  <?php
    include "inquiryHeader2.php";
    ?>


  <main>
    <div class="contentOfTransmission2">
      <p class="inquiry">お問い合わせ</p>
      <div class="inquiryLine"></div>
      <p class=Notes0>下記の内容をご確認の上送信ボタンを押してください</p>
      <p class=Notes1>内容を訂正する場合は戻るを押してください。</p>



      <form method="POST" action="complete.php">
        <?php function XssOCuntermeasure($XssMeasures){
            echo htmlspecialchars($XssMeasures, ENT_QUOTES, "UTF-8") ;
        }
        ?>
        <?php
              /* データの受け取り */
              $chineseCharacterName		= $_POST["chineseCharacterName"];		//お名前
              $howToRead	= $_POST["howToRead"];        //読み仮名
              $phoneNumber		= $_POST["phoneNumber"];  //電話番号
              $emailAddress		= $_POST["emailAddress"];  //メールアドレス
              $contentsOfInquiry		= $_POST["contentsOfInquiry"];//お問い合わせ内容

              if($chineseCharacterName === ""){
                echo "<FONT COLOR=\"RED\">※氏名は必須入力です。１０文字以内でご入力ください。</FONT>" ."</br>";
              }
              if($howToRead === ""){
                echo"<FONT COLOR=\"RED\">※フリガナは必須入力です。１０文字以内でご入力ください。</FONT>"."</br>" ;
              }
              if($phoneNumber === ""){

              }else if( !preg_match('/^0$|^-?[0-9][0-9]*$/', $phoneNumber)){
                echo"<FONT COLOR=\"RED\">※電話番号は半角数字0-9のみでご入力ください。</FONT>" ."</br>";
              }
              if($emailAddress === ""){
                echo"<FONT COLOR=\"RED\">※メールアドレスが正しく入力されておりません。</FONT>" ."</br>";
              }
              if($contentsOfInquiry === ""){
                echo"<FONT COLOR=\"RED\">※お問い合わせ内容は必須入力です</FONT>" ;
              }
        ?>

        <p class="fillInYourName">氏名</p>
        <div class="Inquiry0LinesBelow"></div>
        <div class="Confirmation0"><?php  XssOCuntermeasure($chineseCharacterName); ?>
        </div>

        <p class="fillInThePhoneNumber">フリガナ</p>
        <div class="Inquiry1LinesBelow"></div>
        <div class="Confirmation1"><?php XssOCuntermeasure($howToRead); ?></div>

        <p class="fillInThePhoneNumber">電話番号</p>
        <div class="Inquiry2LinesBelow"></div>
        <div class="Confirmation2"><?php XssOCuntermeasure ($phoneNumber); ?></div>

        <p class="fillInYourEmailAddress">メールアドレス</p>
        <div class="Inquiry3LinesBelow"></div>
        <div class="Confirmation3"><?php XssOCuntermeasure($emailAddress); ?></div>

        <p class="ContentsOfInquiry">お問い合わせ内容</p>
        <div class="Inquiry4LinesBelow"></div>
        <div class="Confirmation4"><?php XssOCuntermeasure($contentsOfInquiry); ?></div>
      </form>
      <div class="sendOrBack">
        <a href="complete.php" input type=" submit" class="submitButton4" style=text-decoration:none;
          text-area="name=mutter;">
          <p class="sendSize2"> 送&nbsp;&nbsp;信</p>
        </a>
        <a href="inquiryScreen.php" input type=" submit" class="submitButton5" style=text-decoration:none;
          text-area="name=mutter;">
          <p class="sendSize2"> 戻&nbsp;&nbsp;る</p>
        </a>
      </div>

    </div>




  </main>
  <div class=inquiryFooter2>
    <div class=" FooterLine2">
    </div>
    <div class="FooterList2"></div>
    <div class="footerMove"><?php include "footer.php";?>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="form0main.js"></script>
</body>

</html>
