<?php
# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Nazwa';
$lang['options']              = 'Opcje';
$lang['submit']               = 'Zapisz';
$lang['added_successfuly']    = '%s zostało dodanie poprawnie.';
$lang['updated_successfuly']  = '%s zaaktualizowano poprawnie.';
$lang['edit']                 = 'Edytuj %s';
$lang['add_new']              = 'Dodaj nowy %s';
$lang['deleted']              = '%s usunięte';
$lang['problem_deleting']     = 'Wystąpił poblem podczas usuwania %s';
$lang['is_referenced']        = 'Numer ID dla %s jest już w użyciu.';
$lang['close']                = 'Zamknij';
$lang['send']                 = 'Wyślij';
$lang['cancel']               = 'Anuluj';
$lang['go_back']              = 'Wstecz';
$lang['error_uploading_file'] = 'Błąd podczas wgrywania pliku';
$lang['load_more']            = 'Wczytaj więcej';
$lang['cant_delete_default']  = 'Nie można usunąć domyślnego %s';

# Invoice General
$lang['invoice_status_paid']                = 'Zapłacone';
$lang['invoice_status_unpaid']              = 'Nie zapłacone';
$lang['invoice_status_overdue']             = 'Przeterminowane';
$lang['invoice_status_not_paid_completely'] = 'Zapłacone częściowo';

$lang['invoice_pdf_heading'] = 'Faktura';

$lang['invoice_table_item_heading']            = 'Pozycja';
$lang['invoice_table_quantity_heading']        = 'Ilość';
$lang['invoice_table_rate_heading']            = 'Stawka';
$lang['invoice_table_tax_heading']             = 'Podatek';
$lang['invoice_table_amount_heading']          = 'Kwota';
$lang['invoice_subtotal']                      = 'Razem';
$lang['invoice_adjustment']                    = 'Dostosowanie';
$lang['invoice_total']                         = 'Łącznie';
$lang['invoice_vat']                           = 'Numer VAT';
$lang['invoice_bill_to']                       = 'Odbiorca faktury';
$lang['invoice_data_date']                     = 'Data wystawienia faktury:';
$lang['invoice_data_duedate']                  = 'Termin płatności:';
$lang['invoice_received_payments']             = 'Transakcje';
$lang['invoice_no_payments_found']             = 'Brak płatności dla tej faktury';
$lang['invoice_note']                          = 'Uwagi:';
$lang['invoice_payments_table_number_heading'] = 'Płatność #';
$lang['invoice_payments_table_mode_heading']   = 'Typ płatności';
$lang['invoice_payments_table_date_heading']   = 'Data';
$lang['invoice_payments_table_amount_heading'] = 'Kwota';


# Announcements
$lang['announcement']                 = 'Ogłoszenie';
$lang['announcement_lowercase']       = 'ogłoszenie';
$lang['announcements']                = 'Ogłoszenia';
$lang['announcements_lowercase']      = 'ogłoszenia';
$lang['new_announcement']             = 'Nowe Ogłoszenie';
$lang['announcement_name']            = 'Tytuł';
$lang['announcement_message']         = 'Wiadomość';
$lang['announcement_show_to_staff']   = 'Pokaż pracownikom';
$lang['announcement_show_to_clients'] = 'Pokaż klientom';
$lang['announcement_show_my_name']    = 'Pokaż moje dane';

# Clients
$lang['clients']                               = 'Klienci';
$lang['client']                                = 'Klient';
$lang['new_client']                            = 'Nowy klient';
$lang['client_lowercase']                      = 'klient';
$lang['client_delete_tooltip']                 = 'Wszystkie dane klientów zostaną usunięte: umowy, zgłoszenia, notatki. Ważne: Jeżeli klient posiada wystawione faktury nie można usunać klienta. Aby usunać klienta z fakturami, należy najpierw przenieść fakturę na innego klienta, dopiero wtedy będzie możliwe usunięcie go.';
$lang['customer_delete_invoices_warning']      = 'Ten klient ma wystawione faktury. Nie możesz go usunać. Przenieść wszystkie jego faktury na innego klienta, dopiero wtędy będzie możliwe usunięcie tego klienta.';
$lang['client_firstname']                      = 'Imię';
$lang['client_lastname']                       = 'Nazwisko';
$lang['client_email']                          = 'E-mail';
$lang['client_company']                        = 'Firma';
$lang['client_vat_number']                     = 'Numer VAT';
$lang['client_address']                        = 'Adres';
$lang['client_city']                           = 'Miasto';
$lang['client_postal_code']                    = 'Kod pocztowy';
$lang['client_state']                          = 'Województwo';
$lang['client_password']                       = 'Hasło';
$lang['client_password_change_populate_note']  = 'Uwaga: Jeśli wypełnisz to pole, zostanie zmienione hasło dla tego klienta.';
$lang['client_password_last_changed']          = 'Hasło ostatni raz było zmienione:';
$lang['login_as_client']                       = 'Zaloguj się jako klient';
$lang['client_invoices_tab']                   = 'Faktury';
$lang['contracts_invoices_tab']                = 'Umowy';
$lang['contracts_tickets_tab']                 = 'Zgłoszenia';
$lang['contracts_notes_tab']                   = 'Notatki';
$lang['client_invoice_number_table_heading']   = 'Faktura #';
$lang['client_invoice_date_table_heading']     = 'Data';
$lang['client_invoice_due_date_table_heading'] = 'Termin płatności';
$lang['client_string_table_heading']           = 'Klient';
$lang['client_amount_table_heading']           = 'Kwota';
$lang['client_status_table_heading']           = 'Status';
$lang['note_description']                      = 'Uwagi';

$lang['client_string_contracts_table_heading']      = 'Klient';
$lang['client_start_date_contracts_table_heading']  = 'Data rozpoczęcia';
$lang['client_end_date_contracts_table_heading']    = 'Data zakończenia';
$lang['client_description_contracts_table_heading'] = 'Opis';
$lang['client_do_not_send_welcome_email']           = 'Nie wysyłaj wiadomości powitalnej';

$lang['clients_notes_table_description_heading'] = 'Opis';
$lang['clients_notes_table_addedfrom_heading']   = 'Dodane z';
$lang['clients_notes_table_dateadded_heading']   = 'Data dodania';

$lang['clients_list_full_name']   = 'Imię i nazwisko';

$lang['clients_list_last_login']  = 'Ostatnie logowanie';


# Contracts
$lang['contracts']                = 'Umowy';
$lang['contract']                 = 'Umowa';
$lang['new_contract']             = 'Nowa umowa';
$lang['contract_lowercase']       = 'umowa';
$lang['contract_start_date']      = 'Data rozpoczęcia';
$lang['contract_end_date']        = 'Data zakończenia';
$lang['contract_subject']         = 'Temat';
$lang['contract_description']     = 'Opis';
$lang['contract_subject_tooltip'] = 'Tytuł widoczny dla klienta';
$lang['contract_client_string']   = 'Klient';
$lang['contract_attach']          = 'Załącz dokument';

$lang['contract_list_client']     = 'Klient';
$lang['contract_list_subject']    = 'Temat';
$lang['contract_list_start_date'] = 'Data rozpoczęcia';
$lang['contract_list_end_date']   = 'Data zakończenia';

# Currencies
$lang['currencies']           = 'Waluty';
$lang['currency']             = 'Waluta';
$lang['new_currency']         = 'Nowa waluta';
$lang['currency_lowercase']   = 'waluta';
$lang['base_currency_set']    = 'Teraz to jest Twoja domyślna waluta.';
$lang['make_base_currency']   = 'Ustaw jako domyślną walutę';
$lang['base_currency_string'] = 'Domyślna waluta';

$lang['currency_list_name']   = 'Nazwa';
$lang['currency_list_symbol'] = 'Symbol';


$lang['currency_add_edit_description'] = 'Nazwa waluty';
$lang['currency_add_edit_rate']        = 'Symbol';

$lang['currency_edit_heading'] = 'Edytuj walutę';
$lang['currency_add_heading']  = 'Dodaj nową walutę';


# Department
$lang['departments']          = 'Departamenty';
$lang['department']           = 'Departament';
$lang['new_department']       = 'Nowy departament';
$lang['department_lowercase'] = 'departament';

$lang['department_name']             = 'Nazwa departamentu';
$lang['department_email']            = 'Adres e-mail departamentu';
$lang['department_hide_from_client'] = 'Ukryć przed klientem?';
$lang['department_list_name']        = 'Nazwa';

# Email Templates
$lang['email_templates']                        = 'Szablony wiadomości e-mail';
$lang['email_template']                         = 'Szablon wiadomości e-mail';
$lang['email_template_lowercase']               = 'szablon wiadomości e-mail';
$lang['email_templates_lowercase']              = 'szablon wiadomości e-mail';
$lang['email_template_ticket_fields_heading']   = 'Zgłoszenia';
$lang['email_template_invoices_fields_heading'] = 'Faktury';
$lang['email_template_clients_fields_heading']  = 'Klienci';

$lang['template_name']                                      = 'Nazwa szablonu';
$lang['template_subject']                                   = 'Temat';
$lang['template_fromname']                                  = 'Nazwa nadawcy';
$lang['template_fromemail']                                 = 'Adres e-mail nadawcy';
$lang['send_as_plain_text']                                 = 'Wysłij jako zwykły tekst';
$lang['email_template_disabed']                             = 'Wyłaczone';
$lang['email_template_email_message']                       = 'Wiadomość';
$lang['email_template_merge_fields']                        = 'Złącz pola';
$lang['available_merge_fields']                             = 'Dostępne pola do złączenia';
# Home
$lang['dashboard_string']                                   = 'Pulpit';
$lang['home_latest_todos']                                  = 'Ostatnie zadania';
$lang['home_no_latest_todos']                               = 'Brak zadań do wykonania';
$lang['home_latest_finished_todos']                         = 'Ostatnio ukończone zadania';
$lang['home_no_finished_todos_found']                       = 'Brak ukończonych zadań';
$lang['home_todo_heading']                                  = 'Pozycje rzeczy do wykonania';
$lang['home_tickets_awaiting_reply_by_department']          = 'Zgłoszneia oczekujące na odpowiedź według departamentu';
$lang['home_tickets_awaiting_reply_by_status']              = 'Zgłoszenia oczekujące na odpowiedź po statusie';
$lang['home_this_week_events']                              = 'Wydarzenia z tego tygodnia';
$lang['home_upcoming_events_next_week']                     = 'Nadchodzące wydarzenia w przyszłym tygodniu';
$lang['home_event_added_by']                                = 'Wydarzenie dodane przez';
$lang['home_public_event']                                  = 'Publiczne wydarzenie';
$lang['home_weekly_payment_records']                        = 'Tygodniowe wpłaty';
$lang['home_weekend_ticket_opening_statistics']             = 'Tygodiowe statystyki zgłoszeń';
# Newsfeed
$lang['whats_on_your_mind']                                 = 'Podziel się dokumentami, pomysłami...';
$lang['new_post']                                           = 'Wiadomość';
$lang['newsfeed_upload_tooltip']                            = 'Wskazówka: Przeciągnij i upuść plik w tym miejscu, aby go wgrać';
$lang['newsfeed_all_departments']                           = 'Wszystkie departamenty';
$lang['newsfeed_pin_post']                                  = 'Przypnij wiadomość';
$lang['newsfeed_unpin_post']                                = 'Odepnij wiadomość';
$lang['newsfeed_delete_post']                               = 'Usuń';
$lang['newsfeed_published_post']                            = 'Opublikowane';
$lang['newsfeed_you_like_this']                             = 'Lubisz to';
$lang['newsfeed_like_this']                                 = 'polub to';
$lang['newsfeed_one_other']                                 = 'inne';
$lang['newsfeed_you']                                       = 'Ty';
$lang['newsfeed_and']                                       = 'i';
$lang['newsfeed_you_and']                                   = 'Ty i';
$lang['newsfeed_like_this_saying']                          = 'Lubię to';
$lang['newsfeed_unlike_this_saying']                        = 'Nie lubię';
$lang['newsfeed_show_more_comments']                        = 'Pokaż więcej komentarzy';
$lang['comment_this_post_placeholder']                      = 'Skomentuj tę wiadomość';
$lang['newsfeed_post_likes_modal_heading']                  = 'Pracownicy, którym podoba się ten post';
$lang['newsfeed_comment_likes_modal_heading']               = 'Pracownicy, którzy lubią ten komentarz';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Ten post jest tylko widoczny dla następujących działów: %s';
# Invoice Items
$lang['invoice_items']                                      = 'Pozycje faktury';
$lang['invoice_item']                                       = 'Pozycja faktury';
$lang['new_invoice_item']                                   = 'Nowa pozycja';
$lang['invoice_item_lowercase']                             = 'pozycja faktury';

$lang['invoice_items_list_description'] = 'Opis';
$lang['invoice_items_list_rate']        = 'Stawka';
$lang['invoice_items_list_tax']         = 'Podatek';

$lang['invoice_item_add_edit_description'] = 'Opis';
$lang['invoice_item_add_edit_rate']        = 'Stawka';
$lang['invoice_item_add_edit_tax']         = 'Podatek';
$lang['invoice_item_add_edit_tax_select']  = 'Wybierz podatek';

$lang['invoice_item_edit_heading'] = 'Edytuj pozycję';
$lang['invoice_item_add_heading']  = 'Dodaj nową pozycję';

# Invoices


$lang['invoices']                       = 'Faktury';
$lang['invoice']                        = 'Faktura';
$lang['invoice_lowercase']              = 'faktura';
$lang['create_new_invoice']             = 'Utwórz nową fakturę';
$lang['view_invoice']                   = 'Zobacz fakturę';
$lang['invoice_number_changed']         = 'Faktura utworzone pomyślnie, ale numer faktury się zmienił, ponieważ ktoś dodał nową fakturę przed Tobą.';
$lang['invoice_payment_recorded']       = 'Płatność została dodana do faktury';
$lang['invoice_payment_record_failed']  = 'Nie udało się dodać płatności do faktury';
$lang['invoice_sent_to_client_success'] = 'Faktura została wysłana do klienta';
$lang['invoice_sent_to_client_fail']    = 'Wystąpił problem z wysłaniem faktury';
$lang['invoice_reminder_send_problem']  = 'Wystąpił problem z wysłaniem przypomnienia o płatności';
$lang['invoice_overdue_reminder_sent']  = 'Przypomnienie o płatności zostało wysłane';

$lang['invoice_details']              = 'Szczegóły faktury';
$lang['invoice_view']                 = 'Zobacz fakturę';
$lang['invoice_select_customer']      = 'Klient';
$lang['invoice_add_edit_number']      = 'Numer faktury';
$lang['invoice_add_edit_date']        = 'Data wystawienia faktury';
$lang['invoice_add_edit_duedate']     = 'Termin płatności';
$lang['invoice_add_edit_currency']    = 'Waluta';
$lang['invoice_add_edit_client_note'] = 'Uwagi klienta';
$lang['invoice_add_edit_admin_note']  = 'Uwagi pracownika';

$lang['invoice_add_edit_search_item']  = 'Szukaj pozycji';
$lang['invoices_toggle_table_tooltip'] = 'Przełącz widok';

$lang['edit_invoice_tooltip']                   = 'Edytuj fakturę';
$lang['delete_invoice_tooltip']                 = 'Usuń fakturę. Uwaga: Wszystkie płatności (jeżeli takie są) dotyczące tej faktury zostaną usunięte. ';
$lang['invoice_sent_to_email_tooltip']          = 'Wyślij na e-mail';
$lang['invoice_already_send_to_client_tooltip'] = 'Faktura została już wysłana do klienta %s';
$lang['send_overdue_notice_tooltip']            = 'Wyślij przyponienie o płatności';
$lang['invoice_view_activity_tooltip']          = 'Logi czynności';
$lang['invoice_record_payment']                 = 'Dodaj płatność';

$lang['invoice_send_to_client_modal_heading']    = 'Wyślij fakturę do klienta';
$lang['invoice_send_to_client_attach_pdf']       = 'Dołącz fakturę w PDF';
$lang['invoice_send_to_client_preview_template'] = 'Podgląd szablonu e-mail';

$lang['invoice_dt_table_heading_number']  = 'Faktura #';
$lang['invoice_dt_table_heading_date']    = 'Data';
$lang['invoice_dt_table_heading_client']  = 'Klient';
$lang['invoice_dt_table_heading_duedate'] = 'Termin płatności';
$lang['invoice_dt_table_heading_amount']  = 'Kwota';
$lang['invoice_dt_table_heading_status']  = 'Status';

$lang['record_payment_for_invoice']              = 'Dodaj płatność dla';
$lang['record_payment_amount_received']          = 'Kwota zapłacona';
$lang['record_payment_date']                     = 'Data płatności';
$lang['record_payment_leave_note']               = 'Zostaw notatkę';
$lang['invoice_payments_received']               = 'Otrzymane płatności';
$lang['invoice_record_payment_note_placeholder'] = 'Uwagi pracownika';
$lang['no_payments_found']                       = 'Brak płatności dla tej faktury';
$lang['invoice_email_link_text']                 = 'Zobacz fakturę';

# Payments
$lang['payments']                             = 'Płatności';
$lang['payment']                              = 'Płatność';
$lang['payment_lowercase']                    = 'płatność';
$lang['payments_table_number_heading']        = 'Płatność #';
$lang['payments_table_invoicenumber_heading'] = 'Faktura #';
$lang['payments_table_mode_heading']          = 'Rodzaj płatności';
$lang['payments_table_date_heading']          = 'Data';
$lang['payments_table_amount_heading']        = 'Kwota';
$lang['payments_table_client_heading']        = 'Klient';
$lang['payment_not_exists']                   = 'Płatność nie istnieje';

$lang['payment_edit_for_invoice']     = 'Płatność do faktury';
$lang['payment_edit_amount_received'] = 'Kwota zapłacona';
$lang['payment_edit_date']            = 'Data płatności';
$lang['payment_edit_lave_note']       = 'Zostaw notatkę';


# Knowledge Base
$lang['kb_article_add_edit_subject'] = 'Temat';
$lang['kb_article_add_edit_group']   = 'Grupa';
$lang['kb_string']                   = 'Baza wiedzy';
$lang['kb_article']                  = 'Artykuł';
$lang['kb_article_lowercase']        = 'artykuł';
$lang['kb_article_new_article']      = 'Nowy artykuł';
$lang['kb_article_disabled']         = 'Wyłaczone';
$lang['kb_article_description']      = 'Opis artykułu';

$lang['kb_table']                      = 'Lista';
$lang['kb_no_articles_found']          = 'Brak artykułów w bazie wiedzy';
$lang['kb_dt_article_name']            = 'Nazwa artykułu';
$lang['kb_dt_group_name']              = 'Grupa';
$lang['new_group']                     = 'Nowa grupa';
$lang['kb_group_add_edit_name']        = 'Nazwa grupy';
$lang['kb_group_add_edit_description'] = 'Krótki opis';
$lang['kb_group_add_edit_disabled']    = 'Wyłaczone';
$lang['kb_group_add_edit_note']        = 'Uwaga: Wszystkie artykuły w tej grupie będą ukryte, jeśli wyłączone jest zaznaczone';
$lang['group_table_name_heading']      = 'Nazwa';
$lang['group_table_isactive_heading']  = 'Aktywne';
$lang['kb_no_groups_found']            = 'Brak grup w bazie wiedzy';

# Mail Lists
$lang['mail_lists']                           = 'Listy mailingowe';
$lang['mail_list']                            = 'Lista mailingowa';
$lang['new_mail_list']                        = 'Nowa lista mailingowa';
$lang['mail_list_lowercase']                  = 'lista mailingowa';
$lang['custom_field_deleted_success']         = 'Dodatkowe pole zostało usunięte';
$lang['custom_field_deleted_fail']            = 'Wystąpił problem z usuwaniem dodatkowego pola';
$lang['email_removed_from_list']              = 'Adres e-mail usunięty z listy';
$lang['email_remove_fail']                    = 'Adres e-mail usunięty z listy';
$lang['staff_mail_lists']                     = 'Wysyłka masowa do pracowników';
$lang['clients_mail_lists']                   = 'Masowa wysyłka do klientów';
$lang['mail_list_total_imported']             = 'Zaimportowane e-maile: %s';
$lang['mail_list_total_duplicate']            = 'Ogółem zduplikowane wiadomości: %s';
$lang['mail_list_total_failed_to_insert']     = 'Adresy e-mail, którch nie udało się dodać: %s';
$lang['mail_list_total_invalid']              = 'Błędne adresy e-mail: %s';
$lang['cant_edit_mail_list']                  = 'Nie można edytować tej listy, gdyż ta lista jest wypełniona automatycznie';
$lang['mail_list_add_edit_name']              = 'Nazwa listy wysyłkowej';
$lang['mail_list_add_edit_customfield']       = 'Dodaj dodatkowe pole';
$lang['mail_lists_viewing_emails']            = 'Wyświetlanie wiadomości E-mail z listy';
$lang['mail_lists_view_email_email_heading']  = 'E-mail';
$lang['mail_lists_view_email_date_heading']   = 'Data dodania';
$lang['add_new_email_to']                     = 'Dodaj nowy adres E-mail do %s';
$lang['import_emails_to']                     = 'Import e-maili do %s';
$lang['mail_list_new_email_edit_add_label']   = 'E-mail';
$lang['mail_list_import_file']                = 'Importuj plik';
$lang['mail_list_available_custom_fields']    = 'Dostępne pola niestandardowe';
$lang['submit_import_emails']                 = 'Importuj e-maile';
$lang['btn_import_emails']                    = 'Importuj e-maile (Excel)';
$lang['btn_add_email_to_list']                = 'Dodaj adres E-mail do tej listy';
$lang['mail_lists_dt_list_name']              = 'Nazwa listy';
$lang['mail_lists_dt_datecreated']            = 'Data utworzenia';
$lang['mail_lists_dt_creator']                = 'Utworzył';
$lang['email_added_to_mail_list_successfuly'] = 'Adres e-mial został dodany do tej listy.';
$lang['email_is_duplicate_mail_list']         = 'Ten e-mail już istnieje na liście';

# Media

$lang['media_files']            = 'Pliki';

# Payment modes
$lang['new_payment_mode']       = 'Nowy tryb płatności';
$lang['payment_modes']          = 'Sposoby płatności';
$lang['payment_mode']           = 'Rodzaj płatności';
$lang['payment_mode_lowercase'] = 'Typ płatności';
$lang['payment_modes_dt_name']  = 'Nazwa typu płatności';

