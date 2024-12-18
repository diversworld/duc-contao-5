<?php

$GLOBALS['TL_DCA']['tl_member']['fields']['email']['eval']['unique']=true; 

# MetaModel Default Werte f?r Formulare

$GLOBALS['TL_DCA']['mm_eqipmentrent']['fields']['memberid']['default']=''{{user::id}}'; 
$GLOBALS['TL_DCA']['mm_eqipmentrent']['fields']['membername']['default']=''{{user::firstname}} {{user::lastname}}'; 