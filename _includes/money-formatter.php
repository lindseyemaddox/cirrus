<?php
/*
 * @author: Eric Andre
 * @date: 2014-07-10
 * @description: Simple class to format numbers into currency
*/

class id_moneyFormat
{

	var $money;
	var $price;
	var $priceCheck;

	public function __construct($money)
	{
		$this->money = $money || '0.00';

	//format income with , for thousands and .00
		$money = explode('.', $money);
		$money = str_replace(',', '', $money[0]);
		$money = preg_replace('/[^0-9.]/', '', $money);
		$money = number_format($money, 2, '.', ',');
		//get a better value for checking <=
		$moneyCheck = str_replace(',', '', $money);
		$moneyCheck = explode('.', $moneyCheck);

		$this->priceCheck = $moneyCheck[0];
		$this->price = $money;
	} // end constructor

} // end id_moneyFormat Class


// EXAMPLE USAGE
// if(!isset($formatMoney)) {
//
// 	$someNumber = 12300;
//
// 	$formatMoney = new id_moneyFormat($someNumber);
//
// 	define("MONEY_CHECK", $formatMoney->priceCheck);
// 	define("MONEY_DISPLAY", $formatMoney->price);
// }

?>