$lang['payment_mode_add_edit_name'] = 'Nazwa typu płatności';
$lang['payment_mode_edit_heading']  = 'Edytuj rodzaje płatności';
$lang['payment_mode_add_heading']   = 'Dodaj nowy typ płatności';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Nowa zdefiniowana odpowiedź';
$lang['predefined_replies']                = 'Wstępnie zdefiniowane odpowiedzi';
$lang['predefined_reply']                  = 'Wstępnie zdefiniowana odpowiedź';
$lang['predefined_reply_lowercase']        = 'wstępnie zdefiniowana odpowiedź';
$lang['predifined_replies_dt_name']        = 'Nazwa zdefiniowanej odpowiedzi';
$lang['predifined_reply_add_edit_name']    = 'Nazwa zdefiniowanej odpowiedzi';
$lang['predifined_reply_add_edit_content'] = 'Treść odpowiedzi';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Nowy priorytet';
$lang['ticket_priorities']             = 'Priorytet zgłoszenia';
$lang['ticket_priority']               = 'Priorytet zgłoszenia';
$lang['ticket_priority_lowercase']     = 'priorytet zgłoszenia';
$lang['no_ticket_priorities_found']    = 'Nie ma żadnych priorytetów zgłoszeń';
$lang['ticket_priority_dt_name']       = 'Nazwa priorytetu';
$lang['ticket_priority_add_edit_name'] = 'Nazwa priorytetu';

# Reports
$lang['kb_reports']                         = 'Raport artykułów bazy wiedzy';
$lang['sales_reports']                      = 'Raporty sprzedaży';
$lang['reports_choose_kb_group']            = 'Wybierz grupę';
$lang['reports_sales_select_report_type']   = 'Wybierz typ raportu';
$lang['report_kb_yes']                      = 'Tak';
$lang['report_kb_no']                       = 'Nie';
$lang['report_kb_no_votes']                 = 'Brak głosów';
$lang['report_this_week_leads_conversions'] = 'Główne tematy rozmów w tym tygodniu';
$lang['report_leads_sources_conversions']   = 'Źródła konwersji';
$lang['report_leads_monthly_conversions']   = 'Miesięczne';
$lang['sales_report_heading']               = 'Raport sprzedaży';
$lang['report_sales_type_income']           = 'Łączny przychód';

$lang['report_sales_type_customer']                    = 'Raport klienta';
$lang['report_sales_base_currency_select_explanation'] = 'Należy wybrać walutę, bo masz faktury z różnymi walutami';
$lang['report_sales_from_date']                        = 'Od daty';
$lang['report_sales_to_date']                          = 'Do daty';


$lang['report_sales_months_all_time']      = 'Cały okres';
$lang['report_sales_months_six_months']    = 'Ostatnie 6 miesięcy';
$lang['report_sales_months_twelve_months'] = 'Ostatnie 12 miesięcy';
$lang['report_sales_months_custom']        = 'Niestandardowe';
$lang['reports_sales_generated_report']    = 'Wygenerowany raport';



$lang['reports_sales_dt_customers_client']                = 'Klient';
$lang['reports_sales_dt_customers_total_invoices']        = 'Wszystkich faktur';
$lang['reports_sales_dt_items_customers_amount']          = 'Kwota';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Kwota z podatkiem';

# Roles
$lang['new_role']           = 'Nowa rola';
$lang['all_roles']          = 'Wszystkie role';
$lang['roles']              = 'Role pracowników';
$lang['role']               = 'Rola';
$lang['role_lowercase']     = 'rola';
$lang['roles_total_users']  = 'Wszystkiech użytkowników:';
$lang['roles_dt_name']      = 'Nazwa roli';
$lang['role_add_edit_name'] = 'Nazwa roli';

# Service
$lang['new_service']           = 'Nowa usługa';
$lang['services']              = 'Usługi';
$lang['service']               = 'Usługa';
$lang['service_lowercase']     = 'usługa';
$lang['services_dt_name']      = 'Nazwa usługi';
$lang['service_add_edit_name'] = 'Nazwa usługi';

# Settings
$lang['settings']                     = 'Ustawienia';
$lang['settings_updated']             = 'Ustawienia zostały zapisane';
$lang['settings_save']                = 'Zapisz ustawienia';
$lang['settings_group_general']       = 'Ogólne';
$lang['settings_group_localization']  = 'Lokalizacja';
$lang['settings_group_tickets']       = 'Zgłoszenia';
$lang['settings_group_sales']         = 'Finanse';
$lang['settings_group_email']         = 'E-mail';
$lang['settings_group_clients']       = 'Klienci';
$lang['settings_group_newsfeed']      = 'Aktualności';
$lang['settings_group_cronjob']       = 'Terminarz zadań';

$lang['settings_yes']                                        = 'Tak';
$lang['settings_no']                                         = 'Nie';
$lang['settings_clients_default_theme']                      = 'Domyślny szablon klienta';
$lang['settings_clients_allow_registration']                 = 'Pozwól klientom na rejestrację';
$lang['settings_clients_allow_kb_view_without_registration'] = 'Pozwól na dostęp do bazy wiedzy bez rejestracji';

$lang['settings_cron_send_overdue_reminder']                 = 'Wyślij przypomnienie o zaległej fakturze';
$lang['settings_cron_send_overdue_reminder_tooltip']         = 'Wyślij e-mail z informacją o zaległości do klienta, gdy stan faktury zostanie automatycznie zmieniony na zaległa';
$lang['automatically_send_invoice_overdue_reminder_after']   = 'Automatyczne wysyłanie przypomnienia po (dni)';
$lang['automatically_resend_invoice_overdue_reminder_after'] = 'Automatyczne wysyłanie ponownego przypomnienia po (dni)';

$lang['settings_email_host']      = 'Host SMTP';
$lang['settings_email_port']      = 'Port SMTP';
$lang['settings_email']           = 'Nazwa użytkownika SMTP';
$lang['settings_email_password']  = 'Hasło SMTP';
$lang['settings_email_charset']   = 'Kodowanie wiadomości e-mail';
$lang['settings_email_signature'] = 'Podpis w wiadomości e-mail';

$lang['settings_general_company_logo']                = 'Logo firmy';
$lang['settings_general_company_logo_tooltip']        = 'Zalecane wymiary: 150 x 32px';
$lang['settings_general_company_remove_logo_tooltip'] = 'Usuń logo firmy';
$lang['settings_general_company_name']                = 'Nazwa firmy';
$lang['settings_general_company_main_domain']         = 'Główna domena';
$lang['settings_general_use_knowledgebase']           = 'Użyj bazy wiedzy';
$lang['settings_general_use_knowledgebase_tooltip']   = 'Jeżeli właczysz tę opcję, baza wiedzy będzie widoczna również dla klientów';
$lang['settings_general_tables_limit']                = 'Tabele paginacja Limit';
$lang['settings_general_default_staff_role']          = 'Domyślna rola personelu';
$lang['settings_general_default_staff_role_tooltip']  = 'Podczas dodawania nowego członka personelu tej roli będą zaznaczone domyślnie';

$lang['settings_localization_date_format']      = 'Format daty';
$lang['settings_localization_default_timezone'] = 'Domyślna strefa czasowa';
$lang['settings_localization_default_language'] = 'Język domyślny';


$lang['settings_newsfeed_max_file_upload_post']    = 'Maksymalna liczba plików';
$lang['settings_newsfeed_max_file_size']           = 'Maksymalny rozmiar (MB)';

$lang['settings_reminders_contracts']         = 'Przypomnienie o wygaśnieniu umowy';
$lang['settings_reminders_contracts_tooltip'] = 'Przypomnienie o wygasaniu w dniach';

$lang['settings_tickets_use_services']             = 'Korzystanie z usług';
$lang['settings_tickets_max_attachments']          = 'Maksymalne załaczniki zgłoszenia';
$lang['settings_tickets_allow_departments_access'] = 'Pozwól personelowi na dostęp tylko do zgłoszeń, które należą tylko do ich działu';
$lang['settings_tickets_allowed_file_extensions']  = 'Dozwolone typy załączników';

$lang['settings_sales_general']                                    = 'Ogólne';
$lang['settings_sales_general_note']                               = 'Ustawienia ogólne';
$lang['settings_sales_invoice_prefix']                             = 'Prefiks numeru faktury';
$lang['settings_sales_decimal_separator']                          = 'Separator dziesiętny';
$lang['settings_sales_thousand_separator']                         = 'Separator tysięcy';
$lang['settings_sales_currency_placement']                         = 'Umieszczenie waluty';
$lang['settings_sales_currency_placement_before']                  = 'Przed kwotą';
$lang['settings_sales_currency_placement_after']                   = 'Za kwotą';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Wymagaj by klient był zalogowany, aby przeglądać faktury';
$lang['settings_sales_next_invoice_number']                        = 'Następny numer faktury';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Ustaw to pole na 1, jeśli chcesz zacząć od początku';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Zmiejsz licznik faktur przy usunięciu faktury';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Czy chcesz zmniejszyć licznik faktury, po usunięciu ostatniej faktury? Np. Jeśli ta opcja jest włączona, a numer kolejnej nowej faktury to 15, po usunięcniu faktury system zmieni numer kolejnej faktury na 14. Jeżeli nie włączysz tej opcji, numer kolejnej faktury pozostanie nie zmieniony.  If you have setup delete only on last invoice to NO you should set this option to NO too to keep the next invoice number not decremented.';
$lang['settings_sales_invoice_number_format']                      = 'Format numeru faktury';
$lang['settings_sales_invoice_number_format_year_based']           = 'Na podstawie roku';
$lang['settings_sales_invoice_number_format_number_based']         = 'Na podstawie numeru (000001)';
$lang['settings_sales_invoice_year']                               = 'Faktura rok (RRRR/000001)';
$lang['settings_sales_invoice_year_tooltip']                       = 'Obecny rok rozliczeniowy. Zresetuj to w nowym roku.';

$lang['settings_sales_company_info_heading'] = 'Firma';
$lang['settings_sales_company_info_note']    = 'Ta informacja będzie wyświetlana na fakturach, wycenach, płatnościach i innych dokumentach PDF, gdzie wymagane są informacje o firmie';
$lang['settings_sales_company_name']         = 'Nazwa firmy';
$lang['settings_sales_address']              = 'Adres';
$lang['settings_sales_city']                 = 'Miasto';
$lang['settings_sales_country_code']         = 'Kod kraju';
$lang['settings_sales_postal_code']          = 'Kod pocztowy';
$lang['settings_sales_phonenumber']          = 'Telefon';

# Leads
$lang['new_lead']       = 'Nowe pozyskanie';
$lang['leads']          = 'Pozyskiwanie';
$lang['lead']           = 'Pozyskanie';
$lang['lead_lowercase'] = 'pozyskanie';
$lang['leads_all']      = 'Wszystkie';

$lang['leads_canban_notes']  = 'Uwagi: %s';
$lang['leads_canban_source'] = 'Źródło: %s';

$lang['lead_new_source']            = 'Nowe Źródło';
$lang['lead_sources']               = 'Źródła pozyskania';
$lang['lead_source']                = 'Źródło pozyskania';
$lang['lead_source_lowercase']      = 'źródło pozyskania';
$lang['leads_sources_not_found']    = 'Brak źródeł pozyskania';
$lang['leads_sources_table_name']   = 'Nazwa źródła';
$lang['leads_source_add_edit_name'] = 'Nazwa źródła';

$lang['lead_new_status']         = 'Nowy status pozyskania';
$lang['lead_statuss']            = 'Status pozyskania';
$lang['lead_status']             = 'Status pozyskania';
$lang['lead_status_lowercase']   = 'status pozyskania';
$lang['leads_status_table_name'] = 'Nazwa stanu pozyskania';

$lang['leads_status_add_edit_name']  = 'Nazwa stanu pozyskania';
$lang['leads_status_add_edit_order'] = 'Zamówienie';

$lang['lead_statuses_not_found']      = 'Brak statusów pozyskania klienta';
$lang['lead_status_updated']          = 'Źródło pozyskania zaaktualizowane';
$lang['leads_search']                 = 'Wyszukiwanie potencjalnych klientów';

$lang['leads_table_total'] = 'Wszystkich pozyskań: %s';

$lang['leads_dt_name']         = 'Nazwa';
$lang['leads_dt_email']        = 'E-mail';
$lang['leads_dt_phonenumber']  = 'Telefon';
$lang['leads_dt_assigned']     = 'Przypisany do';
$lang['leads_dt_status']       = 'Status';
$lang['leads_dt_last_contact'] = 'Ostatni kontakt';

$lang['lead_add_edit_name']                 = 'Nazwa';
$lang['lead_add_edit_email']                = 'Adres e-mail';
$lang['lead_add_edit_phonenumber']          = 'Telefon';
$lang['lead_add_edit_source']               = 'Źródło';
$lang['lead_add_edit_status']               = 'Status pozyskania';
$lang['lead_add_edit_assigned']             = 'Przypisany do';
$lang['lead_add_edit_datecontacted']        = 'Data kontaktu';
$lang['lead_add_edit_contected_today']      = 'Dzisiejszy kontakt';
$lang['lead_add_edit_activity']             = 'Logi czynności';
$lang['lead_add_edit_notes']                = 'Notatki';
$lang['lead_add_edit_add_note']             = 'Dodaj notatke';
$lang['lead_not_contacted']                 = 'Nie kontaktowałem się w sprawie tego pozyskania';
$lang['lead_add_edit_contected_this_lead']  = 'Nawiązałem kontakt w sprawie tego pozyskania';
$lang['lead_confirmation_canban_contacted'] = 'Czy masz pozostać w kontakcie w sprawie tego pozyskania?';

# Misc
$lang['activity_log_when_cron_job'] = 'Terminarz zadań';
$lang['access_denied']              = 'Dostęp zabroniony';
$lang['prev']                       = 'Wstecz';
$lang['next']                       = 'Następny';

# Datatables
$lang['dt_paginate_first']          = 'Pierwszy';
$lang['dt_paginate_last']           = 'Ostatnia';
$lang['dt_paginate_next']           = 'Następny';
$lang['dt_paginate_previous']       = 'Poprzedni';
$lang['dt_empty_table']             = '{0} znaleziono';
$lang['dt_search']                  = 'Szukaj:';
$lang['dt_zero_records']            = 'Brak pasujących rekordów';
$lang['dt_loading_records']         = 'Trwa ładowanie...';
$lang['dt_length_menu']             = 'Pokaż _MENU_ pozycje';
$lang['dt_info_filtered']           = '(filtrowane z _MAX_ wszystkich {0})';
$lang['dt_info_empty']              = 'Wyświetlone jest 0-0 z 0 {0}';
$lang['dt_info']                    = 'Wyświetlono _START_ do _END_ _TOTAL_ {0}';
$lang['dt_empty_table']             = '{0} znaleziono';
$lang['dt_sort_ascending']          = 'Aktywuj, aby posortować kolumnę rosnąco';
$lang['dt_sort_descending']         = 'Aktywuj, aby posortować kolumnę malejąco';
# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s wysłał przypomnienie o zaległej fakturze';

# Weekdays
$lang['wd_monday']    = 'Poniedziałek';
$lang['wd_tuesday']   = 'Wtorek';
$lang['wd_thursday']  = 'Czwartek';
$lang['wd_wednesday'] = 'Środa';
$lang['wd_friday']    = 'Piątek';
$lang['wd_saturday']  = 'Sobota';
$lang['wd_sunday']    = 'Niedziela';

# Admin Left Sidebar
$lang['als_dashboard'] = 'Pulpit';
$lang['als_clients']   = 'Klienci';
$lang['als_leads']     = 'Pozyskania';

$lang['als_contracts'] = 'Umowy';

$lang['als_all_tickets'] = 'Wszystkie zgłoszenia';
$lang['als_sales']       = 'Sprzedaż';

$lang['als_staff'] = 'Personel';
$lang['als_tasks'] = 'Zadania';
$lang['als_kb']    = 'Baza wiedzy';

$lang['als_surveys']               = 'Ankiety';
$lang['als_media']                 = 'Media';
$lang['als_reports']               = 'Raporty';
$lang['als_reports_sales_submenu'] = 'Sprzedaż';
$lang['als_reports_leads_submenu'] = 'Pozyskania';
$lang['als_kb_articles_submenu']   = 'Artykuły z bazy wiedzy';
$lang['als_utilities']             = 'Narzędzia';
$lang['als_announcements_submenu'] = 'Ogłoszenia';
$lang['als_mail_lists_submenu']    = 'Listy mailingowe';
$lang['als_calendar_submenu']      = 'Kalendarz';
$lang['als_activity_log_submenu']  = 'Logi czynności';

# Admin Customizer Sidebar
$lang['acs_tickets']                           = 'Zgłoszenia';
$lang['acs_ticket_priority_submenu']           = 'Priorytet zgłoszenia';
$lang['acs_ticket_statuses_submenu']           = 'Statusy zgłoszeń';
$lang['acs_ticket_predefined_replies_submenu'] = 'Predefiniowane odpowiedzi';
$lang['acs_ticket_services_submenu']           = 'Usługi';
$lang['acs_departments']                       = 'Departamenty';
$lang['acs_leads']                             = 'Pozyskiwanie';
$lang['acs_leads_sources_submenu']             = 'Źródła';
$lang['acs_leads_statuses_submenu']            = 'Statusy';
$lang['acs_sales_taxes_submenu']               = 'Podatki';
$lang['acs_sales_currencies_submenu']          = 'Waluty';
$lang['acs_sales_payment_modes_submenu']       = 'Sposoby płatności';
$lang['acs_email_templates']                   = 'Szablony wiadomości e-mail';
$lang['acs_roles']                             = 'Role';
$lang['acs_settings']                          = 'Ustawienia';

# Tickets
$lang['new_ticket']                                         = 'Otwórz nowe zgłoszenie';
$lang['tickets']                                            = 'Zgłoszenia';
$lang['ticket']                                             = 'Zgłoszenie';
$lang['ticket_lowercase']                                   = 'zgłoszenie';
$lang['support_tickets']                                    = 'Zgłoszenia pomocy technicznej';
$lang['support_ticket']                                     = 'Zgłoszenie pomocy technicznej';
$lang['ticket_settings_to']                                 = 'Do';
$lang['ticket_settings_email']                              = 'Adres e-mail';
$lang['ticket_settings_departments']                        = 'Departament';
$lang['ticket_settings_service']                            = 'Usługa';
$lang['ticket_settings_priority']                           = 'Priorytet';
$lang['ticket_settings_subject']                            = 'Temat';
$lang['ticket_settings_assign_to']                          = 'Przypisz zgłoszenie do innej osoby (domyślnie jest przpisany do obecnie zalogowanego pracownika)';
$lang['ticket_settings_assign_to_you']                      = 'Ty';
$lang['ticket_settings_select_client']                      = 'Wybierz klienta';
$lang['ticket_add_body']                                    = 'Treść zgłoszenia';
$lang['ticket_add_attachments']                             = 'Załączniki';
$lang['ticket_no_reply_yet']                                = 'Nikt jeszcze nie odpowiedział';
$lang['new_ticket_added_succesfuly']                        = 'Zgłoszenie #%s pomyślnie dodane';
$lang['replied_to_ticket_succesfuly']                       = 'Odpowiedziano na zgłoszenie #%s';
$lang['ticket_settings_updated_successfuly']                = 'Ustawienia zgłoszenia zostały zaaktualizowane';
$lang['ticket_settings_updated_successfuly_and_reassigned'] = 'Ustawienia zgłoszenia zostału zaaktualizowane - zgłoszenie zostało przeniesione do działu %s';
$lang['ticket_dt_subject']                                  = 'Temat';
$lang['ticket_dt_department']                               = 'Departament';
$lang['ticket_dt_service']                                  = 'Usługa';
$lang['ticket_dt_submitter']                                = 'Klient';
$lang['ticket_dt_status']                                   = 'Status';
$lang['ticket_dt_priority']                                 = 'Priorytet';
$lang['ticket_dt_last_reply']                               = 'Ostatnia odpowiedź:';

$lang['ticket_single_add_reply']                  = 'Dodaj odpowiedź';
$lang['ticket_single_add_note']                   = 'Dodaj notatke';
$lang['ticket_single_other_user_tickets']         = 'Pozostałe zgłoszenia';
$lang['ticket_single_settings']                   = 'Ustawienia';
$lang['ticket_single_priority']                   = 'Priorytet: %s';
$lang['ticket_single_last_reply']                 = 'Ostatnia odpowiedź: %s';
$lang['ticket_single_change_status_top']          = 'Zmień status';
$lang['ticket_single_ticket_note_by']             = 'Notatka do zgłoszenia dodana przez %s';
$lang['ticket_single_note_added']                 = 'Notatka dodana: %s';
$lang['ticket_single_change_status']              = 'Zmień status';
$lang['ticket_single_assign_to_me_on_update']     = 'Automatycznie przypisać ten bilet do mnie';
$lang['ticket_single_insert_predefined_reply']    = 'Wstawić wstępnie zdefiniowanych odpowiedzi';
$lang['ticket_single_insert_knowledge_base_link'] = 'Wstaw łącze do bazy wiedzy';
$lang['ticket_single_attachments']                = 'Załączniki';
$lang['ticket_single_add_response']               = 'Dodaj odpowiedź';
$lang['ticket_single_note_heading']               = 'Uwaga:';
$lang['ticket_single_add_note']                   = 'Dodaj notatke';
$lang['ticket_settings_none_assigned']            = 'Brak';
$lang['ticket_status_changed_successfuly']        = 'Status zgłoszenia zmieniony';
$lang['ticket_status_changed_fail']               = 'Wystąpił problem ze zmianą statusu zgłoszenia';

$lang['ticket_staff_string']                    = 'Personel';
$lang['ticket_client_string']                   = 'Klient';
$lang['ticket_posted']                          = 'Wysłany: %s';
$lang['ticket_insert_predefined_reply_heading'] = 'Wstaw wstępnie zdefiniowaną odpowiedź';
$lang['ticket_kb_link_heading']                 = 'Wstaw łącze do bazy wiedzy';
$lang['ticket_access_by_department_denied']     = 'Nie masz dostępu do tego zgłoszenia. To zgłoszenie należy do działu do którego nie jesteś przypisany.';

# Staff
$lang['new_staff']                       = 'Nowy członek personelu';
$lang['staff_members']                   = 'Członkowie personelu';
$lang['staff_member']                    = 'Członek personelu';
$lang['staff_member_lowercase']          = 'członek personelu';
$lang['staff_profile_updated']           = 'Twój profil został zaaktualizowany';
$lang['staff_old_password_incorect']     = 'Twoje stare hasło jest nieprawidłowe';
$lang['staff_password_changed']          = 'Twoje hasło zostało zmienione';
$lang['staff_problem_changing_password'] = 'Wystąpił problem przy zmianie hasła';
$lang['staff_profile_string']            = 'Profil użytkownika';

$lang['staff_cant_remove_main_admin']          = 'Nie można usunąć administratora głównego';
$lang['staff_cant_remove_yourself_from_admin'] = 'Nie możesz usunąć siebie z roli administratora';

$lang['staff_dt_name']       = 'Imię i nazwisko';
$lang['staff_dt_email']      = 'E-mail';
$lang['staff_dt_last_Login'] = 'Ostatnie logowanie';
$lang['staff_dt_active']     = 'Aktywne';

