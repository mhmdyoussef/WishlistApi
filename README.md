# Whishlist APIs

### This is a Magento 2 Extension to add wishlist rest APIs

> __Note__: 🧬 Compatible with Magento V2.4.6


[![](https://img.shields.io/badge/API-yellow?style=for-the-badge)](https://docs.rs/crate/redant/latest)

| Description                                   |  Method  | Api                                         |
|:----------------------------------------------|:--------:|---------------------------------------------|
| List Wishlist items                           |   GET    | /V1/mydev/wishlist/items|
| Add prdouct to Customer Wishlist              |   POST   | /V1/mydev/wishlist/add/:productSku          |
| Delete item from customer Wishlist            |  DELETE  | /V1/mydev/wishlist/delete/:wishlistItemId   |
| Remove product from whishlist by product SKU  |  DELETE  |  /V1/mydev/wishlist/delete-item/:productSku |

