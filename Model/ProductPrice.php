<?php
/*
 * @author MYDev 2023.
 * @version 1.0.0
 * @link (https://my-dev.pro)
 */

namespace MyDev\WishlistApi\Model;

class ProductPrice implements \MyDev\WishlistApi\Api\Data\ProductPriceInterface
{

    /**
     * @var \Magento\Catalog\Model\ProductRepository
     */
    protected $_productRepository;

    public function __construct(
        \Magento\Catalog\Model\ProductRepository $productRepository,
    )
    {
        $this->_productRepository = $productRepository;
    }

    /**
     * @param $productSku
     * @return $this
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getPrice($productSku)
    {
        // TODO: Implement getPrice() method.
        $this->_productRepository->get($productSku)->getPrice();
        return $this;
    }
}
