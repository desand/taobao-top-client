<?php
/**
 * TOP API: taobao.shop.remainshowcase.get request
 * 
 * @author auto create
 * @since 1.0, 2013-11-01 16:53:56
 */
class ShopRemainshowcaseGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.shop.remainshowcase.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
