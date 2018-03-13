<?php

require_once 'pricefieldcategory.civix.php';

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function pricefieldcategory_civicrm_config(&$config) {
  _pricefieldcategory_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @param $files array(string)
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function pricefieldcategory_civicrm_xmlMenu(&$files) {
  _pricefieldcategory_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function pricefieldcategory_civicrm_install() {
  _pricefieldcategory_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function pricefieldcategory_civicrm_uninstall() {
  _pricefieldcategory_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function pricefieldcategory_civicrm_enable() {
  _pricefieldcategory_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function pricefieldcategory_civicrm_disable() {
  _pricefieldcategory_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed
 *   Based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function pricefieldcategory_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _pricefieldcategory_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function pricefieldcategory_civicrm_managed(&$entities) {
  _pricefieldcategory_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function pricefieldcategory_civicrm_caseTypes(&$caseTypes) {
  _pricefieldcategory_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function pricefieldcategory_civicrm_angularModules(&$angularModules) {
_pricefieldcategory_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function pricefieldcategory_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _pricefieldcategory_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Functions below this ship commented out. Uncomment as required.
 *

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function pricefieldcategory_civicrm_preProcess($formName, &$form) {

} // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
function pricefieldcategory_civicrm_navigationMenu(&$menu) {
  _pricefieldcategory_civix_insert_navigation_menu($menu, NULL, array(
    'label' => ts('The Page', array('domain' => 'biz.lcdservices.pricefieldcategory')),
    'name' => 'the_page',
    'url' => 'civicrm/the-page',
    'permission' => 'access CiviReport,access CiviContribute',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _pricefieldcategory_civix_navigationMenu($menu);
} // */

function pricefieldcategory_civicrm_buildForm($formName, &$form) {
  /*Civi::log()->debug('pricefieldcategory_civicrm_buildForm', array(
    'formName' => $formName,
    'form' => $form,
  ));*/

  if ($formName == 'CRM_Price_Form_Field') {
    $form->add('select', 'price_field_category', ts('Price Field Category'),
      array('' => '- select -') + CRM_Core_OptionGroup::values('price_field_category'));

    CRM_Core_Region::instance('form-body')->add(array(
      'template' => 'CRM/PriceFormField.tpl',
    ));
  }
}

function pricefieldcategory_civicrm_entityTypes(&$entityTypes) {
  $entityTypes['CRM_Price_DAO_PriceField']['fields_callback'][]
    = function ($class, &$fields) {
    $fields['price_field_category'] = array(
      'name' => 'price_field_category',
      'type' => CRM_Utils_Type::T_STRING,
      'title' => ts('Price Field Category'),
      'description' => '',
      'required' => FALSE,
      'maxlength' => 255,
      'size' => CRM_Utils_Type::HUGE,
      'table_name' => 'civicrm_price_field',
      'entity' => 'PriceField',
      'bao' => 'CRM_Price_BAO_PriceField',
      'localizable' => 0,
      'html' => array(
        'type' => 'Select',
      ),
      'pseudoconstant' => array(
        'optionGroupName' => 'price_field_category',
        'optionEditPath' => 'civicrm/admin/options/price_field_category',
      ),
    );
  };
}

function pricefieldcategory_civicrm_navigationMenu(&$params) {
  /*Civi::log()->debug('pricefieldcategory_civicrm_buildForm', array(
    '$params' => $params,
  ));*/

  $navId = CRM_Core_DAO::singleValueQuery("SELECT max(id) FROM civicrm_navigation");
  if (!empty($navId)) {
    $navId++;
    $eventID = CRM_Core_DAO::getFieldValue('CRM_Core_DAO_Navigation',
      'Events', 'id', 'name');
    $params[$eventID]['child'][$navId] = array(
      'attributes' => array (
        'label' => ts('Manage Price Field Categories', array('domain' => LONG_NAME)),
        'name' => 'manage_price_field_categories',
        'url' => 'civicrm/admin/options/price_field_category?reset=1',
        'permission' => 'access CiviEvent',
        'operator' => 'OR',
        'separator' => 1,
        'parentID' => $eventID,
        'navID' => $navId,
        'active' => 1
      ),
    );
  }
}
