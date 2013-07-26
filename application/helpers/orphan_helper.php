<?php

function delete_orphans()
{
    $CI =& get_instance();
    
    $queries = array(
        'DELETE FROM invoices WHERE client_id NOT IN (SELECT client_id FROM clients)',
        'DELETE FROM quotes WHERE client_id NOT IN (SELECT client_id FROM clients)',
        'DELETE FROM invoice_amounts WHERE invoice_id NOT IN (SELECT invoice_id FROM invoices)',
        'DELETE FROM quote_amounts WHERE quote_id NOT IN (SELECT quote_id FROM quotes)',
        'DELETE FROM payments WHERE invoice_id NOT IN (SELECT invoice_id FROM invoices)',
        'DELETE FROM client_custom WHERE client_id NOT IN (SELECT client_id FROM clients)',
        'DELETE FROM invoice_custom WHERE invoice_id NOT IN (SELECT invoice_id FROM invoices)',
        'DELETE FROM user_custom WHERE user_id NOT IN (SELECT user_id FROM users)',
        'DELETE FROM payment_custom WHERE payment_id NOT IN (SELECT payment_id FROM payments)',
        'DELETE FROM quote_custom WHERE quote_id NOT IN (SELECT quote_id FROM quotes)',
        'DELETE FROM invoice_items WHERE invoice_id NOT IN (SELECT invoice_id FROM invoices)',
        'DELETE FROM invoice_item_amounts WHERE item_id NOT IN (SELECT item_id FROM invoice_items)',
        'DELETE FROM quote_items WHERE quote_id NOT IN (SELECT quote_id FROM quotes)',
        'DELETE FROM quote_item_amounts WHERE item_id NOT IN (SELECT item_id FROM quote_items)',
        'DELETE FROM client_notes WHERE client_id NOT IN (SELECT client_id FROM clients)'
    );
    
    foreach ($queries as $query)
    {
        $CI->db->query($query);
    }
}

?>