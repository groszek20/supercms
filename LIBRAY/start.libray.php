﻿<?php
//line was to long, false should be lower case
$meta = new MetaTags(
    $_GET['page'],
    false,
    false,
    false,
    false,
    false,
    false,
    false,
    false,
    false,
    false,
    false,
    false,
    false,
    false,
    false,
    false,
    'screen',
    'icon',
    'jQuery,script,jquery.localscroll-1.2.5,coda-slider,jquery.scrollTo-1.3.3,jquery.serialScroll-1.2.1'
);

echo<<<PL
<body>
PL;

if (isset($_SESSION['logged']) !== true) {
    AddonLoader::load("LoginSlider");
}

echo<<<PL
<div id="header">
PL;

ModuleLoader::load("LoginForm");
ModuleLoader::load("Menu");

echo '</div>';

ModuleLoader::load("Slogan");

echo<<<PL
<div id="main">
<div class="content">
<div class="column">
PL;

ModuleLoader::load("BoxWstep");
ModuleLoader::load("BoxFirma");

echo '</div>';

ModuleLoader::load("BoxRight");

echo<<<PL
        </div>
    </div>
    
PL;
ModuleLoader::load("Footer");

echo<<<PL
     
</body>
</html>

PL;
//niepotrzebny symbol zakończenia pliku php
