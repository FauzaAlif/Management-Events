<?php

class Home extends Controller{
  public function index()
  {
    $data["judul"] = "Dashboard Event Management";
    $data["jumlahMEvent"] = $this->model("MEventModel")->countMEvent();
    $this->view("templates/header", $data);
    $this->view("home/index", $data);
    $this->view("templates/footer");
  }
}