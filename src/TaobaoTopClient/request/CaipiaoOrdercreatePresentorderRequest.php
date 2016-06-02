<?php
/**
 * TOP API: taobao.caipiao.ordercreate.presentorder request
 * 
 * @author auto create
 * @since 1.0, 2013-11-01 16:53:56
 */
class CaipiaoOrdercreatePresentorderRequest
{
	/** 
	 * 大乐购追加
	 **/
	private $dltPursue;
	
	/** 
	 * 费用
	 **/
	private $fees;
	
	/** 
	 * 彩期
	 **/
	private $issue;
	
	/** 
	 * 彩种编号
	 **/
	private $lotteryTypeId;
	
	/** 
	 * 手机号
	 **/
	private $mobiles;
	
	/** 
	 * 倍数
	 **/
	private $multis;
	
	/** 
	 * 选号
	 **/
	private $numbers;
	
	/** 
	 * 来源	wap和客户端都是1，只有pc是0
	 **/
	private $rewardId;
	
	/** 
	 * 电商id
	 **/
	private $shopId;
	
	/** 
	 * 总数
	 **/
	private $stakes;
	
	/** 
	 * 赠送总金额
	 **/
	private $totalFee;
	
	/** 
	 * 渠道编号
	 **/
	private $ttid;
	
	/** 
	 * 赠送语
	 **/
	private $words;
	
	private $apiParas = array();
	
	public function setDltPursue($dltPursue)
	{
		$this->dltPursue = $dltPursue;
		$this->apiParas["dlt_pursue"] = $dltPursue;
	}

	public function getDltPursue()
	{
		return $this->dltPursue;
	}

	public function setFees($fees)
	{
		$this->fees = $fees;
		$this->apiParas["fees"] = $fees;
	}

	public function getFees()
	{
		return $this->fees;
	}

	public function setIssue($issue)
	{
		$this->issue = $issue;
		$this->apiParas["issue"] = $issue;
	}

	public function getIssue()
	{
		return $this->issue;
	}

	public function setLotteryTypeId($lotteryTypeId)
	{
		$this->lotteryTypeId = $lotteryTypeId;
		$this->apiParas["lottery_type_id"] = $lotteryTypeId;
	}

	public function getLotteryTypeId()
	{
		return $this->lotteryTypeId;
	}

	public function setMobiles($mobiles)
	{
		$this->mobiles = $mobiles;
		$this->apiParas["mobiles"] = $mobiles;
	}

	public function getMobiles()
	{
		return $this->mobiles;
	}

	public function setMultis($multis)
	{
		$this->multis = $multis;
		$this->apiParas["multis"] = $multis;
	}

	public function getMultis()
	{
		return $this->multis;
	}

	public function setNumbers($numbers)
	{
		$this->numbers = $numbers;
		$this->apiParas["numbers"] = $numbers;
	}

	public function getNumbers()
	{
		return $this->numbers;
	}

	public function setRewardId($rewardId)
	{
		$this->rewardId = $rewardId;
		$this->apiParas["reward_id"] = $rewardId;
	}

	public function getRewardId()
	{
		return $this->rewardId;
	}

	public function setShopId($shopId)
	{
		$this->shopId = $shopId;
		$this->apiParas["shop_id"] = $shopId;
	}

	public function getShopId()
	{
		return $this->shopId;
	}

	public function setStakes($stakes)
	{
		$this->stakes = $stakes;
		$this->apiParas["stakes"] = $stakes;
	}

	public function getStakes()
	{
		return $this->stakes;
	}

	public function setTotalFee($totalFee)
	{
		$this->totalFee = $totalFee;
		$this->apiParas["total_fee"] = $totalFee;
	}

	public function getTotalFee()
	{
		return $this->totalFee;
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

	public function setWords($words)
	{
		$this->words = $words;
		$this->apiParas["words"] = $words;
	}

	public function getWords()
	{
		return $this->words;
	}

	public function getApiMethodName()
	{
		return "taobao.caipiao.ordercreate.presentorder";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dltPursue,"dltPursue");
		RequestCheckUtil::checkNotNull($this->fees,"fees");
		RequestCheckUtil::checkNotNull($this->issue,"issue");
		RequestCheckUtil::checkNotNull($this->lotteryTypeId,"lotteryTypeId");
		RequestCheckUtil::checkNotNull($this->mobiles,"mobiles");
		RequestCheckUtil::checkNotNull($this->multis,"multis");
		RequestCheckUtil::checkNotNull($this->numbers,"numbers");
		RequestCheckUtil::checkNotNull($this->rewardId,"rewardId");
		RequestCheckUtil::checkNotNull($this->shopId,"shopId");
		RequestCheckUtil::checkNotNull($this->stakes,"stakes");
		RequestCheckUtil::checkNotNull($this->totalFee,"totalFee");
		RequestCheckUtil::checkNotNull($this->ttid,"ttid");
		RequestCheckUtil::checkNotNull($this->words,"words");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
