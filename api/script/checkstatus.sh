#!/bin/sh
ps -fe|grep vlmcsd |grep -v grep >/dev/null
if [ $? -ne 0 ]
then
echo "服务未运行"
else
echo "服务运行中"
fi
