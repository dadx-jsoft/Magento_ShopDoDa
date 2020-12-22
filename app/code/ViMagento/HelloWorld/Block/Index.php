<?php


namespace ViMagento\HelloWorld\Block;


use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Magento\Framework\View\Element\Template;

class Index extends \Magento\Framework\View\Element\Template
{
    protected $collectionFactory;

    public function __construct(Template\Context $context, array $data = [], CollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    public function getProduct()
    {
        $productCollection = $this->collectionFactory->create();
        $productCollection->addAttributeToSelect('*')->setPageSize(5);
        return $productCollection;
    }
}
