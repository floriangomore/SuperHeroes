<?php


class Team {
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $teamId;

    /**
     * @Column(type="string")
     */
    private $teamName;

    //TODO ADD AN ANNOTATION
    private $teamLogo;

    public function getTeamId(){
        return $this->teamId;
    }

    public function setTeamId($teamId){
        $this->teamId = $teamId;
    }

    public function getTeamName(){
        return $this->teamName;
    }

    public function setTeamName($teamName){
        $this->teamName = $teamName;
    }

    public function getTeamLogo(){
        return $this->teamLogo;
    }

    public function setTeamLogo($teamLogo){
        $this->teamLogo = $teamLogo;
    }
}


