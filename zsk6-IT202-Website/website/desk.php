<?php
/* Zaib Kaukab
   2026-02-28
   IT202-004
   Phase 2: CRUD Categories and Items
   zsk6@njit.edu
*/
require_once('database.php');
class Desk
{
    public $deskID;
    public $deskCode;
    public $deskName;
    public $deskDescription;
    public $deskBrand;
    public $deskMaterial;
    public $deskTypeID;
    public $deskBuyPrice;
    public $deskSellPrice;
    function __construct(
        $deskID,
        $deskCode,
        $deskName,
        $deskDescription,
        $deskBrand,
        $deskMaterial,
        $deskTypeID,
        $deskBuyPrice,
        $deskSellPrice
    ) {
        $this->deskID = $deskID;
        $this->deskCode = $deskCode;
        $this->deskName = $deskName;
        $this->deskDescription = $deskDescription;
        $this->deskBrand = $deskBrand;
        $this->deskMaterial = $deskMaterial;
        $this->deskTypeID = $deskTypeID;
        $this->deskBuyPrice = $deskBuyPrice;
        $this->deskSellPrice = $deskSellPrice;
    }
    function __toString()
    {
        $output = "<h2>Desk : $this->deskID</h2>" .
            "<h2>Name: $this->deskName</h2>\n" .
            "<h2>Type ID: $this->deskTypeID at $this->deskBuyPrice/$this->deskSellPrice</h2>\n";
        return $output;
    }
    static function findDesk($deskID)
    {
        $db = getDB();
        $query = "SELECT * FROM desks WHERE desk_id = $deskID";
        $result = $db->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if ($row) {
            $desk = new Desk(
                $row['desk_id'],
                $row['desk_code'],
                $row['desk_name'],
                $row['desk_description'],
                $row['desk_brand'],
                $row['desk_material'],
                $row['desk_type_id'],
                $row['desk_buy_price'],
                $row['desk_sell_price']
            );
            $db->close();
            return $desk;
        } else {
            $db->close();
            return NULL;
        }
    }
    function saveDesk()
    {
        $db = getDB();
        $query = "INSERT INTO desks (desk_id, desk_code, desk_name, desk_description, desk_brand, desk_material, desk_type_id, desk_buy_price, desk_sell_price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "isssssidd",
            $this->deskID,
            $this->deskCode,
            $this->deskName,
            $this->deskDescription,
            $this->deskBrand,
            $this->deskMaterial,
            $this->deskTypeID,
            $this->deskBuyPrice,
            $this->deskSellPrice
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
    static function getDesks()
    {
        $db = getDB();
        $query = "SELECT * FROM desks";
        $result = $db->query($query);
        if (mysqli_num_rows($result) > 0) {
            $desks = array();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $desk = new Desk(
                    $row['desk_id'],
                    $row['desk_code'],
                    $row['desk_name'],
                    $row['desk_description'],
                    $row['desk_brand'],
                    $row['desk_material'],
                    $row['desk_type_id'],
                    $row['desk_buy_price'],
                    $row['desk_sell_price']
                );
                array_push($desks, $desk);
            }
            $db->close();
            return $desks;
        } else {
            $db->close();
            return NULL;
        }
    }
    function removeDesk()
    {
        $db = getDB();
        $query = "DELETE FROM desks WHERE desk_id = $this->deskID";
        $result = $db->query($query);
        $db->close();
        return $result;
    }
    function updateDesk()
    {
        $db = getDB();
        $query = "UPDATE desks SET desk_code = ?, desk_name = ?, desk_description = ?, " .
            "desk_brand = ?, desk_material = ?, desk_type_id = ?, desk_buy_price = ?, desk_sell_price = ? WHERE desk_id = $this->deskID";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "ssssssidd",
            $this->deskCode,
            $this->deskName,
            $this->deskDescription,
            $this->deskBrand,
            $this->deskMaterial,
            $this->deskTypeID,
            $this->deskBuyPrice,
            $this->deskSellPrice
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
}
?>
