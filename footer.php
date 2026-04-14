</div><!-- /.wrap -->


<div class="sec-contact">
    <div class="sec-contact__inner">
        <div class="contact-area">
            <h3 class="contact-area__read anim fadein">大事なおクルマの<br class="sp-show">鈑金塗装、整備・修理、車検など<br>お気軽にご相談ください</h3>
            <p class="contact-area__tel anim fadein">tel.055-918-7679</p>
            <p class="contact-area__txt anim fadein">受付時間／8:00〜17:00（月曜定休）</p>
            <a href="./contact/" class="contact-area__btn anim fadein">WEBからのお問い合わせはこちら</a>
        </div>
    </div>
</div>

<footer class="site-footer anim fadein">
    <div class="site-footer__inner">
        <div class="site-footer__info">
            <h3 class="site-footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_red.svg" alt=""></h3>
            <p class="site-footer__txt">
                〒410-0822 静岡県沼津市下香貫前原1491-1<br>
                TEL.055-918-7679／FAX.055-919-8312
            </p>
            <a href="https://maps.app.goo.gl/VMUD9az7ZdQwZtfq7" target="_blank" class="site-footer__btn">GoogleMapで見る</a>
        </div>
        <div class="site-footer__link">
            <ul class="site-footer__ul">
                <li><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
                <li><a href="<?php echo esc_url(home_url()); ?>/news/">新着情報</a></li>
            </ul>
            <ul class="site-footer__ul">
                <li>
                    <a href="<?php echo esc_url(home_url()); ?>/about/">Y’s Factoryについて</a>
                    <ul class="site-footer__ul__sub">
                        <li><a href="<?php echo esc_url(home_url()); ?>/about#link01">会社案内</a></li>
                        <li><a href="<?php echo esc_url(home_url()); ?>/about#link02">社長あいさつ</a></li>
                        <li><a href="<?php echo esc_url(home_url()); ?>/about#link03">ギャラリー</a></li>
                        <li><a href="<?php echo esc_url(home_url()); ?>/about#link04">会社概要</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="site-footer__ul">
                <li>
                    <a href="<?php echo esc_url(home_url()); ?>/service/">Y’s Factoryの技術</a>
                    <ul class="site-footer__ul__sub">
                        <li><a href="<?php echo esc_url(home_url()); ?>/service#link01">鈑金</a></li>
                        <li><a href="<?php echo esc_url(home_url()); ?>/service#link02">塗装</a></li>
                        <li><a href="<?php echo esc_url(home_url()); ?>/service#link03">コーティング</a></li>
                        <li><a href="<?php echo esc_url(home_url()); ?>/service#link04">車検・整備</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="site-footer__ul">
                <li><a href="#">採用情報</a></li>
                <li><a href="<?php echo esc_url(home_url()); ?>/contact/">お問い合わせ</a></li>
                <li><a href="<?php echo esc_url(home_url()); ?>/privacy/">プライバシーポリシー</a></li>
            </ul>
        </div>
        <div class="site-footer__btm">
            <a href="https://www.instagram.com/ysfactory0228/" target="_blank" class="site-footer__btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_insta.svg" alt="">公式インスタグラム</a>
            <p class="copyright">&copy; 2025 Y’s Factory.</p>
        </div>
    </div>
</footer>


<!---  jQuery 読み込みコード  --->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/modaal.css" rel="stylesheet" type="text/css" />
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugin/modaal.min.js"></script>
<script>
$('.gallery').modaal({
    type: 'image'
});
</script>
<?php wp_footer(); ?>
</body>
</html>
