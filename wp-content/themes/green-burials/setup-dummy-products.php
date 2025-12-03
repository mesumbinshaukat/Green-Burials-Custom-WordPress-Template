<?php
/**
 * Green Burials - Dummy Product Setup Script
 * Run this file once to populate WooCommerce with sample products
 * 
 * USAGE: Visit this file in your browser: http://localhost/custom-theme-template/wp-content/themes/green-burials/setup-dummy-products.php
 * Or include it in functions.php on theme activation
 */

// Load WordPress
// Path from: wp-content/themes/green-burials/ to root
require_once(__DIR__ . '/../../../wp-load.php');

// Check if WooCommerce is active
if (!class_exists('WooCommerce')) {
    die('WooCommerce must be installed and activated!');
}

// Security check
if (!current_user_can('manage_options')) {
    die('You do not have permission to run this script.');
}

echo '<h1>Green Burials - Product Setup</h1>';
echo '<p>Setting up product categories and dummy products...</p>';

// Create Product Categories
$categories = array(
    'water-cremation-urns' => 'Water Cremation Urns',
    'earth-burial-urns' => 'Earth Burial Urns',
    'caskets' => 'Caskets',
    'biodegradable-caskets' => 'Biodegradable Caskets',
    'burial-shrouds' => 'Burial Shrouds',
    'memorial-products' => 'Memorial Products',
    'memorial-petals' => 'Memorial Petals',
    'water-burials' => 'Water Burials',
);

echo '<h2>Creating Categories...</h2>';
foreach ($categories as $slug => $name) {
    $term = term_exists($name, 'product_cat');
    if (!$term) {
        $term = wp_insert_term($name, 'product_cat', array('slug' => $slug));
        echo '<p>✓ Created category: ' . $name . '</p>';
    } else {
        echo '<p>- Category already exists: ' . $name . '</p>';
    }
}

// Dummy Products Data
$products_data = array(
    // Water Cremation Urns
    array(
        'name' => 'Adult Size Turtle',
        'price' => 249.00,
        'category' => 'water-cremation-urns',
        'description' => 'Beautiful turtle-shaped biodegradable urn for water cremation. Made from natural materials that dissolve safely in water.',
        'featured' => true,
        'best_seller' => true,
    ),
    array(
        'name' => 'Compassion Water',
        'price' => 160.00,
        'category' => 'water-cremation-urns',
        'description' => 'Elegant water cremation urn with compassionate design. Perfect for ocean or lake ceremonies.',
        'featured' => true,
    ),
    array(
        'name' => 'Journey Water Urn',
        'price' => 129.00,
        'category' => 'water-cremation-urns',
        'description' => 'Simple yet dignified water burial urn for the final journey.',
        'featured' => true,
    ),
    array(
        'name' => 'Ocean Blue Pillow',
        'price' => 320.00,
        'sale_price' => 280.00,
        'category' => 'water-cremation-urns',
        'description' => 'Premium pillow-style urn in ocean blue. Biodegradable and eco-friendly.',
        'featured' => true,
    ),
    
    // Earth Burial Urns
    array(
        'name' => 'Unity Earth',
        'price' => 150.00,
        'category' => 'earth-burial-urns',
        'description' => 'Natural earth burial urn that returns to soil within months.',
        'best_seller' => true,
    ),
    array(
        'name' => 'Simplicity Earth',
        'price' => 100.00,
        'category' => 'earth-burial-urns',
        'description' => 'Simple, elegant design for earth burial. Made from sustainable materials.',
    ),
    array(
        'name' => 'Memorial White',
        'price' => 29.00,
        'category' => 'earth-burial-urns',
        'description' => 'Affordable white memorial urn for earth burial.',
    ),
    array(
        'name' => 'Nature\'s Return',
        'price' => 185.00,
        'category' => 'earth-burial-urns',
        'description' => 'Premium earth burial urn with natural wood finish.',
    ),
    
    // Caskets
    array(
        'name' => 'Woven Bamboo Casket',
        'price' => 120.00,
        'category' => 'biodegradable-caskets',
        'description' => 'Handwoven bamboo casket, fully biodegradable and sustainable.',
        'best_seller' => true,
    ),
    array(
        'name' => 'Seagrass Natural Casket',
        'price' => 895.00,
        'category' => 'biodegradable-caskets',
        'description' => 'Beautiful seagrass casket with natural finish.',
    ),
    array(
        'name' => 'Willow Eco Casket',
        'price' => 750.00,
        'category' => 'biodegradable-caskets',
        'description' => 'Traditional willow casket, handcrafted and eco-friendly.',
    ),
    array(
        'name' => 'Pine Box Casket',
        'price' => 450.00,
        'category' => 'caskets',
        'description' => 'Simple pine casket for traditional burial.',
    ),
    
    // Memorial Products
    array(
        'name' => 'Memorial Stone Marker',
        'price' => 75.00,
        'category' => 'memorial-products',
        'description' => 'Natural stone memorial marker for grave sites.',
    ),
    array(
        'name' => 'Biodegradable Memorial Plaque',
        'price' => 45.00,
        'category' => 'memorial-products',
        'description' => 'Eco-friendly memorial plaque made from recycled materials.',
    ),
    array(
        'name' => 'Tree Planting Memorial Kit',
        'price' => 65.00,
        'category' => 'memorial-products',
        'description' => 'Plant a tree in memory. Includes biodegradable urn and tree seed.',
    ),
    
    // Burial Shrouds
    array(
        'name' => 'Natural Cotton Shroud',
        'price' => 125.00,
        'category' => 'burial-shrouds',
        'description' => 'Pure cotton burial shroud, unbleached and natural.',
    ),
    array(
        'name' => 'Organic Linen Shroud',
        'price' => 175.00,
        'category' => 'burial-shrouds',
        'description' => 'Premium organic linen shroud for natural burial.',
    ),
    array(
        'name' => 'Wool Burial Wrap',
        'price' => 200.00,
        'category' => 'burial-shrouds',
        'description' => 'Soft wool burial wrap, biodegradable and dignified.',
    ),
    
    // Memorial Petals
    array(
        'name' => 'Bougainvillea Memorial Petals',
        'price' => 35.00,
        'category' => 'memorial-petals',
        'description' => 'Beautiful dried bougainvillea petals for memorial services.',
    ),
    array(
        'name' => 'Rose Petal Collection',
        'price' => 40.00,
        'category' => 'memorial-petals',
        'description' => 'Preserved rose petals in various colors for ceremonies.',
    ),
    array(
        'name' => 'Wildflower Mix Petals',
        'price' => 30.00,
        'category' => 'memorial-petals',
        'description' => 'Mixed wildflower petals for scattering ceremonies.',
    ),
    
    // Additional Products
    array(
        'name' => 'Eco Memory Box',
        'price' => 55.00,
        'category' => 'memorial-products',
        'description' => 'Small biodegradable memory box for keepsakes.',
    ),
    array(
        'name' => 'Bamboo Cremation Urn',
        'price' => 140.00,
        'category' => 'earth-burial-urns',
        'description' => 'Sustainable bamboo urn with modern design.',
    ),
    array(
        'name' => 'Ceramic Memorial Vase',
        'price' => 85.00,
        'category' => 'memorial-products',
        'description' => 'Hand-painted ceramic vase for memorial flowers.',
    ),
    array(
        'name' => 'Biodegradable Urn Vault',
        'price' => 220.00,
        'category' => 'earth-burial-urns',
        'description' => 'Protective biodegradable vault for urns.',
    ),
    array(
        'name' => 'Water Ceremony Kit',
        'price' => 95.00,
        'category' => 'water-burials',
        'description' => 'Complete kit for water burial ceremony including urn and petals.',
    ),
    array(
        'name' => 'Green Burial Starter Pack',
        'price' => 350.00,
        'category' => 'memorial-products',
        'description' => 'Everything needed for a complete green burial ceremony.',
    ),
);

