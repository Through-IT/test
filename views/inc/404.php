<?php
header("HTTP/1.0 404 Not Found");
?>
<?php
/*page tittle edit*/
$pagetitle = 'Գոյութուն չունեցող էջ 404 | Through-IT Creative Studio';
$pagekey = 'Էջը գտնված չէ, Գոյութուն չունեցող էջ, Անհայտ էջ, Սխալ էջ';
$pagedesc = 'Վեբ կայքերի պատրաստում և առաջխաղացում, Սոցիալական Ցանցերում առաջխաղացում, Բոտերի պատրաստում, Բջջ․ հավելվածների պատրաստում, Վեբ դիզայն, Բրենդինգ';
require_once 'header.php';
?>
<style>
    footer {
        background-color: #323232;
        height: 140px;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>
<section id="errorpage">
    <h1>Էջը գտնված չէ 404</h1>
</section>
<!-- add footer -->
<?php require_once 'footer.php'; ?>

