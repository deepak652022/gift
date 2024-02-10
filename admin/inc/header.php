<div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
    <h3 class="mb-0 h1-font"> HB site</h3>
    <a href="logout.php" class="btn btn-light btn-sm">LOG out</a>
</div>

<div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid flex-lg-column align-items-stretch" >
            <h4 class="mt-2 text-light" style="font-size: 20px;">ADMIN PANEL</h4>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#admindropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="admindropdown">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Rooms</a>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Users</a>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link text-white" href="settings.php">Settings</a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>
</div>