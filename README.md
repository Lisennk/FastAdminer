# Fast Adminer

So, you need online tool to work with your database.

**Install PhpMyAdmin?**

Maybe, but it's hard and insecure to do it each time: you can even break the whole server!

**Install Adminer?**

Maybe, it's easier then PhpMyAdmin, but you need to go to the official website, save file to the web directory each time too. Also, if you use Git, i will need to delete `adminer.php` before each commit or add it to `.gitignore`. Isn't perfect solution. 

**Install FastAdminer!**

FastAdminer is simple wrapper for Adminer, that downloads `adminer.php` to your site root directory and then, when you dont need adminer, it deletes it with one key press.

Use case:
* 1. Open terminal and `cd` to your site's root directory
* 2. Run `fastadminer` command: it will download `adminer.php` to the working directory
* 3. Go to `http://[your-site]/adminer.php` some work with adminer
* 4. No, when you don't need adminer, just press Enter and `adminer.php` will be deleted

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

