<ul class='breadcrumb'>
    <li><a href='#'><span class='glyphicon glyphicon-home'></span> Home</a></li>
    <li><a href='#'><span class='glyphicon <?=$this->menus[$this->controller_name]['icon']?>'></span> <?=$this->menus[$this->controller_name]['name']?></a></li>
    <li class='active'><span class='glyphicon glyphicon-circle-arrow-right'></span> <?=$this->menus[$this->controller_name]['menu_array'][$this->method_name]['name']?></a></li>
</ul>