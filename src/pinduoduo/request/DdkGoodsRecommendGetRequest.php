<?php
namespace NiuGengYun\EasyTBK\pinduoduo\request;

use NiuGengYun\EasyTBK\pinduoduo\RequestInterface;


class DdkGoodsRecommendGetRequest implements  RequestInterface
{

    private $type = 'pdd.ddk.goods.recommend.get';

    private $offset;

    private $limit;

    private $channelType;

    private $catId;

    private $customParameters;



    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    public function getOffset()
    {
        return $this->offset;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    public function getLimit()
    {
        return $this->limit;
    }

    public function setChannelType($channelType)
    {
        $this->channelType = $channelType;
    }

    public function getChannelType()
    {
        return $this->channelType;
    }

    public function setCatId($catId)
    {
        $this->catId = $catId;
    }

    public function getCatId()
    {
        return $this->catId;
    }

    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    public function getCustomParameters()
    {
        return $this->customParameters;
    }

    public function getParams()
    {
        $params = [
            'type'         => $this->type,
            'offset'       => $this->offset,
            'limit'        => $this->limit,
            'channel_type' => intval($this->channelType),
            'cat_id'       => $this->catId,
            'custom_parameters'       => $this->customParameters,
        ];
        return $params;
    }
}
