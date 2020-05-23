screen -dmS pikms;
screen -S pikms -p 0 -X stuff "cd ../../bin";
screen -S pikms -p 0 -X stuff $'\n';
screen -S pikms -p 0 -X stuff "./vlmcsd-x64-musl-static -l vlmcsd-log.txt";
screen -S pikms -p 0 -X stuff $'\n';