<?php

class Beanie {

	public const SIZES_AVAILLABLES = ['S','M','L','XL',];
	public const MATERIALS = ['laine','soie', 'coton', 'cachemire',];
	
    private int $id;

    private string $name;
    
	private ?float $price;
    private  string $descript;
    private  string $imagePath;

	private array $tailles = [];
	private array $matieres = [];

    /* ID */

    public function getId(): int {
		return $this->id;
	}
	

	public function setId(int $id): self {
		$this->id = $id;
		return $this;
	}


    /* name*/
	public function getName(): string {
		return $this->name;
	}

	public function setName(string $name): self {
		$this->name = $name;
		return $this;
	}

	/* PRICE */
	public function getPrice(): ?float {
		return $this->price;
	}
	
	public function setPrice(?float $price): self {
		$this->price = $price;
		return $this;
	}

    /*DESCRIPTION*/

	public function getDescript(): string {
		return $this->descript;
	}
	
	public function setDescript(string $descript): self {
		$this->descript = $descript;
		return $this;
	}

    
    /* IMAGE PATH*/
	public function getImagePath(): string {
		return $this->imagePath;
	}
	
	public function setImagePath(string $imagePath): self {
		$this->imagePath = $imagePath;
		return $this;
	}


	/* TAILLES DES PRODUITS */
	public function getTailles(): array {
		return $this->tailles;
	}
	
	public function setTailles(array $tailles): self {
		$this->tailles = $tailles;
		return $this;
	}

	/*MATIERES*/

	public function getMatieres(): array {
		return $this->matieres;
	}
	
	public function setMatieres(array $matieres): self {
		$this->matieres = $matieres;
		return $this;
	}
}