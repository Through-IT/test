<?php
$pagetitle = 'Հետադարձ Կապ | Through-IT Creative Studio';
$pagekey = 'Հետադարձ Կապ, Ինչպես կապնվել մեզ հետ, Մեզ Կարող եք գտնել այստեղ, Կայքերի պատրաստում, Պատվիրել կայք, Գնացուցակ, Փաթեթներ';
$pagedesc = 'Վեբ կայքերի պատրաստում և առաջխաղացում, Սոցիալական Ցանցերում առաջխաղացում, Բոտերի պատրաստում, Բջջ․ հավելվածների պատրաստում, Վեբ դիզայն, Բրենդինգ';
require_once 'header.php';
?>
<div class="all_pages">
    <div class="row contain">
        <br/>
        <div class="col s12 m12 l8">
            <div class="container">
                <h5 style="text-align: center; font-family: Bernard MT Condensed; font-size: 30px; margin-top: 15px;">Հետադարձ Կապ</h5>
                <form action="" method="post">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="name" id="name" class="validate" required/>
                            <label for="name">Ձեր Անունը</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">email</i>
                            <input type="text" name="email" id="email" class="validate" required/>
                            <label for="email">Էլ․ հասցե</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">phone</i>
                            <input type="tel" name="telephone" id="telephone" class="validate" required/>
                            <label for="telephone">Հեռ։</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="message" name="message" class="materialize-textarea"></textarea>
                            <label for="message">Նկարագրություն</label>
                        </div>
                    </div>
                    <input class="waves-effect waves-light btn" name="contact" type="submit" value="Պատվիրել">
                </form>
            </div>
        </div>

        <div class="col s12 m12 l4 ">
            <div class="containerkap">
            <div class="row" style="margin-top: 80px;">
                <div class="col s12">
                    <h5 class="contecmy">Ինչպես կապնվել մեզ հետ</h5>
                    <br>
                    <b style="font-size: 18px;">Հեռ․</b> <i class="material-icons md-59" style="font-size: 15px; margin-left: 15px;">phone</i> +374-55-87-87-86
                    <br/>
                    <br>
                    <b style="font-size: 18px;">Էլ․ Հասցե</b><i class="material-icons" style="font-size: 15px; margin-left: 15px;">email</i> info@through-it.com
                    <br/>
                </div>
            </div>
            <div class="containe">
                <div class="contact_images">
                    <div class="social">
                        <a class="waves-effect waves-light btn-floating" href="https://www.facebook.com/ThroughITCreativeWebStudio/" target="_blank">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a class="waves-effect waves-light btn-floating" href="https://www.messenger.com/t/ThroughITCreativeWebStudio" target="_blank">
                            <i class="fab fa-facebook-messenger"></i>
                        </a>
                        <a class="waves-effect waves-light btn-floating" href="https://www.instagram.com/through._.it/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="waves-effect waves-light btn-floating" href="https://twitter.com/ThroughITstudio" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="waves-effect waves-light btn-floating" href="skype:Through -IT?chat">
                            <i class="fab fa-skype"></i>
                        </a>
                    </div>
                </div>
                <br>
            </div>

            </div>
        </div>
    </div>

    <h2 class="center titleinfohome"><span>Մեզ Կարող եք գտնել այստեղ</span></h2>
    <div id="map"></div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBDziqOIhSRQtTr2nGPzwCiTOt76BtDUo&callback=initMap"
            async defer></script>
    <!-- add footer -->
<?php require_once 'footer.php'; ?>