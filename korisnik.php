<?php

	class Osoba
	{
		public $visina = 0;
		public $tezina = 0;
		public $ime = "";

		public function __construct($name , $weight , $height)
		{

			$this->ime = $name;#definisanje ime iz funkcije tj povezivanje
			$this->tezina = $weight;
			$this->visina = $height;

		}

		public function cao()
		{
			echo "Ja se zovem $this->ime,imam $this->tezina i visok sam $this->visina";
		}
	}

	$person = new Osoba("Zoltan",134.5,231.4); #vrednosti o korisniku

	$person->cao();

	$person2 = new Osoba("Petar",90,190.5); 

	$person2->cao();

	$person3 = new Osoba("Branko",70,170.5); 

	$person3->cao();

	$person4 = new Osoba("Marko",45,159.5); 

	$person4->cao();

	$person5 = new Osoba("Zvezdan",98,200.5); 

	$person5->cao();

	$person6 = new Osoba("Kristijan",88,178.5); 

	$person6->cao();

	$person7 = new Osoba("Stipan",68,188.5); #vrednosti o korisniku

	$person7->cao();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Cao Cao</title>
	</head>
	<body>

		<table>
			<tr>
				<th>Ime</th>
				<th>Kilaza</th>
				<th>Visina</th>
			</tr>
			<tr>
				<td><?php echo $person->ime;?></td>
				<td><?php echo $person->tezina;?></td>
				<td><?php echo $person->visina;?></td>

				<tr></tr>	
				<td><?php echo $person2->ime;?></td>
				<td><?php echo $person2->tezina;?></td>
				<td><?php echo $person2->visina;?></td>

				<tr></tr>
				<td><?php echo $person3->ime;?></td>
				<td><?php echo $person3->tezina;?></td>
				<td><?php echo $person3->visina;?></td>
				
				<tr></tr>
				<td><?php echo $person4->ime;?></td>
				<td><?php echo $person4->tezina;?></td>
				<td><?php echo $person4->visina;?></td>
				
				<tr></tr>
				<td><?php echo $person5->ime;?></td>
				<td><?php echo $person5->tezina;?></td>
				<td><?php echo $person5->visina;?></td>
				
				
			</tr>

		</table>

	</body>
</html>
