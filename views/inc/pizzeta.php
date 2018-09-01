<?php
/*page tittle edit*/
$pagetitle = 'Պորտֆոլիո | Կայքի Մասին | Through-IT Creative Studio';
$pagekey = 'Պորտֆոլիո, Կայքի Մասին, Լուծումներ, Ընդհանուր Գին, Կայքի Գինը,  Կայքերի պատրաստում, Պատվիրել կայք, Գնացուցակ, Փաթեթներ';
$pagedesc = 'Վեբ կայքերի պատրաստում և առաջխաղացում, Սոցիալական Ցանցերում առաջխաղացում, Բոտերի պատրաստում, Բջջ․ հավելվածների պատրաստում, Վեբ դիզայն, Բրենդինգ';
require_once 'header.php';
?>
    <div id="about-header" class="titlesection" style="height: 154px;">
        <canvas id="demo-canvas" class="titlecanvas" width="1280" height="154"></canvas>
        <h2 class="center"><span>Կայքի Նկարագրությունը</span></h2>
    </div>
    <section class="portitem">
        <div class="row">
            <div class="col s12 m8 portiteminfo">
                <img src="/views/assets/images/portfolio/Pizza.jpg" alt="Կայքի Նկար">
            </div>
            <div class="col s12 m4 portiteminfo">
                <p><strong>Կայքի Գինը</strong> </p>
                <ul class="listprice">
                    <li>Փաթեթ - Վեբ Էջ <strong>70․000 &#1423;</strong></li>
                    <li>Ունիկալ Դիզայն <strong>40․000 &#1423;</strong></li>
                    <li>Պարալաքս <strong>20․000 &#1423;</strong></li>
                </ul>
                <br>
                <hr>
                <p class="pricetotoal">Ընդհանուր Գինը <strong>130.000 &#1423;</strong></p>
                <p><strong>Առաջադրանք։</strong> <br>
                    Վեբ էջի պատրաստում ունիկալ դիզայնով</p>
                <!--<p><strong>Լուծում։</strong></p>
                <ol>
                    <li><span>Լուծման նկարագրությունը</span></li>
                    <li><span>Լուծման նկարագրությունը</span></li>
                    <li><span>Լուծման նկարագրությունը</span></li>
                    <li><span>Լուծման նկարագրությունը</span></li>
                    <li><span>Լուծման նկարագրությունը</span></li>
                </ol>-->
                <p><strong>Կայք։</strong> <a href="http://pizza.through-it.com/" target="_blank">pizza.through-it.com</a></p>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/easing/EasePack.min.js" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenLite.min.js" async defer></script>
    <script type="text/javascript" src="/views/assets/js/titlejs.min.js" async defer></script>
    <!-- add footer -->
<?php require_once 'footer.php'; ?>