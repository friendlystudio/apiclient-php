<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AccountsInterface;
use Voximplant\Interfaces\ChargeAccountReturn;
use Voximplant\Interfaces\GetAccountDocumentsReturn;
use Voximplant\Interfaces\GetAccountInfoReturn;
use Voximplant\Interfaces\GetChildrenAccountsReturn;
use Voximplant\Interfaces\GetCurrencyRateReturn;
use Voximplant\Interfaces\GetMoneyAmountToChargeReturn;
use Voximplant\Interfaces\GetResourcePriceReturn;
use Voximplant\Interfaces\GetSubscriptionPriceReturn;
use Voximplant\Interfaces\SetAccountInfoReturn;
use Voximplant\Interfaces\SetChildAccountInfoReturn;
use Voximplant\Interfaces\TransferMoneyToChildAccountReturn;

class Accounts implements AccountsInterface
{
	protected $client;

	/** @ objectGetAccountInfo */
	protected $GetAccountInfoReturn;

	/** @ objectSetAccountInfo */
	protected $SetAccountInfoReturn;

	/** @ objectSetChildAccountInfo */
	protected $SetChildAccountInfoReturn;

	/** @ objectGetCurrencyRate */
	protected $GetCurrencyRateReturn;

	/** @ objectGetResourcePrice */
	protected $GetResourcePriceReturn;

	/** @ objectGetSubscriptionPrice */
	protected $GetSubscriptionPriceReturn;

	/** @ objectGetChildrenAccounts */
	protected $GetChildrenAccountsReturn;

	/** @ objectTransferMoneyToChildAccount */
	protected $TransferMoneyToChildAccountReturn;

	/** @ objectGetMoneyAmountToCharge */
	protected $GetMoneyAmountToChargeReturn;

	/** @ objectChargeAccount */
	protected $ChargeAccountReturn;

	/** @ objectGetAccountDocuments */
	protected $GetAccountDocumentsReturn;


	public function __construct($client)
	{
		$this->client = $client;

		$this->GetAccountInfoReturn = new GetAccountInfoReturn();
		$this->SetAccountInfoReturn = new SetAccountInfoReturn();
		$this->SetChildAccountInfoReturn = new SetChildAccountInfoReturn();
		$this->GetCurrencyRateReturn = new GetCurrencyRateReturn();
		$this->GetResourcePriceReturn = new GetResourcePriceReturn();
		$this->GetSubscriptionPriceReturn = new GetSubscriptionPriceReturn();
		$this->GetChildrenAccountsReturn = new GetChildrenAccountsReturn();
		$this->TransferMoneyToChildAccountReturn = new TransferMoneyToChildAccountReturn();
		$this->GetMoneyAmountToChargeReturn = new GetMoneyAmountToChargeReturn();
		$this->ChargeAccountReturn = new ChargeAccountReturn();
		$this->GetAccountDocumentsReturn = new GetAccountDocumentsReturn();
	}


	/**
	 * @method Gets the account's info such as account_id, account_name, account_email etc.
	 */
	public function GetAccountInfo(Params\GetAccountInfoParams $params = null): GetAccountInfoReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetAccountInfoReturn->$key = $value;
		}
		return $this->GetAccountInfoReturn;
	}


	/**
	 * @method Edits the account's profile.
	 */
	public function SetAccountInfo(Params\SetAccountInfoParams $params = null): SetAccountInfoReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->SetAccountInfoReturn->$key = $value;
		}
		return $this->SetAccountInfoReturn;
	}


	/**
	 * @method Edits the account's profile.
	 */
	public function SetChildAccountInfo(Params\SetChildAccountInfoParams $params = null): SetChildAccountInfoReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->SetChildAccountInfoReturn->$key = $value;
		}
		return $this->SetChildAccountInfoReturn;
	}


	/**
	 * @method Gets the exchange rate on selected date (per USD).
	 */
	public function GetCurrencyRate(Params\GetCurrencyRateParams $params = null): GetCurrencyRateReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetCurrencyRateReturn->$key = $value;
		}
		return $this->GetCurrencyRateReturn;
	}


	/**
	 * @method Gets the resource price.
	 */
	public function GetResourcePrice(Params\GetResourcePriceParams $params = null): GetResourcePriceReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetResourcePriceReturn->$key = $value;
		}
		return $this->GetResourcePriceReturn;
	}


	/**
	 * @method Gets the subscription template price.
	 */
	public function GetSubscriptionPrice(Params\GetSubscriptionPriceParams $params = null): GetSubscriptionPriceReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetSubscriptionPriceReturn->$key = $value;
		}
		return $this->GetSubscriptionPriceReturn;
	}


	/**
	 * @method Gets the info about all children accounts.
	 */
	public function GetChildrenAccounts(Params\GetChildrenAccountsParams $params = null): GetChildrenAccountsReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetChildrenAccountsReturn->$key = $value;
		}
		return $this->GetChildrenAccountsReturn;
	}


	/**
	 * @method Transfer the parent account's money to the child account or transfer the child's money to the parent account if the money amount is negative.
	 */
	public function TransferMoneyToChildAccount(Params\TransferMoneyToChildAccountParams $params = null): TransferMoneyToChildAccountReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->TransferMoneyToChildAccountReturn->$key = $value;
		}
		return $this->TransferMoneyToChildAccountReturn;
	}


	/**
	 * @method Get the recommended money amount to charge.
	 */
	public function GetMoneyAmountToCharge(Params\GetMoneyAmountToChargeParams $params = null): GetMoneyAmountToChargeReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetMoneyAmountToChargeReturn->$key = $value;
		}
		return $this->GetMoneyAmountToChargeReturn;
	}


	/**
	 * @method Charges the account in the manual mode. You should call the ChargeAccount function to charge the subscriptions having the auto_charge=false.
	 */
	public function ChargeAccount(Params\ChargeAccountParams $params = null): ChargeAccountReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->ChargeAccountReturn->$key = $value;
		}
		return $this->ChargeAccountReturn;
	}


	/**
	 * @method Gets the account documents and the verification states.
	 */
	public function GetAccountDocuments(Params\GetAccountDocumentsParams $params = null): GetAccountDocumentsReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetAccountDocumentsReturn->$key = $value;
		}
		return $this->GetAccountDocumentsReturn;
	}
}