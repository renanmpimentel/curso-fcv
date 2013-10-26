<div class="navbar">
    <div class="navbar-inner">
        <div class="container">

            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <a class="brand" href="#">Nome Projeto</a>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li><a href="<?php echo base_url() ?>">Inicial</a></li>
                    <li><a href="<?php echo base_url('palestrante_controller') ?>">Palestrante</a></li>
                    <li><a href="<?php echo base_url('ouvinte_controller') ?>">Ouvinte</a></li>
                </ul>

                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><?php echo $this->session->userdata('usuario') ?></a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url('login_controller/sair') ?>">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>