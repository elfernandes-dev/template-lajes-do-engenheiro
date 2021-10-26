<?php
$myEmail = 'elfernandes.dev@gmail.com';
$myServer = 'smtp.gmail.com';
$name = ucwords(strtolower(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS)));
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$ddd = filter_input(INPUT_POST, 'ddd');
$cel = filter_input(INPUT_POST, 'cel', FILTER_SANITIZE_SPECIAL_CHARS);
$whatsApp = filter_input(INPUT_POST, 'whatsapp');
$subject = ucfirst(strtolower(filter_input(INPUT_POST, 'subjectMatter', FILTER_SANITIZE_SPECIAL_CHARS)));
$message = ucfirst(strtolower(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING)));
$secrecy = filter_input(INPUT_POST, 'secrecy');
if($name && $email && $ddd && $cel && $subject && $message && $secrecy)
{   
    $headers =  "Content-Type:text/html; charset=UTF-8\n";
    $headers .= "From:  ".$myServer."<".$email.">\n";
    $headers .= "X-Sender:  <".$email.">\n";
    $headers .= "X-Mailer: PHP  v".phpversion()."\n";
    $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
    $headers .= "Return-Path:  <".$email.">\n";
    $headers .= "MIME-Version: 1.0\n";
    if ($whatsApp == 'on') {
        $whatsAppStatus = ' (WhatsApp)';
    } else {
        $whatsAppStatus = '';
    }    
    $messageEmail = "Formulário para Contato". 
        "\r\n Nome: " . $name .
        "\r\n Email: " . $email .
        "\r\n Celular: (". $ddd .") " . $cel . $whatsAppStatus.
        "\r\n Mensagem: " . $message
    ;  
    $send = mail($myEmail,$subject,$messageEmail);   
    if ($send) {
        $flash = 'Mensagem encaminhada, entraremos em contato o quanto antes. Obrigado!';
    }else {
        $flash = 'Opa! Algo deu errado. Por favor, atualize a página e tente novamente. Obrigado!';
    }
    $flash;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Evandro Fernandes">
    <title>Lajes do Engenheiro: Lajes com técnica</title>
     <link rel="shortcut icon" href="assets/img/ico/favicon.ico"/>
    <meta name="description" content="Entre em contato ou preencha o formulário para mais informações. Lajes do Engenheiro, em Vale Verde – Porto Seguro (BA). Lajes com Técnica! Quem é responsável assina!"/>
    <meta name="keywords" content= "Lajes; treliças, cura úmida, engenheiro, concreto, pisos, elementos vazados, mourões, vigas, concreto, artefatos de concreto, lajes unidirecionais, lajes bidirecionais, guia para jardim, intertravado pingadeira, pisograma, decor raquete, sextavada estriada, elemento vazado veneziana, autotravante 3 pontas, paviess autotravante trabalhada, CREA- MG 44.879/D, ABNT, 	lajes com técnica, vigotas, orçamento, construção, material para construção, reforma, Vale Verde, Porto Seguro, Bahia, Sul da Bahia, Arraial d’Ajuda, Trancoso, Eunápolis, Sapirara, Caraíva"/>
    <link href="assets/css/normalize.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<body>
    <header>
        <div class="menu">
            <img src="assets/img/images/logo.jpg" title="Lajes com Técnica!" />
            <nav>
                <div class="menuBar">
                    <ul>
                        <li><a href="home.html" title="Conheça a Lajes do Engenheiro">Home</a></li>
                        <li><a href="produtos.html" title="Coheça Nossos Produtos">Produtos</a></li>
                        <li><a href="projetos.html" title="Conheça Alguns de Nossos Projetos">Projetos</a></li>
                        <li><a href="contato.php" title="Entre em Contato Conosco" class="active">Contato</a></li>
                    </ul>
                </div>
                <div class="menuMobile">
                    <div class="imgMobile">
                        <img src="assets/img/ico/menu_mobile.png" id="display"/>
                        <h1 id="close">X</h1>
                    </div>
                    <div class="linksMobile">
                        <ul>
                            <li><a href="home.html" title="Conheça a Lajes do Engenheiro">Home</a></li>
                            <li><a href="produtos.html" title="Coheça Nossos Produtos">Produtos</a></li>
                            <li><a href="projetos.html" title="Conheça Alguns de Nossos Projetos">Projetos</a></li>
                            <li><a href="contato.php" title="Entre em Contato Conosco" class="active">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>        
    </header>
    <section class="defaultLight">
        <div class="container contactArea">
            <h1>Contato</h1>
            <h2>Formulário</h2>
            <p>* Campos obrigatórios</p> 
            <form method="POST">
                <div class="formArea">
                    <fieldset class="leftArea">
                        <legend>Dados para contato</legend> 
                        <label class="nameArea">
                            <h4>* Nome Completo:</h4>
                            <input type="text" name="name" placeholder="Nome" size="40" autocomplete="off" autofocus required/>
                        </label>
                        <label class="emailArea">
                            <h4>* E-mail:</h4>
                            <input type="email" name="email" placeholder="exemplo@email.com" size="40" autocomplete="off" required/>
                        </label>
                        <label class="phoneArea">
                            <h4>* DDD / * Celular:</h4>
                            <select name="ddd" id="ddd" required>
                                <option></option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                                <option value="49">49</option>
                                <option value="51">51</option>
                                <option value="52">52</option>
                                <option value="53">53</option>
                                <option value="54">54</option>
                                <option value="55">55</option>
                                <option value="56">56</option>
                                <option value="57">57</option>
                                <option value="58">58</option>
                                <option value="59">59</option>
                                <option value="61">61</option>
                                <option value="62">62</option>
                                <option value="63">63</option>
                                <option value="64">64</option>
                                <option value="65">65</option>
                                <option value="66">66</option>
                                <option value="67">67</option>
                                <option value="68">69</option>
                                <option value="71">71</option>
                                <option value="72">72</option>
                                <option value="73">73</option>
                                <option value="74">74</option>
                                <option value="75">75</option>
                                <option value="76">76</option>
                                <option value="77">77</option>
                                <option value="78">78</option>
                                <option value="79">79</option>
                                <option value="81">81</option>
                                <option value="82">82</option>
                                <option value="83">83</option>
                                <option value="84">84</option>
                                <option value="85">85</option>
                                <option value="86">86</option>
                                <option value="87">87</option>
                                <option value="88">88</option>
                                <option value="89">89</option>
                                <option value="91">91</option>
                                <option value="92">92</option>
                                <option value="93">93</option>
                                <option value="94">94</option>
                                <option value="95">95</option>
                                <option value="96">96</option>
                                <option value="97">97</option>
                                <option value="98">98</option>
                                <option value="99">99</option>
                            </select>&nbsp/&nbsp
                            <input type="tel" name="cel" placeholder="00000-0000" size="10" maxlength="10" OnKeyPress="format('#####-####', this)" autocomplete="off" required/>
                            <div class="checkboxArea">
                            <input type="checkbox" name="whatsapp"/> Whatsapp
                            </div>
                        </label>
                    </fieldset>
                    <fieldset class="rightArea">
                        <legend>Assunto</legend>
                        <label class="titleArea">
                            <h4>* Título:</h4>
                            <input type="text" name="subjectMatter" placeholder="" size="40" autocomplete="off" required/>
                        </label>
                        <label class="messageArea">
                            <h4>* Mensagem</h4>
                            <textarea name="message" autocomplete="off" maxlength=400 required></textarea>
                        </label>
                    </fieldset>  
                </div> 
                <label class="buttonArea">
                    <input type="submit" value="Encaminhar"/>
                </label>
                <label class="checkboxPolicy">
                    <input type="checkbox" name="secrecy" required/><em>Li e concordo com a <a href="politicadeprivacidade.html" title="Conheça nossa Política de Privacidade antes de encaminhar o formulário" target="_blank">Política de Privacidade</a> do site.</em>
                </label>
                <div class="flash">
                    <?php if(!empty($flash)):?>
                        <?php echo $flash;?>
                    <?php endif;?>
                </div>
            </form>
            <h2>Localização</h2>
            <div class="mapsArea">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1913.4612464410143!2d-39.219562542008376!3d-16.428762324463076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7368fb528785f33%3A0xea8b5067a1f54e85!2sLajes%20do%20Engenheiro!5e0!3m2!1spt-BR!2sbr!4v1635169669752!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section> 
    <footer>
        <address>
            <div class="companysAdress">
                <ul>
                    <li><span>Lajes do Engenheiro Pré-Moldados de Concreto Ltda. - ME</span></li>
                    <li>Rodovia BA-001, KM 14</li>
                    <li>Distrito de Vale Verde</li>
                    <li>Porto Seguro, BA</li>
                    <li>(73) 3018-3339</li>
                    <li>(73) 99169-6071</li>
                </ul>
            </div>
            <div class="contact">
                <ul>
                    <li><a href="https://api.whatsapp.com/send?phone=5573999012925" title="WhatsApp" target="_blank"><img src="assets/img/ico/whatsapp_background.png"/>(73) 99901-2925</a></li>
                    <li><a href="mailto: contato@lajesdoengenheiro.com.br" title="E-mail" target="_blank"><img src="assets/img/ico/email_background.png"/>contato@lajesdoengenheiro.com.br</a></li>
                </ul>
            </div>
        </address>
        <div class="privacyPolicyArea">
            <h4><a href="politicadeprivacidade.html" title="Conheça nossa Política de Privacidade" target="_blank">Política de Privacidade</h4></a>
        </div>
        <div class="ef">
            <div class=textFooter>© 2021 - by &nbsp<a href="" title="Site em breve"> Evandro Fernandes</a></div>
            <ul>
                <li><a href="https://api.whatsapp.com/send?phone=5573991632624" title="WhatsApp" target="_blank"><img src="assets/img/ico/whatsapp.png"/></a></li>
                <li><a href="mailto: elfernandes.dev@gmail.com" title="E-mail"><img src="assets/img/ico/email.png"/></a></li>
                <li><a href="https://www.instagram.com/elfernandes.dev" title="Instagram" target="_blank"><img src="assets/img/ico/instagram.png"/></a></li>
            </ul>
        </div>
    </footer>
    <script src="assets/js/script.js"></script>
</body>
</html>