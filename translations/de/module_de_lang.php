<?php
/**
* Shop System Plugins:
* - Terms of Use can be found under:
* https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
* - License can be found under:
* https://github.com/wirecard/oxid-ee/blob/master/LICENSE
*/

$sLangName = 'Deutsch';

$aLang = array(
    'charset' => 'UTF-8',
    'account_holder_title' => 'Kontoinhaber',
    'amount' => 'Betrag',
    'cancel' => 'Abbrechen',
    'canceled_payment_process' => 'Sie haben den Bezahlprozess abgebrochen.',
    'capture' => 'Capture',
    'config_additional_info' => 'Zusätzliche Informationen mitsenden',
    'config_additional_info_desc' => 'Zum Schutz vor Betrug werden zusätzliche Daten mitgesendet. Zu diesen zusätzlichen Daten gehören Rechnungs-/Lieferadresse, Warenkorb und Deskriptor.',
    'config_base_url' => 'Wirecard Server Adresse (URL)',
    'config_base_url_desc' => 'Wirecard Server Adresse (URL) (z. B. https://api.wirecard.com).',
    'config_country_code' => 'Ländercode',
    'config_country_code_desc' => 'Sofort. benötigt einen Ländercode um das richtige Logo zu verwenden (z.B. de_de).',
    'config_delete_cancel_order' => 'Abgebrochene Bestellung löschen',
    'config_delete_cancel_order_desc' => 'Bestellung nach Abbruch des Bezahlprozesses automatisch löschen.',
    'config_delete_failure_order' => 'Fehlgeschlagene Bestellung löschen',
    'config_delete_failure_order_desc' => 'Bestellung nach fehlgeschlagenem Bezahlprozess automatisch löschen.',
    'config_descriptor' => 'Deskriptor',
    'config_descriptor_desc' => 'Aktivieren Sie den Deskriptor, um bei jeder Transaktion eine Referenz zur jeweiligen Bestellung mitzuschicken. Diese Referenz wird im Buchungstext angezeigt, der dem Kosumenten vom Finanzdienstleister übermittelt wird.',
    'config_email' => 'Ihre E-Mail-Adresse',
    'config_http_password' => 'Passwort (Password)',
    'config_http_user' => 'Benutzername (Username)',
    'config_logo_variant' => 'Logovariante',
    'config_logo_variant_desc' => 'Konsumenten das Standard-Logo oder die deskriptive Variante zeigen.',
    'config_merchant_account_id' => 'Merchant Account ID (MAID)',
    'config_merchant_secret' => 'Geheimschlüssel (Secret Key)',
    'config_message' => 'Ihre Nachricht',
    'config_payment_action' => 'Zahlungsaktion',
    'config_payment_action_desc' => 'Wählen Sie "Buchung", um automatisch eine Buchung durchzuführen, oder "Genehmigung", um eine manuelle Buchung zu ermöglichen.',
    'config_reply_to' => 'Antwort an (optional)',
    'config_shopping_basket' => 'Warenkorb',
    'config_shopping_basket_desc' => 'Das Zahlungsmittel unterstützt die Anzeige des Warenkorbs während des Checkouts. Um dieses Feature zu verwenden, aktivieren Sie den Warenkorb.',
    'config_ssl_max_limit' => 'Höchstbetrag (nicht 3-D Secure)',
    'config_ssl_max_limit_desc' => 'Ab diesem Betrag wird die Benutzung von 3-D Secure erzwungen. Tragen Sie "null" ein, um kein Non 3-D Secure Maximal Limit zu setzen.',
    'config_three_d_merchant_account_id' => '3-D Secure MAID',
    'config_three_d_merchant_account_id_desc' => 'Eindeutiger Identifikator, der Ihrem 3-D Secure Händlerkonto zugewiesen ist. Kann auf "Null" gesetzt werden, um SSL-Verschlüsselung zu erzwingen.',
    'config_three_d_merchant_secret' => '3-D Secure Secret Key',
    'config_three_d_merchant_secret_desc' => 'Der Geheimschlüssel (Secret Key) wird benötigt, um die Digitale Signatur für die 3-D Secure Zahlung zu berechnen. Kann auf "Null" gesetzt werden, um SSL-Verschlüsselung zu erzwingen.',
    'config_three_d_min_limit' => '3-D Secure Mindestbetrag',
    'config_three_d_min_limit_desc' => 'Ab diesem Betrag wird die Verwendung von 3-D Secure versucht. Tragen Sie "null" ein, um kein 3-D Secure Minimum Limit zu setzen.',
    'copy_xml_text' => 'XML kopieren',
    'credit' => 'Rückerstatten',
    'default_currency' => 'Standardwährung',
    'enter_country_code_error' => 'Bitte geben Sie einen korrekten Ländercode ein.',
    'enter_valid_email_error' => 'Geben Sie eine gültige E-Mail-Adresse ein.',
    'error_credentials' => 'Test fehlgeschlagen. Überprüfen Sie Ihre Zugangsdaten.',
    'error_save_failed' => 'Konfigurationsdaten nicht gültig. Speichern abgebrochen.',
    'heading_title' => 'Wirecard',
    'heading_title_support' => 'Wirecard Support',
    'heading_title_transaction_details' => 'Wirecard Transaktionen',
    'manipulated' => 'manipuliert',
    'message_empty_error' => 'Nachricht darf nicht leer sein.',
    'more_info' => 'Nähere Informationen',
    'no' => 'Nein',
    'order_error' => 'Beim Bezahlprozess ist ein Fehler aufgetreten. Bitte versuchen Sie es erneut.',
    'order_error_info' => 'Während dem Bezahlvorgang ist ein Fehler aufgetreten. Die Bestellung wurde gelöscht.',
    'order_status' => 'Bestellstatus',
    'order_status_authorized' => 'Genehmigt',
    'order_status_cancelled' => 'Abgebrochen',
    'order_status_failed' => 'Fehlgeschlagen',
    'order_status_pending' => 'Ausstehend',
    'order_status_purchased' => 'Bezahlt',
    'order_status_refunded' => 'Rückerstattet',
    'panel_action' => 'Aktion',
    'panel_amount' => 'Betrag',
    'panel_currency' => 'Währung',
    'panel_details' => 'Details',
    'panel_order_id' => 'Order Referenz',
    'panel_order_number' => 'Bestellnummer',
    'panel_parent_transaction_id' => 'Parent Transaction ID',
    'panel_payment_method' => 'Zahlungsmittel',
    'panel_provider_transaction_id' => 'Provider Transaction ID',
    'panel_transaction' => 'Transaktion',
    'panel_transaction_copy' => 'XML kopieren',
    'panel_transaction_date' => 'Datum',
    'panel_transaction_state' => 'Transaktionsstatus',
    'panel_transcation_id' => 'Transaction ID',
    'pay' => 'Buchen',
    'payment_awaiting' => 'Ausständige Zahlung von Wirecard.',
    'payment_cost' => 'Aufschlag Zahlungsart',
    'payment_failed_text' => 'Bezahloperation fehlgeschlagen.',
    'payment_method_settings' => 'Zahlungsmittel-Einstellungen',
    'payment_success_text' => 'Bezahloperation erfolgreich durchgeführt.',
    'redirect_text' => 'Sie werden weitergeleitet. Bitte warten.',
    'refund' => 'Rückerstatten',
    'requestId' => 'Request ID',
    'secured' => 'sicher',
    'send_email' => 'Senden',
    'shipping_title' => 'Versand',
    'SHOP_MODULE_blEmailOnPending' => 'Benachrichtigungs-Mail senden wenn Bestellstatus ausstehend ist',
    'SHOP_MODULE_GROUP_emails' => 'E-Mails',
    'success_credentials' => 'Die Konfigurationseinstellungen wurden erfolgreich getestet.',
    'success_email' => 'E-Mail wurde erfolgreich versendet.',
    'support_description' => 'System-Informationen werden automatisch Ihrer Nachricht hinzugefügt und gesendet an',
    'support_email_from' => 'Von',
    'support_email_modules' => 'Andere Module',
    'support_email_module_id' => 'Modul ID',
    'support_email_module_title' => 'Modul Titel',
    'support_email_module_version' => 'Modul Version',
    'support_email_php' => 'PHP Version',
    'support_email_reply_to' => 'Antworten an',
    'support_email_shop_edition' => 'OXID eShop Edition',
    'support_email_shop_version' => 'OXID eShop Version',
    'support_email_subject' => 'OXID eShop Support-Anfrage',
    'support_email_system' => 'Server Info',
    'support_send_error' => 'Support E-Mail konnte nicht gesendet werden.',
    'test_credentials' => 'Zugangsdaten testen',
    'text_backend_operations' => 'Mögliche Folgeoperationen',
    'text_generic_error' => 'Die Aktion konnte nicht ausgeführt werden.',
    'text_generic_success' => 'Die Aktion wurde erfolgreich ausgeführt.',
    'text_list' => 'Transaktionen',
    'text_logo_variant_descriptive' => 'Deskriptiv',
    'text_logo_variant_standard' => 'Standard',
    'text_message' => 'Nachricht',
    'text_no_data_available' => 'Keine Daten vorhanden.',
    'text_no_further_operations_possible' => 'Keine weiteren Operationen verfügbar.',
    'text_order_no_transactions' => 'Dieser Bestellung sind keine Transaktionen zugeordnet.',
    'text_payment_action_pay' => 'Direktbuchung',
    'text_payment_action_reserve' => 'Genehmigung',
    'text_support' => 'Support',
    'three_d_link_text' => 'Nicht-3-D-Secure- und 3-D-Secure-Limits',
    'total_amount_not_in_range_text' => 'Gesamtsumme nicht innerhalb der erlaubten Bestellsumme für dieses Zahlungsmittel.',
    'transactionID' => 'Transaction ID',
    'transactionState' => 'Transaktionsstatus',
    'transactionType' => 'Transaktionstyp',
    'transaction_details_title' => 'Transaktionsdetails',
    'transaction_response_details' => 'Antwort-Details',
    'wait_for_final_status' => 'Bitte warten Sie auf ein zusätzliches E-Mail mit dem finalen Bezahlstatus.',
    'yes' => 'Ja',
);
