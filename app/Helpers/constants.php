<?php

const ADMIN_DEFAULT_PER_PAGE = 24;
const ADMIN_DEFAULT_TAG_SUGGESTIONS = 50;

const WEB_SHOPS_DEFAULT_PER_PAGE = 50;
const WEB_SHOPS_PRODUCTS_PER_PAGE = 8;
const WEB_SHOPS_COMMENTS_PER_PAGE = 9;
const WEB_DEFAULT_PER_PAGE = 24;
const WEB_COMMENT_DEFAULT_PER_PAGE = 10;
const WEB_ORDER_DEFAULT_PER_PAGE = 10;
const WEB_SHOP_COMMENTS_DEFAULT_PER_PAGE = 8;
const WEB_FAVORITES_DEFAULT_PER_PAGE = 9;
const WEB_DISCOUNT_PRODUCT_LIST_QUERY_LIMIT_TO_LAST_X_MONTH = 12;
const WEB_DISCOUNT_PRODUCT_LIST_QUERY_LIMIT_ITEMS = 1000;
const WEB_TRACKING_CHANGES_ITEMS = 6;
const WEB_VIEWED_PRODUCTS = 12;

const API_DEFAULT_PER_PAGE = 24;
const API_SECRET_MOBILE_FIELD = 'Fe6g4rw';
const API_AUTH_TOKEN_HEADER = 'Auth-Token';

const IMAGE_PLACE_HOLDER = '/img/place-holder.jpg';

const HTTP_ERRORS = [
    100, 101,
    200, 201, 202, 203, 204, 205, 206,
    300, 301, 302, 303, 304, 305, 306, 307,
    400, 401, 402, 403, 404, 405, 406, 407, 408, 409, 410, 411, 412, 413, 414, 415, 416, 417,
    500, 503, 504, 505
];

const API_ERROR_MESSAGE = [
    400 => 'درخواست نامعتبر است.',
    401 => 'برای دسترسی به این صفحه، ابتدا وارد حساب کاربری خود شوید.',
    403 => 'دسترسی مجاز نیست.',
    404 => 'صفحه مورد نظر وجود ندارد.',
    405 => 'متد HTTP نامعتبر است.',
    500 => 'خطای سرور. لطفا مجدداً امتحان کنید.',
    503 => 'سرور در حال تعمیر و نگهداری است، لطفا دقایقی بعد مراجعه فرمایید',
    504 => 'خطایی در پردازش رخ داده، لطفا دوباره امتحان کنید',
];

const API_ERRORS_IMAGE = [
    400 => '/img/errors/400.png',
    401 => '/img/errors/401.png',
    403 => '/img/errors/403.png',
    404 => '/img/errors/404.png',
    500 => '/img/errors/500.png',
    503 => '/img/errors/503.png',
    504 => '/img/errors/504.png',
    1020 => '/img/errors/1020.png',
];

const API_EMPTY_IMAGE = [
    'cart' => [
        'image' => '/img/empty-list/cart.png', 'message' => 'لیست سبد خرید شما خالی است'
    ],
    'buy_subscription' => [
        'image' => '/img/empty-list/buy-subscription.png', 'message' => 'پلن اشتراکی برای خرید یافت نشد'
    ],
    'coupon' => [
        'image' => 'img/empty-list/coupon.png', 'message' => 'لیست کوپن تخفیف شما خالی است'
    ],
    'customer' => [
        'image' => 'img/empty-list/customer.png', 'message' => 'تاکنون سفارشی توسط مشتریان شما نهایی نشده است'
    ],
    'delivery_address' => [
        'image' => 'img/empty-list/delivery-address.png', 'message' => 'آدرسی ایجاد نشده، یکی ایجاد کنید'
    ],
    'favorite' => [
        'image' => 'img/empty-list/favorite.png', 'message' => 'محصولی برای علاقه مندی ثبت نشده است'
    ],
    'gallery' => [
        'image' => 'img/empty-list/gallery.png', 'message' => 'گالری تصاویر فروشگاه شما خالی است'
    ],
    'notification' => [
        'image' => 'img/empty-list/notification.png', 'message' => 'لیست اعلان ها خالی است'
    ],
    'order_list_all' => [
        'image' => 'img/empty-list/order-list-all.png', 'message' => 'سفارشی یافت نشد'
    ],
    'order_list_waiting' => [
        'image' => 'img/empty-list/order-list-waiting.png', 'message' => 'سفارشی برای پرداخت وجود ندارد'
    ],
    'order_notes' => [
        'image' => 'img/empty-list/order-notes.png', 'message' => 'یادداشتی برای سفارش ثبت نشده'
    ],
    'product' => [
        'image' => 'img/empty-list/product.png', 'message' => 'لیست محصولات خالی است'
    ],
    'product_comment' => [
        'image' => 'img/empty-list/product-comment.png', 'message' => 'نظری برای محصول ثبت نشده است'
    ],
    'recent_product' => [
        'image' => 'img/empty-list/recent-product.png', 'message' => 'هنوز محصولی را بازدید نکرده اید'
    ],
    'shop_comment' => [
        'image' => 'img/empty-list/shop-comment.png', 'message' => 'نظری برای فروشگاه ثبت نشده است'
    ],
    'shop_product' => [
        'image' => 'img/empty-list/shop-product.png', 'message' => 'هنوز محصولی در فروشگاه وجود ندارد'
    ],
    'tracked_product' => [
        'image' => 'img/empty-list/tracked-product.png', 'message' => 'هنوز هیچ محصولی را دنبال نکرده اید'
    ],
    'tracked_product_history' => [
        'image' => 'img/empty-list/tracked-product-history.png', 'message' => 'هنوز تغییری در محصول دنبال شده ایجاد نشده'
    ],
];

