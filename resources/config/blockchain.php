<?php

/*
 * This file is part of the Laravel Blockchain package.
 *
 * (c) Famurewa Taiwo <famurewa_taiwo@yahoo.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


return [
	/**
	* Blockchain api provided by blockchain.com
	*/
	'blockchain_api' => env('BLOCKCHAIN_API'),
	/**
	* This is the default charge fee bitcoin miners at 0.00001
	*/
    'defaultBTCFee' => env('DEFAULT_BTC_FEE'),
    /*
    * This is your own transaction fee in btc
    */
    'transactionBTCFee' => env('TRANSACTION_BTC_FEE'),
];