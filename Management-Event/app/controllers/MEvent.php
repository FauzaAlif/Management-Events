<?php

class MEvent extends Controller {
  public function index()
  {
    $data["judul"] = "Data MEvent";
    $data["MEvent"] = $this->model("MEventModel")->getAllMEvent();
    $this->view("templates/header", $data);
    $this->view("MEvent/index", $data);
    $this->view("templates/footer");
  }

  public function tambahMEvent()
  {
    if ($this->model("MEventModel")->tambahDataMEvent($_POST) > 0){
      Flasher::setFlash('Data MEvent', 'berhasil', 'ditambahkan', 'success');
      header("Location:" . BASEURL . "/MEvent");
      exit;
    } else{
      Flasher::setFlash('Data MEvent', 'gagal', 'ditambahkan', 'danger');
      header("Location:" . BASEURL . "/MEvent");
      exit;
    }
  }

  public function getUbahMEvent()
  {
    echo json_encode($this->model("MEventModel")->getMEventById($_POST["id"]));
  }

  public function editMEvent()
  {
    if ($this->model("MEventModel")->ubahDataMEvent($_POST) > 0){
      Flasher::setFlash('Data MEvent', 'berhasil', 'diubah', 'success');
      header("Location:" . BASEURL . "/MEvent");
      exit;
    } else{
      Flasher::setFlash('Data MEvent', 'gagal', 'diubah', 'danger');
      header("Location:" . BASEURL . "/MEvent");
      exit;
    }
  }

  public function hapusMEvent($id)
  {
    if ($this->model("MEventModel")->hapusDataMEvent($id) > 0){
      Flasher::setFlash('Data MEvent', 'berhasil', 'dihapus', 'success');
      header("Location:" . BASEURL . "/MEvent");
      exit;
    } else{
      Flasher::setFlash('Data MEvent', 'gagal', 'dihapus', 'danger');
      header("Location:" . BASEURL . "/MEvent");
      exit;
    }
  }

}