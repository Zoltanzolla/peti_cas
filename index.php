<?php

$ime = "Zoltan";#string
echo $ime;

$godine = 50;#integer
echo $godine;

$kilaza = 75.5;#float
$predmeti = ["Matematika","Srpski","Engleski", 13.6];
#varijabla sa vise vrednosti-ne bitno j koje vrste podataka ces pisati u arraju

var_dump($predmeti);
echo "ja se zovem $ime i imam $godine.Tezak sam $kilaza.";

class Korisnik
{
	public $ime = "Zoltan";
	private $godine = 50;

	public function cao()
	{
	echo "cao ja sam ".$this->ime;
	}

}

$user = new Korisnik();
echo $user -> ime;
$user ->cao();

class Matematika
{
	public function sabiranje($broj1, $broj2)
	{
		echo $broj1+$broj2;#ispis tj sabiranje brojeva
	}
}

	$user = new Matematika();
	
	$user ->sabiranje(5,6);#definicija vrednosti broj1 i broj 2
	
