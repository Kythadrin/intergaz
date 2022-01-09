<?php

class LastDeliveryModel extends Model 
{
    public function getLast10Deliveries() 
    {
        $sql = "SELECT TOP 10 C.Name, A.Title, DL.Item, CONVERT(decimal(10, 2), DL.Price) AS Price
                FROM Clients C
                INNER JOIN Addresses A
                    ON A.ClientID = C.ID
                INNER JOIN Deliveries D
                    ON D.AddressID = A.ID
                INNER JOIN DeliveryLines DL
                    ON DL.DeliveryID = D.ID
                INNER JOIN Routes R
                    ON R.ID = D.RouteId
                ORDER BY R.Date DESC";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}