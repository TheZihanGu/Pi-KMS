#!/bin/sh
ps -ef | grep "vlmcsd" | grep -v "grep" | awk '{print $2}'