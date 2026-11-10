<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
add_filter( 'trp_no_translate_selectors', 'trpc_no_stranslate_selectors', 10, 2);
function trpc_no_stranslate_selectors($selectors_array, $language){
    $selectors_array[] = '.woocommerce-cart-form';
	$selectors_array[] = '.woocommerce-cart-form processing';
	$selectors_array[] = 'td.product-remove';
    return $selectors_array;
}


</script>
<!-- end Simple Custom CSS and JS -->
