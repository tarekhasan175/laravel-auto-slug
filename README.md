# 🚀 Laravel Auto Slug

**Laravel Auto Slug** is a lightweight, easy-to-use Laravel package that automatically generates and manages unique slugs for your Eloquent models.

Perfect for blog posts, products, or any content type that needs clean, human-readable, SEO-friendly URLs.

---

## 📦 Installation

```bash
composer require tarekhasan/laravel-auto-slug


## ⚙️ Usage

use Illuminate\Database\Eloquent\Model;
use Tarekhasan\LaravelAutoSlug\Traits\AutoSlug;

class Post extends Model
{
    use AutoSlug;

    protected static function booted()
    {
        static::bootAutoSlug('title');
    }
}


## 🧠 Features
✅ Automatically generates slugs for any Eloquent model field  
✅ Ensures uniqueness even if titles are duplicated  
✅ Simple and expressive syntax  
✅ Fully customizable slug source field  
✅ Works out-of-the-box with Laravel **8, 9, 10, and 11**

## 🧪 Coming Soon
- Support for localized slugs  
- Optional slug column name configuration  
- Slug regeneration control on updates  

## 📄 License
Released under the [MIT license](LICENSE).  
Made with ❤️ by [Tarek Hasan](mailto:tarekhn175@gmail.com)

## 🌟 Contributing
PRs and stars are welcome!  
If you find this package useful, consider giving it a ⭐️ on [GitHub](https://github.com/tarekhn/laravel-auto-slug).
