<?php

interface studentDAO{
    public function getById($id);
    public function getAll();
    public function save($body);
    public function update($id, $body);
    public function delete($id);
}