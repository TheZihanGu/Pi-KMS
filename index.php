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
            <a href="#status" class="mdui-ripple get_value_class" onclick="window.location.hash='status'">
				<label>STATUS</label>
            </a>
			<a href="#control" class="mdui-ripple get_value_class" onclick="window.location.hash='control'">
				<label>CONTROL</label>
            </a>
			<a href="#how" class="mdui-ripple get_value_class" onclick="window.location.hash='control'">
				<label>HOW TO USE</label>
            </a>
			<a href="#help" class="mdui-ripple get_value_class" onclick="window.location.hash='control'">
				<label>HELP</label>
            </a>
		</div>

        <div id="home" class="mdui-p-a-2">
			<div class="mdui-panel" mdui-panel>
				<div class="mdui-panel-item mdui-panel-item-open">
					<div class="mdui-panel-item-body">
						<p></p>
						<div class="mdui-typo">
                            <h3>Pi-KMS</h3>
							<h5>Build a KMS Server on your Raspberry Pi easily!</h5>
							<h5>Click on any of the options to get started.</h5>
						</div>
					</div>
				</div>
			</div>
        </div>

		<div id="status" class="mdui-p-a-2">
			<div class="mdui-panel" mdui-panel>
				<div class="mdui-panel-item mdui-panel-item-open">
					<div class="mdui-panel-item-body">
						<p></p>
						<div class="mdui-typo">
                            <h3>Pi-KNS Status</h3>
							<h5>Status:<?php passthru("sh service/checkstatus.sh");?></h5>
                            <h5>Hostname:<?php passthru("hostname");?></h5>
							<h5>IP:<?php passthru("sh service/getip.sh");?></h5>
							<h5>KMS Server PID:<?php passthru("sh service/getpid.sh");?></h5>
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
                            <h3>Control</h3>
							<h5>There is nothing at here...</h5>
						</div>
					</div>
				</div>
			</div>
        </div>

	</body>
	<script src="https://cdn.bootcss.com/mdui/0.4.2/js/mdui.min.js"></script>
</html>