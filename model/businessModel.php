<?php

require_once("db_connection\connection.php");

class Business {
    private $shortName;
    private $fullName;
    private $image;

    public function __construct($shortName, $fullName, $image) {
        $this->shortName = $shortName;
        $this->fullName = $fullName;
        $this->image = $image;
    }
    public function getShortName() {
        return $this->shortName;
    }
    public function getFullName() {
        return $this->fullName;
    }
    public function getImage() {
        return $this->image;
    }
}

class businessDAO {
    private $db;
    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }
    public function getBusiness() {
        $stmt= $this->db->query("SELECT * FROM business");
        $stmt->execute();
        $businessData = $stmt->fetchAll();
        $Busi=array();
        foreach($businessData as $row) {
            $Busi[]=new Business($row["short_name"], $row["full_name"], $row["img"]);
        }
        return $Busi;
    }
}

// $business = new businessDAO();
// $busi= $business->getBusiness();
// echo "<h2>Business</h2>";
// echo "<table>";
// echo "<thead>
//         <tr>
//             <th>logo</th>
//             <th>name</th>
//             <th>short</th>
//         </tr>
//     </thead>";
// echo "<tbody>";
// foreach($busi as $row) {

//     echo "<tr>
//         <td><img src='/../IMG/".$row->getImage()."'></td>
//         <td>".$row->getFullName()."</td>
//         <td>".$row->getShortName()."</td>
//         </tr>";
// }
// echo "</tbody>";
// echo "</table>";
?>