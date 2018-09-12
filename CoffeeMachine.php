<?php

/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/09/2018
 * Time: 23:18
 */
class CoffeeMachine
{
    var $started;
    var $coffeeMachine;
    var $beans;
    var $watherTank;
    var $makingCoffee;

    var $stopped;

    function __construct($action)
    {

        // Transitions : to do
        /*
        ** inject information to initialize variables
        */
        $this->coffeeMachine = false;
        $this->started = false;
        $this->beans = false;
        $this->watherTank = false;
        $this->makingCoffee = false;
        $this->stopped = false;
        $coffeeMachine = true;
        $started = true;
        /*
         **  test all environment to to make delicious coffee
         */
        // Transitions : to do
        if ($started && $coffeeMachine) { //done ->
            //doing->
            $this->fillBeans();
            //on hold->
            $this->fillWtherTank();
            //on hold->
            $this->makingCoffee();
            //to do->
            $this->MachineStopped(); //failed
        }

    }

    /**
     * @return mixed
     */
    public function getCoffeeMachine()
    {
        $this->coffeeMachine = false;
        return $this->getDisplayStates();

    }

    /**
     * @param mixed $coffeeMachine
     */
    public function setCoffeeMachine($coffeeMachine = false)
    {
        $this->coffeeMachine = $coffeeMachine;

    }

    /**
     * @return mixed
     */
    public function getStarted()
    {
        return $this->started;
    }

    /**
     * @param mixed $started
     */
    public function setStarted($started = false)
    {
        $this->started = $started;
    }

    /**
     * @return mixed
     */
    public function getStopped()
    {
        return $this->stopped;
    }

    /**
     * @param mixed $stopped
     */
    public function setStopped($stopped = false)
    {
        $this->stopped = $stopped;
    }

    /**
     * @return mixed
     */
    public function getWatherTank()
    {
        return $this->watherTank;
    }

    /**
     * @param mixed $watherTank
     */
    public function setWatherTank($watherTank = false)
    {
        $this->watherTank = $watherTank;
    }

    /**
     * @return mixed
     */
    public function getMakingCofee()
    {
        return $this->makingCofee;
    }

    /**
     * @param mixed $makingCofee
     */
    public function setMakingCofee($makingCofee = false)
    {
        $this->makingCofee = $makingCofee;
    }

    /**
     * @return mixed
     */
    public function getBeans()
    {
        return $this->beans;
    }

    /**
     * @param mixed $beans
     */
    public function setBeans($beans = false)
    {
        $this->beans = $beans;
    }


    public function fillBeans()
    {
        if ($this->getBeans()) {
            return 'fill beans';
        }

        $this->beans = true;
    }


    public function fillWtherTank()
    {
        if ($this->getBeans()) {
            return 'fill Wther Tank';
        }
        $this->watherTank = true;
    }

    public function makingCoffee()
    {
        if ($this->getMakingCofee()) {
            return 'Get new coffee machine';
        }
        $this->makingCoffee = true;

    }


    public function MachineStopped()
    {
        $error = array("Turn old coffee machine off and on again", "Repair old coffee machine");
        if (!$this->makingCoffee === true) {
            return array_rand($error, 1);
        }
    }


}

