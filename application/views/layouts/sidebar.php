<?php
    $this->load->view('layouts/head');
?>
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="<?=base_url('')?>">
                    <h1 class="tm-site-title mb-0">Smart IoT</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link <?=$this->uri->segment(1) == '' ? 'active' : ''?>" href="<?=base_url('')?>#">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?=$this->uri->segment(1) == 'kontrol' ? 'active' : ''?>" href="<?=base_url('')?>kontrol">
                                <i class="fas fa-power-off"></i>
                                Kontrol
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url('assets/')?>accounts.html">
                                <i class="far fa-user"></i>
                                Accounts
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?=base_url('assets/')?>#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <span>
                                    Settings <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?=base_url('assets/')?>#">Profile</a>
                                <a class="dropdown-item" href="<?=base_url('assets/')?>#">Billing</a>
                                <a class="dropdown-item" href="<?=base_url('assets/')?>#">Customize</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="<?=base_url('assets/')?>login.html">
                                Admin, <b>Logout</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        <div class="container">