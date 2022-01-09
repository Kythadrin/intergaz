<?php

class NonActiveClientsModel extends Model 
{
    public function getNonActiveClients()
    {
        $sql = "SELECT C.Name, A.Title
                FROM Clients C
                INNER JOIN 
                    (SELECT C.ID
                    FROM Clients C
                    INNER JOIN Addresses A
                        ON A.ClientID = C.ID
                    INNER JOIN Deliveries D
                        ON D.AddressID = A.ID
                    GROUP BY C.Id
                    HAVING SUM(CASE WHEN D.Type = 1 THEN 1 ELSE 0 END) = 0) NA
                ON C.ID = NA.ID
                INNER JOIN Addresses A
                    ON A.ClientID = C.ID
                INNER JOIN Deliveries D
                    ON D.AddressID = A.ID
                WHERE D.Type <> 1";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}