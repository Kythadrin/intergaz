<?php

namespace Intergaz\Models;

use PDO;

class IndexModel extends Model 
{
    public function getClients()
    {
        $sql = "SELECT ID, Name FROM Clients";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}