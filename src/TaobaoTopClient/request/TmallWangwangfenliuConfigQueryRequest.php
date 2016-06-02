<?php
/**
 * TOP API: tmall.wangwangfenliu.config.query request
 * 
 * @author auto create
 * @since 1.0, 2013-11-01 16:53:56
 */
class TmallWangwangfenliuConfigQueryRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "tmall.wangwangfenliu.config.query";
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
