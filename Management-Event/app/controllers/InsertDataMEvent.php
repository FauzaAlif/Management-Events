<?php

class InsertDataMEvent extends Controller {
  public function index()
  {
    $data["judul"] = "Tambah Data Event";
    $this->view("templates/header", $data);
    $this->view("InsertDataMEvent/index");
    $this->view("templates/footer");
  }
}