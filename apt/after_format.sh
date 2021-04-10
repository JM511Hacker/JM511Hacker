#!/bin/bash
c(){
    command -v "$1" >/dev/null 2>&1
    if [[ $? -ne 0 ]]; then
        sudo apt install $1 -y
        exit 1
    fi
}
for COMMAND in "figlet" "cpan" "gem" "synaptic"; do
    c "${COMMAND}"
done
coption(){
    printf '\e[1;37m\n#Hit Enter to Skip, or Type 1 to install..\n\e[0m'
read -p $'\e[1;32m#Enter Now : \e[0m' answer
}
echo "Start Update/Upgrade" | figlet
coption
if [[ "$answer" == "1" ]]; 
then
sudo service tor start
sudo service ssh stop
sudo apt update
sudo apt --fix-broken install -y
sudo apt full-upgrade -y
sudo apt-get -o Dpkg::Options::="--force-overwrite" upgrade -y
#sudo apt-key adv --keyserver pgp.mit.edu --recv-keys EXPKEYSIG
#sudo apt-key adv --keyserver pgp.mit.edu --recv-keys CDFB5FA52007B954
sudo apt autoclean -y
sudo apt clean -y
sudo apt autoremove -y
sudo apt remove -y
sudo apt dist-upgrade -y
sudo apt upgrad -y
sudo apt update -y
echo "Trying Proxychains ..."
sudo proxychains apt update -y
sudo proxychains apt --fix-broken install -y
sudo proxychains apt update -y
sudo proxychains apt-get -o Dpkg::Options::="--force-overwrite" upgrade -y
sudo proxychains apt full-upgrade -y
sudo proxychains apt autoclean -y
sudo proxychains apt clean -y
sudo proxychains apt autoremove -y
sudo proxychains apt remove -y
sudo proxychains apt dist-upgrade -y
sudo proxychains apt upgrad -y
sudo proxychains apt update -y
clear
echo "ALL DONE"
fi
#REQ-1
echo "REQ1 libpcap" | figlet
coption
if [[ "$answer" == "1" ]];
then
sudo apt-get install libpcap-dev cpanminus
sudo apt-get install libpcap0.8-dev libmoose-perl
sudo apt-get install libio-socket-socks-perl
sudo apt-get install python3 python-dev python3-dev build-essential libssl1.0.0 libssl-dev libffi-dev libxml2-dev libxslt1-dev zlib1g-dev python-pip
sudo apt-get install libwww-mechanize-shell-perl
sudo apt-get install perl-doc python-mysqldb perl-mechanize
fi
clear
echo "CPAN Net" | figlet
coption
if [[ "$answer" == "1" ]];
then
cpan -i Net::SSH
sudo cpan -i Net::SSH
cpan -i WWW-Mechanize
sudo cpan -i WWW-Mechanize
cpanm Net::SSH::Perl
sudo cpanm Net::SSH::Perl
cpan -i Net::Whois::IP
sudo cpan -i Net::Whois::IP
sudo gem install bundler && bundle config set without 'test'
fi
#APACHE/PHPMYADMIN/mariadb/php7.4
echo "APACHE/PHPMYADMIN/MYSQL/PHP" | figlet
coption
if [[ "$answer" == "1" ]]; 
then
sudo apt install apache2
sudo apt install mariadb-server
#sudo mysql_secure_installation
sudo apt-get install -y php7.4 php7.4-{bcmath,bz2,intl,gd,mbstring,mysql,zip,json,mcrypt}
#sudo vi /etc/apache2/mods-enabled/dir.conf
sudo systemctl restart apache2
sudo apt install phpmyadmin php-mbstring php-gettext
#sudo apt-get install -y php7.2-{bcmath,bz2,intl,gd,mbstring,mysql,zip}
#sudo apt install libapache2-mod-security2
#sudo apt install libapache2-mod-evasive -y
sudo ln -s /etc/phpmyadmin/apache.conf /etc/apache2/conf-available/phpmyadmin.conf
sudo a2enconf phpmyadmin
sudo systemctl enable mysql
#sudo a2enmod security2
fi
#install pip
echo "Python pip" | figlet
coption
if [[ "$answer" == "1" ]];
then
sudo apt install python-pip python3-pip python3-lib2to3 2to3 python3-toolz geoip-bin patator
#pip install
pip install --upgrade pip --user
sudo python3 -m pip --use-feature=2020-resolver
sudo python3 -m pip install mysqlclient --user
echo "pip install" | figlet
pip install cx_Oracle --user --use-feature=2020-resolver
pip install pexpect tweepy ghost IPy gevent pyOpenSSL bandit engine blindpie --user
sudo pip install pexpect tweepy ghost IPy gevent pyOpenSSL bandit engine blindpie --user
pip3 install pexpect tweepy ghost IPy gevent pyOpenSSL bandit engine blindpie --user
sudo pip3 install pexpect tweepy ghost IPy gevent pyOpenSSL bandit engine blindpie --user
fi
#Install t00l
echo "t00l install" | figlet
coption
if [[ "$answer" == "1" ]];
then
sudo apt install dnstracer ncrack sqlitebrowser synapse kazam guake dos2unix glances torbrowser-launcher zipalign rdfind dmitry asciinema
sudo apt-get install python-gevent python-gevent-websocket deepin-terminal onesixtyone
sudo apt install jboss-autopwn whatweb gnome-terminal alacarte pnscan 
fi
#Java
echo "Java 14 install" | figlet
coption
if [[ "$answer" == "1" ]]; 
then
sudo apt install openjdk-11-jdk
sudo add-apt-repository ppa:linuxuprising/java
sudo apt -y install oracle-java14-set-default
source /etc/profile.d/jdk.sh
fi
#Clean before close
sudo journalctl --vacuum-time=3d
sudo journalctl --vacuum-time=2d
sudo journalctl --vacuum-time=1d
sudo journalctl --vacuum-time=10M
du -sh ~/.cache/thumbnails
rm -rf ~/.cache/thumbnails/*
du -sh ~/.cache/thumbnails
netstat -ntu | awk '{print $5}' | cut -d: -f1 | sort | uniq -c | sort -n
