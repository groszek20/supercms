<?php

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

/**
 * Opis klasy MetaTags.
 *
 * @package CLASS.Managers.MetaManager
 * @access public
 * @author Mateusz Manaj <mateusz@eduweb.pl>
 * @license http://www.eduweb.pl/
 * @version 1.2.2
 * @copyright Eduweb™ 2011
 * @internal
 * @param string $PAGE Zmienna przechowuje dane o nazwie aktualnie przegladanej stronie
 * @param string $doctype xHTML->doctype
 * @param string $title xHTML->title
 * @param string $content_type xHTML->content_type
 * @param string $keywords xHTML->keywords
 * @param string $description xHTML->description
 * @param string $author xHTML->author
 * @param string $distribution xHTML->distribution
 * @param string $robots xHTML->robots
 * @param string $revisit xHTML->revisit
 * @param string $copyrights xHTML->copyrights
 * @param string $googlebot google.pl->googlebot
 * @param string $classification xHTML->classification
 * @param string $publisher xHTML->publisher
 * @param string $page_topic xHTML->page_topic(title)
 * @param string $rating xHTML->rating
 * @param string $security xHTML->security
 * @param string $style xHTML->style
 * @param string $icon xHTML->icon
 * @param string $JS xHTML->JavaScript
 * @return void
 * @var string
 * @static
 * @final
 * @abstract
 * @todo Nie ma nic wiecej do zrobienia
 * @deprecated deprecated since version 1.0
 */

class MetaTags {
	
	public $PAGE;
	public $doctype;
	public $title;
	public $content_type;
	public $keywords;
	public $description;
	public $author;
	public $distribution;
	public $robots;
	public $revisit;
	public $copyrights;
	public $googlebot;
	public $classification;
	public $publisher;
	public $page_topic;
	public $rating;
	public $security;
	public $style;
    public $icon;
	public $JS;
	
	/**
     * 
	 * KONSTRUKTOR KLASY | THE CLASS CONSTRUCTOR
	 * @param $PAGE
	 * @param $doctype
	 * @param $title
	 * @param $content_type
	 * @param $keywords
	 * @param $description
	 * @param $author
	 * @param $distribution
	 * @param $robots
	 * @param $revisit
	 * @param $copyrights
	 * @param $googlebot
	 * @param $classification
	 * @param $publisher
	 * @param $page_topic
	 * @param $rating
	 * @param $security
	 * @param $style
	 * @param $icon
	 * @param $JS
	 */
	
