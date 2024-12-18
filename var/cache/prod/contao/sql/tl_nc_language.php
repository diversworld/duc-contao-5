<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'autoincrement' => true,
  ),
  'pid' => 
  array (
    'type' => 'integer',
    'default' => 0,
    'unsigned' => true,
  ),
  'tstamp' => 
  array (
    'type' => 'integer',
    'default' => 0,
    'unsigned' => true,
  ),
  'language' => 
  array (
    'type' => 'string',
    'length' => 64,
    'default' => NULL,
    'notnull' => false,
  ),
  'fallback' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'recipients' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => NULL,
    'notnull' => false,
  ),
  'email_sender_name' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => NULL,
    'notnull' => false,
  ),
  'email_sender_address' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => NULL,
    'notnull' => false,
  ),
  'email_recipient_cc' => 
  array (
    'type' => 'text',
    'default' => NULL,
    'notnull' => false,
  ),
  'email_recipient_bcc' => 
  array (
    'type' => 'text',
    'default' => NULL,
    'notnull' => false,
  ),
  'email_replyTo' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => NULL,
    'notnull' => false,
  ),
  'email_subject' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => NULL,
    'notnull' => false,
  ),
  'email_mode' => 
  array (
    'type' => 'string',
    'length' => 16,
    'default' => 'textOnly',
  ),
  'email_text' => 
  array (
    'type' => 'text',
    'default' => NULL,
    'notnull' => false,
  ),
  'email_html' => 
  array (
    'type' => 'text',
    'default' => NULL,
    'notnull' => false,
  ),
  'attachment_tokens' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => NULL,
    'notnull' => false,
  ),
  'attachments' => 
  array (
    'type' => 'blob',
    'length' => 65535,
    'default' => NULL,
    'notnull' => false,
  ),
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'pid' => 'index',
  'language' => 'index',
);

$this->arrRelations = array (
);

$this->arrEnums = array (
);

$this->blnIsDbTable = true;