$lang['staff_add_edit_firstname']             = 'Imię';
$lang['staff_add_edit_lastname']              = 'Nazwisko';
$lang['staff_add_edit_email']                 = 'E-mail';
$lang['staff_add_edit_phonenumber']           = 'Telefon';
$lang['staff_add_edit_facebook']              = 'Facebook';
$lang['staff_add_edit_linkedin']              = 'LinkedIn';
$lang['staff_add_edit_skype']                 = 'Skype';
$lang['staff_add_edit_departments']           = 'Działy pracownika';
$lang['staff_add_edit_role']                  = 'Rola';
$lang['staff_add_edit_permissions']           = 'Uprawnienia';
$lang['staff_add_edit_administrator']         = 'Administrator';
$lang['staff_add_edit_password']              = 'Hasło';
$lang['staff_add_edit_password_note']         = 'Uwaga: Jeśli wypełnisz to pole, hasło zostanie zmieniony dla tego użytkownika.';
$lang['staff_add_edit_password_last_changed'] = 'Ostatnia zmiana hasła';
$lang['staff_add_edit_notes']                 = 'Notatki';
$lang['staff_add_edit_note_description']      = 'Uwagi';

$lang['staff_notes_table_description_heading'] = 'Uwaga:';
$lang['staff_notes_table_addedfrom_heading']   = 'Dodane z';
$lang['staff_notes_table_dateadded_heading']   = 'Data dodania';

$lang['staff_admin_profile']         = 'Jest to profil admina';
$lang['staff_profile_notifications'] = 'Powiadomienia';
$lang['staff_profile_departments']   = 'Departamenty';

$lang['staff_edit_profile_image']                     = 'Zdjęcie profilowe';
$lang['staff_edit_profile_your_departments']          = 'Twoje działy';
$lang['staff_edit_profile_change_your_password']      = 'Zmień swoje hasło';
$lang['staff_edit_profile_change_old_password']       = 'Stare hasło';
$lang['staff_edit_profile_change_new_password']       = 'Nowe hasło';
$lang['staff_edit_profile_change_repet_new_password'] = 'Powtórz nowe hasło';

# Surveys
$lang['new_survey']                    = 'Nowa ankieta';
$lang['surveys']                       = 'Ankiety';
$lang['survey']                        = 'Ankieta';
$lang['survey_lowercase']              = 'ankieta';
$lang['survey_no_mail_lists_selected'] = 'Brak zaznaczonych list mailingowych';
$lang['survey_send_success_note']      = 'Wszystkie badania Emails(%s) zostanie wysłane za pośrednictwem CRON';
$lang['survey_result']                 = 'Wynik badania: %s';
$lang['question_string']               = 'Pytanie';
$lang['question_field_string']         = 'Pole';

$lang['survey_list_view_tooltip']         = 'Zobacz ankietę';
$lang['survey_list_view_results_tooltip'] = 'Zobacz wyniki';

$lang['survey_add_edit_subject']                   = 'Tytuł ankiety';
$lang['survey_add_edit_email_description']         = 'Opis badania (Opis wiadomości E-mail)';
$lang['survey_include_survey_link']                = 'Załącz link do ankiety w opisie';
$lang['survey_available_mail_lists_custom_fields'] = 'Dostępne pola niestandardowe listy e-mailowe';
$lang['survey_mail_lists_custom_fields_tooltip']   = 'Pola niestandardowe mogą być wykorzystywane w edytorze wiadomości e-mail.';
$lang['survey_add_edit_short_description_view']    = 'Krótki opis ankiety (zobacz opis)';
$lang['survey_add_edit_from']                      = 'Od (wyświetlone w e-mailu)';
$lang['survey_add_edit_redirect_url']              = 'Przekerowanie URL ankiety';
$lang['survey_add_edit_red_url_note']              = 'Gdy użytkownik zakończy badanie miejsce do przekierowany (Zostaw puste dla tego adresu url witryny)';
$lang['survey_add_edit_disabled']                  = 'Wyłączone';
$lang['survey_add_edit_only_for_logged_in']        = 'Tylko, dla zalogowanych uczestników (personel, klienci)';
$lang['send_survey_string']                        = 'Wysłać ankietę';
$lang['survey_send_mail_list_clients']             = 'Klienci';
$lang['survey_send_mail_list_staff']               = 'Personel';
$lang['survey_send_mail_lists_string']             = 'Listy mailingowe';
$lang['survey_send_mail_lists_note_logged_in']     = 'Uwaga: Jeśli wysyłasz badania listach poczty tylko zalogowani uczestnicy muszą być niezaznaczone';
$lang['survey_send_string']                        = 'Wyślij';

$lang['survey_send_to_total']  = 'Łącznie wysłano %s e-maili';
$lang['survey_send_till_now']  = 'Do teraz';
$lang['survey_send_finished']  = 'Wysyłka ankiety zakończona: %s';
$lang['survey_added_to_queue'] = 'Badanie to jest dodawane do kolejki cron na %s';

$lang['survey_questions_string']          = 'Pytania';
$lang['survey_insert_field']              = 'Wstaw pole';
$lang['survey_field_checkbox']            = 'Pole wyboru';
$lang['survey_field_radio']               = 'Radio';
$lang['survey_field_input']               = 'Pole input';
$lang['survey_field_textarea']            = 'Pole tekstowe';
$lang['survey_question_required']         = 'Wymagane';
$lang['survey_question_only_for_preview'] = 'Tylko do podglądu';
$lang['survey_create_first']              = 'Musisz najpierw utworzyć ankietę, a następnie będzie można wstawić na pytania.';


$lang['survey_dt_name']               = 'Nazwa';
$lang['survey_dt_total_questions']    = 'Wszystkich pytań';
$lang['survey_dt_total_participants'] = 'Wszystkich uczestników';
$lang['survey_dt_date_created']       = 'Data utworzenia';
$lang['survey_dt_active']             = 'Aktywne';

$lang['survey_text_questions_results'] = 'Tekst pytania wynik';
$lang['survey_view_all_answers']       = 'Wyświetl wszystkie odpowiedzi';

# Staff Tasks
$lang['new_task']       = 'Nowe zadanie';
$lang['tasks']          = 'Zadania';
$lang['task']           = 'Zadanie';
$lang['task_lowercase'] = 'zadanie';
$lang['comment_string'] = 'Komentarz';

$lang['task_marked_as_complete'] = 'Zadanie oznaczone jako zakończone';
$lang['task_follower_removed']   = 'Zwolennik zadania usunięte pomyślnie';
$lang['task_assignee_removed']   = 'Przydzielenie do tego zadania zostało usunięte';

$lang['task_no_assignees'] = 'Brak osób przydzielonych do tego zadania';
$lang['task_no_followers'] = 'Nie ma zwolenników tego zadania';

$lang['task_list_all']            = 'Wszystkie';
$lang['task_list_finished']       = 'Zakończone';
$lang['task_list_unfinished']     = 'Niedokończone';
$lang['task_list_not_assigned']   = 'Nie przypisane';
$lang['task_list_duedate_passed'] = 'Termin płatności minął';
$lang['tasks_dt_name']            = 'Nazwa';

$lang['task_single_priority']               = 'Priorytet';
$lang['task_single_start_date']             = 'Data rozpoczęcia';
$lang['task_single_due_date']               = 'Termin płatności';
$lang['task_single_finished']               = 'Zakończone';
$lang['task_single_mark_as_complete']       = 'Oznacz jako zakończone';
$lang['task_single_edit']                   = 'Edytuj';
$lang['task_single_delete']                 = 'Usuń';
$lang['task_single_assignees']              = 'Przypisania';
$lang['task_single_assignees_select_title'] = 'Przypisz zadanie do';
$lang['task_single_followers']              = 'Zwolenników';
$lang['task_single_followers_select_title'] = 'Dodać zwolenników';
$lang['task_single_insert_media_link']      = 'Wstaw Media Link';
$lang['task_single_add_new_comment']        = 'Dodaj komentarz';

$lang['task_add_edit_subject']     = 'Temat';
$lang['task_add_edit_priority']    = 'Priorytet';
$lang['task_priority_low']         = 'Niski';
$lang['task_priority_medium']      = 'Średni';
$lang['task_priority_high']        = 'Wysoki';
$lang['task_priority_urgent']      = 'Pilne';
$lang['task_add_edit_start_date']  = 'Data rozpoczęcia';
$lang['task_add_edit_due_date']    = 'Termin płatności';
$lang['task_add_edit_description'] = 'Opis zadania';

# Taxes
$lang['new_tax']       = 'Nowy podatek';
$lang['taxes']         = 'Podatki';
$lang['tax']           = 'Podatek';
$lang['tax_lowercase'] = 'podatek';
$lang['tax_dt_name']   = 'Nazwa podatku';
$lang['tax_dt_rate']   = 'Oceń (procent)';

$lang['tax_add_edit_name'] = 'Nazwa podatku';
$lang['tax_add_edit_rate'] = 'Stawka podatku (procent)';
$lang['tax_edit_title']    = 'Edytuj podatek';
$lang['tax_add_title']     = 'Dodaj nowy podatek';

# Ticket Statuses
$lang['new_ticket_status']       = 'Nowy Status zgłoszenia';
$lang['ticket_statuses']         = 'Statusy zgłoszeń';
$lang['ticket_status']           = 'Status zgłoszenia';
$lang['ticket_status_lowercase'] = 'status zgłoszenia';

$lang['ticket_statuses_dt_name']      = 'Nazwa statusu zgłoszenia';
$lang['no_ticket_statuses_found']     = 'Nie biletów statusy Znalezione';
$lang['ticket_statuses_table_total']  = 'Wszystkich %s';
$lang['ticket_status_add_edit_name']  = 'Nazwa statusu zgłoszenia';
$lang['ticket_status_add_edit_color'] = 'Wybierz kolor';
$lang['ticket_status_add_edit_order'] = 'Status zamówienia';

# Todos
$lang['new_todo']                  = 'Nowe Todo';
$lang['my_todos']                  = 'Moje rzeczy do wykonania';
$lang['todo']                      = 'Pozycja listy zadań';
$lang['todo_lowercase']            = 'Lista zadań';
$lang['todo_status_changed']       = 'Zmieniono status listy zadaań';
$lang['todo_add_title']            = 'Dodaj nową pozycję do listy zadań';
$lang['add_new_todo_description']  = 'Opis';
$lang['no_finished_todos_found']   = 'Brak ukończonych zadań';
$lang['no_unfinished_todos_found'] = 'Brak zadań';
$lang['unfinished_todos_title']    = 'Nieukończone zadania';
$lang['finished_todos_title']      = 'Ostatnio ukończone rzeczy';

# Authentication
$lang['password_changed_email_subject']             = 'Twoje hasło zostało zmienione';
$lang['password_reset_email_subject']               = 'Resetowanie hasła na %s';
# Utilities
$lang['utility_activity_log']                       = 'Logi czynności';
$lang['utility_activity_log_filter_by_date']        = 'Filtruj wg daty';
$lang['utility_activity_log_dt_description']        = 'Opis';
$lang['utility_activity_log_dt_date']               = 'Data';
$lang['utility_activity_log_dt_staff']              = 'Personel';
$lang['utility_calendar_new_event_title']           = 'Dodaj nowe wydarzenie';
$lang['utility_calendar_new_event_start_date']      = 'Data rozpoczęcia';
$lang['utility_calendar_new_event_end_date']        = 'Data zakończenia';
$lang['utility_calendar_new_event_make_public']     = 'Utwórz publiczne';
$lang['utility_calendar_event_added_successfuly']   = 'Nowe wydarzenie zostało dodane';
$lang['utility_calendar_event_deleted_successfuly'] = 'Usunięto wydarzenie';
$lang['utility_calendar_new_event_placeholder']     = 'Tytuł wydarzenia';


# Navigation
$lang['nav_notifications']          = 'Powiadomienia';
$lang['nav_my_profile']             = 'Mój profil';
$lang['nav_edit_profile']           = 'Edytuj profil';
$lang['nav_logout']                 = 'Wyloguj się';
$lang['nav_no_notifications']       = 'Brak powiadomień';
$lang['nav_view_all_notifications'] = 'Zobacz wszystkie powiadomienia';
$lang['nav_customizer_tooltip']     = 'Dostosowywanie ustawień';
$lang['nav_notifications_tooltip']  = 'Zobacz powiadomienia';

## Clients
#

$lang['clients_required_field'] = 'To pole jest wymagane';

# Footer
$lang['clients_copyright'] = 'Prawa autorskie %s';

# Announcements
$lang['clients_announcement_from']  = 'Od: ';
$lang['clients_announcement_added'] = 'Dodano: ';

# Contracts
$lang['clients_contracts']               = 'Umowy';
$lang['clients_contracts_dt_subject']    = 'Temat';
$lang['clients_contracts_dt_start_date'] = 'Data rozpoczęcia';
$lang['clients_contracts_dt_end_date']   = 'Data zakończenia';

# Home
$lang['clients_quick_invoice_info']                = 'Szybka informacja o fakturach';
$lang['clients_home_currency_select_tooltip']      = 'Należy wybrać walutę, bo masz faktury z różnych walut';

# Invoices
$lang['clients_invoice_html_btn_download'] = 'Pobierz';

$lang['clients_my_invoices']        = 'Moje faktury';
$lang['clients_invoice_dt_number']  = 'Faktura #';
$lang['clients_invoice_dt_date']    = 'Data';
$lang['clients_invoice_dt_duedate'] = 'Termin płatności';
$lang['clients_invoice_dt_amount']  = 'Kwota';
$lang['clients_invoice_dt_status']  = 'Status';

# Profile
$lang['clients_profile_heading'] = 'Profil użytkownika';

# Used for edit profile and register START
$lang['clients_firstname'] = 'Imię';
$lang['clients_lastname']  = 'Nazwisko';
$lang['clients_email']     = 'Adres e-mail';
$lang['clients_company']   = 'Firma';
$lang['clients_vat']       = 'Numer VAT';
$lang['clients_phone']     = 'Telefon';
$lang['clients_country']   = 'Kraj';
$lang['clients_city']      = 'Miasto';
$lang['clients_address']   = 'Adres';
$lang['clients_zip']       = 'Archiwum ZIP';
$lang['clients_state']     = 'Województwo';
# Used for edit profile and register END

$lang['clients_register_password']        = 'Hasło';
$lang['clients_register_password_repeat'] = 'Powtórz hasło';
$lang['clients_edit_profile_update_btn']  = 'Aktualizacja';

$lang['clients_edit_profile_change_password_heading'] = 'Zmień hasło';
$lang['clients_edit_profile_old_password']            = 'Stare hasło';
$lang['clients_edit_profile_new_password']            = 'Nowe hasło';
$lang['clients_edit_profile_new_password_repeat']     = 'Powtórz hasło';
$lang['clients_edit_profile_change_password_btn']     = 'Zmień hasło';
$lang['clients_profile_last_changed_password']        = 'Ostatnia zmiana hasła %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'Baza wiedzy';
$lang['clients_knowledge_base_articles_not_found'] = 'Brak artykułów w bazie wiedzy';
$lang['clients_knowledge_base_find_useful']        = 'Czy uważasz, że ten artykuł jest przydatny?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Tak';
$lang['clients_knowledge_base_find_useful_no']     = 'Nie';
$lang['clients_article_only_1_vote_today']         = 'Można głosować raz na 24 godziny';
$lang['clients_article_voted_thanks_for_feedback'] = 'Dziękujemy za opinię';

# Tickets
$lang['clients_ticket_open_subject']                = 'Otórz nowe zgłoszenie';
$lang['clients_ticket_open_departments']            = 'Dział';
$lang['clients_tickets_heading']                    = 'Pomoc techniczna';
$lang['clients_ticket_open_service']                = 'Usługa';
$lang['clients_ticket_open_priority']               = 'Priorytet';
$lang['clients_latest_tickets']                     = 'Najnowsze zgłoszenia';
$lang['clients_ticket_open_body']                   = 'Treść zgłoszenia';
$lang['clients_ticket_attachments']                 = 'Załaczniki';
$lang['clients_ticket_posted']                      = 'Wysłany: %s';
$lang['clients_single_ticket_string']               = 'Zgłoszenie';
$lang['clients_single_ticket_replied']              = 'Odpowiedział: %s';
$lang['clients_single_ticket_informations_heading'] = 'Informacje o zgłoszeniu';

$lang['clients_tickets_dt_number']     = 'Zgłoszenie #';
$lang['clients_tickets_dt_subject']    = 'Temat';
$lang['clients_tickets_dt_department'] = 'Dział';
$lang['clients_tickets_dt_service']    = 'Usługa';
$lang['clients_tickets_dt_status']     = 'Status';
$lang['clients_tickets_dt_last_reply'] = 'Ostatnia odpowiedź:';

$lang['clients_ticket_single_department']        = 'Dział: %s';
$lang['clients_ticket_single_submited']          = 'Nadesłane: %s';
$lang['clients_ticket_single_status']            = 'Status:';
$lang['clients_ticket_single_priority']          = 'Priorytet: %s';
$lang['clients_ticket_single_add_reply_btn']     = 'Dodaj odpowiedź';
$lang['clients_ticket_single_add_reply_heading'] = 'Dodaj odpowiedź na to zgłoszenie';

# Login
$lang['clients_login_heading_no_register'] = 'Proszę się zalogować';
$lang['clients_login_heading_register']    = 'Proszę się zalogować lub zarejestrować';
$lang['clients_login_email']               = 'Adres e-mail';
$lang['clients_login_password']            = 'Hasło';
$lang['clients_login_remember']            = 'Zapamiętaj mnie';
$lang['clients_login_login_string']        = 'Zaloguj się';

# Register
$lang['clients_register_string']  = 'Zarejestruj się';
$lang['clients_register_heading'] = 'Zarejestruj się';

# Navigation
$lang['clients_nav_login']     = 'Zaloguj się';
$lang['clients_nav_register']  = 'Zarejestruj się';
$lang['clients_nav_invoices']  = 'Faktury';
$lang['clients_nav_contracts'] = 'Umowy';
$lang['clients_nav_kb']        = 'Baza wiedzy';
$lang['clients_nav_profile']   = 'Profil użytkownika';
$lang['clients_nav_logout']    = 'Wyloguj się';

# Datatables
$lang['clients_dt_paginate_first']    = 'Pierwszy';
$lang['clients_dt_paginate_last']     = 'Ostatnie';
$lang['clients_dt_paginate_next']     = 'Następny';
$lang['clients_dt_paginate_previous'] = 'Poprzedni';
$lang['clients_dt_empty_table']       = 'Nie znaleziono {0}';
$lang['clients_dt_search']            = 'Szukaj:';
$lang['clients_dt_zero_records']      = 'Brak pasujących rekordów';
$lang['clients_dt_loading_records']   = 'Trwa ładowanie...';
$lang['clients_dt_length_menu']       = 'Pokaż _MENU_';
$lang['clients_dt_info_filtered']     = '(filtrowane z _MAX_ sumie {0})';
$lang['clients_dt_info_empty']        = 'Wyświetlone jest 0-0 z 0 {0}';
$lang['clients_dt_info']              = 'Wyświetlono _START_ do _END_ _TOTAL_ {0}';
$lang['clients_dt_empty_table']       = 'Nie znaleziono {0}';
$lang['clients_dt_sort_ascending']    = 'Aktywuj, aby posortować kolumnę rosnąco';
$lang['clients_dt_sort_descending']   = 'Aktywuj, aby posortować kolumnę malejąco';


# Version 1.0.1
# Admin
#
# Payments
$lang['payment_receipt']                               = 'Potwierdzenie płatności';
$lang['payment_for_string']                            = 'Płatność dla';
$lang['payment_date']                                  = 'Data płatności:';
$lang['payment_view_mode']                             = 'Typ płatności:';
$lang['payment_total_amount']                          = 'Łączna kwota';
$lang['payment_table_invoice_number']                  = 'Numer faktury';
$lang['payment_table_invoice_date']                    = 'Data wystawienia faktury';
$lang['payment_table_invoice_amount_total']            = 'Kwota faktury';
$lang['payment_table_payment_amount_total']            = 'Kwota płatności';
$lang['payments_table_transaction_id']                 = 'Identyfikator transakcji: %s';
$lang['payment_getaway_token_not_found']               = 'Nie znaleziono tokena';
$lang['online_payment_recorded_success']               = 'Płatność została zarejestrowana';
$lang['online_payment_recorded_success_fail_database'] = 'Płatność została zakończona powodzeniem, ale nie można jej zapisać w baze danych. Proszę o kontakt z Administratorem';

# Leads
$lang['lead_convert_to_client']                   = 'Konwersja do klienta';
$lang['lead_convert_to_email']                    = 'E-mail';
$lang['lead_convert_to_client_firstname']         = 'Imię';
$lang['lead_convert_to_client_lastname']          = 'Nazwisko';
$lang['lead_email_already_exists']                = 'Lead email already exists in customers data';
$lang['lead_to_client_base_converted_success']    = 'Lead converted to customer successfuly';
$lang['lead_already_converted']                   = 'Converted to customer';
$lang['lead_have_client_profile']                 = 'This lead have customer profile.';
$lang['lead_converted_edit_client_profile']       = 'Edytuj profil';
$lang['lead_is_client_cant_change_status_canban'] = 'This lead is converted to customer. You cant change his status.';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Zobacz fakturę jako klient';
$lang['invoice_add_edit_recurring']                                           = 'Cykliczna faktura?';
$lang['invoice_add_edit_recurring_no']                                        = 'Nie';
$lang['invoice_add_edit_recurring_month']                                     = 'Co %s miesiąc';
$lang['invoice_add_edit_recurring_months']                                    = 'Co %s miesiące';
$lang['invoices_list_all']                                                    = 'Wszystkie';
$lang['invoices_list_not_sent']                                               = 'Faktura nie wysłana';
$lang['invoices_list_not_have_payment']                                       = 'Invoices with no payment record';
$lang['invoices_list_recuring']                                               = 'Cykliczne faktury';
$lang['invoices_list_made_payment_by']                                        = 'Płatność dokonana przez %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Create new invoice from main recurring invoice only if is with status Paid';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Create new invoice from the main recurring invoice only if the main invoice is with status paid? If this field is set to No and the recurring invoice is not with status paid the new invoice wont be created';
$lang['send_renewed_invoice_from_recurring_to_email']                         = 'Auto send the renewed invoice to the customer';
$lang['view_invoice_pdf_link_pay']                                            = 'Zapłać fakturę';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Konta bankowe / Opis';
$lang['payment_mode_add_edit_description_tooltip'] = 'You can set here bank accounts informations. Will be shown on HTML Invoice';
$lang['payment_modes_dt_description']              = 'Konta bankowe / Opis';
$lang['payment_modes_add_edit_announcement']       = 'Note: Payment modes listed below are offline modes. Online payment modes can be configured in Settings-> Payment Gataways';
$lang['payment_mode_add_edit_active']              = 'Aktywne';
$lang['payment_modes_dt_active']                   = 'Aktywne';

