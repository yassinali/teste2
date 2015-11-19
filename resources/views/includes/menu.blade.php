<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="{!!URL::to('/#')!!}"><img src="{{asset('assets/img/ui-sam.jpg')}}" class="img-circle" width="60"></a></p>
            <h5 class="centered">Mufamaju Ali</h5>

            <li class="mt">
                <a class="active" href="{!!URL::to('/')!!}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-desktop"></i>
                    <span>Clientes</span>
                </a>
                <ul class="sub">
                    <li><a  href="{!!URL::to('cliente/create')!!}">
                            <i class="fa fa-tasks"></i>
                            <span>Registar cliente</span></a></li>
                    <li><a  href="{!!URL::to('cliente')!!}">
                            <i class="fa fa-th"></i>
                            <span>Listar clientes</span></a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-desktop"></i>
                    <span>Filmes</span>
                </a>
                <ul class="sub">
                    <li><a  href="{!!URL::to('filme/create')!!}">
                            <i class="fa fa-tasks"></i>Registar filme</a></li>
                    <li><a  href="{!!URL::to('filme')!!}">
                            <i class=" fa fa-bar-chart-o"></i>
                            <span>Listar filmes</span></a></li>                   
                </ul>
            </li>                  

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>