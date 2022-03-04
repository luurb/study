<?php

class ShopProduct implements IIdentityObject
{
    use PriceUtilities;
    use IdentityTrait;

    public static function storeIdentityObject(IIdentityObject $idObj) 
    {
    
    }
}