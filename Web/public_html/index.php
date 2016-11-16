<!-- Bloqueia Letras no CPF e RG -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<!-- Mascara de validação -->
<script type="text/javascript" src="js/MascaraValidacao.js"></script>
<!-- Confirma a senha -->
<script>
function validaSenha (input){ 
	if (input.value !== document.getElementById('senha').value) {
        input.setCustomValidity('Repita a senha corretamente');
        } else {
        input.setCustomValidity('');
        }
} 
</script>


<!DOCTYPE html>
<html>
    <head>
        <title>FreeConsultas - Seu jeito facil de agendar suas consultas!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Icone que aparece no navegador -->
        <link rel="shortcut icon" href="icone.png" type="image/x-png">
        <!-- Chamando o css -->
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <!-- Link da fonte Patua -->
        <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
        <!-- Link da fonte Oswald -->
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    </head>
    <body>
        <div id="backg"></div>
        <div id="top">
            
            <table>
            <tr><td>
            <div id="txtFree" class="FontePatua FixoEsquerda">
                    <a>FreeConsultas</a>
            </div> 
            </td></tr> <!-- Termina a parte do texto -->
            
            <tbody id="tBody" class="FixoDireita FonteOswald">
            <tr>
                <td class="">
                    <label for="email">Email ou telefone</label>
                </td>
                <td class="">
                    <label for="pass">Senha</label>
                </td>
            </tr>

            <tr>
                <td>
		<input type="email" class="txt" name="email" id="email" value="" tabindex="1">
                </td>
                <td>
		<input type="password" class="txt" name="pass" id="pass" tabindex="2">
                </td>
                <td>
		<label class="txt" style="" id="loginbutton" for="btnEntrar">
		<input value="Entrar" tabindex="4" type="submit" id="btnEntrar" class="FonteOswald sb bord">
		</label>
                </td>
            </tr>

            <tr>
                <td class="">
		<div>
		<input type="hidden" name="qlq1">
		<input type="hidden" name="qlq2" value="1">
		</div>
                </td>
                <td class="">
		<div>
                    <a class="noD"><u>Esqueceu a conta?</u></a>
		</div>
                </td>
            </tr>
            </tbody>
        </table>
        </div> <!-- Termina a div da parte de cima -->
        
        <div id="meio" class="FixoDireita FonteOswald">
            <div class="CadTxt">Cadastre-se</div>
            <br>
            <form method="post" id="reg" name="reg" action="" >
            <input type="hidden" name="" value="">

            <div>Nome Completo</div>
            <input id="nomeComp" type="text" class="txt2" name="primeiroNome" placeholder="">

            <div class="txte" aria-hidden="true">Email</div>
            <input id="email" type="text" class="txt2" name="reg_email">
            
            <div class="txte">CPF</div>
            <input id="cpf" type="text" class="txt2" name="CPF" onkeypress="this.value = FormataCpf(event)" onpaste="return false;" maxlength="14">
            
            <div class="txte">RG</div>
            <input id="rg" type="text" class="txt2" name="RG" onkeypress="this.value = FormataRg(event)" onpaste="return false;" maxlength="12">
            
            <div class="txte">Numero do convênio</div>
            <input id="regConvenio" type="text" class="txt2" name="regConvenio">

            <div class="txte">Aniversário</div>

            <select name="birthday_day" id="dia" title="Dia" class="txte">
                <option value="0">Dia</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>

            <select aria-label="Mês" name="birthday_month" id="mes" title="Mês" class="txte">
                <option value="0">Mês</option>
                <option value="1">Janeiro</option>
                <option value="2">Fevereiro</option>
                <option value="3">Março</option>
                <option value="4">Abril</option>
                <option value="5">Maio</option>
                <option value="6">Junho</option>
                <option value="7">Julho</option>
                <option value="8">Agosto</option>
                <option value="9">Setembro</option>
                <option value="10">Outubro</option>
                <option value="11">Novembro</option>
                <option value="12">Dezembro</option>
            </select>

            <select aria-label="Ano" name="birthday_year" id="ano" title="Ano" class="txte">
                <option value="0">Ano</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                <option value="1949">1949</option>
                <option value="1948">1948</option>
                <option value="1947">1947</option>
                <option value="1946">1946</option>
                <option value="1945">1945</option>
                <option value="1944">1944</option>
                <option value="1943">1943</option>
                <option value="1942">1942</option>
                <option value="1941">1941</option>
                <option value="1940">1940</option>
                <option value="1939">1939</option>
                <option value="1938">1938</option>
                <option value="1937">1937</option>
                <option value="1936">1936</option>
                <option value="1935">1935</option>
                <option value="1934">1934</option>
                <option value="1933">1933</option>
                <option value="1932">1932</option>
                <option value="1931">1931</option>
                <option value="1930">1930</option>
                <option value="1929">1929</option>
                <option value="1928">1928</option>
                <option value="1927">1927</option>
                <option value="1926">1926</option>
                <option value="1925">1925</option>
                <option value="1924">1924</option>
                <option value="1923">1923</option>
                <option value="1922">1922</option>
                <option value="1921">1921</option>
                <option value="1920">1920</option>
                <option value="1919">1919</option>
                <option value="1918">1918</option>
                <option value="1917">1917</option>
                <option value="1916">1916</option>
                <option value="1915">1915</option>
                <option value="1914">1914</option>
                <option value="1913">1913</option>
                <option value="1912">1912</option>
                <option value="1911">1911</option>
                <option value="1910">1910</option>
                <option value="1909">1909</option>
                <option value="1908">1908</option>
                <option value="1907">1907</option>
                <option value="1906">1906</option>
                <option value="1905">1905</option>
                <option value="1904">1904</option>
                <option value="1903">1903</option>
                <option value="1902">1902</option>
                <option value="1901">1901</option>
                <option value="1900">1900</option>
            </select>
            
            <div class="txte" aria-hidden="true">Digite uma senha</div>
            <input id="Senha" type="password" class="txt2" name="senha" required placeholder="Digite uma senha" title="Colocar Senha"/>
            
            <div class="txte" aria-hidden="true">Repita a senha</div>
            <input id="confSenha" type="password" class="txt2" name="senhaConf" required placeholder="Digite a senha novamente" title="Repitir Senha"/>

            <div class="txte">
                <input type="radio" name="sex" value="1" id="u_0_h">
                <label class="txte" for="u_0_h">Feminino</label>
                <input type="radio" name="sex" value="2" id="u_0_i">
                <label class="txte" for="u_0_i">Masculino</label>
            </div>
            
            <button type="submit" class="FonteOswald txte" name="websubmit" id="btnCad">Cadastre-se</button>
            </form>
        </div><!-- Termina a parte do corpo -->
        
        <div id="rod">
	<a class="FonteOswald">Site exclusivo da HospitalParticularDoJosé - Trinity Softwares © 2016</a>
        </div>

    </body>
</html>