echo '<h2>Creating Products...</h2>';
$created_count = 0;

foreach ($products_data as $product_data) {
    // Check if product already exists
    $existing = get_page_by_title($product_data['name'], OBJECT, 'product');
    if ($existing) {
        echo '<p>- Product already exists: ' . $product_data['name'] . '</p>';
        continue;
    }
    
    // Create product
    $product = new WC_Product_Simple();
    $product->set_name($product_data['name']);
    $product->set_status('publish');
    $product->set_catalog_visibility('visible');
    $product->set_description($product_data['description']);
    $product->set_short_description(substr($product_data['description'], 0, 100) . '...');
    $product->set_regular_price($product_data['price']);
    
    // Set sale price if exists
    if (isset($product_data['sale_price'])) {
        $product->set_sale_price($product_data['sale_price']);
    }
    
    // Set stock status
    $product->set_stock_status('instock');
    $product->set_manage_stock(false);
    
    // Save product
    $product_id = $product->save();
    
    // Assign category
    if (isset($product_data['category'])) {
        $term = get_term_by('slug', $product_data['category'], 'product_cat');
        if ($term) {
            wp_set_object_terms($product_id, $term->term_id, 'product_cat');
        }
    }
    
    // Set as featured
    if (isset($product_data['featured']) && $product_data['featured']) {
        $product->set_featured(true);
        $product->save();
    }
    
    // Add best seller tag
    if (isset($product_data['best_seller']) && $product_data['best_seller']) {
        update_post_meta($product_id, 'total_sales', rand(50, 200));
    }
    
    // Set a placeholder image (you can replace this with actual images)
    // For now, we'll just note that images should be added manually
    
    $created_count++;
    echo '<p>✓ Created product: ' . $product_data['name'] . ' - $' . $product_data['price'] . '</p>';
}

echo '<h2>Setup Complete!</h2>';
echo '<p><strong>' . $created_count . ' products created successfully.</strong></p>';
echo '<p>Note: Product images should be added manually through the WordPress admin panel for best results.</p>';
echo '<p><a href="' . admin_url('edit.php?post_type=product') . '">View Products in Admin</a></p>';
echo '<p><a href="' . home_url() . '">View Homepage</a></p>';
