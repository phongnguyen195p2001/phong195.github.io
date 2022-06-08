<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    keyframes: {
                        fade: {
                            '0%, 100%': { transform: 'scales(min:0,max:100)',opacity: 0 },
                            // '50%': { transform: 'rotate(3deg)' ,opacity: 0},
                        }
                    },
                    colors: {
                        primary: '#556A92',
                    }
                }
            }
        }
    </script>
    <style>
        .fade-in{
            animation: transitionIn 1s;
        }
        
        @keyframes transitionIn {
            from{
                opacity: 0;
                transform: translateY(60px);
            }

            to{
                opacity: 3;
                transform: translateY(0);
            }
        }
    </style>
    <title>5pdf</title>
</head>
<body>

<nav class="w-full top-0 py-1 shadow border-b bg-main-background z-50 relative">
    <div class="w-full relative">
        <div class="container px-6 py-2 mx-auto flex flex-wrap items-center justify-between mt-0">
            <div class="w-1/3 lg:w-1/4 block">
                <a href="http://5pdf.test"
                   class="hidden lg:inline-block tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl">
                    <img src="logo/logo.png" class="lg:h-8" width="232"
                         height="30" alt="5pdf">
                </a>
                <label class="align-middle inline-block lg:hidden ml-2 no-underline hover:text-black cursor-pointer">
                    <svg class="fill-current text-gray-700" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                         viewBox="0 0 20 20">
                        <title>menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </label>
            </div>
            <div class="order-1 md:order-2 w-1/3 lg:w-1/2 flex justify-center items-center">
                <a href="https://5pdf.test"
                   class="lg:hidden tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl">
                    <img src="https://5pdf.net/logos/123doc.webp?t=20220527132644" width="232" height="30"
                         class="lg:h-8" alt="5pdf">
                </a>
                <div class="relative w-full hidden lg:block">
                    <input class="border bg-white pl-3 h-10 w-full rounded-lg text-sm focus:outline-none"
                           placeholder="Tìm kiếm" autocomplete="off">
                    <button class="absolute p-3 right-0 top-0 ">
                        <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                             viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" width="512px"
                             height="512px">
                            <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path>
                        </svg>
                    </button>
                    <div id="suggestion" class="absolute shadow-2xl rounded-lg bg-white max-w-full hidden">
                        <ul class="list-style-none" style="display: block;">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="order-2 md:order-3 flex items-center w-1/3 lg:w-1/4 justify-end" id="nav-content">

                <label class="hidden lg:inline-block ml-2 no-underline hover:text-black cursor-pointer"
                       id="menu-btn">
                    <svg class="fill-current text-gray-700" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                         viewBox="0 0 20 20">
                        <title>menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </label>

                <label class="lg:hidden pl-3 checkbox inline-block no-underline hover:text-black cursor-pointer block">
                    <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24">
                        <path d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z"></path>
                    </svg>
                </label>
            </div>
        </div>
        <div class="flex hidden justify-center w-full order-4 order-2" id="dropdown">
            <div class="container left-0 right-0 mx-auto absolute">
                <ul class="mx-6 flex flex-wrap text-base shadow border mt-1 z-10 bg-white text-gray-700 py-6">
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">topics.name.nghe-si-va-thiet-ke</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">topics.name.tac-gia</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">topics.name.doanh-nhan</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">topics.name.dau-bep</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">topics.name.bac-si</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Chính phủ và phi chính phủ</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">topics.name.truyen-thong</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">topics.name.nhac-si</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">topics.name.nha-nghien-cuu</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">topics.name.sinh-vien</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">topics.name.giao-vien</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">topics.name.khac</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">topics.name.trang-tinh</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Kinh Doanh - Tiếp Thị</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Internet Marketing</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Quản trị kinh doanh</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Kế hoạch kinh doanh</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Tiếp thị - Bán hàng</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Kỹ năng bán hàng</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Thương mại điện tử</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">PR - Truyền thông</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Tổ chức sự kiện</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Kinh tế - Quản lý</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Quản lý nhà nước</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Tiêu chuẩn - Qui chuẩn</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Quản lý dự án</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Quy hoạch - Đô thị</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Biểu Mẫu - Văn Bản</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Thủ tục hành chính</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Biểu mẫu</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Đơn từ</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Hợp đồng</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Tài chính - Ngân hàng</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Ngân hàng - Tín dụng</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Kế toán - Kiểm toán</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Tài chính doanh nghiệp</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Đầu tư Chứng khoán</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Đầu tư Bất động sản</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Bảo hiểm</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Quỹ đầu tư</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Công nghệ thông tin</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Phần cứng</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Hệ điều hành</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Quản trị mạng</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Quản trị Web</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Cơ sở dữ liệu</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Kỹ thuật lập trình</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Chứng chỉ quốc tế</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">Tin học văn phòng</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="">An ninh - Bảo mật</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<section class="bg-white py-8">
    <div id="animate" class="container mx-auto flex lg:px-5 px-3 items-center justify-center flex-col fade-in">
        <div class="my-10 w-1/2 lg:w-1/3">
            <svg viewBox="0 0 931 757" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g transform="translate(0.000000,830.000000) scale(0.100000,-0.100000)" fill="#536a92" stroke="none">
                    <path d="M4059 8316 c-3 -3 -320 -68 -705 -145 -384 -76 -712 -142 -729 -145 -16 -4 -61 -13 -100 -20 -324 -64 -862 -172 -960 -192 -66 -14 -142 -29 -170 -34 -153 -27 -263 -53 -290 -69 -49 -28 -78 -79 -72 -128 6 -53 28 -89 73 -115 l34 -20 0 -113 0 -113 -37 -23 c-62 -38 -141 -118 -175 -177 -17 -30 -39 -86 -49 -125 -11 -39 -20 -71 -21 -72 -2 -2 -82 8 -178 21 -96 14 -189 22 -206 19 -76 -13 -134 -105 -134 -213 0 -143 53 -378 120 -532 67 -154 201 -342 273 -382 65 -37 154 -12 189 53 27 49 20 117 -18 164 -91 112 -108 135 -139 190 -50 90 -90 198 -114 309 -11 55 -19 101 -17 103 2 2 126 -10 277 -26 540 -59 579 -60 1664 -50 436 4 468 3 615 -18 317 -46 547 -122 715 -237 67 -46 143 -75 194 -76 22 0 79 21 150 54 219 102 406 157 701 206 388 64 845 84 1364 59 332 -15 714 7 1141 67 99 14 192 27 208 31 23 4 27 2 27 -16 0 -46 -33 -181 -71 -291 -44 -128 -47 -160 -21 -209 34 -64 118 -88 187 -55 42 19 54 38 94 142 58 151 93 313 98 458 6 150 -3 183 -64 230 -64 49 -104 57 -192 40 -42 -9 -157 -27 -256 -40 -492 -68 -730 -82 -1140 -70 l-300 9 -32 214 c-18 118 -32 216 -30 217 1 1 72 17 157 34 211 42 373 78 665 147 249 59 328 81 354 101 33 24 61 78 61 118 0 38 -35 92 -75 115 -27 16 -137 42 -290 69 -27 5 -104 20 -170 34 -98 20 -636 128 -960 192 -38 7 -83 16 -100 20 -16 3 -345 69 -730 147 -651 131 -802 157 -816 143z m271 -326 c113 -22 223 -44 245 -49 55 -13 95 -21 980 -197 767 -152 820 -163 813 -169 -5 -5 -227 -51 -453 -95 -174 -33 -280 -41 -440 -30 -294 19 -861 74 -1160 112 -93 12 -183 22 -200 22 -16 0 -106 -10 -200 -22 -299 -38 -866 -93 -1160 -112 -160 -11 -266 -3 -440 30 -226 44 -448 90 -453 95 -7 6 46 17 813 169 715 142 832 166 980 197 154 32 433 87 450 88 11 1 112 -17 225 -39z m-2771 -640 c33 -8 139 -32 326 -74 39 -8 140 -29 225 -46 85 -17 156 -33 157 -34 2 -1 -12 -98 -29 -214 -25 -164 -36 -213 -48 -216 -8 -3 -76 -6 -150 -8 l-135 -3 -7 82 c-21 230 -147 376 -375 433 -42 10 -43 12 -43 50 0 45 10 49 79 30z m2876 -89 c173 -19 486 -51 705 -71 198 -18 374 -30 457 -30 46 0 83 -2 83 -3 0 -2 11 -84 25 -183 14 -98 25 -187 25 -196 0 -16 -10 -18 -78 -18 -213 0 -653 -46 -873 -90 -221 -45 -417 -104 -591 -179 l-97 -41 -78 46 c-322 191 -772 284 -1370 284 -79 0 -143 3 -143 8 0 4 11 88 25 186 14 99 25 181 25 183 0 1 37 3 83 3 120 0 420 24 867 70 102 10 257 26 345 35 88 9 165 18 170 20 19 9 242 -4 420 -24z m-2915 -293 c31 -16 52 -36 66 -63 27 -49 38 -134 19 -141 -15 -6 -446 24 -453 31 -11 11 21 87 49 120 64 72 227 99 319 53z"></path>
                    <path d="M2146 6029 c-671 -55 -1234 -371 -1455 -815 -292 -588 100 -1239 907 -1504 239 -78 469 -113 742 -113 273 0 503 35 742 113 807 265 1199 916 907 1504 -208 419 -728 728 -1354 805 -124 15 -369 20 -489 10z m464 -229 c518 -65 915 -308 1079 -662 50 -107 71 -203 71 -325 0 -212 -78 -398 -234 -562 -258 -270 -687 -421 -1201 -421 -488 0 -881 135 -1135 390 -174 174 -260 372 -260 599 0 274 123 509 358 686 215 162 502 263 842 298 82 9 402 6 480 -3z"></path>
                    <path d="M2007 5528 c-144 -15 -308 -61 -435 -123 -98 -48 -115 -61 -128 -90 -28 -68 -14 -118 41 -141 55 -22 121 -18 158 10 106 81 279 126 487 126 477 0 750 -185 750 -511 0 -117 -26 -176 -114 -265 -84 -84 -188 -139 -336 -180 -118 -32 -337 -44 -457 -24 -220 35 -398 150 -476 309 -28 58 -33 78 -37 172 -6 121 -16 141 -79 159 -82 23 -155 9 -204 -38 -60 -56 -68 -102 -42 -227 69 -332 427 -579 903 -625 461 -45 939 163 1092 473 39 79 70 190 70 252 0 62 -31 173 -70 252 -122 248 -450 434 -834 472 -123 12 -163 12 -289 -1z"></path>
                    <path d="M2090 5217 c-81 -28 -104 -133 -40 -189 16 -16 38 -28 48 -29 9 0 42 -2 73 -3 76 -3 138 -38 162 -91 10 -22 26 -56 35 -75 60 -121 244 -100 280 32 40 146 -163 332 -389 358 -105 12 -125 12 -169 -3z"></path>
                    <path d="M6356 6029 c-671 -55 -1234 -371 -1455 -815 -130 -261 -130 -537 0 -798 211 -424 722 -725 1369 -807 122 -16 438 -16 560 0 256 32 500 101 698 196 l113 54 10 -27 c24 -63 69 -256 83 -361 20 -143 20 -379 0 -522 -61 -438 -271 -849 -614 -1203 -569 -587 -1413 -955 -2388 -1041 -194 -17 -582 -20 -768 -5 -996 79 -1867 447 -2437 1028 l-98 100 29 59 c45 87 171 280 248 380 197 251 455 460 835 674 319 180 693 283 1261 349 138 16 175 17 189 7 10 -6 72 -74 139 -150 68 -76 135 -144 151 -152 41 -22 156 -20 194 3 17 10 90 87 164 170 l134 152 66 0 c36 0 120 -5 186 -10 891 -76 1431 -326 2073 -958 162 -160 180 -169 261 -136 36 15 51 28 69 64 45 90 29 121 -147 293 -459 446 -857 700 -1341 856 -241 77 -551 137 -813 157 -48 4 -90 11 -93 16 -3 5 8 24 24 43 17 18 33 48 37 65 8 39 -2 115 -21 151 -12 24 -538 406 -611 444 -36 19 -140 19 -176 0 -16 -8 -156 -105 -313 -216 -181 -128 -290 -211 -299 -229 -8 -16 -17 -52 -21 -82 -7 -63 7 -102 61 -164 l35 -41 -132 -17 c-386 -51 -753 -147 -1028 -268 -146 -65 -473 -264 -660 -402 -53 -39 -162 -132 -226 -192 -114 -108 -295 -337 -404 -514 l-63 -102 -44 68 c-24 38 -70 123 -102 189 -173 352 -233 712 -186 1127 16 147 10 185 -39 234 -80 80 -213 58 -261 -43 -24 -50 -48 -365 -39 -518 31 -568 269 -1075 714 -1524 211 -212 501 -429 777 -581 l111 -61 -5 -54 c-6 -56 -7 -54 114 -340 84 -199 130 -249 228 -249 97 0 165 65 165 158 0 40 -13 79 -55 175 -30 69 -53 127 -51 129 3 2 54 -15 115 -37 344 -127 809 -225 1236 -262 180 -16 640 -16 820 0 397 34 853 127 1179 240 33 12 61 19 63 17 2 -1 -17 -51 -42 -109 -33 -77 -45 -119 -45 -155 0 -91 69 -156 165 -156 95 0 148 56 222 234 17 41 52 124 77 185 27 64 46 125 46 147 0 37 1 38 79 77 650 327 1183 853 1424 1404 128 293 179 537 179 847 0 283 -52 551 -152 785 l-17 40 76 80 c318 333 393 721 210 1089 -208 419 -728 728 -1354 805 -124 15 -369 20 -489 10z m464 -229 c518 -65 915 -308 1079 -662 50 -107 71 -203 71 -325 0 -212 -78 -398 -234 -562 -258 -270 -687 -421 -1201 -421 -488 0 -881 135 -1135 390 -174 174 -260 372 -260 599 0 274 123 509 358 686 215 162 502 263 842 298 82 9 402 6 480 -3z m-2301 -1878 c59 -42 138 -98 174 -124 37 -27 67 -52 67 -56 0 -4 -34 -44 -76 -87 -120 -127 -278 -305 -289 -326 -10 -20 -35 -26 -35 -8 0 12 -90 114 -258 293 -62 65 -111 124 -109 130 3 10 163 127 321 235 68 47 53 52 205 -57z"></path>
                    <path d="M6217 5528 c-144 -15 -308 -61 -435 -123 -98 -48 -115 -61 -128 -90 -28 -68 -14 -118 41 -141 55 -22 121 -18 158 10 106 81 279 126 487 126 477 0 750 -185 750 -511 0 -117 -26 -176 -114 -265 -84 -84 -188 -139 -336 -180 -118 -32 -337 -44 -457 -24 -220 35 -398 150 -476 309 -28 58 -33 78 -37 172 -6 121 -16 141 -79 159 -82 23 -155 9 -204 -38 -60 -56 -68 -102 -42 -227 69 -332 427 -579 903 -625 461 -45 939 163 1092 473 39 79 70 190 70 252 0 62 -31 173 -70 252 -122 248 -450 434 -834 472 -123 12 -163 12 -289 -1z"></path>
                    <path d="M6300 5217 c-81 -28 -104 -133 -40 -189 16 -16 38 -28 48 -29 9 0 42 -2 73 -3 76 -3 138 -38 162 -91 10 -22 26 -56 35 -75 60 -121 244 -100 280 32 40 146 -163 332 -389 358 -105 12 -125 12 -169 -3z"></path>
                    <path d="M1255 1037 c-49 -28 -85 -88 -85 -142 0 -26 17 -81 46 -150 25 -61 60 -144 77 -185 74 -178 127 -234 222 -234 96 0 165 65 165 157 0 40 -17 89 -96 271 -52 121 -102 231 -110 243 -21 33 -87 63 -136 63 -26 0 -59 -9 -83 -23z"></path>
                    <path d="M1755 1037 c-49 -28 -85 -88 -85 -142 0 -26 17 -81 46 -150 25 -61 60 -144 77 -185 74 -178 127 -234 222 -234 96 0 165 65 165 157 0 40 -17 89 -96 271 -52 121 -102 231 -110 243 -21 33 -87 63 -136 63 -26 0 -59 -9 -83 -23z"></path>
                    <path d="M6668 999 c-21 -10 -44 -29 -52 -42 -8 -12 -58 -122 -110 -243 -79 -182 -96 -231 -96 -271 0 -92 69 -157 165 -157 95 0 148 56 222 234 17 41 52 124 77 185 53 125 57 170 23 230 -44 78 -148 107 -229 64z"></path>
                    <path d="M7228 999 c-21 -10 -44 -29 -52 -42 -8 -12 -58 -122 -110 -243 -79 -182 -96 -231 -96 -271 0 -92 69 -157 165 -157 95 0 148 56 222 234 17 41 52 124 77 185 53 125 57 170 23 230 -44 78 -148 107 -229 64z"></path>
                </g>
            </svg>
        </div>
        <div class="text-center lg:w-2/3 w-full">
            <h1 class="title-font lg:text-6xl sm:text-5xl text-4xl leading-tight mb-4 font-bold text-primary"> Tìm là
                thấy</h1>
            <p class="mb-8 text-xl leading-relaxed"> Tìm câu trả lời một cách nhanh chóng, mở rộng nghiên cứu của bạn
                thông qua hệ thống gợi ý thông minh và chính xác của chúng tôi </p>
            <div class="object-center content-center border-4 shadow-lg shadow-black-500/50 rounded-full py-2 px-4">
                <div class="relative">
                    <form class=" inline-block w-full max-w-full z-10" id="search-form">
                        <span class="right-0 top-0 bottom-0 cursor-pointer left-auto absolute inline-flex justify-center items-center h-20 w-20">
                            <svg width="35" height="35" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                 data-svg="search-icon">
                                <circle fill="none" stroke="#000" stroke-width="1.1" cx="9" cy="9" r="7">

                                </circle>
                                <path fill="none" stroke="#000" stroke-width="1.1" d="M14,14 L18,18 L14,14 Z">
                            </svg> </span>
                        <input class="search-input h-20 outline-none text-xl h-16 pl-8 w-full max-w-full hidden sm:inline-block rounded-lg"
                               placeholder="Tìm kiếm trong hơn 5.000.000+ tài liệu" autocomplete="off">
                        <input class="search-input h-20 outline-none text-xl h-16 pl-8 w-full max-w-full sm:hidden rounded-lg"
                               placeholder="Tìm kiếm"
                               autocomplete="off">
                    </form>
                    <div class="absolute shadow-2xl rounded-lg bg-white max-w-full hidden">
                        <ul class="list-style-none" style="display: block;"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-0 md:px-2 lg:px-5 pt-12 mx-auto">
        <div class="text-center mb-10"><h2
                    class="sm:text-4xl text-3xl title-font font-medium mb-4 text-primary">Duyệt theo danh
                mục</h2>
            <p class=" mx-auto text-base leading-relaxed">Chọn một chủ đề bạn quan tâm</p>
            <div class="flex mt-6 justify-center">
                <div class="w-16 h-1 rounded-full inline-flex "></div>
            </div>
        </div>
        <div class="flex flex-wrap">
            <div class="p-4 w-1/2 md:w-1/3 rounded-lg">
                <a href="" class="h-full">
                    <div class="p-3 md:p-5 md:mb-0 mb-6 flex flex-col h-full text-center items-center topic-box rounded-lg box-shadow shadow-lg shadow-black-500/50 hover:shadow-xl">
                        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full text-secondary mb-5 lg:mt-5 text-orange-600">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-16 h-16">
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl title-font font-bold lg:mb-3">Kinh Doanh - Tiếp Thị</h3>
                        <div class="flex-grow"><p class="leading-relaxed text-base opacity-75"></p></div>
                    </div>
                </a></div>
            <div class="p-4 w-1/2 md:w-1/3 "><a href="" class="h-full">
                    <div class="p-3 md:p-5 md:mb-0 mb-6 flex flex-col h-full text-center items-center topic-box rounded-lg box-shadow shadow-lg shadow-black-500/50 hover:shadow-xl">
                        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full text-secondary mb-5 lg:mt-5 text-orange-600">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-16 h-16">
                                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl title-font font-bold lg:mb-3">Internet Marketing</h3>
                        <div class="flex-grow"><p class="leading-relaxed text-base opacity-75"></p></div>
                    </div>
                </a></div>
            <div class="p-4 w-1/2 md:w-1/3"><a href="" class="h-full">
                    <div class="p-3 md:p-5 md:mb-0 mb-6 flex flex-col h-full text-center items-center topic-box rounded-lg box-shadow shadow-lg shadow-black-500/50 hover:shadow-xl">
                        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full text-secondary mb-5 lg:mt-5 text-orange-600">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-16 h-16">
                                <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path>
                                <line x1="16" y1="8" x2="2" y2="22"></line>
                                <line x1="17.5" y1="15" x2="9" y2="15"></line>
                            </svg>
                        </div>
                        <h3 class="text-xl title-font font-bold lg:mb-3">Quản trị kinh doanh</h3>
                        <div class="flex-grow"><p class="leading-relaxed text-base opacity-75"></p></div>
                    </div>
                </a></div>
            <div class="p-4 w-1/2 md:w-1/3"><a href="" class="h-full">
                    <div class="p-3 md:p-5 md:mb-0 mb-6 flex flex-col h-full text-center items-center topic-box rounded-lg box-shadow shadow-lg shadow-black-500/50 hover:shadow-xl">
                        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full text-secondary mb-5 lg:mt-5 text-orange-600">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-16 h-16">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                            </svg>
                        </div>
                        <h3 class="text-xl title-font font-bold lg:mb-3">Kế hoạch kinh doanh</h3>
                        <div class="flex-grow"><p class="leading-relaxed text-base opacity-75"></p></div>
                    </div>
                </a></div>
            <div class="p-4 w-1/2 md:w-1/3"><a href="" class="h-full">
                    <div class="p-3 md:p-5 md:mb-0 mb-6 flex flex-col h-full text-center items-center topic-box rounded-lg box-shadow shadow-lg shadow-black-500/50 hover:shadow-xl">
                        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full text-secondary mb-5 lg:mt-5 text-orange-600">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-16 h-16">
                                <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                                <rect x="9" y="9" width="6" height="6"></rect>
                                <line x1="9" y1="1" x2="9" y2="4"></line>
                                <line x1="15" y1="1" x2="15" y2="4"></line>
                                <line x1="9" y1="20" x2="9" y2="23"></line>
                                <line x1="15" y1="20" x2="15" y2="23"></line>
                                <line x1="20" y1="9" x2="23" y2="9"></line>
                                <line x1="20" y1="14" x2="23" y2="14"></line>
                                <line x1="1" y1="9" x2="4" y2="9"></line>
                                <line x1="1" y1="14" x2="4" y2="14"></line>
                            </svg>
                        </div>
                        <h3 class="text-xl title-font font-bold lg:mb-3">Tiếp thị - Bán hàng</h3>
                        <div class="flex-grow"><p class="leading-relaxed text-base opacity-75"></p></div>
                    </div>
                </a></div>
            <div class="p-4 w-1/2 md:w-1/3"><a href="" class="h-full">
                    <div class="p-3 md:p-5 md:mb-0 mb-6 flex flex-col h-full text-center items-center topic-box rounded-lg box-shadow shadow-lg shadow-black-500/50 hover:shadow-xl">
                        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full text-secondary mb-5 lg:mt-5 text-orange-600">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-16 h-16">
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl title-font font-bold lg:mb-3">Kỹ năng bán hàng</h3>
                        <div class="flex-grow"><p class="leading-relaxed text-base opacity-75"></p></div>
                    </div>
                </a></div>
        </div>
        <div class="container px-0 md:px-2 lg:px-5 max-auto py-24 text-center">
            <h2 class="sm:text-4xl text-3xl not-italic mb-4 text-primary">Tìm kiếm phổ biến</h2>
            <p class="mx-auto text-base leading-relaxed">Từ khóa được tìm kiếm nhiều</p>
            <div class="w-full mx-auto mt-5">
                <div class="w-full lg:py-6 lg:mb-0">
                    <div class="grid grid-cols-3">
                        <!--                         nhat tuan-->
                        <div class="flex flex-wrap flex-row self-start mt-2">
                            <div class="sticky top-0 w-full lg:mx-0 lg:px-3 flex z-10 ">
                                <p class="w-full py-2 h-12 text-lg text-center px-1 text-white opacity-75 bg-slate-500">
                                    Tìm kiếm nhiều nhất tuần</p>
                            </div>
                            <div class="m-3 w-1/2 lg:w-full h-full hover:shadow-xl border rounded-md md:container sm:w-auto">
                                <a href="page/detail.php">
                                    <div class="flex flex-col rounded bg-main-background item-center">
                                        <div class="overflow-hidden w-full">
                                            <img class="lg:h-56 w-full rounded-tl rounded-tr object-cover object-top lazy bg-white loaded"
                                                 src="image/mucluc.png" width="387" height="24">
                                        </div>
                                    </div>
                                    <div class="p-3 lg:p-4 bg-gray-100">
                                        <div class="flex items-center mb-3">
                                            <h2 class="text-primary text-md lg:text-lg text-left title-font not-italic hover:text-orange-400 py-2 break-words">
                                                PHÂN TÍCH CƠ SỞ KHÁCH QUAN HÌNH THÀNH TƯ TƯỞNG HỒ CHÍ
                                                MINH VÀ CH... </h2>
                                        </div>
                                        <p class="leading-relaxed text-base text-left break-words break-word hidden lg:block">
                                            Thảo luận Tư Tưởng Hồ Chí Minh Một số chuẩn mực đạo đức trong Tư tưởng Hồ
                                            Chí Minh ... </p>
                                        <div class="items-center mt-5 uppercase text-left lg:text-right"><span
                                                    class="text-gray-600 mr-3 leading-none text-sm pr-1 "> <svg
                                                        class="w-4 h-4 mb-1 lg:ml-2 webkit-inline-box"
                                                        viewBox="0 0 24 24"
                                                        width="24" height="24" stroke="currentColor" stroke-width="2"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round"> <path
                                                            d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path> <polyline
                                                            points="13 2 13 9 20 9"></polyline> </svg>&nbsp;10,000 </span>
                                            <span
                                                    class="text-gray-600 inline-flex items-center leading-none text-sm pr-1 mr-3"> <svg
                                                        class="w-4 h-4 mb-1 lg:ml-2 webkit-inline-box" width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                                        fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round"> <path
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path> <polyline
                                                            points="7 10 12 15 17 10"></polyline> <line x1="12" y1="15"
                                                                                                        x2="12"
                                                                                                        y2="3"></line> </svg>&nbsp; 3 </span>
                                            <span class="text-gray-600 inline-flex items-center leading-none text-sm"> <svg
                                                        class="w-4 h-4 mb-1 lg:ml-2 webkit-inline-box"
                                                        viewBox="0 0 24 24"
                                                        width="24" height="24" stroke="currentColor" stroke-width="2"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round"> <path
                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path> <circle
                                                            cx="12" cy="12" r="3"></circle> </svg>&nbsp; 121 </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="m-3 w-1/2 lg:w-full h-full hover:shadow-xl border rounded-md sm:w-auto">
                                <a href="page/detail.php">
                                    <div class="flex flex-col rounded bg-main-background item-center">
                                        <div class="overflow-hidden w-full">
                                            <img class="lg:h-56 w-full rounded-tl rounded-tr object-cover object-top lazy bg-white loaded"
                                                 src="image/mucluc.png" width="387" height="24">
                                        </div>
                                    </div>
                                    <div class="p-3 lg:p-4 bg-gray-100">
                                        <div class="flex items-center mb-3">
                                            <h2 class="text-primary text-md lg:text-lg text-left title-font not-italic hover:text-orange-400 py-2 break-words">
                                                PHÂN TÍCH CƠ SỞ KHÁCH QUAN HÌNH THÀNH TƯ TƯỞNG HỒ CHÍ
                                                MINH VÀ CH... </h2>
                                        </div>
                                        <p class="leading-relaxed text-base text-left break-words break-word hidden lg:block">
                                            Thảo luận Tư Tưởng Hồ Chí Minh Một số chuẩn mực đạo đức trong Tư tưởng Hồ
                                            Chí Minh ... </p>
                                        <div class="items-center mt-5 uppercase text-left lg:text-right"><span
                                                    class="text-gray-600 mr-3 leading-none text-sm pr-1 "> <svg
                                                        class="w-4 h-4 mb-1 lg:ml-2 webkit-inline-box"
                                                        viewBox="0 0 24 24"
                                                        width="24" height="24" stroke="currentColor" stroke-width="2"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round"> <path
                                                            d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path> <polyline
                                                            points="13 2 13 9 20 9"></polyline> </svg>&nbsp;10,000 </span>
                                            <span
                                                    class="text-gray-600 inline-flex items-center leading-none text-sm pr-1 mr-3"> <svg
                                                        class="w-4 h-4 mb-1 lg:ml-2 webkit-inline-box" width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                                        fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round"> <path
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path> <polyline
                                                            points="7 10 12 15 17 10"></polyline> <line x1="12" y1="15"
                                                                                                        x2="12"
                                                                                                        y2="3"></line> </svg>&nbsp; 3 </span>
                                            <span class="text-gray-600 inline-flex items-center leading-none text-sm"> <svg
                                                        class="w-4 h-4 mb-1 lg:ml-2 webkit-inline-box"
                                                        viewBox="0 0 24 24"
                                                        width="24" height="24" stroke="currentColor" stroke-width="2"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round"> <path
                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path> <circle
                                                            cx="12" cy="12" r="3"></circle> </svg>&nbsp; 121 </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--                         nhat thang-->
                        <div class="flex flex-wrap flex-row self-start mt-2">
                            <div class="sticky top-0 w-full lg:mx-0 px-0 lg:px-3 flex z-10 ">
                                <p class="w-full py-2 text-lg h-12 text-center px-1 text-white opacity-75 bg-blue-500">
                                    Tìm kiếm nhiều nhất tháng</p>
                            </div>
                            <div class="m-3 w-1/2 lg:w-full h-full hover:shadow-xl border rounded-md sm:w-auto">
                                <a href="page/detail.php">
                                    <div class="flex flex-col rounded bg-main-background item-center">
                                        <div class="overflow-hidden w-full">
                                            <img class="lg:h-56 w-full rounded-tl rounded-tr object-cover object-top lazy bg-white loaded"
                                                 src="image/mucluc.png" width="387" height="24">
                                        </div>
                                    </div>
                                    <div class="p-3 lg:p-4 bg-gray-100">
                                        <div class="flex items-center mb-3">
                                            <h2 class="text-primary text-md lg:text-lg text-left title-font not-italic hover:text-orange-400 py-2 break-words">
                                                PHÂN TÍCH CƠ SỞ KHÁCH QUAN HÌNH THÀNH TƯ TƯỞNG HỒ CHÍ
                                                MINH VÀ CH... </h2>
                                        </div>
                                        <p class="leading-relaxed text-base text-left break-words break-word hidden lg:block">
                                            Thảo luận Tư Tưởng Hồ Chí Minh Một số chuẩn mực đạo đức trong Tư tưởng Hồ
                                            Chí Minh ... </p>
                                        <div class="items-center mt-5 uppercase text-left lg:text-right"><span
                                                    class="text-gray-600 mr-3 leading-none text-sm pr-1 "> <svg
                                                        class="w-4 h-4 mb-1 lg:ml-2 webkit-inline-box"
                                                        viewBox="0 0 24 24"
                                                        width="24" height="24" stroke="currentColor" stroke-width="2"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round"> <path
                                                            d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path> <polyline
                                                            points="13 2 13 9 20 9"></polyline> </svg>&nbsp;10,000 </span>
                                            <span
                                                    class="text-gray-600 inline-flex items-center leading-none text-sm pr-1 mr-3"> <svg
                                                        class="w-4 h-4 mb-1 lg:ml-2 webkit-inline-box" width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                                        fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round"> <path
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path> <polyline
                                                            points="7 10 12 15 17 10"></polyline> <line x1="12" y1="15"
                                                                                                        x2="12"
                                                                                                        y2="3"></line> </svg>&nbsp; 3 </span>
                                            <span class="text-gray-600 inline-flex items-center leading-none text-sm"> <svg
                                                        class="w-4 h-4 mb-1 lg:ml-2 webkit-inline-box"
                                                        viewBox="0 0 24 24"
                                                        width="24" height="24" stroke="currentColor" stroke-width="2"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round"> <path
                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path> <circle
                                                            cx="12" cy="12" r="3"></circle> </svg>&nbsp; 121 </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="m-3 w-1/2 lg:w-full h-full hover:shadow-xl border rounded-md sm:w-auto">
                                <a href="page/detail.php">
                                    <div class="flex flex-col rounded bg-main-background item-center">
                                        <div class="overflow-hidden w-full">
                                            <img class="lg:h-56 w-full rounded-tl rounded-tr object-cover object-top lazy bg-white loaded"
                                                 src="image/mucluc.png" width="387" height="24">
                                        </div>
                                    </div>
                                    <div class="p-3 lg:p-4 bg-gray-100">
                                        <div class="flex items-center mb-3">
                                            <h2 class="text-primary text-md lg:text-lg text-left title-font not-italic hover:text-orange-400 py-2 break-words">
                                                PHÂN TÍCH CƠ SỞ KHÁCH QUAN HÌNH THÀNH TƯ TƯỞNG HỒ CHÍ
                                                MINH VÀ CH... </h2>
                                        </div>
                                        <p class="leading-relaxed text-base text-left break-words break-word hidden lg:block">
                                            Thảo luận Tư Tưởng Hồ Chí Minh Một số chuẩn mực đạo đức trong Tư tưởng Hồ
                                            Chí Minh ... </p>
                                        <div class="items-center mt-5 uppercase text-left lg:text-right"><span
                                                    class="text-gray-600 mr-3 leading-none text-sm pr-1 "> <svg
                                                        class="w-4 h-4 mb-1 lg:ml-2 webkit-inline-box"
                                                        viewBox="0 0 24 24"
                                                        width="24" height="24" stroke="currentColor" stroke-width="2"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round"> <path
                                                            d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path> <polyline
                                                            points="13 2 13 9 20 9"></polyline> </svg>&nbsp;10,000 </span>
                                            <span
                                                    class="text-gray-600 inline-flex items-center leading-none text-sm pr-1 mr-3"> <svg
                                                        class="w-4 h-4 mb-1 lg:ml-2 webkit-inline-box" width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                                        fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round"> <path
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path> <polyline
                                                            points="7 10 12 15 17 10"></polyline> <line x1="12" y1="15"
                                                                                                        x2="12"
                                                                                                        y2="3"></line> </svg>&nbsp; 3 </span>
                                            <span class="text-gray-600 inline-flex items-center leading-none text-sm"> <svg
                                                        class="w-4 h-4 mb-1 lg:ml-2 webkit-inline-box"
                                                        viewBox="0 0 24 24"
                                                        width="24" height="24" stroke="currentColor" stroke-width="2"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round"> <path
                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path> <circle
                                                            cx="12" cy="12" r="3"></circle> </svg>&nbsp; 121 </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--                         moi nhat-->
                        <div class="flex flex-wrap flex-row self-start mt-2">
                            <div class="sticky top-0 w-full lg:mx-0 px-0 lg:px-3 flex z-10">
                                <p class="w-full py-2 h-12 text-lg text-center px-1 text-white opacity-75 bg-orange-500">
                                    Tìm kiếm mới nhất</p>
                            </div>
                            <div class="m-3 w-1/2 lg:w-full h-full hover:shadow-xl border rounded-md sm:w-auto">
                                <a href="page/detail.php">
                                    <div class="flex flex-col rounded bg-main-background item-center">
                                        <div class="overflow-hidden w-full">
                                            <img class="lg:h-56 w-full rounded-tl rounded-tr object-cover object-top lazy bg-white loaded"
                                                 src="image/mucluc.png" width="387" height="24">
                                        </div>
                                    </div>
                                    <div class="p-3 lg:p-4 bg-gray-100">
                                        <div class="flex items-center mb-3">
                                            <h2 class="text-primary text-md lg:text-lg text-left title-font not-italic hover:text-orange-400 py-2 break-words">
                                                PHÂN TÍCH CƠ SỞ KHÁCH QUAN HÌNH THÀNH TƯ TƯỞNG HỒ CHÍ
                                                MINH VÀ CH... </h2>
                                        </div>
                                        <p class="leading-relaxed text-base text-left break-words break-word hidden lg:block">
                                            Thảo luận Tư Tưởng Hồ Chí Minh Một số chuẩn mực đạo đức trong Tư tưởng Hồ
                                            Chí Minh ... </p>
                                        <div class="items-center mt-5 uppercase text-left lg:text-right"><span
                                                    class="text-gray-600 mr-3 leading-none text-sm pr-1 "> <svg
                                                        class="w-4 h-4 mb-1 lg:ml-2 webkit-inline-box"
                                                        viewBox="0 0 24 24"
                                                        width="24" height="24" stroke="currentColor" stroke-width="2"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round"> <path
                                                            d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path> <polyline
                                                            points="13 2 13 9 20 9"></polyline> </svg>&nbsp;10,000 </span>
                                            <span
                                                    class="text-gray-600 inline-flex items-center leading-none text-sm pr-1 mr-3"> <svg
                                                        class="w-4 h-4 mb-1 lg:ml-2 webkit-inline-box" width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                                        fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round"> <path
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path> <polyline
                                                            points="7 10 12 15 17 10"></polyline> <line x1="12" y1="15"
                                                                                                        x2="12"
                                                                                                        y2="3"></line> </svg>&nbsp; 3 </span>
                                            <span class="text-gray-600 inline-flex items-center leading-none text-sm"> <svg
                                                        class="w-4 h-4 mb-1 lg:ml-2 webkit-inline-box"
                                                        viewBox="0 0 24 24"
                                                        width="24" height="24" stroke="currentColor" stroke-width="2"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round"> <path
                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path> <circle
                                                            cx="12" cy="12" r="3"></circle> </svg>&nbsp; 121 </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="m-3 w-1/2 lg:w-full h-full hover:shadow-xl border rounded-md sm:w-auto">
                                <a href="page/detail.php">
                                    <div class="flex flex-col rounded bg-main-background item-center">
                                        <div class="overflow-hidden w-full">
                                            <img class="lg:h-56 w-full rounded-tl rounded-tr object-cover object-top lazy bg-white loaded"
                                                 src="image/mucluc.png" width="387" height="24">
                                        </div>
                                    </div>
                                    <div class="p-3 lg:p-4 bg-gray-100">
                                        <div class="flex items-center mb-3">
                                            <h2 class="text-primary text-md lg:text-lg text-left title-font not-italic hover:text-orange-400 py-2 break-words">
                                                PHÂN TÍCH CƠ SỞ KHÁCH QUAN HÌNH THÀNH TƯ TƯỞNG HỒ CHÍ
                                                MINH VÀ CH... </h2>
                                        </div>
                                        <p class="leading-relaxed text-base text-left break-words break-word hidden lg:block">
                                            Thảo luận Tư Tưởng Hồ Chí Minh Một số chuẩn mực đạo đức trong Tư tưởng Hồ
                                            Chí Minh ... </p>
                                        <div class="items-center mt-5 uppercase text-left lg:text-right"><span
                                                    class="text-gray-600 mr-3 leading-none text-sm pr-1 "> <svg
                                                        class="w-4 h-4 mb-1 lg:ml-2 webkit-inline-box"
                                                        viewBox="0 0 24 24"
                                                        width="24" height="24" stroke="currentColor" stroke-width="2"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round"> <path
                                                            d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path> <polyline
                                                            points="13 2 13 9 20 9"></polyline> </svg>&nbsp;10,000 </span>
                                            <span
                                                    class="text-gray-600 inline-flex items-center leading-none text-sm pr-1 mr-3"> <svg
                                                        class="w-4 h-4 mb-1 lg:ml-2 webkit-inline-box" width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                                        fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round"> <path
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path> <polyline
                                                            points="7 10 12 15 17 10"></polyline> <line x1="12" y1="15"
                                                                                                        x2="12"
                                                                                                        y2="3"></line> </svg>&nbsp; 3 </span>
                                            <span class="text-gray-600 inline-flex items-center leading-none text-sm"> <svg
                                                        class="w-4 h-4 mb-1 lg:ml-2 webkit-inline-box"
                                                        viewBox="0 0 24 24"
                                                        width="24" height="24" stroke="currentColor" stroke-width="2"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round"> <path
                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path> <circle
                                                            cx="12" cy="12" r="3"></circle> </svg>&nbsp; 121 </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="bg-white w-full bottom-0 pb-5 mt-16 border-t border-solid border-gray-400">
    <div class="container mx-auto px-2">
        <div class="flex justify-between text-center p-2">
            <a class="d-block text-center w-full mt-5" rel="nofollow" href="/logo/logo.png">
                <img class="h-8 inline-block" width="232" height="30" alt="5pdf"
                     src="https://5pdf.net/logos/123doc.webp?t=20220527132644">
            </a>
        </div>
        <div class="p-2 flex justify-center flex-wrap text-xs text-gray-700"></div>
        <div class="text-center text-sm"></div>
        <div class="uppercase px-3 pt-3">
            <div class="flex flex-wrap p-0 my-0 mx-auto w-full text-gray-700 text-center text-xs">
                <div class="w-full md:w-1/4 "><a href="page/aboutus.php">Về chúng tôi</a></div>
                <div class="w-full md:w-1/4 "><a href="page/policy.php">Quy định về chính sách</a></div>
                <div class="w-full md:w-1/4 "><a href="page/termsofuse.php">Điều khoản sử dụng</a></div>
                <div class="w-full md:w-1/4 "><a href="page/contacus.php">Liên hệ</a></div>
            </div>
        </div>
        <div class="flex justify-center text-sm mx-auto my-3"><span> Copyright 5pdf © . 2022 </span></div>
    </div>
</footer>
<script>
    window.addEventListener('DOMContentLoaded', () => {
        const menuBtn = document.querySelector('#menu-btn')
        const dropdown = document.querySelector('#dropdown')

        menuBtn.addEventListener('click', () => {
            /* if(dropdown.classList.contains('hidden')){
                dropdown.classList.remove('hidden');
                dropdown.classList.add('flex');
            }else{
                dropdown.classList.remove('flex')
                dropdown.classList.add('hidden')
            } */

            dropdown.classList.toggle('hidden')
            dropdown.classList.toggle('flex')
        })
    })
</script>
</body>
</html>