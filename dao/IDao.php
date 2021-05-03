<?php
interface IDao {
    function create($obj);
    function update($obj);
    function delete($id);
    function findById($id);
    function findAll();
}