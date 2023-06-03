# Enemy ships in FTL

This is the source code for my [enemy ships website](https://ftl-layouts.mikehopley.org/). I want to make sure the community has access to this resource, even if something happened to me.

I give you permission to take this code and re-publish the website elsewhere, and to update or maintain it. Please try to contact me first instead, however (for example, via the FTL Discord).

The site uses images taken from FTL, including some directly from the game files (such as weapons and drones). These images are owned by Subset Games, and are included here under fair use. My use of them here does **not** mean they are copyright-free.

# Technical considerations

The site uses the Laravel PHP framework. It requires a standard, basic hosting environment for Laravel:

* PHP
* Apache Server
* MySQL database
* Composer dependency management

The database is designed to be fully reset at any time:

* `php artisan migrate:fresh --seed`
