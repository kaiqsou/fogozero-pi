<?php

    class FeedbackDAO extends Conexao 
    {
        public function __construct()
        {
            parent :: __construct();
        }

        public function buscar_um_feedback($feedback)
        {
            $sql = "SELECT * FROM feedbacks WHERE id_feedback = ?";
            try 
            {
                $stm = $this -> db -> prepare($sql);
                $stm -> bindValue(1, $feedback -> getId_feedback());
                $stm -> execute();

                $this -> db = null;

                return $stm->fetchAll(PDO::FETCH_OBJ);
            }
            catch(PDOException $e)
            {
                $this->db = null;
                return "Problema ao buscar um feedback";
            }
        }

        public function buscar_feedbacks()
        {
            $sql = "SELECT * FROM feedbacks";
            try
            {
                $stm = $this -> db -> prepare($sql);
                $stm -> execute();
                $this -> db = null;
                return $stm -> fetchAll(PDO::FETCH_OBJ);
            }
            catch(PDOException $e) 
            {
                $this -> db = null;
                return "Problema ao buscar os feedbacks";
            }
        }

        public function buscar_feedbacks_denuncia($feedback)
        {
            $id = $feedback -> getDenuncia() -> getId_denuncia();

            $sql = "SELECT 
                f.*, 
                u.nome AS nome_usuario
            FROM feedbacks f
            LEFT JOIN usuarios u ON f.usuario_id = u.id_usuario
            WHERE f.denuncia_id = ?";

            try
            {
                $stm = $this -> db -> prepare($sql);
                $stm -> bindValue(1, $id);
                $stm -> execute();
                $this -> db = null;
                return $stm -> fetchAll(PDO::FETCH_OBJ);
            }
            catch(PDOException $e) 
            {
                $this -> db = null;
                return "Problema ao buscar os feedbacks";
            }
        }
    }

?>