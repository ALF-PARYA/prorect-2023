<?php

class Beanie {

    private int $id;

    private string $name;
    
	private ?float $price;
    private  string $descript;
    private  string $imagePath;

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


	
}