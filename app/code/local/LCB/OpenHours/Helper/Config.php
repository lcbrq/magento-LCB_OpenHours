<?php
/**
 * Author: Marcin Gierus
 * Date: 20.08.18
 * Time: 09:30
 * Filename: Config.php
 * Project: magento-LCB_OpenHours
 */

/**
 * Class LCB_OpenHours_Helper_Config
 */
class LCB_OpenHours_Helper_Config extends Mage_Core_Helper_Abstract
{

    CONST OPEN_HOURS_MONDAY_CONFIG_PATH    = 'general/lcb_openhours/monday';
    CONST OPEN_HOURS_TUESDAY_CONFIG_PATH   = 'general/lcb_openhours/tuesday';
    CONST OPEN_HOURS_WEDNESDAY_CONFIG_PATH = 'general/lcb_openhours/wednesday';
    CONST OPEN_HOURS_THURSDAY_CONFIG_PATH  = 'general/lcb_openhours/thursday';
    CONST OPEN_HOURS_FRIDAY_CONFIG_PATH    = 'general/lcb_openhours/friday';
    CONST OPEN_HOURS_SATURDAY_CONFIG_PATH  = 'general/lcb_openhours/saturday';
    CONST OPEN_HOURS_SUNDAY_CONFIG_PATH    = 'general/lcb_openhours/sunday';

    CONST STORE_PHONE_CONFIG_PATH = 'general/store_information/phone';

    /**
     * @param $path
     * @return mixed
     * @throws \Mage_Core_Model_Store_Exception
     */
    public function getConfig($path){
        return Mage::getStoreConfig($path,Mage::app()->getStore());
    }

}