<?php
/*
 * Заготовка, сирий код
 * jd todo Два випадки інсталяції 1-й на ще не встановлений сайт (немає БД), 2-й - коли вже є БД, і можна активувати
 */

$languageData = [
	'name'  =>  "Українська",
	'code'  =>  "uk-ua",
	'locale'    =>  'ua_UA.UTF-8,ua_UA,ua_UA,ua',
	'sort_order'    =>  0,
	'status'    =>  1,
];
$currency_data = [
	'title' =>  'Гривня',
	'code'  =>  'UAH',
	'symbol_left'   =>  '',
	'symbol_right'  =>  'грн',
	'decimal_place' =>  2,
	'status'    =>  1,
];

$this->load->model('localisation/language');
$language = $this->model_localisation_language->getLanguageByCode('uk-ua');
if (empty($language['name'])) {
	$this->model_localisation_language->addLanguage($languageData);
}

$this->load->model('localisation/currency');
$currency = $this->model_localisation_currency->getCurrencyByCode($currency_data['code']);
if (empty($currency['title'])) {
	$this->model_localisation_currency->addCurrency($currency_data);
}