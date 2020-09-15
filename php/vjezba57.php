<?php

class DateDifference{

    public $date1 = "";
    public $date2 = "";
    public $result = "";

    public function __construct($date1, $date2){

        $this->date1 = $date1;
        $this->date2 = $date2;
    }

    public function diff(){

        $date1 = new DateTime($this->date1);
        $date2 = new DateTime($this->date2);
        $this->result = $date1->diff($date2);

        return $this->result->days;

    }

}

$datum1 = date("d-m-Y");
$datum2 = "23-03-2025";

$datumRazlika = new DateDifference($datum1, $datum2);
echo $datumRazlika->diff();

echo "<br>";

$datumRazlika2 = new DateDifference("15-10-2019", date("d-m-Y"));
echo $datumRazlika2->diff();

?>