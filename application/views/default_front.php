<?php include_once('common/header.php');?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><?=$this->config->item('site_name')?></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">榜单</a></li>
                    <li><a href="#about">专辑</a></li>
                    <li><a href="#contact">风格</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <div class="container">
        <br/>
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <?php echo $contents; ?>
            </div><!-- /.blog-main -->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <ul class="nav nav-sidebar">
                    <li><a href="#">
                        <span class="glyphicon glyphicon-stats" aria-hidden="true"></span>我的榜单
                    </a></li>
                    <li><a href="#">
                        <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>我的碟评
                    </a></li>
                </ul>
                <hr/>
                <ul class="nav nav-sidebar">
                    <li><a href="<?=site_url('albums/grab')?>">
                        <span class="glyphicon glyphicon-stats" aria-hidden="true"></span>增加专辑
                    </a></li>
                </ul>
            </div><!-- /.blog-sidebar -->
        </div>
    </div>
<?php include_once('common/footer.php')?>