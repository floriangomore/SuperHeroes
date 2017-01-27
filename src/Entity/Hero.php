<?php

class Hero{

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(type="string")
     */
    private $hero_first_name;

    /**
     * @Column(type="string")
     */
    private $hero_last_name;

    /**
     * @Column(type="string")
     */
    private $hero_pseudo;

    /**
     * @Column(type="string")
     */
    private $hero_country;

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $hero_team_id;


    private $hero_logo;

    public function __construct(){
        $this->reportedBugs = new ArrayCollection();
        $this->assignedBugs = new ArrayCollection();
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
        return $this;
    }
    public function getHeroFirstName(){
        return $this->hero_first_name;
    }

    public function setHeroFirstName($hero_first_name){
        $this->hero_first_name = $hero_first_name;
        return $this;
    }

    public function getHeroLastName(){
        return $this->hero_last_name;
    }

    public function setHeroLastName($hero_last_name){
        $this->hero_last_name = $hero_last_name;
        return $this;
    }

    public function getHeroPseudo(){
        return $this->hero_pseudo;
    }

    public function setHeroPseudo($hero_pseudo){
        $this->hero_pseudo = $hero_pseudo;;
        return $this->hero_pseudo;
    }

    public function getHeroCountry(){
        return $this->hero_country;
    }

    public function setHeroCountry($hero_country){
        $this->hero_country = $hero_country;
    }

    public function getHeroTeamId(){
        return $this->hero_team_id;
    }

    public function setHeroTeamId($hero_team_name){
        $this->hero_team_name = $hero_team_name;
        return $this->hero_team_id;
    }

    public function getHeroTeamName(){
        return $this->hero_team_name;
    }

    public function setHeroTeamName($hero_team_name){
        $this->hero_team_name = $hero_team_name;
        return $this->hero_team_name;
    }



}









