<?php
/**
 * Custom post types
 */

//Instantiate new class object
$track_blog = new MBC_Theme( 'track_blog' );

$track_blog->mbc_build_cpt( 'track-blog', 'Track Blog', 'Track Posts', $supports = array(), $settings = array(), $has_arch = true, $hier = true);

//Instantiate new class object
$the_shop = new MBC_Theme( 'the_shop' );

$the_shop->mbc_build_cpt( 'the-shop', 'The Shop', 'Shop Posts', $supports = array(), $settings = array(), $has_arch = true, $hier = true);

//Instantiate new class object
$the_lift = new MBC_Theme( 'the_lift' );

$the_lift->mbc_build_cpt( 'the-lift', 'The Lift', 'Lift Posts', $supports = array(), $settings = array(), $has_arch = true, $hier = true);

//Instantiate new class object
$tool_list = new MBC_Theme( 'tool_list' );

$tool_list->mbc_build_cpt( 'tool-list', 'Tool List', 'Tools', $supports = array(), $settings = array(), $has_arch = true, $hier = true);

//Instantiate new class object
$diy = new MBC_Theme( 'diy' );

$diy->mbc_build_cpt( 'diy', 'DIY', 'DIY', $supports = array(), $settings = array(), $has_arch = true, $hier = true);

//Instantiate new class object
$chassis = new MBC_Theme( 'chassis' );

$chassis->mbc_build_cpt( 'chassis', 'Chassis', 'Chassis', $supports = array(), $settings = array(), $has_arch = true, $hier = true);

//Instantiate new class object
$background_images = new MBC_Theme( 'background-images' );

$background_images->mbc_build_cpt( 'Background Images', 'Background Images', 'Background Images', $supports = array(), $settings = array(), $has_arch = true, $hier = true);