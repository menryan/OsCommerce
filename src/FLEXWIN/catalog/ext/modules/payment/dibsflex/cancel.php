<?php
/*
  $Id$

  DIBS module for osCommerce

  DIBS Payment Systems
  http://www.dibs.dk

  Copyright (c) 2011 DIBS A/S

  Released under the GNU General Public License
 
*/

chdir('../../../../');
require('includes/application_top.php');
require(DIR_WS_LANGUAGES . $language . '/modules/payment/dibsflex.php');
require(DIR_WS_MODULES . '/payment/dibsflex.php');

$oDIBSflex = new dibsflex();

$oDIBSflex->cancel();
  
?>