#!/bin/sh
ps -fe|grep vlmcsd |grep -v grep >/dev/null
if [ $? -ne 0 ]
then
echo "Not available"
else
echo "OK"
fi
