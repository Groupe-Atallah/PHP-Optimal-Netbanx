<?php
/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU Lesser General Public License for more details.
 */
namespace Optimal\Netbanx\Model;

/**
 * File:        Card.php
 * Project:     PHP-Optimal-Netbanx
 *
 * @author      Al-Fallouji Bashar
 * 
 * Card model
 */
class Card extends Base
{
    /**
     * Bag properties definition 
     * @var array
     */
    protected $_fields = array(
        'type' => 'string',
        'cardNum' => 'string',
        'lastDigits' => 'string',
        'cardExpiry' => 'CardExpiry',
        'cvv' => 'string',
        'track1' => 'string',
        'track2' => 'string',
        'paymentToken' => 'string',
    );
}
