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
				<a href="./" target="_blank" class="mdui-typo-headline mdui-hidden-xs">Pi-KMS</a>
			</div>
		</header>

		<div class="mdui-drawer" id="main-drawer">
			<div class="mdui-list" mdui-collapse="{accordion: true}" style="margin-bottom: 76px;">
				<li class="mdui-list-item mdui-ripple">
					<i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-light-blue">home</i>
					<div class="mdui-list-item-content">
						<a href="./" class="mdui-ripple">主页</a>
					</div>
					</div>			
				</li>
			</div>

		<div class="mdui-tab mdui-color-indigo" mdui-tab>
			<a href="#home" class="mdui-ripple get_value_class" onclick="window.location.hash='home'">
				<label>主页</label>
            </a>
            <a href="#status" class="mdui-ripple get_value_class" onclick="window.location.hash='status'">
				<label>状态</label>
            </a>
			<a href="#control" class="mdui-ripple get_value_class" onclick="window.location.hash='control'">
				<label>控制台</label>
            </a>
			<a href="#how" class="mdui-ripple get_value_class" onclick="window.location.hash='control'">
				<label>如何使用</label>
            </a>
			<a href="#help" class="mdui-ripple get_value_class" onclick="window.location.hash='control'">
				<label>帮助</label>
            </a>
		</div>

        <div id="home" class="mdui-p-a-2">
			<div class="mdui-panel" mdui-panel>
				<div class="mdui-panel-item mdui-panel-item-open">
					<div class="mdui-panel-item-body">
						<p></p>
						<div class="mdui-typo">
                            <h3>Pi-KMS</h3>
							<h5>更容易地在你的树莓派上搭建一个KMS服务器！</h5>
							<h5>请查看其他选项以开始。</h5>
							<h5>想要在任何地方使用KMS服务器？查看<a href="https://kms.zihangu.com">TZG KMS服务器</a>
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
                            <h3>Pi-KMS 状态</h3>
							<h5>状态:<?php passthru("sh service/checkstatus.sh");?></h5>
                            <h5>主机名:<?php passthru("hostname");?></h5>
							<h5>IP地址:<?php passthru("sh service/getip.sh");?></h5>
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
                            <h3>控制台</h3>
							<h5>为了安全，请使用Python程序进行控制。</h5>
							<h5>python3 <?php passthru("pwd");?>/pikms.py</h5>
						</div>
					</div>
				</div>
			</div>
        </div>

	</body>
	<script src="https://cdn.bootcss.com/mdui/0.4.2/js/mdui.min.js"></script>
</html>