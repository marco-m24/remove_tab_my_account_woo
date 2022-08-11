<?php
// COPIA QUESTO CODICE NEL FILE FUNCTION DEL TUO TEMA WORDPRESS
/**
 * Remove Edit Account tab.
 * 
 * @return array Items.
 */
function mrc_remove_edit_account_tab( $items ) {

    unset( $items['edit-account'] );
    return $items;
}
add_filter ( 'woocommerce_account_menu_items', 'mrc_remove_edit_account_tab' );