	public function __construct($PAGE, $doctype, $title, $content_type, $keywords, $description, $author, $distribution, $robots, $revisit, $copyrights, $googlebot, $classification, $publisher, $page_topic, $rating, $security, $style, $icon, $JS) {
		
		$this->PAGE = $PAGE;
		$this->doctype = $doctype;
		$this->title = $title;
		$this->content_type = $content_type;
		$this->keywords = $keywords;
		$this->description = $description;
		$this->author = $author;
		$this->distribution = $distribution;
		$this->robots = $robots;
		$this->revisit = $revisit;
		$this->copyrights = $copyrights;
		$this->googlebot = $googlebot;
		$this->classification = $classification;
		$this->publisher = $publisher;
		$this->page_topic = $page_topic;
		$this->rating = $rating;
		$this->security = $security;
		$this->style = $style;
        $this->icon = $icon;
		$this->JS = $JS;
		
		/**
		 * DEFINICJA METOD PUBLICZNYCH | DEFINITION OF PUBLIC METHODS
		 * 
		 * @param SetDoctype Ustawia [ xHTML->doctype ] DocType
		 * @param SetTitle Ustawia [ xHTML->doctype ] Tytul
		 * @param SetContent_type Ustawia [ xHTML->doctype ] Typ tresci
		 * @param SetKeywords Ustawia [ xHTML->doctype ] Slowa kluczowe
		 * @param SetDescription Ustawia [ xHTML->doctype ] Opis strony
		 * @param SetAuthor Ustawia [ xHTML->doctype ] Autora stron
		 * @param SetDistribution Ustawia [ xHTML->doctype ] Kanal dystrybucyjny
		 * @param SetRobots Ustawia [ xHTML->doctype ] Roboty
		 * @param SetRevisit Ustawia [ xHTML->doctype ] Czas ponownych odwiedzin robotów
		 * @param SetCopyrights Ustawia [ xHTML->doctype ] Prawa autora
		 * @param SetGooglebot Ustawia [ xHTML->doctype ] GoogleBot'a
		 * @param SetClassification Ustawia [ xHTML->doctype ] Klasyfikacje witryny
		 * @param SetPublisher Ustawia [ xHTML->doctype ] Wydawce witryny
		 * @param SetPage_topic Ustawia [ xHTML->doctype ] Tytul strony
		 * @param SetRating Ustawia [ xHTML->doctype ] Rating
		 * @param SetSecurity Ustawia [ xHTML->doctype ] Stopien bezpieczenstwa
		 * @param SetStyle Ustawia [ xHTML->doctype ] Styl [ $nazwa_pliku, $nazwa_pliku2... ]
		 * @param SetIcon Ustawia [ xHTML->doctype ] Ikone [ $nazwa_ikony, $nazwa_ikony2... ]
		 * @param SetJS Ustawia [ xHTML->doctype ] Plik skryptowy [ $nazwa_pliku, $nazwa_pliku2... ]
		 * 
		 */
		
		$this->SetDoctype();
		$this->SetTitle();
		$this->SetContent_type();
		$this->SetKeywords();
		$this->SetDescription();
		$this->SetAuthor();
		$this->SetDistribution();
		$this->SetRobots();
		$this->SetRevisit();
		$this->SetCopyrights();
		$this->SetGooglebot();
		$this->SetClassification();
		$this->SetPublisher();
		$this->SetPage_topic();
		$this->SetRating();
		$this->SetSecurity();
		$this->SetStyle();
        $this->SetIcon();
		$this->SetJS();
		
	}
	
	/**
	 * METODA SetDoctype() | SetDoctype() METHOD
	 *
	 * @access public
	 * @author Mateusz Manaj <mateusz@eduweb.pl>
	 * @version 1.2.2
	 * @copyright Eduweb™ 2011
	 * @internal
	 * @param 
	 * @return string
	 * @var string
	 * @static
	 * @final
	 * @abstract
	 * @todo NONE
	 * @deprecated Wersja przestarzala od 1.0
	 */
	
	public function SetDoctype() {
		
		echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
';
		
	}
	
	/**
	 * METODA SetTitle() | SetTitle() METHOD
	 *
	 * @access public
	 * @author Mateusz Manaj <mateusz@eduweb.pl>
	 * @version 1.2.2
	 * @copyright Eduweb™ 2011
	 * @internal
	 * @param $this->PAGE [ Nazwa strony ]
	 * @return string
	 * @var string
	 * @static
	 * @final
	 * @abstract
	 * @todo NONE
	 * @deprecated Wersja przestarzala od 1.0
	 */
	
	public function SetTitle() {
	   
       if(!$this->title) {
		
    		switch ($this->PAGE) {
    			
    			case 'start':
    			$this->title = 'SuperCMS - Strona Główna serwisu';
    			break;
    			
    			default:
    			$this->title = 'SuperCMS - Strona Główna serwisu';
    			break;
    			
    		}
      }
		
		echo '<head>

<title>'.$this->title.'</title>

';
		
	}
	
	/**
	 * METODA SetContent_type() | SetContent_type() METHOD
	 *
	 * @access public
	 * @author Mateusz Manaj <mateusz@eduweb.pl>
	 * @version 1.2.2
	 * @copyright Eduweb™ 2011
	 * @internal
	 * @param $this->content_type [ Typ tresci ]
	 * @return string
	 * @var string
	 * @static
	 * @final
	 * @abstract
	 * @todo NONE
	 * @deprecated Wersja przestarzala od 1.0
	 */
	
	public function SetContent_type() {
		
		if (!($this->content_type)) {
		
		echo '<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
';

		} else {
			
			echo '<meta http-equiv="content-type" content="text/html; charset='.$this->content_type.'" />
';
		
		}
		
	}
	
