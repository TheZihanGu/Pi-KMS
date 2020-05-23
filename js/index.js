// 剪切板操作
var clipboard = new ClipboardJS('.copy');
clipboard.on('success', function(e) {
    console.log(e);
    mdui.snackbar({
        message: '复制成功'
    });
});
clipboard.on('error', function(e) {
    console.log(e);
    mdui.snackbar({
        message: '复制失败了...手动CV吧=-='
    });
});

// 获取服务器IP
var serverip = new Vue({
    el: '#serverip',
    data: {
        message: '正在获取...'
    }
})
var httpRequest = new XMLHttpRequest();
httpRequest.open('GET', "./api/getip.php", true);
httpRequest.send();
httpRequest.onreadystatechange = function () {
    if (httpRequest.readyState == 4 && httpRequest.status == 200) {
        var json = httpRequest.responseText;
        console.log(json);
        serverip.message = json;
    }
}

// 获取 KMS 服务器状态
var statuskms = new Vue({
    el: '#statuskms',
    data: {
        message: '正在获取...'
    }
})
var httpRequest1 = new XMLHttpRequest();
httpRequest1.open('GET', "./api/checkstatus.php", true);
httpRequest1.send();
httpRequest1.onreadystatechange = function () {
    if (httpRequest1.readyState == 4 && httpRequest1.status == 200) {
        var kmsstatus = httpRequest1.responseText;
        console.log(kmsstatus);
        statuskms.message = kmsstatus;
    }
}

// 获取主机名
var hostname = new Vue({
    el: '#hostname',
    data: {
        message: '正在获取...'
    }
})
var httpRequest2 = new XMLHttpRequest();
httpRequest2.open('GET', "./api/gethostname.php", true);
httpRequest2.send();
httpRequest2.onreadystatechange = function () {
    if (httpRequest2.readyState == 4 && httpRequest2.status == 200) {
        var hostnameresult = httpRequest2.responseText;
        console.log(hostnameresult);
        hostname.message = hostnameresult;
    }
}
// 获取 Vlmcsd 进程 PID
var vlmcsdpid = new Vue({
    el: '#vlmcsdpid',
    data: {
        message: '正在获取...'
    }
})
var httpRequest3 = new XMLHttpRequest();
httpRequest3.open('GET', "./api/getpid.php", true);
httpRequest3.send();
httpRequest3.onreadystatechange = function () {
    if (httpRequest3.readyState == 4 && httpRequest3.status == 200) {
        var pidresult = httpRequest2.responseText;
        console.log(pidresult);
        vlmcsdpid.message = pidresult;
    }
}