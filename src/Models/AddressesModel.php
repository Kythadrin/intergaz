<?php

namespace Intergaz\Models;

use PDO;

class AddressesModel extends Model 
{
    public function getClientName($id)
    {
        $sql = "SELECT Name AS 'Klienta nosaukums' FROM Clients WHERE ID LIKE :id";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetchColumn();
    }
    
    public function getAddresses($client)
    {
        $sql = "SELECT Title AS 'Piegādes adrese' FROM Addresses WHERE ClientID LIKE :client";
        $stmt = $this->db->prepare($sql);
        
        $stmt->bindParam(':client', $client, PDO::PARAM_STR);
        
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}