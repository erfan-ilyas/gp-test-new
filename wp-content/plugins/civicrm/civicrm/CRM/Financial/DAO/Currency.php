<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Financial/Currency.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:1e445ed33ce1cd5313e578ebcb400c07)
 */

/**
 * Database access object for the Currency entity.
 */
class CRM_Financial_DAO_Currency extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '1.7';
  const COMPONENT = 'CiviContribute';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_currency';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Currency ID
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $id;

  /**
   * Currency Name
   *
   * @var string|null
   *   (SQL type: varchar(64))
   *   Note that values will be retrieved from the database as a string.
   */
  public $name;

  /**
   * Currency Symbol
   *
   * @var string|null
   *   (SQL type: varchar(8))
   *   Note that values will be retrieved from the database as a string.
   */
  public $symbol;

  /**
   * Numeric currency code
   *
   * @var string|null
   *   (SQL type: varchar(3))
   *   Note that values will be retrieved from the database as a string.
   */
  public $numeric_code;

  /**
   * Full currency name
   *
   * @var string|null
   *   (SQL type: varchar(64))
   *   Note that values will be retrieved from the database as a string.
   */
  public $full_name;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_currency';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Currencies') : ts('Currency');
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
          'title' => ts('Currency ID'),
          'description' => ts('Currency ID'),
          'required' => TRUE,
          'where' => 'civicrm_currency.id',
          'table_name' => 'civicrm_currency',
          'entity' => 'Currency',
          'bao' => 'CRM_Financial_DAO_Currency',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => '1.7',
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Currency'),
          'description' => ts('Currency Name'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'import' => TRUE,
          'where' => 'civicrm_currency.name',
          'export' => TRUE,
          'table_name' => 'civicrm_currency',
          'entity' => 'Currency',
          'bao' => 'CRM_Financial_DAO_Currency',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '1.7',
        ],
        'symbol' => [
          'name' => 'symbol',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Currency Symbol'),
          'description' => ts('Currency Symbol'),
          'maxlength' => 8,
          'size' => CRM_Utils_Type::EIGHT,
          'where' => 'civicrm_currency.symbol',
          'table_name' => 'civicrm_currency',
          'entity' => 'Currency',
          'bao' => 'CRM_Financial_DAO_Currency',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '1.7',
        ],
        'numeric_code' => [
          'name' => 'numeric_code',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Currency Numeric Code'),
          'description' => ts('Numeric currency code'),
          'maxlength' => 3,
          'size' => CRM_Utils_Type::FOUR,
          'import' => TRUE,
          'where' => 'civicrm_currency.numeric_code',
          'export' => TRUE,
          'table_name' => 'civicrm_currency',
          'entity' => 'Currency',
          'bao' => 'CRM_Financial_DAO_Currency',
          'localizable' => 0,
          'add' => '1.9',
        ],
        'full_name' => [
          'name' => 'full_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Full Currency Name'),
          'description' => ts('Full currency name'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_currency.full_name',
          'table_name' => 'civicrm_currency',
          'entity' => 'Currency',
          'bao' => 'CRM_Financial_DAO_Currency',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '1.9',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'currency', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'currency', $prefix, []);
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
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
