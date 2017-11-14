<?php

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

class ModuleLoader {
    
    static public $artDivider = '<img src="images/hr.gif" alt="HR" id="hr" />';
    
    static public function load($MODULE) {

        switch($MODULE) {
            
            case "LoginForm":
            
            $title = (isset($_SESSION['logged'])) ? $_SESSION['login'] : "Panel logowania";
            
                echo '
                
                    <div id="login-form">
        
                        <form method="POST" action="login/">
                            <input type="text" name="login" id="login-input" value="Nazwa użytkownika" />
                            <input type="password" name="password" id="password-input" value="Hasło" />
                            <input type="submit" name="login-submit" id="login-submit" value="OK" />
                        </form>
                        <span class="options"><a href="rejestracja/">Nowe konto</a> | <a href="przypomnienie-hasla/">Zapomniane hasło ?</a></span>
                        
                        <span class="title">'.$title.'</span>
                    
                    </div>
                
                ';
            
            break;
            
            
            case "Menu":
            
            $logout_btn = (isset($_SESSION['logged'])) ? "<li><a href=\"logout/\">Wyloguj</a></li>" : "";
            
                echo '
                
                    <div class="content">       
                    <h1><a href="/">Design klasy biznes</a></h1>        
                              <ul>
                               	  <li><a href="start/">Home</a></li>
                                  <li><a href="produkty/">Usługi i ceny</a></li>
                               	  <li><a href="artykuly/">Artykuły</a></li>
                               	  <li><a href="kontakt/">Kontakt</a></li>
                                  '.$logout_btn.'
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
            
            case "SloganRejestracja":
            echo '
                <div id="slogan" class="artykuly">
              <div class="content">
                    	<div id="motto" class="motto-artykuly"><a href="#">Busines Design</a></div>
                    </div>
                </div>
            ';
            break;
            
            case "SloganProdukty":
            echo '
                <div id="slogan" class="produkty">
  <div class="content">
        	<div id="motto" class="motto-produkty"><a href="#">Busines Design</a></div>
        </div>
    </div>
            ';
            break;
            
            case "SloganArtykuly":
            echo '
                <div id="slogan" class="artykuly">
  <div class="content">
        	<div id="motto" class="motto-artykuly"><a href="#">Busines Design</a></div>
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
            
            case "BoxProduktyOpis":
            
            echo '
            
                <div class="box produkty-opis">
                	<h2>Wprowadzenie</h2>
                    <p>Nasza firma powstała po to, aby oferować usługi dla biznesu na najwyższym poziomie. Istniejąc na raynku od 2009 roku staramy się stale ulepszać jakość naszych usług oraz oferować coraz więcej atrakcyjnych usług dla Twojej firmy.</p>
					<p>Nasza marka opiera się na zaufaniu zadowolonych klientów, których referencje zamieszczamy w dziale Portfolio.</p>
                	<ul>
                    	<li>Przykładowa treść</li>
                    	<li>Przykładowa treść</li>
                    	<li>Przykładowa treść</li>
                    </ul>
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
            
            case "BoxProduktyRight":
            echo '
                <div class="column">
            	<div class="box produkty-cechy">
                	<h2>Rozwijamy Twój biznes</h2>
                    <p class="produkt1">Jesteśmy po to, aby pomóc w rozwoju Twojemu biznesowi. Wspólnie postaramy się ustalić strategię dla Twoje firmy aby strona intenetowa była inwestycją, która się zwraca.</p>
					<p class="produkt2">Jeśli jesteś zainteresowany naszymi usługami prześlij formularz w dziale kontakt. Wycena Twojego zapytania nic nie kosztuje!</p>
                </div>
            </div>
            ';
            break;
            
            case "Footer":
                echo '
                    <div id="footer">
                    	<div class="content">
                       	  <p id="footer-image"><a href="#"><img src="images/pobierz-cennik.gif" alt="pobierz cennik" /></a></p>';
                          
                            self::load("FooterMenu");
                            
                            echo '<p id="footer-copyright">Copyright &copy; 2011 Designer: Grzegorz Róg | Coder: Mateusz Manaj</p>
                        </div>
                    </div>
                ';
            break;
            
            case "FooterProdukty":
                echo '
                    <div id="footer">
                    	<div class="content">
                       	  <p id="footer-image"><a href="#"><img src="images/przycisk-produkty.jpg" alt="pobierz cennik" /></a></p>';
                          
                            self::load("FooterMenu");
                            
                            echo '<p id="footer-copyright">Copyright &copy; 2011 Designer: Grzegorz Róg | Coder: Mateusz Manaj</p>
                        </div>
                    </div>
                ';
            break;
            
            case "FooterArtykuly":
                echo '
                    <div id="footer">
                    	<div class="content">
                       	  <p id="footer-image"><a href="#"><img src="images/przycisk-artykuly.jpg" alt="pobierz cennik" /></a></p>';
                          
                            self::load("FooterMenu");
                            
                            echo '<p id="footer-copyright">Copyright &copy; 2011 Designer: Grzegorz Róg | Coder: Mateusz Manaj</p>
                        </div>
                    </div>
                ';
            break;
            
            case "FooterMenu":
                echo '
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
                ';
            break;
            
            case "Rejestracja":
            
                echo '
                
                    <div class="box-artykuly produkty-opis">
                <img src="images/naglowek1-rejestracja.jpg" alt="HEADER" id="reg-header" />
                    <div id="reg-tools" class="formularz">
                    
                        <form name="reg-form" id="reg-form" action="register/" method="POST">
                    
                    <table class="objTable">
                        
                        <tbody>
                            
                            <tr>
                                <td><span class="star">*</span> Podaj imię:</td>
                                <td><input type="text" value="" name="name" class="required" minlength="3" maxlength="20" /></td>
                                <td></td>
                            </tr>
                            
                            <tr>
                                <td><span class="star">*</span> Podaj nazwisko:</td>
                                <td><input type="text" value="" name="surname" class="required" minlength="3" maxlength="25" /></td>
                                <td></td>
                            </tr>
                            
                            <tr>
                                <td><span class="star">*</span> Podaj nick:</td>
                                <td><input type="text" value="" name="nick" class="required" minlength="5" maxlength="25" /></td>
                                <td></td>
                            </tr>
                            
                            <tr>
                                <td><span class="star">*</span> Data urodzenia:</td>
                                <td><select name="day" class="birthdate day">
                                ';
                                            for($i=1; $i<=31; $i++) {
                                                
                                                if($i < 10) {
                                                    echo "<option value=\"0{$i}\">0{$i}</option>";
                                                } else {
                                                    echo "<option value=\"{$i}\">{$i}</option>";
                                                }
                                                
                                            }
                                            
                                echo '
                                    </select>
                                    <select name="month" class="birthdate month">
                                            <option value="01">Styczeń</option>
                                            <option value="02">Luty</option>
                                            <option value="03">Marzec</option>
                                            <option value="04">Kwiecień</option>
                                            <option value="05">Maj</option>
                                            <option value="06">Czerwiec</option>
                                            <option value="07">Lipiec</option>
                                            <option value="08">Sierpień</option>
                                            <option value="09">Wrzesień</option>
                                            <option value="10">Październik</option>
                                            <option value="11">Listopad</option>
                                            <option value="12">Grudzień</option>
                                    </select>
                                    <select name="year" class="birthdate year">
                                    ';
                                            for($i=1940; $i<=1990; $i++) {
                                                echo "<option value=\"{$i}\">{$i}</option>";   
                                            }
                                            
                                echo '
                                    </select>
                                </td>
                                <td></td>
                            </tr>
                            
                            <tr>
                                <td><span class="star">*</span> Podaj hasło:</td>
                                <td><input type="text" value="" name="pass1" id="pass1" class="required" minlength="5" maxlength="50" /></td>
                                <td></td>
                            </tr>
                            
                            <tr>
                                <td><span class="star">*</span> Powtórz hasło:</td>
                                <td><input type="text" value="" name="pass2" id="pass2" class="required" minlength="5" maxlength="50" /></td>
                                <td></td>
                            </tr>
                            
                            <tr>
                                <td><span class="star">*</span> Twój e-mail:</td>
                                <td><input type="text" value="" name="mail" class="required email" /></td>
                                <td></td>
                            </tr>
                            
                        </tbody>
                        
                    </table>
                    
                       <br /><br />
                       
                       <input type="submit" name="submit-form" class="submit-form" value="Zarejestruj" />
                       <input type="reset" name="submit-form" class="reset-form" value="Reset" /><br class="clear" />
                       </form>
                       
                       <br /><br />
                    
                    </div>
                    </div>
                
                ';
            
            break;
            
            case "IFMODULE::RESTRICT_ACCESS_TO_LOGGED_USER":
                if(isset($_SESSION['logged']) === true) {
                    header("Location: ../start/");
                }
            break;
            
            case "Przypomnienie-hasla":
            
                echo '
                
                    <div class="box-artykuly produkty-opis">
                
                	<img src="images/naglowek1-lostpw.jpg" alt="HEADER" id="lostpw-header" />
                    <div id="lostpw-tools" class="formularz">
                    
                        <form name="lostpw-form" id="lostpw-form" action="" method="POST">
                    
                    <table class="objTable">
                        
                        <tbody>
                            
                            <tr>
                                <td><span class="star">*</span> Podaj nick:</td>
                                <td><input type="text" value="" name="nick" class="required" minlength="5" maxlength="25" /></td>
                                <td></td>
                            </tr>
                            
                            <tr>
                                <td><span class="star">*</span> Twój e-mail:</td>
                                <td><input type="text" value="" name="mail" class="required email" /></td>
                                <td></td>
                            </tr>
                            
                        </tbody>
                        
                    </table>
                    
                       <br /><br />
                       
                       <input type="submit" name="submit-form" class="submit-form" value="Przypomnij" />
                       <input type="reset" name="submit-form" class="reset-form" value="Reset" /><br class="clear" />
                       </form>
                       
                       <br /><br />
                    
                    </div>
                    
                </div>
                
                ';
            
            break;
            
            case "IFMODULE::IS_LOST_PASSWD_HAS_SEND":
            
            echo '<div class="box-artykuly produkty-opis">
            <img src="images/naglowek1-lostpw.jpg" alt="HEADER" id="lostpw-header" />';
    
            $um = new UserManager;
            
            if($um->LostPassword($_POST['nick'], $_POST['mail']) === true) {
                
                $signs = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, '@', '#', '$', '%', '&', '*');
                
                $newPw = '';
                
                for($i=0; $i<=8; $i++) {
                    
                    $newPw .= $signs[rand(0, count($signs))];
                    
                }
                
                if($um->updateUserPasswd($_POST['nick'], md5($newPw))) {
                    
                    echo '<h3>Twoje hasło zostało zresetowane i wysłane na skrzynkę pocztową użytkownika: '.$_POST['mail'].'</h3>
                    <p>Twoje nowe hasło to: '.$newPw.'</p><br /><br />';
                    
                } else {
                    echo 'Niestety nie udało się zresetować Twojego hasła - wystąpił błąd!';
                }
                
                //mail($_POST['mail'], "Przypomnienie hasła", $newPw);
                
            } else {
                
                echo 'Niestety nie udało się zresetować Twojego hasła - wystąpił błąd!';
                
            }
                
            echo '</div>';
            
            break;
            
            case "ArtTools":
            
            echo '
                <div id="art-tools">
                <form name="art-tools" method="POST" action="">
                    
                        <ul>
                        
                            <li class="ilosc">
                            
                                <label for="ilosc">Wyświetl </label>
                            
                                <select name="ilosc" id="ilosc">
                                    
                                    <option value="1">po 1 artykule</option>
                                    <option value="3">po 3 artykuły</option>
                                    <option value="5">po 5 artykułów</option>
                                    <option value="10">po 10 artykułów</option>
                                    <option value="20">po 20 artykułów</option>
                                    <option value="ALL">wszystkie artykuły</option>
                                
                                </select>
                            </li>
                            
                            <li class="sort">
                            
                                <label for="sort">posortowane wg. </label>
                            
                                <select name="sort" id="sort">
                                    
                                    <option value="title">Tytułu</option>
                                    <option value="date">Daty dodania</option>
                                    <option value="author">Autora</option>
                                    <option value="id">Rankingu</option>
                                
                                </select>
                            </li>
                            
                            <li class="sort-asc-desc">
                                <select name="sort-asc-desc" id="sort-asc-desc">
                                    
                                    <option value="ASC">Rosnąco</option>
                                    <option value="DESC">Malejąco</option>
                                
                                </select>
                            </li>
                            
                            <li class="btn">
                            
                                <input type="submit" name="submit-filter" class="submit-filter" value="filtruj" />
                            
                            </li>
                        
                        </ul>
                    
                    </form>
                    </div>
            ';
            break;
            
            case "ArtykulyText":
            
            $articles = DatabaseManager::selectBySQL("SELECT * FROM articles");
            $login = (isset($_SESSION['logged'])) ? "" : "<span style=\"float:right;\"><a href=\"#top\">Zaloguj się</a> lub <a href=\"rejestracja/\">zarejestruj</a>, aby móc oceniać!</span>";
            
            foreach($articles as $article) {
                
                echo '
                    <div class="artykul">
                        
                            <h3 class="title">'.$article['title'].'</h3>
                            <p class="sub-title">Dodano: '.$article['date'].' przez '.$article['author'].'</p>
                                
                            '.$article['text'].'
                            
                            <form method="POST" action="voter/">
                            <div class="rating form-1">
                            
                                <label for="artId-1">Najgorszy jaki czytałem/łam!</label>
                                <input type="radio" name="artId-1" value="10" id="artId-1">
                                
                                <label for="artId-2">W sumie, nie taki zły :)</label>
                                <input type="radio" name="artId-2" value="20" id="artId-2">
                                
                                <label for="artId-3">Można w nim znaleźć ciekawe informacje</label>
                                <input type="radio" name="artId-3" value="30" id="artId-3">
                                
                                <label for="artId-4">No, no... :)</label>
                                <input type="radio" name="artId-4" value="40" id="artId-4">
                                
