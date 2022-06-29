# Real Estate

This is a Real E-state Project Made with Laravel, Bootstarp, JQuery, .

## What can you do in this website

- Admin can handle facilities, cities, categories, properties, Reviews, Users, Change Password & Site settings
- User can surf properties, handle their profile, Change Password & Save and review properties if logged in
- Yeah that's not much I know but I'm still making and It's a College Project so nothing Serious is gonna happen.

> I have only used bootstrap, and nothing else, it looks decent enogh and funtionalities are also working... (obviously there will be some bugs)

## Screenshots

![Screenshot from 2022-06-29 17-52-57](https://user-images.githubusercontent.com/28990981/176493583-4f21d135-77e5-4a2a-8ea9-31459dca443c.png)
![Screenshot from 2022-06-29 17-53-11](https://user-images.githubusercontent.com/28990981/176493612-864d318a-b678-4423-8189-5b18de29d3a2.png)
![Screenshot from 2022-06-29 17-53-44](https://user-images.githubusercontent.com/28990981/176493620-33dc4cdd-8833-43cc-a72d-6059299f9e19.png)
![Screenshot from 2022-06-29 17-54-16](https://user-images.githubusercontent.com/28990981/176493642-bb2f3b0d-0c0e-40fb-b832-4ed16322a3cf.png)

## Dependencies

- [Composer v2.2.3^](https://getcomposer.org/download/)
- [Laravel v8.x](https://laravel.com/docs/8.x)
- [Bootstap v5.1.3](https://getbootstrap.com/docs/5.1/getting-started/introduction/)
- [Bootstrap v5.1 Examples](https://getbootstrap.com/docs/5.1/examples/) (Used Some of these as boiler plate)
- [Font Awesome](https://fontawesome.com/docs/web/setup/get-started)
- [JQuery v3.6.0](https://releases.jquery.com/)
- [Bootstap 5](https://datatables.net/examples/styling/bootstrap5.html)
- [CKEditor v4](https://ckeditor.com/docs/ckeditor4/latest/guide/index.html)
- And Familiarity with Laravel, Can't remember anything else...

## What needs to be installed

- [Composer v2.2.3^](https://getcomposer.org/download/)
- [Git](https://git-scm.com/downloads)
- [Laravel v8.x](https://laravel.com/docs/8.x#the-laravel-installer)
- [Wamp](https://www.wampserver.com/en/) (I used Wamp you can use Similar ones)
- Can't remember anything else...

## Steps to Install

### Clone The GitHub Repo first

1. Open Cmd in folder you want to install project in...
2. Type below Command and hit enter...

```bash
git clone git@github.com:OfficialOzioma/real-estate.git
```

4. Then cd into folder using below Command

```bash
cd real-estate
```

> Note from here On, You can also use Terminal from VS Code or Your IDE...

### Install All Composer Dependencies

1. Use below command to install all dependencies then wait till all process is complete...

```bash
composer install
```

### Create a .env file

1. Duplicate *.env.example* as *.env* file
2. Fill information of your DB **username** and **password** & other info if needed...

### Create DataBase

1. Create DataBase by PhpMyadmin (provided by [Wamp](https://www.wampserver.com/en/) or [Xampp](https://www.apachefriends.org/download.html)) or Any Other DB you use...

> Note DataBase name should be same as typed in *.env* file

### DataBase Structure

> I recommend to import DB structure Using `php artisan` method but you can use *.sql* file to import if you want.

1. Use below Command and wait till all migrations complete...

```bash
php artisan migrate
```

2. Use below Command to seed your database

```bash
php artisan db:seed
```

### Serve Project

3. Use below Command ( [Wamp](https://www.wampserver.com/en/)/Other Should be Runnig ) to run project...

```bash
php artisan serve
```

> if some *key* related error appears then use command `php artisan key:generate` to generate AppKey.

## Update Admin

Go to the Link that `php artisan serve` command gives you and Hopefully it should be working, I hope you are capable of any troubleshooting if any error occurs.

Admin site: `your_site_link/admin/dashboard`

- Admin Email

```bash
admin@admin.com
```

- Admin Password

```bash
admin123
```

Update CMS and Site Settings inside Admin Panel (/admin/dashboard) Once (empty or filled doesn't matter), and then goto frontend
> when project loads for first time db won't have values of CMS and Site setting, by updating those fields will be created, so frontend wouldn't show errors after that...
