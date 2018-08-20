<?php
/**
 * Author: Marcin Gierus
 * Date: 20.08.18
 * Time: 09:51
 * Filename: Index.php
 * Project: middeljans
 */

/**
 * Class LCB_OpenHours_Block_Hours
 */
class LCB_OpenHours_Block_Hours extends Mage_Core_Block_Template{

    /**
     * @return array
     */
    public function getOpenHours(){

        return [
            'Monday' => $this->isCLosed($this->getConfigValue(LCB_OpenHours_Helper_Config::OPEN_HOURS_MONDAY_CONFIG_PATH)),
            'Tuesday' => $this->isCLosed($this->getConfigValue(LCB_OpenHours_Helper_Config::OPEN_HOURS_TUESDAY_CONFIG_PATH)),
            'Wednesday' => $this->isCLosed($this->getConfigValue(LCB_OpenHours_Helper_Config::OPEN_HOURS_WEDNESDAY_CONFIG_PATH)),
            'Thursday' => $this->isCLosed($this->getConfigValue(LCB_OpenHours_Helper_Config::OPEN_HOURS_THURSDAY_CONFIG_PATH)),
            'Friday' => $this->isCLosed($this->getConfigValue(LCB_OpenHours_Helper_Config::OPEN_HOURS_FRIDAY_CONFIG_PATH)),
            'Saturday' => $this->isCLosed($this->getConfigValue(LCB_OpenHours_Helper_Config::OPEN_HOURS_SATURDAY_CONFIG_PATH)),
            'Sunday' => $this->isCLosed($this->getConfigValue(LCB_OpenHours_Helper_Config::OPEN_HOURS_SUNDAY_CONFIG_PATH))
        ];
    }

    /**
     * @return string
     */
    public function getPhoneValue(){
        return $this->getConfigValue(LCB_OpenHours_Helper_Config::STORE_PHONE_CONFIG_PATH);
    }

    /**
     * @param      $path
     * @param bool $isPhone
     * @return mixed
     */
    protected function getConfigValue($path , $isPhone = false){
       return  Mage::helper('openhours/config')->getConfig($path);
    }

    /**
     * @param $value
     * @return string
     */
    public function isClosed($value){
        if(!$value || $value == ''){
            return $this->__('Closed');
        }
        return $value;
    }

}