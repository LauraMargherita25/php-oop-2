<?php
    class CreditCard {
        private $owner;
        private $number;
        private $expDate;

        public function __construct($_owner, $_number, $_expDate)
        {
            $this->owner = $_owner;
            $this->number = $_number;
            $this->expDate = $_expDate;
        }

        public function isValid ()
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