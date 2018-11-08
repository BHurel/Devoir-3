<?php
    class Model_Regions extends CI_Model
    {
        function getRegions()
        {
            $sql = $this->db->query("SELECT nomRegion FROM region");
            return $sql->result();
        }
        function getRegionInvite()
        {
            $sql = $this->db->query("SELECT nomRegion FROM region WHERE idRegion='1')");
            return $sql->result();
        }
    }
?>