# Contracts
$lang['contract_not_found'] = 'Contract not found. Maybe is deleted, check activity log';

# Settings
$lang['setting_bar_heading']                 = 'Ustawienia';
$lang['settings_group_online_payment_modes'] = 'Bramki płatności';
$lang['settings_paymentmethod_mode_label']   = 'Etykieta';
$lang['settings_paymentmethod_active']       = 'Aktywne';
$lang['settings_paymentmethod_currencies']   = 'Waluty oddzielone przecinkiem';
$lang['settings_paymentmethod_testing_mode'] = 'Włącz tryb testowy';

$lang['settings_paymentmethod_paypal_username']  = 'Paypal API Username';
$lang['settings_paymentmethod_paypal_password']  = 'Hasło API PayPala';
$lang['settings_paymentmethod_paypal_signature'] = 'API Signature';

$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Stripe API Secret Key';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Stripe Publishable Key';
$lang['settings_limit_top_search_bar_results']             = 'Limit Top Search Bar Results to';

# Quick Actions
$lang['qa_create_invoice']  = 'Tworzenie faktury';
$lang['qa_create_task']     = 'Tworzenie zadania';
$lang['qa_create_client']   = 'Tworzenie klienta';
$lang['qa_create_contract'] = 'Tworzenie umowy';
$lang['qa_create_kba']      = 'Create Knowledge Base Article';
$lang['qa_create_survey']   = 'Tworzenie ankiety';
$lang['qa_create_ticket']   = 'Otwórz zgłoszenie';
$lang['qa_create_staff']    = 'Utwórz członka personelu';

## Clients
$lang['client_phonenumber'] = 'Telefon';

# Main Clients
$lang['clients_register']                          = 'Zarejestruj się';
$lang['clients_profile_updated']                   = 'Your profile has been updated';
$lang['clients_successfully_registered']           = 'Thank your for registering';
$lang['clients_account_created_but_not_logged_in'] = 'Twoje konto zostało utworzone, ale nie zostałeś automatycznie zalogowany do systemu. Proszę się zalogować';
# Tickets
$lang['clients_tickets_heading']                   = 'Pomoc techniczna';

# Payments
// Uses on stripe page
$lang['payment_for_invoice'] = 'Płatność do faktury';
$lang['payment_total']       = 'Razem: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Online Payment';
$lang['invoice_html_online_payment_button_text'] = 'Zapłać teraz';
$lang['invoice_html_payment_modes_not_selected'] = 'Proszę wybierz sposób płatności';
$lang['invoice_html_amount_blank']               = 'Total amount cant be blank or zero';
$lang['invoice_html_offline_payment']            = 'Offline Payment';
$lang['invoice_html_amount']                     = 'Kwota';


# Version 1.0.2
# Admin
#
# DataTables
$lang['dt_button_column_visibility']  = 'Widoczność';
$lang['dt_button_reload']             = 'Przeładuj';
$lang['dt_button_excel']              = 'Excel';
$lang['dt_button_csv']                = 'CSV';
$lang['dt_button_pdf']                = 'PDF';
$lang['dt_button_print']              = 'Drukuj';
$lang['is_not_active_export']         = 'Nie';
$lang['is_active_export']             = 'Tak';

# Invoice
$lang['invoice_add_edit_advanced_options']               = 'Zaawansowane opcje';
$lang['invoice_add_edit_allowed_payment_modes']          = 'Allowed payment modes for this invoice';
$lang['invoice_add_edit_recuring_invoices_from_invoice'] = 'Recurring invoices from this invoice';
$lang['invoice_add_edit_no_payment_modes_found']         = 'No payment modes found.';
$lang['invoice_html_total_pay']                          = 'Razem: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Nazwa szablonu';
# General
$lang['discount_type']                      = 'Rodzaj rabatu';
$lang['discount_type_after_tax']            = 'Po opodatkowaniu.';
$lang['discount_type_before_tax']           = 'Przed opodatkowaniem';
$lang['terms_and_conditions']               = 'Warunki użytkowania';
$lang['reference_no']                       = 'Odniesienie #';
$lang['no_discount']                        = 'Brak rabatu';
$lang['view_stats_tooltip']                 = 'Zobacz szybkie statystyki';
# Clients
$lang['zip_from_date']                      = 'Od daty:';
$lang['zip_to_date']                        = 'Do daty:';
$lang['client_zip_payments']                = 'ZIP Payments';
$lang['client_zip_invoices']                = 'ZIP Invoices';
$lang['client_zip_estimates']               = 'ZIP Estimates';
$lang['client_zip_status']                  = 'Status';
$lang['client_zip_status_all']              = 'Wszystkie';
$lang['client_zip_payment_modes']           = 'Płatność dokonana przez';
$lang['client_zip_no_data_found']           = 'No %s found';

# Payments
$lang['payment_mode']         = 'Rodzaj płatności';
$lang['payment_view_heading'] = 'Płatność';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Allow customer to modify the amount to pay (for online payments)';
$lang['settings_survey_send_emails_per_cron_run']                   = 'How much emails to sent per hour';
$lang['settings_survey_send_emails_per_cron_run_tooltip']           = 'This option is used when sending Surveys. The Survey cron will sent X emails per hour. Some hosting providers have limit for sending emails per hour.';
$lang['settings_delete_only_on_last_invoice']                       = 'Delete invoice allowed only on last invoice';
$lang['settings_sales_estimate_prefix']                             = 'Prefiks wycen';
$lang['settings_sales_next_estimate_number']                        = 'Kolejny numer wyceny';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Ustaw to pole na 1, jeśli chcesz zacząć od początku';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Decrement estimate number on delete';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Do you want to decrement the estimate number when the last estimate is deleted? Ex. If is set this option to YES and before estimate delete the next estimate number is 15 the next estimate number will decrement to 14.If is set to NO the number will remain to 15. If you have setup delete only on last estimate to NO you should set this option to NO too to keep the next estimate number not decremented.';
$lang['settings_sales_estimate_number_format']                      = 'Format numeru wyceny';
$lang['settings_sales_estimate_number_format_year_based']           = 'Na podstawie roku';
$lang['settings_sales_estimate_number_format_number_based']         = 'Na podstawie numeru (000001)';
$lang['settings_sales_estimate_year']                               = 'Wycena roczna (RRRR/000001)';
$lang['settings_sales_estimate_year_tooltip']                       = 'Current estimate year. Reset this when new year arrives.';
$lang['settings_delete_only_on_last_estimate']                      = 'Delete estimate allowed only on last invoice';
$lang['settings_cron_invoice_heading']                              = 'Faktura';
$lang['settings_send_test_email_heading']                           = 'Wyślij wiadomość testową';
$lang['settings_send_test_email_subheading']                        = 'Send test email to make sure that your SMTP settings is set correctly.';
$lang['settings_send_test_email_string']                            = 'Adres e-mail';
$lang['settings_smtp_settings_heading']                             = 'Ustawienia SMTP';
$lang['settings_smtp_settings_subheading']                          = 'Konfiguracja głównego adresu e-mail';
$lang['settings_getaways_heading_notice']                           = 'For security reasons online payment gataways are visible only to user with ID 1.Which means to user that installed the CRM.';
$lang['settings_sales_heading_general']                             = 'Ogólne';
$lang['settings_sales_heading_invoice']                             = 'Faktura';
$lang['settings_sales_heading_estimates']                           = 'Wyceny';
$lang['settings_sales_heading_company']                             = 'Firma';
$lang['settings_sales_cron_invoice_heading']                        = 'Faktura';

# Tasks
$lang['tasks_dt_datestart'] = 'Data rozpoczęcia';
$lang['tasks_dt_priority']  = 'Priorytet';

# Invoice General
$lang['invoice_discount'] = 'Rabat';

# Tickets
$lang['ticket_settings_client'] = 'Klient';

# Settings
$lang['settings_rtl_support_admin']                                   = 'RTL Admin Area (Right to Left)';
$lang['settings_rtl_support_client']                                  = 'RTL Client Area (Right to Left)';
$lang['acs_language_editor']                                          = 'Language Editor';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Auto convert the estimate to invoice after client accept';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Exclude estimates with draft status from client area';

# Months
$lang['January']   = 'Styczeń';
$lang['February']  = 'Luty';
$lang['March']     = 'Marzec';
$lang['April']     = 'Kwiecień';
$lang['May']       = 'Maj';
$lang['June']      = 'Czerwiec';
$lang['July']      = 'Lipiec';
$lang['August']    = 'Sierpień';
$lang['September'] = 'Wrzesień';
$lang['October']   = 'Październik';
$lang['November']  = 'Listopad';
$lang['December']  = 'Grudzień';

# Time ago function translate
$lang['time_ago_just_now']  = 'Przed chwilą';
$lang['time_ago_minute']    = '1 minutę temu';
$lang['time_ago_minutes']   = '%s min temu';
$lang['time_ago_hour']      = 'godzinę temu';
$lang['time_ago_hours']     = '%s godzin temu';
$lang['time_ago_yesterday'] = 'wczoraj';
$lang['time_ago_days']      = '%s dni temu';
$lang['time_ago_week']      = 'tydzień temu';
$lang['time_ago_weeks']     = '%s tygodni temu';
$lang['time_ago_month']     = 'miesiąc temu';
$lang['time_ago_months']    = '%s miesięcy temu';
$lang['time_ago_year']      = 'rok temu';
$lang['time_ago_years']     = '%s lat temu';


# Estimates
$lang['estimates']                          = 'Wyceny';
$lang['estimate']                           = 'Szacowane';
$lang['estimate_lowercase']                 = 'wycena';
$lang['create_new_estimate']                = 'Utwórz nową wycenę';
$lang['view_estimate']                      = 'Zobacz wycenę';
$lang['estimate_number_changed']            = 'Estimate created successfuly but the number is changed because someone added new estimate before you.';
$lang['estimate_sent_to_client_success']    = 'The estimate is sent successfuly to the client';
$lang['estimate_sent_to_client_fail']       = 'Wystąpił problem przy wysłaniu wyceny';
$lang['estimate_reminder_send_problem']     = 'Problem sending estimate overdue reminder';
$lang['estimate_details']                   = 'Szczegóły wyceny';
$lang['estimate_view']                      = 'Zobacz wycenę';
$lang['estimate_select_customer']           = 'Klient';
$lang['estimate_add_edit_number']           = 'Numer wyceny';
$lang['estimate_add_edit_date']             = 'Data sporządzenia wyceny';
$lang['estimate_add_edit_expirydate']       = 'Data ważności';
$lang['estimate_add_edit_currency']         = 'Waluta';
$lang['estimate_add_edit_client_note']      = 'Uwagi klienta';
$lang['estimate_add_edit_admin_note']       = 'Uwagi pracownika';
$lang['estimate_add_edit_new_item']         = 'Nowa pozycja';
$lang['estimate_add_edit_search_item']      = 'Szukaj pozycji';
$lang['estimates_toggle_table_tooltip']     = 'Przełącz widok';
$lang['estimate_add_edit_advanced_options'] = 'Zaawansowane opcje';
$lang['estimate_vat']                       = 'Numer VAT';
$lang['estimate_to']                        = 'Do';
$lang['estimates_list_all']                 = 'Wszystkie';

$lang['estimate_invoiced_date']                  = 'Estimate Invoiced on %s';
$lang['edit_estimate_tooltip']                   = 'Edycja wyceny';
$lang['delete_estimate_tooltip']                 = 'Usuń wycenę';
$lang['estimate_sent_to_email_tooltip']          = 'Wyślij na e-mail';
$lang['estimate_already_send_to_client_tooltip'] = 'Ta wycena została już wysłana do klienta %s';
$lang['send_overdue_notice_tooltip']             = 'Wyślij przyponienie o płatności';
$lang['estimate_view_activity_tooltip']          = 'Logi czynności';

$lang['estimate_send_to_client_modal_heading']    = 'Wyślij tę wycenę do klienta';
$lang['estimate_send_to_client_attach_pdf']       = 'Załącz wycenę w PDF';
$lang['estimate_send_to_client_preview_template'] = 'Podgląd szablonu e-mail';

$lang['estimate_dt_table_heading_number']     = 'Wycena #';
$lang['estimate_dt_table_heading_date']       = 'Data';
$lang['estimate_dt_table_heading_client']     = 'Klient';
$lang['estimate_dt_table_heading_expirydate'] = 'Data ważności';
$lang['estimate_dt_table_heading_amount']     = 'Kwota';
$lang['estimate_dt_table_heading_status']     = 'Status';

$lang['estimate_email_link_text']    = 'Zobacz wycenę';
$lang['estimate_convert_to_invoice'] = 'Konwertuj na fakturę';
# Home
$lang['home_unfinished_tasks']       = 'Nieukończone zadania';

# Clients
$lang['client_estimates_tab'] = 'Wyceny';
$lang['client_payments_tab']  = 'Płatności';


# Estimate General
$lang['estimate_pdf_heading']            = 'WYCENA';
$lang['estimate_table_item_heading']     = 'Pozycja';
$lang['estimate_table_quantity_heading'] = 'Ilość';
$lang['estimate_table_rate_heading']     = 'Stawka';
$lang['estimate_table_tax_heading']      = 'Podatek';
$lang['estimate_table_amount_heading']   = 'Kwota';
$lang['estimate_subtotal']               = 'Razem';
$lang['estimate_adjustment']             = 'Dostosowanie';
$lang['estimate_discount']               = 'Rabat';
$lang['estimate_total']                  = 'Łącznie';
$lang['estimate_to']                     = 'Do';
$lang['estimate_data_date']              = 'Data sporządzenia wyceny';
$lang['estimate_data_expiry_date']       = 'Data ważności';
$lang['estimate_note']                   = 'Uwagi:';
$lang['estimate_status_draft']           = 'Szkic';
$lang['estimate_status_sent']            = 'Wysłane';
$lang['estimate_status_declined']        = 'Odrzucone';
$lang['estimate_status_accepted']        = 'Zaakceptowane';
$lang['estimate_status_expired']         = 'Wygasła';
$lang['estimate_note']                   = 'Uwagi:';

# Quick create
$lang['qa_create_estimate'] = 'Utwórz wycenę';
$lang['qa_create_lead']     = 'Utwórz pozyskanie';


## Clients
$lang['clients_estimate_dt_number']             = 'Wycena #';
$lang['clients_estimate_dt_date']               = 'Data';
$lang['clients_estimate_dt_duedate']            = 'Data ważności';
$lang['clients_estimate_dt_amount']             = 'Kwota';
$lang['clients_estimate_dt_status']             = 'Status';
$lang['clients_nav_estimates']                  = 'Wyceny';
$lang['clients_decline_estimate']               = 'Odrzuć';
$lang['clients_accept_estimate']                = 'Akcpetuj';
$lang['clients_my_estimates']                   = 'Wyceny';
$lang['clients_estimate_invoiced_successfuly']  = 'Wycena została zaakceptowana. Tutaj znajduje się faktura do tej wyceny';
$lang['clients_estimate_accepted_not_invoiced'] = 'Dziękujemy za akceptację wyceny';
$lang['clients_estimate_declined']              = 'Wycena odrzucona. Możesz ją zaakceptować w każdym momencie przed upływem jej ważności';
$lang['clients_estimate_failed_action']         = 'Failed to take action on this estimate';
$lang['client_add_edit_profile']                = 'Profil użytkownika';

# Version 1.0.3
# Admin
# Home
$lang['home_invoice_not_sent']        = 'Faktura nie wysłana';
$lang['home_expired_estimates']       = 'Wygasłe wyceny';
$lang['home_invoice_overdue']         = 'Przeterminowane faktury';
$lang['home_payments_received_today'] = 'Płatności otrzymane dziś';

# Reports

# Custom Fields
$lang['custom_field']                          = 'Pole niestandardowe';
$lang['custom_field_lowercase']                = 'pole niestandardowe';
$lang['custom_fields']                         = 'Pola niestandardowe';
$lang['custom_fields_lowercase']               = 'pola niestandardowe';
$lang['new_custom_field']                      = 'Nowe pole niestandardowe';
$lang['custom_field_name']                     = 'Nazwa pola';
$lang['custom_field_add_edit_type']            = 'Typ';
$lang['custom_field_add_edit_belongs_top']     = 'Pole należy do';
$lang['custom_field_add_edit_options']         = 'Opcje';
$lang['custom_field_add_edit_options_tooltip'] = 'Only use for Select types. Populate the field by separating the options by coma. Ex. apple,orange,banana';
$lang['custom_field_add_edit_order']           = 'Zamówienie';

$lang['custom_field_dt_field_to']       = 'Należy do';
$lang['custom_field_dt_field_name']     = 'Nazwa';
$lang['custom_field_dt_field_type']     = 'Typ';
$lang['custom_field_add_edit_active']   = 'Aktywne';
$lang['custom_field_add_edit_disabled'] = 'Wyłaczone';

# Ticket replies
$lang['ticket_reply']           = 'Odpowiedź na zgłoszenie';
$lang['ticket_reply_lowercase'] = 'odpowiedź na zgłoszenie';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Pola niestandardowe';

# Contracts
$lang['contract_types']          = 'Rodzaje umów';
$lang['contract_type']           = 'Rodzaj umowy';
$lang['new_contract_type']       = 'Nowy rodzaj umowy';
$lang['contract_type_lowercase'] = 'umowa';
$lang['contract_type_name']      = 'Nazwa';

$lang['contract_types_list_name'] = 'Typ umowy';

# Customizer Menu
$lang['acs_contracts']      = 'Umowy';
$lang['acs_contract_types'] = 'Rodzaje umów';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description']     = 'Długi opis';
# Customers
$lang['client_delete_invoices_warning']    = 'This client have invoices or estimates on the account. You cant delete this client. Change all invoices to another client in a future then delete.';
$lang['clients_list_phone']                = 'Telefon';
$lang['client_expenses_tab']               = 'Wydatki';
$lang['customers_summary']                 = 'Podsumowanie kientów ';
$lang['customers_summary_active']          = 'Aktywne kontakty';
$lang['customers_summary_inactive']        = 'Nieaktywne kontakty';
$lang['customers_summary_logged_in_today'] = 'Contacts Logged In Today';

# Authentication
$lang['admin_auth_forgot_password_email']             = 'Adres e-mail';
$lang['admin_auth_forgot_password_heading']           = 'Zapomniałem hasła';
$lang['admin_auth_login_heading']                     = 'Zaloguj się';
$lang['admin_auth_login_email']                       = 'Adres e-mail';
$lang['admin_auth_login_password']                    = 'Hasło';
$lang['admin_auth_login_remember_me']                 = 'Zapamiętaj mnie';
$lang['admin_auth_login_button']                      = 'Zaloguj się';
$lang['admin_auth_login_fp']                          = 'Zapomniałeś hasła?';
$lang['admin_auth_reset_password_heading']            = 'Zresetuj hasło';
$lang['admin_auth_reset_password']                    = 'Hasło';
$lang['admin_auth_reset_password_repeat']             = 'Powtórz hasło';
$lang['admin_auth_invalid_email_or_password']         = 'Błedny e-mail lub hasło';
$lang['admin_auth_inactive_account']                  = 'Konto nieaktywne';
# Calender
$lang['calendar_estimate']                            = 'Szacowane';
$lang['calendar_invoice']                             = 'Faktura';
$lang['calendar_contract']                            = 'Umowa';
$lang['calendar_customer_reminder']                     = 'Client Reminder';
$lang['calendar_event']                               = 'Wydarzenie';
$lang['calendar_task']                                = 'Zadanie';
# Leads
$lang['lead_edit_delete_tooltip']                     = 'Delete Lead';
$lang['lead_attachments']                             = 'Załaczniki';
# Admin Customizer Sidebar
$lang['acs_finance']                                  = 'Finanse';
# Settings
$lang['new_company_field_info']                       = 'This field will be shown on invoices/estimates on the company side (left). You are not allowed to add any characters(dots,dashes,signs etc.) in the NAME field.';
$lang['new_company_field_name']                       = 'Nazwa pola';
$lang['new_company_field_value']                      = 'Wartość pola';
$lang['new_company_field']                            = 'Dodaj nowe pole firmy';
$lang['settings_number_padding_invoice_and_estimate'] = 'Invoice/Estimate Number Padding Zero\'s. <br /> <small>Ex. If this value is 3 the number will be formated: 005 or 025</small>';
$lang['settings_show_sale_agent_on_invoices']         = 'Pokaż przedstawiciela handlowego na fakturze';
$lang['settings_show_sale_agent_on_estimates']        = 'Pokaż przedstawiciela handlowego na wycenie';
$lang['settings_predefined_predefined_term']          = 'Predefined Terms & Conditions';
$lang['settings_predefined_clientnote']               = 'Zdefiniowana notatka klienta';
$lang['settings_custom_pdf_logo_image_url']           = 'Własne logo firmowe na PDF (JPG - 210x60px)';
$lang['settings_custom_pdf_logo_image_url_tooltip']   = 'Probably you will have problems with PNG images with transparency that are handled in different way depending on the php-imagick or php-gd version used. Try to update php-imagick and disable php-gd
. If you leave this field blank the uploaded logo will be used.';

# General
$lang['sale_agent_string']               = 'Agent sprzedaży';
$lang['amount_display_in_base_currency'] = 'Amount is displayed in your base currency - Only use this report if you are using 1 currency for payments and expenses.';
# Leads
$lang['leads_summary']                                         = 'Podsumowanie pozyskiwania';

# Contracts
$lang['contract_value']                 = 'Wartość umowy';
$lang['contract_trash']                 = 'Kosz';
$lang['contracts_view_trash']           = 'Zobacz kosz';
$lang['contracts_view_all']             = 'Wszystkie';
$lang['contracts_view_exclude_trashed'] = 'Wylucz umowy w koszu';
$lang['contract_value_tooltip']         = 'Add contract value. The value will be shown in your base currency.';
$lang['contract_trash_tooltip']         = 'If you add contract to trash, wont be shown on client side, wont be included in chart and other stats and also by default wont be shown when you will list all contracts.';
$lang['contract_summary_active']              = 'Aktywne';
$lang['contract_renew_heading']               = 'Odnów umowę';
$lang['contract_summary_heading']             = 'Podsumowane umowy';
$lang['contract_summary_expired']             = 'Wygasła';
$lang['contract_summary_about_to_expire']     = 'About to Expire';
$lang['contract_summary_recently_added']      = 'Ostatnio dodana';
$lang['contract_summary_trash']               = 'Kosz';
$lang['contract_summary_by_type']             = 'Umowy według typu';
$lang['contract_summary_by_type_value']       = 'Wartość umów według typu';
$lang['contract_renewed_successfuly']         = 'Umowa została odnowiona';
$lang['contract_renewed_fail']                = 'Problem while renewing the contract. Contact administrator';
$lang['no_contract_renewals_found']           = 'Renewals for this contracts is not found';
$lang['no_contract_renewals_history_heading'] = 'Historia odnowienia umów';
$lang['contract_renewed_by']                  = '%s odnowił tę umowę';
$lang['contract_renewal_deleted']             = 'Renewal successfuly deleted';
$lang['contract_renewal_delete_fail']         = 'Failed to delete contract renewal. Contact administrator';

