<?php
/*
 * @author MYDev 2023.
 * @version 1.0.0
 * @link (https://my-dev.pro)
 */

namespace MyDev\WishlistApi\Api\Data;

/**
 *
 */
interface ProductPriceInterface
{


    /**
     * @param string $productSku
     *
     */
    public function getPrice(string $productSku);

}
