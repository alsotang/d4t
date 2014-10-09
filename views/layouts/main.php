<?php
use yii\helpers\Html;
use yii\web\JqueryAsset;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <link href="/css/util.css" rel="stylesheet" />
    <link href="/css/base.css" rel="stylesheet" />
    <link href="/res/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- 遮罩 -->
<div class="shade"></div>

<div class="wrapper">
    <div class="charging">
        <div class="title fl">
            <div class="title_text">
                加点料
            </div>
            <div class="close_icon fl">
                <img src="#" width="15" height="15" alt="">
            </div>
        </div>
        <div class="clear"></div> 
        <div class="input_title label">标题</div>
        <input type="text">
        <div class="clear"></div> 
        <div class="link label">链接</div>
        <input type="text">
        <div class="clear"></div> 
        <div class="comment label">评论(可选)</div>
        <input class="comment_input" type="text">
        <div class="clear"></div> 
        <div class="category label">类型可选</div>
        <ul>
            <li>新闻</li>
            <li>新闻</li>
            <li>新闻</li>
            <li>新闻</li>
            <li>新闻</li>
            <li>新闻</li>
            <li>新闻</li>
            <li>新闻</li>
        </ul>
        <div class="clear"></div>
        <div class="submit_btn">提交</div>

    </div>
    <div class="login_window">
        <div class="form">
            <div class="content_form fr">
                <div class="content_1">
                    <div class="email">邮箱</div>
                    <input type="text"/>
                </div>
                <div class="clear"></div>
                <div class="content_2">
                    <div class="password">密码</div>
                    <input type="password"/>
                </div>
                <div class="clear"></div>
                <div class="content_3">
                    <div class="signin_fp fl">
                        <div class="signin">注册</div>
                        <div class="clear"></div>
                        <div class="fpassword">忘记密码</div>
                    </div>
                    <div class="submit">登陆</div>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <div class="qrcode">
            <div class="title">微信扫一扫：立即登陆、快速注册</div>
            <div class="qrcode_pic fl">
                <img src="#" width="100" height="100" alt="">
            </div>
            <div class="text_list fl">
                <div class="text">1.微信授权仅用于获取昵称和头像信息</div>
                <div class="text">2.定制关注和订阅，个性化内容和动态提醒</div>
                <div class="text">3.定向推送最新产品信息，还有更多</div>
            </div> 
        </div>
    </div>
    <div class="header">
        <img src="#" width="90" height="40" alt="">
        <div class="title">为下一代交通工具设计</div>   
        <div class="setting_icon fr">
            <img src="#" width="50" height="40" alt="">
        </div>
        <div class="submit">提交</div>
        <div class="login">登陆</div>
    </div>
    <div class="setting">
        <div class="title">
            <div class="title_text">设置</div>
            <img class="close" src="#" width="20" height="20" alt="">
        </div>
        <div class="xdxx_title">小道消息</div>
        <div class="new_src">
            <ul>
                 <li>
                     <div class="pic new"></div>
                     <div class="type">新闻</div>
                 </li>
                 <li>
                     <div class="pic xdxx"></div>
                     <div class="type">小道消息</div>
                 </li>
                 <li>
                     <div class="pic question"></div>
                     <div class="type">提问</div>
                 </li>
                 <li>
                     <div class="pic product"></div>
                     <div class="type">产品发布</div>
                 </li>
             </ul> 
        </div>
        <div class="car_title">电动车</div>
        <div class="car_category">
            <ul>
                 <li>
                     <div class="pic bike"></div>
                     <div class="type">自行车</div>
                 </li>
                 <li>
                     <div class="pic ebike"></div>
                     <div class="type">电动车</div>
                 </li>
                 <li>
                     <div class="pic board"></div>
                     <div class="type">滑板车</div>
                 </li>
                 <li>
                     <div class="pic around"></div>
                     <div class="type">周边</div>
                 </li>
             </ul> 
        </div>
        <div class="bottom"></div>
    </div>
</div>
<div class="clear"></div>

        <?= $content ?>

        
<script src="/js/jquery-1.11.1.min.js"></script>
<script>
    $(".header .setting_icon").click(function(){
        console.log("click");
        if(!$(".setting").hasClass("show"))
        {
            $(".setting").addClass("show");
            console.log($(this));
        }
        $(".setting").animate({
            right:'0px'
        });
    });
    $(".setting .close").click(function(){
        $(".setting").animate({
            right:'-250px'
        },function(){
           if($(".setting").hasClass("show"))
           {
               $(".setting").removeClass("show");
           }
        });
        
    });
    
    $(".header .login").click(function(){
        $(".login_window").slideToggle("fast");
    });
    $(".header .submit").click(function(){
        $(".charging").addClass("show");
        $(".shade").show();
    });
    $(".charging .close_icon").click(function(){
        $(".charging").removeClass("show");
        $(".shade").hide();
    });
    $(".shade").click(function(){
        $(".charging").removeClass("show");
        $(".shade").hide();
    });

  
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
