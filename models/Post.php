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
    // METODO PER ABBREVIARE LA TRAMA
    public function getPlot($max = 100)
    {
        return substr($this->plot, 0, $max) . '....';
    }
    // METODO PER STABILIRE A CHI E' ADATTO IL FILM
    public function getAge()
    {
        if ($this->forAge >= 18) {
            return 'Film adatto alla famiglia';
        } else {
            return 'Film adatto a pubblico adulto';
        }
    }
}
