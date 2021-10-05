<!-- - create un file index.php in cui: è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza (proprietà)
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà, se possibile cerchiamo di stampare senza ricorrere a var_dump -->

<?php
// CLASSE
class Movies
{
    public $title;
    public $gender;
    public $year;
    public $plot;
    public $forAge;
    //COSTRUTTORE
    public function __construct($_title, $_gender, $_year, $_plot, $_forAge)
    {
        $this->title = $_title;
        $this->gender = $_gender;
        $this->year = $_year;
        $this->plot = $_plot;
        $this->forAge = $_forAge;
    }

    public function getPlot($max = 100)
    {
        return substr($this->plot, 0, $max) . '....';
    }

    public function getAge()
    {
        if ($this->year >= 18) {
            return 'Film adatto alla famiglia';
            
        }
        return 'Film adatto a pubblico adulto';
    }
}

// $movie_1 = new Movies('Lion - La strada verso casa', 'Dramatic', 2016, 'Lion - La strada verso casa, film diretto da Garth Davis, 
// racconta la storia di Saroo, un bambino di cinque anni che vive con la sua povera famiglia a Khandwa, un piccolo villaggio dell\'India centrale. 
// Insieme a suo fratello più grande trascorre le giornate a raccogliere metalli per poi rivenderli e guadagnare qualche soldo. 
// Una notte i due devono lavorare in una stazione, ma il piccolo Saroo è talmente stanco che si addormenta sulla panchina di fronte ai vagoni. 
// Quando si risveglia è solo e spaventato, non trova più il fratello e, non sapendo cosa fare, decide di salire su un treno vuoto. 
// Questo, però, non fa alcuna fermata e lo porta direttamente a Calcutta, a quasi duemila chilometri da casa.', 12);

// $movie_ = new Movies('La La Land', 'Commedia, Drammatico,', '2016', 'La La Land è un film del 2016 diretto da Damien Chazelle.
// Il film è realizzato come musical contemporaneo, dove Los Angeles, la terra dei sogni, fa da sfondo all\'intensa storia d\'amore tra un\'aspirante attrice e un musicista jazz.
// Mia (Emma Stone) è una ragazza determinata a inseguire il proprio sogno di diventare attrice e tra un provino e un altro serve caffè in un bar all\'interno degli Hollywood Studios, mentre Sebastian (Ryan Gosling) è un bravo jazzista che, nell\'attesa di aprirsi un locale tutto suo, si guadagna da vivere suonando nei piano bar anche se ciò lo rende profondamente insoddisfatto.
// Dopo l\'ennesimo provino andato male, Mia viene convinta dalle sue amiche ad andare a una festa sulle colline di Hollywood e mentre rientra a casa a piedi, Mia è attirata da una musica proveniente da un locale, in cui decide di entrare. Lì si imbatterà per la prima volta in Sebastian, che proprio in quel momento viene licenziato dal proprietario del ristorante, colpevole di aver improvvisato musica jazz al pianoforte anziché attenersi alla scaletta di classici natalizi per i clienti.', 13);

// var_dump($movie_1);
