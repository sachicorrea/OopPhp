<?php

class Package
{
	private $category;
	private $service;
	private $weight;
	
	public function __construct($tip, $ser, $pes)
	{
		$this->category = $tip;
		$this->service = $ser;
		$this->weight = $pes;
	}

	public function Package()
	{
		return $this->category.$this->service.$this->weight;
	}

	public function getCategory()
	{
		return $this->category;
	}

	public function setCategory()
	{
		return $this->category;
	}

	public function getService()
	{
		return $this->service;
	}

	public function setService()
	{
		return $this->service;
	}

	public function getWeight()
	{
		return $this->weight;
	}

	public function setWeight()
	{
		return $this->weight;
	}

	public function CostMail()
	{
		if ($this->category == "envelope") {
			if ($this->service == "today" && $this->weight <= 5) {
			    return 12650;
		    }

            elseif ($this->service == "today" && $this->weight > 5) {
                return 12650 + (($this->weight-5) * 4450);
            } 

            elseif ($this->service == "next_day" && $this->weight <= 5) {
                return $this->weight * 5100;
            }

            elseif ($this->service == "next_day" && $this->weight > 5) {
                return 5100 + (($this->weight-5) * 1900);
            }
        }

		if ($this->category == "box") {
	
			if ($this->service == "today" && $this->weight <= 5) {
			    return 14000;
            }

            elseif ($this->service == "today" && $this->weight > 5) {
                return 14000 + (($this->weight-5) * 5100);
            }

            elseif ($this->service == "next_day" && $this->weight <= 5) {
                return 6300;
            }

            elseif ($this->service == "next_day" && $this->weight > 5) {
                return 6300 + (($this->weight-5) * 2300);
            }
	    }
    }		
}
?>