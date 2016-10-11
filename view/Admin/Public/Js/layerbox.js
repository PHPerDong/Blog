/**
 * Created by Administrator on 2016/9/9.
 */
$(function(){
    //账户修改
    $(".update").on('click',function(){
        var id = $(this).attr('data-id');
        layer.open({
            type: 2,
            title: '账户修改',
            maxmin: true,
            shadeClose: true, //点击遮罩关闭层
            area : ['500px' , '320px'],
            content: '/index.php/Admin/User/update.html?id='+id,
            cancel: function(index){
                layer.close(index);
            }
        });
    })
    //用户组修改
    $(".groupupdate").on('click',function(){
        var id = $(this).attr('data-id');
        layer.open({
            type: 2,
            title: '用户组名修改',
            maxmin: true,
            shadeClose: true, //点击遮罩关闭层
            area : ['500px' , '320px'],
            content: '/index.php/Admin/AdminGroup/update.html?id='+id,
            cancel: function(index){
                layer.close(index);
            }
        });
    })

    //文章修改
    $(".newsupdate").on('click',function(){
        var id = $(this).attr('data-id');
        layer.open({
            type: 2,
            title: '文章修改',
            maxmin: true,
            shadeClose: true, //点击遮罩关闭层
            area : ['1100px' , '720px'],
            content: '/index.php/Admin/News/updateList.html?id='+id,
            cancel: function(index){
                layer.close(index);
            }
        });
    })

    //文章删除
    $(".delnewss").on('click',function(){
        var id = $(this).attr('data-id');
        layer.confirm('确定要删除？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            layer.msg('加载中', {icon: 16});
            newsDel({
                id:id
            },function(d){
                layer.msg(d.msg, {icon: 1});
            },function(d){
                layer.msg(d.msg, {icon: 2});
            });
        }, function(){

        });
    })

    $(".del").on('click',function(){
        var id = $(this).attr('data-id');
        layer.confirm('确定要删除？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            layer.msg('加载中', {icon: 16});
            userDel({
                id:id
            },function(d){
                layer.msg('已删除', {icon: 1});
            },function(d){
                if(d.code==0){
                    layer.msg('超级管理员不能删除', {icon: 2});
                }else{
                    layer.msg('删除失败', {icon: 2});
                }

            });
        }, function(){

        });
    })

    //用户组名删除
    $(".delgroup").on('click',function(){
        var id = $(this).attr('data-id');
        layer.confirm('确定要删除？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            layer.msg('加载中', {icon: 16});
            groupDel({
                id:id
            },function(d){
                layer.msg('删除成功', {icon: 1});
            },function(d){
                if(d.code==0){
                    layer.msg('超级管理员用户组不能删除', {icon: 2});
                }else{
                    layer.msg('删除失败', {icon: 2});
                }

            });
        }, function(){

        });
    })

})

//用户删除
function userDel(data,success,error) {
    sendAjax('/index.php/Admin/User/delete.html',data,success,error);
}

//用户组删除
function groupDel(data,success,error) {
    sendAjax('/index.php/Admin/AdminGroup/delete.html',data,success,error);
}

//用户删除
function newsDel(data,success,error) {
    sendAjax('/index.php/Admin/News/delete.html',data,success,error);
}


function sendAjax(url,data,success,error) {
    $.ajax({
        url:url,
        type:'post',
        data:data,
        dataType:"json",
        success:function(json){
            if(json.code == 200){
                if(success != undefined){
                     success(json);
                }
            }else{
                if(error != undefined){
                     error(json);
                }
            }
        },
        error:function(){
            if(error!= undefined){
                error({message:"网络异常"});
            }
        }

    })

}

//无权限操作
function auth() {
    layer.msg('你没有权限操作该功能', {icon: 2});
}


//下拉
$(".dropdown").live('click',function(e){
    if($(this).hasClass("open")){
        $(this).removeClass("open");
    }else{
        $(".dropdown").removeClass("open");
        $(this).addClass("open");
    }
    //e.stopPropagation();
});

