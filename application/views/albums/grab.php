<div class="row">
    <h3>自动抓取信息<small>信息库来自 <a href="http://www.douban.com">豆瓣</a> </small></h3>
    <div>
        <form class="form-inline">
            <div class="form-group">
                <label for="albumid">豆瓣专辑ID</label>
                <input type="text" class="form-control" id="albumid" placeholder="豆瓣专辑ID">
            </div>
            <button type="button" class="btn btn-primary" onclick="askGrab()">抓取</button>
        </form>
        <blockquote>
            <p>例如<a href="http://music.douban.com/subject/1401361/">Abbey Road</a>的豆瓣链接是：http://music.douban.com/subject/1401361<br/>其豆瓣专辑ID就是最后的数字1401361</p>
        </blockquote>
    </div>
    <div id="grabDetail">
    </div>
</div>
<script>
function askGrab(){
    var id = $("#albumid").val();
    ajax_load({m:'albums',a:'grabDetail',plus:id,id:"#grabDetail"});
}
</script>