<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 2/25/2015
 * Time: 7:32 AM
 */

class Supplier extends Eloquent{

    protected $table = 'suppliers';

    public static $rules = array(
        'supplier_name' => 'required',
        'supplier_address' => 'required'
    );
} 