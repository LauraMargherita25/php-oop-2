<?php
    class CreditCard {
        private $owner;
        private $creditCardID;
        private $expDate;

        public function __construct($_owner, $_creditCardID, $_expDate)
        {
            $this->owner = $_owner;
            $this->creditCardID = $_creditCardID;
            $this->expDate = $_expDate;
        }

        public function isValid()
        {
          $dateStr =  date_create_from_format('m/Y', $this->expDate);
          $dateFormatted = date_format($dateStr, 'M Y');

          if (strtotime($dateFormatted)> strtotime('today')) {
            return true;
          } else {
            return false;
          }
        }

    }