## Simple Student Registration
__An example of simple student registration using laravel framework__

### Installation & Configuration
___
#### Platform & Tools
- [Virtualbox](https://www.virtualbox.org/wiki/Downloads) 4.3.16+
- [Vagrant](https://www.vagrantup.com/) 1.6.2+

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

**3.** Create `.env` configuration file from `.env.example` or just rename file `.env.example` to `.env`. Leave all value by default.

**4.** SSH into box
```
vagrant ssh
```
>**NOTE:** **Windows user might need to use Cygwin or Git Bash since it have ssh client.**

**5.** Change to `www` directory
```bash
cd /var/www
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
