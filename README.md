# :herb: Fast Adminer :herb:

So, you need a tool to work with your database via web interface.

**Install PhpMyAdmin?**

Maybe, but it's hard and insecure to do it each time: you can even break the whole server!

**Install Adminer?**

Maybe, it's easier then PhpMyAdmin, but you still need a couple of things to get it: go to the official website, save file to the web directory, etc. Also, if you use Git, i will need to delete `adminer.php` before each commit or add it to `.gitignore`. Isn't perfect solution. 

**Install FastAdminer!**

FastAdminer is simple wrapper for Adminer, that downloads `adminer.php` to your site root directory and then, when you don't need adminer, it deletes it with one key press. Just type single command in your terminal: `fastadminer`. 

:notes: Use case:
* 1. Open terminal and `cd` to your site's root directory;
* 2. Run `fastadminer` command: it will download `adminer.php` to the working directory;
* 3. Go to `http://[your-site]/adminer.php` and do what you want with Adminer;
* 4. Now, when you don't need adminer, just press Enter and `adminer.php` will be deleted.

## :four_leaf_clover: Installation 
Only Linux support implemented now. Open your terminal and type:
```
sudo wget -O /usr/bin/fastadminer https://raw.githubusercontent.com/Lisennk/FastAdminer/master/src/fastadminer
sudo chmod +x /usr/bin/fastadminer
```

## :shell: Usage
```
cd /your/site/root/directory
fastadminer
```

