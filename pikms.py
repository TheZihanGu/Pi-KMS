import os;
print ("===================================")
print ("              PI-KMS               ")
print ("1: Start the KMS Server")
print ("2: Stop the KMS Server")
print ("3: Restart the KMS Server")
print ("4: Check the KMS Server Status")
print ("===================================")
choose = input("Please enter the code you want to execute：")
if choose == "1":
    pidos = os.popen(r"bash service/getpid.sh", "r")
    pid = pidos.read()
    if pid == '':
        os.system ('chmod u+x bin/vlmcsd-armv7el-uclibc-static')
        os.system ('bin/vlmcsd-armv7el-uclibc-static')
        print ("An attempt was made to run KMS Server, please check the KMS Server status.")
    else:
        print ("KMS Server is already running!")
    pidos.close ()
elif choose == "2":
    pidos = os.popen(r"bash service/getpid.sh", "r")
    pid = pidos.read()
    if pid == '':
        print ("The KMS Server isn't running, so you don't need to do that!")
    else:
        os.system('kill ' + pid)
        print ("The KMS Server is stopped.")
    pidos.close ()
elif choose == "3":
    pidos = os.popen(r"bash service/getpid.sh", "r")
    pid = pidos.read()
    if pid == '':
        print ("The KMS Server isn't running, so you don't need to do that!")
    else:
        os.system('kill ' + pid)
        print ("The KMS Server is stopped.")
        os.system ('chmod u+x bin/vlmcsd-armv7el-uclibc-static')
        os.system ('bin/vlmcsd-armv7el-uclibc-static')
        print ("An attempt was made to run KMS Server, please check the KMS Server status.")
elif choose == "4":
    statusos = os.popen(r"bash service/checkstatus.sh", "r")
    status = statusos.read()
    print ("KMS Server Status: " + status)
    statusos.close
else:
    print ("Please enter the correct code!")