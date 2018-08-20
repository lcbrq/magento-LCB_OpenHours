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
            'Monday' => $this->getConfigValue(LCB_OpenHours_Helper_Config::OPEN_HOURS_MONDAY_CONFIG_PATH),
            'Tuesday' => $this->getConfigValue(LCB_OpenHours_Helper_Config::OPEN_HOURS_TUESDAY_CONFIG_PATH),
            'Wednesday' => $this->getConfigValue(LCB_OpenHours_Helper_Config::OPEN_HOURS_WEDNESDAY_CONFIG_PATH),
            'Thursday' => $this->getConfigValue(LCB_OpenHours_Helper_Config::OPEN_HOURS_THURSDAY_CONFIG_PATH),
            'Friday' => $this->getConfigValue(LCB_OpenHours_Helper_Config::OPEN_HOURS_FRIDAY_CONFIG_PATH),
            'Saturday' => $this->getConfigValue(LCB_OpenHours_Helper_Config::OPEN_HOURS_SATURDAY_CONFIG_PATH),
            'Sunday' => $this->getConfigValue(LCB_OpenHours_Helper_Config::OPEN_HOURS_SUNDAY_CONFIG_PATH)
        ];
    }

    /**
     * @param $path
     * @return mixed
     */
    protected function getConfigValue($path){
        return Mage::helper('openhours/config')->getConfig($path);
    }

}