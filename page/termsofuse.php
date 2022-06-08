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
                            '0%, 100%': {transform: 'scales(min:0,max:100)', opacity: 0},
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
    <title>Điều khoản sử dụng-5pdf</title>
</head>
<body>
<nav class="w-full top-0 py-1 shadow border-b bg-main-background z-50 relative">
    <div class="w-full relative">
        <div class="container px-6 py-2 mx-auto flex flex-wrap items-center justify-between mt-0">
            <div class="w-1/3 lg:w-1/4 block">
                <a href="http://5pdf.test"
                   class="hidden lg:inline-block tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl">
                    <img src="/logo/logo.png" class="lg:h-8" width="232"
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
    <nav class="mx-auto my-4 px-2 container" aria-label="Breadcrumb">
        <ol class="list-none p-0 block" vocab="https://schema.org/" typeof="BreadcrumbList">
            <li property="itemListElement" typeof="ListItem" class="inline items-center pr-2">
                <a property="item" typeof="WebPage" title="" href="/index.php"
                   class="text-primary hover:text-secondary">
                    <span property="name">Trang chủ</span>
                </a>
                <meta property="position" content="1">
            </li>
            <li property="itemListElement" typeof="ListItem" class="inline items-center pr-2">
                <a property="item" typeof="WebPage" title="" href="/page/termsofuse.php"
                   class="text-primary hover:text-secondary">
                    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                         stroke-linejoin="round" class="inline-block h-4 w-4 -mr-2">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg> &nbsp;
                    <span property="name">Điều khoản sử dụng</span> </a>
                <meta property="position" content="2">
            </li>
        </ol>
    </nav>
    <div class="container m-auto flex flex-wrap">
        <div id="page_list_collapse" class="lg:hidden w-full m-2">
            <div>
                <div class="text-xl flex-wrap flex justify-between cursor-pointer"
                     onclick="document.querySelector('#sidebar').classList.toggle('hidden')">
                    <h2>Về chúng tôi</h2>
                    <button class="">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                             fill="none" stroke-linecap="round" stroke-linejoin="round" class="inline-block text-xl">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                </div>
            </div>
            <div>
                <div class="hidden">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                         stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                    Page lists
                </div>
            </div>
        </div>
        <div class="container grid grid-cols-12 gap-2">
            <div id="sidebar" class="hidden lg:block col-span-12 lg:col-span-3">
                <div class="m-2">
                    <ul>
                        <li class="mb-3 lg:mb-1">
                            <a class="px-2 -mx-2 py-1 transition-fast relative block hover:translate-r-2px hover:text-gray-900 text-gray-600 not-italic text-primary"
                               href="/page/aboutus.php" data-path="about-us">
                                <span class="rounded absolute inset-0 bg-teal-200 opacity-0"></span>
                                <span class="relative">Về chúng tôi</span>
                            </a>
                        </li>
                        <li class="mb-3 lg:mb-1">
                            <a class="px-2 -mx-2 py-1 transition-fast relative block hover:translate-r-2px hover:text-gray-900 text-gray-900 not-italic text-primary"
                               href="/page/termsofuse.php" data-path="terms-of-use">
                                <span class="rounded absolute inset-0 bg-teal-200 opacity-0"></span>
                                <span class="relative">Điều khoản sử dụng</span>
                            </a>
                        </li>
                        <li class="mb-3 lg:mb-1">
                            <a class="px-2 -mx-2 py-1 transition-fast relative block hover:translate-r-2px hover:text-gray-900 text-gray-600 not-italic text-primary"
                               href="/page/policy.php"
                               data-path="policy">
                                <span class="rounded absolute inset-0 bg-teal-200 opacity-0"></span>
                                <span class="relative">Quy định về chính sách</span>
                            </a>
                        </li>
                        <li class="mb-3 lg:mb-1">
                            <a class="px-2 -mx-2 py-1 transition-fast relative block hover:translate-r-2px hover:text-gray-900 text-gray-600 not-italic text-primary"
                               href="/page/contacus.php" data-path="contact-us">
                                <span class="rounded absolute inset-0 bg-teal-200 opacity-0"></span>
                                <span class="relative">Liên hệ</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="content-wrapper" class="col-span-12 md:col-span-9">
                <div class="m-2">
                    <article class="prose prose-sm sm:prose max-w-none mx-auto">
                        <h1>Điều khoản sử dụng</h1>
                        <p>Điều khoản sau áp dụng cho các khách hàng sử dụng dịch vụ trên website
                            <strong><em>5pdf.net</em></strong>. Bằng việc truy cập vào website, bạn đã đồng ý với các
                            điều khoản của thỏa thuận này mà chúng tôi không cần thông báo trước. Nếu bạn không đồng ý
                            với các điều khoản này, vui lòng không sử dụng dịch vụ của chúng tôi.</p>
                        <h2>Nội dung và phạm vi sử dụng</h2>
                        <ul>
                            <li>Tất cả những nội truy cập được trên website, bao gồm văn bản, hình ảnh, trademark, logo,
                                video, giao diện người dùng, mã code máy tính và các nội dung khác, bao gồm nhưng không
                                giới hạn như thiết kế giao diện, layout, cách sắp xếp nội dung được chia sẻ bởi 5pdf,
                                các thành viên của 5pdf hoặc người cấp phép, và các nội dung được bảo vệ bởi thương
                                hiệu, trademark, các sản phẩn sở hữu trí tuệ và các luật bảo hộ.
                            </li>
                            <li>Người dùng của 5PDF chỉ có thể sử dụng các tài liệu cho mục đích cá nhân, nghiên cứu,
                                khoa học và được giới hạn bởi các quyền nghiên cứu, xem, tìm kiếm, tải xuống và in ấn
                                nội dung.
                            </li>
                            <li>Website 5pdf cung cấp cho bạn khả năng thêm, chỉnh sửa hoặc xoá các nội dung, nghiên
                                cứu, bài viết, dữ liệu, ảnh, hình hoạ hoặc các nội dung khác được tải lên bởi bạn.
                            </li>
                        </ul>
                        <h2>Các hành động nghiêm cấm</h2>
                        <p><strong><strong>Bạn không được phép</strong></strong></p>
                        <ul>
                            <li>Download tự động bất kỳ nội dung nào bằng các phần mềm hoặc đoạn mã để tự động tìm kiếm
                                và đánh dấu nội dung (toàn bộ văn bản và các meta-data).
                            </li>
                            <li>Trực tiếp hoặc gián tiếp sử dụng hoặc hỗ trợ bất kỳ bên thứ 3 nào sử dụng các nội dung
                                trên 5pdf nhằm mục đích sinh lời bao gồm nhưng không giới hạn bởi các hành động bán, cho
                                thuê, chuyển nhượng hoặc tải lên nội dung lên các trang mang tính thương mại khác.
                            </li>
                            <li>Sử dụng website để đăng tải, phân phối hoặc quảng cáo bất kỳ nội dung quảng cáo hoặc các
                                hình thức tương tự tới các người sử dụng khác hoặc bất kỳ nội dung hoặc hành động khác
                                trái với pháp luật
                            </li>
                            <li>Người dùng trên <strong><em>5pdf.net</em></strong> không được đăng lên bất kỳ nội dung
                                nào: (i) vi phạm, chiếm đoạt hoặc vi phạm bằng sáng chế, bản quyền, nhãn hiệu, bí mật
                                thương mại, quyền nhân thân hoặc quyền sở hữu trí tuệ khác của bên thứ ba, hoặc quyền
                                công khai hoặc quyền riêng tư; (ii) vi phạm hoặc khuyến khích bất kỳ hành vi nào vi phạm
                                bất kỳ luật hoặc quy định hiện hành mà sẽ làm phát sinh trách nhiệm dân sự; (iii) gian
                                lận, cố ý sai, gây hiểu lầm hoặc lừa đảo; (iv) phỉ báng, tục tĩu, khiêu dâm, thô tục
                                hoặc xúc phạm; (v) khuyến khích phân biệt đối xử, cố chấp, phân biệt chủng tộc, thù hận,
                                quấy rối hoặc gây hại chống lại bất kỳ cá nhân hoặc nhóm nào; (vi) bạo lực hoặc đe dọa
                                hoặc kích động bạo lực hoặc các hành động đe dọa bất kỳ cá nhân hoặc tổ chức nào; hoặc
                                (vii) khuyến khích các hoạt động bất hợp pháp hoặc có hại.
                            </li>
                        </ul>
                    </article>
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
                <div class="w-full md:w-1/4 "><a href="/page/aboutus.php">Về chúng tôi</a></div>
                <div class="w-full md:w-1/4 "><a href="/page/policy.php">Quy định về chính sách</a></div>
                <div class="w-full md:w-1/4 "><a href="/page/termsofuse.php">Điều khoản sử dụng</a>
                </div>
                <div class="w-full md:w-1/4 "><a href="/page/contacus.php">Liên hệ</a></div>
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
            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
                dropdown.classList.add('flex');
            } else {
                dropdown.classList.remove('flex')
                dropdown.classList.add('hidden')
            }

            // dropdown.classList.toggle('hidden')
            // dropdown.classList.toggle('flex')
        })
    })
</script>
</body>
</html>