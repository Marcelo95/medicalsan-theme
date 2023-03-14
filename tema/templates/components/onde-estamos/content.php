<?php if ($args["first_run"]) : ?>
    <link rel="stylesheet" href="<?php _e(asset(sprintf("../templates/components/%s/style.css", basename(__DIR__)))); ?>">

<?php endif; ?>

<?php
$relative_path = get_template_directory_uri() . str_replace(get_theme_root() . '/' . str_replace('%2F', '/', rawurlencode(get_template())), "", __DIR__);



?>

<section class="mapa-de-estados">
   <div class="chamadas">
   <h1>Onde tem assistência técnica Medical San?</h1>
    <h2>A Medical San possui ampla rede de assistência técnica pelo Brasil. </h2>

    <h3>Encontre a mais próxima de você:</h3>
   </div>

    <div class="box-mapa-e-enderecos">
        <div class="init-mapa-estados">

        <?php echo file_get_contents( $relative_path . "/images/mapa.svg" ); ?>
        </div>


        <div class="lista-enderecos">

            <div class="seletor-estados">
                <select id="seletor">[
                    <option value="">Selecione um estado</option>
                    <option value="estado-ac">AC</option>
                    <option value="estado-al">AL</option>
                    <option value="estado-ap">AP</option>
                    <option value="estado-am">AM</option>
                    <option value="estado-ba">BA</option>
                    <option value="estado-ce">CE</option>
                    <option value="estado-df">DF</option>
                    <option value="estado-es">ES</option>
                    <option value="estado-go">GO</option>
                    <option value="estado-ma">MA</option>
                    <option value="estado-mt">MT</option>
                    <option value="estado-ms">MS</option>
                    <option value="estado-mg">MG</option>
                    <option value="estado-pa">PA</option>
                    <option value="estado-pb">PB</option>
                    <option value="estado-pr">PR</option>
                    <option value="estado-pe">PE</option>
                    <option value="estado-pi">PI</option>
                    <option value="estado-rj">RJ</option>
                    <option value="estado-rn">RN</option>
                    <option value="estado-rs">RS</option>
                    <option value="estado-ro">RO</option>
                    <option value="estado-rr">RR</option>
                    <option value="estado-sc">SC</option>
                    <option value="estado-sp">SP</option>
                    <option value="estado-se">SE</option>
                    <option value="estado-to">TO</option>
                </select>
            </div>

            <div class="estados-carregados ">

                <div class="estado-ap">
                    <h2>AMAPÁ (AP)</h2>

                    <b>MEDTRONIX</b><br>
                    Endereço: R. Anajás nº 383. Bairro: Infraero <br>
                    CEP: 68908-899 <br>
                    Telefone: 96 9119-1041 / (96) 4141-1020 <br><br>
                </div>

                <div class="estado-am">
                    <h2>AMAZONAS (AM)</h2>
                    <b>MP ASSISTÊNCIA TÉCNICA</b><br>
                    Endereço: Rua Rio Javari, 14 – QD 33, Nossa Senhora das Graças, Manaus- AM. <br>
                    CEP: 69053-110 <br>
                    Telefone: (92) 98196-8187 / (92) 3348-3990 <br><br>
                </div>

                <div class="estado-ba">
                    <h2>BAHIA (BA)</h2>
                    <b>ASTERMAN</b><br>
                    Endereço: Rua do Bangala, 34, Nazaré, Salvador/BA <br>
                    CEP: 40040-140 <br>
                    Telefone: (71) 99268-1650 <br><br>
                </div>

                <div class="estado-ce">
                    <h2>CEARÁ (CE)</h2>
                    <b>AVANTEC</b><br>
                    Endereço: Rua Paula Rodrigues 260 sala 02 bairro de Fátima, Fortaleza-CE <br>
                    CEP: 60411-270 <br>
                    Telefone: (85) 9969 64746<br>

                    <b>TOTAL DERM</b><br>
                    Endereço: Rua Chico Lemos, 566, Cidade dos Funcionários – Fortaleza/CE <br>
                    CEP: 60822-780 <br>
                    Telefone: (85) 98778-3278 <br><br>
                </div>

                <div class="estado-es">
                    <h2>ESPÍRITO SANTO (ES)</h2>
                    <b>W A ELETRÔNICA.</b><br>
                    Endereço: Av. Luciano das Neves, 1039, Centro, Vila Velha – ES <br>
                    Telefone: (27) 99966-7321 <br><br>
                    <b>SILMED</b><br>
                    Endereço: Av Jerônimo Monteiro, 1690, Loja 14M, Centro – Vila Velha/ES <br>
                    CEP: 29100-902 <br>
                    Telefone: (27) 99947-8889 <br><br>
                </div>

                <div class="estado-go">
                    <h2>GOIÁS (GO)</h2>
                    <b>NEW SOLUTION</b> <br>
                    Rua: E quadra, n. 150 – 14, lote 05, setor campinas. Goiânia-GO <br>
                    CEP: 74523040 <br>
                    Telefone: (62) 98506-7905<br> <br>
                </div>

                <div class="estado-mt">

                    <h2>MATO GROSSO (MT)</h2>

                    <b>MEDTECH</b><br>
                    Endereço: Rua Coronel João Lourenço de Figueiredo, 15, Jardim Tropical – Cuiabá/MT <br>
                    CEP: 78065-100 <br>
                    Telefone: (65) 99930-3554 <br><br>

                </div>

                <div class="estado-mg">
                    <h2>MINAS GERAIS (MG)</h2>

                    <b>ALICATE DE OURO</b><br>
                    Endereço: Rua Padre Caldeira, 334, centro – Patos de Minas/MG <br>
                    CEP: 38700-044 <br>
                    Telefone: (34) 99692-5768 <br><br>

                    <b>STETIC SOLUTION</b> <br>
                    Endereço: Rua Major Delfino de Paula, 1200, São Francisco – Belo Horizonte/MG – CEP 31255-170<br>
                    Telefone: (31) 97307-8723 <br><br>

                    <b>TECHMANAGER</b><br>
                    Endereço: Rua Olegário Maciel, 2175, sala 202, Paineiras – Juiz de Fora/MG <br>
                    CEP: 36.016-011 <br>
                    Telefone: (32) 4141-1912 <br><br>
                </div>

                <div class="estado-pr">

                    <h2>PARANÁ (PR)</h2>
                    <b>ARKTUS</b><br>
                    Endereço: Rua Antonio Victor Maximiano, 107 – Bloco A, Parque Industrial Ii – Santa Tereza Do Oeste/PR <br>
                    CEP: 85825-000 <br>
                    Telefone: (45) 99809-7568 <br><br>

                    <b>BVTECH</b><br>
                    Endereço: Rua Engenheiro Niepce da Silva, 79, Portão – Curitiba/PR <br>
                    CEP: 80610-280 <br>
                    Telefone: (41) 99920-1695 / (41) 3122-5500 <br><br>

                    <b>HECTRON</b><br>
                    Endereço: Av Duque de Caxias, 526, Sala 01, Erotildes – Londrina/PR <br>
                    CEP: 86015-000 <br>
                    Telefone: (43) 99690-1465 <br><br>

                    <b>MAXTEC</b><br>
                    Endereço: Rua Castro Alves, 58, Vila Carraro – Mandaguaçu/PR <br>
                    CEP: 87160-000 <br>
                    Telefone: (44) 3245-2338 <br><br>

                    <b>MED MART</b><br>
                    Endereço: AV Presidente Getúlio Vargas, 784, Rebouças – Curitiba/PR <br>
                    CEP: 80230-030 <br>
                    Telefone: (41) 99841-0484 <br><br>

                    <b>VIVER EQUIPAMENTOS MÉDICOS</b><br>
                    Endereço: Rua Elvira Faiten Franz, 240, Bairro Canadá – Cascavel/PR <br>
                    Telefones: (45) 3038-9080 e (45) 98819-4233 <br><br>

                    <b>WSJ EQUIPAMENTOS</b><br>
                    Endereço: Rua Brigadeiro Rocha, 2888, Centro – Guarapuava/PR <br>
                    CEP: 85010-210 <br>
                    Telefone: (42) 99117-8454 <br><br>
                </div>

                <div class="estado-pi">
                    <h2>PERNAMBUCO (PE)</h2>
                    <b>AUTENTIK EQUIPAMENTOS</b><br>
                    Endereço: AV. Ayrton Senna Da Silva, 2198, Piedade – Jaboatão Guararapes/PE – CEP: 54410-240 <br>
                    Telefone: (81) 99851-2475 <br><br>
                    <b>JMED</b><br>
                    Endereço: Rua do Paissandu, 340, São Francisco – Caruaru/PE <br>
                    CEP: 55006-140 <br>
                    Telefone: (81) 99922-4982 <br><br>


                </div>
                <div class="estado-pi">
                    <h2>PIAUÍ (PI)</h2>


                    <b>C.I ELETRÔNICA</b><br>
                    Endereço: Rua Arlindo Nogueira, 655A, Centro, Teresina/PI <br>
                    Cep: 64000-290 <br>
                    Telefone: (86) 99915-4575 <br><br>

                </div>

                <div class="estado-rj">
                    <h2>RIO DE JANEIRO (RJ)</h2>
                    <b>MSP ASSISTÊNCIA TÉCNICA</b><br>
                    Endereço: Rua Luiz Alves Pereira, 115, Sala 708, Aterrado – Volta Redonda/RJ <br>
                    CEP: 27213-140 <br>
                    Telefone: (24) 98115-8117 <br><br>

                    <b>NOVA ENGENHARIA</b><br>
                    Endereço: AV Embaixador Abelardo Bueno 3330, sala 912, Barra da Tijuca – Rio de Janeiro/RJ <br>
                    CEP: 22775-040 <br>
                    Telefone: (21) 97307-9809 <br><br>
                </div>

                <div class="estado-rs">

                    <h2>RIO GRANDE DO SUL (RS)</h2>
                    <b>BIO CARE</b><br>
                    Endereço: Rua Uruguai, 431, Centro – Passo Fundo/RS <br>
                    CEP: 99010-110 <br>
                    Telefone: (54) 99157-0886 <br><br>

                    <b>POINT SULMED</b><br>
                    Endereço: Rua Miguel Vargas, 1098, Boqueirão – Passo Fundo/RS <br>
                    CEP: 99025-380 <br>
                    Telefone: (54) 99620-8543 <br><br>

                    <b>TECCLIN</b><br>
                    Endereço: Rua Luiz Poletto, 43, sala 01, Cruzeiro – Caxias do Sul/RS <br>
                    CEP: 95074-060 <br>
                    Telefone: (54) 99108-0051 <br><br>
                </div>
                <div class="estado-ro">

                    <h2>RONDÔNIA (RO)</h2>

                    <b>BIG/ J.A</b><br>
                    Endereço: Rua Treze de Setembro, 1568, Areal – Porto Velho/RO <br>
                    CEP: 76804-290 <br>
                    Telefone: (69) 99231-1835 <br><br>

                </div>

                <div class="estado-sc">

                    <h2>SANTA CATARINA (SC)</h2>
                    <b>ASSISTEC</b><br>
                    Endereço: Rua Antonio Jasper, 1170, porta A, Porto Grande – Araquari/SC <br>
                    CEP: 89245-000 <br>
                    Telefone: (47) 9172-6291 <br><br>

                    <b>AT ASSISTECH</b><br>
                    Endereço: Rua Vidal Pereira Alves, 209, Lomba – Orleans/SC <br>
                    CEP: 88870-000 <br>
                    Telefone: (48) 99679-8683 <br><br>

                    <b>HUBERMED</b><br>
                    Endereço: Rua Alfredo Gunther, 94, Vila Nova – Blumenau/SC <br>
                    CEP: 89030-108 <br>
                    Telefone: (47) 98483-1331 <br><br>

                    <b>LEGUS EQUIPAMENTOS</b><br>
                    Endereço: Rua Bento Francisco, 1416, São Miguel – Biguaçu/SC <br>
                    CEP: 88168-096 <br>
                    Telefone: (48) 98805-6625 <br><br>

                    <b>MICROTEC</b><br>
                    Endereço: Rua Pomerode, 1912, Salto Do Norte – Blumenau/SC <br>
                    CEP: 89065-301 <br>
                    Telefone: (47) 99123-5653 <br><br>

                    <b>RENTALMED</b><br>
                    Endereço: Rodovia José Carlos Daux (SC 401), 5025 b – Loja 18, Saco Grande – Florianópolis/SC <br>
                    CEP: 88032-700 <br>
                    Telefone: (48) 99655-9182 <br><br>
                </div>

                <div class="estado-sp">

                    <h2>SÃO PAULO (SP)</h2>
                    <b>BIOTEC – Santa Fé do Sul</b><br>
                    Endereço: Rua Seis, 1788, Jardim Primavera – Santa Fé do Sul/SP <br>
                    CEP: 15775-000 <br>
                    Telefone: (17) 99728-5347 <br><br>

                    <b>BIOTEC – São José dos Rio Preto</b><br>
                    Endereço: Rua Lázaro de Camargo Enke, 1930 Sala 3, Jardim Alvorada – São José dos Rio Preto/SP <br>
                    CEP 15020-080 <br>
                    Telefone: (17) 98135-7737 <br><br>

                    <b>BIOTEC – Sorocaba</b><br>
                    Endereço: AV Antônio Carlos Comitre, 510 – Sala 81, Parque Campolim – Sorocaba/SP <br>
                    CEP: 18047-620 <br>
                    Telefone: (17) 98135-7737 <br><br>

                    <b>DONATERA</b><br>
                    Endereço: Rua Serpentina, 665, casa 1, Jardim Fazenda Rincão – Arujá/SP <br>
                    CEP: 07428-320 <br>
                    Telefone: (11) 94500-9737 <br><br>

                    <b>GUEDES</b><br>
                    Endereço: Rua dos Buritis, 128, sala 407, Vila Parque Jabaquara – São Paulo/SP – CEP: 04321-000 <br>
                    Telefone: (11) 94762-0076 <br><br>
                    <b>MGV RAMAGA</b><br>
                    Endereço: AV Vereador Manir Calil, 374, F, Alto da Boa Vista – Ribeirão Preto/SP – CEP: 14025-170 <br>
                    Telefone: (16) 99120-7187 <br><br>
                    <b>MP ASSISTÊNCIA TÉCNICA</b><br>
                    Endereço: Rua Marcondes Salgado Quadra, 1771, Vila Cardia – Bauru/SP <br>
                    CEP: 17013-231 <br>
                    Telefone: (14) 99611-0750 <br><br>

                    <b>NIPPON LIFE</b><br>
                    Endereço: Rua Orquídea, 620, Jardim das Flores – Osasco/SP <br>
                    CEP: 06112-070 <br>
                    Telefone: (11) 95272-1162 <br><br>

                    <b>R2 LASER</b><br>
                    Endereço: AV Andrômeda, 3454, sala 06, Bosque dos Eucaliptos – São José dos Campos/SP <br>
                    CEP: 12233-001 <br>
                    Telefone: (12) 98195-7855 <br><br>

                    <b>R&P ASSISTÊNCIA TÉCNICA</b><br>
                    Endereço: Rua Professor João Santana, 460, Vila Bom Jesus – Itapeva/SP <br>
                    CEP: 18400-640 <br>
                    Telefone: (15) 99843-5381 <br><br>

                    <b>FISIO FERNANDES</b><br>
                    Endereço: Dona Luísa de Gusmão, 1783 - Vila Nogueira, Campinas - SP <br>
                    CEP: 13088-028 <br>
                    Telefone: (19) 3296-6071 <br><br>

                    <b>TECHSYSTEN</b><br>
                    Endereço: AV. Getúlio Vargas 16-20 B Bauru/SP <br>
                    CEP 17.017-339 <br>
                    Telefone: (14) 4101-4040 <br><br>

                </div>

                <div class="estado-se">
                    <h2>SERGIPE (SE)</h2>

                    <b>DT SMART</b><br>
                    Endereço: Rua Promotor Arquibaldo Mendonça, 388 , Suíssa – Aracaju/SE <br>
                    CEP: 49050-650 <br>
                    Telefone: (79) 99989-8780 <br><br>
                </div>

                <div class="estado-to">
                    <h2>TOCANTINS (TO)</h2>

                    <b>CEMHO DILLY</b><br>
                    Endereço: AV Lo 11, 12, Quadra 404, Plano diretor Sul – Palmas/TO <br>
                    CEP: 77021-640 <br>
                    Telefone: (63) 99113-5099 <br><br>

                </div>
            </div>

        </div>


    </div>


</section>

<script type="text/javascript">
    const selectElement = document.getElementById("seletor");

    selectElement.addEventListener("change", (event) => {
        const selectedValue = event.target.value;
        console.log(selectedValue);
        showState(selectedValue);

    });

    function showState(stateClass, elem) { 
        jQuery(".estados-carregados > div").hide();
        jQuery("." + stateClass).show();
        selectElement.value = stateClass;
        if(elem){
            jQuery(elem).parent().find("path").removeClass("active");
            jQuery(elem).addClass("active");
        } else {
            jQuery("#mapa path").removeClass("active");
            jQuery("#mapa path." + stateClass).addClass("active");
        }
        console.log(elem)
    }

    showState("estado-sp")
</script>










