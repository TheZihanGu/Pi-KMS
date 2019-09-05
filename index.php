<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="renderer" content="webkit">
		<meta name="theme-color" content="#3F51B5" />
		<title>Pi-KMS</title>
		<link href="https://cdn.bootcss.com/mdui/0.4.2/css/mdui.min.css" rel="stylesheet">
	</head>
	<body class="mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-primary-indigo mdui-theme-accent-pink">
		<header class="mdui-appbar mdui-appbar-fixed">
			<div class="mdui-toolbar mdui-color-theme">
				<span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#main-drawer', swipe: true}"><i class="mdui-icon material-icons">menu</i></span>
				<a href="https://github.com/TheZihanGu/Pi-KMS" target="_blank" class="mdui-typo-headline mdui-hidden-xs">Pi-KMS</a>
			</div>
		</header>

		<div class="mdui-drawer" id="main-drawer">
			<div class="mdui-list" mdui-collapse="{accordion: true}" style="margin-bottom: 76px;">
				<li class="mdui-list-item mdui-ripple">
					<i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-light-blue">home</i>
					<div class="mdui-list-item-content">
						<a href="./" class="mdui-ripple">HOME</a>
					</div>
					</div>			
				</li>
			</div>

		<div class="mdui-tab mdui-color-indigo" mdui-tab>
			<a href="#home" class="mdui-ripple get_value_class" onclick="window.location.hash='home'">
				<label>HOME</label>
            </a>
            <a href="#control" class="mdui-ripple get_value_class" onclick="window.location.hash='home'">
				<label>CONTROL</label>
            </a>
		</div>

        <div id="home" class="mdui-p-a-2">
			<div class="mdui-panel" mdui-panel>
				<div class="mdui-panel-item mdui-panel-item-open">
					<div class="mdui-panel-item-body">
						<p></p>
						<div class="mdui-typo">
                            <h3>Pi-KMS</h3>
							<h5>Status:<?php passthru("sh check/status.sh");?></h5>
                            <h5>Hostname:<?php passthru("hostname");?></h5>
						</div>
					</div>
				</div>
			</div>
        </div>

        <div id="control" class="mdui-p-a-2">
			<div class="mdui-panel" mdui-panel>
				<div class="mdui-panel-item mdui-panel-item-open">
					<div class="mdui-panel-item-body">
						<p></p>
						<div class="mdui-typo">
                            <h3>Control Panel</h3>
                            <h5>Status:<?php passthru("sh check/status.sh");?></h5>
                            <div class="mdui-container">
                                <button class="mdui-btn mdui-color-theme-accent mdui-ripple" mdui-dialog="{target: '#start'}">Start</button>
                                <button class="mdui-btn mdui-color-theme-accent mdui-ripple" mdui-dialog="{target: '#exampleNoTitle'}">Stop</button>
                                <a href="./bin/viewlog.php"><button class="mdui-btn mdui-btn-raised">View the log</button></a>
                                <div class="mdui-dialog" id="start">
                                    <div class="mdui-dialog-content">To prevent unauthorized operations, use the terminal to execute this script to start the KMS server: bash [program location]/bin/start.sh</div>
                                    <div class="mdui-dialog-actions">
                                    <button class="mdui-btn mdui-ripple" mdui-dialog-confirm>OK</button>
                                    </div>
                                </div>
                            </div>
                            <a href="./bin/stop.php"><button class="mdui-btn mdui-btn-raised">Stop</button></a>
                            <a href="./bin/viewlog.php"><button class="mdui-btn mdui-btn-raised">View the log</button></a>
						</div>
					</div>
				</div>
			</div>
        </div>

	</body>
	<script src="https://cdn.bootcss.com/mdui/0.4.2/js/mdui.min.js"></script>
</html>