<?php
/*
 * @author MYDev 2023.
 * @version 1.0.0
 * @link (https://my-dev.pro)
 */

namespace MyDev\WishlistApi\Api;


use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

interface  WishlistManagementInterface
{

    /**
     * Return wishlist items.
     *
     * @param int $customerId
     * @return \MyDev\WishlistApi\Api\Data\WishlistItemInterface[]
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function getWishlistItems($customerId);

    /**
     * Return wishlist items.
     *
     * @param int $customerId
     * @param string $productSku
     * @return \MyDev\WishlistApi\Api\Data\WishlistItemInterface[]
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function addItem($customerId, $productSku);

    /**
     * Return wishlist items.
     *
     * @param int $customerId
     * @param int $wishlistItemId
     * @return \MyDev\WishlistApi\Api\Data\WishlistItemInterface[]
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function removeItem($customerId, $wishlistItemId);

    /**
     * Return wishlist items.
     *
     * @param int $customerId
     * @param string $productSku
     * @return \MyDev\WishlistApi\Api\Data\WishlistItemInterface[]
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function removeBySku($customerId, $productSku);
}
