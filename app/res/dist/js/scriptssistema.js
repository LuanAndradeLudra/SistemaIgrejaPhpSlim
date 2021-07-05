  function onLoad() {
    let url = document.URL;
    url = url.replace("http://www.sist.com.br", "");
    if (url.includes('/inicio')){
      document.getElementById('pag=/inicio').style = 'background-color: #007BFF';
    }
    if (url.includes('/cadastrarnovomembro')){
      document.getElementById('pag=/cadastrarnovomembro').style = 'background-color: #007BFF';
    }
    if (url.includes('/localizadorfichasmembro')){
      document.getElementById('pag=/localizadorfichasmembro').style = 'background-color: #007BFF';
    }
    if (url.includes('/localizadorfichasobreiros')){
      document.getElementById('pag=/localizadorfichasobreiros').style = 'background-color: #007BFF';
    }
    if (url.includes('/localizadoraniversariantes') && !url.includes('/localizadoraniversariantescasamento')){
      document.getElementById('ulaniversariantes').classList.add("menu-open");
      document.getElementById('lianiversariantes').style = 'background-color: #007BFF';
      document.getElementById('pag=/localizadoraniversariantes').style = 'margin-left: 16px; background-color: #007BFF';
    }
    if (url.includes('/localizadoraniversariantescasamento')){
      document.getElementById('ulaniversariantes').classList.add("menu-open");
      document.getElementById('lianiversariantes').style = 'background-color: #007BFF';
      document.getElementById('pag=/localizadoraniversariantescasamento').style = 'margin-left: 16px; background-color: #007BFF';
    }
    if (url.includes('/alterarsenha')){
      document.getElementById('ulconfiguracoes').classList.add("menu-open");
      document.getElementById('liconfiguracoes').style = 'background-color: #007BFF';
      document.getElementById('pag=/alterarsenha').style = 'margin-left: 16px; background-color: #007BFF';
    }
    
  };
  
  function deletarUsuario(idMembro, nomeMembro){
    idMembroCripto = '9878945' + idMembro + '7585123';
    idMembroCripto = btoa(idMembroCripto);
    document.getElementById("userLink").href = "/excluirmembro/" + idMembroCripto;
    document.getElementById("nomeMembro").innerHTML = nomeMembro;
  }

