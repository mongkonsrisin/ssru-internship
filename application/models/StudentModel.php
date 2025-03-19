<?php
class StudentModel extends CI_Model{
  public function listStudents() {
    $result = $this->db
    ->select('*')
    ->from('student s')
    ->join('company c', 's.stu_companyid = c.com_id', 'left')
    ->get()
    ->result();
    return $result;
  }
  public function listStudentsByRoom($room) {
    $result = $this->db
    ->select('*')
    ->from('student s')
    ->join('company c', 's.stu_companyid = c.com_id', 'left')
    ->where('stu_room',$room)
    ->get()
    ->result();
    return $result;
  }
}
 ?>
