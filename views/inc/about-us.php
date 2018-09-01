<?php
/*page tittle edit*/
$pagetitle = 'Մեր մասին | Through-IT Creative Studio';
$pagekey = 'Մեր մասին, Աշխատանքային ժամեր, 8 պատճառտ, սերտիֆիկատներ, Պատվոգրեր, ';
$pagedesc = 'Վեբ կայքերի պատրաստում և առաջխաղացում, Սոցիալական Ցանցերում առաջխաղացում, Բոտերի պատրաստում, Բջջ․ հավելվածների պատրաստում, Վեբ դիզայն, Բրենդինգ';
require_once 'header.php';
?>
<style>
    @-webkit-keyframes spin {
        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
    @keyframes spin {
        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
    .stroke-dotted {
        opacity: 0;
        stroke-dasharray: 4,5;
        stroke-width: 1px;
        -webkit-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        -webkit-animation: spin 4s infinite linear;
        animation: spin 4s infinite linear;
        transition: opacity 1s ease,  stroke-width 1s ease;
    }

    .stroke-solid {
        stroke-dashoffset: 0;
        stroke-dashArray: 300;
        stroke-width: 4px;
        transition: stroke-dashoffset 1s ease,  opacity 1s ease;
    }

    .icon {
        -webkit-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        transition: -webkit-transform 200ms ease-out;
        transition: transform 200ms ease-out;
        transition: transform 200ms ease-out, -webkit-transform 200ms ease-out;
    }

    #play:hover .stroke-dotted {
        stroke-width: 4px;
        opacity: 1;
    }
    #play:hover .stroke-solid {
        opacity: 0;
        stroke-dashoffset: 300;
    }
    #play:hover .icon {
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
    }
    #play {
        cursor: pointer;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translateY(-50%) translateX(-50%);
        transform: translateY(-50%) translateX(-50%);
    }
    #btnplay{
        z-index: 1;
        position: absolute;
        left: 50%;
        top: 50%;
    }
    #prezzi{
       /* background-image: url("/assets/images/prezzi.png");
        background-size: contain;
        background-repeat: no-repeat;
        background-position: 50%;*/
    }
    .preziram{background-image: url(/views/assets/images/prezzi.png);
        background-size: cover;
        background-position: 50%;
        width: 40%;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        height: 400px;
        border: 4px solid #2e388f;
        margin-top: 50px;
    }
</style>
<div id="about-header" class="titlesection">
    <canvas id="demo-canvas" class="titlecanvas"></canvas>
    <h2 class="center"><span>Մեր մասին</span></h2>
</div>
<div id="master-container">
    <div class="col s12 box">
        <img src="/views/assets/images/logo.png" alt="Through-it creative studio">
    </div>
</div>
<section id="aboutinfo">
    <div class="row">
        <div class="welcome s12 m12 l8" >
            <p><strong>&lt;Through-IT Creative Studio&gt;</strong>-ն հիմնադրվել է 2017 թվականին Նոյեմբերի 15-ից։ Ստւդիան ստեղծման առաջին օրվանից սկսել է իրականացնել
                նախագծեր ինչպես Հայաստանում, այնպես էլ ՀՀ սահմաններից դուրս։</p>
            <p>Մեր Թիմը բաղկացած է բարձր որակավորում ստացած և բազում տարների փորձ ունեցող մասնագետներով։</p>
            <p>Մենք քաջ պատկերացնում ենք շուկայի պահանջները ր խնդիրները, այդ իսկ պատճառով մենք գիտենք ինչ առաջարկել և ինչպես սպասարկել մեր հաճախորդներին բարձր մակարդակի վրա։
                Դա է հիմքը, որ մինչ օրս իրականացված նախագծերը ունեցել են մեծ հաջողություններ և գոհ հաճախորդներ։</p>
            <p>Մեր թիմը երաշխավորում է Ձեր պատվերի իրականացումը պրոֆեսիոնալ մակարդակի վրա, իսկ մեր կարգախոսն է՝
                <strong style="text-transform: uppercase; color: #0084ff; font-weight: 800;">Աշխատում ենք մենք, Վաստակում եք Դուք։</strong></p>
        </div>
        <div class="services s12 m12 l4">
            <div>
                <h5 class="timwork">Աշխատանքյին Ժամերը</h5><br>
                <ul class="collection timeworklist">
                    <li class="collection-item"><b>Երկուշաբթի։</b><span>10։00 - 22։00</span></li>
                    <li class="collection-item"><b>Երեքշաբթի։</b><span>10։00 - 22։00</span></li>
                    <li class="collection-item"><b>Չորեքշաբթի։</b><span>10։00 - 22։00</span></li>
                    <li class="collection-item"><b>Հինգշաբթի։</b><span>10։00 - 22։00</span></li>
                    <li class="collection-item"><b>Ուրբաթ</b><span>10։00 - 22։00</span></li>
                    <li class="collection-item"><b>Շաբաթ</b><span>10։00 - 22։00</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<h2 class="center titleinfohome" style="margin-top: 80px;"><span>8 Պատճառ Ինչու Դիմել Մեզ</span></h2>
