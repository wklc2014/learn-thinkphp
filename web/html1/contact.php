<?php
    $page = 'contact';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>联系我们</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="css/common.css" rel="stylesheet">
    <link href="css/page.css" rel="stylesheet">
</head>

<body>
    <?php
        include("include/header.php");
    ?>
    <section class="page-contact">
        <div class="page-size">
             <div class="page-contact-img"></div>
             <div class="page-contact-form">
                <p>我们专注彩妆10余年，只为让每个女人更精致，如您有什么疑问或问题反馈，都可以填写下列留言，我们会做的更好！</p>
                <form action="">
                     <div class="form-item">
                         <label for="contact-theme" class="form-label">反馈主题：</label>
                         <input type="text" id="contact-theme" class="form-input">
                     </div>
                     <div class="form-item">
                         <label for="contact-name" class="form-label">联系人：</label>
                         <input type="text" id="contact-name" class="form-input">
                     </div>
                     <div class="form-item">
                         <label for="contact-phone" class="form-label">联系电话：</label>
                         <input type="text" id="contact-phone" class="form-input">
                     </div>
                     <div class="form-item">
                         <label for="contact-email" class="form-label">电子邮件：</label>
                         <input type="text" id="contact-email" class="form-input">
                     </div>
                     <div class="form-item">
                        <label for="theme" class="form-label">验证码：</label>
                        <div class="form-info">
                            <input type="text" class="form-input">
                            <img src="img/page/codeimg.php" alt="">
                            <a href="#">看不清？更换一张</a>
                        </div>
                     </div>
                     <div class="form-item">
                         <button class="form-button">提交</button>
                     </div>
                 </form>
            </div>
        </div>
    </section>
    <?php
        include("include/footer.php");
    ?>
</body>

</html>
