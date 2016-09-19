<?php
/**
 * TOP API: taobao.tae.item.detail.get request
 * 
 * @author auto create
 * @since 1.0, 2013-11-01 16:53:56
 */
class TaobaoTaeItemDetailGetRequest
{

	/**
	 * action的id
	 **/
	private $id;

	/**
	 * 需返回的字段列表.可选值:num_iid,seller_id,nick,title,price,volume,pic_url,item_url,shop_url
	;字段之间用","分隔.
	 **/
	private $fields;

	private $open_iid;

	private $apiParas = array();

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
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

	public function setOpenIid($open_iid)
	{
		$this->open_iid = $open_iid;
		$this->apiParas["open_iid"] = $open_iid;
	}

	public function getApiMethodName()
	{
		return "taobao.tae.item.detail.get";
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
