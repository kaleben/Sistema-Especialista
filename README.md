# Sistema-Especialista
<h5>Sistema especialista criado para matéria de SEGURANÇA DE REDES DE COMUNICAÇÃO DE DADOS ministrada pelo professor Gilmar - Uniceplac 2019</h5>
<h3> Iniciando o sistema </h3> <br>
<p>1- Crie um banco de dados e importe o arquivo facu_completo.sql (//novo_banco/facu_completo.sql);</p>
<p>2- No arquivo conexao.php (//conexao.php) altere as informações do banco de acordo com as utilizadas em sua maquina local;</p> 
<p>3- Agora é só abrir o arquivo index.php no seu browser.</p>

<h3>Caso queira criar seu próprio  fluxo de perguntas</h3>
<h5>É necessário  criar um banco em branco, sem nenhuma pergunta ou resposta! Para isso siga os passos a seguir</h5>
<p>1- Crie um banco de dados e importe o arquivo facu.sql (//novo_banco/facu.sql);</p>
<p>2- No arquivo conexao.php (//conexao.php) altere as informações do banco de acordo com as utilizadas em sua maquina local;</p>
<p>3- Abra o arquivo inserir.php no seu browser;</p>
<p>4- Cadastre as perguntas e as resposta nessa página para que apareçam na index.php automaticamente.</p><br>

<h3>Entendendo tela de cadastro de perguntas</h3>
<a href="https://ibb.co/W3Z6Wnt"><img src="https://i.ibb.co/pPcxv2y/Capturar.png" alt="Capturar" border="0" /></a><br>

<p>Nova pergunta: Nova pergunta que deseja adicionar ao fluxo;</p>
<p>Resposta de chamada: Valor da resposta que ira chamar a nova pergunta ao ser selecionada.</p>
<hr>
<p>Nova resposta: Nova resposta que deseja adicionar a alguma pergunta;</p>
<p>Selecionar pergunta: Mostra todas as perguntas cadastradas no banco, ao selecionar uma pergunta da lista a nova resposta será ligada automaticamente ao ID da pergunta;</p>
<p>Campo Id Selecionado: Mostra o Id no banco de dados da pergunta selecionada;</p>
<p>Valor da nova resposta: Gerado automaticamente com o valor da resposta + id da pergunta pai, pode ser alterado!</p><br>

