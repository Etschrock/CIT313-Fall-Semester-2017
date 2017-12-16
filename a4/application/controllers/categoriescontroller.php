<?php

class CategoriesController extends Controller{

    public $categoriesObject;

    public function category($gID){

        $this->categoriesObject = new Categories();
        $category = $this->categoriesObject->getCategory($cID);
        $this->set('categories',$category);

    }

    public function index(){

        $this->categoriesObject = new Categories();
        $categories = $this->categoriesObject->getCategories();
        $this->set('categories',$categories);

    }

    public function addCategory() {

        $this->categoriesObject = new Categories();

        $data = array('name'=>$_POST['categoryName']);

        $this->categoriesObject->addCategory($data);

    }

    public function update() {
        $this->categoriesObject = new Categories();

        $cID = $_POST['categoryID'];
        $name = $_POST['name'];

        $result = $this->categoriesObject->update($cID,$name);

        $this->set('message', $result);

    }

}
