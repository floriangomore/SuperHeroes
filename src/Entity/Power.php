<?php



class Power{

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $powerId;

    /**
     * @Column(type="string")
     */
    private $powerName;

    /**
     * @Column(type="string")
     */
    private $powerDescription;


    public function getPowerId(){
        return $this->powerId;
    }


    public function setPowerId($powerId){
        $this->powerId = $powerId;
        return $powerId;
    }


    public function getPowerName(){
        return $this->powerName;
    }


    public function setPowerName($powerName){
        $this->powerName = $powerName;
        return $this->powerName;
    }

    public function getPowerDescription(){
        return $this->powerDescription;
    }


    public function setPowerDescription($powerDescription){
        $this->powerDescription = $powerDescription;
        return $this->getPowerDescription();
    }

}


