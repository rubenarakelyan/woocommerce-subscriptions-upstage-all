> IMPORTANT: This code is made available in the hope that it will be useful, but **without any warranty**. See the GNU General Public License included with the code for more details. Automattic or WooCommerce support services are also not available to assist with the use of this code.
>
> WARNING! This plugin will process automatic payments in staging mode for **all** subscriptions. Ensure this is what you're looking for. You most likely don't want this behaviour.
>
> This plugin is a fork of [woocommerce-subscriptions-upstage](https://github.com/woocommerce/woocommerce-subscriptions-upstage), which only acts on specific subscriptions.

# WooCommerce Subscriptions Upstage

Using [WooCommerce Subscriptions](https://woocommerce.com/products/woocommerce-subscriptions/)? Need to test automatic payments on a staging site?

By default, when WooCommerce Subscriptions detects a change in a site's URL, it switches to [_Staging Mode_](https://docs.woocommerce.com/document/subscriptions-handles-staging-sites/). In _Staging Mode_, all subscriptions are forced to use manual renewals. This prevents accidental, duplicate renewal payments being processed by staging sites.

On occasion, there is a need to process automatic payments on staging sites, generally for testing.

This plugin can be used to trigger automatic payments for all subscriptions when Subscriptions is in _Staging Mode_.

## Usage

1. Download the [latest version of the plugin](https://github.com/rubenarakelyan/woocommerce-subscriptions-upstage-all/archive/master.zip)
1. [Install & activate](https://codex.wordpress.org/Managing_Plugins#Installing_Plugins) the plugin

[Automatic renewal payments](https://docs.woocommerce.com/document/subscriptions/renewal-process/) will then be triggered for all subscriptions.

## Requirements

The plugin will only trigger automatic payments when the site is in [_Staging Mode_](https://docs.woocommerce.com/document/subscriptions-handles-staging-sites/), it does nothing when the site is in _Live Mode_.

When a scheduled renewal event occurs, this plugin will trigger the [automatic renewal payment](https://docs.woocommerce.com/document/subscriptions/renewal-process/) process.

## Reporting Issues

If you find an problem or would like to request this plugin be extended, please [open a new Issue](https://github.com/rubenarakelyan/woocommerce-subscriptions-upstage-all/issues/new).
