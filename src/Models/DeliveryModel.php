<?php

namespace Intergaz\Models;

use PDO;

class DeliveryModel extends Model 
{
    public function getClientInfo($id) 
    {
        $sql = "SELECT Name, Phone, Email FROM Clients WHERE id = :id";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam('id', $id, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getDeliveries($client) 
    {
        $sql = "SELECT A.Title, FORMAT(R.Date, 'dd/MM/yy') AS Date, CONVERT(decimal(10, 2), DL.Price) AS Price , D.Status
                FROM Clients C
                INNER JOIN Addresses A
                    ON (A.ClientID = C.ID)
                INNER JOIN Deliveries D
                    ON (D.AddressID = A.ID)
                INNER JOIN Routes R
                    ON (R.ID = D.RouteId)
                INNER JOIN DeliveryLines DL
                    ON (DL.DeliveryID = D.ID)
                WHERE C.ID = :client";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam('client', $client, PDO::PARAM_STR);

        $stmt->execute();

        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        foreach ($result as $key => $value) { 
            switch($result[$key]['Status']) {
                case '1': 
                    $result[$key]['Status'] = 'nav izpildīts';
                    break;
                case '2': 
                    $result[$key]['Status'] = 'ir izpildīts';
                    break;
                case '3': 
                    $result[$key]['Status'] = 'atcelts';
                    break;
            }
        }

        return $result;
    }
}