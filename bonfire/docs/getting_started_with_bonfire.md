# Memulai dengan Bonfire

## Panduan Asumsi

Panduan ini dirancang untuk pengembang yang akrab dengan CodeIgniter, tetapi baru mulai dengan Bonfire. Ini tidak berasumsi bahwa Anda memiliki pengalaman sebelumnya dengan Bonfire. 

Bonfire ini dimaksudkan untuk memberikan kickstart untuk aplikasi web baru yang dibangun di CodeIgniter. Jika Anda tidak tahu CodeIgniter Anda akan perlu untuk mendapatkan kecepatan yang pertama. Ada beberapa tutorial gratis di luar sana, termasuk:

* [CodeIgniter From Scratch Series - at NetTuts](http://net.tutsplus.com/sessions/codeigniter-from-scratch/)
* [Tutorials at the CodeIgniter Wiki](http://codeigniter.com/wiki/Category:Help::Tutorials)

<a name="whatisit"></a>
## Apa itu Bonfire?

Bonfire merupakan framework untuk aplikasi web Anda, yang dibangun di atas PHP Framework CodeIgniter. Ini bukan CMS, tapi titik awal untuk proyek-proyek baru yang membutuhkan alat siap pakai seperti:

* Robust Role-Based-Access-Control
* Fully Modular Codebase. Built around HMVC.
* Database backup, migration, and maintenance.
* Powerful, parent/child capable theme engine.
* Simple Email queue to keep your ISP happy.
* dan banyak lagi...

<a name="components"></a>
### Komponen Bonfire

bonfire dengan sejumlah komponen individu yang dijelaskan di bawah ini. Jangan terpaku pada rincian dari masing-masing komponen untuk saat ini. Banyak dari ini akan dijelaskan lebih rinci di bawah.

#### MY_Model

MY_Model menyediakan satu set kuat metode standar untuk Anda untuk mendapatkan model Anda dari. Metode yang mencakup semua rutinitas CRUD standar, serta metode sederhana yang rantai bersama-sama. Untuk model yang sederhana, yang harus Anda lakukan adalah memperpanjang kelas MY_Model dan menetapkan beberapa variabel dan Anda akan berdiri dan berjalan tanpa kode tambahan.

#### MY_Controller

MY_Controller provides 4 different controllers that you can use to keep common functions within each 'zone' of your website: Base_Controller, Front_Controller, Authenticated_Controller and Admin_Controller. You can set different defaults in each controller for a different part of your site. For example, setting the admin theme in the Admin_Controller, or making sure the user is logged in with the Authenticated_Controller.


#### Role-Based Access Control

Bonfire's User module provides a flexible User_model, ready for your users to login with, as well as a flexible RBAC that is simple to use and flexible enough to fit most needs.

#### Database Tools

Quickly browse your database, perform backups, restore old bakups, and keep your database versioned with Migrations. Unlike CodeIgniter's built-in migrations, Bonfire extends them to allow for the core, your app, and each module to maintain their own set of migrations.

#### System Events

Very similar to CodeIgniter's Hooks, System Events allow you to hook into Bonfire's core code without modifying core files. It also provides a simple way for you to add hooks to your own code for other modules to use.

#### Activities Log

This library provides a simple way to log user activities, such as 'JohnDoe deleted the Page titled "Page 1"'. This makes it simple to keep a clear, consistent log of every important action of every user.

#### Settings

Easily store application-wide settings in the database, allowing your users to change settings simply and easily.


<a name="newproject"></a>
## Creating A New Bonfire Project

The best way to use this guide is to follow along, step-by-step, entering the code at each step. Everything you need to make this project work is included in this tutorial.

During this tutorial we will create a (simple) blog module that will have you mastering your way around Bonfire in no time.


<a name="navigating"></a>
## Navigating Bonfire

<a name="contexts"></a>
### Contexts

Once you log into the admin portion of Bonfire, you will find a menu with 4 categories across the top: Content, Reports, Settings, and Developer. These four categories are what Bonfire calls **Contexts**.

A Context is a way to group related content from different modules. It all happens automatically based upon the names of the controller and a little behind-the-scenes magic in the routes file. You don't need to understand all of the details about contexts just yet, but we will touch on how to use them in this tutorial.

You can create as many custom contexts as you want, and even remove the Content and Reports contexts, to meet the needs of your app. The Settings and Developer contexts are a central part of how Bonfire works and cannot be removed.

Contexts don't have to be visible to everyone who uses your admin area, though. They can be hidden individually per user role.

<a name="modules"></a>
### Modules

Bonfire is primarily a collection of modules that handle all of the various parts. This makes it easy to create your own modules that can be reused and passed around with a minimum of work.

If you navigate the project, look in the main *bonfire* folder. You will find the following folder structure:

Folder      | Purpose
------------|---------------
application | Holds Bonfire's primary files and the core modules.
codeigniter | Holds the CodeIgniter system files.
modules     | Holds your own custom modules.
themes      | Holds all of your themes.

A module is a mini-application that can contain assets (like CSS or JS), config files, controllers, models, libraries, helpers, and views. This is all powered by [Modular Extensions HMVC](https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc/wiki/Home) and allows for HMVC usage (which we will touch on later in the tutorial).

---

Next: [A Simple Blog Tutorial](tut_blog)