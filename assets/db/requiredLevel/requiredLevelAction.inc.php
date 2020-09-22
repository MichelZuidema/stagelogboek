<?php

/**
 * RequiredLevel
 *
 * @subpackage RequiredLevel
 * @author     Michel Zuidema <michelgzuidema@gmail.com>
 */
class RequiredLevelAction extends RequiredLevel
{
    /**
     *
     * Show all required levels
     *
     * @return string array
     */
    public function showAllRequiredLevels()
    {
        $datas = $this->getAllRequiredLevels();

        return $datas;
    }
}

?>