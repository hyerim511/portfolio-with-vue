<?php

class Project {
    private int $id;
    private string $title;
    private string $field;
    private string $url;
    private string $description;
    private string $image;

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id; 
    }

    public function getTitle() {
        return $this->title;
    }
    public function setTitle($title) {
        $this->title = $title; 
    }

    public function getField() {
        return $this->field;
    }
    public function setField($field) {
        $this->field = $field; 
    }

    public function getUrl() {
        return $this->url;
    }
    public function setUrl($url) {
        $this->url = $url; 
    }

    public function getDescription() {
        return $this->description;
    }
    public function setDescription($description) {
        $this->description = $description; 
    }

    public function getImage() {
        return $this->image;
    }
    public function setImage($image) {
        $this->image = $image; 
    }

}