<section id="info">
    <div class="row">
        <div class="col s12 m12 l4 leftinfo">
            <div class="row">
                <div class="col s12 unicalinfo">
                    <div class="row">
                        <div class="col s10">
                            <h5 class="unicdesign fontsiz leftcontent">Աշխատում ենք միայն <br>ժամկետների մեջ</h5>
                        </div>
                        <div class="iconbox col s2">
                            <i class="fas fa-clock"></i>
                        </div>
                    </div>
                </div>
                <div class="col s12 unicalinfo">
                    <div class="row">
                        <div class="col s10">
                            <h5 class="timesbox fontsiz leftcontent">Կիրառում ենք ժամանակակից լավագույն գործիքները</h5>
                        </div>
                        <div class="iconbox col s2">
                            <i class="fas fa-code"></i>
                        </div>
                    </div>
                </div>
                <div class="col s12 unicalinfo">
                    <div class="row">
                        <div class="col s10">
                            <h5 class="newteck fontsiz leftcontent">Մեր ստեղծած կայքերը ունեն գերազանց տեսք բոլոր դիտարկիչների և սարքերի վրա</h5>
                        </div>
                        <div class="iconbox col s2">
                            <i class="fab fa-internet-explorer"></i>
                        </div>
                    </div>
                </div>
                <div class="col s12 unicalinfo">
                    <div class="row">
                        <div class="col s10">
                            <h5 class="newteck fontsiz leftcontent">Մենք ստեղծում ենք որակյալ կայքեր խելամիտ գներով</h5>
                        </div>
                        <div class="iconbox col s2">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col s12 m12 l4 centinfo">
            <img src="/views/assets/images/logo.png" alt="Through-IT Creative Studio">
        </div>

        <div class="col s12 m12 l4 rightinfo">
            <div class="row">
                <div class="col s12 unicalinfo">
                    <div class="row">
                        <div class="iconbox col s2">
                            <i class="fas fa-user-secret"></i>
                        </div>
                        <div class="col s10">
                            <h5 class="uniccont fontsiz rightcontent">Մեզ մոտ տեղեկատվության գատնիությունը երաշխավորված է</h5>
                        </div>
                    </div>
                </div>
                <div class="col s12 unicalinfo">
                    <div class="row">
                        <div class="iconbox col s2">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <div class="col s10">
                            <h5 class="freeconsult fontsiz rightcontent">Նախնական բիզնես անալիտիկա Ձեր պատվերի համար</h5>
                        </div>
                    </div>
                </div>
                <div class="col s12 unicalinfo">
                    <div class="row">
                        <div class="iconbox col s2">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="col s10">
                            <h5 class="bwrous fontsiz rightcontent">Ինդիվիդուալ մոտեցում յուրաքանչյուր պատվերի համար</h5>
                        </div>
                    </div>
                </div>
                <div class="col s12 unicalinfo">
                    <div class="row">
                        <div class="iconbox col s2">
                            <i class="fas fa-wifi"></i>
                        </div>
                        <div class="col s10">
                            <h5 class="bwrous fontsiz rightcontent">Դուք կարող եք հետևել Ձեր պատվեր կատարմանը առցանց</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<div id="about-header" class="titlesection" style="border-bottom: 3px solid #8cd7ca; border-top: 3px solid #8cd7ca; margin-top: 30px; ">
    <canvas id="demo-canvas" class="titlecanvas"></canvas>
    <h2 class="center"><span>Մեր Պրեզենտացիան</span></h2>
</div>
<section id="prezzi" style="position: relative; height: 500px;">
    <div class="preziram">
    </div>
    <a href="https://prezi.com/view/ojL9Z3O2JzQD2FOWt3JZ" target="_blank" id="btnplay">
        <svg version="1.1" id="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="100px" width="100px"
             viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
  <path class="stroke-solid" fill="none" stroke="#32419e"  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
    C97.3,23.7,75.7,2.3,49.9,2.5"/>
            <path class="stroke-dotted" fill="none" stroke="#32419e"  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
    C97.3,23.7,75.7,2.3,49.9,2.5"/>
            <path class="icon" fill="#32419e" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
</svg>
    </a>
</section>
<div id="about-header" class="titlesection" style="border-bottom: 3px solid #8cd7ca; border-top: 3px solid #8cd7ca; margin-top: 10px; ">
    <canvas id="demo-canvas" class="titlecanvas"></canvas>
    <h2 class="center"><span>Մեր Սերտիֆիկատները</span></h2>
</div>
<section id="certificate">
    <div class="row">
        <div class="col s12 m6 container">
            <div class="mag">
                <img data-toggle="magnify" src="/views/assets/images/Tigran-Gyokchakyan-151387-424x600.jpg" alt="Տիգրան Գյոկչակյան Վորդպրես">
            </div>
            <a class="btn-large waves-effect waves-block waves-light no-margin white-text morebtn btn-about"
               href="https://sertificat.templatemonster.ru/certification/tigran-gyokchakyan-151387/"
               target="_blank">Դիտել Կայքում</a>
        </div>
        <div class="col s12 m6 container">
            <div class="mag">
                <img data-toggle="magnify" src="/views/assets/images/Tigran-Gyokchakyan-151363-424x600.jpg" alt="Տիգրան Գյոկչակյան ՀՏՄԼ/ՑՍՍ">
            </div>

            <a class="btn-large waves-effect waves-block waves-light no-margin white-text morebtn btn-about"
               href="https://sertificat.templatemonster.ru/certification/tigran-gyokchakyan-151363/"
               target="_blank">Դիտել Կայքում</a>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/easing/EasePack.min.js" async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenLite.min.js" async defer></script>
<script type="text/javascript" src="/views/assets/js/titlejs.min.js" async defer></script>
<!-- add footer -->
<?php require_once 'footer.php';?>
