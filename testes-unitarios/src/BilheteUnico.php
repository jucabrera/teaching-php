<?php
class BilheteUnico {
	private $createdAt;
	const PRAZO = 'P2Y';
	
	public function setCreatedAt(Datetime $date) {
		$this->createdAt = $date;
	}
	
	public function isValid() {
		$dateLimit = new Datetime ();
		$dateLimit->sub ( new DateInterval ( self::PRAZO ) );

		return $this->createdAt > $dateLimit;		
	}
}