$lang['contract_renewal_new_value'] = 'Nowa wartość umowy: %s';
$lang['contract_renewal_old_value'] = 'Stara wartość umowy: %s';

$lang['contract_renewal_new_start_date'] = 'Nowa data rozpoczęcia umowy: %s';
$lang['contract_renewal_old_start_date'] = 'Old Contract Start Date was: %s';

$lang['contract_renewal_new_end_date'] = 'New End Date: %s';
$lang['contract_renewal_old_end_date'] = 'Old Contract End Date was: %s';
$lang['contract_attachment']           = 'Załacznik';
$lang['contract_attachment_lowercase'] = 'załącznik';

# Admin Aside Menu
$lang['als_goals_tracking']     = 'Śledzenie celów';
$lang['als_expenses']           = 'Wydatki';
$lang['als_reports_expenses']   = 'Wydatki';
$lang['als_expenses_vs_income'] = 'Koszty do przychodów';

# Invoices
$lang['invoice_attach_file']           = 'Załącz plik';
$lang['invoice_mark_as_sent']          = 'Zaznacz jako wysłane';
$lang['invoice_marked_as_sent']        = 'Faktura została oznaczona jako wysłana';
$lang['invoice_marked_as_sent_failed'] = 'Nie udało się oznaczyć faktury jako wysłana';

# Quick Actions
$lang['qa_new_goal']    = 'Utwórz nowy cel';
$lang['qa_new_expense'] = 'Dodaj wydatek';

# Goals Tracking
$lang['goals']                                         = 'Cele';
$lang['goal']                                          = 'Cel';
$lang['goals_tracking']                                = 'Śledzenie celów';
$lang['new_goal']                                      = 'Nowy cel';
$lang['goal_lowercase']                                = 'cel';
$lang['goal_start_date']                               = 'Data rozpoczęcia';
$lang['goal_end_date']                                 = 'Data zakończenia';
$lang['goal_subject']                                  = 'Temat';
$lang['goal_description']                              = 'Opis';
$lang['goal_type']                                     = 'Typ celu';
$lang['goal_achievement']                              = 'Osiągnięcie';
$lang['goal_contract_type']                            = 'Typ umowy';
$lang['goal_notify_when_fail']                         = 'Powiadom personel gdy nie uda się osiągnąć celu';
$lang['goal_notify_when_achieve']                      = 'Powiadom personel gdy uda się osiągnąć cel';
$lang['goal_progress']                                 = 'Postęp';
$lang['goal_total']                                    = 'Razem: %s';
$lang['goal_result_heading']                           = 'Postęp w realizacji celu';
$lang['goal_income_shown_in_base_currency']            = 'Łączny przychód w Twojej domyślnej walucie';
$lang['goal_notify_when_end_date_arrives']             = 'The staff members will be notified when the end date arrives (Requires CRON).';
$lang['goal_staff_members_notified_about_achievement'] = 'The staff members are notified about this goal achievement';
$lang['goal_staff_members_notified_about_failure']     = 'Personel został powiadomiony o błędzie';
$lang['goal_notify_staff_manualy']                     = 'Powiadom personel ręcznie';
$lang['goal_notify_staff_notified_manualy_success']    = 'Personal został powiadomiony o wyniku realizacji celu';
$lang['goal_notify_staff_notified_manualy_fail']       = 'Failed to notify staff members about this goal result';

$lang['goal_achieved'] = 'Osiągnięty';
$lang['goal_failed']   = 'Failed';
$lang['goal_close']    = 'Bardzo blisko';

$lang['goal_type_total_income']                                         = 'Achieve Total Income';
$lang['goal_type_convert_leads']                                        = 'Convert X Leads';
$lang['goal_type_increase_customers_without_leads_conversions']         = 'Increase Customer Number';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = 'Leads Conversion is Excluded';

$lang['goal_type_increase_customers_with_leads_conversions']         = 'Increase Customer Number';
$lang['goal_type_increase_customers_with_leads_conversions_subtext'] = 'Leads Conversions is Included';
$lang['goal_type_make_contracts_by_type_calc_database']              = 'Make Contracts By Type';
$lang['goal_type_make_contracts_by_type_calc_database_subtext']      = 'Is calculated from the date added to database';
$lang['goal_type_make_contracts_by_type_calc_date']                  = 'Make Contracts By Type';
$lang['goal_type_make_contracts_by_type_calc_date_subtext']          = 'Is calculated from the contract start date';
$lang['goal_type_total_estimates_converted']                         = 'X Estimates Conversion ';
$lang['goal_type_total_estimates_converted_subtext']                 = 'Will be taken only estimates that will be converted to invoices';
$lang['goal_type_income_subtext']                                    = 'Income will be calculated in your base currency (not converted)';
# Payments
$lang['payment_transaction_id']                                      = 'Identyfikator transakcji';
# Settings Menu
$lang['acs_expenses']                                                = 'Wydatki';
$lang['acs_expense_categories']                                      = 'Kategorie wydatków';
# Expeneses
$lang['expense_category']                                            = 'Kategoria wydatku';
$lang['expense_category_lowercase']                                  = 'kategoria wydatków';
$lang['new_expense']                                                 = 'Dodaj wydatek';
$lang['expense_add_edit_name']                                       = 'Nazwa kategorii';
$lang['expense_add_edit_description']                                = 'Opis kategorii';
$lang['expense_categories']                                          = 'Kategorie wydatków';
$lang['new_expense_category']                                        = 'Nowa kategoria';
$lang['dt_expense_description']                                      = 'Opis';
$lang['expense']                                                     = 'Wydatek';
$lang['expenses']                                                    = 'Wydatki';
$lang['expense_lowercase']                                           = 'wydatek';
$lang['expense_add_edit_tax']                                        = 'Podatek';
$lang['expense_add_edit_customer']                                   = 'Klient';
$lang['expense_add_edit_currency']                                   = 'Waluta';
$lang['expense_add_edit_note']                                       = 'Uwaga:';
$lang['expense_add_edit_date']                                       = 'Data wydatku';
$lang['expense_add_edit_amount']                                     = 'Kwota';
$lang['expense_add_edit_billable']                                   = 'Billable';
$lang['expense_add_edit_attach_receipt']                             = 'Załacz potwierdzenie';
$lang['expense_add_edit_reference_no']                               = 'Odniesienie #';
$lang['expense_receipt']                                             = 'Potwierdzenie kosztów';
$lang['expense_receipt_lowercase']                                   = 'potwierdzenie kosztów';
$lang['expense_dt_table_heading_category']                           = 'Kategoria';
$lang['expense_dt_table_heading_amount']                             = 'Kwota';
$lang['expense_dt_table_heading_date']                               = 'Data';
$lang['expense_dt_table_heading_reference_no']                       = 'Odniesienie #';
$lang['expense_dt_table_heading_customer']                           = 'Klient';
$lang['expense_dt_table_heading_payment_mode']                       = 'Rodzaj płatności';
$lang['expense_converted_to_invoice']                                = 'Expense successfuly converted to invoice';
$lang['expense_converted_to_invoice_fail']                           = 'Failed to convert this expense to invoice check error log.';
$lang['expense_copy_success']                                        = 'The expense is copied successfuly.';
$lang['expense_copy_fail']                                           = 'Failed to copy expense. Please check the required fields and try again';
$lang['expenses_list_all']                                           = 'Wszystkie';
$lang['expenses_list_billable']                                      = 'Billable';
$lang['expenses_list_non_billable']                                  = 'Non Billable';
$lang['expenses_list_invoiced']                                      = 'Invoiced';
$lang['expenses_list_unbilled']                                      = 'Unbilled';
$lang['expenses_list_recurring']                                     = 'Cykliczne';
$lang['expense_invoice_delete_not_allowed']                          = 'You cant delete this expense. The expense is already invoiced.';
$lang['expense_convert_to_invoice']                                  = 'Convert To Invoice';
$lang['expense_edit']                                                = 'Edytuj wydatek';
$lang['expense_delete']                                              = 'Usuń';
$lang['expense_copy']                                                = 'Kopiuj';
$lang['expense_invoice_not_created']                                 = 'Invoice Not Created';
$lang['expense_billed']                                              = 'Zapowiadane';
$lang['expense_not_billed']                                          = 'Invoice Not Paid';
$lang['expense_customer']                                            = 'Klient';
$lang['expense_note']                                                = 'Uwagi:';
$lang['expense_date']                                                = 'Data:';
$lang['expense_ref_noe']                                             = 'Ref #:';
$lang['expense_tax']                                                 = 'Podatek:';
$lang['expense_amount']                                              = 'Kwota:';
$lang['expense_recurring_indicator']                                 = 'Cykliczne';
$lang['expense_already_invoiced']                                    = 'This expense is already invoiced';
$lang['expense_recurring_auto_create_invoice']                       = 'Automatycznie utwórz fakturę';
$lang['expense_recurring_send_custom_on_renew']                      = 'Send the invoice to customer email when expense repeated';
$lang['expense_recurring_autocreate_invoice_tooltip']                = 'If this option is checked the invoice for the customer will be auto created when the expense will be renewed.';
$lang['report_expenses_full']                                        = 'Pełny raport';
$lang['expenses_yearly_by_categories']                               = 'Rozchody roczne według kategorii';
$lang['total_expenses_for']                                          = 'Wszystkie wydatki dla'; // year
$lang['expenses_report_for']                                         = 'Wydatki dla'; // year
$lang['expense_report_info']                                         = 'Billable expenses are not calculated in the report.';
# Custom fields
$lang['custom_field_required']                                       = 'Wymagane';
$lang['custom_field_show_on_pdf']                                    = 'Pokaż na PDF';
$lang['custom_field_leads']                                          = 'Pozyskania';
$lang['custom_field_customers']                                      = 'Klienci';
$lang['custom_field_staff']                                          = 'Personel';
$lang['custom_field_contracts']                                      = 'Umowy';
$lang['custom_field_tasks']                                          = 'Zadania';
$lang['custom_field_expenses']                                       = 'Rozchody';
$lang['custom_field_invoice']                                        = 'Faktura';
$lang['custom_field_estimate']                                       = 'Szacowane';
# Tickets
$lang['ticket_single_private_staff_notes']                           = 'Private Staff Notes';


# Business News
$lang['business_news'] = 'Wiadomości ze świata';

# Navigation
$lang['nav_todo_items']               = 'Rzeczy do wykonania';
# Clients
# Contracts
$lang['clients_contracts_type']       = 'Typ umowy';
# Version 1.0.5
# General
$lang['no_tax']                             = 'Brak podatku';
$lang['numbers_not_formated_while_editing'] = 'The rate in the input field is not formated while edit/add item and should remain not formated dont try to format it manually in here.';
# Contracts
$lang['contracts_view_expired']             = 'Wygasła';
$lang['contracts_view_without_dateend']     = 'Umowy bez daty zakończenia';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Umowy';
# Invoices General
$lang['invoice_estimate_general_options']        = 'Opcje ogólne';
$lang['invoice_table_item_description']          = 'Opis';
$lang['invoice_recurring_indicator']             = 'Cykliczne';

# Estimates
$lang['estimate_convert_to_invoice_successfuly'] = 'Estimate converted to invoice successfuly';
$lang['estimate_table_item_description']         = 'Opis';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'You cant delete the base currency. You need to assign new base currency the delete this.';
$lang['invoice_copy']              = 'Kopiuj fakturę';
$lang['invoice_copy_success']      = 'Invoice copied successfuly';
$lang['invoice_copy_fail']         = 'Nie udało się skopiować faktury';
$lang['invoice_due_after_help']    = 'Set zero to avoid calculation';

$lang['show_shipping_on_invoice'] = 'Pokaż dane do wysyłki na fakturze';

# Estimates
$lang['show_shipping_on_estimate']         = 'Pokaż dane do wysyłki na wycenie';
$lang['is_invoiced_estimate_delete_error'] = 'Ta wycena została już zafakturowana. Możesz usunać tę wycenę';

# Customers & Invoices / Estimates
$lang['ship_to']                  = 'Adres dostawy';
$lang['customer_profile_details'] = 'Dane klienta';
$lang['billing_shipping']         = 'Rozliczenia i wysyłka';
$lang['billing_address']          = 'Adres firmy';
$lang['shipping_address']         = 'Adres dostawy';

$lang['billing_street']  = 'Ulica';
$lang['billing_city']    = 'Miasto';
$lang['billing_state']   = 'Województwo';
$lang['billing_zip']     = 'Kod pocztowy';
$lang['billing_country'] = 'Kraj';

$lang['shipping_street']                    = 'Ulica';
$lang['shipping_city']                      = 'Miasto';
$lang['shipping_state']                     = 'Województwo';
$lang['shipping_zip']                       = 'Kod pocztowy';
$lang['shipping_country']                   = 'Kraj';
$lang['get_shipping_from_customer_profile'] = 'Pobierz dane wysyłki z profilu klienta';

# Customer
$lang['customer_file_from']                                    = 'Pokazuję od %s';
$lang['customer_default_currency']                             = 'Domyślna waluta';
$lang['customer_no_attachments_found']                         = 'Brak załączników';
$lang['customer_update_address_info_on_invoices']              = 'Update the shipping/billing info on all previous invoices/estimates';
$lang['customer_update_address_info_on_invoices_help']         = 'If you check this field shipping and billing info will be updated to all invoices and estimates. Note: Invoices with status paid wont be affected.';
$lang['setup_google_api_key_customer_map']                     = 'Setup google api key in order to view to customer map';
$lang['customer_attachments_file']                             = 'Plik';
$lang['client_send_set_password_email']                        = 'Send SET password email';
$lang['customer_billing_same_as_profile']                      = 'Takie samo jak dane klienta';
$lang['customer_billing_copy']                                 = 'Kopiuj adres rozliczeniowy';
$lang['customer_map']                                          = 'Mapa';
$lang['set_password_email_sent_to_client']                     = 'Email to set password is successfuly sent to the client';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Profile updated and email to set password is successfuly sent to the client';
$lang['customer_attachments']                                  = 'Pliki';
$lang['customer_longitude']                                    = 'Długość geograficzna (Google Maps)';
$lang['customer_latitude']                                     = 'Szerokość geograficzna (Google Maps)';

# Authentication
$lang['admin_auth_set_password']          = 'Hasło';
$lang['admin_auth_set_password_repeat']   = 'Powtórz hasło';
$lang['admin_auth_set_password_heading']  = 'Ustaw hasło';
$lang['password_set_email_subject']       = 'Set new password on %s';
# General
$lang['apply']                            = 'Zatwierdź';
$lang['department_calendar_id']           = 'Google Calendar ID';
$lang['kan_ban_string']                   = 'Kan Ban';
$lang['localization_default_language']    = 'Język domyślny';
$lang['system_default_string']            = 'Domyślne';
$lang['advanced_options']                 = 'Zaawansowane opcje';
# Expenses
$lang['expense_list_invoice']             = 'Invoiced';
$lang['expense_list_billed']              = 'Zapowiadane';
$lang['expense_list_unbilled']            = 'Unbilled';
# Leads
$lang['lead_merge_custom_field']          = 'Merge as custom field';
$lang['lead_merge_custom_field_existing'] = 'Merge with database field';
$lang['lead_dont_merge_custom_field']     = 'Nie złączaj';
$lang['no_lead_notes_found']              = 'No lead notes found';
$lang['leads_view_list']                  = 'Lista';
$lang['lost_leads']                       = 'Utracone szanse';
$lang['junk_leads']                       = 'Śmieciowe szanse';
$lang['lead_mark_as_lost']                = 'Oznacz jako utracona szansa';
$lang['lead_unmark_as_lost']              = 'Odznacz jako utracona szansa';
$lang['lead_marked_as_lost']              = 'Lead marked as lost successfuly';
$lang['lead_unmarked_as_lost']            = 'Lead unmarked as lost successfuly';
$lang['leads_status_color']               = 'Kolor';

$lang['lead_mark_as_junk']     = 'Oznacz jako śmieci';
$lang['lead_unmark_as_junk']   = 'Unmark Lead as junk';
$lang['lead_marked_as_junk']   = 'Lead marked as junk successfuly';
$lang['lead_unmarked_as_junk'] = 'Lead unmarked as junk successfuly';

$lang['lead_not_found']                                                      = 'Lead Not Found';
$lang['lead_lost']                                                           = 'Utracne';
$lang['lead_junk']                                                           = 'Śmieci';
$lang['leads_not_assigned']                                                  = 'Nie przypisane';
# Contacts
$lang['contract_not_visible_to_client']                                      = 'Ukryj przed klientem';
$lang['contract_edit_overview']                                              = 'Podsumowanie umowy';
$lang['contract_attachments']                                                = 'Załaczniki';
# Tasks
$lang['task_view_make_public']                                               = 'Make public';
$lang['task_is_private']                                                     = 'Prywatne zadanie';
$lang['task_is_private_help']                                                = 'This task is only visible to assignees,followers,creator and administrators';
$lang['task_finished']                                                       = 'Zakończone';
$lang['task_single_related']                                                 = 'Powiązane';
$lang['task_unmark_as_complete']                                             = 'Unmark as complete';
$lang['task_unmarked_as_complete']                                           = 'Task unmarked as complete';
$lang['task_relation']                                                       = 'Powiązane';
$lang['task_public']                                                         = 'Publiczne';
$lang['task_public_help']                                                    = 'If you set this task to public will be visible for all staff members. Otherwise will be only visible to members who are assignees,followers,creator or administrators';
# Settings
$lang['settings_general_favicon']                                            = 'Favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Output client PDF documents from admin area in client language';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'If this options is set to yes and ex. the system default language is english and client have setup language french the pdf documents will be outputed in the client language';
$lang['settings_cron_surveys']                                               = 'Ankiety';
$lang['settings_default_tax']                                                = 'Domyślny podatek';
$lang['setup_calendar_by_departments']                                       = 'Skonfiguruj kalendarze według działu';
$lang['settings_calendar']                                                   = 'Kalendarz';
$lang['settings_sales_invoice_due_after']                                    = 'Faktura przeterminowana po (dniach)';
$lang['settings_google_api']                                                 = 'Google API Key';
$lang['settings_gcal_main_calendar_id']                                      = 'Google Calendar ID';
$lang['settings_gcal_main_calendar_id_help']                                 = 'This is the main company calendar. All events from this calendar will be shown. If you want to specify a calendar based on departments you can add in the department Google Calendar ID.';

$lang['show_on_calendar']                  = 'Pokaż w kalendarzu';
$lang['show_invoices_on_calendar']         = 'Faktury';
$lang['show_estimates_on_calendar']        = 'Wyceny';
$lang['show_contracts_on_calendar']        = 'Umowy';
$lang['show_tasks_on_calendar']            = 'Zadania';
$lang['show_customer_reminders_on_calendar'] = 'Przypomnienia klienta';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Kopiuj niestandardowe pola do profilu klienta';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'If any of the following custom fields do not exists for customer will be auto created with the same name otherwise only the value will be copied from the lead profile.';
$lang['lead_profile']                                                = 'Profil użytkownika';
$lang['lead_is_client']                                              = 'Klient';
$lang['leads_kan_ban_notes_title']                                   = 'Notatki';
$lang['leads_email_integration_folder_no_encryption']                = 'Brak szyfrowania';
$lang['leads_email_integration']                                     = 'Integracja z e-mail';
$lang['leads_email_active']                                          = 'Aktywne';
$lang['leads_email_integration_imap']                                = 'Serwer IMAP';
$lang['leads_email_integration_email']                               = 'Adres e-mail (login)';
$lang['leads_email_integration_password']                            = 'Hasło';
$lang['leads_email_integration_port']                                = 'Port';
$lang['leads_email_integration_default_source']                      = 'Domyślne źródło';
$lang['leads_email_integration_check_every']                         = 'Sprawdzaj co (minut)';
$lang['leads_email_integration_default_assigned']                    = 'Responsibe for new lead';
$lang['leads_email_encryption']                                      = 'Szyfrowanie';
$lang['leads_email_integration_updated']                             = 'Integracja z e-mail została zaaktualizowana';
$lang['leads_email_integration_default_status']                      = 'Domyślny status';
$lang['leads_email_integration_folder']                              = 'Katalog';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Notify when lead imported';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Sprawdzaj tylko nowe wiadomości e-mail';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'The script will auto set the email to opened after check. This is used to prevent checking all the emails again and again. Its not recomended to uncheck this option if you have a lot emails and you have setup a lot forwarding to the email you setup for leads';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Notify if lead send email multiple times';
$lang['leads_email_integration_test_connection']                     = 'Testuj połączenie IMAP';
$lang['lead_email_connection_ok']                                    = 'Połączenie IMAP jest ok';
$lang['lead_email_connection_not_ok']                                = 'Połączenie z IMAP nie udało się';
$lang['lead_email_activity']                                         = 'Aktywność e-mail';
$lang['leads_email_integration_notify_roles']                        = 'Roles to Notify';
$lang['leads_email_integration_notify_staff']                        = 'Staff Members to Notify';
$lang['lead_public']                                                 = 'Publiczne';
# Knowledge Base

$lang['kb_group_color']                = 'Kolor';
$lang['kb_group_order']                = 'Zamówienie';
# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Masowy eksport PDF';
$lang['bulk_export_pdf_payments']      = 'Płatności';
$lang['bulk_export_pdf_estimates']     = 'Wyceny';
$lang['bulk_export_pdf_invoices']      = 'Faktury';
$lang['bulk_pdf_export_button']        = 'Eksport';
$lang['bulk_pdf_export_select_type']   = 'Wybierz rodzaj';
$lang['no_data_found_bulk_pdf_export'] = 'No data found for export';
$lang['bulk_export_status_all']        = 'Wszystkie';
$lang['bulk_export_status']            = 'Status';
$lang['bulk_export_zip_payment_modes'] = 'Made payments by';
$lang['bulk_export_include_tag']       = 'Załącz tag';
$lang['bulk_export_include_tag_help']  = 'Ex. Original or Copy. The tag will be outputed in the PDF. Recomended to use only 1 tag';
# Predefined replies
$lang['no_predefined_replies_found']   = 'No predefined replies found';
## Clients area
$lang['clients_contract_attachments']  = 'Załaczniki';
# Backup
$lang['backup_type_full']              = 'Pełna kopia zapasowa';
$lang['backup_type_db']                = 'Kopia zapasowa bazy danych';

