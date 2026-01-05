## 📦 Repository Description

Exclude specific WooCommerce product categories from the Shop page using the `pre_get_posts` hook—lightweight, fast, and plugin-free.


## 📘 README.md

### Exclude Product Category from WooCommerce Shop Page

This snippet allows you to exclude one or more WooCommerce product categories from appearing on the **Shop page**, without affecting single product pages or category URLs.

It hooks into WordPress’s `pre_get_posts` action and modifies the main WooCommerce shop query at runtime. No templates are overridden, and no database changes are made.

### ✅ Features

* Excludes products by **category ID**
* Affects **only the Shop page**
* Safe for performance (query-level filtering)
* Works with any WooCommerce-compatible theme
* Plugin-free solution


### 🧠 How It Works

WooCommerce uses the main WordPress query to load products on the Shop page.
This function intercepts that query and adds a `tax_query` condition to **exclude** specific `product_cat` terms.



### 🧩 Code Snippet for Theme Function.php File


### 🛠 Usage Instructions

1. Replace `392` with your **product category ID**
2. Add the code to:

   * `functions.php` (child theme recommended), or
   * A custom plugin file
3. Clear cache (if using caching plugins)


### 🧪 Notes

* This only affects the **Shop page** (`is_shop()`).
* Category archive pages remain accessible.
* To exclude multiple categories, add more IDs to the `terms` array.

'terms' => array( 392, 410, 512 ),


### 🔄 Variations

You can easily adapt this snippet to:

* Exclude categories from **product category archives**
* Target **specific user roles**
* Apply conditionally for **Elementor product widgets**

This is a classic WooCommerce “surgical fix”: minimal code, maximum control, zero bloat.
Exactly how store logic should be handled.
