<?php
/* Zaib Kaukab
   2026-02-28
   IT202-004
   Phase 2: CRUD Categories and Items
   zsk6@njit.edu
*/
require_once('database.php');
class DeskType
{
    public $deskTypeID;
    public $deskTypeCode;
    public $deskTypeName;
    public $deskAisleNumber;
    function __construct($deskTypeID, $deskTypeCode, $deskTypeName, $deskAisleNumber)
    {
        $this->deskTypeID = $deskTypeID;
        $this->deskTypeCode = $deskTypeCode;
        $this->deskTypeName = $deskTypeName;
        $this->deskAisleNumber = $deskAisleNumber;
    }
    function __toString()
    {
        $output = "<h2>$this->deskTypeID - $this->deskTypeCode, $this->deskTypeName</h2>\n";
        return $output;
    }
    static function findDeskType($deskTypeID)
    {
        $db = getDB();
        $query = "SELECT * FROM desk_types WHERE desk_type_id = $deskTypeID";
        $result = $db->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if ($row) {
            $deskType = new DeskType(
                $row['desk_type_id'],
                $row['desk_type_code'],
                $row['desk_type_name'],
                $row['desk_aisle_number']
            );
            $db->close();
            return $deskType;
        } else {
            $db->close();
            return NULL;
        }
    }
    function saveDeskType()
    {
        $db = getDB();
        $query = "INSERT INTO desk_types (desk_type_id, desk_type_code, desk_type_name, desk_aisle_number) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "issi",
            $this->deskTypeID,
            $this->deskTypeCode,
            $this->deskTypeName,
            $this->deskAisleNumber
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
    static function getDeskTypes()
    {
        $db = getDB();
        $query = "SELECT * FROM desk_types";
        $result = $db->query($query);
        if (mysqli_num_rows($result) > 0) {
            $deskTypes = array();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $deskType = new DeskType(
                    $row['desk_type_id'],
                    $row['desk_type_code'],
                    $row['desk_type_name'],
                    $row['desk_aisle_number']
                );
                array_push($deskTypes, $deskType);
                unset($deskType);
            }
            $db->close();
            return $deskTypes;
        } else {
            $db->close();
            return NULL;
        }
    }
    function removeDeskType()
    {
        $db = getDB();
        $query = "DELETE FROM desk_types WHERE desk_type_id = $this->deskTypeID";
        $result = $db->query($query);
        $db->close();
        return $result;
    }
    function updateDeskType()
    {
        $db = getDB();
        $query = "UPDATE desk_types SET desk_type_code = ?, " .
            "desk_type_name = ?, " .
            "desk_aisle_number = ? " .
            "WHERE desk_type_id = $this->deskTypeID";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "ssi",
            $this->deskTypeCode,
            $this->deskTypeName,
            $this->deskAisleNumber
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
}
?>
