


    <h1><?=$post['post_subject']?></h1>
    <p><?=$post['post_text']?></p>
        <div>
            <span class="badge">Posted 2012-08-02 20:47:04</span><div class="pull-right"><span class="label label-default">alice</span> <span class="label label-primary">story</span> <span class="label label-success">blog</span> <span class="label label-info">personal</span> <span class="label label-warning">Warning</span>
                <span class="label label-danger">Danger</span></div>
        </div>

<?foreach ($tags as $tag):?><a href="tags/view/<?=$tag['tag_name']?>"><span class="lable-info"><?=$tag['tag_name']?></span>
</a><?endforeach?>