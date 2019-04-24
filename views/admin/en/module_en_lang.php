<?php
/**
* Shop System Plugins:
* - Terms of Use can be found under:
* https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
* - License can be found under:
* https://github.com/wirecard/oxid-ee/blob/master/LICENSE
*/

$sLangName = 'English';

$aLang = array(
    'charset' => 'UTF-8',
    'account_holder_title' => 'Account Owner',
    'amount' => 'Amount',
    'cancel' => 'Cancel',
    'canceled_payment_process' => 'You have canceled the payment process.',
    'capture' => 'Capture',
    'config_additional_info' => 'Send Additional Information',
    'config_additional_info_desc' => 'Additional data will be sent for the purpose of fraud protection. This additional data includes billing/shipping address, shopping basket and descriptor.',
    'config_base_url' => 'Wirecard Server Address (URL)',
    'config_base_url_desc' => 'Wirecard Server Address (URL) (e.g. https://api.wirecard.com).',
    'config_country_code' => 'Country Code',
    'config_country_code_desc' => 'Sofort. requires a valid country code to use the correct logo (i.e. en_gb).',
    'config_delete_cancel_order' => 'Delete Canceled Order',
    'config_delete_cancel_order_desc' => 'Automatically delete order after canceled payment process.',
    'config_delete_failure_order' => 'Delete Failed Order',
    'config_delete_failure_order_desc' => 'Automatically delete order after failed payment process.',
    'config_descriptor' => 'Descriptor',
    'config_descriptor_desc' => 'Send text which is displayed on the bank statement issued to your consumer by the financial service provider.',
    'config_email' => 'Your email address',
    'config_http_password' => 'Password',
    'config_http_user' => 'Username',
    'config_logo_variant' => 'Logo version',
    'config_logo_variant_desc' => 'Show either standard or descriptive logo version to your consumers.',
    'config_merchant_account_id' => 'Merchant Account ID (MAID)',
    'config_merchant_secret' => 'Secret Key',
    'config_message' => 'Your message',
    'config_payment_action' => 'Payment Action',
    'config_payment_action_desc' => 'Select between "Purchase" to capture/invoice your order automatically or "Authorization" to capture/invoice manually.',
    'config_reply_to' => 'Reply to (optionally)',
    'config_shopping_basket' => 'Shopping Basket',
    'config_shopping_basket_desc' => 'For the purpose of confirmation, payment supports shopping basket display during checkout. To enable this feature, activate Shopping Basket.',
    'config_ssl_max_limit' => 'Non 3-D Secure Max. Limit',
    'config_ssl_max_limit_desc' => 'This amount forces 3-D Secure transactions. Enter "null" to disable the Non 3-D Secure Max. Limit.',
    'config_three_d_merchant_account_id' => '3-D Secure MAID',
    'config_three_d_merchant_account_id_desc' => 'Unique identifier assigned to your 3-D Secure merchant account. Can be set to "null" to force SSL process.',
    'config_three_d_merchant_secret' => '3-D Secure Secret Key',
    'config_three_d_merchant_secret_desc' => 'Secret Key is mandatory to calculate the Digital Signature for the 3-D Secure payment. Can be set to "null" to force SSL process.',
    'config_three_d_min_limit' => '3-D Secure Min. Limit',
    'config_three_d_min_limit_desc' => 'This amount forces 3-D Secure transactions. Enter "null" to disable the 3-D Secure Min. Limit.',
    'copy_xml_text' => 'Copy XML',
    'credit' => 'Refund',
    'default_currency' => 'Default Currency',
    'enter_country_code_error' => 'Please enter a valid country code.',
    'enter_valid_email_error' => 'Please enter a valid email address.',
    'error_credentials' => 'Test failed, please check your credentials.',
    'error_save_failed' => 'Configuration not valid. Save aborted.',
    'heading_title' => 'Wirecard',
    'heading_title_support' => 'Wirecard Support',
    'heading_title_transaction_details' => 'Wirecard Transactions',
    'manipulated' => 'manipulated',
    'message_empty_error' => 'Message cannot be empty.',
    'more_info' => 'More info',
    'no' => 'No',
    'order_error' => 'An error occurred during the payment process. Please try again.',
    'order_error_info' => 'An error occurred in the payment process. The order has been canceled.',
    'order_status' => 'Order status',
    'order_status_authorized' => 'Authorized',
    'order_status_cancelled' => 'Cancelled',
    'order_status_failed' => 'Failed',
    'order_status_pending' => 'Pending',
    'order_status_purchased' => 'Paid',
    'order_status_refunded' => 'Refunded',
    'panel_action' => 'Action',
    'panel_amount' => 'Amount',
    'panel_currency' => 'Currency',
    'panel_details' => 'Details',
    'panel_order_id' => 'Order Reference',
    'panel_order_number' => 'Order Number',
    'panel_parent_transaction_id' => 'Parent Transaction ID',
    'panel_payment_method' => 'Payment Method',
    'panel_provider_transaction_id' => 'Provider Transaction ID',
    'panel_transaction' => 'Transaction',
    'panel_transaction_copy' => 'Copy XML',
    'panel_transaction_date' => 'Date',
    'panel_transaction_state' => 'Transaction State',
    'panel_transcation_id' => 'Transaction ID',
    'pay' => 'Capture',
    'payment_awaiting' => 'Awaiting payment from Wirecard.',
    'payment_cost' => 'Payment cost',
    'payment_failed_text' => 'Payment process failed.',
    'payment_method_settings' => 'Payment Method Settings',
    'payment_success_text' => 'Payment process successful.',
    'redirect_text' => 'You are being redirected. Please wait.',
    'refund' => 'Refund',
    'requestId' => 'Request ID',
    'secured' => 'secured',
    'send_email' => 'Submit',
    'shipping_title' => 'Shipping',
    'SHOP_MODULE_blEmailOnPending' => 'Send notification emails when order pending',
    'SHOP_MODULE_GROUP_emails' => 'Emails',
    'success_credentials' => 'Merchant configuration was successfully tested.',
    'success_email' => 'Email sent successfully.',
    'support_description' => 'System information will be automatically added to your message and will be sent to',
    'support_email_from' => 'From',
    'support_email_modules' => 'Other modules',
    'support_email_module_id' => 'Module ID',
    'support_email_module_title' => 'Module Title',
    'support_email_module_version' => 'Module Version',
    'support_email_php' => 'PHP Version',
    'support_email_reply_to' => 'Reply to',
    'support_email_shop_edition' => 'OXID eShop Edition',
    'support_email_shop_version' => 'OXID eShop Version',
    'support_email_subject' => 'OXID eShop support request',
    'support_email_system' => 'Server Info',
    'support_send_error' => 'Support e-mail could not be sent.',
    'test_credentials' => 'Test Credentials',
    'text_backend_operations' => 'Possible Post-Processing Operations',
    'text_generic_error' => 'Action could not be performed.',
    'text_generic_success' => 'Action performed successfully.',
    'text_list' => 'Transactions',
    'text_logo_variant_descriptive' => 'Descriptive',
    'text_logo_variant_standard' => 'Standard',
    'text_message' => 'Message',
    'text_no_data_available' => 'No data available.',
    'text_no_further_operations_possible' => 'No further operations possible.',
    'text_order_no_transactions' => 'There are no associated transactions for this order.',
    'text_payment_action_pay' => 'Purchase',
    'text_payment_action_reserve' => 'Authorization',
    'text_support' => 'Support',
    'three_d_link_text' => 'Non 3-D Secure and 3-D Secure Limits',
    'total_amount_not_in_range_text' => 'Total amount not in allowed range.',
    'transactionID' => 'Transaction ID',
    'transactionState' => 'Transaction State',
    'transactionType' => 'Transaction Type',
    'transaction_details_title' => 'Transaction Details',
    'transaction_response_details' => 'Response Details',
    'wait_for_final_status' => 'Please, wait for additional email with the final status of your payment.',
    'yes' => 'Yes',
);
