<?php
class MEventModel 
{
  private $table = "eventlist";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllMEvent()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }

  public function getColumnsMEvent()
  {
    $this->db->query("SHOW COLUMNS FROM ". $this->table);
    return $this->db->resultSet();
  }

  public function countMEvent()
    {
      $this->db->query("SELECT COUNT(*) as total FROM ". $this->table);
      $result = $this->db->single();

      return $result['total'];
    }

  public function tambahDataMEvent($data)
  {
    $query = "INSERT INTO " . $this->table . 
                  " VALUES
            ('', :nama_event, :alamat_event, :peserta_event, :tanggal_event)";
    
    $this->db->query($query);
    $this->db->bind("nama_event", $data["nama_event"]);
    $this->db->bind("alamat_event", $data["alamat_event"]);
    $this->db->bind("peserta_event", $data["peserta_event"]);
    $this->db->bind("tanggal_event", $data["tanggal_event"]);

    $this->db->execute();
    return $this->db->rowCount();

  }

  public function getMEventById($id)
  {
    $this->db->query("SELECT * FROM ". $this->table . " WHERE id_event=:id");
    $this->db->bind("id", $id);
    return $this->db->single();
  }

  public function ubahDataMEvent($data)
  {
    $query = "UPDATE " . $this->table . " SET 
              nama_event = :nama_event,
              alamat_event = :alamat_event,
              peserta_event = :peserta_event,
              tanggal_event = :tanggal_event,
            WHERE id_event = :id_event;";
    
    $this->db->query($query);
    $this->db->bind("id_event", $data["id_event"]);
    $this->db->bind("nama_event", $data["nama_event"]);
    $this->db->bind("alamat_event", $data["alamat_event"]);
    $this->db->bind("peserta_event", $data["peserta_event"]);
    $this->db->bind("tanggal_event", $data["tanggal_event"]);


    $this->db->execute();
    return $this->db->rowCount();

  } 

  public function hapusDataMEvent($id)
  {
    $query = "DELETE FROM " . $this->table . 
              " WHERE id_event = :id_event";
    $this->db->query($query);
    $this->db->bind("id_event", $id);
    $this->db->execute();

    return $this->db->rowCount();
  }
}


