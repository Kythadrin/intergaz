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
    
    public function getAddresses($client)
    {
        $sql = "SELECT Title FROM Addresses WHERE ClientID LIKE :client";
        $stmt = $this->db->prepare($sql);
        
        $stmt->bindParam(':client', $client, PDO::PARAM_STR);
        
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getClientName($id)
    {
        $sql = "SELECT Name FROM Clients WHERE ID LIKE :id";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetchColumn();
    }
}