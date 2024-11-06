-- Criar o banco de dados
CREATE DATABASE ProjetoTarefas;

-- Usar o banco de dados
USE ProjetoTarefas;

-- Tabela de usuários
CREATE TABLE TBL_USUARIOS (
    Usu_codigo INT PRIMARY KEY AUTO_INCREMENT,
    Usu_nome VARCHAR(100) NOT NULL,
    Usu_email VARCHAR(100) UNIQUE NOT NULL
);

-- Tabela de tarefas
CREATE TABLE TBL_TAREFAS (
    Tar_codigo INT PRIMARY KEY AUTO_INCREMENT,
    Usu_codigo INT,
    Tar_setor VARCHAR(50),
    Tar_prioridade ENUM('Alta', 'Média', 'Baixa'),
    Tar_descricao TEXT,
    Tar_status ENUM('Pendente', 'Em andamento', 'Concluída'),
    FOREIGN KEY (Usu_codigo) REFERENCES TBL_USUARIOS(Usu_codigo)
);
