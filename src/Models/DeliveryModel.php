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
        $sql = "SELECT A.Title AS 'Piegādes adrese', FORMAT(R.Date, 'dd/MM/yy') AS 'Piegādes datums', 
                CONVERT(decimal(10, 2), DL.Price) AS 'Preču summa', D.Status AS 'Piegādes status'
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

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $key => $value) { 
            switch($result[$key]['Piegādes status']) {
                case '1': 
                    $result[$key]['Piegādes status'] = 'nav izpildīts';
                    break;
                case '2': 
                    $result[$key]['Piegādes status'] = 'ir izpildīts';
                    break;
                case '3': 
                    $result[$key]['Piegādes status'] = 'atcelts';
                    break;
            }
        }

        return $result;
    }
}