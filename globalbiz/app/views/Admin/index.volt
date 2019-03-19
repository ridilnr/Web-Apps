<nav class="navbar navbar-inverse">
    <div class="container-fluid">
            <a class="navbar-brand active" href="Administrateur">{{ this.session.get('kingname') }}<span class="glyphicon glyphicon-home"></span></a>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="Admin/Applicants">Applicants</a></li>
                <li><a href="Admin/Other">Other Settings</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a class="btn btn-danger btn-md active" href="Admin/Destroy"><span class="glyphicon glyphicon-log-out"></span>Déconnexion</a></li>
            </ul>
        </div>
    </div>
</nav>
<center>{{ flash.output() }}</center>