const AUTH_SESSION_MOBILE_KEY = 'auth.mobile';
const AUTH_SESSION_TOKEN_KEY = 'auth.token';

const CACHE_KEY_CATEGORIES_FLAT = 'categories.flat';
const CACHE_KEY_CATEGORIES_HIERARCHICAL = 'categories.hierarchical';
const CACHE_KEY_LOCATIONS = 'locations';
const CACHE_KEY_CUSTOMER_HOMEPAGE = 'customer_homepage';
const CACHE_KEY_CUSTOMER_HOMEPAGE_MEGA_MENU = 'customer_homepage_mega_menu';
const CACHE_KEY_PRODUCTS = 'products';
const CACHE_KEY_CUSTOMER_HOMEPAGE_DISCOUNT_PRODUCTS = 'customer_homepage_discount_products';

const SORT_ORDER_ASC = 'asc';
const SORT_ORDER_DESC = 'desc';

const COLORS_LIST = [
    'سفید' => 'FFFFFF',
    'مشکی' => '000000',
    'قرمز' => 'FF0800',
    'آبی' => '0247FE',
    'زرد' => 'FFFF00',
    'سبز' => '008000',
    'آبی روشن' => '00B9FB',
    'آبی نفتی' => '191970',
    'آلبالویی' => '800000',
    'بادمجانی' => '431C53',
    'بنفش' => '8A2BE2',
    'بژ' => 'FAEBD7',
    'جگری' => '841B2D',
    'خاکستری' => '808080',
    'خاکی' => 'DEB887',
    'خردلی' => 'DAA520',
    'زرشکی' => 'DC143C',
    'سبز مغزپسته‌ای' => 'ADFF2F',
    'سرمه‌ای' => '02075D',
    'صورتی' => 'F7238A',
    'طلایی' => 'FFD700',
    'طوسی' => 'C0C0C0',
    'عسلی' => 'D2691E',
    'فیروزه‌ای' => '00FFFF',
    'قرمز گوجه‌ای' => 'EF3038',
    'قهوه‌ای' => '8B4513',
    'کرم' => 'FFDEAD',
    'مسی' => 'B87333',
    'نارنجی' => 'FF8C00',
    'نقره‌ای' => 'CFCFCF',
    'نوک‌مدادی' => '333333',
    'یشمی' => '00FA9A',
];

const WEEK_DAYS = [
    1 => 'saturday',
    2 => 'sunday',
    3 => 'monday',
    4 => 'tuesday',
    5 => 'wednesday',
    6 => 'thursday',
    7 => 'friday'
];

const WEEK_DAYS_PERSIAN = [
    1 => 'شنبه',
    2 => 'یکشنبه',
    3 => 'دوشنبه',
    4 => "سه‌شنبه",
    5 => 'چهارشنبه',
    6 => 'پنجشنبه',
    7 => 'جمعه'
];

const MONTH_PERSIAN = [
    1 => 'فروردین',
    2 => 'اردیبهشت',
    3 => 'خرداد',
    4 => 'تیر',
    5 => 'مرداد',
    6 => 'شهریور',
    7 => 'مهر',
    8 => 'آبان',
    9 => 'آذر',
    10 => 'دی',
    11 => 'بهمن',
    12 => 'اسفند',
];

const FILE_TYPE = [
    'PDF' => '.pdf',
    'JPG' => '.jpg',
    'PNG' => '.png'
];
