<ul class="list-group">
    <li class="list-group-item">
        <img src="<?=$this->album_info['image']?>"/>
    </li>
    <li class="list-group-item">
        专辑：<?=$this->album_info['title']?><br/>
        <?=$this->album_info['summary']?>

    </li>
    <li class="list-group-item">艺人：<?=$this->album_info['artisits']?>
    </li>
    <li class="list-group-item">年份：<?=implode(',',$this->album_info['attrs']['pubdate'])?>

    </li>
    <li class="list-group-item">
        豆瓣评分：<?=$this->album_info['rating']['average']?> / <?=$this->album_info['rating']['numRaters']?>
    </li>
    <li class="list-group-item">豆瓣链接：<a href="<?=$this->album_info['alt']?>" target="_blank"><?=$this->album_info['alt']?></a></li>
    <li class="list-group-item">
        <a class="btn btn-success" onclick="doGrab()">确认提交</a>
    </li>
</ul>
<script>
var grab_album_id = <?=$this->album_info['id']?>;
</script>