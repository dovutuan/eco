### các bước setup
- composer i
- copy [.env.example](.env.example) thành [.env](.env)
- php artisan key:generate
- npm i
- phía local sẽ: npm run dev
- trước khi build server: npm run build

### các bước dựng admin
- tạp controller trong folder Admin
- tạo route trong file routes/admin.php
- tạo component trong folder resources/js/admin

### các bước dựng client
- tạo controller trong folder Client
- tạo route trong file routes/web.php
- tạp view trong folder resources/views/client
- tất cả view đều @extends('layouts.client.master')
- những component khó sẽ tạo component vue trong folder resources/js/client
- vào file resources/js/app.js import component
- thêm component mình vừa khai báo vào biến components

ví dụ: 
- tạo component cart và search
- vào app.js 
```
import search from './client/search.vue';
import cart from './client/cart.vue';
```

- thêm vào biến components
```
const components = [
    search,
    cart
];
```