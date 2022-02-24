<?php
namespace NiuGengYun\EasyTBK\pinduoduo\request;

use NiuGengYun\EasyTBK\pinduoduo\RequestInterface;


class DdkGoodsDetailRequest implements RequestInterface
{
    /**
     * 查询多多进宝商品详情
     * @var string
     */
    private $type = 'pdd.ddk.goods.detail';

    /**
     * 商品ID，仅支持单个查询。例如：[123456]
     * @var
     */
    private $goodsIdList;

    private $customParameters;

    private $goodsSign;

    private $pid;
    
    private $searchId;
    
    private $zsDuoId;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setGoodsIdList($goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }


    public function getType()
    {
        return $this->type;
    }

    public function getGoodsIdList()
    {
        return $this->goodsIdList;
    }

    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    public function getCustomParameters()
    {
        return $this->customParameters;
    }

    public function setGoodsSign($goodsSign)
    {
        $this->goodsSign = $goodsSign;
    }

    public function getGoodsSign()
    {
        return $this->goodsSign;
    }

    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    public function getPid()
    {
        return $this->pid;
    }

    public function setSearchId($searchId)
    {
        $this->searchId = $searchId;
    }

    public function getSearchId()
    {
        return $this->searchId;
    }

    public function setZsDuoId($zsDuoId)
    {
        $this->zsDuoId = $zsDuoId;
    }

    public function getZsDuoId()
    {
        return $this->zsDuoId;
    }

    public function getParams()
    {
        return [
            'type'          => $this->type,
            'goods_id_list' => $this->goodsIdList,
            'goods_sign'    => $this->goodsSign,
            'pid'           => $this->pid,
            'search_id'     => $this->searchId,
            'zs_duo_id'     => $this->zsDuoId,
            'custom_parameters'       => $this->customParameters,
        ];
    }
}