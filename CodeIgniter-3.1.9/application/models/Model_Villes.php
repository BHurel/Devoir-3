<?php
    class Model_Villes extends CI_Model
    {
        function getVilles()
        {
            $sql = $this->db->query("SELECT nomVille, scoreVille FROM ville INNER JOIN region ON Ville.numRegion = Region.idRegion");
            return $sql->result();
        }
    }
    function addVote($tab1, $tab2)
    {
        $tab1 = explode(",", $tab1);
        $tab2 = explode(",", $tab2);
        for ($i=0; $i<count($tab1); $i++)
        {
            if ($tab2[$i] == "true")
            {
                $sql = $this->db->query("UPDATE ville set scoreVille=scoreVille+5 where numRegion=".$tab1[$i]."");
            }
        }
    }