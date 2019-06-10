<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AddDialogflowKeyReturn;
use Voximplant\Interfaces\BindDialogflowKeysReturn;
use Voximplant\Interfaces\DelDialogflowKeyReturn;
use Voximplant\Interfaces\DialogflowCredentialsInterface;
use Voximplant\Interfaces\GetDialogflowKeysReturn;

class DialogflowCredentials implements DialogflowCredentialsInterface
{
	protected $client;

	/** @ objectAddDialogflowKey */
	protected $AddDialogflowKeyReturn;

	/** @ objectDelDialogflowKey */
	protected $DelDialogflowKeyReturn;

	/** @ objectGetDialogflowKeys */
	protected $GetDialogflowKeysReturn;

	/** @ objectBindDialogflowKeys */
	protected $BindDialogflowKeysReturn;


	public function __construct($client)
	{
		$this->client = $client;

		$this->AddDialogflowKeyReturn = new AddDialogflowKeyReturn();
		$this->DelDialogflowKeyReturn = new DelDialogflowKeyReturn();
		$this->GetDialogflowKeysReturn = new GetDialogflowKeysReturn();
		$this->BindDialogflowKeysReturn = new BindDialogflowKeysReturn();
	}


	/**
	 * @method Add Dialogflow key
	 */
	public function AddDialogflowKey(Params\AddDialogflowKeyParams $params = null): AddDialogflowKeyReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->AddDialogflowKeyReturn->$key = $value;
		}
		return $this->AddDialogflowKeyReturn;
	}


	/**
	 * @method Remove Dialogflow key
	 */
	public function DelDialogflowKey(Params\DelDialogflowKeyParams $params = null): DelDialogflowKeyReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->DelDialogflowKeyReturn->$key = $value;
		}
		return $this->DelDialogflowKeyReturn;
	}


	/**
	 * @method Get Dialogflow keys
	 */
	public function GetDialogflowKeys(Params\GetDialogflowKeysParams $params = null): GetDialogflowKeysReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetDialogflowKeysReturn->$key = $value;
		}
		return $this->GetDialogflowKeysReturn;
	}


	/**
	 * @method Bind a Dialogflow key to the specified applications
	 */
	public function BindDialogflowKeys(Params\BindDialogflowKeysParams $params = null): BindDialogflowKeysReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->BindDialogflowKeysReturn->$key = $value;
		}
		return $this->BindDialogflowKeysReturn;
	}
}