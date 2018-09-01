<div class="fixed-action-btn">
    <a class="btn-floating btn-large reder pulse modal-trigger" href="#callmod"><i class="fas fa-phone-volume"></i></a>
</div>
<a class="btn-floating reder btn-large pulse modal-trigger contactformicon" href="#connect"><i class="far fa-comment-alt"></i></a>

<!-- Modal Trigger -->
<a class="waves-effect waves-light btn modal-trigger freecons" href="#connect">ԱՆՎՃԱՐ ԽՈՐՀՐԴԱՏՎՈՒԹՅՈՒՆ</a>

<!-- Modal Structure -->
<div id="callmod" class="modal">
    <div class="modal-content">
        <div class="row">
            <form action="" method="post" class="col s12 ">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="callname"  name="callname" type="text" class="validate" required/>
                        <label for="callname">Անուն</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">phone</i>
                        <input id="calltel" name="calltel" type="tel" class="validate" required/>
                        <label for="calltel">Հեռ։</label>
                    </div>
                </div>
                <input class="waves-effect waves-light btn callsend" type="submit" name="callsend" value="Պատվիրել">
            </form>
        </div>
    </div>
</div>


<!-- Modal Structure -->
<div id="connect" class="modal bottom-sheet connectmod">
    <div class="modal-content">
        <div class="row">
            <form action=""  method="post" class="col s12 ">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="namemod" name="namemod" type="text" class="validate" required/>
                        <label for="namemod">Ձեր Անուն</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">phone</i>
                        <input id="telmod" name="telmod" type="tel" class="validate" required/>
                        <label for="telmod">Հեռ։</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input id="emailmod" name="emailmod" type="email" class="validate" required/>
                        <label for="emailmod">Էլ․ հասցե</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea id="messagemod" name="messagemod" class="materialize-textarea" required/></textarea>
                        <label for="messagemod">Նկարագրություն</label>
                    </div>
                </div>
                <input class="waves-effect waves-light btn freeconss" type="submit" name="freeconss" value="Հաստատել">
            </form>
        </div>
    </div>
</div>
<footer>
    <div class="foot">
        <p class="center">Դիզայնը և Կայքը պատրաստվել է Through-IT Creative Studio-ի Կողմից</p>
        <p class="center">© 2017-2018թթ</p>
    </div>
</footer>

<script src="/views/assets/js/owl.carousel.min.js" async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js" async defer></script>
<script src="/views/assets/js/script.js" async></script>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript' async defer>
    (function () {
        var widget_id = 'OPRamE8qzm';
        var d = document;
        var w = window;

        function l() {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//code.jivosite.com/script/widget/' + widget_id;
            var ss = document.getElementsByTagName('script')[0];
            ss.parentNode.insertBefore(s, ss);
        }

        if (d.readyState == 'complete') {
            l();
        } else {
            if (w.attachEvent) {
                w.attachEvent('onload', l);
            } else {
                w.addEventListener('load', l, false);
            }
        }
    })();
</script>
<!-- {/literal} END JIVOSITE CODE -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter49515139 = new Ya.Metrika2({
                    id:49515139,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49515139" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>