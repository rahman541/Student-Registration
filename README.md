Simple Student Registration
======================
An example of simple student registration using laravel framework
### Installation & Configuration
#### Platform & Tools
- [Virtualbox](https://www.virtualbox.org/wiki/Downloads) 5.0+
- [Vagrant](https://www.vagrantup.com/) 1.8+
- SSH client for Windows only : [Cygwin](https://www.cygwin.com/) / [Git Bash](https://git-scm.com/) / [Putty](http://www.putty.org/)

#### Installation
**1.** Clone this repo.
```bash
git clone https://github.com/rahman5147/Student-Registration.git
cd Student-Registration
```

**2.** Now, run `vagrant up` that will create a vm box
```bash
vagrant up
```

**3.** SSH into box
```
vagrant ssh
```
>**NOTE:** **Windows user might need to use Cygwin or Git Bash or Putty. If putty ssh into `192.168.0.77` use username `vagrant` and password `vagrant`**

**4.** Change to `www` directory
```bash
cd /var/www
```

**5.** Create `.env` configuration file from `.env.example` or just rename file `.env.example` to `.env`. Leave all value by default.
```bash
cp .env.example .env
```

**6.** Install the composer dependencies
```bash
composer install
```

**7.** Migrate database using artisan
```bash
php artisan migrate
```

**8.** Add dabatase seed
```bash
php artisan db:seed
```

To disconnect from ssh `Ctrl + D`

#### Running web
Open up your browser and navigate to [http://192.168.0.77/students](http://192.168.0.77/students) and you should see it up and running.
