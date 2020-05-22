#!/bin/sh
ps -ef | grep "vlmcsd-armv7el-uclibc-static" | grep -v "grep" | awk '{print $2}'