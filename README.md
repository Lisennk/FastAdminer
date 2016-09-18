# FastAdminer

So, you need online tool to work with your database.

**Install PhpMyAdmin?**

Maybe, but it's hard and insecure to do it each time: you can even break the whole server!

**Install Adminer?**

Maybe, it's easier then PhpMyAdmin, but you need to go to the official website, save file to the web directory each time too. Also, if you use Git, i will need to delete `adminer.php` before each commit or add it to `.gitignore`. Isn't perfect solution. 

## Installation 
```
sudo wget -O /usr/bin/fastadminer https://raw.githubusercontent.com/Lisennk/FastAdminer/master/src/fastadminer
sudo chmod +x /usr/bin/fastadminer
```

## Usage
```
cd /your/site/root/directory
fastadminer
```

