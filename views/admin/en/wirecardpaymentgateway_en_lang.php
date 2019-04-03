<?php
/**
 * Shop System Plugins:
 * - Terms of Use can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
 * - License can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/LICENSE
 */

$sLangName = "English";

$aLang = array(
    "yes" => 'Yes',
    "no" => 'No',

    "charset" => "UTF-8",
    "account_holder_title" => "Account Owner",
    "alipay_crossborder" => "Alipay Cross-border",
    "alipay_crossborder_desc" => "Alipay Cross-border transactions via Wirecard Payment Processing Gateway.",
    "amount" => "Amount",
    "article-number" => "Article Number",
    "back_button" => "Back",
    "bank_informations" => "Bank Informations",
    "bank_label" => "Bank",
    "basket_title" => "Basket",
    "bic" => "BIC",
    "bic_input" => "BIC",
    "birthdate_input" => "Date of Birth",
    "button_confirm" => "Confirm Order",
    "cancel" => "Cancel",
    "canceled_payment_process" => "You have canceled the payment process.",
    "cancel_transaction_agreement" => "Cancel transaction?",
    "capture_invoice_comment" => "Captured amount of %1 online. Transaction ID: %2.",
    "city" => "City",
    "config_additional_info" => "Send Additional Information",
    "config_additional_info_desc" => "Additional data will be sent for the purpose of fraud protection. This additional data includes billing/shipping address, shopping basket and descriptor.",
    "config_allowed_currencies" => "Allowed Currencies",
    "config_allowed_currencies_desc" => "Payment method Guaranteed Invoice is only displayed if the activated currency is one of the currencies selected here.",
    "config_allow_changed_shipping" => "Allow Shipping Address Change",
    "config_allow_changed_shipping_desc" => "If disabled, consumer is required to re-enter credit card details if the shipping address has changed between two orders.",
    "config_base_url" => "Wirecard Server Address",
    "config_base_url_desc" => "The Wirecard Server Address (e.g. https://api.wirecard.com).",
    "config_basket_max" => "Maximum Amount",
    "config_basket_max_desc" => "Payment method Guaranteed Invoice is only displayed if the ordered amount is smaller than the defined amount. Amount in default shop currency.",
    "config_basket_min" => "Minimum Amount",
    "config_basket_min_desc" => "Payment method Guaranteed Invoice is only displayed if the ordered amount exceeds the defined amount. Amount in default shop currency.",
    "config_billing_countries" => "Allowed Billing Countries",
    "config_billing_countries_desc" => "Payment method Guaranteed Invoice is only displayed during checkout if the consumer's billing country is one of the countries selected here. CTRL-click to select. Default pre-selection: Austria and Germany.",
    "config_billing_shipping" => "Identical Billing/Shipping Address",
    "config_billing_shipping_desc" => "If activated, payment method Guaranteed Invoice is only displayed if billing/shipping address are identical.",
    "config_creditor_city" => "Creditor City",
    "config_creditor_city_desc" => "SEPA Direct Debit requires a Creditor City for the SEPA Direct Debit Mandate page.",
    "config_creditor_id" => "Creditor ID",
    "config_creditor_id_desc" => "SEPA Direct Debit requires Creditor ID to create SEPA Direct Debit Mandate. You may apply for a Creditor ID at your financial institution.",
    "config_creditor_name" => "Creditor Name",
    "config_creditor_name_desc" => "SEPA Direct Debit requires a Creditor Name for the SEPA Direct Debit Mandate page.",
    "config_currency_default" => "Leave blank for default shop currency.",
    "config_delete_cancel_order" => "Delete Canceled Order",
    "config_delete_cancel_order_desc" => "Automatically delete order after canceled payment process.",
    "config_delete_failure_order" => "Delete Failed Order",
    "config_delete_failure_order_desc" => "Automatically delete order after failed payment process.",
    "config_descriptor" => "Descriptor",
    "config_descriptor_desc" => "Send text which is displayed on the bank statement issued to your consumer by the financial service provider.",
    "config_details_on_invoice" => "Payment Details On Invoice",
    "config_details_on_invoice_desc" => "If enabled, payment details are automatically stated on the consumer's invoice.",
    "config_email" => "Your email address",
    "config_enable_bic" => "BIC enabled",
    "config_enable_bic_desc" => "If BIC is enabled, consumer must enter a BIC during checkout.",
    "config_http_password" => "HTTP Password",
    "config_http_password_desc" => "HTTP Password as provided in your Wirecard contract.",
    "config_http_user" => "HTTP User",
    "config_http_user_desc" => "HTTP User as provided in your Wirecard contract.",
    "config_limit_desc" => "Amount in default shop currency",
    "config_logo_variant" => "Logo version",
    "config_logo_variant_desc" => "Show either standard or descriptive logo version to your consumers.",
    "config_mandate_text" => "Additional Text",
    "config_mandate_text_desc" => "This text appears on the SEPA Direct Debit Mandate page at the end of the first paragraph.",
    "config_merchant_account_id" => "MAID",
    "config_merchant_account_id_cc_desc" => "Unique identifier assigned to your merchant account. Can be set to \"null\" to force 3-D process.",
    "config_merchant_account_id_desc" => "Unique identifier assigned to your merchant account.",
    "config_merchant_public" => "Public Key",
    "config_merchant_secret" => "Secret Key",
    "config_merchant_secret_cc_desc" => "Secret Key is mandatory to calculate the Digital Signature for payments. Can be set to \"null\" to force 3-D process.",
    "config_merchant_secret_desc" => "Secret Key is mandatory to calculate the Digital Signature for payments.",
    "config_message" => "Your message",
    "config_payment_action" => "Payment Action",
    "config_payment_action_desc" => "Select between \"Purchase\" to capture/invoice your order automatically or \"Authorization\" to capture/invoice manually.",
    "config_payment_notifications_email" => "E-mail for payment notifications",
    "config_payment_notifications_email_desc" => "Enter your e-mail address to receive a payment notification for each incoming payment confirmation via e-mail.",
    "config_payment_type" => "Payment Type",
    "config_payment_type_desc" => "Choose \"Payment In Advance\" to display bank data after the checkout process, or \"Payment On Invoice\" to send bank data with the invoice.",
    "config_reply_to" => "Reply to (optionally)",
    "config_send_pending_status_mails" => "Send pending status mails",
    "config_send_pending_status_mails_desc" => "If enabled, consumers get an e-mail containing the information that the payment is not yet finalized.",
    "config_shipping_countries" => "Allowed Shipping Countries",
    "config_shipping_countries_desc" => "Payment method Guaranteed Invoice is only displayed if the consumer's shipping country is one of the countries selected here. CTRL-click to select. Default pre-selection: Austria and Germany.",
    "config_shopping_basket" => "Shopping Basket",
    "config_shopping_basket_desc" => "For the purpose of confirmation, payment supports shopping basket display during checkout. To enable this feature, activate Shopping Basket.",
    "config_sort_order" => "Sort Order",
    "config_sort_order_desc" => "Order of payment methods as displayed on payment page.",
    "config_ssl_max_limit" => "Non 3-D Secure Max. Limit",
    "config_ssl_max_limit_currency" => "Non 3-D Secure Max. Limit Currency",
    "config_ssl_max_limit_desc" => "This amount forces 3-D Secure transactions. Enter \"null\" to disable the Non 3-D Secure Maximal Limit.",
    "config_status" => "Status",
    "config_status_desc_alipay_crossborder" => "Activate payment method Alipay Cross-border to make it available for your consumers.",
    "config_status_desc_creditcard" => "Activate payment method Credit Card to make it available for your consumers.",
    "config_status_desc_eps" => "Activate payment method eps-Überweisung to make it available for your consumers.",
    "config_status_desc_ideal" => "Activate payment method iDEAL to make it available for your consumers.",
    "config_status_desc_maestro" => "Activate payment method Maestro SecureCode to make it available for your consumers.",
    "config_status_desc_masterpass" => "Activate payment method Masterpass to make it available for your consumers.",
    "config_status_desc_paybybankapp" => "Activate payment method Pay by Bank app to make it available for your consumers.",
    "config_status_desc_paypal" => "Activate payment method PayPal to make it available for your consumers.",
    "config_status_desc_pia" => "Activate payment method Payment In Advance to make it available for your consumers.",
    "config_status_desc_poi" => "Activate payment method Payment On Invoice to make it available for your consumers.",
    "config_status_desc_poi_pia" => "Activate payment method Payment On Invoice or Payment In Advance to make it available for your consumers.",
    "config_status_desc_ratepayinvoice" => "Activate payment method Guaranteed Invoice by Wirecard to make it available for your consumers.",
    "config_status_desc_sepact" => "Activate payment method SEPA Credit Transfer to make it available for your consumers.",
    "config_status_desc_sepadd" => "Activate payment method SEPA Direct Debit to make it available for your consumers.",
    "config_status_desc_sofortbanking" => "Activate payment method Sofort. to make it available for your consumers.",
    "config_status_desc_upi" => "Activate payment method UnionPay International to make it available for your consumers.",
    "config_three_d_merchant_account_id" => "3-D Secure MAID",
    "config_three_d_merchant_account_id_desc" => "Unique identifier assigned to your 3-D Secure merchant account. Can be set to \"null\" to force SSL process.",
    "config_three_d_merchant_secret" => "3-D Secure Secret Key",
    "config_three_d_merchant_secret_desc" => "Secret Key is mandatory to calculate the Digital Signature for the 3-D Secure payment. Can be set to \"null\" to force SSL process.",
    "config_three_d_min_limit" => "3-D Secure Min. Limit",
    "config_three_d_min_limit_currency" => "3-D Secure Min. Limit Currency",
    "config_three_d_min_limit_desc" => "This amount attempts 3-D Secure transactions. Enter \"null\" to disable the 3-D Secure Min. Limit.",
    "config_title" => "Title",
    "config_title_desc" => "Payment method name as displayed for the consumer during checkout.",
    "config_vault" => "One-Click Checkout",
    "config_vault_desc" => "Credit Card details are saved for later use.",
    "config_vault_enable_three_d" => "Enable 3-D Secure for One-click-checkout",
    "config_vault_enable_three_d_desc" => "Enable 3-D Secure for One-click-checkout payments with Credit Card.",
    "config_zapp_merchant_return_string" => "Merchant Return URL",
    "config_zapp_merchant_return_string_desc" => "Merchant Return URL to redirect the Consumer from the mobile banking app to the merchant’s browser or App.",
    "confirm_uninstall" => "Are you sure you want to uninstall?",
    "copy_xml_text" => "Copy XML",
    "country" => "Country",
    "credit" => "Refund",
    "creditcard" => "Credit Card",
    "creditcard_desc" => "Credit Card transactions via Wirecard Payment Processing Gateway.",
    "creditcard_limit_desc_button" => "Open explanation regarding Non 3-D Secure and 3-D Secure limits",
    "creditor" => "Creditor",
    "creditor_id_input" => "Creditor ID",
    "creditor_mandate_id" => "Mandate ID",
    "credit_card_form_loading_error" => "An error occurred loading the credit card form. Please try again.",
    "credit_card_form_submitting_error" => "An error occurred submitting the credit card form.",
    "credit_card_title" => "Credit Card",
    "customerId" => "Customer ID",
    "date-of-birth" => "Date of Birth",
    "debtor" => "Debtor",
    "debtor_acc_owner" => "Account Owner",
    "default_currency" => "Default Currency",
    "description" => "Description",
    "descriptor" => "Descriptor",
    "email" => "Email",
    "email_notification_text" => "You will receive an e-mail once the payment has been finalized.",
    "enable_heading_title_alipay_crossborder" => "Enable Wirecard Alipay Cross-border",
    "enable_heading_title_creditcard" => "Enable Wirecard Credit Card",
    "enable_heading_title_eps" => "Enable Wirecard eps-Überweisung",
    "enable_heading_title_ideal" => "Enable Wirecard iDEAL",
    "enable_heading_title_masterpass" => "Enable Wirecard Masterpass",
    "enable_heading_title_paybybankapp" => "Enable Wirecard Pay by Bank app",
    "enable_heading_title_paypal" => "Enable Wirecard PayPal",
    "enable_heading_title_poi_pia" => "Enable Wirecard Payment On Invoice / Payment In Advance",
    "enable_heading_title_ptwentyfour" => "Enable Wirecard Przelewy24",
    "enable_heading_title_ratepayinvoice" => "Enable Wirecard Guaranteed Invoice",
    "enable_heading_title_sepact" => "Enable Wirecard SEPA Credit Transfer",
    "enable_heading_title_sepadd" => "Enable Wirecard SEPA Direct Debit",
    "enable_heading_title_sofortbanking" => "Enable Wirecard Sofort.",
    "enable_heading_title_upi" => "Enable Wirecard UnionPay International",
    "enable_vault" => "Enable One-Click Checkout",
    "enter_email_message_error" => "Please enter your message.",
    "enter_valid_email_error" => "Please enter a valid email address.",
    "eps" => "eps-Überweisung",
    "eps_desc" => "eps-Überweisung transactions via Wirecard Payment Processing Gateway.",
    "error_credentials" => "Test failed, please check your credentials.",
    "error_email" => "Email delivery error.",
    "error_mandatory_fields" => "Some mandatory fields are still empty.",
    "error_no_post_processing_operations" => "No post-processing operations available for this transaction.",
    "error_no_post_processing_operations_unconfirmed" => "No post-processing operations available for this transaction; the transaction has not yet been confirmed.",
    "error_no_transaction" => "No transaction found.",
    "error_woocommerce_missing" => "Sorry, but this plugin requires the Wirecard WooCommerce Extension to be installed and active.",
    "fill_out_fields_error" => "Please fill out all fields marked in red.",
    "first-name" => "First Name",
    "first_name_input" => "First Name",
    "gender" => "Gender",
    "heading_title" => "Wirecard",
    "heading_title_ajax" => "Wirecard Ajax",
    "heading_title_alipay_crossborder" => "Wirecard Alipay Cross-border",
    "heading_title_creditcard" => "Wirecard Credit Card",
    "heading_title_eps" => "Wirecard eps-Überweisung",
    "heading_title_giropay" => "Wirecard giropay",
    "heading_title_ideal" => "Wirecard iDEAL",
    "heading_title_information" => "Wirecard Informations",
    "heading_title_maestro" => "Wirecard Maestro SecureCode",
    "heading_title_masterpass" => "Wirecard Masterpass",
    "heading_title_paybybankapp" => "Wirecard Pay by Bank app",
    "heading_title_paypal" => "Wirecard PayPal",
    "heading_title_pia" => "Wirecard Payment In Advance",
    "heading_title_poi" => "Wirecard Payment On Invoice",
    "heading_title_poi_pia" => "Wirecard Payment On Invoice / Payment In Advance",
    "heading_title_ptwentyfour" => "Wirecard Przelewy24",
    "heading_title_ratepayinvoice" => "Wirecard Guaranteed Invoice by Wirecard",
    "heading_title_sepact" => "Wirecard SEPA Credit Transfer",
    "heading_title_sepadd" => "Wirecard SEPA Direct Debit",
    "heading_title_sofortbanking" => "Wirecard Sofort.",
    "heading_title_support" => "Wirecard Support",
    "heading_title_transactions" => "",
    "heading_title_transaction_details" => "Wirecard Transactions",
    "heading_title_upi" => "Wirecard UnionPay International",
    "heading_transaction_details" => "Transaction Details",
    "house-extension" => "House Extension",
    "iban" => "IBAN",
    "iban_input" => "IBAN",
    "ideal" => "iDEAL",
    "ideal_desc" => "iDEAL transactions via Wirecard Payment Processing Gateway.",
    "ideal_legend" => "Select your bank",
    "if_additional_info_add_here" => "If additional information implement here...",
    "ip" => "IP Address",
    "last-name" => "Last Name",
    "last_name_input" => "Last Name",
    "loading_text" => "Credit card payment form is loading.",
    "maid" => "MAID",
    "mandate_due_date" => "Due date",
    "mandate_signature_date" => "Signature date",
    "maskedPan" => "Masked Pan",
    "masterpass" => "Masterpass",
    "masterpass_desc" => "Masterpass transactions via Wirecard Payment Processing Gateway.",
    "merchant-crm-id" => "Merchant CRM ID",
    "merchant_notice" => "Please ensure that the payment information you send to your consumer is the same as the one below.",
    "module_description" => "Wirecard PrestaShop Module",
    "module_display_name" => "Wirecard Payment Processing Gateway",
    "name" => "Name",
    "note_canceled" => "(canceled)",
    "note_no_order" => "(no order)",
    "no_post_processing_operations" => "No post-processing operations available for this transaction.",
    "no_such_order_error" => "This order doesn't exist.",
    "open_order_details" => "Open order details",
    "open_transaction_details" => "Open transaction details",
    "Order status||order_status_authorized" => "",
    "orderNumber" => "Order Number",
    "order_cancelled" => "Order was canceled.",
    "order_error" => "An error occurred during the payment process. Please try again.",
    "order_status_authorized" => "Authorized",
    "order_status_authorized_count_single" => "Authorized <span class=\"count\">(%s)</span>||Authorized <span class=\"count\">(%s)</span>",
    "order_status_gateway_update" => "Update order status via Wirecard Payment Processing Gateway.",
    "out_of_stock_notice" => "The availability of an article has changed. Please check your cart.",
    "pagination_back" => "< Back",
    "pagination_next" => "Next >",
    "panel_action" => "Action",
    "panel_amount" => "Amount",
    "panel_currency" => "Currency",
    "panel_details" => "Details",
    "panel_order_number" => "Order Number",
    "panel_parent_transaction_id" => "Parent Transaction ID",
    "panel_payment_method" => "Payment Method",
    "panel_provider_transaction_id" => "Provider transaction ID",
    "panel_transaction" => "Transaction",
    "panel_transaction_copy" => "Copy XML",
    "panel_transaction_date" => "Date",
    "panel_transaction_details" => "View Transaction",
    "panel_transaction_id" => "",
    "panel_transaction_provider_id" => "Transaction Provider ID",
    "panel_transaction_state" => "Transaction State",
    "panel_transcation_id" => "Transaction ID",
    "pay" => "Capture",
    "paybybankapp" => "Pay by Bank app",
    "paybybankapp_desc" => "Pay by Bank app transactions via Wirecard Payment Processing Gateway.",
    "Payment Gateway for WooCommerce" => "Payment Gateway for WooCommerce",
    "paymentMethod" => "Payment Method",
    "payment_awaiting" => "Awaiting payment from Wirecard.",
    "payment_details_title" => "Details",
    "payment_failed_text" => "Payment operation failed.",
    "payment_from_applicable_countries" => "Payment from Applicable Countries",
    "payment_from_specific_countries" => "Payment from Specific Countries",
    "payment_method_settings" => "Payment Method Settings",
    "payment_notification_received" => "Payment notification received",
    "payment_number" => "Payment number",
    "payment_success_text" => "Payment operation was successful.",
    "payment_success_title" => "Success",
    "payment_suffix" => "payment",
    "paypal" => "PayPal",
    "paypal_desc" => "PayPal transactions via Wirecard Payment Processing Gateway.",
    "pay_with_gateway" => "Pay with Wirecard Payment Processing Gateway.",
    "phone" => "Phone",
    "phone_missing_text" => "Phone has not been provided for the current billing/shipping address.",
    "place_order" => "Place Order",
    "plugin_activated_refresh_notice" => "To use this functionality the plugin must be activated and the page needs to be refreshed once. Refresh now?",
    "plugin_author" => "",
    "plugin_author_url" => "",
    "plugin_description_woocommerce" => "",
    "plugin_general_information" => "Wirecard Shop Plugin General Information",
    "plugin_url_woocommerce" => "",
    "poi_pia" => "Payment On Invoice / Payment In Advance",
    "poi_pia_desc" => "Payment On Invoice / Payment In Advance transactions via Wirecard Payment Processing Gateway.",
    "postal-code" => "Postal Code",
    "ptrid" => "Provider Transaction Reference ID",
    "ptwentyfour" => "Przelewy24",
    "public_certificate_desc" => "If a public certificate is provided, it will be used for ssl certificate pinning for notifications from Wirecard servers.",
    "quantity" => "Quantity",
    "ratepayinvoice" => "Guaranteed Invoice",
    "ratepayinvoice_desc" => "Guaranteed Invoice transactions via Wirecard Payment Processing Gateway.",
    "ratepayinvoice_fields_error" => "Minimum age to pay with Guaranteed Invoice: 18.",
    "redirect_text" => "You are being redirected. Please wait.",
    "refund" => "Refund",
    "refund_gateway_error" => "Refund via Wirecard Payment Processing Gateway failed.",
    "refund_online_error" => "Currently no online refund possible.",
    "refund_partial_shipping_error" => "You can refund shipping fees only in full; partial refund of shipping fees is not possible.",
    "refund_processing_error" => "Processing refund failed.",
    "requestedAmount" => "Amount",
    "requestId" => "Request ID",
    "response_type" => "Source",
    "selected_creditcard_info" => "Credit card is selected. To use another credit card, click \"Use new credit card\".",
    "send_email" => "Submit",
    "sepact" => "SEPA Credit Transfer",
    "sepact_desc" => "SEPA Credit Transfer transactions via Wirecard Payment Processing Gateway.",
    "sepadd" => "SEPA Direct Debit",
    "sepadd_data" => "SEPA Direct Debit Data",
    "sepadd_desc" => "SEPA Direct Debit transactions via Wirecard Payment Processing Gateway.",
    "sepadd_mandate" => "SEPA Direct Debit Mandate",
    "sepa_cancel" => "Cancel",
    "sepa_fields_error" => "Please fill in the SEPA Direct Debit fields and try again.",
    "sepa_legend" => "Please enter your data:",
    "sepa_mandate" => "SEPA Mandate",
    "sepa_mandate_text" => "I authorize the creditor {$wirecardElasticEngineCreditorName} to send instructions to my bank to collect one single direct debit from my account. At the same time I instruct my bank to debit my account in accordance with the instructions from the creditor {$wirecardElasticEngineCreditorName}<br /><br />Note: As part of my rights, I am entitled to a refund under the terms and conditions of my agreement with my bank. A refund must be claimed within 8 weeks starting from the date on which my account was debited.<br /><br />I irrevocably agree that, in the event that the direct debit is not honored, or objection against the direct debit exists, my bank will disclose to the creditor {$wirecardElasticEngineCreditorName} my full name, address and date of birth.",
    "sepa_text_1" => "I authorize the creditor",
    "sepa_text_2" => "to send instructions to my bank to collect one single direct debit from my account. At the same time I instruct my bank to debit my account in accordance with the instructions from the creditor",
    "sepa_text_2b" => ".",
    "sepa_text_3" => "Note: As part of my rights, I am entitled to a refund under the terms and conditions of my agreement with my bank. A refund must be claimed within 8 weeks starting from the date on which my account was debited.",
    "sepa_text_4" => "I irrevocably agree that, in the event that the direct debit is not honored, or objection against the direct debit exists, my bank will disclose to the creditor",
    "sepa_text_5" => "my full name, address and date of birth.",
    "sepa_text_6" => "I have read and accepted the SEPA Direct Debit Mandate information.",
    "settings_updated" => "Settings updated",
    "shipping-method" => "Shipping Method",
    "shipping_title" => "Shipping",
    "social-security-number" => "Social Security Number",
    "sofortbanking" => "Sofort.",
    "sofortbanking_desc" => "Sofort. transactions via Wirecard Payment Processing Gateway.",
    "street1" => "Street",
    "street2" => "Street 2",
    "submit_button" => "Submit",
    "success_credentials" => "Merchant configuration was successfully tested.",
    "success_email" => "Email sent successfully.",
    "success_new_transaction" => "The post-processing operation was successful. A new transaction was created.",
    "support_email_title" => "Send support request",
    "terms_of_use" => "Terms of Use",
    "test_config" => "Test Configuration",
    "test_credentials" => "Test Credentials",
    "text_advanced" => "Advanced Options",
    "text_article_amount" => "# Amount",
    "text_article_name" => "Product Name",
    "text_article_number" => "Article Number",
    "text_backend_operations" => "Possible Post-Processing Operations",
    "text_cancel_transaction" => "Cancel transaction",
    "text_capture_transaction" => "Capture transaction",
    "text_close" => "Close",
    "text_company_pg_alipay_crossborder" => "<img src=\"./view/image/wirecard_pg/alipay_crossborder.png\" />",
    "text_company_pg_creditcard" => "<img src=\"./view/image/wirecard_pg/creditcard.png\" />",
    "text_company_pg_ideal" => "<img src=\"./view/image/wirecard_pg/ideal.png\" />",
    "text_company_pg_maestro" => "<img src=\"./view/image/wirecard_pg/maestro.png\" />",
    "text_company_pg_masterpass" => "<img src=\"./view/image/wirecard_pg/masterpass.png\" />",
    "text_company_pg_paypal" => "<img src=\"./view/image/wirecard_pg/paypal.png\" />",
    "text_company_pg_pia" => "<img src=\"./view/image/wirecard_pg/poipia.png\" />",
    "text_company_pg_poi" => "<img src=\"./view/image/wirecard_pg/poipia.png\" />",
    "text_company_pg_ratepayinvoice" => "<img src=\"./view/image/wirecard_pg/ratepayinvoice.png\"/>",
    "text_company_pg_sepact" => "<img src=\"./view/image/wirecard_pg/sepa.png\" />",
    "text_company_pg_sepadd" => "<img src=\"./view/image/wirecard_pg/sepa.png\" />",
    "text_company_pg_sofortbanking" => "<img src=\"./view/image/wirecard_pg/sofortbanking.png\" />",
    "text_company_pg_upi" => "<img src=\"./view/image/wirecard_pg/upi.png\" />",
    "text_confirm" => "Confirm",
    "text_credentials" => "Credentials",
    "text_credentials_desc" => "Enter your Wirecard credentials.",
    "text_creditcard_selection" => "Credit card selection",
    "text_delete" => "Delete",
    "text_disabled" => "Disabled",
    "text_edit_alipay_crossborder" => "Edit Alipay Cross-border",
    "text_edit_creditcard" => "Edit Credit Card",
    "text_edit_ideal" => "Edit iDEAL",
    "text_edit_maestro" => "Edit Maestro SecureCode",
    "text_edit_masterpass" => "Edit Masterpass",
    "text_edit_paypal" => "Edit PayPal",
    "text_edit_pia" => "Edit Payment In Advance",
    "text_edit_poi" => "Edit Payment On Invoice",
    "text_edit_ratepayinvoice" => "Edit Guaranteed Invoice by Wirecard",
    "text_edit_sepact" => "Edit SEPA Credit Transfer",
    "text_edit_sepadd" => "Edit SEPA Direct Debit",
    "text_edit_sofortbanking" => "Edit Sofort.",
    "text_edit_upi" => "Edit UnionPay International",
    "text_enable" => "Enable",
    "text_enabled" => "Enabled",
    "text_enable_disable" => "Enable/Disable",
    "text_extension" => "Extensions",
    "text_generic_error" => "Action could not be performed.",
    "text_generic_success" => "Action performed successfully.",
    "text_go_to_plugins" => "Go to Extensions",
    "text_list" => "Transactions",
    "text_logo_variant_descriptive" => "Descriptive",
    "text_logo_variant_standard" => "Standard",
    "text_message" => "Message",
    "text_min_age_notice" => "You have to be at least 18 years to use this payment method.",
    "text_need_same_address_notice" => "Shipping and billing address need to be same.",
    "text_payment" => "Payment",
    "text_payment_action_pay" => "Purchase",
    "text_payment_action_reserve" => "Authorization",
    "text_payment_type_pia" => "Payment In Advance",
    "text_payment_type_poi" => "Payment On Invoice",
    "text_quantity" => "Quantity",
    "text_refund_credit" => "Credit Refund",
    "text_refund_transaction" => "Refund transaction",
    "text_request_amount" => "Amount",
    "text_request_data" => "Request data",
    "text_response_data" => "Response Data",
    "text_save" => "Save",
    "text_sepadd_config_desc" => "Enter your SEPA Direct Debit credentials and mandate settings.",
    "text_sepa_config" => "SEPA Credentials",
    "text_settings" => "Settings",
    "text_success" => "Your modifications are saved!",
    "text_support" => "Support",
    "text_support_chat" => "LiveChat with support",
    "text_tax_rate" => "Tax Rate",
    "text_terms_accept" => "I herewith confirm that I have read the <a href=\"https://www.wirecardbank.de/privacy-documents/datenschutzhinweis-fur-die-wirecard-zahlarten/\" target=\"_blank\">privacy notice</a> and <a target=\"_blank\" href=\"https://www.wirecardbank.de/privacy-documents/zusatzliche-geschaftsbedingungen-fur-wirecard-zahlarten/\">additional terms and conditions</a> for Wirecard payment types and that I accept their validity.",
    "text_terms_notice" => "You must agree to the privacy notice and additional terms of Wirecard payment methods.",
    "text_test_result" => "Test Result",
    "text_total" => "Total",
    "text_transaction" => "Transaction",
    "text_transaction_details_1" => "For more transaction information click ",
    "text_transaction_details_2" => "here",
    "text_vault" => "One-Click Checkout",
    "text_wirecard_pg_alipay_crossborder" => "",
    "text_wirecard_pg_creditcard" => "",
    "text_wirecard_pg_ideal" => "",
    "text_wirecard_pg_maestro" => "",
    "text_wirecard_pg_masterpass" => "",
    "text_wirecard_pg_paypal" => "",
    "text_wirecard_pg_pia" => "",
    "text_wirecard_pg_poi" => "",
    "text_wirecard_pg_ratepayinvoice" => "",
    "text_wirecard_pg_sepact" => "",
    "text_wirecard_pg_sepadd" => "",
    "text_wirecard_pg_sofortbanking" => "",
    "text_wirecard_pg_upi" => "",
    "three_d_merchant_account_id" => "3-D Secure MAID",
    "timeStamp" => "Date",
    "title_payment_gateway" => "Wirecard Payment Processing Gateway",
    "token" => "Token",
    "total_amount_not_in_range_text" => "Total amount not within allowed range.",
    "transactionID" => "Transaction ID",
    "transactionState" => "Transaction State",
    "transactionType" => "Transaction Type",
    "transaction_details_title" => "Transaction Details",
    "transaction_payment_not_found_error" => "No valid payment found for this transaction.",
    "transfer_notice" => "Please transfer the amount using the following data:",
    "upi" => "UnionPay International",
    "upi_desc" => "UnionPay International transactions via Wirecard Payment Processing Gateway.",
    "vault_account_number" => "Account Number",
    "vault_changed_shipping_text" => "Your shipping address has changed since your last order. For security purposes we require you to enter the new credit card details.",
    "vault_delete_card_text" => "Delete card",
    "vault_delete_failure_text" => "Unable to delete credit card",
    "vault_delete_success_text" => "Successfully deleted credit card",
    "vault_save_text" => "Save for later use.",
    "vault_use_existing_text" => "Use saved credit card",
    "vault_use_new_text" => "Use new credit card",
    "vault_valid_until_text" => "Valid until",
    "Wirecard AG" => "Wirecard AG",
    "Wirecard WooCommerce Extension" => "Wirecard WooCommerce Extension",
    "wrong_url_format" => "Test failed. Address format is invalid (e.g. https://api.wirecard.com).",
);