$lang['auto_backup_options_updated']     = 'Auto backup options updated';
$lang['auto_backup_every']               = 'Utwórz kopię zapasową co X dni';
$lang['auto_backup_enabled']             = 'Właczone (wymaga terminarza zadań)';
$lang['auto_backup']                     = 'Automatyczna kopia zapasowa';
$lang['backup_delete']                   = 'Kopia zapasowa została usunięta';
$lang['create_backup']                   = 'Utwórz kopię zapasową';
$lang['backup_success']                  = 'Kopia zapasowa została utworzona';
$lang['utility_backup']                  = 'Kopia zapasowa bazy danych';
$lang['utility_create_new_backup_db']    = 'Utwórz kopię zapasową bazy danych';
$lang['utility_backup_table_backupname'] = 'Kopia zapasowa';
$lang['utility_backup_table_backupsize'] = 'Rozmiar kopii zapasowej';
$lang['utility_backup_table_backupdate'] = 'Data';
$lang['utility_db_backup_note']          = 'Note: Due to the limited execution time and memory available to PHP, backing up very large databases may not be possible. If your database is very large you might need to backup directly from your SQL server via the command line, or have your server admin do it for you if you do not have root privileges.';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Oferty';
$lang['clients_nav_support']   = 'Pomoc';
# General
$lang['more']                  = 'Więcej';
$lang['add_item']              = 'Dodaj pozycję';
$lang['goto_admin_area']       = 'Idź do panelu administracyjnego';
$lang['click_here_to_edit']    = 'Kliknij tutaj aby edytować';
$lang['delete']                = 'Usuń %s';
$lang['welcome_top']           = 'Witaj %s';

# Customers
$lang['customer_permissions']         = 'Uprawnienia';
$lang['customer_permission_invoice']  = 'Faktury';
$lang['customer_permission_estimate'] = 'Szacowane';
$lang['customer_permission_proposal'] = 'Oferty';
$lang['customer_permission_contract'] = 'Umowy';
$lang['customer_permission_support']  = 'Pomoc';


#Tasks
$lang['task_related_to'] = 'Powiązane z';

# Send file
$lang['custom_file_fail_send']    = 'Nie udało się wysłać pliku';
$lang['custom_file_success_send'] = 'Plik został wysłany do %s';
$lang['send_file_subject']        = 'Temat wiadomości';
$lang['send_file_email']          = 'Adres e-mail';
$lang['send_file_message']        = 'Wiadomość';
$lang['send_file']                = 'Wyślij plik';
$lang['add_checklist_item']       = 'Checklist Item';
$lang['task_checklist_items']     = 'Pozycje listy kontrolnej';

# Import
$lang['default_pass_clients_import'] = 'Default password for all contacts';
$lang['simulate_import']             = 'Simulate Import';
$lang['import_upload_failed']        = 'Wgrywanie nie powiodło się';
$lang['import_total_imported']       = 'Łącznie zaimportowano : %s';
$lang['import_leads']                = 'Importuj pozyskania';
$lang['import_customers']            = 'Importuj klientów';
$lang['choose_csv_file']             = 'Wybierz plik CSV';
$lang['import']                      = 'Importuj';
$lang['lead_import_status']          = 'Status';
$lang['lead_import_source']          = 'Źródła';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Oferty';

# Invoices
$lang['delete_invoice'] = 'Usuń';

# Calendar
$lang['calendar_lead_reminder'] = 'Lead Reminder';

$lang['items']      = 'Pozycje';
$lang['support']    = 'Pomoc';
$lang['new_ticket'] = 'Otwórz nowe zgłoszenie';

# Reminders
$lang['client_edit_set_reminder_title'] = 'Add customer reminder';
$lang['lead_set_reminder_title']        = 'Add lead reminder';
$lang['set_reminder_tooltip']           = 'Ta opcja pozwala Ci zapamiętać wszystkie ważne rzeczy dotyczące Twoich klientów.';
$lang['client_reminders_tab']           = 'Przypomnienia';
$lang['leads_reminders_tab']            = 'Przypomnienia';

# Tickets
$lang['delete_ticket_reply']  = 'Usuń odpwiedź';
$lang['ticket_priority_edit'] = 'Edytuj priorytet';
$lang['ticket_priority_add']  = 'Dodaj priorytet';
$lang['ticket_status_edit']   = 'Edytuj status zgłoszenia';
$lang['ticket_service_edit']  = 'Edit Ticket Service';
$lang['edit_department']      = 'Edytuj dział';

# Expenses
$lang['edit_expense_category']                                    = 'Edytuj kategorię wydatków';
# Settings
$lang['customer_default_country']                                 = 'Domyślny kraj';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Wymagaj aby klient był zalogowany by zobaczyć wycenę';
$lang['set_reminder']                                             = 'Ustaw przypomnienie';
$lang['set_reminder_date']                                        = 'Data przypomnienia';
$lang['reminder_description']                                     = 'Ustaw opis';
$lang['reminder_notify_me_by_email']                              = 'Wyślij również e-mail dla tego przypomnienia';
$lang['reminder_added_successfuly']                               = 'Przypomnienie zostało dodane. Zostaniesz powiadomiony zgodnie z ustawieniem przypomnienia.';
$lang['reminder_description']                                     = 'Ustaw opis';
$lang['reminder_date']                                            = 'Data';
$lang['reminder_staff']                                           = 'Przypomnij';
$lang['reminder_is_notified']                                     = 'Is notified?';
$lang['reminder_is_notified_boolean_no']                          = 'Nie';
$lang['reminder_is_notified_boolean_yes']                         = 'Tak';
$lang['reminder_set_to']                                          = 'Ustaw przypomnienie na';
$lang['reminder_deleted']                                         = 'Przypomnienie zostało usunięte';
$lang['reminder_failed_to_delete']                                = 'Nie udało się usunąć przypomnienia';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Show invoice/estimate status on PDF';
$lang['email_piping_default_priority']                            = 'Default priority on piped ticket';
$lang['show_lead_reminders_on_calendar']                          = 'Lead Reminders';
$lang['tickets_piping']                                           = 'Importowanie e-maili';
$lang['email_piping_only_replies']                                = 'Only Replies Allowed by Email';
$lang['email_piping_only_registered']                             = 'Pipe Only on Registed Users';
$lang['email_piping_enabled']                                     = 'Włączone';

# Estimates
$lang['view_estimate_as_client']         = 'View estimate as customer';
$lang['estimate_mark_as']                = 'Zaznacz jako %s';
$lang['estimate_status_changed_success'] = 'Estimate status changed';
$lang['estimate_status_changed_fail']    = 'Failed to change estimate status';
$lang['estimate_email_link_text']        = 'Zobacz wycenę';

# Proposals
$lang['proposal_to']                            = 'Firma / Nazwa';
$lang['proposal_date']                          = 'Data';
$lang['proposal_address']                       = 'Adres';
$lang['proposal_phone']                         = 'Telefon';
$lang['proposal_email']                         = 'E-mail';
$lang['proposal_date_created']                  = 'Data utworzenia';
$lang['proposal_open_till']                     = 'Open Till';
$lang['proposal_status_open']                   = 'Otwarte';
$lang['proposal_status_accepted']               = 'Zaakceptowane';
$lang['proposal_status_declined']               = 'Odrzucone';
$lang['proposal_status_sent']                   = 'Wysłane';
$lang['proposal_expired']                       = 'Wygasła';
$lang['proposal_subject']                       = 'Temat';
$lang['proposal_total']                         = 'Łącznie';
$lang['proposal_status']                        = 'Status';
$lang['proposals_list_all']                     = 'Wszystkie';
$lang['proposals_leads_related']                = 'Leads Related';
$lang['proposals_customers_related']            = 'Powiązani klienci';
$lang['proposal_related']                       = 'Powiązane';
$lang['proposal_for_lead']                      = 'Pozyskanie';
$lang['proposal_for_customer']                  = 'Klient';
$lang['proposal']                               = 'Oferta';
$lang['proposal_lowercase']                     = 'oferta';
$lang['proposals']                              = 'Oferty';
$lang['proposals_lowercase']                    = 'oferty';
$lang['new_proposal']                           = 'Nowa oferta';
$lang['proposal_currency']                      = 'Waluta';
$lang['proposal_allow_comments']                = 'Pozwól na komentarze';
$lang['proposal_allow_comments_help']           = 'If you check this options comments will be allowed when your clients view the proposal.';

$lang['proposal_edit']                          = 'Edytuj';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Wyślij na e-mail';
$lang['proposal_send_to_email_title']           = 'Wyślij oferę na e-mail';
$lang['proposal_attach_pdf']                    = 'Załacz plik PDF';
$lang['proposal_preview_template']              = 'Preview Template';
$lang['proposal_view']                          = 'Zobacz ofertę';
$lang['proposal_copy']                          = 'Kopiuj';
$lang['proposal_delete']                        = 'Usuń';
$lang['proposal_mark_as_open']                  = 'Zaznacz jako otwarte';
$lang['proposal_mark_as_declined']              = 'Zaznacz jako odrzucone';
$lang['proposal_mark_as_accepted']              = 'Zaznacz jako zaakceptowane';
$lang['proposal_mark_as_sent']                  = 'Zaznacz jako wysłane';
$lang['proposal_to']                            = 'Firma / Nazwa';
$lang['proposal_add_comment']                   = 'Dodaj komentarz';
$lang['proposal_sent_to_email_success']         = 'Oferta została wysłana na adres e-mail';
$lang['proposal_sent_to_email_fail']            = 'Nie udało się wysłać oferty na adres e-mail';
$lang['proposal_copy_fail']                     = 'Nie udało się skopiować oferty';
$lang['proposal_copy_success']                  = 'Oferta została skopiowana';
$lang['proposal_status_changed_success']        = 'Status oferty został zmieniony';
$lang['proposal_status_changed_fail']           = 'Failed to change proposal status';
$lang['proposal_assigned']                      = 'Przypisany do';
$lang['proposal_comments']                      = 'Komentarze';
$lang['proposal_convert']                       = 'Konwertuj';
$lang['proposal_convert_estimate']              = 'Szacowane';
$lang['proposal_convert_invoice']               = 'Faktura';
$lang['proposal_convert_to_estimate']           = 'Konwertuj na szacowane';
$lang['proposal_convert_to_invoice']            = 'Konwertuj na fakturę';
$lang['proposal_convert_to_lead_disabled_help'] = 'You need to convert the lead to customer in order to create %s';
$lang['proposal_convert_not_related_help']      = 'The proposal needs to be related to customer in order to convert to %s';
$lang['proposal_converted_to_estimate_success'] = 'Proposal converted to estimate successfuly';
$lang['proposal_converted_to_invoice_success']  = 'Proposal converted to invoice successfuly';
$lang['proposal_converted_to_estimate_fail']    = 'Failed to convert proposal to estimate';
$lang['proposal_converted_to_invoice_fail']     = 'Failed to convert proposal to invoice';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Wszystkich %s';
$lang['proposal_accept_info']  = 'Akcpetuj';
$lang['proposal_decline_info'] = 'Odrzuć';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
$lang['customer_reset_action']            = 'Resetuj';
$lang['customer_reset_password_heading']  = 'Resetuj swoje hasło';
$lang['customer_forgot_password_heading'] = 'Zapomiałem hasła';
$lang['customer_forgot_password']         = 'Zapomniałeś hasła?';
$lang['customer_reset_password']          = 'Hasło';
$lang['customer_reset_password_repeat']   = 'Powtórz hasło';
$lang['customer_forgot_password_email']   = 'Adres e-mail';
$lang['customer_forgot_password_submit']  = 'Wyślij';
$lang['customer_ticket_subject']          = 'Temat';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Oferty';

# Tasks
$lang['add_task_attachments']                 = 'Załacznik';
$lang['task_view_attachments']                = 'Załaczniki';
$lang['task_view_description']                = 'Opis';
$lang['task_table_is_finished_indicator']     = 'Tak';
$lang['task_table_is_not_finished_indicator'] = 'Nie';
$lang['tasks_dt_finished']                    = 'Zakończone';

# Customer Groups
$lang['customer_group_add_heading']  = 'Dodaj nową grupę klientów';
$lang['customer_group_edit_heading'] = 'Edytuj grupę klientów';
$lang['new_customer_group']          = 'Nowa grupa klientów';
$lang['customer_group_name']         = 'Nazwa';
$lang['customer_groups']             = 'Grupy';
$lang['customer_group']              = 'Grupa klienta';
$lang['customer_group_lowercase']    = 'grupa klienta';

$lang['customer_have_invoices_by']       = 'Contains invoices by status %s';
$lang['customer_have_estimates_by']      = 'Contains estimates by status %s';
$lang['customer_have_contracts_by_type'] = 'Posyada umowy według typu %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Pokaż na tabeli';
$lang['custom_field_show_on_client_portal']      = 'Pokaż w panelu klienta';
$lang['custom_field_show_on_client_portal_help'] = 'If this field is checked also will be shown in tables';
$lang['custom_field_visibility']                 = 'Widoczność';

# Utilities # Menu Builder
$lang['utilities_menu_translate_name_help'] = 'You can add here also translate strings. So if staff/system have language other then the default the menu item names will be outputed in the staff language. Otherwise if the string dont exists in the translate file will be taken the string you enter here.';
$lang['utilities_menu_icon']                = 'Ikona';
$lang['active_menu_items']                  = 'Aktywne pozycje menu';
$lang['inactive_menu_items']                = 'Nieaktywne pozycje menu';
$lang['utilities_menu_permission']          = 'Uprawnienia';
$lang['utilities_menu_url']                 = 'URL';
$lang['utilities_menu_name']                = 'Nazwa';
$lang['utilities_menu_save']                = 'Zapisz menu';

# Knowledge Base
$lang['view_articles_list']     = 'Zobacz artykuły';
$lang['view_articles_list_all'] = 'Wszystkie artykuły';
$lang['als_add_article']        = 'Dodaj artykuł';
$lang['als_all_articles']       = 'Wszystkie artykuły';
$lang['als_kb_groups']          = 'Grupy';

# Customizer Menu
$lang['menu_builder']            = 'Ustawienia menu';
$lang['main_menu']               = 'Główne menu';
$lang['setup_menu']              = 'Ustawienia menu';
$lang['utilities_menu_url_help'] = '%s is auto appended to the url';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'Filtry spamowe';
$lang['spam_filter']                  = 'Filtry spamowe';
$lang['new_spam_filter']              = 'Nowy filtry spamowy';
$lang['spam_filter_blocked_senders']  = 'Zablokowani nadawcy';
$lang['spam_filter_blocked_subjects'] = 'Blokowane tytuły';
$lang['spam_filter_blocked_phrases']  = 'Blokowane słowa';
$lang['spam_filter_content']          = 'Zawartość';
$lang['spamfilter_edit_heading']      = 'Edytuj filtry spamowe';
$lang['spamfilter_add_heading']       = 'Dodaj filtr spamowy';
$lang['spamfilter_type']              = 'Typ';
$lang['spamfilter_type_subject']      = 'Temat';
$lang['spamfilter_type_sender']       = 'Nadawca';
$lang['spamfilter_type_phrase']       = 'Fraza';

# Tickets
$lang['block_sender']               = 'Block Sender';
$lang['sender_blocked']             = 'Sender Blocked';
$lang['sender_blocked_successfuly'] = 'Sender Blocked Successfuly';
$lang['ticket_date_created']        = 'Data utworzenia';

#KB
$lang['edit_kb_group']             = 'Edytuj grupę';
# Leads
$lang['edit_source']               = 'Edytuj źródło';
$lang['edit_status']               = 'Edytuj status';
# Contacts
$lang['contract_type_edit']        = 'Edytuj typ umowy';
# Reports
$lang['report_by_customer_groups'] = 'Total Value By Customer Groups';
#Utilities
$lang['ticket_pipe_log']           = 'Ticket Pipe Log';
$lang['ticket_pipe_name']          = 'Nazwa nadawcy';
$lang['ticket_pipe_email_to']      = 'Do';
$lang['ticket_pipe_email']         = 'Adres e-mail nadawcy';
$lang['ticket_pipe_subject']       = 'Temat';
$lang['ticket_pipe_message']       = 'Wiadomość';
$lang['ticket_pipe_date']          = 'Data';
$lang['ticket_pipe_status']        = 'Status';

# Home
$lang['home_invoice_paid']          = 'Faktura zapłacona';
$lang['home_invoice_partialy_paid'] = 'Faktura częściowo zapłacona';
$lang['home_estimate_declined']     = 'Odrzucone wycena';
$lang['home_estimate_accepted']     = 'Estimate Accepted';
$lang['home_estimate_sent']         = 'Estimate Sent';
$lang['home_latest_activity']       = 'Ostatnia aktywność';
$lang['home_my_tasks']              = 'Moje zdania';
$lang['home_latest_activity']       = 'Ostatnia aktywność';
$lang['home_my_todo_items']         = 'Moje rzeczy do wykonania';
$lang['home_widget_view_all']       = 'Zobacz wszystkie';
$lang['home_stats_full_report']     = 'Pełny raport';

# Validation - Customer Portal

$lang['form_validation_required']    = 'Pole {field} jest wymagane.';
$lang['form_validation_valid_email'] = 'Pole {field} musi zawierać poprawny adres e-mail.';
$lang['form_validation_matches']     = 'The {field} field does not match the {param} field.';
$lang['form_validation_is_unique']   = 'The {field} field must contain a unique value.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event'] = 'Wydarzenie rozpoczyna się dzisiaj - %s ...';
$lang['not_event_public'] = 'Publiczne wydarzenie rozpoczyna się dzisiaj - %s ...';
$lang['not_contract_expiry_reminder'] = 'Contract expiry reminder - %s ...';
$lang['not_recurring_expense_cron_activity_heading'] = 'Recurring Expenses Cron Job Activity';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Recurring Invoices Cron Job Activity';
$lang['not_recurring_total_renewed'] = 'Total Renewed: %s';
$lang['not_recurring_expenses_action_taken_from'] = 'Action taken from recurring expense';
$lang['not_invoice_created'] = 'Faktura utworzona:';
$lang['not_invoice_renewed'] = 'Renewed Invoice:';
$lang['not_expense_renewed'] = 'Renewed Expense:';
$lang['not_invoice_sent_to_customer'] = 'Faktura wysłana do klienta: %s';
$lang['not_invoice_sent_yes'] = 'Tak';
$lang['not_invoice_sent_not'] = 'Nie';
$lang['not_action_taken_from_recurring_invoice'] = 'Action taken from recurring invoice:';
$lang['not_new_reminder_for'] = 'Nowe przypomnienie dla %s';
$lang['not_received_one_or_more_messages_lead'] = 'Received one more email message from lead';
$lang['not_received_lead_imported_email_integration'] = 'Lead Imported From Email Integration';
$lang['not_lead_imported_attachment'] = 'Imported attachment from email';
$lang['not_estimate_status_change'] = 'Imported attachment from email';
$lang['not_estimate_status_updated'] = 'Estimate Status Updated: From: %s to %s';
$lang['not_goal_message_success'] = 'Congratulations! We achieved new goal.<br /> Goal Type: %s
<br />Goal Achievement: %s
<br />Total Achivement: %s
<br />Data rozpoczęcia: %s
<br />End Date: %s';
$lang['not_assigned_lead_to_you'] = '%s assigned lead %s to you';
$lang['not_lead_activity_assigned_to'] = '%s przypisany do %s';
$lang['not_lead_activity_attachment_deleted'] = 'Deleted Attachment';
$lang['not_lead_activity_status_updated'] = '%s updated lead status from %s to %s';
$lang['not_lead_activity_contacted'] = '%s contacted this lead on %s';
$lang['not_lead_activity_created'] = '%s created lead';
$lang['not_lead_activity_marked_lost'] = 'Marked as lost';
$lang['not_lead_activity_unmarked_lost'] = 'Unmarked as lost';
$lang['not_lead_activity_marked_junk'] = 'Oznaczone jako śmieci';
$lang['not_lead_activity_unmarked_junk'] = 'Unmarked as junk';
$lang['not_lead_activity_added_attachment'] = 'Załacznik dodany';
$lang['not_lead_activity_converted_email'] = 'Lead email changed. First lead email was: %s and added as customer with email %s';
$lang['not_lead_activity_converted'] = '%s Converted this lead to customer';
$lang['not_liked_your_post'] = '%s liked your post %s ...';
$lang['not_commented_your_post'] = '%s commented on your post %s ...';
$lang['not_liked_your_comment'] = '%s liked your comment %s ...';
$lang['not_proposal_assigned_to_you'] = 'Proposal assigned to you - %s ...';
$lang['not_proposal_comment_from_client'] = 'New comment from customer on proposal %s ...';
$lang['not_proposal_proposal_accepted'] = 'Oferta zaakceptowana';
$lang['not_proposal_proposal_declined'] = 'Oferta odrzucona';
$lang['not_task_added_you_as_follower'] = 'added you as follower on task %s ...';
$lang['not_task_added_someone_as_follower'] = 'added %s as follower on task %s ...';
$lang['not_task_added_himself_as_follower'] = 'added himself as follower on task %s ...';
$lang['not_task_assigned_to_you'] = 'assigned a task to you %s ...';
$lang['not_task_assigned_someone'] = 'assigned %s to task %s ...';
$lang['not_task_will_do_user'] = 'will do task %s ...';
$lang['not_task_new_attachment'] = 'Nowy załącznik dodany';
$lang['not_task_marked_as_complete'] = 'marked task as complete %s';
$lang['not_task_unmarked_as_complete'] = 'unmarked task as complete %s';
$lang['not_ticket_assigned_to_you'] = 'Ticket assigned to you - %s ...';
$lang['not_ticket_reassigned_to_you'] = 'Ticket reassigned to you - %s ...';
$lang['not_estimate_customer_accepted'] = 'Congratulations! Client accepted estimate with number %s';
$lang['not_estimate_customer_declined'] = 'Klient odrzucił wycenę z numerem %s';
$lang['estimate_activity_converted'] = 'converted this estimate to invoice.<br /> %s';
$lang['estimate_activity_created'] = 'Created the estimate';
$lang['invoice_estimate_activity_removed_item'] = 'removed item <b>%s</b>';
$lang['estimate_activity_number_changed'] = 'Estimate number changed from %s to %s';
$lang['invoice_activity_number_changed'] = 'Invoice number changed from %s to %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'updated item short description from %s to %s';
$lang['invoice_estimate_activity_updated_item_long_description'] = 'updated item long description from <b>%s</b> to <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate'] = 'updated item rate from %s to %s';
$lang['invoice_estimate_activity_updated_qty_item'] = 'updated quantity on item <b>%s</b> from %s to %s';
$lang['invoice_estimate_activity_added_item'] = 'added new item <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client'] = 'wyślij wycenę do klienta';
$lang['estimate_activity_client_accepted_and_converted'] = 'Customer accepted this estimate. Estimate is converted to invoice with number %s';
$lang['estimate_activity_client_accepted'] = 'Customer accepted this estimate';
$lang['estimate_activity_client_declined'] = 'Klient odrzucił tę wycenę';
$lang['estimate_activity_marked'] = 'marked estimate as %s';
$lang['invoice_activity_status_updated'] = 'Invoice status updated from %s to %s';
$lang['invoice_activity_created'] = 'created the invoice';
$lang['invoice_activity_from_expense'] = 'converted to invoice from expense';
$lang['invoice_activity_recuring_created'] = '[Recurring] Invoice created by CRON';
$lang['invoice_activity_recuring_from_expense_created'] = '[Invoice From Expense] Invoice created by CRON';
$lang['invoice_activity_sent_to_client_cron'] = 'Invoice sent to customer by CRON';
$lang['invoice_activity_sent_to_client'] = 'sent invoice to customer';
$lang['invoice_activity_marked_as_sent'] = 'marked invoice as sent';
$lang['invoice_activity_payment_deleted'] = 'deleted payment for the invoice. Payment #%s, total amount %s';
$lang['invoice_activity_payment_made_by_client'] = 'Client made payment for the invoice from total <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff'] = 'recorded payment from total <b>%s</b> - %s';
$lang['invoice_activity_added_attachment'] = 'Załacznik dodany';

