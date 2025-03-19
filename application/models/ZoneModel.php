<?php
class ZoneModel extends CI_Model{
  public function stats() {
    $query = $this->db->query('SELECT r.*,(SELECT COUNT(com_region) FROM company c WHERE com_region=r.reg_id) AS total FROM region r');
    return $query->result();
  }
  public function getZoneDetail($zone_id) {
    $result = $this->db
    ->select('*')
    ->from('company')
    ->where('com_region',$zone_id)
    ->get()
    ->result();
    return $result;
  }
    public function getZoneAdvisor($zone_id) {
    $result = $this->db
    ->select('*')
    ->from('region')
    ->where('reg_id',$zone_id)
    ->get()
    ->result();
    return $result;
  }
}
 ?>
