# Instruções de Instalação do Banco de Dados Banco_Intra

Este documento fornece as instruções para criar o banco de dados `Banco_Intra` juntamente com suas tabelas usando MySQL Workbench ou qualquer outro cliente de banco de dados compatível.

## Passos para Instalação:

1.  **Abra o MySQL Workbench:**

    - Inicie o MySQL Workbench ou qualquer outro cliente de banco de dados MySQL que você esteja usando.

2.  **Conecte-se ao Servidor MySQL:**

    - Faça login no servidor MySQL com as credenciais adequadas.

3.  **Crie o Banco de Dados:**

        - Copie e cole o seguinte código SQL no MySQL Workbench e execute para criar o banco de dados `Banco_Intra` juntamente com as tabelas `clients` e `movements`:


            ```sql
            CREATE DATABASE IF NOT EXISTS `banco_intra` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

            USE `banco_intra`;

            -- Tabela 'clients'
            CREATE TABLE `clients` (

        `id_client` int(11) NOT NULL,
        `name` varchar(145) DEFAULT NULL,
        `email` varchar(145) DEFAULT NULL,
        `password` varchar(145) DEFAULT NULL,
        `balance` decimal(12,2) DEFAULT NULL,
        `profession` varchar(145) DEFAULT NULL,
        `date` date DEFAULT current_timestamp(),
        `active` tinyint(1) DEFAULT 1,
        PRIMARY KEY (`id_client`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

            -- Tabela 'movements'
            CREATE TABLE `movements` (

    `id_movement` int(11) NOT NULL AUTO_INCREMENT,
    `description` varchar(145) DEFAULT NULL,
    `value` varchar(145) DEFAULT NULL,
    `date` date DEFAULT current_timestamp(),
    `id_client` int(11) DEFAULT NULL,
    `type` varchar(45) DEFAULT NULL,
    `active` tinyint(1) DEFAULT 1,
    PRIMARY KEY (`id_movement`)
    ) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

            ```

4.  **Verifique a Execução:**
    - Após executar o código SQL, verifique se o banco de dados `Banco_Intra` foi criado com sucesso junto com as tabelas `clients` e `movements`.

Estas são as etapas básicas para criar o banco de dados e as tabelas necessárias para o funcionamento do sistema Banco_Intra. Certifique-se de que as permissões e configurações do seu banco de dados estão adequadas para executar esses comandos.

Se houver algum problema durante a execução desses comandos SQL ou se você enfrentar algum erro, verifique as permissões, conexão com o banco de dados e a sintaxe do código SQL.