# Navigation
$lang['top_search_placeholder'] = 'Szukaj...';

# Staff
$lang['staff_profile_inactive_account'] = 'This staff member account is inactive';

# Estimates
$lang['copy_estimate'] = 'Copy Estimate';
$lang['estimate_copied_successfuly'] = 'Estimate copied successfuly';
$lang['estimate_copied_fail'] = 'Failed to copy estimate';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Zadania przypisane do mnie';
$lang['tasks_view_follower_by_user'] = 'Zadania, które obserwuję';
$lang['no_tasks_found'] = 'Brak zadań';

# Leads
$lang['leads_dt_datecreated'] = 'Utworzone';
$lang['leads_sort_by'] = 'Sortuj przez';
$lang['leads_sort_by_datecreated'] = 'Data utworzenia';
$lang['leads_sort_by_kanban_order'] = 'Kan Ban Order';

# Proposals
$lang['proposal_items_name'] = 'Pozycja';
$lang['proposal_items_description'] = 'Opis';
$lang['proposal_items_qty'] = 'Ilość';
$lang['proposal_items_rate'] = 'Stawka';
$lang['proposal_items_tax'] = 'Podatek';
$lang['proposal_items_amount'] = 'Kwota';

# Authentication
$lang['check_email_for_reseting_password'] = 'Sprawdź swój e-mail, a następnie postępuj zgodnie z instrukcją zawartą w wiadomości w celu zresetowania hasła';
$lang['inactive_account'] = 'Konto nieaktywne';
$lang['error_setting_new_password_key'] = 'Błąd przy ustawianiu nowego hasła';
$lang['password_reset_message'] = 'Twoje hasło zostało zaresetowane. Proszę się zalogować';
$lang['password_reset_message_fail'] = 'Bład przy resetowaniu hasła. Proszę spróbuj ponownie.';
$lang['password_reset_key_expired'] = 'Token do zmiany hasła stracił ważność lub błedny użytkownik';
$lang['admin_auth_reset_pass_repeat'] = 'Powtórz hasło';
$lang['auth_reset_pass_email_not_found'] = 'Nie znaleziono adresu e-mail';
$lang['auth_reset_password_submit'] = 'Zresetuj hasło';

# Settings
$lang['settings_amount_to_words'] = 'Kwota słownie';
$lang['settings_amount_to_words_desc'] = 'Output total amount to words in invoice/estimate';
$lang['settings_amount_to_words_enabled'] = 'Włącz';
$lang['settings_total_to_words_lowercase'] = 'Number words into lowercase';
$lang['settings_show_tax_per_item'] = 'Pokaż podatek przy każdej pozycji (faktury / wyceny)';

# Reports
$lang['report_sales_months_three_months'] = 'Ostatnie 3 miesiące';
$lang['report_invoice_number'] = 'Faktura #';
$lang['report_invoice_customer'] = 'Klient';
$lang['report_invoice_date'] = 'Data';
$lang['report_invoice_duedate'] = 'Termin płatności';
$lang['report_invoice_amount'] = 'Kwota';
$lang['report_invoice_amount_with_tax'] = 'Kwota z podatkiem';
$lang['report_invoice_amount_open'] = 'Amount open';
$lang['report_invoice_status'] = 'Status';
$lang['report_invoice_total_amount_with_tax'] = 'Łączna kwota z podatkiem';
$lang['report_invoice_total_amount_without_tax'] = 'Łączna kwota bez podatku';
$lang['report_invoice_total_taxes'] = 'Podatki';

#Version 1.0.9

# Home stats
$lang['home_stats_see_weekly_payments'] = 'Zobacz tygodniowe płatności';
$lang['home_stats_by_project_status'] = 'Statistics by project status';
$lang['home_invoice_overview'] = 'Podsumowanie faktur';
$lang['home_estimate_overview'] = 'Podsumowanie wycen';
$lang['home_proposal_overview'] = 'Podsumowanie ofert';
$lang['home_lead_overview'] = 'Podsumowanie pozyskań';
$lang['home_my_projects'] = 'Moje projekty';
$lang['home_announcements'] = 'Ogłoszenia';

# Settings
$lang['settings_leads_kanban_limit'] = 'Limit leads Kan Ban rows per status';
$lang['settings_group_misc'] = 'Misc';
$lang['show_projects_on_calendar'] = 'Projekty';
$lang['settings_media_max_file_size_upload'] = 'Max file size upload in Media (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Allow customer/staff to add/edit task comments only in the first hour (administrators not applied)';

# Email templates
$lang['email_template_only_domain_email'] = 'Only domain email';

# Announcements
$lang['dismiss_announcement'] = 'Dismiss announcement';
$lang['dismiss_announcement'] = 'Dismiss announcement';
$lang['announcement_from'] = 'Od:';
$lang['announcement_date'] = 'Date posted: %s';
$lang['announcement_not_found'] = 'Announcement not found';
$lang['announcements_recents'] = 'Recent Announcements';

# General
$lang['zip_invoices'] = 'Zip Invoices';
$lang['zip_estimates'] = 'Zip Estimates';
$lang['zip_payments'] = 'Zip Payments';
$lang['setup_help'] = 'Pomoc';
$lang['clients_list_company'] = 'Firma';
$lang['dt_button_export'] = 'Eksport';

$lang['dt_entries'] = 'entries';
$lang['invoice_total_paid'] = 'Total Paid';
$lang['invoice_amount_due'] = 'Zaległa kwota';
$lang['report_invoice_discount'] = 'Zniżki';

# Calendar
$lang['calendar_project'] = 'Projekt';

# Leads
$lang['leads_import_assignee'] = 'Beneficjent';
$lang['customer_from_lead'] = 'Klient od %s';
$lang['lead_kan_ban_attachments'] = 'Załączniki %s';
$lang['leads_sort_by_lastcontact'] = 'Ostatni kontakt';

# Tasks
$lang['task_comment_added'] = 'Komentarz został dodany';
$lang['task_duedate'] = 'Termin płatności';
$lang['task_view_comments'] = 'Komentarze';
$lang['task_comment_updated'] = 'Comment updated';
$lang['task_visible_to_client'] = 'Widoczne dla klienta';
$lang['task_hourly_rate'] = 'Stawka godzinowa';
$lang['hours'] = 'Godzin';
$lang['seconds'] = 'Sekund';
$lang['minutes'] = 'Minut';
$lang['task_start_timer'] = 'Włacz licznik czasu';
$lang['task_stop_timer'] = 'Zatrzymaj licznik czasu';
$lang['task_billable_help'] = 'If you check billable the task will be shown when creating invoice as items';
$lang['task_billable'] = 'Billable';
$lang['task_billable_yes'] = 'Billable';
$lang['task_billable_no'] = 'Not Billable';
$lang['task_billed'] = 'Zapowiadane';
$lang['task_billed_yes'] = 'Zapowiadane';
$lang['task_billed_no'] = 'Not Billed';
$lang['task_user_logged_time'] = 'Your logged time:';
$lang['task_total_logged_time'] = 'Total logged time:';
$lang['task_is_billed'] = 'This task is billed on invoice with number %s';
$lang['task_statistics'] = 'Statystyki';
$lang['task_milestone'] = 'Kamień milowy';

# Tickets
$lang['ticket_message_updated_successfuly'] = 'Message updated successfuly';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Projects tasks are not included in this list.';
$lang['show_quantity_as'] = 'Show quantity as:';
$lang['quantity_as_qty'] = 'Ilość';
$lang['quantity_as_hours'] = 'Godzin';
$lang['invoice_table_hours_heading'] = 'Godzin';
$lang['bill_tasks'] = 'Bill Tasks';
$lang['invoice_estimate_sent_to_email'] = 'Email to';

# Estimates
$lang['estimate_table_hours_heading'] = 'Godzin';

# General
$lang['is_customer_indicator'] = 'Klient';
$lang['print']            = 'Drukuj';
$lang['customer_permission_projects']            = 'Projekty';
$lang['no_timers_found']            = 'No started timers found';
$lang['timers_started_confirm_logout']            = 'Tasks timers found started!<br /><br />Are you sure you want to logout without stoping the timers?';
$lang['confirm_logout']            = 'Wyloguj się';
$lang['timer_top_started']            = 'Started at %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found'] = 'You cant change billing type. Billed tasks already found for this project.';
$lang['project_customer_permission_warning'] = 'The system indicated that the primary contact dont have permission for projects. The customer wont be able to see the project. Consider add permission in the customer profile tab Permissions.';
$lang['project_invoice_timesheet_start_time'] = 'Start time: %s';
$lang['project_invoice_timesheet_end_time'] = 'End time: %s';
$lang['project_invoice_timesheet_total_logged_time'] = 'Logged time: %s';
$lang['project_view_as_client'] = 'Zobacz projekt jako klient';
$lang['project_mark_all_tasks_as_completed'] = 'Mark all tasks as completed and stop all timers (No notifications sent to project members)';
$lang['project_not_started_status_tasks_timers_found'] = 'Task timers found for this project but the project is with status Not Started. Recomended to change the project status to In Progress';
$lang['project_status'] = 'Status';
$lang['project_status_1'] = 'Nierozpoczęty';
$lang['project_status_2'] = 'W trakcie';
$lang['project_status_3'] = 'Wstrzymany';
$lang['project_status_4'] = 'Zakończony';

$lang['project_file_uploaded_by_customer'] = 'Klient';
$lang['project_file_dateadded'] = 'Date uploaded';
$lang['project_file_filename'] = 'Nazwa pliku';
$lang['project_file__filetype'] = 'Typ pliku';
$lang['project_file_visible_to_customer'] = 'Widoczny dla klienta';
$lang['project_file_uploaded_by'] = 'Plik dodany przez';
$lang['edit_project'] = 'Edytuj projekt';
$lang['copy_project'] = 'Kopiuj projekt';
$lang['delete_project'] = 'Usuń projekt';
$lang['project_task_assigned_to_user'] = 'Zadania przypisane do Ciebie';
$lang['seconds'] = 'Sekund';
$lang['hours'] = 'Godzin';
$lang['minutes'] = 'Minut';
$lang['project']                 = 'Projekt';
$lang['project_lowercase']       = 'projekt';
$lang['projects']                = 'Projekty';
$lang['projects_lowercase']      = 'projekty';
$lang['project_settings']      = 'Ustawienia projektu';
$lang['project_invoiced_successfuly']             = 'Projekt zafakturowano prawidłowo';
$lang['new_project']             = 'Nowy projekt';
$lang['project_files']            = 'Pliki';
$lang['project_activity']            = 'Aktywność';
$lang['project_name']            = 'Nazwa projektu';
$lang['project_description']            = 'Opis projektu';
$lang['project_customer']            = 'Klient';
$lang['project_start_date']            = 'Data rozpoczęcia';
$lang['project_datecreated']            = 'Data utworzenia';
$lang['project_deadline']            = 'Termin';
$lang['project_billing_type']            = 'Billing Type';
$lang['project_billing_type_fixed_cost']            = 'Fixed Rate';
$lang['project_billing_type_project_hours']            = 'Project Hours';
$lang['project_billing_type_project_task_hours']            = 'Task Hours';
$lang['project_billing_type_project_task_hours_hourly_rate']            = 'Based on task hourly rate';
$lang['project_rate_per_hour']            = 'Rate Per Hour';
$lang['project_total_cost']            = 'Total Rate';
$lang['project_members']            = 'Project Members';
$lang['project_member_removed']     = 'Project member removed successfuly';
$lang['project_overview']           = 'Podsumowanie projektów';
$lang['project_gant']            = 'Gantt View';
$lang['project_milestones']            = 'Kroki milowe';
$lang['project_milestone_order']            = 'Zamówienie';
$lang['project_milestone_duedate_passed']            = 'Duedate passed';
$lang['record_timesheet']            = 'Grafik';
$lang['new_milestone']            = 'Nowy krok milowy';
$lang['edit_milestone']            = 'Edit Milestone';
$lang['milestone_name']            = 'Nazwa';
$lang['milestone_due_date']            = 'Termin';
$lang['project_milestone']            = 'Kamień milowy';
$lang['project_notes']            = 'Notatki';
$lang['project_timesheets']            = 'Karty pracy';
$lang['project_timesheet']            = 'Karta pracy';
$lang['milestone_total_logged_time']            = 'Logged Time';
$lang['project_overview_total_logged_hours']            = 'Total Logged Hours';
$lang['milestones_uncategorized']            = 'Bez kategorii';
$lang['milestone_no_tasks_found']            = 'Brak zadań';
$lang['copy_project_discussions_not_included']            = 'Attachments and comments are not included';
$lang['project_copied_successfuly']            = 'Project data copied successfuly';
$lang['failed_to_copy_project']            = 'Failed to copy project';
$lang['copy_project_task_include_check_list_items']            = 'Copy checklist items';
$lang['copy_project_task_include_assignees']            = 'Copy the same assignees';
$lang['copy_project_task_include_followers']            = 'Copy the same followers';

$lang['project_days_left']            = 'Pozostało dni';
$lang['project_open_tasks']            = 'Open Tasks';
$lang['timesheet_stop_timer']            = 'Zatrzymaj licznik czasu';
$lang['failed_to_add_project_timesheet_end_time_smaller']            = 'Failed to add timesheet. End time is smaller then start time';
$lang['project_timesheet_user']            = 'Członek';
$lang['project_timesheet_start_time']            = 'Godzina rozpoczęcia';
$lang['project_timesheet_end_time']            = 'Czas zakończenia';
$lang['project_timesheet_time_spend']            = 'Spędzony czas';
$lang['project_timesheet_task']            = 'Zadanie';
$lang['project_invoices']                = 'Faktury';
$lang['total_logged_hours_by_staff']            = 'Total Logged Time';
$lang['invoice_project']            = 'Zafakturuj projekt';
$lang['invoice_project_info']            = 'Project Invoice Info';
$lang['invoice_project_data_single_line']            = 'Single line';
$lang['invoice_project_data_task_per_item']            = 'Task per item';
$lang['invoice_project_data_timesheets_individualy']            = 'All timesheets individualy';
$lang['invoice_project_item_name_data']            = 'Nazwa pozycji';
$lang['invoice_project_description_data']            = 'Opis';
$lang['invoice_project_projectname_taskname']            = 'Project name + Task name';
$lang['invoice_project_all_tasks_total_logged_time']            = 'All tasks + total logged time per task';
$lang['invoice_project_project_name_data']            = 'Nazwa projketu';
$lang['invoice_project_timesheet_indivudualy_data']            = 'Timesheet start time + end time + total logged time';
$lang['invoice_project_total_logged_time_data']            = 'Total logged time';

$lang['project_allow_client_to'] = 'Pozwól klientowi %s';
$lang['project_setting_view_task_attachments'] = 'zobacz załaczniki do zadania';
$lang['project_setting_view_task_checklist_items'] = 'view task checklist items';
$lang['project_setting_upload_files'] = 'wgraj pliki';
$lang['project_setting_view_task_comments'] = 'view task comments';
$lang['project_setting_upload_on_tasks'] = 'upload attachments on tasks';
$lang['project_setting_view_task_total_logged_time'] = 'view task total logged time';
$lang['project_setting_open_discussions'] = 'otwarcie dyskusji';
$lang['project_setting_comment_on_tasks'] = 'komentowanie zadań projektu';
$lang['project_setting_view_tasks'] = 'przeglądanie zadań';
$lang['project_setting_view_milestones'] = 'przeglądanie kamieni milowych';
$lang['project_setting_view_gantt'] = 'przegladanie wykresu Gantta';
$lang['project_setting_view_timesheets'] = 'przeglądanie kart pracy';
$lang['project_setting_view_activity_log'] = 'przeglądanie logu aktywności';
$lang['project_setting_view_team_members'] = 'przeglądanie członków projektu';

$lang['project_discussion_visible_to_customer_yes']                 = 'Widoczne';
$lang['project_discussion_visible_to_customer_no']                 = 'Niewidoczne';

$lang['project_discussion_posted_on']                 = 'Posted on %s';
$lang['project_discussion_posted_by']                 = 'Posted by %s';
$lang['project_discussion_failed_to_delete']                 = 'Failed to delete discussion';
$lang['project_discussion_deleted']                 = 'Discussion deleted successfuly';
$lang['project_discussion_no_activity']                 = 'Brak aktywności';
$lang['project_discussion']                 = 'Dyskusja';
$lang['project_discussions']                 = 'Dyskusje';
$lang['edit_discussion'] = 'Utwórz dyskusję';
$lang['new_project_discussion'] = 'Utwórz dyskusję';
$lang['project_discussion_subject'] = 'Temat';
$lang['project_discussion_description'] = 'Opis';
$lang['project_discussion_show_to_customer'] = 'Widoczny dla klienta';
$lang['project_discussion_total_comments'] = 'Wszystkich komentarzy';
$lang['project_discussion_last_activity'] = 'Ostatnia aktywność';
$lang['discussion_add_comment'] = 'Dodaj komentarz';
$lang['discussion_newest'] = 'Najnowsze';
$lang['discussion_oldest'] = 'Najstarsze';
$lang['discussion_attachments'] = 'Załączniki';
$lang['discussion_send'] = 'Wyślij';
$lang['discussion_reply'] = 'Odpowiedz';
$lang['discussion_edit'] = 'Edytuj';
$lang['discussion_edited'] = 'Zmodyfikowano';
$lang['discussion_you'] = 'Ty';
$lang['discussion_save'] = 'Zapisz';
$lang['discussion_delete'] = 'Usuń';
$lang['discussion_view_all_replies'] = 'Pokaż wszystkie odpowiedzi';
$lang['discussion_hide_replies'] = 'Ukryj odpowiedzi';
$lang['discussion_no_comments'] = 'Brak komentarzy';
$lang['discussion_no_attachments'] = 'Brak załączników';
$lang['discussion_attachments_drop'] = 'Przeciągnij i upuść plik tutaj aby go wgrać';
$lang['project_note'] = 'Uwaga:';
$lang['project_note_private'] = 'Prywatne notatki';
$lang['project_save_note'] = 'Zapisz notatkę';

# Project Activity
$lang['project_activity_created'] = 'Created the project';
$lang['project_activity_updated'] = 'Updated project';
$lang['project_activity_removed_team_member'] = 'Removed team member';
$lang['project_activity_added_team_member'] = 'Dodano nowego członka zespołu';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Zaznacz wszystkie zadania jako ukończone ';
$lang['project_activity_recorded_timesheet'] = 'Recorded timesheet';
$lang['project_activity_task_name'] = 'Zadanie:';
$lang['project_activity_deleted_discussion'] = 'Deleted Discussion';
$lang['project_activity_created_discussion'] = 'Created discussion';
$lang['project_activity_updated_discussion'] = 'Updated discussion';
$lang['project_activity_commented_on_discussion'] = 'Commented on discussion';
$lang['project_activity_deleted_discussion_comment'] = 'Deleted discussion comment';
$lang['project_activity_deleted_milestone'] = 'Deleted milestone';
$lang['project_activity_updated_milestone'] = 'Updated milestone';
$lang['project_activity_created_milestone'] = 'Created new milestone';
$lang['project_activity_invoiced_project'] = 'Invoiced project';
$lang['project_activity_task_marked_complete'] = 'Zadanie oznaczone jako zakończone';
$lang['project_activity_task_unmarked_complete'] = 'Task unmarked as complete';
$lang['project_activity_task_deleted'] = 'Zadanie usunięte';
$lang['project_activity_new_task_comment'] = 'Commented on task';
$lang['project_activity_new_task_attachment'] = 'Uploaded attachment on task';
$lang['project_activity_new_task_assignee'] = 'Added new task assignee';
$lang['project_activity_task_assignee_removed'] = 'Removed task assignee';
$lang['project_activity_task_timesheet_deleted'] = 'Removed timesheet';
$lang['project_activity_uploaded_file'] = 'Uploaded project file';
$lang['project_activity_status_updated'] = 'Updated project status';
$lang['project_activity_visible_to_customer'] = 'Widoczne dla klienta';
$lang['project_activity_project_file_removed'] = 'Removed project file';

# Notifications
$lang['not_customer_uploaded_project_file'] = 'New file uploaded';
$lang['not_customer_created_new_project_discussion'] = 'New project discussion created';
$lang['not_customer_commented_on_project_discussion'] = 'New comment on project discussion';

# Customers area
$lang['clients_my_estimates'] = 'Wyceny';
$lang['client_no_reply'] = 'No Reply';
$lang['clients_nav_projects'] = 'Projekty';
$lang['clients_my_projects'] = 'Moje projekty';
$lang['client_profile_image'] = 'Zdjęcie profilowe';

/////
$lang['sales_report_cancelled_invoices_not_included'] = 'Cancelled invoices are excluded from the report';
$lang['invoices_merge_cancel_merged_invoices'] = 'Mark merged invoices as cancelled instead of deleting';
$lang['invoice_marked_as_cancelled_successfuly'] = 'Invoice marked as cancelled successfully';
$lang['invoice_unmarked_as_cancelled'] = 'Invoice unmarked as cancelled successfully';

