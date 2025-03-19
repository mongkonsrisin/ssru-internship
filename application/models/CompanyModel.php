<?php
class CompanyModel extends CI_Model{
  public function listCompanies() {
    $result = $this->db
    ->query('SELECT company.*,COUNT(student.stu_id) AS total  FROM company LEFT  JOIN student on company.com_id = student.stu_companyid GROUP BY company.com_id')
    ->result();
    return $result;
  }
  public function getCompanyDetail($com_id) {
    $result = $this->db
    ->select('*')
    ->from('company')
    ->where('com_id',$com_id)
    ->get()
    ->result();
    return $result[0];
  }
  public function who($com_id) {
    $result = $this->db
    ->query('SELECT * FROM student WHERE stu_companyid='.$com_id)
    ->result();
    return $result;
  }
}
 ?>
