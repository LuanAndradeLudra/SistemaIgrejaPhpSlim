<?php

class Membros{

    public static function getMembro($id){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tbl_membros WHERE idMembro = :id",[
            ":id" => $id
        ]);
        if ($results){
            return $results[0];
        }
    }

    public static function excluirMembro($id){
        $sql = new Sql();
        $foto = $sql->select("SELECT imgMembro FROM tbl_membros WHERE idMembro = :id",[
            ":id" => $id
        ]);
        if ($foto[0]['imgMembro'] != 'default'){
            Membros::deletarFoto($foto[0]['imgMembro']);
        }
        $results = $sql->select("DELETE FROM tbl_membros WHERE idMembro = :id",[
            ":id" => $id
        ]);

    }

    
    public static function listarMembros(){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tbl_membros ORDER BY idMembro ASC");
        if ($results){
            return $results;
        }
    }

    public static function ultimosMembrosCadastrados(){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tbl_membros ORDER BY idMembro DESC LIMIT 5");
        if ($results){
            return $results;
        }
    }

    public static function proximosAniversariantes(){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tbl_membros WHERE diaDataNascimentoMembro >= :dia AND mesDataNascimentoMembro = :mes ORDER BY diaDataNascimentoMembro ASC LIMIT 3",[
            ":mes" => date("m"),
            ":dia" => date("d")
        ]);
        return $results;
    }

    public static function getAniversariantesMesEscolhido($mes){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tbl_membros WHERE mesDataNascimentoMembro = :mes ORDER BY dataNascimentoMembro ASC",[
            ":mes" => $mes
        ]);
        return $results;
    }

    public static function proximosAniversariantesCasamento(){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tbl_membros WHERE diaDataCasamentoMembro >= :dia AND mesDataCasamentoMembro = :mes ORDER BY diaDataCasamentoMembro ASC LIMIT 3",[
            ":mes" => date("m"),
            ":dia" => date("d")
        ]);
        return $results;
    }

    public static function getAniversariantesCasamentoMesEscolhido($id){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tbl_membros WHERE mesDataCasamentoMembro = :mes ORDER BY dataCasamentoMembro ASC",[
            ":mes" => $id
        ]);
        return $results;
    }

    public static function getObreiros(){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM `tbl_membros` WHERE cargoMinisterialMembro != '' ORDER BY nvlMembro DESC");
        if ($results){
            return $results;
        }
    }

    public static function getObreirosCargo($cargo){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM `tbl_membros` WHERE cargoMinisterialMembro = :cargo ORDER BY nomeMembro ASC",[
            ":cargo" => $cargo
        ]);
        if ($results){
            return $results;
        }
    }

    public static function editarMembro($id, $dados, $file){
        $imgMembro = '';
        if ($_FILES['imgMembro']['name'] == ''){
            $imgMembro = $_POST['imgMembroAntiga'];
        } else {
            $imgMembro = str_replace('.', '_', microtime(true)).".".pathinfo($file['imgMembro']['name'], PATHINFO_EXTENSION);
            Membros::deletarFoto($_POST['imgMembroAntiga']);
            Membros::salvarFoto($file, $imgMembro);
        }

        $nvl = '';

        switch($dados['cargoMinisterialMembro']){
            case "":
                $nvl = '0';
            break;
            case "Pastor (a)":
                $nvl = '5';
            break;
            case "Missionário (a)":
                $nvl = '4';
            break;
            case "Evangelista":
                $nvl = '3';
            break;
            case "Presbitero (a)":
                $nvl = '2';
            break;
            case "Diácono (a)":
                $nvl = '1';
            break;

        }

        $sql = new Sql();
        $sql->select("UPDATE tbl_membros SET 
        imgMembro = :imgMembro,
        aceitoPor = :aceitoPor,
        igrejaProcedente = :igrejaProcedente,
        numeroRegistroMembro = :numeroRegistroMembro,
        dataBatismoMembro = :dataBatismoMembro,
        mesDataBatismoMembro = :mesDataBatismoMembro,
        nomeMembro = :nomeMembro,
        nomePaiMembro = :nomePaiMembro,
        nomeMaeMembro = :nomeMaeMembro,
        dataNascimentoMembro = :dataNascimentoMembro,
        diaDataNascimentoMembro = :diaDataNascimentoMembro,
        mesDataNascimentoMembro = :mesDataNascimentoMembro,
        naturalidadeMembro = :naturalidadeMembro,
        estadoMembro = :estadoMembro,
        nacionalidadeMembro = :nacionalidadeMembro,
        instrucaoMembro = :instrucaoMembro,
        profissaoMembro = :profissaoMembro,
        sexoMembro = :sexoMembro,
        estadoCivilMembro = :estadoCivilMembro,
        dataCasamentoMembro = :dataCasamentoMembro,
        diaDataCasamentoMembro = :diaDataCasamentoMembro,
        mesDataCasamentoMembro = :mesDataCasamentoMembro,
        cpfMembro = :cpfMembro,
        rgMembro = :rgMembro,
        cepMembro = :cepMembro,
        enderecoMembro = :enderecoMembro, 
        bairroMembro = :bairroMembro, 
        cidadeMembro = :cidadeMembro, 
        estado2Membro = :estado2Membro ,
        telefoneMembro = :telefoneMembro,
        celularMembro = :celularMembro,
        emailMembro = :emailMembro,
        cargoMinisterialMembro = :cargoMinisterialMembro,
        observacoesMembro = :observacoesMembro,
        nvlMembro = :nvlMembro
        WHERE idMembro = :id",[
            ":id" => $id,
            ":imgMembro" => $imgMembro,
            ":aceitoPor" => $dados['aceitoPor'],
            ":igrejaProcedente" => $dados['igrejaProcedente'],
            ":numeroRegistroMembro" => $dados['numeroRegistroMembro'],
            ":dataBatismoMembro" => $dados['dataBatismoMembro'],
            ":mesDataBatismoMembro" => substr($_POST['dataBatismoMembro'], 3, 2),
            ":nomeMembro" => $dados['nomeMembro'],
            ":nomePaiMembro" => $dados['nomePaiMembro'],
            ":nomeMaeMembro" => $dados['nomeMaeMembro'],
            ":dataNascimentoMembro" => $dados['dataNascimentoMembro'],
            ":diaDataNascimentoMembro" => substr($_POST['dataNascimentoMembro'], 0, 2),
            ":mesDataNascimentoMembro" => substr($_POST['dataNascimentoMembro'], 3, 2),
            ":naturalidadeMembro" => $dados['naturalidadeMembro'],
            ":estadoMembro" => $dados['estadoMembro'], 
            ":nacionalidadeMembro" => $dados['nacionalidadeMembro'], 
            ":instrucaoMembro" => $dados['instrucaoMembro'], 
            ":profissaoMembro" => $dados['profissaoMembro'], 
            ":sexoMembro" => $dados['sexoMembro'], 
            ":estadoCivilMembro" => $dados['estadoCivilMembro'],
            ":dataCasamentoMembro" => $dados['dataCasamentoMembro'],
            ":diaDataCasamentoMembro" => substr($_POST['dataCasamentoMembro'], 0, 2),
            ":mesDataCasamentoMembro" => substr($_POST['dataCasamentoMembro'], 3, 2), 
            ":cpfMembro" => $dados['cpfMembro'], 
            ":rgMembro" => $dados['rgMembro'], 
            ":cepMembro" => $dados['cepMembro'], 
            ":enderecoMembro" => $dados['enderecoMembro'], 
            ":bairroMembro" => $dados['bairroMembro'], 
            ":cidadeMembro" => $dados['cidadeMembro'], 
            ":estado2Membro" => $dados['estado2Membro'], 
            ":telefoneMembro" => $dados['telefoneMembro'], 
            ":celularMembro" => $dados['celularMembro'], 
            ":emailMembro" => $dados['emailMembro'], 
            ":cargoMinisterialMembro" => $dados['cargoMinisterialMembro'], 
            ":observacoesMembro" => $_POST['observacoesMembro'],
            ":nvlMembro" => $nvl
        ]);
    }

    public static function cadastrarMembro($dados, $file){

        if ($dados['aceitoPor'] == "Selecione uma opção"){
            $dados['aceitoPor'] = "";
        }

        if ($dados['sexoMembro'] == "Selecione uma opção"){
            $dados['sexoMembro'] = "Masculino";
        }

        if ($dados['estadoCivilMembro'] == "Selecione uma opção"){
            $dados['estadoCivilMembro'] = "Solteiro (a)";
        }

        $nvl = '';

        switch($dados['cargoMinisterialMembro']){
            case "":
                $nvl = '0';
            break;
            case "Pastor (a)":
                $nvl = '5';
            break;
            case "Missionário (a)":
                $nvl = '4';
            break;
            case "Evangelista":
                $nvl = '3';
            break;
            case "Presbitero (a)":
                $nvl = '2';
            break;
            case "Diácono (a)":
                $nvl = '1';
            break;

        }

        $nomeImagem = "";

        if ($file['imgMembro']['name'] != ''){
            $nomeImagem = str_replace('.', '_', microtime(true)).".".pathinfo($file['imgMembro']['name'], PATHINFO_EXTENSION);
            Membros::salvarFoto($file, $nomeImagem);
        } else {
            $nomeImagem = "default";
        }

        $sql = new Sql();
        $sql->select("INSERT INTO tbl_membros 
        (aceitoPor, igrejaProcedente, numeroRegistroMembro, nomeMembro, nomePaiMembro, nomeMaeMembro, naturalidadeMembro, estadoMembro, nacionalidadeMembro, instrucaoMembro, profissaoMembro, sexoMembro, estadoCivilMembro, cpfMembro, rgMembro, cepMembro, enderecoMembro, bairroMembro, cidadeMembro, estado2Membro, telefoneMembro, celularMembro, emailMembro, cargoMinisterialMembro, imgMembro, dataBatismoMembro, mesDataBatismoMembro, dataNascimentoMembro, diaDataNascimentoMembro, mesDataNascimentoMembro, dataCasamentoMembro, diaDataCasamentoMembro, mesDataCasamentoMembro, observacoesMembro, nvlMembro) 
        VALUES 
        (:aceitoPor, :igrejaProcedente, :numeroRegistroMembro, :nomeMembro, :nomePaiMembro, :nomeMaeMembro, :naturalidadeMembro, :estadoMembro, :nacionalidadeMembro, :instrucaoMembro, :profissaoMembro, :sexoMembro, :estadoCivilMembro, :cpfMembro, :rgMembro, :cepMembro, :enderecoMembro, :bairroMembro, :cidadeMembro, :estado2Membro, :telefoneMembro, :celularMembro, :emailMembro, :cargoMinisterialMembro, :imgMembro, :dataBatismoMembro,:mesDataBatismoMembro, :dataNascimentoMembro, :diaDataNascimentoMembro, :mesDataNascimentoMembro, :dataCasamentoMembro, :diaDataCasamentoMembro, :mesDataCasamentoMembro, :observacoesMembro, :nvlMembro)",[
            ":aceitoPor" => $dados['aceitoPor'],
            ":igrejaProcedente" => $dados['igrejaProcedente'],
            ":numeroRegistroMembro" => $dados['numeroRegistroMembro'],
            ":nomeMembro" => $dados['nomeMembro'],
            ":nomePaiMembro" => $dados['nomePaiMembro'],
            ":nomeMaeMembro" => $dados['nomeMaeMembro'],
            ":naturalidadeMembro" => $dados['naturalidadeMembro'],
            ":estadoMembro" => $dados['estadoMembro'], 
            ":nacionalidadeMembro" => $dados['nacionalidadeMembro'], 
            ":instrucaoMembro" => $dados['instrucaoMembro'], 
            ":profissaoMembro" => $dados['profissaoMembro'], 
            ":sexoMembro" => $dados['sexoMembro'], 
            ":estadoCivilMembro" => $dados['estadoCivilMembro'], 
            ":cpfMembro" => $dados['cpfMembro'], 
            ":rgMembro" => $dados['rgMembro'], 
            ":cepMembro" => $dados['cepMembro'], 
            ":enderecoMembro" => $dados['enderecoMembro'], 
            ":bairroMembro" => $dados['bairroMembro'], 
            ":cidadeMembro" => $dados['cidadeMembro'], 
            ":estado2Membro" => $dados['estado2Membro'], 
            ":telefoneMembro" => $dados['telefoneMembro'], 
            ":celularMembro" => $dados['celularMembro'], 
            ":emailMembro" => $dados['emailMembro'], 
            ":cargoMinisterialMembro" => $dados['cargoMinisterialMembro'], 
            ":imgMembro" => $nomeImagem,
            ":dataBatismoMembro" => $_POST['dataBatismoMembro'],
            ":dataNascimentoMembro" => $_POST['dataNascimentoMembro'],
            ":diaDataNascimentoMembro" => substr($_POST['dataNascimentoMembro'], 0, 2),
            ":mesDataBatismoMembro" => substr($_POST['dataBatismoMembro'], 3, 2), 
            ":mesDataNascimentoMembro" => substr($_POST['dataNascimentoMembro'], 3, 2), 
            ":dataCasamentoMembro" => $_POST['dataCasamentoMembro'],
            ":diaDataCasamentoMembro" => substr($_POST['dataCasamentoMembro'], 0, 2),
            ":mesDataCasamentoMembro" => substr($_POST['dataCasamentoMembro'], 3, 2), 
            ":observacoesMembro" => $_POST['observacoesMembro'],
            ":nvlMembro" => $nvl
        ]);

    }

    public static function deletarFoto($foto){
        if (file_exists("app".DIRECTORY_SEPARATOR."res".DIRECTORY_SEPARATOR."imagens".DIRECTORY_SEPARATOR."membros".DIRECTORY_SEPARATOR.$foto)){
           
		unlink("app".DIRECTORY_SEPARATOR."res".DIRECTORY_SEPARATOR."imagens".DIRECTORY_SEPARATOR."membros".DIRECTORY_SEPARATOR.$foto);
    
        }
    }

    public static function salvarFoto($file, $nomeImagem){
        if ($file['imgMembro']['type'] == "image/jpg" || $file['imgMembro']['type'] == "image/jpeg")
		{
		$imagem_temporaria = imagecreatefromjpeg($file['imgMembro']['tmp_name']);
		$largura_o = imagesx($imagem_temporaria);
        $altura_o = imagesy($imagem_temporaria);
        $nova_largura = 800;
        $nova_altura = 800;
		
		$redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);

		imagecopyresampled($redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_o, $altura_o);
        imagejpeg($redimensionada, "app".DIRECTORY_SEPARATOR."res".DIRECTORY_SEPARATOR."imagens".DIRECTORY_SEPARATOR."membros".DIRECTORY_SEPARATOR."".$nomeImagem);
		} else 
		{
		$imagem_temporaria = imagecreatefrompng($file['imgMembro']['tmp_name']);
		$largura_o = imagesx($imagem_temporaria);
		$altura_o = imagesy($imagem_temporaria);
		$nova_largura = 1080;
		$nova_altura = 1080;

		$redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);

		imagecopyresampled($redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_o, $altura_o);
		imagepng($redimensionada, "app".DIRECTORY_SEPARATOR."res".DIRECTORY_SEPARATOR."imagens".DIRECTORY_SEPARATOR."membros".DIRECTORY_SEPARATOR."".$nomeImagem);			
        }
    }

}

?>