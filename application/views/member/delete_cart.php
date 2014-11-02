<?php
$query = $this->db->delete_where('orders', array('id' => $this->input->post('id')));

if ($query) {
	echo 'Do delete';
} else {
	echo 'Error occured. Please try again';
}
?>