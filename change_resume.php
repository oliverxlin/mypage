<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>简历</title>
    <link href="css/nav_bar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/footer.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/resume_sub.css">
    <link href="css/login.css" rel="stylesheet">
    <!-- <script type="text/javascript" src="js/time.js"></script> -->

    <?php 
    session_start();
    if (isset($_SESSION['name'])) {
        $name = $_SESSION['name'];
        $con = mysqli_connect("localhost", "root", "123");
        $sql = "SELECT * FROM users where name = '$name'";
        mysqli_query($con, "set names utf8");
        mysqli_select_db($con, "mypage");
        $retval = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
    }
    else{
        header("Location: ./not_login.html");
    }

    ?>              
</head>
<script language="Javascript" script text="text/javascript">
    function clock() {
        var time = new Date();
        var hour = time.getHours();
        var minute = time.getMinutes();
        var second = time.getSeconds();
        hour = hour >= 10 ? hour : ("0" + hour);
        minute = minute >= 10 ? minute : ("0" + minute);
        second = second >= 10 ? second : ("0" + second);
        document.form1.myClock.value = "现在是" + hour + "时" + minute + "分" + second + "秒";
        setTimeout("clock()", 1000); //定时反复的执行
    }

    function getQueryString(name) {

        var reg = new RegExp('(^|&)' + name + '=([^&]*)(&|$)', 'i');

        var r = window.location.search.substr(1).match(reg);

        if (r != null) {

            return unescape(r[2]);

        }

        return null;

    }
    function tag_display(){
        var login_status = "<?php 
                            if (isset($_SESSION['name'])) {
                                echo "1";
                            } else {
                                echo "0";
                            }
                            ?>";
        if(login_status==0){
            form2.style.display = 'none';
            tips.style.display = 'block';
        }
        else{
            
            form2.style.display = 'block';
            tips.style.display = 'none';

        }
    }

        var secs = 8;
      function countDown() {
        alert("123");
        if (secs > 0) {
          num.innerHTML = secs--;
        }
        else
          location = "./index.html";
          
        }
        
</script>

<body onLoad="clock(),tag_display(),setInterval('countDown()', 1000)">


    <form name="form1" method="post" action="">
        <div align="center">
            <input name="myClock" type="text" style="border-style:none; font-size:14px; background:#DBDBDB;font-family:'新宋体'; font-weight:bold; text-align:center;">
        </div>
    </form>

    <form name="form2" action="resume_sub.php" id="resume_form" method="POST">
        <table width="776" align="center" class="bordered1">

            <tr>
                <td>
                    <div align="center">
                        <p>真实姓名：<input type="text" name="xm" size=15 value="<?php echo $row['name'] ?>"></p>
                    </div>
                    </td>
            </tr>


             <tr>
                <td height="57">
                    <p> 性别:
                        <input type=radio name="性别" value="男" checked> 男
                        <input type=radio name="性别" value="女"> 女 &nbsp;
                    </p>
                    <br>
                </td>
            </tr>
            <tr>
                <td>
                    <p> 出生日期:

                        <input type=text name="year" size=2 value="<?php echo $row['year'] ?>"> 年
                        <input type=text name="month" size=2 value="<?php echo $row['month'] ?>"> 月
                        <input type=text name="day" size=2 value="<?php echo $row['day'] ?>"> 日
                    </p>
                    <br>
                </td>
            </tr>
            <tr>
                <td height="69">
                    <p> 个人爱好:
                        <input type=checkbox name="爱好" value="体育"> 体育
                        <input type=checkbox name="爱好" value="文学"> 文学
                        <input type=checkbox name="爱好" value="艺术"> 艺术
                        <input type=checkbox name="爱好" value="旅游"> 旅游
                        <input type=checkbox name="爱好" value="美食"> 美食
                        <input type=checkbox name="爱好" value="其他"> 其他
                    </p>
                    <br>
                </td>
            </tr>
            <tr>
                <td>
                    <p> 学历:
                        <select name="学历" size=1>
                                    <option value="中专">中专
                            <option selected value="大专">大专
                            <option value="大学">大学
                            <option value="硕士">硕士
                            <option value="博士">博士
                            <option value="其他">其他
                            </select>
                    </p>
                    <br>
                </td>
            </tr>
            <tr>
                <td>
                    <p> 职称:
                        <select name="职称" size=3>
                            <option value="助教">助教
                            <option value="讲师">讲师
                            <option value="副教授">副教授
                            <option value="教授">教授
                            <option value="其他">其他
                            </select>
                    </p>
                    <br>
                </td>
            </tr>
            <tr>
                <td>
                    <p> <span class="STYLE2">个人介绍:</span> <br><br>
                        <textarea name=comment rows=5 cols=60>
                        </textarea>
                    </p>
                    <br>
                </td>
            </tr>
            <tr>
                <td>
                    <center>

                        <input name="submit" type=submit value="提交">
                        <a href="file:///C|/xampp/htdocs/3.html"></a>
                        <input name="reset" type=reset value="重填">

                    </center>
                </td>
            </tr>
    </table>
</form>
    

</body>

</html>