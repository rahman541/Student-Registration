## Simple Student Registration
__An example of simple student registration using laravel framework__

### Installation & Configuration
___
#### Platform & Tools
- [Virtualbox](https://www.virtualbox.org/wiki/Downloads) 4.3.16+
- [Vagrant](https://www.vagrantup.com/) 1.6.2+

#### Installation
1. Clone this repo.
```bash
git clone https://github.com/rahman5147/Student-Registration.git
cd Student-Registration
```
2. Now, run `vagrant up` that will create a vm box
```bash
vagrant up
```

3. Create database
- Open browser & navigate to http://192.168.0.77/phpmyadmin
- username `root` password `root`
- goto database tab & create database here by entering name hit enter

4. Migrate database using artisan
```bash
php artisan migrate
```

5. Add dabatase seed
```bash
```


To ssh to vm box just `vagrant ssh` & to disconnect it press `ctrl+d`

#### Running web
Open up your browser and navigate to http://192.168.0.77/students and you should see it up and running.
