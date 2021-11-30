<?php

$content = file_get_contents('https://docs.google.com/document/d/e/2PACX-1vRM-XKGcMlS_ucnOPwm_ysEQ8WNx4G6P4WH17VO5v3OI1Dyoek-1LIkFyJIQpyGaCUaZOdggyVF8lQ-/pub?embedded=true');
$content = file_get_contents('contract.html');

?>

<html lang="es-ES">
<head>
    <title>Contratación Auténtica España</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cuéntanos tu pasión por tu casa rural.">
    <link rel="stylesheet" href="/css/main.css?20210818">
    <script defer
            src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="apple-touch-icon" sizes="180x180"
          href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
          href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
          href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>

<body>

<section class="section hero is-size-7">
    <div class="container">
        <div class="field ">
            <div class="field-label is-normal">

            </div>
            <div class="field-body">
                <div class="field">

                    <div class="logo">
                        <img src="logo.svg" style="max-width: 90px"
                             alt="AuténticaEspaña.es"/>
                    </div>
                    <h1 class="title">Contratación Auténtica España</h1>
                </div>
            </div>
        </div>
        <form id="autentica-espana-contract" class="form"
              action="https://formspree.io/f/mbjqpkpz" method="POST">
            <div class="columns">
                <div class="column">
                    <div class="field ">
                        <label class="label is-normal">Nombre<span
                                    class="has-text-danger"> *</span></label>

                        <div class="control">
                            <input class="input" name="given_name" type="text"
                                   required="required">
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field ">
                        <label class="label is-normal">Apellido(s)<span
                                    class="has-text-danger"> *</span></label>

                        <div class="field">
                            <input class="input" name="surname" type="text"
                                   required="required">
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field ">
                        <label class="label is-normal">NIF/NIE<span
                                    class="has-text-danger">*</span></label>

                        <div class="field">
                            <input class="input" name="nif_nie" type="text"
                                   required="required">
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="field ">
                        <label class="label is-normal">E-mail<span
                                    class="has-text-danger">*</span></label>

                        <div class="field">
                            <input class="input" name="email" type="email"
                                   required="required">
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field ">
                        <label class="label is-normal">Teléfono<span
                                    class="has-text-danger">*</span></label>
                        <input class="input" name="phone" type="phone"
                               required="required">
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label class="label is-normal">Empresa</label>

                        <input class="input" name="company" type="text">
                    </div>
                </div>

                <div class="column">

                    <div class="field ">
                        <label class="label is-normal">CIF</label>

                        <div class="field">
                            <input class="input" name="company_cif" type="text">
                        </div>
                    </div>
                </div>
            </div>


            <div class="field ">

                        <div class="columns">

                            <div class="column">
                                <label class="label">Nombre Casa</label>
                                <div class="control">
                                    <input class="input" type="text"
                                           name="accommodation_1_name"
                                           required="required">
                                </div>
                                <br>
                                <div class="control">
                                    <input class="input" type="text"
                                           name="accommodation_2_name">
                                </div>
                                <br>
                                <div class="control">
                                    <input class="input" type="text"
                                           name="accommodation_3_name">
                                </div>
                            </div>
                            <div class="column">
                                <label class="label">Nº de Licencia</label>
                                <div class="control">
                                    <input class="input" type="text"
                                           name="accommodation_1_licence"
                                           required="required">
                                </div>

                                <br>
                                <div class="control">
                                    <input class="input" type="text"
                                           name="accommodation_2_licence">
                                </div>

                                <br>
                                <div class="control">
                                    <input class="input" type="text"
                                           name="accommodation_3_licence">
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="conditions">

                          <?php print str_replace([
                            '<body>',
                            '</body>',
                            '<html>',
                            '</html>',
                          ], '', $content); ?>
                        </div>

        </form>
        <div class="seperator"></div>
        <div class="columns">
            <div class="column">
                <label class="label">Fecha:</label>
            </div>

            <div class="column">
                <label class="label">Firma:</label>
            </div>
        </div>
    </div>
</section>
</body>
</html>
