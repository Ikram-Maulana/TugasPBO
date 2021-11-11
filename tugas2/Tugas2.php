<?php

class komputer
{
	private $name;
	private $prosesor;
	private $memory;
 
	public function __construct($name, $prosesor, $memory = "4 GB")
	{
		$this->name = $name;
		$this->prosesor = $prosesor;
		$this->memory = $memory;
	}

	public function spek(){
		echo "Komputer ".$this->name." memiliki spek ".$this->prosesor." dan ". 
    $this->memory."<hr>";
	}

	public function nyalakan_komputer()
	{
		return "Komputer $this->name Hidup <hr>";
	}
 
	public function __destruct()
	{
		// Tambahin kode destruct gan
    echo "Menampilkan spek komputer $this->name <hr>";
	}
}
$komputer_budi = new komputer("Budi", "Core i7", "2 GB");
echo $komputer_budi->spek();
echo $komputer_budi->nyalakan_komputer();

unset($komputer_budi);
echo "Object telah dihapus <hr>";
?>
