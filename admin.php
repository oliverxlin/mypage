
<html>
<head>
    <title>用户管理界面</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/nav_bar.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <style type="text/css">

    
    /* -------------菜单css代码----------begin---------- */
    .menuDiv { 
        border: 2px solid #aac; 
        overflow: hidden; 
        display:inline-block;
        height :100%;
        background-color:#F0F0F0;
        margin-left:0;
        border-radius: 15px;
    }
    
    /* 去掉a标签的下划线 */
    .menuDiv a {
        text-decoration: none;
    }
    
    /* 设置ul和li的样式 */
    .menuDiv ul , .menuDiv li {
        list-style: none;
        margin: 0;
        padding: 0;
    } 
    
    /* 设置二级菜单绝对定位，并隐藏 */
    .menuDiv > ul > li > ul {
        display: none;
    }

    /* 设置二级菜单的li的样式 */
    .menuDiv > ul > li > ul > li {
        float: none;
    }
  
    /* 鼠标放在一级菜单上，显示二级菜单 */
    .menuDiv > ul > li:hover ul {
        display: block;
    }

    /* 一级菜单 */
    .menuDiv > ul > li > a {
        width: 130px;
        line-height: 40px;
        color: #5b5b5b;
        background-color: #F0F0F0;
        text-align: center;
        border-left: 1px solid #bbf;
        display: block;
    }
    
    /* 在一级菜单中，第一个不设置左边框 */
    .menuDiv > ul > li:first-child > a {
        border-left: none;
    }

    /* 在一级菜单中，鼠标放上去的样式 */
    .menuDiv > ul > li > a:hover {
        background-color: #ADADAD;
    }

    /* 二级菜单 */
    .menuDiv > ul > li > ul > li > a {
        width: 130px;
        line-height: 36px;
        color: #456;
        background-color: #d0d0d0;
        text-align: center;
        border: 1px solid #ccc;
        border-top: none;
        display: block;
    }
    
    /* 在二级菜单中，第一个设置顶边框 */
    .menuDiv > ul > li > ul > li:first-child > a {
        border-top: 1px solid #ccc;
    }
    
    /* 在二级菜单中，鼠标放上去的样式 */
    .menuDiv > ul > li > ul > li > a:hover {
        color: white;
        background-color: black;
    }
    /* -------------菜单css代码----------end---------- */
    .contain{
    display: -webkit-flex;
    display: flex;
    -webkit-flex-flow:row;
    flex-flow: row;

    max-width: 100%;
    height: 100%;
    margin: auto;
}
.container{
    -webkit-flex:3;
    flex: 3;
}
.menuDiv{
    -webkit-flex:1;
    flex: 1;
}
    </style>
</head>
<body>

<div class="contain">
<div class="menuDiv">
 <ul>
    <h3 style="text-align:center;color:#5b5b5b">管理员界面</h3>
 </ul>
<ul>
    <li>
        <a href="#">用户管理</a>
        <ul>
            <li><a onclick="change_iframe(this)" href="change_pwd.html">更改用户密码</a></li>
            <li><a href="#">二级菜单</a></li>
            <li><a href="#">二级菜单</a></li>
        </ul>
    </li> 
    <li>
        <a href="#">数据库管理</a>
        <ul>
            <li><a href="add_user.html">增加用户信息</a></li>
            <li><a href="delete.html">删除用户</a></li>
        </ul>
    </li> 
    <li>
        <a href="#">一级菜单</a>
        <ul>
            <li><a href="#">二级菜单</a></li>
            <li><a href="#">二级菜单</a></li>
            <li><a href="#">二级菜单</a></li>
            <li><a href="#">二级菜单</a></li>
            <li><a href="#">二级菜单</a></li>
        </ul>
    </li> 
    <li>
        <a href="#">菜单四</a>
    </li> 
    <li>
        <a href="./logout.php">登出</a>
        <!-- <ul>
            <li><a href="#">二级菜单</a></li>
            <li><a href="#">二级菜单</a></li>
            <li><a href="#">二级菜单</a></li>
        </ul> -->
    </li> 
</ul>
</div>
<div class="container" >
        <div class="row">
            <form class="form-login" action="change_pwd.php" method="post">
                <h2>修改密码</h2>
                <label>
                    <b>新的密码</b>
                </label>
                </br>
                <input name="pwd" id="inputpwd" type="password" placeholder="请输入新的密码" required>
                <br>

                <button type="submit" id="btn-login">提交</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>