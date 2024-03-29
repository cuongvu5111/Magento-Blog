<?php

namespace Smart\Blog\Model\ResourceModel\CatPost;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';
    public function _construct()
    {
        $this->_init('Smart\Blog\Model\CatPost', 'Smart\Blog\Model\ResourceModel\CatPost');
    }
}
