<?php

$IsActive_Home = "";
$IsActive_Fiche_Frais = "";
$IsActive_User = "";
$IsActive_Role = "";
if (isset($ActivePageName)) {
    switch ($ActivePageName) {
        case "home":
            $IsActive_Home = "active";
            break;
        case "fiche_frais":
            $IsActive_Fiche_Frais = "active";
            break;
        case "user":
            $IsActive_User = "active";
            break;
        case "role":
            $IsActive_Role = "active";
            break;
    }
} else {
    $ActivePageName = "Undefine";
}
?>


<header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ff8787;">
        <div class="container-fluid">
        <a class="navbar-brand">Navigation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                        <a class="nav-link <?php echo $IsActive_Home; ?>" href="/home">Home</a>
                        <a class="nav-link <?php echo $IsActive_Fiche_Frais; ?>" href="/fiche_frais/affiche">Fiche de frais</a>



                        <a class="nav-link <?php echo $IsActive_User; ?>" href="/user/affiche">User</a>
                        <a class="nav-link <?php echo $IsActive_Role; ?>" href="/role/affiche">Role</a>

                        <a class="nav-link disabled">Prochainement...</a>

                </div>
            </div>
            <a class="btn btn-danger" href="/logout"><img src="/img/logout_black_24dp.svg" alt="Deconnexion"></a>
        </div>

        <?php if ($ActivePageName != "home") { ?>
            <form class="d-flex" target="/<?php echo $ActivePageName ?>/affiche" id="<?php echo $ActivePageName; ?>FormSearch">
                <input class="form-control me-2" id="<?php echo $ActivePageName; ?>InputSearch" name="search" type="search" placeholder="Search <?php echo $ActivePageName ?>" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        <?php } ?>
    </nav>
</header>