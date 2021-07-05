<?php

    class Usuarios {

        public static function mudarSenha($senhas){
            $idUsuarioAtual = descripto($_SESSION['usuario']);
            
            $sql = new Sql();

            $results = $sql->select("SELECT * FROM tbl_usuarios WHERE idUsuario = :id",[
                ":id" => $idUsuarioAtual
            ]);

            if ($results){
                if ($results[0]['senhaUsuario'] == md5($senhas['senhaAtual'])){
                    
                    $sql->select("UPDATE tbl_usuarios SET senhaUsuario = :senha WHERE idUsuario = :id",[
                        ":id" => $idUsuarioAtual,
                        ":senha" => md5($senhas['novaSenha'])
                    ]);

                    session_destroy();

                    header("Location: /login?msg=3");
                } else {
                    header("Location: /alterarsenha?msg=1");
                }
            } else {
                header("Location: /login");
            }

            exit;
        }

        public static function verificaAutenticacao(){
            if (isset($_SESSION['usuario']) && $_SESSION['usuario'] != ''){
               $sql = new Sql();
               $results = $sql->select("SELECT * FROM tbl_usuarios WHERE idUsuario = :id",[
                   ":id" => descripto($_SESSION['usuario'])
               ]);
               if (!$results){
                header("Location: /login");
               }
            } else {
                header("Location: /login");
            }
        }
        
        public static function loginUsuario($dados){
            $sql = new Sql();
            $results = $sql->select("SELECT * FROM tbl_usuarios WHERE loginUsuario = :loginUsuario AND senhaUsuario = :senhaUsuario",[
                ":loginUsuario" => $dados['usuarioLogin'],
                ":senhaUsuario" => md5($dados['senhaUsuario'])
            ]);
            if ($results){
                $_SESSION['usuario'] = cripto($results[0]['idUsuario']);
                header("Location: /inicio");
            } else {
                header("Location: /login?msg=1");
            }
        }

    }

?>