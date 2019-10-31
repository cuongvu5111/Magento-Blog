<?php

namespace Smart\Blog\Model\ResourceModel\Tag;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';
    public function _construct()
    {
        $this->_init('Smart\Blog\Model\Tag', 'Smart\Blog\Model\ResourceModel\Tag');
    }
}
