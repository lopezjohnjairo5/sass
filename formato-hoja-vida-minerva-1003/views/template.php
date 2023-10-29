<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/main.css">
    <title>Generador de hoja de vida</title>
</head>
<body id="container">
    <nav id="navbar">
        <ul>
            <li>uno</li>
            <li>dos</li>
            <li>tres</li>
            <li>cuatro</li>
            <li>cinco</li>
        </ul>
    </nav>
    <section id="minerva-template">
        <section id="header-minerva">
            <header>
                <h1>HOJA DE VIDA</h1>
                <h4>PARA SOLICITUD DE EMPLEO</h4>
            </header>
            <div id="header-info">
                <div id="date-info">
                    <span>Fecha</span>
                    <div id="date-input">
                        <input id="day-info-form" type="number" min="1" max="31" placeholder="D">
                        <input id="month-info-form" type="number" min="1" max="12" placeholder="M">
                        <input id="year-info-form" type="number" min="<?php echo date("Y");?>" max="<?php echo date("Y")+100;?>" placeholder="A">
                    </div>
                </div>
                <div id="new-job-info">
                    <span>Empleo o cargo en el que está interesado</span>
                    <input id="new-job-info-form" type="text" placeholder="">
                </div>
                <div id="cod-job-info">
                    <span>Código cargo</span>
                    <input id="cod-job-info-form" type="text" placeholder="">
                </div>
            </div>
        </section>
        <section id="general-info">
            <header id="header-info" class="principal-header">
                <h2>I. INFORMACIÓN GENERAL</h2>
                <span>(*) Respuesta opcional</span>
            </header>
            <div id="content-general-info">
                <div id="input-content-general-info">
                    <label for="last-name-content-general-info">
                        <span>Apellido(s) del aspirante</span>
                        <input type="text" id="last-name-content-general-info" ></input>
                    </label>
                    <label for="name-content-general-info" class="border-left">
                        <span>Nombre(s) del aspirante</span>
                        <input type="text" id="name-content-general-info"></input>
                    </label>
                    <label for="address-content-general-info">
                        <span>Dirección domicilio / Barrio</span>
                        <input type="text" id="address-content-general-info"></input>
                    </label>
                    <label for="city-content-general-info" class="border-left">
                        <span>Ciudad</span>
                        <input type="text" id="city-content-general-info"></input>
                    </label>
                    <label for="phone-content-general-info">
                        <span>Teléfono</span>
                        <input type="text" id="phone-content-general-info"></input>
                    </label>
                    <label for="mobile-content-general-info" class="border-left">
                        <span>No. Celular</span>
                        <input type="text" id="mobile-content-general-info"></input>
                    </label>
                    <label for="email-content-general-info">
                        <span>Correo electrónico</span>
                        <input type="text" id="email-content-general-info"></input>
                    </label>
                    <label for="country-content-general-info" class="border-left">
                        <span>Nacionalidad</span>
                        <input type="text" id="country-content-general-info"></input>
                    </label>
                    <label for="profession-content-general-info">
                        <span>Profesión, ocupación u oficio</span>
                        <input type="text" id="profession-content-general-info"></input>
                    </label>
                    <label for="civil-status-content-general-info" class="border-left">
                        <span>(*) Estado civil</span>
                        <input type="text" id="civil-status-content-general-info"></input>
                    </label>
                    <label for="years-experience-content-general-info">
                        <span>Años de experiencia laboral</span>    
                        <input type="text" id="years-experience-content-general-info"></input>
                    </label>
                </div>
                <div id="photo-content-general-info">
                    <img id="preview-photo-general-info" src="./public/imgs/default_img.png" alt="no se encuentras">
                    <!--
                    <canvas id="preview-photo-general-info">
                    </canvas>
                    -->
                </div>
            </div>
            <div id="doc-general-info">
                <header>
                    <h4>DOCUMENTACIÓN</h4>
                    <span>(*) Respuesta opcional</span>
                </header>
                <div id="text-doc-general-info">
                    <label for="nit-text-doc-general-info">
                        <span>Cédula de ciudadania</span>
                        <input type="checkbox" id="nit-text-doc-general-info">
                    </label>
                    <label for="nit-number-text-doc-general-info">
                        <span>N°</span>
                        <input type="text" id="nit-number-text-doc-general-info">
                    </label>

                    <label for="military-card-text-doc-general-info">
                        <span>(*) Libreta militar N°</span>
                        <input type="text" id="military-card-text-doc-general-info">
                    </label>
                    <label for="first-class-text-doc-general-info">
                        <span>Primera clase:</span>
                        <input type="checkbox" id="first-class-text-doc-general-info">
                    </label>
                    
                    <label for="external-text-doc-general-info">
                        <span>Extranjeria:</span>
                        <input type="checkbox" id="external-text-doc-general-info">
                    </label>
                    <label for="issued-text-doc-general-info">
                        <span>Expedida en:</span>
                        <input type="text" id="issued-text-doc-general-info">
                    </label>

                    <label for="district-text-doc-general-info">
                        <span>Distrito N°</span>
                        <input type="text" id="district-text-doc-general-info">
                    </label>
                    <label for="second-class-text-doc-general-info">
                        <span>Segunda clase:</span>
                        <input type="checkbox" id="second-class-text-doc-general-info">
                    </label>

                    <label for="professional-card-text-doc-general-info">
                        <span>Tarjeta profesional N°</span>
                        <input type="text" id="professional-card-text-doc-general-info">
                    </label>

                    <div id="vehicle-general-info">
                        <span>¿Tiene vehículo?</span>
                        <label for="yes-car-text-doc-general-info">
                            <span>Si</span>
                            <input type="radio" name="vehicle-text-doc-general-info" id="yes-car-text-doc-general-info">
                        </label>
                        <label for="no-car-text-doc-general-info">
                            <span>No</span>
                            <input type="radio" name="vehicle-text-doc-general-info" id="no-car-text-doc-general-info">
                        </label>
                    </div>
                    
                    <label for="license-text-doc-general-info">
                        <span>Licencia de conducción N°</span>
                        <input type="text" id="license-text-doc-general-info">
                    </label>
                    <label for="category-drive-text-doc-general-info">
                        <span>Categoria</span>
                        <input type="text" id="category-drive-text-doc-general-info">
                    </label>

                </div>
            </div>
        </section>
        <section id="personal-info">
            <header>
                <h2>II. INFORMACIÓN PERSONAL</h2>
            </header>
            <div id="content-personal-info">
                <div id="work-content-personal-info">
                    <span>¿Está trabajando actualmente?</span>
                    <label for="work-yes-content-personal-info">
                        <span>Si</span>
                        <input type="radio" id="work-yes-content-personal-info">
                    </label>
                    <label for="work-no-content-personal-info">
                        <span>No</span>
                        <input type="radio" id="work-no-content-personal-info">
                    </label>
                </div>
                <label for="bussines-personal-info">
                    <span>¿En qué empresa?</span>
                    <input type="text" id="bussines-personal-info">
                </label>
                <div>

                </div>
            </div>
        </section>
    </section>
    
</body>
</html>