<?php
namespace Weixin\Model;

/**
 * 商品信息
 */
class Sku
{

    /**
     * quantity
     * 上架的数量。(不支持填写0 或无限大)
     * 是
     */
    public $quantity = NULL;

    public function __construct($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getParams()
    {
        $params = array();
        
        if ($this->quantity != NULL) {
            $params['quantity'] = $this->quantity;
        }
        
        return $params;
    }
}