	/**
	 * METODA SetKeywords() | SetKeywords() METHOD
	 *
	 * @access public
	 * @author Mateusz Manaj <mateusz@eduweb.pl>
	 * @version 1.2.2
	 * @copyright Eduweb™ 2011
	 * @internal
	 * @param $this->keywords [ Slowa kluczowe witryny ]
	 * @return string
	 * @var string
	 * @static
	 * @final
	 * @abstract
	 * @todo NONE
	 * @deprecated Wersja przestarzala od 1.0
	 */
	
	public function SetKeywords() {
		
		if (!($this->keywords)) {
			echo '<meta name="keywords" content="SuperCMS®" />
';
		} else {
			echo '<meta name="keywords" content="'.$this->keywords.'" />
';
		}
		
	}
	
	/**
	 * METODA SetDescription() | SetDescription() METHOD
	 *
	 * @access public
	 * @author Mateusz Manaj <mateusz@eduweb.pl>
	 * @version 1.2.2
	 * @copyright Eduweb™ 2011
	 * @internal
	 * @param $this->description [ Generuje opis witryny ]
	 * @return string
	 * @var string
	 * @static
	 * @final
	 * @abstract
	 * @todo NONE
	 * @deprecated Wersja przestarzala od 1.0
	 */
	
	public function SetDescription() {
		
	if (!($this->description)) {
			echo '<meta name="description" content="SuperCMS®!" />
';
		} else {
			echo '<meta name="description" content="'.$this->description.'" />
';
		}
		
	}
	
	/**
	 * METODA SetAuthor() | SetAuthor() METHOD
	 *
	 * @access public
	 * @author Mateusz Manaj <mateusz@eduweb.pl>
	 * @version 1.2.2
	 * @copyright Eduweb™ 2011
	 * @internal
	 * @param $this->author [ Zmienna zawiera dane autora ]
	 * @return string
	 * @var string
	 * @static
	 * @final
	 * @abstract
	 * @todo NONE
	 * @deprecated Wersja przestarzala od 1.0
	 */
	
	public function SetAuthor() {
		
	if (!($this->author)) {
			
			echo '<meta name="Author" content="Adam Dabrowski" />
';
		} else {
			echo '<meta name="Author" content="'.$this->author.'" />
';
		}
		
	}
	
	/**
	 * METODA SetDistribution() | SetDistribution() METHOD
	 *
	 * @access public
	 * @author Mateusz Manaj <mateusz@eduweb.pl>
	 * @version 1.2.2
	 * @copyright Eduweb™ 2011
	 * @internal
	 * @param $this->distribution [ Wersja dystrybucyjna ]
	 * @return string
	 * @var string
	 * @static
	 * @final
	 * @abstract
	 * @todo NONE
	 * @deprecated Wersja przestarzala od 1.0
	 */
	
	public function SetDistribution() {
		
	if (!($this->distribution)) {
			echo '<meta name="distribution" content="global" />
';
		} else {
			echo '<meta name="distribution" content="'.$this->distribution.'" />
';
		}
		
	}
	
	/**
	 * METODA SetRobots() | SetRobots() METHOD
	 *
	 * @access public
	 * @author Mateusz Manaj <mateusz@eduweb.pl>
	 * @version 1.2.2
	 * @copyright Eduweb™ 2011
	 * @internal
	 * @param $this->robots [ Przechowuje zezwolenie i typ indeksacji ]
	 * @return string
	 * @var string
	 * @static
	 * @final
	 * @abstract
	 * @todo NONE
	 * @deprecated Wersja przestarzala od 1.0
	 */
	
	public function SetRobots() {
		
	if (!($this->robots)) {
			echo '<meta name="robots" content="index,follow,all" />
';
		} else {
			echo '<meta name="robots" content="'.$this->robots.'" />
';
		}
		
	}
	
	/**
	 * METODA SetRevisit() | SetRevisit() METHOD
	 *
	 * @access public
	 * @author Mateusz Manaj <mateusz@eduweb.pl>
	 * @version 1.2.2
	 * @copyright Eduweb™ 2011
	 * @internal
	 * @param $this->revisit [ Czas ponownej wizyty przez roboty ]
	 * @return string
	 * @var string
	 * @static
	 * @final
	 * @abstract
	 * @todo NONE
	 * @deprecated Wersja przestarzala od 1.0
	 */
	
