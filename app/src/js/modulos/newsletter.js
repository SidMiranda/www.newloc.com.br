const newsletter = document.getElementById("newsletter");
if (newsletter) {
    (function geoLocalizacao() {
        var request = new XMLHttpRequest();
        request.open('GET', 'http://geoip.ativo.com/', true);

        request.onload = function () {
            if (this.status >= 200 && this.status < 400) {
                let data = JSON.parse(this.response);
                let cidade = data.cidade;
                let estado = data.estado_code;
                let pais = data.pais_code;
                document.getElementById('cidadeNewsletter').value = cidade;
                document.getElementById('estadoNewsletter').value = estado;
                document.getElementById('paisCadastro').value = pais;
            }
        };
        request.send();
    })();
    (function enviaNewsletter() {
        const form = newsletter.querySelector('form');
        form.addEventListener("submit", function (e) {
            e.preventDefault();
            let request = new XMLHttpRequest();

            const usuarioEmail = form.querySelector('#emailNewsletter').value;

            const origemDescricao = form.querySelector('#origemNewsletter').value;
            const origemUrl = form.querySelector('#origemURL').value;

            const origemId = form.querySelector('#siteOrigemNewsletter').value;

            const urlNewsletter = form.querySelector('#urlNewsletter').value;
            const newsOptin = form.querySelector('#optinNewsletter').value;

            request.open('POST', urlNewsletter);

            // request.setRequestHeader('Content-Type', 'application/json');

            request.onreadystatechange = function () {
                if (this.status === 200) {
                    form.classList.add("on");
                    setTimeout(function () {
                        form.classList.remove("on");
                    }, 5000);
                    form.querySelector('#nomeNewsletter').value = '';
                    form.querySelector('#emailNewsletter').value = '';
                } else {
                    form.classList.add("off");
                    setTimeout(function () {
                        form.classList.remove("off");
                    }, 5000);
                }
            };

            var body = {
                'usuario_nome': 'Esporte Social',
                'usuario_email': usuarioEmail,
                'origem_cidade': 'origemCidade',
                'origem_estado': 'origemEstado',
                'origem_pais': 'origemPais',
                'origem_pais_cadastro': 'origemPaisCadastro',
                'origem_descricao': origemDescricao,
                'origem_url': origemUrl,
                'origem_id': origemId,
                'news_optin': newsOptin
            };

            request.send(JSON.stringify(body));

        });
    }());
}