                                <label for="artId-5">Super-hiper-ekstra artykuł!</label>
                                <input type="radio" name="artId-5" value="50" id="artId-5">
                                
                                <label for="artId-6">Epicki...</label>
                                <input type="radio" name="artId-6" value="60" id="artId-6">
                            
                            </div>
                            </form>
                            
                            '.$login.'
                        
                        </div>
                ';
                
                echo static::$artDivider;
                
            }
            
            break;
            
            case "Artykuly":
            echo '
                <div class="box-artykuly produkty-opis">
                
                	<img src="images/naglowek1-produkty.jpg" alt="HEADER" id="art-header" />';
                    
                    self::load("ArtTools");
                    self::load("ArtykulyText");
                    
            echo '</div>';
                    
            break;
            
            case "Kontakt":
            echo '
            
                <div class="box-kontakt produkty-opis">
                
                	<h2>Formularz kontaktowy</h2>
                    
                    <div class="formularz">
                    
                    <form name="kontakt-form" id="kontakt-form" action="poster.php" method="POST">
                    
                    <table class="objTable">
                        
                        <tbody>
                            
                            <tr>
                                <td>Podaj imię:</td>
                                <td><input type="text" value="" name="name" class="required" minlength="3" /></td>
                                <td></td>
                            </tr>
                            
                            <tr>
                                <td>Twój e-mail:</td>
                                <td><input type="text" value="" name="surname" class="required email" /></td>
                                <td></td>
                            </tr>
                            
                            <tr>
                                <td>Temat:</td>
                                <td><input type="text" value="" name="subject" class="subject" class="required" minlength="10" /></td>
                                <td></td>
                            </tr>
                            
                            <tr>
                                <td>Wiadomość:</td>
                                <td><textarea name="msg" class="required" minlength="20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vestibulum 
                        enim ut risus molestie nec pretium urna faucibus. Donec malesuada, neque 
                        sit amet sodales tincidunt, eros velit lobortis nibh, sed pellentesque lorem 
                        enim eget sapien. Ut scelerisque faucibus metus, et varius elit luctus quis. 
                        Etiam fermentum, erat vitae porta ornare, metus nisi sodales urna, eget 
                        egestas ligula velit quis lorem. Nunc vestibulum tempus porta. Integer 
                        scelerisque malesuada lacus tempor mollis. Quisque convallis ornare purus, 
                        nec lacinia massa euismod vitae.
                       </textarea></td>
                                <td></td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td><input type="checkbox" checked="true" id="sent-to-me" /><label for="sent-to-me">Wyślij mi kopię tej wiadomości</label>
                                <td></td>
                            </tr>
                            
                        </tbody>
                        
                    </table>
                    
                       <br /><br />
                       
                       <input type="submit" name="submit-form" class="submit-form" value="Wyślij wiadomość" />
                       </form>
                       <br /><br /><br /><br />
                    
                    </div>
                    
                </div>
            
            ';
            break;
            
            default;
            
            break;
            
        }
        
    }
    
}

?>