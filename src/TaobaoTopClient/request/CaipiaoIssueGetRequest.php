<?php
/**
 * TOP API: taobao.caipiao.issue.get request
 * 
 * @author auto create
 * @since 1.0, 2013-11-01 16:53:56
 */
class CaipiaoIssueGetRequest
{
	/** 
	 * 彩种的id
	 **/
	private $lotteryTypeIds;
	
	/** 
	 * 渠道编号
	 **/
	private $ttid;
	
	private $apiParas = array();
	
	public function setLotteryTypeIds($lotteryTypeIds)
	{
		$this->lotteryTypeIds = $lotteryTypeIds;
		$this->apiParas["lottery_type_ids"] = $lotteryTypeIds;
	}

	public function getLotteryTypeIds()
	{
		return $this->lotteryTypeIds;
	}

	public function setTtid($ttid)
	{
		$this->ttid = $ttid;
		$this->apiParas["ttid"] = $ttid;
	}

	public function getTtid()
	{
		return $this->ttid;
	}

	public function getApiMethodName()
	{
		return "taobao.caipiao.issue.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->lotteryTypeIds,"lotteryTypeIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
