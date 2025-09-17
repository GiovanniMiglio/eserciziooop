<?php
class Company {
    public $name;
    public $location;
    public $tot_employees;
    
    public function __construct($name, $location, $tot_employees) {
        $this->name = $name;
        $this->location = $location;
        $this->tot_employees = $tot_employees;
    }
    
    public function get_tot_employees() {
        return $this->tot_employees;
    }
    public function stampaDescrizione() {
        if ($this->tot_employees > 0) {
            echo "L'ufficio {$this->name} con sede in {$this->location} ha ben {$this->tot_employees} dipendenti.\n";
        } else {
            echo "L'ufficio {$this->name} con sede in {$this->location} non ha dipendenti.\n";
        }
    }
    public function stampaSpesaAnnuale($stipendio_mensile) {
        $spesa = $this->tot_employees * $stipendio_mensile * 12;
        echo "La spesa annuale per i dipendenti di {$this->name} è di " . number_format($spesa, 0, ',', '.') . " euro.\n";
    }
    public static function calc_totale_spesa($aziende, $stipendi) {
        $totale_spesa = 0;
        foreach ($aziende as $index => $azienda) {
            $totale_spesa += $azienda->get_tot_employees() * $stipendi[$index] * 12;
        }
        return $totale_spesa;
    }
    public static function stampaTotaleSpesa($aziende, $stipendi) {
        $totale = self::calc_totale_spesa($aziende, $stipendi);
        echo "La spesa totale annuale per tutte le aziende è di " . number_format($totale, 0, ',', '.') . " euro.\n";
    }
    
}
$company1 = new Company("Aulab", "Italy", 100);
$company2 = new Company("Google", "USA", 10000);
$company3 = new Company("Microsoft", "USA", 5000);
$company4 = new Company("Apple", "USA", 3000);
$company5 = new Company("BonefireBoard", "Italy", 0);

$aziende = [$company1, $company2, $company3, $company4, $company5];
$stipendi = [2000, 3000, 2500, 4000, 1500];
foreach ($aziende as $index => $azienda) {
    $azienda->stampaDescrizione();
    $azienda->stampaSpesaAnnuale($stipendi[$index]);
    echo "\n";
}
Company::stampaTotaleSpesa($aziende, $stipendi);
