<?php
require_once 'contact.php';

$updated_id = 7; 
$updated_no_HP = '0812378886438';
$updated_Owner = 'Ayu';

$res = Contact::update($updated_id, $updated_no_HP, $updated_Owner);
if ($res) {
    echo "Berhasil Diupdate";
} else {
    echo "Gagal Diupdate";
}

?>
