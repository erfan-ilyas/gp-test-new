<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Activity/ActivityContact.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:2e8b2b826a1e0f70d39ea967462796d4)
 */

/**
 * Database access object for the ActivityContact entity.
 */
class CRM_Activity_DAO_ActivityContact extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '4.4';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_activity_contact';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Activity contact id
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $id;

  /**
   * Foreign key to the activity for this record.
   *
   * @var int|string
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $activity_id;

  /**
   * Foreign key to the contact for this record.
   *
   * @var int|string
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $contact_id;

  /**
   * Determines the contact's role in the activity (source, target, or assignee).
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $record_type_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_activity_contact';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Activity Contacts') : ts('Activity Contact');
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'activity_id', 'civicrm_activity', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contact_id', 'civicrm_contact', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Activity Contact ID'),
          'description' => ts('Activity contact id'),
          'required' => TRUE,
          'where' => 'civicrm_activity_contact.id',
          'table_name' => 'civicrm_activity_contact',
          'entity' => 'ActivityContact',
          'bao' => 'CRM_Activity_BAO_ActivityContact',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => '4.4',
        ],
        'activity_id' => [
          'name' => 'activity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Activity ID'),
          'description' => ts('Foreign key to the activity for this record.'),
          'required' => TRUE,
          'where' => 'civicrm_activity_contact.activity_id',
          'table_name' => 'civicrm_activity_contact',
          'entity' => 'ActivityContact',
          'bao' => 'CRM_Activity_BAO_ActivityContact',
          'localizable' => 0,
          'FKClassName' => 'CRM_Activity_DAO_Activity',
          'html' => [
            'label' => ts("Activity"),
          ],
          'add' => '4.4',
        ],
        'contact_id' => [
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contact ID'),
          'description' => ts('Foreign key to the contact for this record.'),
          'required' => TRUE,
          'import' => TRUE,
          'where' => 'civicrm_activity_contact.contact_id',
          'export' => TRUE,
          'table_name' => 'civicrm_activity_contact',
          'entity' => 'ActivityContact',
          'bao' => 'CRM_Activity_BAO_ActivityContact',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'html' => [
            'label' => ts("Contact"),
          ],
          'add' => '4.4',
        ],
        'record_type_id' => [
          'name' => 'record_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Activity Contact Type'),
          'description' => ts('Determines the contact\'s role in the activity (source, target, or assignee).'),
          'where' => 'civicrm_activity_contact.record_type_id',
          'table_name' => 'civicrm_activity_contact',
          'entity' => 'ActivityContact',
          'bao' => 'CRM_Activity_BAO_ActivityContact',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
            'label' => ts("Contact Role"),
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'activity_contacts',
            'optionEditPath' => 'civicrm/admin/options/activity_contacts',
          ],
          'add' => '4.4',
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'activity_contact', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'activity_contact', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'UI_activity_contact' => [
        'name' => 'UI_activity_contact',
        'field' => [
          0 => 'contact_id',
          1 => 'activity_id',
          2 => 'record_type_id',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_activity_contact::1::contact_id::activity_id::record_type_id',
      ],
      'index_record_type' => [
        'name' => 'index_record_type',
        'field' => [
          0 => 'activity_id',
          1 => 'record_type_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_activity_contact::0::activity_id::record_type_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
