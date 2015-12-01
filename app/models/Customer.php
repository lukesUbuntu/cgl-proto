<?php

class Customer extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $customer_id;

    /**
     *
     * @var integer
     */
    public $KMSD_ID;

    /**
     *
     * @var string
     */
    public $Title;

    /**
     *
     * @var string
     */
    public $FirstName;

    /**
     *
     * @var string
     */
    public $LastName;

    /**
     *
     * @var string
     */
    public $Surname;

    /**
     *
     * @var string
     */
    public $AreaCode;

    /**
     *
     * @var string
     */
    public $Phone;

    /**
     *
     * @var string
     */
    public $WorkPhone;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource('Customer');
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return array(
            'customer_id' => 'customer_id', 
            'KMSD_ID' => 'KMSD_ID', 
            'Title' => 'Title', 
            'FirstName' => 'FirstName', 
            'LastName' => 'LastName', 
            'Surname' => 'Surname', 
            'AreaCode' => 'AreaCode', 
            'Phone' => 'Phone', 
            'WorkPhone' => 'WorkPhone'
        );
    }

}
