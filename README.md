# TinyWebDB-PHP
**TinyWebDB System written in PHP**, compatible with Apache & PHP

---
---

# How to host your own TinyWebDB Instance
This tutorial will help you to host your **own TinyWebDB Instance** for FREE using an alternative [**PHP** version](https://github.com/Makeroid/TinyWebDB-PHP)
This means that you can use _any hosting provider_ or a _VPS with a running Apache & PHP server_

The tutorial is divided in **4 different sections**:
1. [Signup into a hosting service](#1-signup-into-a-hosting-service)
2. [Uploading the files](#2-uploading-the-files)
3. [Configuration](#3-configuration)
4. [Makeroid Builder setup](#4-makeroid-builder-setup)

---

### 1. Signup into a hosting service

You can skip this step and go to "[2. Uploading the files](#2-uploading-the-files)" if you already have a hosting provider or a VPS

One provider that will suit you is [AwardSpace](https://www.awardspace.com/), so we'll use that one for this guide. But you can use any other if they allow API hostings (_this means that websites can be accessed with JavaScript disabled basically_)
![image|690x320](https://community.makeroid.io/uploads/default/original/2X/9/9f1b0ab1fb6c170639e93bb210476caeea56b453.jpg)

1. **Signup** into [AwardSpace](https://www.awardspace.com/free-web-hosting-registration/) by clicking on the "_Give it a try_" button
![image|209x85](https://community.makeroid.io/uploads/default/original/2X/b/b5ce7270c77db382c53abb85dd0781248ae47ae5.jpg)

2. **Fill the following form** with your _details_ (or use a Social Login) and click on _Register Now!_
![image|690x258](https://community.makeroid.io/uploads/default/original/2X/6/6ef79c165c1d5c44d661de6eaf5aa534672a1295.png)

3. After closing all _Welcome Dialogs_, **scroll down** and click on **Domain Manager**:
![image|690x407](https://community.makeroid.io/uploads/default/original/2X/c/c048a9b5582ee4f730e469a9740038e48d40e107.png)

4. Click on "_Create a Free Subdomain_", input the desired name for your project and hit "_Create_":
![image|690x209](https://community.makeroid.io/uploads/default/original/2X/f/f8973a8612893df015de90e04d74cf5ef34db766.png)

5. **You are done!** In a few minutes your new website will be ready

&nbsp;

### 2. Uploading the files

For this section, we'll use the File Transfer Protocol ([FTP](https://en.wikipedia.org/wiki/File_Transfer_Protocol)) to upload the files as all hosting providers allow it, and you can easily configure it for your VPS (just run `sudo apt-get install vsftpd` if FTP is not yet enabled)

1. First of all, we'll need to **install a FTP Client** on our computer to access the files. I strongly recommed [FileZilla](https://filezilla-project.org/). For me, it's the best one due to its simplicity and functionalities.
<b></b> - For _Windows_ users: [Windows x64](https://download.filezilla-project.org/client/FileZilla_3.34.0_win64-setup_bundled.exe) or [Windows x32](https://download.filezilla-project.org/client/FileZilla_3.34.0_win32-setup_bundled.exe)
<b></b> - For _Mac OS X_ users: [Mac OS X](https://download.filezilla-project.org/client/FileZilla_3.34.0_macosx-x86_setup_bundled.dmg)
<b></b> - For _Linux_ users: Execute `sudo apt-get install filezila`
Or just Google "_FileZilla Client `your_platform_name` Installation_"

2. Now we will need the **FTP Access Credentials**
_If you use a VPS, those credentials are the ones used to login via SSH_
Let's go back to [AwardSpace](https://awardspace.net). To get those credentials, you'll need to Login to the _Dashboard_, and click on _FTP Manager_
![image|690x408](https://community.makeroid.io/uploads/default/original/2X/0/0a3f31fed2eb59a7152ae1bd03b3f5c7121d4c20.png)
Now create a new FTP Account by filling these textboxes (leave `FTP Path` blank):
![image|690x252](https://community.makeroid.io/uploads/default/original/2X/2/29d0d68b297d720f60c8f62e7aff65771f20b420.png)
Finally, **scroll down** and click on "_Information_"
![image|690x396](https://community.makeroid.io/uploads/default/original/2X/b/b2b7d5caba4d1a1e3e133a305778ce9504604fe9.png)
We’ll need the `FTP Username` and one of the `Hostnames` (`FTP Password` is the one you inputted before) only

3. **Open FileZilla**, and **fill the textboxes** that are on the top with this data:
![image|690x112](https://community.makeroid.io/uploads/default/original/2X/1/1bb9d1030d91121807b9750a2ae031b9df7f6266.png)
**Host**: `your_website_url` or _your hosting provider FTP URL_ or _your VPS IP Address_
**Username**: `FTP Username` _from the last step_ or the _FTP Username of your hosting provider_ or _your VPS username_
**Password**: `FTP Password` _from the last step_ or the _FTP Password of your hosting provider_ or _your VPS password of the username_
**Port**: `21` _if you use a hosting provider_ or `22` _if you have a VPS_

4. Now hit **_Quickconnect_**, and **if** appears check the "_Always trust certificate in future sessions_" and hit "_OK_":
![image|690x384](https://community.makeroid.io/uploads/default/original/2X/1/17ac138bb7d68222fc93d435a15184bd277011bb.png)

5. You'll see these new folders:
![image|683x376](https://community.makeroid.io/uploads/default/original/2X/3/3608fd87c5d5398186cb3f23a4eadc867c2a558e.png)
**Access to `your_website_url`** (if you are using a VPS go to `/var/www/html`) folder (it can sometimes be `public_html` or `public`) and **delete ALL its files** (except the `..` folder)

6. **Now download [this ZIP file](https://github.com/Makeroid/TinyWebDB-PHP/archive/master.zip)**
Extract the ZIP, navigate to `TinyWebDB-PHP-master` and you'll see the following files:
![image|568x500](https://community.makeroid.io/uploads/default/original/2X/1/1086e10dfde7fd6a1f31a2632167676f2f87aee9.png)
You need to upload the following files: `.htaccess`, `database.txt`, `getvalue.php` and `storeavalue.php`. Select them and drag to the FTP Client to upload
![image|690x304](https://community.makeroid.io/uploads/default/original/2X/e/ebc6278f6d493aa8dec817807c4391cbe7ef1b72.png)
It should look like this:
![image|682x371](https://community.makeroid.io/uploads/default/original/2X/6/6ba1fa61ffac3b907f0204263395c95423140b3b.png)

&nbsp;

### 3. Configuration

1. In FileZilla, make right click to `database.txt` and click on "_File permissions..._":
You need to make the new dialog like this:
![image|285x337](https://community.makeroid.io/uploads/default/original/2X/c/c36a5a46532b377a3ed80f935e722cb95767244d.png)
What is important is the **Numeric value**, which should be **666**
Hit "_OK_" and _configuration will be done for hosting providers_

- If you are using a VPS, you will need to **allow HTAccess Override** and **Mod Rewrite Module** manuall
Login via SSH and:
  - Execute `sudo nano /etc/apache2/apache.conf` and browse to a block of code like this:
![image|275x77](https://community.makeroid.io/uploads/default/original/2X/8/81052954112945a4912e5bcdf04799cf79141844.png)
You need to change the `AllowOverride None` to `AllowOverride All`
After this, hit <kbd>Ctrl</kbd>+<kbd>X</kbd>, <kbd>Y</kbd> and <kbd>Enter</kbd>
  - Execute `sudo a2enmod rewrite`
  - Execute `sudo systemctl restart apache2`

&nbsp;

### 4. Makeroid Builder setup

1. In all **TinyWebDB Components**, you need to change in **Properties** the **Service URL** to _the URL of your service_ or _the IP of your VPS_. In my case, it is `http://tinywebdb-php.epizy.com`
![image|201x59](https://community.makeroid.io/uploads/default/original/2X/7/7308edf0b88c0da6044743a4703e25d01380c403.png)

2. **Enjoy your own TinyWebDB Service!** :tada: