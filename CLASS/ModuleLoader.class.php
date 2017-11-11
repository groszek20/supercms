<?php

class ModuleLoader {

    static public function load($MODULE) {
        switch ($MODULE) {
            case "LoginForm":
                echo ' 
                    <div id="login-form">
                        <input type="text" name="login" id="login-input" value="Nazwa użytkownika" />
                        <input type="password" name="password" id="password-input" value="Hasło" />
                        <input type="button" name="login-submit" id="login-submit" value="OK" />
                        <span class="options"><a href="#">Nowe konto</a> | <a href="#">Zapomniane hasło ?</a></span>
                    </div>
                    ';
                break;

            case "Menu":
                echo '                    
                    <div class="content">       
                    <h1><a href="/">Design klasy biznes</a></h1>        
                              <ul>
                               	  <li><a href="index.html">Home</a></li>
                                  <li><a href="produkty.html">Usługi i ceny</a></li>
                               	  <li><a href="artykuly.html">Artykuły</a></li>
                               	  <li><a href="kontakt.html">Kontakt</a></li>
                              </ul>
             	    </div>
                    ';
                break;

            case "Slogan":
                echo '                
                    <div id="slogan">
                    <div class="content">
                              <div id="motto"><a href="#">Busines Design</a></div>
                          </div>
                      </div>
                      ';
                break;

            case "BoxWstep":
                echo '
                    <div class="box szary">
                    	<h2>Wprowadzenie</h2>
                        <p>Nasza firma powstała po to, aby oferować usługi dla biznesu na najwyższym poziomie. Istniejąc na raynku od 2009 roku staramy się stale ulepszać jakość naszych usług oraz oferować coraz więcej atrakcyjnych usług dla Twojej firmy.</p>
    					<p>Nasza marka opiera się na zaufaniu zadowolonych klientów, których referencje zamieszczamy w dziale Portfolio.</p>
                    </div>
                ';
                break;

            case "BoxFirma":
                echo '
                    <div class="box firma">
                    	<h2>O firmie</h2>
                        
                    	<div id="slider">
                        
                        <ul class="navigation" style="display: none;">
    
                            <li><a href="#sites">Sites</a></li>
                            <li><a href="#files">Files</a></li>
                            <li><a href="#editor">Editor</a></li>
                            
                        </ul>
                        
                          <div class="scroll">
                            <div class="scrollContainer">
                            
                              <div class="panel" id="sites">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris luctus 
                              vehicula tortor, in imperdiet eros tempus vel. Suspendisse id arcu leo
                              </div>
                              
                              <div class="panel" id="files">
                              ac aliquet nibh. Cras eu enim sit amet libero consectetur venenatis. 
                              Morbi volutpat elementum ante, in rutrum ipsum pretium ultrices. Morbi libero
                              </div>
                              
                              <div class="panel" id="editor">
                              
                              egestas volutpat nunc arcu et sapien. Vivamus congue, eros dictum fermentum 
                              laoreet, velit quam mollis lacus, in tristique dui nunc a mauris
                              
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        
                    </div>
                ';
                break;

            case "BoxRight":
                echo '
                    <div class="column">
                    	<div class="box kwalifikacje">
                        	<h2>Najwyższe kwalifikacje</h2>
                            <p>Naszym celem jest oferowanie skutecznych usług dla Twojego biznesu. Liczą się dla nas konkretne rezultaty, które osiąga Twoja firma. Dlatego stale doskonalimy nasze umiejętności oraz kwalifikacje merytoryczne.</p>                
                        </div>
                    	<div class="box biznes">
                        	<h2>Rozwijamy Twój biznes</h2>
                            <p>Jesteśmy po to, aby pomóc w rozwoju Twojemu biznesowi. Wspólnie postaramy się ustalić strategię dla Twoje firmy aby strona intenetowa była inwestycją, która się zwraca.</p>
        					<p>Jeśli jesteś zainteresowany naszymi usługami prześlij formularz w dziale kontakt. Wycena Twojego zapytania nic nie kosztuje!</p>
                        </div>
                    </div>
                ';
                break;

            case "Footer":
                echo '
                    <div id="footer">
                    	<div class="content">
                       	  <p id="footer-image"><a href="#"><img src="images/pobierz-cennik.gif" alt="pobierz cennik" /></a></p>
                        	<ul>
                            	<li><a href="#">Webdesign</a></li>
                            	<li><a href="#">e-commerce</a></li>
                            	<li><a href="#">Corporate design</a></li>
                            	<li><a href="#">Kampanie AdWords</a></li>
                            	<li><a href="#">Marketing internetowy</a></li>
                            	<li><a href="#">Usługi hostingowe</a></li>
                            	<li><a href="#">Analizy biznesowe</a></li>
                            	<li><a href="#">Pozycjonowanie</a></li>
                            	<li><a href="#">Raporty skuteczności</a></li>
                            </ul>
                            <p id="footer-copyright">Copyright &copy; </p>
                        </div>
                    </div>
                ';
                break;
            
            default;
                break;
        }
    }

}
