<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>[title]</title>
    <link href="/Public/newPublic/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/newPublic/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/Public/newPublic/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="/Public/newPublic/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="/Public/newPublic/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="/Public/newPublic/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/Public/newPublic/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/Public/newPublic/css/animate.css" rel="stylesheet">
    <link href="/Public/newPublic/css/style.css" rel="stylesheet">

</head>
<body>
    <div id="wrapper">
            <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                        <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">会员总数</span>
                                <h5>会员数量</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo ($userCount); ?></h1>
                                <div class="stat-percent font-bold text-success">User<i class="fa fa-bolt"></i></div>
                                <small>本站会员总数</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">文章数量</span>
                                <h5>文章数量</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo ($articleCount); ?></h1>
                                <div class="stat-percent font-bold text-info">Article<i class="fa fa-level-up"></i></div>
                                <small>本站文章总数</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">留言数量</span>
                                <h5>留言数量</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo ($liuyanCount); ?></h1>
                                <div class="stat-percent font-bold text-navy">Message<i class="fa fa-level-up"></i></div>
                                <small>本站留言总数</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-danger pull-right">评论数量</span>
                                <h5>评论数量</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo ($commentCount); ?></h1>
                                <div class="stat-percent font-bold text-danger">Comment<i class="fa fa-level-down"></i></div>
                                <small>本站评论总数</small>
                            </div>
                        </div>
            </div>
        </div>        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                        <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">会员总数</span>
                                <h5>会员数量</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo ($userCount); ?></h1>
                                <div class="stat-percent font-bold text-success">User<i class="fa fa-bolt"></i></div>
                                <small>本站会员总数</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">文章数量</span>
                                <h5>文章数量</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo ($articleCount); ?></h1>
                                <div class="stat-percent font-bold text-info">Article<i class="fa fa-level-up"></i></div>
                                <small>本站文章总数</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">留言数量</span>
                                <h5>留言数量</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo ($liuyanCount); ?></h1>
                                <div class="stat-percent font-bold text-navy">Message<i class="fa fa-level-up"></i></div>
                                <small>本站留言总数</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-danger pull-right">评论数量</span>
                                <h5>评论数量</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo ($commentCount); ?></h1>
                                <div class="stat-percent font-bold text-danger">Comment<i class="fa fa-level-down"></i></div>
                                <small>本站评论总数</small>
                            </div>
                        </div>
            </div>
        </div>