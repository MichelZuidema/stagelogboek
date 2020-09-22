<?php

/**
 * RequiredLevel
 *
 * @subpackage Database
 * @author     Michel Zuidema <michelgzuidema@gmail.com>
 */
class RequiredLevel extends Database
{
    /**
     *
     * Gets all the required levels from the database
     *
     * @return string array
     */
    protected function getAllRequiredLevels()
    {
        $sql = "SELECT id, name FROM required_level";
        $result = $this->connect()->query($sql);
        $rows = $result->num_rows;

        if ($rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }

            return $data;
        } else {
            echo "No results found!";
        }
    }
}

?>