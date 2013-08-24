<?php
$this->Html->css(
        array(
    'index',
    'barraLinkSuperior',
    'barraLinkInferior',
    'tabela',
    'formulario',
    'camera',
    'jquery-ui-1.9.1.custom'), null, array('inline' => false));
$this->Html->script(array(
    'jquery-1.8.2',
    'jquery.mobile.customized.min',
    'jquery.easing.1.3',
    'carregamentoPagina',
    'subMenu',
    'camera',
    'slide',
    'jquery-ui-1.9.1.custom',
    'ui'
        ), array('inline' => false)
);
?>

<div id="bg">
    <div id="tudo">
        <div id="bannerSuperiorLogo">
            <?php echo $this->Html->image("logo.gif", array('alt' => 'Logo')); ?>
        </div>
        <div id="barraLinkSuperior">
            <ul id="nav" class="navega ui-state-default ui-corner-all">
                <li><a href="home.php" title="P&aacute;gina pricipal">Home</a></li>
                <li><a href="#" title="Sobre a escola">O Col&eacute;gio</a>
                    <ul class="subMenu">
                        <li><a href="#" class="subitem">Hist&oacute;ria</a></li>
                        <li><a href="#" class="subitem">Localiza&ccedil;&atilde;o</a></li>
                        <li><a href="#" class="subitem">Mensagem do diretor</a></li>
                        <li><a href="#" class="subitem">Dire&ccedil;&atilde;o</a></li>
                        <li><a href="#" class="subitem">Funcion&aacute;rios</a></li>
                        <li><a href="#" class="subitem">Secret&aacute;ria</a></li>
                        <li><a href="#" class="subitem">Professores</a></li>
                        <li><a href="#" class="subitem">Ambiente escolar</a></li>
                        <li><a href="#" class="subitem">Regimento interno</a></li>
                        <li><a href="#" class="subitem">Certificados</a></li>
                    </ul>
                </li>
                <li><a href="#" title="Projetos pedag&oacute;gicos">Projeto Pedag&oacute;gico</a></li>
                <li><a href="#" title="Calend&aacute;rio escolar">Calend&aacute;rio</a></li>
                <li><a href="#" title="Fale conosco">Contato</a></li>
            </ul>
        </div>
        <div id="bannerSuperior"> 
            <div class="camera_wrap" id="slideshow">
                <div data-src="/colegio-cake/img/slides/bridge.jpg"></div>
                <div data-src="/colegio-cake/img/slides/road.jpg"></div>
                <div data-src="/colegio-cake/img/slides/sea.jpg"></div>
            </div>
        </div>
        <div id="barraLinkInferior">
            <ul id="navegaInferior" class="navega" >
                <li class="blue"><a href="ifotos.php" title="Galeria de fotos">Fotos</a></li>
                <!--<li class="blue"><img src="recursos/imagens/recado.gif" width="50" height="50"/><a href="irecados.php" title="Recados">Recados</a></li>-->
                <li class="blue"><a href="irecados.php" title="Recados">Recados</a></li>
                <li class="blue"><a href="videos.html" title="Galeria de v&iacute;deos">V&iacute;deos</a></li>
                <li class="blue"><a href="alunos.html" title="Alunos">Alunos</a></li>
            </ul>
            <div id="redesSociais">
                <?php echo $this->Html->image("facebook_icon.png", array('alt' => 'Facebook', 'width' => '50')); ?>
                <?php echo $this->Html->image("twitter_icon.png", array('alt' => 'Twitter', 'width' => '50')); ?>
                <?php echo $this->Html->image("gplus_icon.png", array('alt' => 'Google Plus', 'width' => '50')); ?>
            </div>
        </div>
        <div id="conteudo">
            <div id="conteudoEsquerda"></div>
            <div id="conteudoDireita">
                <div id="avisos"><div class="ui-state-active titulo_box_direita"><h4>Avisos&nbsp;</h4><span class="menor"><a href="">mais</a></span></div>
                    <div id="datepicker"></div>
                    <table class="messages">
                        <tbody>
                            <?php
//                            $todosAvisos = unserialize($todosAvisos);
//                            for ($i = 1; $i <= count($todosAvisos) || $i == 3; $i++) {
                            ?>
                            <tr>
                                <td><?php // echo date("d/m/Y", strtotime($todosAvisos[$i]->getData()));        ?></td>
                                <td><?php // echo $todosAvisos[$i]->getAviso();        ?></td>
                            </tr>
                            <?php // }  ?>
                            <tr>
                                <td class="date">20/11/2012</td>
                                <td class="message">Dia de Outro Santo</td>
                            </tr>
                            <tr>
                                <td class="date">17/11/2012</td>
                                <td class="message">Dia de Algum Santo</td>
                            </tr>
                        </tbody>    
                    </table>
                </div>
                <!--<div id="aprovados"><div class="ui-state-active titulo_box_direita"><h4>Aprovados</h4></div></div>-->
                <!--<div id="responsaveis"><div class="ui-state-active titulo_box_direita"><h4>Respons&aacute;veis</h4></div></div>-->
                <div id="parceirosColegio">
                    <div class="ui-state-active titulo_box_direita">
                        <h4>Parceiros do col&eacute;gio</h4>

                    </div>
                    <?php echo $this->Html->image("parceiros.jpg", array('alt' => 'Parceiros', 'width' => '250')); ?>
                    <?php echo $this->Html->image("parceiros.jpg", array('alt' => 'Parceiros', 'width' => '250')); ?>
                    <?php echo $this->Html->image("parceiros.jpg", array('alt' => 'Parceiros', 'width' => '250')); ?>
                </div>
            </div>
        </div>
        <div id="bannerInferior"></div>
        <div id="rodape"><a>Todos os direitos reservados a Sapukaia TI &COPY; 2011-2012 </a></div>
    </div>
</div>
