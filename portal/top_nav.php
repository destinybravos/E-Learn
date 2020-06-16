<div class="container-fluid" id="top_nav">
    <div class="row">
        <div class="col-md-12" style="text-align:right;">
            <div class="navbar navbar-expand-md">
                <a href="index.php" class="navbar-brand">
                    <span style="font-size:1.4rem;">
                        <?php echo $page_tag; ?>
                    </span>
                </a>

                <div class="navbar-collapse" id="top_menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="notification.php" class="nav-link">
                                <i class="fa fa-bell"></i>
                                <sup><small class="badge badge-danger" id="top_notify"></small></sup>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="message.php" class="nav-link">
                                <i class="fa fa-envelope"></i> 
                                <sup><small class="badge badge-danger" id="top_notify_msg"></small></sup>
                            </a>
                        </li>
                    </ul>
                </div>
                <button type="button" class="navbar-toggler" data-target="#menu" data-toggle="collapse">
                    <span class="fa fa-bars"></span>
                </button>
            </div>
        </div>
    </div>
</div>