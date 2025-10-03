<?php
require_once 'src/Page.php';
require_once 'src/initialization.php';
?>
<header>        
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Fourth navbar example">
                <div class="container-fluid">
                    
                    <a class="navbar-brand" href=""><img src="<?= IMG . "/swimmer.jpg"?>" class="img-fluid" alt="Accueil du projet"></a>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link <? ACTIVE_PAGE === Page::Home ? 'active' : ''?>" aria-current="page" href="<?= Page::Home->url()?>"><?= Page::Home->text()?></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Knowledge</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="">Technologies</a></li>
                                    <li><a class="dropdown-item" href="">Social</a></li>
                                    <li><a class="dropdown-item" href="">Health</a></li>
                                </ul>
                            </li>
                        </ul>


                    </div>
                </div>
            </nav>

</header>