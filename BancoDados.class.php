<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BancoDadosSIG
 *
 * @author u63818
 */
class BancoDados {

    private static function ConectorMySql() {
        try {
            $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_PERSISTENT => true);
            $con = new PDO("mysql:host=localhost; dbname=db_teste_upload;", "root", "", $opcoes);
            return $con;
        } catch (Exception $e) {
            echo 'Erro: ' . $e->getMessage();
            return null;
        }
    }


    public static function Select($sqlVar, $tarefa = '', $flag = 'false') {
        try {
            $pdo = self::ConectorMySql();
            $sql = $sqlVar;
            $stm = $pdo->prepare($sql);
            $stm->execute();
            $returnPDO = $stm->fetchAll(PDO::FETCH_ASSOC);
            $stm = null;
            $pdo = null;
            if ($flag == 'true') {
                self::imprimirConsulta($tarefa, $sql, $returnPDO);
            }
            return $returnPDO;
        } catch (Exception $e) {
            echo 'Erro: ' . $e->getMessage();
            return null;
        }
    }

}