	public function SetRevisit() {
		
	if (!($this->revisit)) {
			
			echo '<meta name="revisit-after" content="2 days" />
';
		} else {
			echo '<meta name="revisit-after" content="'.$this->revisit.'" />
';
		}
		
	}
	
	/**
	 * METODA SetCopyrights() | SetCopyrights() METHOD
	 *
	 * @access public
	 * @author Mateusz Manaj <mateusz@eduweb.pl>
	 * @version 1.2.2
	 * @copyright Eduweb™ 2011
	 * @internal
	 * @param $this->copyrights
	 * @return string
	 * @var string
	 * @static
	 * @final
	 * @abstract
	 * @todo NONE
	 * @deprecated Wersja przestarzala od 1.0
	 */
	
	public function SetCopyrights() {
		
	if (!($this->copyrights)) {
			echo '<meta name="copyright" content="&copy; SuperCMS® 2017" />
';
		} else {
			echo '<meta name="copyright" content="'.$this->copyrights.'" />
';
		}
		
	}
	
	/**
	 * METODA SetGooglebot() | SetGooglebot() METHOD
	 *
	 * @access public
	 * @author Mateusz Manaj <mateusz@eduweb.pl>
	 * @version 1.2.2
	 * @copyright Eduweb™ 2011
	 * @internal
	 * @param $this->googlebot [ Przechowuje zezwolenie i typ indeksacji ]. SYNONIM: revisit
	 * @return string
	 * @var string
	 * @static
	 * @final
	 * @abstract
	 * @todo NONE
	 * @deprecated Wersja przestarzala od 1.0
	 */
	
	public function SetGooglebot() {
		
	if (!($this->googlebot)) {
			echo '<meta name="googlebot" content="index,follow,all" />
';
		} else {
			echo '<meta name="googlebot" content="'.$this->googlebot.'" />
';
		}
		
	}
	
	/**
	 * METODA SetClassification() | SetClassification() METHOD
	 *
	 * @access public
	 * @author Mateusz Manaj <mateusz@eduweb.pl>
	 * @version 1.2.2
	 * @copyright Eduweb™ 2011
	 * @internal
	 * @param $this->classification [ Przechowuje dane na temat klasyfikacji witryny ]
	 * @return string
	 * @var string
	 * @static
	 * @final
	 * @abstract
	 * @todo NONE
	 * @deprecated Wersja przestarzala od 1.0
	 * 
	 */
	
	public function SetClassification() {
		
	if (!($this->classification)) {
			echo '<meta name="classification" content="System Zarządzania Treścią"/>
';
		} else {
			echo '<meta name="classification" content="'.$this->classification.'" />
';
		}
		
	}
	
	/**
	 * METODA SetPublisher() | SetPublisher() METHOD
	 *
	 * @access public
	 * @author Mateusz Manaj <mateusz@eduweb.pl>
	 * @version 1.2.2
	 * @copyright Eduweb™ 2011
	 * @internal
	 * @param $this->publisher [ Przechowuje informacje o wydawcy ]
	 * @return string
	 * @var string
	 * @static
	 * @final
	 * @abstract
	 * @todo NONE
	 * @deprecated Wersja przestarzala od 1.0
	 * 
	 */
	
	public function SetPublisher() {
		
	if (!($this->publisher)) {
			echo '<meta name="publisher" content="Adam Dabrowski" />
';
		} else {
			echo '<meta name="publisher" content="'.$this->publisher.'" />
';
		}
		
	}
	
	/**
	 * METODA SetPage_topic() | SetPage_topic() METHOD
	 *
	 * @access public
	 * @author Mateusz Manaj <mateusz@eduweb.pl>
	 * @version 1.2.2
	 * @copyright Eduweb™ 2011
	 * @internal
	 * @param $this->title [ Ustawia tytul strony ]. SYNONIM: $this->title
	 * @return string
	 * @var string
	 * @static
	 * @final
	 * @abstract
	 * @todo NONE
	 * @deprecated Wersja przestarzala od 1.0
	 * 
	 */
	
	public function SetPage_topic() {
		
		echo '<meta name="page-topic" content="'.$this->title.'" />
';
		
	}
	
