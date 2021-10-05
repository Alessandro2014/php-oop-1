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
    public $forAge = 'All';
//COSTRUTTORE
    public function __construct($_title, $_gender, $_year, $_plot)
    {
        $this->title = $_title;
        $this->gender = $_gender;
        $this->year = $_year;
        $this->plot = $_plot;
    }
}

$movie = new Movies('Lion - La strada verso casa', 'Dramatic', 2016, 'Lion - La strada verso casa, film diretto da Garth Davis, 
racconta la storia di Saroo, un bambino di cinque anni che vive con la sua povera famiglia a Khandwa, un piccolo villaggio dell\'India centrale. 
Insieme a suo fratello più grande trascorre le giornate a raccogliere metalli per poi rivenderli e guadagnare qualche soldo. 
Una notte i due devono lavorare in una stazione, ma il piccolo Saroo è talmente stanco che si addormenta sulla panchina di fronte ai vagoni. 
Quando si risveglia è solo e spaventato, non trova più il fratello e, non sapendo cosa fare, decide di salire su un treno vuoto. 
Questo, però, non fa alcuna fermata e lo porta direttamente a Calcutta, a quasi duemila chilometri da casa.', );


var_dump($movie);
