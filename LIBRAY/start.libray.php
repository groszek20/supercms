﻿<?php

$meta = new MetaTags($_GET['page'], FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, 
                     FALSE, FALSE, FALSE, FALSE, FALSE, "screen", "icon", 
                     "jQuery,script,jquery.localscroll-1.2.5,coda-slider,jquery.scrollTo-1.3.3,jquery.serialScroll-1.2.1");

ModuleLoader::load("LoginForm");
ModuleLoader::load("Menu");
ModuleLoader::load("Slogan");
ModuleLoader::load("BoxWstep");
ModuleLoader::load("BoxFirma");
ModuleLoader::load("BoxRight");
ModuleLoader::load("Footer");
?>