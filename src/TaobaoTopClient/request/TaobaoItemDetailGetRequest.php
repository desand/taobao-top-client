<?php
/**
 * TOP API: taobao.item.detail.get request
 * 
 * @author desand create
 * @since 1.0, 2017-03-2- 16:53:56
 */
class TaobaoItemDetailGetRequest
{

	/**
	 * 单品的id
	 **/
	private $item_id;

	/**
	 * 需返回的字段列表.可选值:item,price,delivery,skuBase,skuCore,trade,feature,props,debug
	;字段之间用","分隔.
	 **/
	private $fields;

	private $apiParas = array();

	public function setItemId($id)
	{
		$this->item_id = $id;
		$this->apiParas["item_id"] = $id;
	}

	public function getItemId()
	{
		return $this->item_id;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function getApiMethodName()
	{
		return "taobao.item.detail.get";
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{
		RequestCheckUtil::checkNotNull($this->item_id,"item_id");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
