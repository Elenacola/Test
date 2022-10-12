<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 5.2.0
 */

/**
 * Database `hotel`
 */

/* `hotel`.`camere` */
$camere = array(
  array('numero' => '101','piano' => '1','tipo' => 'singola','lettiAggiunti' => '','optionals' => 'ariaCondizionata'),
  array('numero' => '102','piano' => '1','tipo' => 'doppia','lettiAggiunti' => '','optionals' => 'ariaCondizionata,vistaMare,tv'),
  array('numero' => '103','piano' => '1','tipo' => 'doppia','lettiAggiunti' => 'terzo','optionals' => 'ariaCondizionata,vistaMare,tv'),
  array('numero' => '104','piano' => '1','tipo' => 'matrimoniale','lettiAggiunti' => 'terzo,quarto','optionals' => 'ariaCondizionata'),
  array('numero' => '201','piano' => '2','tipo' => 'matrimoniale','lettiAggiunti' => 'terzo','optionals' => 'ariaCondizionata,vistaMare,tv'),
  array('numero' => '202','piano' => '2','tipo' => 'matrimoniale','lettiAggiunti' => 'terzo','optionals' => 'ariaCondizionata,vistaMare,tv'),
  array('numero' => '203','piano' => '2','tipo' => 'matrimoniale','lettiAggiunti' => 'terzo,quarto','optionals' => 'ariaCondizionata'),
  array('numero' => '301','piano' => '3','tipo' => 'matrimoniale','lettiAggiunti' => 'terzo','optionals' => 'ariaCondizionata,vistaMare,tv'),
  array('numero' => '302','piano' => '3','tipo' => 'matrimoniale','lettiAggiunti' => 'terzo','optionals' => 'ariaCondizionata,vistaMare,tv'),
  array('numero' => '303','piano' => '3','tipo' => 'matrimoniale','lettiAggiunti' => 'terzo,quarto','optionals' => 'ariaCondizionata'),
  array('numero' => '401','piano' => '4','tipo' => 'singola','lettiAggiunti' => '','optionals' => 'fumatori'),
  array('numero' => '402','piano' => '4','tipo' => 'tripla','lettiAggiunti' => 'quarto','optionals' => 'fumatori,vistaMare'),
  array('numero' => '403','piano' => '4','tipo' => 'tripla','lettiAggiunti' => 'quarto','optionals' => 'fumatori')
);

/* `hotel`.`clienti` */
$clienti = array(
  array('id' => '1','nominativo' => 'Rossi Mario','indirizzo' => 'via Manzi, 2 - 00153 Roma','telefono' => '06 86123920')
);

/* `hotel`.`prenotazioni` */
$prenotazioni = array(
);

/* `hotel`.`prezzi` */
$prezzi = array(
  array('periodoDal' => '2006-05-01','periodoAl' => '2006-05-31','tipoCamera' => 'singola','prezzo' => '50.00'),
  array('periodoDal' => '2006-05-01','periodoAl' => '2006-05-31','tipoCamera' => 'doppia','prezzo' => '90.00'),
  array('periodoDal' => '2006-05-01','periodoAl' => '2006-05-31','tipoCamera' => 'matrimoniale','prezzo' => '90.00'),
  array('periodoDal' => '2006-05-01','periodoAl' => '2006-05-31','tipoCamera' => 'tripla','prezzo' => '130.00'),
  array('periodoDal' => '2006-06-01','periodoAl' => '2006-06-30','tipoCamera' => 'singola','prezzo' => '55.00'),
  array('periodoDal' => '2006-06-01','periodoAl' => '2006-06-30','tipoCamera' => 'doppia','prezzo' => '95.00'),
  array('periodoDal' => '2006-06-01','periodoAl' => '2006-06-30','tipoCamera' => 'matrimoniale','prezzo' => '95.00'),
  array('periodoDal' => '2006-06-01','periodoAl' => '2006-06-30','tipoCamera' => 'tripla','prezzo' => '140.00'),
  array('periodoDal' => '2006-07-01','periodoAl' => '2006-07-31','tipoCamera' => 'singola','prezzo' => '65.00'),
  array('periodoDal' => '2006-07-01','periodoAl' => '2006-07-31','tipoCamera' => 'doppia','prezzo' => '120.00'),
  array('periodoDal' => '2006-07-01','periodoAl' => '2006-07-31','tipoCamera' => 'matrimoniale','prezzo' => '120.00'),
  array('periodoDal' => '2006-07-01','periodoAl' => '2006-07-31','tipoCamera' => 'tripla','prezzo' => '160.00'),
  array('periodoDal' => '2006-08-01','periodoAl' => '2006-08-31','tipoCamera' => 'singola','prezzo' => '80.00'),
  array('periodoDal' => '2006-08-01','periodoAl' => '2006-08-31','tipoCamera' => 'doppia','prezzo' => '150.00'),
  array('periodoDal' => '2006-08-01','periodoAl' => '2006-08-31','tipoCamera' => 'matrimoniale','prezzo' => '150.00'),
  array('periodoDal' => '2006-08-01','periodoAl' => '2006-08-31','tipoCamera' => 'tripla','prezzo' => '200.00'),
  array('periodoDal' => '2006-09-01','periodoAl' => '2006-09-30','tipoCamera' => 'singola','prezzo' => '50.00'),
  array('periodoDal' => '2006-09-01','periodoAl' => '2006-09-30','tipoCamera' => 'doppia','prezzo' => '90.00'),
  array('periodoDal' => '2006-09-01','periodoAl' => '2006-09-30','tipoCamera' => 'matrimoniale','prezzo' => '90.00'),
  array('periodoDal' => '2006-09-01','periodoAl' => '2006-09-30','tipoCamera' => 'tripla','prezzo' => '130.00')
);

/* `hotel`.`supplementi` */
$supplementi = array(
  array('codice' => '1','voce' => 'culla','prezzo' => '8.00'),
  array('codice' => '2','voce' => 'letto aggiuntivo','prezzo' => '30.00'),
  array('codice' => '3','voce' => 'uso singola','prezzo' => '-15.00'),
  array('codice' => '4','voce' => 'bed&breakfast','prezzo' => '-10.00'),
  array('codice' => '5','voce' => 'pensione completa','prezzo' => '5.00')
);

/* `hotel`.`supplementi_prenotati` */
$supplementi_prenotati = array(
);
