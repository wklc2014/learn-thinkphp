<?php
    $page = 'home';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>首页</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="css/common.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
</head>

<body>
    <?php
        include("include/header.php");
    ?>
    <section class="banner">
        <img src="img/banner1.png" alt="">
    </section>
    <section class="page-concept page-size">
        <h1 class="site-title">
            <div class="before">CONCEPT</div>
            <div class="text">品牌理念</div>
        </h1>
        <div class="detail">
            <p>女人的美丽随着岁月而增长，又因为精致而变得迷人。</p>
            <p>精致女人是巴黎广场上那个身着白衣长裙，留着金色长发，舔着冰淇淋的可爱公主；精致女人是穿着黑款长裙，梳着高扬发髻，游走在HANBAO橱窗前吃着早餐的交际花。</p>
            <p>我们将古典与时尚完美结合，对衣着独特品味成就了经典优雅，执着的追求简洁素雅和极具生活气息的妆容，
            造就每个女人都向往的精致！</p>
            <p>美丽绝不能以损伤肌肤健康为代价，一定要在安全滋养的基础上让年轻肌肤绽放美丽。</p>
        </div>
        <ul class="list">
            <li>
                <img src="img/concept-1.png" alt="">
                <span class="text">个性挥洒</span>
            </li>
            <li>
                <img src="img/concept-2.png" alt="">
                <span class="text">定义真我</span>
            </li>
            <li>
                <img src="img/concept-3.png" alt="">
                <span class="text">自然完美</span>
            </li>
            <li>
                <img src="img/concept-4.png" alt="">
                <span class="text">精致女人</span>
            </li>
        </ul>
    </section>
    <section class="site-sub-banner">
        <img src="img/new-product.png" alt="">
    </section>
    <section class="page-beauty page-size">
        <h1 class="site-title">
            <div class="before">BEAUTY</div>
            <div class="text">美丽秘诀</div>
        </h1>
        <div class="detail">
            <p>本品牌主要针对年轻人的皮肤，包括护肤的各种产品还有美妆的眼影、睫毛刷、口红、粉底等美妆用品，还有一些美妆工具。</p>
            <p>品牌坚信：美丽绝不能以损伤肌肤健康为代价，一定要在安全滋养的基础上让年轻肌肤绽放美丽</p>
        </div>
        <div class="info">
            <div class="cover">
                <img src="img/beauty-cover.png" alt="">
            </div>
            <ul class="list">
                <li><img src="img/beauty-1.jpg" alt=""></li>
                <li><img src="img/beauty-2.jpg" alt=""></li>
                <li><img src="img/beauty-3.jpg" alt=""></li>
            </ul>
            <div class="ad-list">
                <ul>
                    <li><img src="img/beauty-swiper-1.jpg" alt=""></li>
                    <li><img src="img/beauty-swiper-2.jpg" alt=""></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="page-news">
        <div class="news-cover">
            <div class="text page-size">
                <p>年轻人护肤，就用BEAUTY。BEAUTY专注年轻肌肤7年，连续四年荣获大奖。</p>
                <p>BEAUTY品牌坚信：美丽绝不能以损伤肌肤健康为代价，</p>
                <p>一定要在安全滋养的基础上让年轻肌肤绽放美丽。</p>
            </div>
            <div class="page-size">
                <div class="more-button">
                    查看更多
                </div>
            </div>
        </div>
        <div class="page-size">
            <h1 class="site-title">
                <div class="before">NEWS</div>
                <div class="text">新闻资讯</div>
            </h1>
            <div class="detail">
                <div class="item">
                    <img src="img/news-1.jpg" alt="">
                    <h3 class="site-title">
                        <div class="text">14款经典化妆刷大比拼，让你不再手残！</div>
                        <div class="memo">
                            这一期要给大家分享一下化妆刷的选择和试用报告。真的是一用完就和亲爱的泥萌分享啦~不要太感动哦~
                        </div>
                    </h3>
                </div>
                <div class="item">
                    <img src="img/news-2.jpg" alt="">
                    <h3 class="site-title">
                        <div class="text">
                            <a href="#">怎么刷睫毛膏让眼睛变大</a>
                        </div>
                        <div class="memo">
                            这一期要给大家分享一下化妆刷的选择和试用报告。真的是一用完就和亲爱的泥萌分享啦~不要太感动哦~在刷毛方面，尽管是化纤做的刷头，看起来也不是很高大上，却能做到很软很
                        </div>
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <?php
        include("include/footer.php");
        include("include/top.php");
    ?>
</body>

</html>
