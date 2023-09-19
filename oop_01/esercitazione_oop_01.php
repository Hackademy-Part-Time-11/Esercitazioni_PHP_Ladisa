<?php


class Company
{
    public $name;
    public $location;
    public $tot_employees = 0;
    public static $avg_wage = 2600;
    public static $totalCompaniesExpense = 0;

    public function __construct($name, $location, $tot_employees)
    {
        $this->name = $name;
        $this->location = $location;
        $this->tot_employees = $tot_employees;
        $this->globalAnnualExpense();

    }

    public function infoCompanies()
    {
        if ($this->tot_employees > 0) {
            echo "L'ufficio " . $this->name . " con sede in " . $this->location . " ha ben " . $this->tot_employees . " dipendenti. \n";
            echo "La spesa annuale è di " . $this->annualExpense() . ".\n"; 
        } else {
            echo "L'ufficio " . $this->name . " con sede in " . $this->location . " non esiste, è uno scam. \n";
        }
    }

    public function annualExpense()
    {
        return $this->tot_employees * self::$avg_wage * 12;
    }

    public function globalAnnualExpense()
    {
        self::$totalCompaniesExpense += $this->annualExpense();
    }

    public static function infoCompaniesExpenses(){
        echo "La spesa annuale è di tutte le aziende insieme è " . self::$totalCompaniesExpense . ".\n"; 
    }

}







$company1 = new Company("Sascha Web Services", "Emiirati Arabi", 7320);
$company2 = new Company("Tolotra Web Graphics", "Giappone", 1);
$company3 = new Company("Valletta Delizie di Pane", "Albania", 4);
$company4 = new Company("Ingegnere Contabilità Forense (anche illegale)", "Korea del Nord", 0);
$company5 = new Company("Ladisa Durex Inc.", "USA", 69696);

$company1->infoCompanies();
$company2->infoCompanies();
$company3->infoCompanies();
$company4->infoCompanies();
$company5->infoCompanies();

Company::infoCompaniesExpenses();

