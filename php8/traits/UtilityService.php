<?php


class UtilityService 
{  
    use PriceUtilities;
    use TaxTools {
        TaxTools::calculateTax insteadOf PriceUtilities;
        PriceUtilities::calculateTax as basicTax;
    }
}