<?php

namespace Intergaz\Models;

use PDO;

class DeliveryTypesModel extends Model 
{
    public function getClientsWith2Types()
    {
        $sql = "SELECT C.Name, A.Title
                FROM Clients C
                INNER JOIN Addresses A
                    ON A.ClientID = C.ID
                INNER JOIN Deliveries D
                    ON D.AddressID = A.ID
                EXCEPT
                SELECT C.Name, A.Title
                FROM Clients C
                INNER JOIN Addresses A
                    ON A.ClientID = C.ID
                INNER JOIN Deliveries D
                    ON D.AddressID = A.ID
                WHERE D.Type = '2'";
        
        $stmt = $this->db->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}