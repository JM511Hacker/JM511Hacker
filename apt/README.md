# APT / PIP Commands / Crunch / Dos

### &#x1F539; APT :
    sudo apt-get -o Dpkg::Options::="--force-overwrite" upgrade
    

#### &#x1F539; FIX Metasploit Key Expired :
    wget -O - http://apt.metasploit.com/metasploit-framework.gpg.key | sudo apt-key add -
    sudo apt-key adv --keyserver hkp://keys.gnupg.net --recv-keys CDFB5FA52007B954
    
#### &#x1F539; After format :
    sudo apt-get install libmoose-perl
    sudo apt-get install libio-socket-socks-perl
    sudo apt-get install libwww-mechanize-shell-perl
    sudo apt-get install perl-mechanize
    sudo apt-get install perl-doc
    sudo apt-get install python3 python-dev python3-dev build-essential libssl-dev libffi-dev libxml2-dev libxslt1-dev zlib1g-dev python-pip
    sudo apt-get install python-gevent python-gevent-websocket
    sudo apt-get install python-mysqldb
    
#### &#x1F539; ADD Kali tools in backbox : 
    cat << EOF > /etc/apt/sources.list
    deb http://http.kali.org/kali sana main non-free contrib
    deb http://security.kali.org/kali-security/ sana/updates main contrib non-free
    EOF
    sudo apt update
    
    
#### &#x1F539; ADD DarkTools in backbox :
    sudo add-apt-repository ppa:darklordpaunik8880/darkminttrustytahr
    sudo apt-get update
    sudo apt-get install maltego

#### &#x1F539; Crunch Create random password :

   `crunch 3 4 -f /usr/share/crunch/charset.lst mixalpha-numeric -o out.txt`
   
   `crunch 8 8 -t 'admin'%%%  -o out.txt`

#### &#x1F539; Stop & check DDos : 
    netstat -anp |grep 'tcp\|udp'
    ps -aux|grep -i HTTP|wc -l
    netstat -an | grep :80 | sort
    #############################
    # how many active SYNC_REC are on the server ?
    netstat -n -p|grep SYN_REC | wc -l
    #############################
    netstat -n -p | grep S
    netstat -n -p | grep SYN_REC
    netstat -n -p | grep SYN_REC | sort -u
    #############################
    # List all IP addresses sending SYN_REC
    netstat -n -p | grep SYN_REC | awk '{print $5}' | awk -F: '{print $1}'
    #############################
    netstat -ntu | awk '{print $5}' | cut -d: -f1 | sort | uniq -c | sort -n
    netstat -anp |grep 'tcp|ustartHeaderdp' | awk '{print $5}' | cut -d: -f1 | sort | uniq -c | sort -n
    netstat -ntu | grep ESTAB | awk '{print $5}' | cut -d: -f1 | sort | uniq -c | sort -nr
    netstat -plan|grep :80|awk {'print $5'}|cut -d: -f 1|sort|uniq -c|sort -nk 1
    netstat -alntp | grep :80 | wc -l
    netstat -antp | grep :3306 | wc -l
    netstat -ant | awk '{print $6}' | sort | uniq -c | sort -n
    service apache2 restart

    #View only listen/program :
    - sudo netstat --tcp --udp --listening --program
    - sudo lsof +M -i4
    
    #Check port 80 :
    - sudo fuser -v 80/tcp
    - 
    #TO KILL PORT NUMBER 80 :
    - sudo fuser -vk 80/tcp
