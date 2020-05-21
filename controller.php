<?php

/**
 * Tablica z danymi, które mamy przygotowane po wygenerowania zakupu w naszym serwisie
 */
$transaction_data = [
	"name" => "łukasz",
	"surename" => "porębski",
	"price" => "150",
	"title" => "szkolenie"
];

/**
 * Przygotowanie danych do podpisania parametrów formularza
 */
$create_form = [
	'first_name' => $transaction_data['name'],
	'last_name' => $transaction_data['surename'],
	'amount' => $transaction_data['price'] * 100,
	'desc' => $transaction_data['title'],
	'client_ip' => $_SERVER['REMOTE_ADDR'],
	'pos_id' => '387178',
	'pos_auth_key' => 'GNz2uZQ',
	'session_id' => time() . mt_rand(),
	'ts' => time()
];

/**
 * Funkcja podpisująca
 */
function payu_signature(array $form, string $second_key)
{
	ksort($form);
	$content = '';

	foreach ($form as $key => $value) {
		$content .= $key . '=' . urlencode($value) . "&";
	}
	$extract = $content . $second_key;

	return sha1($extract);
}
