<div class="container-fluid">
    <h2>Entre em Contato</h2>
</div>

<form action="<?php echo URL ?>enviaremail" method="POST" class="formulario">
    <div class="bloco1">
        <div>
            <h5 class="titulo">Envie-nos uma menssagem</h5>
            <p class="descricao">Em caso de alguma dúvida nos envie uma mensagem para que possamos esclarecê-la
            </p>

        </div>

        <div class="itens">
            <div class="item left">
                <label for="">Assunto:</label>
                <input type="text" name="assunto" required>
            </div>
            <div class="item ">
                <label for="">Nome:</label>
                <input type="text" name="nome" required>
            </div>
            <div class="item left" >
                <label for="">Endereço E-mail:</label>
                <input type="email" name="email" required>
            </div>
            <div class="item">
                <label for="">Numero de Celular: </label>
                <input type="tel" name="telefone" required>
            </div>
        </div>
        <div class="message">
            <label for="">Mensagem: </label>
            <textarea name="msg" id="" cols="8" rows="1" required></textarea>
        </div>
        <div class="container-button">
            <input type="submit" class="button" name="Enviar" required>
        </div>
    </div>
    <div class="bloco2">
        <div>
            <h5 class="titulo">Nos ligue</h5>
            <p class="descricao">Ligue para a maior escola escola técnica do vale do paranhana e agende a sua visita.
            </p>
            <div class="icon">
                <i class="ph ph-phone"></i>
                <a>(51) 3542-1309</a>
            </div>
        </div>
        <div>
            <h5 class="titulo">Nos Visite</h5>
            <p class="descricao">Visite a maior escola técnica do Vale do Paranhana
            </p>
            <div class="icon">
                <i class="ph ph-map-pin"></i>
                <a>R. Guilherme Lahm, 1778 - Jardim do Prado, Taquara - RS, 95600-000</a>
            </div>


        </div>
    </div>
</form>


<div class="mapa">
    <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
        <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
        <script>(function () {
                var setting = { "height": 383, "width": 954, "zoom": 17, "queryString": "R. Guilherme Lahm, 1778 - Jardim do Prado, Taquara - RS, 95600-000, Brasil", "place_id": "ChIJZSvm5-AYGZURgpoDxqsjYDU", "satellite": false, "centerCoord": [-29.647958409038853, -50.785375949999995], "cid": "0x356023abc6039a82", "lang": "pt", "cityUrl": "/brazil/gramado-16977", "cityAnchorText": "", "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3", "embed_id": "921711" };
                var d = document;
                var s = d.createElement('script');
                s.src = 'https://1map.com/js/script-for-user.js?embed_id=921711';
                s.async = true;
                s.onload = function (e) {
                    window.OneMap.initMap(setting)
                };
                var to = d.getElementsByTagName('script')[0];
                to.parentNode.insertBefore(s, to);
            })();</script><a href="https://1map.com/pt/map-embed">1 Map</a>
    </div>
</div>