	/**
	 * METODA SetRating() | SetRating() METHOD
	 *
	 * @access public
	 * @author Mateusz Manaj <mateusz@eduweb.pl>
	 * @version 1.2.2
	 * @copyright Eduweb™ 2011
	 * @internal
	 * @param $this->rating [ Typ oceniania ]
	 * @return string
	 * @var string
	 * @static
	 * @final
	 * @abstract
	 * @todo NONE
	 * @deprecated Wersja przestarzala od 1.0
	 * 
	 */
	
	public function SetRating() {
		
	if (!($this->rating)) {
			echo '<meta name="rating" content="general" />
';
		} else {
			echo '<meta name="rating" content="'.$this->rating.'" />
';
		}
		
	}
	
	/**
	 * METODA SetSecurity() | SetSecurity() METHOD
	 *
	 * @access public
	 * @author Mateusz Manaj <mateusz@eduweb.pl>
	 * @version 1.2.2
	 * @copyright Eduweb™ 2011
	 * @internal
	 * @param $this->security [ Zasieg ochrony ]
	 * @return string
	 * @var string
	 * @static
	 * @final
	 * @abstract
	 * @todo NONE
	 * @deprecated Wersja przestarzala od 1.0
	 * 
	 */
	
	public function SetSecurity() {
		
	if (!($this->security)) {
			echo '<meta name="security" content="Public" />
';
		} else {
			echo '<meta name="security" content="'.$this->security.'" />
';
		}
		
	}
	
	/**
	 * METODA SetStyle() | SetStyle() METHOD
	 *
	 * @access public
	 * @author Mateusz Manaj <mateusz@eduweb.pl>
	 * @version 1.2.2
	 * @copyright Eduweb™ 2011
	 * @internal
	 * @param $this->style [ Korzystajc ze natywnego adrsu witryny, ustawiane zostaja poszczegolne sciezki dostepu do dolaczanych plików ]
	 * @return string
	 * @var string
	 * @static
	 * @final
	 * @abstract
	 * @todo NONE
	 * @deprecated Wersja przestarzala od 1.0
	 * 
	 */
	
	public function SetStyle() {
		
		echo '
<base href="'.SERVER_ADDRESS.'">

';

    $tablica = $this->style;
        
        $explozja_tablicy = explode(",", $tablica);
        
        $ile_styli = count($explozja_tablicy);
        
        for($i=0; $i<$ile_styli; $i++) {
            
            echo '  <link rel="stylesheet" href="css/'.$explozja_tablicy[$i].'.css" type="text/css" />
';
            
        }
		
	}
    
	/**
	 * METODA SetIcon() | SetIcon() METHOD
	 *
	 * @access public
	 * @author Mateusz Manaj <mateusz@eduweb.pl>
	 * @version 1.2.2
	 * @copyright Eduweb™ 2011
	 * @internal
	 * @param $this->icon [ Nazwa pliku ikony (bez rozszerzenia pliku) ]
	 * @return string
	 * @var string
	 * @static
	 * @final
	 * @abstract
	 * @todo NONE
	 * @deprecated Wersja przestarzala od 1.0
	 * 
	 */
	
    public function SetIcon() {
        
        if ($this->icon) {
            
            echo '  
  <link rel="shortcut icon" href="'.$this->icon.'.ico" />

';
            
        }
        
    }
    
    /**
	 * METODA SetJS() | SetJS() METHOD
	 *
	 * @access public
	 * @author Mateusz Manaj <mateusz@eduweb.pl>
	 * @version 1.2.2
	 * @copyright Eduweb™ 2011
	 * @internal
	 * @param $this->JS [ Nazwa pliku ze skryptami ]
	 * @return string
	 * @var string
	 * @static
	 * @final
	 * @abstract
	 * @todo NONE
	 * @deprecated Wersja przestarzala od 1.0
	 * 
	 */
	
	public function SetJS() {
		
		$tablica = $this->JS;
		
		$explozja_tablicy = explode(",", $tablica);
		
		$ile_skryptow = count($explozja_tablicy);
		
		for($i=0; $i<$ile_skryptow; $i++) {
			
			echo '  <script type="text/javascript" src="JS/'.$explozja_tablicy[$i].'.js"></script>
';
			
		}
		
		echo '
</head>
';
		
	}	
}

?>