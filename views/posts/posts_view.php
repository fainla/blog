<div class="span8">
    <a href="#"><span class="label label-info" </span></a>

    <h1> Pealkiri</h1>

    <p> <?= $post['post_text'] ?> </p>

    <div>
        <span class="badge badge-success">Posted 2012-08-02 20:47:04</span>

        <div class="pull-right"><span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span>
            <span class="label">personal</span></div>
    </div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="panel panel-default widget">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-comment"></span>

                <h3 class="panel-title">
                    Recent Comments</h3>
                <span class="label label-info">
                    78</span>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <? foreach ($comments as $comment): ?>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-2 col-md-1">
                                    <img src="http://placehold.it/80" class="img-circle img-responsive" alt=""/></div>
                                <div class="col-xs-10 col-md-11">
                                    <div>
                                        <div class="mic-info">
                                            By: <a href="#"><?=$comment['comment_author'] ?></a> on <?=$comment['comment_date'] ?>
                                        </div>
                                    </div>
                                    <div class="comment-text">
                                        <?=$comment['comment_text'] ?>
                                    </div>
                                    <div class="action">
                                        <button type="button" class="btn btn-primary btn-xs" title="Edit">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </button>
                                        <button type="button" class="btn btn-success btn-xs" title="Approved">
                                            <span class="glyphicon glyphicon-ok"></span>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-xs" title="Delete">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li><? endforeach ?>
                </ul>
                <form  method= "post"><p><textarea name="data[comment_text]" style="width: 100%" id="" cols="38" rows="5"
                                                placeholder="sinu kommentaar"></textarea></p>
                                                <p><button class="btn btn-info">Sisesta kommentaar</button></form></p>
            </div>
        </div>
    </div>
</div>