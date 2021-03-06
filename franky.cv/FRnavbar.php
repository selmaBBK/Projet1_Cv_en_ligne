<nav class="uk-navbar-container; uk-visible@s" uk-navbar>
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav ">
            <li class="uk-active"><a href="../global/index.php">Accueil</a></li>
            
            <li>
                <a href="#">Curriculum Vitae</a>
                <div class="uk-navbar-dropdown">
                     <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li><a href="../brook/AKBrook.php">Brook</a></li>
                        <li><a href="../chopper/TCcv.php">Chopper</a></li>
                     </ul>
                </div>
            </li>
             <li>
                <a href="./cvFranky.php">Franky</a>
                <div class="uk-navbar-dropdown ">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li><a href="#Présentation">Présentation</a></li>
                        <li><a href="#Biographie">Qui est Franky</a></li>
                        <li><a href="#Compétence">Compétences</a></li>
                        <li><a href="#Personnalité">Personnalité</a></li>
                        <li><a href="./FRbook.php">Franky's Book</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="./FRcontact.php">Contactez moi</a></li>
        </ul>
    </div>
</nav>
<!-- version mobile-->
<nav class="uk-navbar uk-navbar-container uk-margin uk-hidden@s" uk-offcanvas>
    <div class="uk-navbar-left">
        <a class="uk-navbar-toggle" href="#">
            <button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #offcanvas-nav-primary"><span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span></button>
            <div id="offcanvas-nav-primary" uk-offcanvas="overlay: true">
                <div class="uk-offcanvas-bar uk-flex uk-flex-column">
                    <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
                        <li class="uk-active"><a href="../global/index.php">Accueil</a></li>
                        
                        <li class="uk-nav-header"><a href="cvFranky.php">Franky</a></li>
                        <li><a href="#Présentation"><span class="uk-margin-small-right" ></span>Présentation</a></li>
                        <li><a href="#Biographie"><span class="uk-margin-small-right" ></span>Qui est Franky</a></li>
                        <li><a href="#Compétence"><span class="uk-margin-small-right" ></span>Compétences</a></li>
                        <li><a href="#Personnalité  "><span class="uk-margin-small-right" ></span>Personnalité</a></li>
                        <li><a href="./FRbook.php"><span class="uk-margin-small-right" ></span>Franky's Book</a></li> 
                        </li>

                        <li class="uk-parent">
                            <a href="./FRcontact.php">Contact</a>
                        </li>

                        <li class="uk-nav-header">Curriculum Vitae</li>
                        <li><a href="../chopper/TCcv.php"><span class="uk-margin-small-right" ></span>Chopper</a></li>
                        <li><a href="../brook/AKBrook.php"><span class="uk-margin-small-right" ></span>Brook </a></li>
                    </ul>
                    
                    
                </div>
            </div>
        </a>
    </div>
</nav>