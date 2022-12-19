# ButterCMS Laravel Example

This app uses Blade templates but ButterCMS works with any templating engine like Smarty, Twig, or raw PHP.

## Important Notice
This project was created as an example use case of ButterCMS in conjunction with laravel, and will not be actively maintained. 

If you’re interested in exploring the best, most up-to-date way to integrate Butter into php frameworks like laravel, you can check out the following resources:

### Starter Projects

The following turn-key starters are fully integrated with dynamic sample content from your ButterCMS account, including main menu, pages, blog posts, categories, and tags, all with a beautiful, custom theme with already-implemented search functionality. All of the included sample content is automatically created in your account dashboard when you sign up for a free trial of ButterCMS.
- [Laravel Starter](https://buttercms.com/starters/laravel-starter-project/)
- [Angular Starter](https://buttercms.com/starters/angular-starter-project/)
- [React Starter](https://buttercms.com/starters/react-starter-project/)
- [Vue.js Starter](https://buttercms.com/starters/vuejs-starter-project/)
- Or see a list of all our [currently-maintained starters](https://buttercms.com/starters/). (Over a dozen and counting!)

### Other Resources
- Check out the [official ButterCMS Docs](https://buttercms.com/docs/)
- Check out the [official ButterCMS API docs](https://buttercms.com/docs/api/)


## Get Started

Install dependencies:

```
$ composer install
```

Start the app:

```
$ php artisan serve
```

## Features

This example application demonstrates three major features of the ButterCMS API &mdash; blogging, dynamic content, and dynamic pages. All of the features are implemented in the following files:

 - `app/Http/Controllers/BlogController.php`: The application controller.
 - `routes/web.php`: The routes for the controller methods.
 - `resources/*.blade.php`: The Laravel/Blade templates used for rendering the content.

### Blogging

The blogging features are split into four main areas withing the app &mdash; posts, categories, tags, and authors. Each area has a main page and a detail page.

 - #### Posts
   Blog posts are loaded in the `listAllPosts()` and `showPost()` methods of the `BlogController` and rendered to the `posts.blade.php` and `post.blade.php` templates.
 - #### Categories
   Post categories are loaded in the `listAllCategories()` and `showCategory()` methods and rendered to the `categories.blade.php` and `category.blade.php` templates.
 - #### Tags
   Post tags are loaded in the `listAllTags()` and `showTag()` methods and rendered to the `tags.blade.php` and `tag.blade.php` templates.
 - #### Authors
   Post authors are loaded in the `listAllAuthors()` and `showAuthor()` methodsd and rendered to the `authors.blade.php` and `author.blade.php` templates.

### Dynamic Content

Dynamic content is demonstrated with a Frequenly Asked Question page. FAQ questions and answers, as well as the page headline, are loaded in the `showFaq()` method of the `BlogController` and rendered to the `faq.blade.php` template.

### Dynamic Pages

Dynamic pages are demonstrated with mock store location pages. Location page data is loaded by the `listAllLocations()` and `showLocation()` method of the `BlogController` and rendered to the `locations.blade.php` and `location.blade.php` templates.

## Documentation

For a comprehensive list of examples and API docs, check out our [documentation](https://buttercms.com/docs/).

### Other

View Laravel [Full CMS](https://buttercms.com/laravel-cms/) for other examples of using ButterCMS with Laravel.
