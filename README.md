<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


///Delete task

public function destroy($id)
{
    $task = Task::find($id);

    if (!$task) {
        return response()->json(['message' => 'Task not found'], 404);
    }

    $task->delete();

    return response()->json(['message' => 'Task deleted successfully']);
}
🔍 লাইন বাই লাইন ব্যাখ্যা:
🔹 public function destroy($id)

এটা একটি function যার নাম destroy

এই function টার কাজ হলো টাস্ক (Task) ডিলিট করা

এটাতে $id নামে একটা ইনপুট প্যারামিটার আছে — এর মানে এই ফাংশন যখন চালু হবে, তখন তুমি যেই টাস্ক ডিলিট করতে চাও, তার আইডি পাঠাতে হবে (যেমনঃ 3 বা 5)

🔹 $task = Task::find($id);

এই লাইনে আমরা ডাটাবেজ থেকে সেই টাস্কটা বের করছি যার ID তুমি পাঠিয়েছো

Task::find($id) মানে: Task টেবিলে গিয়ে সেই row বের করো যার id = $id

যদি আইডি 3 পাঠাও, তাহলে Task::find(3) মানে — id 3 আছে এমন টাস্কটা খুঁজে বের করো

🔹 if (!$task) { ... }

যদি সেই ID-এর কোনো টাস্ক না মেলে (মানে Task::find() ফলাফল দেয় null), তাহলে এই if চলবে

!$task মানে: task না থাকলে

🔹 return response()->json(['message' => 'Task not found'], 404);

এটা error response দিচ্ছে, বলছে "Task not found"

404 হচ্ছে HTTP status code, যার মানে "Not Found"

🔹 $task->delete();

এই লাইনে টাস্কটা ডাটাবেজ থেকে ডিলিট করে দিচ্ছে

যেই $task আমরা খুঁজে পেয়েছি, সেই object এর .delete() function কল করে টাস্ক ডিলিট করা হচ্ছে

🔹 return response()->json(['message' => 'Task deleted successfully']);

সবকিছু ঠিকঠাক হলে, আমরা এই লাইনে একটা success response পাঠাচ্ছি

JSON আকারে বলছি: "Task deleted successfully"