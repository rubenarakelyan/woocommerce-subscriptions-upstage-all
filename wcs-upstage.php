<?php
/**
 * Plugin Name: WooCommerce Subscriptions Upstage All
 * Plugin URI: https://github.com/rubenarakelyan/woocommerce-subscriptions-upstage-all/
 * Description: Disable Staging Mode for all subscriptions.
 * Author: Prospress Inc. and Ruben Arakelyan
 * Author URI: https://www.wackomenace.co.uk/
 * Version: 1.0
 * License: GPLv3
 *
 * GitHub Plugin URI: rubenarakelyan/woocommerce-subscriptions-upstage-all
 * GitHub Branch: master
 *
 * Copyright 2017 Prospress, Inc.  (email : freedoms@prospress.com)
 * Copyright 2025 Ruben Arakelyan  (email : ruben@arakelyan.uk)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package		WooCommerce Subscriptions
 * @author		Prospress Inc.
 * @since		1.0
 */

function wcs_upstage( $subscription_id ) {

	if ( ! WCS_Staging::is_duplicate_site() ) {
		return;
	}

	$subscription  = wcs_get_subscription( $subscription_id );
	$renewal_order = $subscription->get_last_order( 'all', 'renewal' );
	$renewal_order->set_payment_method( $subscription->payment_gateway );

	WC_Subscriptions_Payment_Gateways::trigger_gateway_renewal_payment_hook( $renewal_order );
}
add_action( 'woocommerce_scheduled_subscription_payment', 'wcs_upstage', 11, 1 );
