<?php

    class Order {
        private $orderID;
        private $name; //il nome dello user
        private $creditCard;

        public function __construct(int $_orderID, string $_name, CreditCard $_creditCard)
        {
            $this->orderID = $_orderID;
            $this->name = $_name;
            $this->creditCard = $_creditCard;
        }

        public function checkOut()
        {
            if ($this->creditCard->isValid()) {
                return "You can buy";
            } else {
                return "You can't buy";
            }
        }

    }