$lang['tasks_reminder_notification_before'] = 'Task deadline reminder before (Days)';
$lang['not_task_deadline_reminder'] = 'Task deadline reminder';
$lang['dt_length_menu_all'] = 'Wszystkie';
$lang['task_not_finished'] = 'Not Completed';
$lang['task_billed_cant_start_timer'] = 'Task billed. Timer cant be start';
$lang['invoice_task_billable_timers_found'] = 'Started timers found';
$lang['project_timesheet_not_updated'] = 'Timesheet not affected';
$lang['project_invoice_task_no_timers_found'] = 'No timers found for this task';
$lang['invoice_project_tasks_not_started'] = 'Not yet started | Start Date: %s';
$lang['invoice_project_see_billed_tasks'] = 'Zobacz zadania, które będą fakturowane na tej fakturze';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'All billed tasks will be marked as finished';
$lang['invoice_project_nothing_to_bill'] = 'No tasks to bill. Feel free to add whatever you want in the invoice items.';
$lang['invoice_project_start_date_tasks_not_passed'] = 'Tasks with future start date cannot be billed';
$lang['invoice_project_stop_all_timers'] = 'Zatrzymaj wszystkie liczniki czasu';
$lang['invoice_project_stop_billabe_timers_only'] = 'Stop only billable timers';
$lang['project_tasks_total_timers_stopped'] = 'Stopped total %s timers';
$lang['project_invoice_timers_started'] = 'Task timers found running on billable tasks, invoice cannot be created. Please stop task timers to create invoice.';
$lang['task_start_timer_only_assignee'] = 'You need to be asigned on this task to start the timer!';
$lang['task_comments'] = 'Komentarze';
$lang['invoice_total_tax'] = 'Łączny podatek';
$lang['estimates_total_tax'] = 'Łączny podatek';
$lang['report_invoice_total_tax'] = 'Łączny podatek';
$lang['home_tickets'] = 'Zgłoszenia';
$lang['home_project_activity'] = 'Latest projects activity';
$lang['home_project_activity_not_found'] = 'No projects activity found';
$lang['view_tracking'] = 'Views Tracking';
$lang['view_date'] = 'Data';
$lang['view_ip'] = 'IP Address';
$lang['article_total_views'] = 'Total Views';
$lang['leads_source'] = 'Źródło';
$lang['invoices_available_for_merging'] = 'Invoices available for merging';
$lang['invoices_merge_discount'] = 'You will have to apply discount of total %s manualy to this invoice';
$lang['invoice_merge_number_warning'] = 'Merging invoices will create gaps in invoice numbers. Please do not merge invoices if you want no gaps in your invoice history. You also have the option of manually adjusting invoice numbers if you want to fill the gaps.';
$lang['invoice_mark_as'] = 'Zaznacz jako %s';
$lang['invoice_unmark_as'] = 'Unmark as %s';
$lang['invoice_status_cancelled'] = 'Cancelled';
$lang['tasks_reminder_notification_before_help'] = 'Notify task assignees about deadline before X days. The notification/email is sent only to the assignees. If the difference between task start date and task duedate is smaller then the reminders day no notification will be sent.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Zaznacz wszystkie zadania';
$lang['lead_company'] = 'Firma';

# Version 1.1.1
$lang['admin_auth_forgot_password_button'] = 'Potwierdź';
$lang['task_assigned'] = 'Przydzielono do';
$lang['switch_to_pipeline'] = 'Switch to pipeline';
$lang['switch_to_list_view'] = 'Switch to list';
$lang['estimates_pipeline'] = 'Estimates Pipeline';
$lang['estimates_pipeline_sort'] = 'Sortuj przez';
$lang['estimates_sort_expiry_date'] = 'Data ważności';
$lang['estimates_sort_pipeline'] = 'Pipeline Order';
$lang['estimates_sort_datecreated'] = 'Data utworzenia';
$lang['estimates_sort_estimate_date'] = 'Data sporządzenia wyceny';
$lang['estimate_set_reminder_title'] = 'Set Estimate Reminder';
$lang['invoice_set_reminder_title'] = 'Set Invoice Reminder';
$lang['estimate_reminders'] = 'Przypomnienia';
$lang['invoice_reminders'] = 'Przypomnienia';
$lang['estimate_notes'] = 'Notatki';
$lang['estimate_add_note'] = 'Dodaj notatkę';
$lang['dropdown_non_selected_tex'] = 'Nothing selected';
$lang['auto_close_ticket_after'] = 'Automatycznie zamknij zgłoszenie po (godziny)';
$lang['event_description'] = 'Opis';
$lang['delete_event'] = 'Usuń';
$lang['not_new_ticket_created'] = 'New ticket opened in your department - %s';
$lang['receive_notification_on_new_ticket'] = 'Receive notification on new ticket opened';
$lang['receive_notification_on_new_ticket_help'] = 'All staff members which belong to the ticket department will receive notification that new ticket is opened';
$lang['event_updated'] = 'Event updated successfuly';
$lang['customer_contacts'] = 'Kontakty';
$lang['new_contact'] = 'Nowy kontakt';
$lang['contact'] = 'Kontakt';
$lang['contact_lowercase'] = 'kontakt';
$lang['contact_primary'] = 'Główny kontakt';
$lang['contact_position'] = 'Stanowisko';
$lang['contact_active'] = 'Aktywne';
$lang['client_company_info'] = 'Szczegóły firmy';
$lang['proposal_save'] = 'Zapisz ofertę';
$lang['calendar'] = 'Kalendarz';
$lang['settings_pdf'] = 'PDF';
$lang['settings_pdf_font'] = 'Czcionka w PDF';
$lang['settings_pdf_table_heading_color'] = 'Items table heading color';
$lang['settings_pdf_table_heading_text_color'] = 'Items table heading text color';
$lang['settings_pdf_font_size'] = 'Domyślny rozmiar czcionki';
$lang['proposal_status_draft'] = 'Szkic';
$lang['custom_field_contacts'] = 'Kontakty';
$lang['company_primary_email'] = 'Primary email';
$lang['client_register_contact_info'] = 'Primary Contact Information';
$lang['client_register_company_info'] = 'Company Informations';
$lang['contact_permissions_info'] = 'Make sure to set appropriate permissions for this contact';
$lang['defaut_leads_kanban_sort'] = 'Default leads kan ban sort';
$lang['defaut_leads_kanban_sort_type'] = 'Sortuj';
$lang['order_ascending'] = 'Rosnąco';
$lang['order_descending'] = 'Malejąco';
$lang['calendar_expand'] = 'rozwiń';
$lang['proposal_reminders'] = 'Przypomnienia';
$lang['proposal_set_reminder_title'] = 'Set proposal reminder';
$lang['settings_allowed_upload_file_types'] = 'Allowed file types';
$lang['no_primary_contact'] = 'This customer dont have primary contact. You need to setup primary contact login as customer. Its recomended all customers to have primary contacts.';
$lang['leads_merge_customer'] = 'Customer fields merging';
$lang['leads_merge_contact'] = 'Contact fields merging';
$lang['leads_merge_as_contact_field'] = 'Merge as contact field';
$lang['lead_convert_to_client_phone'] = 'Telefon';
$lang['invoice_status_report_all'] = 'Wszystkie';
$lang['import_contact_field'] = 'Contact field';
$lang['proposal_mark_as_draft'] = 'Zaznacz jako szkic';

$lang['file_uploaded_success'] = 'There is no error, the file uploaded with success';
$lang['file_exceds_max_filesize'] = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
$lang['file_exceds_maxfile_size_in_form'] = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
$lang['file_uploaded_partially'] = 'The uploaded file was only partially uploaded';
$lang['file_not_uploaded'] = 'No file was uploaded';
$lang['file_missing_temporary_folder'] = 'Missing a temporary folder';
$lang['file_failed_to_write_to_disk'] = 'Failed to write file to disk.';
$lang['file_php_extension_blocked'] = 'A PHP extension stopped the file upload.';
$lang['calendar_expand'] = 'rozwiń';
$lang['view_pdf'] = 'View PDF';
$lang['expense_repeat_every'] = 'Repeat every';

# Version 1.1.2
$lang['leads_switch_to_kanban'] = 'Przełącz na kan ban';
$lang['survey_no_questions'] = 'This survey does not have questions added yet.';
$lang['survey_submit'] = 'Wyślij';
$lang['contract_content'] = 'Umowa';
$lang['contract_save'] = 'Save Contract';
$lang['contract_send_to_email'] = 'Send to email';
$lang['contract_send_to_client_modal_heading'] = 'Send contract to email';
$lang['contract_send_to'] = 'Send to';
$lang['contract_send_to_client_attach_pdf'] = 'Załacz plik PDF';
$lang['contract_send_to_client_preview_template'] = 'Podgląd szablonu e-mail';
$lang['include_attachments_to_email'] = 'Include attachments to email';
$lang['contract_sent_to_client_success'] = 'The contract is successfully sent to the customer';
$lang['contract_sent_to_client_fail'] = 'Failed to send contract';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Błedna nazwa użytkownika lub hasło';
$lang['client_old_password_incorect']     = 'Twoje stare hasło jest nieprawidłowe';
$lang['client_password_changed']          = 'Twoje hasło zostało zmienione';
$lang['check_for_new_version']          = 'Sprawdź aktualizacje';

# Version 1.1.4
$lang['total_leads_deleted'] = 'Total leads deleted: %s';
$lang['total_clients_deleted'] = 'Łączna liczba usuniętych klientów: %s';
$lang['confirm_action_prompt'] = 'Are you sure you want to perform this action?';
$lang['mass_delete'] = 'Mass Delete';
$lang['email_protocol'] = 'Email Protocol';
$lang['add_edit_members'] = 'Add/Edit Members';
$lang['project_overview_logged_hours'] = 'Logged Hours:';
$lang['project_overview_billable_hours'] = 'Billable Hours:';
$lang['project_overview_billed_hours'] = 'Billed Hours:';
$lang['project_overview_unbilled_hours'] = 'Unbilled Hours:';
$lang['calendar_first_day'] = 'First Day';
$lang['dt_mass_delete_help'] = 'Use the checkboxes on the right side for mass delete.';
$lang['permission_view'] = 'Zobacz';
$lang['permission_edit'] = 'Edytuj';
$lang['permission_create'] = 'Utwórz';
$lang['permission_delete'] = 'Usuń';
$lang['permission'] = 'Uprawnienie';
$lang['permissions'] = 'Uprawnienia';
$lang['proposals_pipeline'] = 'Proposals Pipeline';
$lang['proposals_pipeline_sort'] = 'Sortuj przez';
$lang['proposals_sort_open_till'] = 'Open Till';
$lang['proposals_sort_pipeline'] = 'Pipeline Order';
$lang['proposals_sort_datecreated'] = 'Data utworzenia';
$lang['proposals_sort_proposal_date'] = 'Data oferty';
$lang['is_not_staff_member'] = 'Brak członków personelu';
$lang['lead_created'] = 'Utworzone';
$lang['access_tickets_to_none_staff_members'] = 'Allow access to tickets for non staff members';
$lang['project_expenses'] = 'Wydatki';
$lang['expense_currency'] = 'Waluta';
$lang['currency_valid_code_help'] = 'Make sure to enter valid currency code.';
$lang['week'] = 'Tydzień';
$lang['weeks'] = 'Tygodnie';
$lang['month'] = 'Miesiąc';
$lang['months'] = 'Miesiące';
$lang['year'] = 'Rok';
$lang['years'] = 'Lata';
$lang['expense_report_category'] = 'Kategoria';
$lang['expense_paid_via'] = 'Paid Via %s';
$lang['item_as_expense'] = '[Wydatek]';
$lang['show_help_on_setup_menu'] = 'Show help menu item on setup menu';
$lang['customers_summary_total'] = 'Wszystkich klientów';
$lang['filter_by'] = 'Filter by';
$lang['re_captcha'] = 'reCAPTCHA';
$lang['recaptcha_site_key'] = 'Site key';
$lang['recaptcha_secret_key'] = 'Secret key';
$lang['recaptcha_error'] = 'The reCAPTCHA field is telling that you are a robot.';
$lang['smtp_username'] = 'SMTP Username';
$lang['smtp_username_help'] = 'Fill only if your email client use username for SMTP login.';
$lang['pinned_project']= 'Pinned Project';
$lang['pin_project']= 'Przypnij projekt';
$lang['unpin_project']= 'Odepnij projekt';
$lang['smtp_encryption']= 'Szyfrowanie e-mail';
$lang['smtp_encryption_none']= 'Brak';
$lang['show_proposals_on_calendar']= 'Oferty';
$lang['invoice_project_see_billed_expenses']= 'See expenses that wil be billed on this invoice';
$lang['recaptcha_help_settings']= 'If fields are not filled or there is no internet connection, reCAPTCHA will not be used.';
$lang['project_overview_expenses'] = 'Wszystkie wydatki';
$lang['project_overview_expenses_billable'] = 'Billable Expenses';
$lang['project_overview_expenses_billed'] = 'Billed Expenses';
$lang['project_overview_expenses_unbilled'] = 'Unbilled Expenses';
$lang['announcement_date_list'] = 'Data';
$lang['project_setting_view_finance_overview'] = 'zobacz podgląd finansów';
$lang['show_all_tasks_for_project_member'] = 'Allow all staff to see all tasks related to projects (includes non-staff)';
$lang['not_staff_added_as_project_member'] = 'Added you as project member';
$lang['report_expenses_base_currency_select_explanation'] = 'You need to select currency because the system found different currencies used for expenses.';

# Version 1.1.6
$lang['project_activity_recorded_expense'] = 'Recorded Expense';
$lang['save_customer_and_add_contact'] = 'Save and create contact';
$lang['tickets_chart_weekly_opening_stats'] = 'Weekly Stats';
$lang['related_knowledgebase_articles'] = 'Related Articles';
$lang['detailed_overview'] = 'Podsumowanie zadań';
$lang['tasks_total_checklists_finished'] = 'Total checklist items marked as finished';
$lang['tasks_total_added_attachments'] = 'Total attachments added';
$lang['tasks_total_comments'] = 'Total comments';
$lang['task_finished_on_time'] = 'Finished on time?';
$lang['task_finished_on_time_indicator'] = 'Tak';
$lang['task_not_finished_on_time_indicator'] = 'Nie';
$lang['task_filter_fetch_month_by'] = 'Fetch month from';
$lang['filter'] = 'Filtr';
$lang['task_filter_detailed_all_months'] = 'Wszystkie miesiące';
$lang['task_filter_detailed_show_tasks'] = 'Pokaż zadania';
$lang['kb_article_slug'] = 'slug';

# Version 1.1.7
$lang['email_template_ticket_warning'] = 'If ticket is imported with email piping and the contact does not exists in the CRM the fields wont be replaced.';
$lang['auto_stop_tasks_timers_on_new_timer'] = 'Stop all other started timers when starting new timer';
$lang['notification_when_customer_pay_invoice'] = 'Receive notification when customer pay invoice (built-in)';
$lang['not_invoice_payment_recored'] = 'New invoice payment - %s';
$lang['email_template_contact_warning'] = 'If contact is not logged while making action the contact merge fields wont be replaced.';
$lang['theme_style'] = 'Theme Style';
$lang['change_role_permission_warning'] = 'Changing role permissions wont affected current staff members permissions that are using this role.';
$lang['task_copied_successfuly'] = 'Task copied successfully';
$lang['failed_to_copy_task'] = 'Failed to copy task';
$lang['not_project_file_uploaded'] = 'New project file added';
$lang['settings_calendar_color'] = '%s kolor';
$lang['settings_calendar_colors_heading'] = 'Kolory';
$lang['reminder'] = 'Przypomnienie';
$lang['back_to_tasks_list'] = 'Wróć do listy zadań';
$lang['copy_task_confirm'] = 'Potwierdź';
$lang['changing_items_affect_warning'] = 'Changing item info wont affect on the created invoices/estimates.';
$lang['tax_is_used_in_expenses_warning'] = 'You cant update this tax because expenses transactions using this tax are found.';
$lang['note'] = 'Uwaga:';
$lang['leads_staff_report_converted'] = 'Total converted leads';
$lang['leads_staff_report_created'] = 'Total created leads';
$lang['leads_staff_report_lost'] = 'Total lost leads';
$lang['client_go_to_dashboard'] = 'Back to portal';
$lang['show_estimate_reminders_on_calendar'] = 'Estimate Reminders';
$lang['show_invoice_reminders_on_calendar'] = 'Invoice Reminders';
$lang['calendar_estimate_reminder'] = 'Estimate Reminder';
$lang['calendar_invoice_reminder'] = 'Invoice Reminder';
$lang['show_proposal_reminders_on_calendar'] = 'Proposal Reminders';
$lang['calendar_proposal_reminder'] = 'Proposal Reminder';
$lang['proposal_due_after']= 'Proposal Due After (days)';
$lang['project_progress']= 'Postęp';
$lang['calculate_progress_through_tasks']= 'Oblicz postęp w realizacji zadań';
$lang['allow_customer_to_change_ticket_status']= 'Pozwól klientowi zmienić status złoszenia w panelu klienta';
$lang['switch_to_general_report']= 'Switch to staff report';
$lang['switch_to_staff_report']= 'Switch to general report';
$lang['generate']= 'Wygeneruj';
$lang['from_date']= 'Od daty';
$lang['to_date']= 'Do daty';
$lang['not_results_found']= 'No results found';
$lang['lead_lock_after_convert_to_customer']= 'Dont allow editing the lead after converting to customer (admins not applied)';
$lang['default_pipeline_sort'] = 'Default pipeline sort';
$lang['not_goal_message_failed'] = 'We failed to achieve goal!<br /> Goal Type: %s
<br />Goal Achievement: %s
<br />Total Achivement: %s
<br />Start Date: %s
<br />End Date: %s';
$lang['toggle_full_view'] = 'Toggle full view';
$lang['not_estimate_invoice_deleted'] = 'deleted the created invoice';
$lang['not_task_new_comment'] = 'commented on task %s';

# Version 1.1.8
$lang['invoice_number_exists'] = 'This invoice number exists for the ongoing year.';
$lang['estimate_number_exists'] = 'This estimate number exists for the ongoing year.';
$lang['email_exists'] = 'E-mail już istnieje';
$lang['field_is_required'] = 'To pole jest wymagane';
$lang['field_max_length'] = 'Please enter value no more than {0} characters';
$lang['not_uploaded_project_file'] = 'New file uploaded';
$lang['not_created_new_project_discussion'] = 'New project discussion created';
$lang['not_commented_on_project_discussion'] = 'New comment on project discussion';
$lang['all_staff_members'] = 'Wszyscy pracownicy';
$lang['help_project_permissions'] = 'VIEW allows staff member to see ALL projects. If you only want them to see projects they are assigned (added as members), do not give VIEW permissions.';
$lang['help_tasks_permissions'] = 'VIEW allows staff member to see ALL tasks. If you only want them to see tasks they are assigned to or following, do not give VIEW permissions.';
$lang['expense_recuring_days'] = 'Day(s)';
$lang['expense_recuring_weeks'] = 'Week(s)';
$lang['expense_recuring_months'] = 'Month(s)';
$lang['expense_recuring_years'] = 'Years(s)';
$lang['reset_to_default_color'] = 'Przywrócić domyślny kolor';
$lang['pdf_logo_width'] = 'Logo Szerokość (PX)';
$lang['drop_files_here_to_upload'] = 'Upuść pliki tutaj, aby przesłać';
$lang['browser_not_support_drag_and_drop'] = 'Twoja przeglądarka nie obsługuje opcji przenieś i upuść';
$lang['remove_file'] = 'Usuń plik';
$lang['you_can_not_upload_any_more_files'] = 'Nie możesz wgrać więcej plików';
$lang['custom_field_only_admin'] = 'Ogranicz wyświetlanie tylko dla administratorów';
$lang['leads_default_source'] = 'Domyślne źródło';
$lang['clear_activity_log'] = 'Wyczyść dziennik';
$lang['default_contact_permissions'] = 'Domyślne uprawnienia kontaktu';
$lang['invoice_activity_marked_as_cancelled'] = 'marked invoice as cancelled';
$lang['invoice_activity_unmarked_as_cancelled'] = 'unmarked invoice as cancelled';
$lang['wait_text'] = 'Proszę czekać...';
$lang['projects_summary'] = 'Podsumowanie projektów';
$lang['dept_imap_host'] = 'IMAP Host';
$lang['dept_encryption'] = 'Szyfrowanie';
$lang['dept_email_password'] = 'Hasło';
$lang['dept_email_no_encryption'] = 'Brak szyfrowania';
$lang['failed_to_decrypt_password'] = 'Nie można odszyfrować hasła';
$lang['delete_mail_after_import'] = 'Delete mail after import?';
$lang['expiry_reminder_enabled'] = 'Send expiration reminder';
$lang['send_expiry_reminder_before'] = 'Send expiration reminder before (DAYS)';
$lang['not_expiry_reminder_sent'] = 'Expiry reminder sent';
$lang['send_expiry_reminder'] = 'Sent expiration reminder';
$lang['sent_expiry_reminder_success'] = 'Expiration reminder successfuly sent';
$lang['sent_expiry_reminder_fail'] = 'Failed to send expiration reminder';
$lang['leads_default_status'] = 'Domyślny status';
$lang['item_description_placeholder'] = 'Opis';
$lang['item_long_description_placeholder'] = 'Długi opis';
$lang['item_quantity_placeholder'] = 'Ilość';
$lang['item_rate_placeholder'] = 'Stawka';
$lang['tickets_summary'] = 'Tickets Summary';
$lang['tasks_list_priority'] = 'Priorytet';
$lang['ticket_status_db_2'] = 'W trakcie';
$lang['ticket_status_db_1'] = 'Otwarte';
$lang['ticket_status_db_3'] = 'Odpowiedziane';
$lang['ticket_status_db_4'] = 'W trakcie';
$lang['ticket_status_db_5'] = 'Zamknięte';
$lang['ticket_priority_db_1'] = 'Niski';
$lang['ticket_priority_db_2'] = 'Średni';
$lang['ticket_priority_db_3'] = 'Wysoki';
$lang['customer_have_projects_by'] = 'Contains projects by status %s';
$lang['customer_have_proposals_by'] = 'Contains proposals by status %s';
$lang['do_not_redirect_payment'] = 'Do not redirect me to the payment processor';
$lang['extension_not_allowed'] = 'Rozszerzenie jest niedozwolone';
$lang['project_tickets'] = 'Zgłoszenia';
$lang['invoice_report'] = 'Invoice Report';
$lang['payment_modes_report'] = 'Payment Modes (Transactions)';
$lang['customer_admins'] = 'Customer Admins';
$lang['assign_admin'] = 'Przypisz opiekuna';
$lang['customer_admin_date_assigned'] = 'Data przypisania';
$lang['customer_admin_login_as_client_message'] = 'Witaj %s. Zostałeś dodany jako opiekun do tego klienta. By zobaczyć dane klienta i dostosować panel klienta, zaloguj się jako klient.';
$lang['ticket_form_validation_file_size'] = 'Rozmiar pliku musi być mniejszy niż %s';
$lang['has_transactions_currency_base_change'] = 'Changing the base currency is possible only if there are no transactions recorded in that currency. Delete the transactions to change the base currency';
$lang['customers_sort_all'] = 'Wszystkie';

# Version 1.1.9
$lang['use_recaptcha_customers_area'] = 'Allow recaptcha on customers area (Login/Register)';
$lang['project_marked_as_finished'] = 'Project completed';
$lang['project_status_updated'] = 'Project status updated';
$lang['remove_decimals_on_zero'] = 'Remove decimals on numbers/money with zero decimals (2.00 will become 2, 2.25 will stay 2.25)';
$lang['remove_tax_name_from_item_table'] = 'Remove the tax name from item table row (Invoices/Estimates)';
