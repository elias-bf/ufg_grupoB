<?php

use yii\db\Migration;
use yii\db\Schema;

class m190128_105452_schema extends Migration
{
    public function safeUp()
    {
//        $tableOptions = null;
//        
//        if ($this->db->driverName === 'mysql') 
//        {
//            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
//        }
//
////        USUARIO
//        
//        $this->createTable('usuario',
//        [
//            'id' => Schema::TYPE_PK,
//            'nome' => Schema::TYPE_STRING . ' not null',
//            'nivel' => Schema::TYPE_STRING . ' not null',
//            'departamento_id' => Schema::TYPE_INTEGER . ' null',
//            'login' => Schema::TYPE_STRING . ' not null',
//            'email' => Schema::TYPE_STRING . ' not null',
//            'senha' => Schema::TYPE_STRING . ' not null',
//            'status' => Schema::TYPE_STRING . ' not null',
//            'foto' => Schema::TYPE_STRING . ' null',
//            'observacao' => Schema::TYPE_TEXT . ' null',
//            'ativo' => Schema::TYPE_BOOLEAN . ' not null default TRUE',
//            'data_cadastro' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_cadastro_id' => Schema::TYPE_INTEGER . ' null',
//            'data_alteracao' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_alteracao_id' => Schema::TYPE_INTEGER . ' null',
//        ], $tableOptions);
//        
//        $this->addForeignKey('usu_usucad_fk', 'usuario',
//            'usuario_cadastro_id', 'usuario', 'id');
//
//        $this->addForeignKey('usu_usualt_fk', 'usuario',
//            'usuario_alteracao_id', 'usuario', 'id');
//        
////        LOCALIZACAO
//        
//        $this->createTable('localizacao',
//        [
//            'id' => Schema::TYPE_PK,
//            'nome' => Schema::TYPE_STRING . ' not null',
//            'cep' => Schema::TYPE_STRING . ' not null',
//            'bairro' => Schema::TYPE_STRING . ' not null',
//            'cidade' => Schema::TYPE_STRING . ' not null',
//            'estado' => Schema::TYPE_STRING . ' not null',
//            'pais' => Schema::TYPE_STRING . ' not null',
//            'observacao' => Schema::TYPE_TEXT . ' null',
//            'ativo' => Schema::TYPE_BOOLEAN . ' not null default TRUE',
//            'data_cadastro' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_cadastro_id' => Schema::TYPE_INTEGER . ' null',
//            'data_alteracao' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_alteracao_id' => Schema::TYPE_INTEGER . ' null'
//        ], $tableOptions);  
//        
//        $this->addForeignKey('loc_usucad_fk', 'localizacao',
//            'usuario_cadastro_id', 'usuario', 'id');
//
//        $this->addForeignKey('loc_usualt_fk', 'localizacao',
//            'usuario_alteracao_id', 'usuario', 'id');
//        
////        UNIDADE ADMINISTRATIVA
//        
//        $this->createTable('unidade_administrativa',
//        [
//            'id' => Schema::TYPE_PK,
//            'nome' => Schema::TYPE_STRING . ' not null',
//            'localizacao_id' => Schema::TYPE_INTEGER . ' not null',
//            'departamento_responsavel_id' => Schema::TYPE_INTEGER . ' null',
//            'descricao' => Schema::TYPE_TEXT . ' null',
//            'ativo' => Schema::TYPE_BOOLEAN . ' not null default TRUE',
//            'data_cadastro' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_cadastro_id' => Schema::TYPE_INTEGER . ' null',
//            'data_alteracao' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_alteracao_id' => Schema::TYPE_INTEGER . ' null'
//        ], $tableOptions);     
//        
//        $this->addForeignKey('uniadm_loc_fk', 'unidade_administrativa',
//            'localizacao_id', 'localizacao', 'id');
//
//        $this->addForeignKey('uniadm_usucad_fk', 'unidade_administrativa',
//            'usuario_cadastro_id', 'usuario', 'id');
//
//        $this->addForeignKey('uniadm_usualt_fk', 'unidade_administrativa',
//            'usuario_alteracao_id', 'usuario', 'id');
//
////        PREDIO
//        
//        $this->createTable('predio',
//        [
//            'id' => Schema::TYPE_PK,
//            'nome' => Schema::TYPE_STRING . ' not null',
//            'unidade_administrativa_id' => Schema::TYPE_INTEGER . ' not null',
//            'endereco' => Schema::TYPE_TEXT . ' not null',
//            'numero' => Schema::TYPE_INTEGER . ' null',
//            'descricao' => Schema::TYPE_TEXT . ' null',
//            'ativo' => Schema::TYPE_BOOLEAN . ' not null default TRUE',
//            'data_cadastro' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_cadastro_id' => Schema::TYPE_INTEGER . ' null',
//            'data_alteracao' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_alteracao_id' => Schema::TYPE_INTEGER . ' null'
//        ], $tableOptions);
//        
//        $this->addForeignKey('pre_uniadm_fk', 'predio',
//            'unidade_administrativa_id', 'unidade_administrativa', 'id');
//
//        $this->addForeignKey('pre_usucad_fk', 'predio',
//            'usuario_cadastro_id', 'usuario', 'id');
//
//        $this->addForeignKey('pre_usualt_fk', 'predio',
//            'usuario_alteracao_id', 'usuario', 'id');
//        
//        //      SALA
//        
//        $this->createTable('sala',
//        [
//            'id' => Schema::TYPE_PK,
//            'numero' => Schema::TYPE_INTEGER . ' not null',
//            'predio_id' => Schema::TYPE_INTEGER . ' not null',
//            'descricao' => Schema::TYPE_TEXT . ' null',
//            'ativo' => Schema::TYPE_BOOLEAN . ' not null default TRUE',
//            'data_cadastro' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_cadastro_id' => Schema::TYPE_INTEGER . ' null',
//            'data_alteracao' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_alteracao_id' => Schema::TYPE_INTEGER . ' null'
//        ], $tableOptions);
//        
//        $this->addForeignKey('sal_pred_fk', 'sala',
//            'predio_id', 'predio', 'id');
//
//        $this->addForeignKey('sal_usucad_fk', 'sala',
//            'usuario_cadastro_id', 'usuario', 'id');
//
//        $this->addForeignKey('sal_usualt_fk', 'sala',
//            'usuario_alteracao_id', 'usuario', 'id');
//        
////        DEPARTAMENTO 
//        
//        $this->createTable('departamento',
//        [
//            'id' => Schema::TYPE_PK,
//            'nome' => Schema::TYPE_STRING . ' not null',
//            'sala_id' => Schema::TYPE_INTEGER . ' not null',
//            'descricao' => Schema::TYPE_TEXT . ' null',
//            'ativo' => Schema::TYPE_BOOLEAN . ' not null default TRUE',
//            'data_cadastro' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_cadastro_id' => Schema::TYPE_INTEGER . ' null',
//            'data_alteracao' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_alteracao_id' => Schema::TYPE_INTEGER . ' null'
//        ], $tableOptions);
//        
//        $this->addForeignKey('dep_sal_fk', 'departamento',
//            'sala_id', 'sala', 'id');
//
//        $this->addForeignKey('dep_usucad_fk', 'departamento',
//            'usuario_cadastro_id', 'usuario', 'id');
//
//        $this->addForeignKey('dep_usualt_fk', 'departamento',
//            'usuario_alteracao_id', 'usuario', 'id');
//        
////      FK UNIDADE ADMINISTRATIVA
//        
//        $this->addForeignKey('uniadm_depres_fk', 'unidade_administrativa',
//            'departamento_responsavel_id', 'departamento', 'id');
//        
////      FK USUARIO        
//        
//        $this->addForeignKey('usu_dep_fk', 'usuario',
//            'departamento_id', 'departamento', 'id');
//        
////        GRUPO MATERIAL
//        
//        $this->createTable('grupo_material',
//        [
//            'id' => Schema::TYPE_PK,
//            'nome' => Schema::TYPE_STRING . ' not null',
//            'descricao' => Schema::TYPE_TEXT . ' null',
//            'ativo' => Schema::TYPE_BOOLEAN . ' not null default TRUE',
//            'data_cadastro' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_cadastro_id' => Schema::TYPE_INTEGER . ' null',
//            'data_alteracao' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_alteracao_id' => Schema::TYPE_INTEGER . ' null'
//        ], $tableOptions);
//        
//        $this->addForeignKey('grumat_usucad_fk', 'grupo_material',
//            'usuario_cadastro_id', 'usuario', 'id');
//
//        $this->addForeignKey('grumat_usualt_fk', 'grupo_material',
//            'usuario_alteracao_id', 'usuario', 'id');
//        
////        BEM PATRIMONIAL
//        
//        $this->createTable('bem_patrimonial',
//        [
//            'id' => Schema::TYPE_PK,
//            'numero_tombamento' => Schema::TYPE_INTEGER . ' not null',
//            'nome' => Schema::TYPE_STRING . ' not null',
//            'departamento_id' => Schema::TYPE_INTEGER . ' not null',
//            'sala_id' => Schema::TYPE_INTEGER . ' not null',
//            'grupo_material_id' => Schema::TYPE_INTEGER . ' not null',
//            'descricao' => Schema::TYPE_TEXT . ' null',
//            'status' => Schema::TYPE_STRING . ' not null',
//            'denominacao' => Schema::TYPE_STRING . ' null',
//            'marca' => Schema::TYPE_TEXT . ' not null',
//            'preco' => Schema::TYPE_MONEY . ' not null',
//            'data_aquisicao' => Schema::TYPE_TIMESTAMP . ' not null',
//            'observacao' => Schema::TYPE_TEXT . ' null',
//            'ativo' => Schema::TYPE_BOOLEAN . ' not null default TRUE',
//            'data_cadastro' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_cadastro_id' => Schema::TYPE_INTEGER . ' null',
//            'data_alteracao' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_alteracao_id' => Schema::TYPE_INTEGER . ' null'
//        ], $tableOptions);
//        
//        $this->addForeignKey('bempat_dep_fk', 'bem_patrimonial',
//            'departamento_id', 'departamento', 'id');
//
//        $this->addForeignKey('bempat_sal_fk', 'bem_patrimonial',
//            'sala_id', 'sala', 'id');
//
//        $this->addForeignKey('bempat_grumat_fk', 'bem_patrimonial',
//            'grupo_material_id', 'grupo_material', 'id');
//        
//        $this->addForeignKey('bempat_usucad_fk', 'bem_patrimonial',
//            'usuario_cadastro_id', 'usuario', 'id');
//
//        $this->addForeignKey('bempat_usualt_fk', 'bem_patrimonial',
//            'usuario_alteracao_id', 'usuario', 'id');
//        
////        MOVIMENTAÇÃO DE BENS PATRIMONIAIS
//        
//        $this->createTable('movimentacao',
//        [
//            'id' => Schema::TYPE_PK,
//            'patrimonio_id' => Schema::TYPE_INTEGER . ' not null',
//            'status' => Schema::TYPE_STRING . ' not null',
//            'departamento_origem_id' => Schema::TYPE_INTEGER . ' not null',
//            'data_autorizacao_origem' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_origem_id' => Schema::TYPE_INTEGER . ' null',
//            'departamento_destino_id' => Schema::TYPE_INTEGER . ' not null',
//            'sala_destino_id' => Schema::TYPE_INTEGER . ' null',
//            'data_autorizacao_destino' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_destino_id' => Schema::TYPE_INTEGER . ' null',
//            'ativo' => Schema::TYPE_BOOLEAN . ' not null default TRUE',
//            'data_cadastro' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_cadastro_id' => Schema::TYPE_INTEGER . ' null',
//            'data_alteracao' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_alteracao_id' => Schema::TYPE_INTEGER . ' null'
//        ], $tableOptions);
//        
//        $this->addForeignKey('mov_pat_fk', 'movimentacao',
//            'patrimonio_id', 'bem_patrimonial', 'id');
//
//        $this->addForeignKey('mov_depori_fk', 'movimentacao',
//            'departamento_origem_id', 'departamento', 'id');
//
//        $this->addForeignKey('mov_usuori_fk', 'movimentacao',
//            'usuario_origem_id', 'usuario', 'id');
//        
//        $this->addForeignKey('mov_depdes_fk', 'movimentacao',
//            'departamento_destino_id', 'departamento', 'id');
//
//        $this->addForeignKey('mov_saldes_fk', 'movimentacao',
//            'sala_destino_id', 'sala', 'id');
//
//        $this->addForeignKey('mov_usudes_fk', 'movimentacao',
//            'usuario_destino_id', 'usuario', 'id');
//
//        $this->addForeignKey('mov_usucad_fk', 'movimentacao',
//            'usuario_cadastro_id', 'usuario', 'id');
//
//        $this->addForeignKey('mov_usualt_fk', 'movimentacao',
//            'usuario_alteracao_id', 'usuario', 'id');
//        
////        ORDEM DE SERVIÇO
//        
//        $this->createTable('ordem_servico',
//        [
//            'id' => Schema::TYPE_PK,
//            'patrimonio_id' => Schema::TYPE_INTEGER . ' not null',
//            'status' => Schema::TYPE_STRING . ' not null',
//            'numero' => Schema::TYPE_INTEGER . ' not null',
//            'motivo' => Schema::TYPE_TEXT . ' not null',
//            'nome_prestadora' => Schema::TYPE_TEXT . ' null',
//            'data_devolucao' => Schema::TYPE_TIMESTAMP . ' null',
//            'preco' => Schema::TYPE_MONEY . ' null',
//            'ativo' => Schema::TYPE_BOOLEAN . ' not null default TRUE',
//            'data_cadastro' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_cadastro_id' => Schema::TYPE_INTEGER . ' null',
//            'data_alteracao' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_alteracao_id' => Schema::TYPE_INTEGER . ' null'
//        ], $tableOptions);
//        
//        $this->addForeignKey('ordser_pat_fk', 'ordem_servico',
//            'patrimonio_id', 'bem_patrimonial', 'id');
//        
//        $this->addForeignKey('ordser_usucad_fk', 'ordem_servico',
//            'usuario_cadastro_id', 'usuario', 'id');
//
//        $this->addForeignKey('ordser_usualt_fk', 'ordem_servico',
//            'usuario_alteracao_id', 'usuario', 'id');
//        
////        BAIXA DE BEM
//        
//        $this->createTable('baixa_bem',
//        [
//            'id' => Schema::TYPE_PK,
//            'patrimonio_id' => Schema::TYPE_INTEGER . ' not null',
//            'motivo' => Schema::TYPE_STRING . ' not null',
//            'data_baixa' => Schema::TYPE_TIMESTAMP . ' not null',
//            'observacao' => Schema::TYPE_TEXT . ' null',
//            'ativo' => Schema::TYPE_BOOLEAN . ' not null default TRUE',
//            'data_cadastro' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_cadastro_id' => Schema::TYPE_INTEGER . ' null',
//            'data_alteracao' => Schema::TYPE_TIMESTAMP . ' null',
//            'usuario_alteracao_id' => Schema::TYPE_INTEGER . ' null'
//        ], $tableOptions);
//        
//        $this->addForeignKey('baibem_pat_fk', 'baixa_bem',
//            'patrimonio_id', 'bem_patrimonial', 'id');
//        
//        $this->addForeignKey('baibem_usucad_fk', 'baixa_bem',
//            'usuario_cadastro_id', 'usuario', 'id');
//
//        $this->addForeignKey('baibem_usualt_fk', 'baixa_bem',
//            'usuario_alteracao_id', 'usuario', 'id');

        $sql = <<<SQL
                
            -- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: integracao
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.16.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `baixa_bem`
--

DROP TABLE IF EXISTS `baixa_bem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `baixa_bem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patrimonio_id` int(11) NOT NULL,
  `motivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_baixa` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `observacao` text COLLATE utf8_unicode_ci,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_cadastro` timestamp NULL DEFAULT NULL,
  `usuario_cadastro_id` int(11) DEFAULT NULL,
  `data_alteracao` timestamp NULL DEFAULT NULL,
  `usuario_alteracao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `baibem_pat_fk` (`patrimonio_id`),
  KEY `baibem_usucad_fk` (`usuario_cadastro_id`),
  KEY `baibem_usualt_fk` (`usuario_alteracao_id`),
  CONSTRAINT `baibem_pat_fk` FOREIGN KEY (`patrimonio_id`) REFERENCES `bem_patrimonial` (`id`),
  CONSTRAINT `baibem_usualt_fk` FOREIGN KEY (`usuario_alteracao_id`) REFERENCES `usuario` (`id`),
  CONSTRAINT `baibem_usucad_fk` FOREIGN KEY (`usuario_cadastro_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `baixa_bem`
--

LOCK TABLES `baixa_bem` WRITE;
/*!40000 ALTER TABLE `baixa_bem` DISABLE KEYS */;
/*!40000 ALTER TABLE `baixa_bem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bem_patrimonial`
--

DROP TABLE IF EXISTS `bem_patrimonial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bem_patrimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_tombamento` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `departamento_id` int(11) NOT NULL,
  `sala_id` int(11) NOT NULL,
  `grupo_material_id` int(11) NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `denominacao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `marca` text COLLATE utf8_unicode_ci NOT NULL,
  `preco` decimal(19,4) NOT NULL,
  `data_aquisicao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `observacao` text COLLATE utf8_unicode_ci,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_cadastro` timestamp NULL DEFAULT NULL,
  `usuario_cadastro_id` int(11) DEFAULT NULL,
  `data_alteracao` timestamp NULL DEFAULT NULL,
  `usuario_alteracao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bempat_dep_fk` (`departamento_id`),
  KEY `bempat_sal_fk` (`sala_id`),
  KEY `bempat_grumat_fk` (`grupo_material_id`),
  KEY `bempat_usucad_fk` (`usuario_cadastro_id`),
  KEY `bempat_usualt_fk` (`usuario_alteracao_id`),
  CONSTRAINT `bempat_dep_fk` FOREIGN KEY (`departamento_id`) REFERENCES `departamento` (`id`),
  CONSTRAINT `bempat_grumat_fk` FOREIGN KEY (`grupo_material_id`) REFERENCES `grupo_material` (`id`),
  CONSTRAINT `bempat_sal_fk` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`),
  CONSTRAINT `bempat_usualt_fk` FOREIGN KEY (`usuario_alteracao_id`) REFERENCES `usuario` (`id`),
  CONSTRAINT `bempat_usucad_fk` FOREIGN KEY (`usuario_cadastro_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bem_patrimonial`
--

LOCK TABLES `bem_patrimonial` WRITE;
/*!40000 ALTER TABLE `bem_patrimonial` DISABLE KEYS */;
INSERT INTO `bem_patrimonial` VALUES (1,19292,'Computador i7',1,1,1,'','Ativo','CAS','Intel',3.9000,'2019-02-12 01:14:45','',1,NULL,NULL,NULL,NULL),(2,19293,'Projetor HP 200S',1,1,1,'','Ativo','CAS','HP',2.7990,'2019-02-12 01:15:45','',1,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `bem_patrimonial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamento`
--

DROP TABLE IF EXISTS `departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sala_id` int(11) NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_cadastro` timestamp NULL DEFAULT NULL,
  `usuario_cadastro_id` int(11) DEFAULT NULL,
  `data_alteracao` timestamp NULL DEFAULT NULL,
  `usuario_alteracao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dep_sal_fk` (`sala_id`),
  KEY `dep_usucad_fk` (`usuario_cadastro_id`),
  KEY `dep_usualt_fk` (`usuario_alteracao_id`),
  CONSTRAINT `dep_sal_fk` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`),
  CONSTRAINT `dep_usualt_fk` FOREIGN KEY (`usuario_alteracao_id`) REFERENCES `usuario` (`id`),
  CONSTRAINT `dep_usucad_fk` FOREIGN KEY (`usuario_cadastro_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` VALUES (1,'Tecnologia da Informação',1,'',1,NULL,NULL,NULL,NULL),(2,'Secretaria',5,'',1,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupo_material`
--

DROP TABLE IF EXISTS `grupo_material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupo_material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_cadastro` timestamp NULL DEFAULT NULL,
  `usuario_cadastro_id` int(11) DEFAULT NULL,
  `data_alteracao` timestamp NULL DEFAULT NULL,
  `usuario_alteracao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `grumat_usucad_fk` (`usuario_cadastro_id`),
  KEY `grumat_usualt_fk` (`usuario_alteracao_id`),
  CONSTRAINT `grumat_usualt_fk` FOREIGN KEY (`usuario_alteracao_id`) REFERENCES `usuario` (`id`),
  CONSTRAINT `grumat_usucad_fk` FOREIGN KEY (`usuario_cadastro_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo_material`
--

LOCK TABLES `grupo_material` WRITE;
/*!40000 ALTER TABLE `grupo_material` DISABLE KEYS */;
INSERT INTO `grupo_material` VALUES (1,'Informática','Informática',1,NULL,NULL,NULL,NULL),(2,'Papelaria','Papelaria',1,NULL,NULL,NULL,NULL),(3,'Marcenaria','Marcenaria',1,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `grupo_material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `localizacao`
--

DROP TABLE IF EXISTS `localizacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `localizacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `observacao` text COLLATE utf8_unicode_ci,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_cadastro` timestamp NULL DEFAULT NULL,
  `usuario_cadastro_id` int(11) DEFAULT NULL,
  `data_alteracao` timestamp NULL DEFAULT NULL,
  `usuario_alteracao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `loc_usucad_fk` (`usuario_cadastro_id`),
  KEY `loc_usualt_fk` (`usuario_alteracao_id`),
  CONSTRAINT `loc_usualt_fk` FOREIGN KEY (`usuario_alteracao_id`) REFERENCES `usuario` (`id`),
  CONSTRAINT `loc_usucad_fk` FOREIGN KEY (`usuario_cadastro_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `localizacao`
--

LOCK TABLES `localizacao` WRITE;
/*!40000 ALTER TABLE `localizacao` DISABLE KEYS */;
INSERT INTO `localizacao` VALUES (1,'Campus Samambaia','74690-900','Chácaras de Recreio Samambaia','Goiânia','Goiás','Brasil','Campus Samambaia - 2',1,NULL,NULL,NULL,NULL),(2,'Campus Colemar Natal e silva','74001-970','Setor Leste Universitário','Goiânia','Goiás','Brasil','Campus Colemar - 1',1,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `localizacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movimentacao`
--

DROP TABLE IF EXISTS `movimentacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movimentacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patrimonio_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `departamento_origem_id` int(11) NOT NULL,
  `data_autorizacao_origem` timestamp NULL DEFAULT NULL,
  `usuario_origem_id` int(11) DEFAULT NULL,
  `departamento_destino_id` int(11) NOT NULL,
  `sala_destino_id` int(11) DEFAULT NULL,
  `data_autorizacao_destino` timestamp NULL DEFAULT NULL,
  `usuario_destino_id` int(11) DEFAULT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_cadastro` timestamp NULL DEFAULT NULL,
  `usuario_cadastro_id` int(11) DEFAULT NULL,
  `data_alteracao` timestamp NULL DEFAULT NULL,
  `usuario_alteracao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mov_pat_fk` (`patrimonio_id`),
  KEY `mov_depori_fk` (`departamento_origem_id`),
  KEY `mov_usuori_fk` (`usuario_origem_id`),
  KEY `mov_depdes_fk` (`departamento_destino_id`),
  KEY `mov_saldes_fk` (`sala_destino_id`),
  KEY `mov_usudes_fk` (`usuario_destino_id`),
  KEY `mov_usucad_fk` (`usuario_cadastro_id`),
  KEY `mov_usualt_fk` (`usuario_alteracao_id`),
  CONSTRAINT `mov_depdes_fk` FOREIGN KEY (`departamento_destino_id`) REFERENCES `departamento` (`id`),
  CONSTRAINT `mov_depori_fk` FOREIGN KEY (`departamento_origem_id`) REFERENCES `departamento` (`id`),
  CONSTRAINT `mov_pat_fk` FOREIGN KEY (`patrimonio_id`) REFERENCES `bem_patrimonial` (`id`),
  CONSTRAINT `mov_saldes_fk` FOREIGN KEY (`sala_destino_id`) REFERENCES `sala` (`id`),
  CONSTRAINT `mov_usualt_fk` FOREIGN KEY (`usuario_alteracao_id`) REFERENCES `usuario` (`id`),
  CONSTRAINT `mov_usucad_fk` FOREIGN KEY (`usuario_cadastro_id`) REFERENCES `usuario` (`id`),
  CONSTRAINT `mov_usudes_fk` FOREIGN KEY (`usuario_destino_id`) REFERENCES `usuario` (`id`),
  CONSTRAINT `mov_usuori_fk` FOREIGN KEY (`usuario_origem_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movimentacao`
--

LOCK TABLES `movimentacao` WRITE;
/*!40000 ALTER TABLE `movimentacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `movimentacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordem_servico`
--

DROP TABLE IF EXISTS `ordem_servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ordem_servico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patrimonio_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `motivo` text COLLATE utf8_unicode_ci NOT NULL,
  `nome_prestadora` text COLLATE utf8_unicode_ci,
  `data_devolucao` timestamp NULL DEFAULT NULL,
  `preco` decimal(19,4) DEFAULT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_cadastro` timestamp NULL DEFAULT NULL,
  `usuario_cadastro_id` int(11) DEFAULT NULL,
  `data_alteracao` timestamp NULL DEFAULT NULL,
  `usuario_alteracao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ordser_pat_fk` (`patrimonio_id`),
  KEY `ordser_usucad_fk` (`usuario_cadastro_id`),
  KEY `ordser_usualt_fk` (`usuario_alteracao_id`),
  CONSTRAINT `ordser_pat_fk` FOREIGN KEY (`patrimonio_id`) REFERENCES `bem_patrimonial` (`id`),
  CONSTRAINT `ordser_usualt_fk` FOREIGN KEY (`usuario_alteracao_id`) REFERENCES `usuario` (`id`),
  CONSTRAINT `ordser_usucad_fk` FOREIGN KEY (`usuario_cadastro_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordem_servico`
--

LOCK TABLES `ordem_servico` WRITE;
/*!40000 ALTER TABLE `ordem_servico` DISABLE KEYS */;
INSERT INTO `ordem_servico` VALUES (2,1,'2',191,'Formatação urgente','INF - OS','2019-02-01 02:00:00',23.0000,1,NULL,NULL,NULL,NULL),(3,2,'2',192,'Configuração','INF - OS','2019-02-12 02:00:00',2000.0000,1,NULL,NULL,NULL,NULL),(4,1,'1',193,'Upgrade na Memória','HighTeck',NULL,NULL,1,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `ordem_servico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `predio`
--

DROP TABLE IF EXISTS `predio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `predio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unidade_administrativa_id` int(11) NOT NULL,
  `endereco` text COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `descricao` text COLLATE utf8_unicode_ci,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_cadastro` timestamp NULL DEFAULT NULL,
  `usuario_cadastro_id` int(11) DEFAULT NULL,
  `data_alteracao` timestamp NULL DEFAULT NULL,
  `usuario_alteracao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pre_uniadm_fk` (`unidade_administrativa_id`),
  KEY `pre_usucad_fk` (`usuario_cadastro_id`),
  KEY `pre_usualt_fk` (`usuario_alteracao_id`),
  CONSTRAINT `pre_uniadm_fk` FOREIGN KEY (`unidade_administrativa_id`) REFERENCES `unidade_administrativa` (`id`),
  CONSTRAINT `pre_usualt_fk` FOREIGN KEY (`usuario_alteracao_id`) REFERENCES `usuario` (`id`),
  CONSTRAINT `pre_usucad_fk` FOREIGN KEY (`usuario_cadastro_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `predio`
--

LOCK TABLES `predio` WRITE;
/*!40000 ALTER TABLE `predio` DISABLE KEYS */;
INSERT INTO `predio` VALUES (1,'INF',1,'Alameda Palmeiras',0,'',1,NULL,NULL,NULL,NULL),(2,'Direito - Biblioteca Secional',2,'Praça Universitária',0,'',1,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `predio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sala`
--

DROP TABLE IF EXISTS `sala`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sala` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) NOT NULL,
  `predio_id` int(11) NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_cadastro` timestamp NULL DEFAULT NULL,
  `usuario_cadastro_id` int(11) DEFAULT NULL,
  `data_alteracao` timestamp NULL DEFAULT NULL,
  `usuario_alteracao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sal_pred_fk` (`predio_id`),
  KEY `sal_usucad_fk` (`usuario_cadastro_id`),
  KEY `sal_usualt_fk` (`usuario_alteracao_id`),
  CONSTRAINT `sal_pred_fk` FOREIGN KEY (`predio_id`) REFERENCES `predio` (`id`),
  CONSTRAINT `sal_usualt_fk` FOREIGN KEY (`usuario_alteracao_id`) REFERENCES `usuario` (`id`),
  CONSTRAINT `sal_usucad_fk` FOREIGN KEY (`usuario_cadastro_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sala`
--

LOCK TABLES `sala` WRITE;
/*!40000 ALTER TABLE `sala` DISABLE KEYS */;
INSERT INTO `sala` VALUES (1,152,1,'',1,NULL,NULL,NULL,NULL),(2,153,1,'',1,NULL,NULL,NULL,NULL),(3,154,1,'',1,NULL,NULL,NULL,NULL),(4,220,2,'',1,NULL,NULL,NULL,NULL),(5,319,2,'',1,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `sala` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unidade_administrativa`
--

DROP TABLE IF EXISTS `unidade_administrativa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unidade_administrativa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `localizacao_id` int(11) NOT NULL,
  `departamento_responsavel_id` int(11) DEFAULT NULL,
  `descricao` text COLLATE utf8_unicode_ci,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_cadastro` timestamp NULL DEFAULT NULL,
  `usuario_cadastro_id` int(11) DEFAULT NULL,
  `data_alteracao` timestamp NULL DEFAULT NULL,
  `usuario_alteracao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `uniadm_loc_fk` (`localizacao_id`),
  KEY `uniadm_usucad_fk` (`usuario_cadastro_id`),
  KEY `uniadm_usualt_fk` (`usuario_alteracao_id`),
  KEY `uniadm_depres_fk` (`departamento_responsavel_id`),
  CONSTRAINT `uniadm_depres_fk` FOREIGN KEY (`departamento_responsavel_id`) REFERENCES `departamento` (`id`),
  CONSTRAINT `uniadm_loc_fk` FOREIGN KEY (`localizacao_id`) REFERENCES `localizacao` (`id`),
  CONSTRAINT `uniadm_usualt_fk` FOREIGN KEY (`usuario_alteracao_id`) REFERENCES `usuario` (`id`),
  CONSTRAINT `uniadm_usucad_fk` FOREIGN KEY (`usuario_cadastro_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unidade_administrativa`
--

LOCK TABLES `unidade_administrativa` WRITE;
/*!40000 ALTER TABLE `unidade_administrativa` DISABLE KEYS */;
INSERT INTO `unidade_administrativa` VALUES (1,'Instituto de Informática',1,NULL,'Instituto de Informática',1,NULL,NULL,NULL,NULL),(2,'Direito',2,NULL,'Direito',1,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `unidade_administrativa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `departamento_id` int(11) DEFAULT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observacao` text COLLATE utf8_unicode_ci,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_cadastro` timestamp NULL DEFAULT NULL,
  `usuario_cadastro_id` int(11) DEFAULT NULL,
  `data_alteracao` timestamp NULL DEFAULT NULL,
  `usuario_alteracao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usu_usucad_fk` (`usuario_cadastro_id`),
  KEY `usu_usualt_fk` (`usuario_alteracao_id`),
  KEY `usu_dep_fk` (`departamento_id`),
  CONSTRAINT `usu_dep_fk` FOREIGN KEY (`departamento_id`) REFERENCES `departamento` (`id`),
  CONSTRAINT `usu_usualt_fk` FOREIGN KEY (`usuario_alteracao_id`) REFERENCES `usuario` (`id`),
  CONSTRAINT `usu_usucad_fk` FOREIGN KEY (`usuario_cadastro_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Elias Vaz','Administrador de Seção',NULL,'admin','admin@invscp.com.br','admin','Ativo','','Administrador de Seção',1,NULL,NULL,NULL,NULL),(2,'Jhordan Gabriel','Chefe de Departamento',NULL,'chefe','chefe@invscp.com.br','chefe','Ativo','','Chefe de Seção',1,NULL,NULL,NULL,NULL),(3,'Paulo Freitas','Funcionário',NULL,'funcionario','funcionario@invscp.com.br','funcionario','Ativo','','Funcionário',1,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'integracao'
--

--
-- Dumping routines for database 'integracao'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-12  1:00:29
                
SQL;
        
        $this->execute($sql);
        
        return true;
    }

    public function safeDown()
    {
        return true;
    }
}
