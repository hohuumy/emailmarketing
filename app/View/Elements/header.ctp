<header id="header" class="navbar">
        <ul class="nav navbar-nav navbar-avatar pull-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="hidden-xs-only">Mika Sokeil</span> <span class="thumb-small avatar inline">
                <img src="images/avatar.jpg" alt="Mika Sokeil" class="img-circle"></span> <b class="caret hidden-xs-only"></b></a>
                <ul class="dropdown-menu pull-right">
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#"><span class="badge bg-danger pull-right">3</span>Notifications</a></li>
                    <li class="divider"></li>
                    <li><a href="docs.html">Help</a></li>
                    <li><a href="signin.html">Logout</a></li>
                </ul>
            </li>
        </ul>
        <a class="navbar-brand" href="#">first</a>
        <button type="button" class="btn btn-link pull-left nav-toggle visible-xs" data-toggle="class:slide-nav slide-nav-left" data-target="body"><i class="fa fa-bars fa-lg text-default"></i></button>
        <ul class="nav navbar-nav hidden-xs">
            <li>
                <div class="m-t m-b-small" id="panel-notifications"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-comment-o fa-fw fa-lg text-default"></i><b class="badge badge-notes bg-danger count-n">2</b></a>
                    <section class="dropdown-menu m-l-small m-t-mini">
                        <section class="panel panel-large arrow arrow-top">
                            <header class="panel-heading bg-white"><span class="h5"><strong>You have <span class="count-n">2</span> notifications</strong></span></header>
                            <div class="list-group"><a href="#" class="media list-group-item"><span class="pull-left thumb-small">
                                <img src="images/avatar.jpg" alt="John said" class="img-circle"></span> <span class="media-body block m-b-none">Moved to Bootstrap 3.0<br>
                                    <small class="text-muted">23 June 13</small> </span></a><a href="#" class="media list-group-item"><span class="media-body block m-b-none">first v.1 (Bootstrap 2.3 based) released<br>
                                        <small class="text-muted">19 June 13</small> </span></a></div>
                            <footer class="panel-footer text-small"><a href="#" class="pull-right"><i class="fa fa-cog"></i></a><a href="#">See all the notifications</a> </footer>
                        </section>
                    </section>
                </div>
            </li>
            <li>
                <div class="m-t-small"><a class="btn btn-sm btn-info" data-toggle="modal" href="#modal"><i class="fa fa-fw fa-plus"></i>POST</a></div>
            </li>
            <li class="dropdown shift" data-toggle="shift:appendTo" data-target=".nav-primary .nav"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog fa-lg visible-xs visible-xs-inline"></i>Settings <b class="caret hidden-sm-only"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#" data-toggle="class:navbar-fixed" data-target='body'>Navbar <span class="text-active">auto</span> <span class="text">fixed</span> </a></li>
                    <li class="hidden-xs"><a href="#" data-toggle="class:nav-vertical" data-target="#nav">Nav <span class="text-active">vertical</span> <span class="text">horizontal</span> </a></li>
                    <li class="divider hidden-xs"></li>
                    <li class="dropdown-header">Colors</li>
                    <li><a href="#" data-toggle="class:bg bg-black" data-target='.navbar'>Navbar <span class="text-active">white</span> <span class="text">inverse</span> </a></li>
                    <li><a href="#" data-toggle="class:bg-light" data-target='#nav'>Nav <span class="text-active">inverse</span> <span class="text">light</span> </a></li>
                </ul>
            </li>
        </ul>
        <form class="navbar-form pull-left shift" action="#" data-toggle="shift:appendTo" data-target=".nav-primary"><i class="fa fa-search text-muted"></i>
            <input type="text" class="input-sm form-control" placeholder="Search">
        </form>
    </header>