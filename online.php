<?php
    // 你的Minecraft服务器IP和端口
    $serverIP = "mc.rscgwj.top";
    $serverPort = 25565;

    // 获取服务器信息
    $serverInfo = json_decode(file_get_contents("https://api.mcsrvstat.us/2/$serverIP:$serverPort"), true);

    // 检查是否成功获取信息
    if ($serverInfo['online']) {
        // 输出在线人数
        echo $serverInfo['players']['online'];
    } else {
        echo "无法获取服务器信息";
    }
?>