<?php
   class Editoriales_Model
   {
        protected $db;
   
        public function __construct() {
             $this->db = DBManager::getInstance()->getConnection();
        }
        //Función que devuelve un array con todos las editoriales.
        function getEditoriales() {
            $result = $this->db->query('SELECT id,nombre, telefono FROM editoriales');
            $editoriales = $result->fetchAll();
            return $editoriales;
        }
   }
   
?>
