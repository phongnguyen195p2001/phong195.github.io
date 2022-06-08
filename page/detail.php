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
                        secondary: '#ED5B23',
                    }
                }
            }
        }
    </script>
    <title>[DOC]</title>
</head>
<body>
<nav class="w-full top-0 py-1 shadow border-b bg-main-background z-50 relative">
    <div class="w-full relative">
        <div class="container px-6 py-2 mx-auto flex flex-wrap items-center justify-between mt-0">
            <div class="w-1/3 lg:w-1/4 block">
                <a href="http://5pdf.test"
                   class="hidden lg:inline-block tracking-wide no-underline hover:no-underline not-italic text-gray-800 text-xl">
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
                   class="lg:hidden tracking-wide no-underline hover:no-underline not-italic text-gray-800 text-xl">
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
        <input class="hidden" type="checkbox" name="show" value="category" autocomplete="off">
        <div class="flex hidden justify-center w-full order-4 order-2" id="dropdown">
            <div class="container left-0 right-0 mx-auto absolute">
                <ul class="mx-6 flex flex-wrap text-base shadow border mt-1 z-10 bg-white text-gray-700 py-6">
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/nghe-si-va-thiet-ke">topics.name.nghe-si-va-thiet-ke</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/tac-gia">topics.name.tac-gia</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/doanh-nhan">topics.name.doanh-nhan</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/dau-bep">topics.name.dau-bep</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/bac-si">topics.name.bac-si</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/chinh-phu-va-phi-chinh-phu">Chính phủ và phi chính phủ</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/truyen-thong">topics.name.truyen-thong</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/nhac-si">topics.name.nhac-si</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/nha-nghien-cuu">topics.name.nha-nghien-cuu</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/sinh-vien">topics.name.sinh-vien</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/giao-vien">topics.name.giao-vien</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/khac">topics.name.khac</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/trang-tinh">topics.name.trang-tinh</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/kinh-doanh-tiep-thi">Kinh Doanh - Tiếp Thị</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/internet-marketing">Internet Marketing</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/quan-tri-kinh-doanh">Quản trị kinh doanh</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/ke-hoach-kinh-doanh">Kế hoạch kinh doanh</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/tiep-thi-ban-hang">Tiếp thị - Bán hàng</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/ky-nang-ban-hang">Kỹ năng bán hàng</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/thuong-mai-dien-tu">Thương mại điện tử</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/pr-truyen-thong">PR - Truyền thông</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/to-chuc-su-kien">Tổ chức sự kiện</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/kinh-te-quan-ly">Kinh tế - Quản lý</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/quan-ly-nha-nuoc">Quản lý nhà nước</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/tieu-chuan-qui-chuan">Tiêu chuẩn - Qui chuẩn</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/quan-ly-du-an">Quản lý dự án</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/quy-hoach-do-thi">Quy hoạch - Đô thị</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/bieu-mau-van-ban">Biểu Mẫu - Văn Bản</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/thu-tuc-hanh-chinh">Thủ tục hành chính</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/bieu-mau">Biểu mẫu</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/don-tu">Đơn từ</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/hop-dong">Hợp đồng</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/tai-chinh-ngan-hang">Tài chính - Ngân hàng</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/ngan-hang-tin-dung">Ngân hàng - Tín dụng</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/ke-toan-kiem-toan">Kế toán - Kiểm toán</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/tai-chinh-doanh-nghiep">Tài chính doanh nghiệp</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/dau-tu-chung-khoan">Đầu tư Chứng khoán</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/dau-tu-bat-dong-san">Đầu tư Bất động sản</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/bao-hiem">Bảo hiểm</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/quy-dau-tu">Quỹ đầu tư</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/cong-nghe-thong-tin">Công nghệ thông tin</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/phan-cung">Phần cứng</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/he-dieu-hanh">Hệ điều hành</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/quan-tri-mang">Quản trị mạng</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/quan-tri-web">Quản trị Web</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/co-so-du-lieu">Cơ sở dữ liệu</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/ky-thuat-lap-trinh">Kỹ thuật lập trình</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/chung-chi-quoc-te">Chứng chỉ quốc tế</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/tin-hoc-van-phong">Tin học văn phòng</a>
                    </li>
                    <li class="w-1/2 md:w-1/3">
                        <a class="block no-underline text-primary hover:text-orange-500 py-2 md:px-4 px-2"
                           href="https://5pdf.net/topic/an-ninh-bao-mat">An ninh - Bảo mật</a>
                    </li>
                    <li class="px-8">Loading...</li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="container-fluid mx-auto sm:mt-4 w-full" style="height: auto !important;">
    <div class="gird grid-cols-12 gap-2" style="height: auto !important;">
        <div class="col-span-2 px-1 hidden lg:block"> <div class="sticky top-0"> <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2979760623205174" data-ad-slot="9160272902" data-ad-format="auto" data-full-width-responsive="true" data-adsbygoogle-status="done"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script> </div> </div>
        <div class="col-span-12 lg:col-span-7" style="height: auto !important;">
            <div class="container m-auto" style="height: auto !important;">
                <h1 id="document-title" class="text-2xl text-left mt-2 mb-4 px-2 break-words not-italic">
                    PHÂN TÍCH CƠ SỞ KHÁCH QUAN HÌNH THÀNH TƯ TƯỞNG HỒ CHÍ MINH VÀ CHỈ RA TIỀN ĐỀ
                    LÝ LUẬN GIỮ VAI TRÒ QUYẾT ĐỊNH TRONG VIỆC HÌNH THÀNH, PHÁT TRIỂN TƯ TƯỞNG HỒ
                    CHÍ MINH </h1>
                <h2 class="text-lg p-2">Tìm thấy 10,000 tài liệu liên quan tới tiêu đề "<b>Phân tích cơ sở khách
                        quan hình thành tư tưởng hồ chí minh và chỉ ra tiền đề ly...</b>": </h2>
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
                            <a property="item" typeof="WebPage" title="" href=""
                               class="text-primary hover:text-secondary">
                                <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                                     stroke-linecap="round" stroke-linejoin="round" class="inline-block h-4 w-4 -mr-2">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg> &nbsp; <span property="name">Chủ đề</span> </a>
                            <meta property="position" content="2">
                        </li>
                        <li property="itemListElement" typeof="ListItem" class="inline items-center pr-2">
                            <a property="item" typeof="WebPage" title="" href="#"
                               class="text-primary hover:text-secondary">
                                <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                                     stroke-linecap="round" stroke-linejoin="round" class="inline-block h-4 w-4 -mr-2">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg> &nbsp; <span property="name">Phân tích cơ sở khách quan hình thành tư tưởng hồ chí minh và chỉ ra tiền đề ly...</span>
                            </a>
                            <meta property="position" content="3">
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="flex flex-wrap mb-4" style="height: auto !important;">
                <div class="container m-auto" style="height: auto !important;">
                    <div class="p-2 w-full border-gray-200 border-b-2 overflow-auto bg-white my-2">
                        <a href="#" rel="nofollow">
                            <img src="/image/thaoluan.png" width="160" height="200" align="left"
                                 class="w-40 mr-2 border border-gray-300 lazy loaded"
                                 alt="THẢO LUẬN TƯ TƯỞNG HỒ CHÍ MINH MỘT SỐ CHUẨN MỰC ĐẠO ĐỨC TRONG TƯ TƯỞNG HỒ CHÍ MINH"
                                 data-ll-status="loaded">
                        </a>
                        <div class="md:pl-40 md:ml-2 not-italic">
                            <h3>
                                <a href="#" rel="nofollow"
                                   class="text-xl text-primary hover:text-secondary block mb-2 break-words">
                                    THẢO LUẬN TƯ TƯỞNG HỒ CHÍ MINH MỘT SỐ CHUẨN MỰC ĐẠO ĐỨC TRONG TƯ TƯỞNG HỒ CHÍ
                                    MINH
                                </a>
                            </h3>
                            <div class="break-word clear-both md:clear-none" id="doc-content-0">
                                Thảo luận Tư Tưởng Hồ Chí Minh Một số chuẩn mực đạo đức trong Tư tưởng Hồ Chí Minh
                                <br>Môn: Tư tưởng Hồ Chí Minh<br>
                                Giảng viên hướng dẫn: Ts. Bùi Hồng Vạn
                                <br>Lớp học phần: 2071HCMI0111<br>
                                Nhóm: 3<br>
                                Đề tài 1: Phân tích cơ sở khách quan hình thành, phát triển Tư tưởng Hồ Chí Minh và
                                chỉ ra tiền đề lý luận đóng vai[r]
                                <div id="voting-6924908" class="hidden">
                                    <p>
                                        <a href="" class="text-primary hover:text-secondary" rel="dofollow">Xem Thêm "
                                            <i>TƯ TƯỞNG HỒ CHÍ MINH: THẢO LUẬN: TƯ TƯỞNG HỒ CHÍ MINH PPS</i> "
                                        </a>
                                    </p>
                                    <p>
                                        <a href="#" class="text-primary hover:text-secondary" rel="dofollow">Xem Thêm "
                                            <i>chuẩn mực đạo đức trong tư tưởng hồ chí minh</i> "
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <p class="text-sm py-2 uppercase text-right">
                                <!--                                <img src="https://5pdf.net/svg/docx.svg"-->
                                <!--                                     class="w-4 h-4 mb-1 ml-2 webkit-inline-box lazy loaded" width="24" height="24"-->
                                <!--                                     data-ll-status="loaded"> -->
                                20
                                <a class="text-primary hover:text-secondary ml-2" rel="nofollow" href="#"
                                   title="THẢO LUẬN TƯ TƯỞNG HỒ CHÍ MINH MỘT SỐ CHUẨN MỰC ĐẠO ĐỨC TRONG TƯ TƯỞNG HỒ CHÍ MINH">
                                    Đọc thêm
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap mb-4" style="height: auto !important;">
                <div class="container m-auto" style="height: auto !important;">
                    <div class="p-2 w-full border-gray-200 border-b-2 overflow-auto bg-white my-2">
                        <a href="#" rel="nofollow">
                            <img src="/image/thaoluan.png" width="160" height="200" align="left"
                                 class="w-40 mr-2 border border-gray-300 lazy loaded"
                                 alt="THẢO LUẬN TƯ TƯỞNG HỒ CHÍ MINH MỘT SỐ CHUẨN MỰC ĐẠO ĐỨC TRONG TƯ TƯỞNG HỒ CHÍ MINH"
                                 data-ll-status="loaded">
                        </a>
                        <div class="md:pl-40 md:ml-2 not-italic">
                            <h3>
                                <a href="#" rel="nofollow"
                                   class="text-xl text-primary hover:text-secondary block mb-2 break-words">
                                    THẢO LUẬN TƯ TƯỞNG HỒ CHÍ MINH MỘT SỐ CHUẨN MỰC ĐẠO ĐỨC TRONG TƯ TƯỞNG HỒ CHÍ
                                    MINH
                                </a>
                            </h3>
                            <div class="break-word clear-both md:clear-none" id="doc-content-0">
                                Thảo luận Tư Tưởng Hồ Chí Minh Một số chuẩn mực đạo đức trong Tư tưởng Hồ Chí Minh
                                <br>Môn: Tư tưởng Hồ Chí Minh<br>
                                Giảng viên hướng dẫn: Ts. Bùi Hồng Vạn
                                <br>Lớp học phần: 2071HCMI0111<br>
                                Nhóm: 3<br>
                                Đề tài 1: Phân tích cơ sở khách quan hình thành, phát triển Tư tưởng Hồ Chí Minh và
                                chỉ ra tiền đề lý luận đóng vai[r]
                                <div id="voting-6924908" class="hidden">
                                    <p>
                                        <a href="" class="text-primary hover:text-secondary" rel="dofollow">Xem Thêm "
                                            <i>TƯ TƯỞNG HỒ CHÍ MINH: THẢO LUẬN: TƯ TƯỞNG HỒ CHÍ MINH PPS</i> "
                                        </a>
                                    </p>
                                    <p>
                                        <a href="#" class="text-primary hover:text-secondary" rel="dofollow">Xem Thêm "
                                            <i>chuẩn mực đạo đức trong tư tưởng hồ chí minh</i> "
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <p class="text-sm py-2 uppercase text-right">
                                <!--                                <img src="https://5pdf.net/svg/docx.svg"-->
                                <!--                                     class="w-4 h-4 mb-1 ml-2 webkit-inline-box lazy loaded" width="24" height="24"-->
                                <!--                                     data-ll-status="loaded"> -->
                                20
                                <a class="text-primary hover:text-secondary ml-2" rel="nofollow" href="#"
                                   title="THẢO LUẬN TƯ TƯỞNG HỒ CHÍ MINH MỘT SỐ CHUẨN MỰC ĐẠO ĐỨC TRONG TƯ TƯỞNG HỒ CHÍ MINH">
                                    Đọc thêm
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap mb-4" style="height: auto !important;">
                <div class="container m-auto" style="height: auto !important;">
                    <div class="p-2 w-full border-gray-200 border-b-2 overflow-auto bg-white my-2">
                        <a href="#" rel="nofollow">
                            <img src="/image/thaoluan.png" width="160" height="200" align="left"
                                 class="w-40 mr-2 border border-gray-300 lazy loaded"
                                 alt="THẢO LUẬN TƯ TƯỞNG HỒ CHÍ MINH MỘT SỐ CHUẨN MỰC ĐẠO ĐỨC TRONG TƯ TƯỞNG HỒ CHÍ MINH"
                                 data-ll-status="loaded">
                        </a>
                        <div class="md:pl-40 md:ml-2 not-italic">
                            <h3>
                                <a href="#" rel="nofollow"
                                   class="text-xl text-primary hover:text-secondary block mb-2 break-words">
                                    THẢO LUẬN TƯ TƯỞNG HỒ CHÍ MINH MỘT SỐ CHUẨN MỰC ĐẠO ĐỨC TRONG TƯ TƯỞNG HỒ CHÍ
                                    MINH
                                </a>
                            </h3>
                            <div class="break-word clear-both md:clear-none" id="doc-content-0">
                                Thảo luận Tư Tưởng Hồ Chí Minh Một số chuẩn mực đạo đức trong Tư tưởng Hồ Chí Minh
                                <br>Môn: Tư tưởng Hồ Chí Minh<br>
                                Giảng viên hướng dẫn: Ts. Bùi Hồng Vạn
                                <br>Lớp học phần: 2071HCMI0111<br>
                                Nhóm: 3<br>
                                Đề tài 1: Phân tích cơ sở khách quan hình thành, phát triển Tư tưởng Hồ Chí Minh và
                                chỉ ra tiền đề lý luận đóng vai[r]
                                <div id="voting-6924908" class="hidden">
                                    <p>
                                        <a href="" class="text-primary hover:text-secondary" rel="dofollow">Xem Thêm "
                                            <i>TƯ TƯỞNG HỒ CHÍ MINH: THẢO LUẬN: TƯ TƯỞNG HỒ CHÍ MINH PPS</i> "
                                        </a>
                                    </p>
                                    <p>
                                        <a href="#" class="text-primary hover:text-secondary" rel="dofollow">Xem Thêm "
                                            <i>chuẩn mực đạo đức trong tư tưởng hồ chí minh</i> "
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <p class="text-sm py-2 uppercase text-right">
                                <!--                                <img src="https://5pdf.net/svg/docx.svg"-->
                                <!--                                     class="w-4 h-4 mb-1 ml-2 webkit-inline-box lazy loaded" width="24" height="24"-->
                                <!--                                     data-ll-status="loaded"> -->
                                20
                                <a class="text-primary hover:text-secondary ml-2" rel="nofollow" href="#"
                                   title="THẢO LUẬN TƯ TƯỞNG HỒ CHÍ MINH MỘT SỐ CHUẨN MỰC ĐẠO ĐỨC TRONG TƯ TƯỞNG HỒ CHÍ MINH">
                                    Đọc thêm
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap mb-4" style="height: auto !important;">
                <div class="container m-auto" style="height: auto !important;">
                    <div class="p-2 w-full border-gray-200 border-b-2 overflow-auto bg-white my-2">
                        <a href="#" rel="nofollow">
                            <img src="/image/thaoluan.png" width="160" height="200" align="left"
                                 class="w-40 mr-2 border border-gray-300 lazy loaded"
                                 alt="THẢO LUẬN TƯ TƯỞNG HỒ CHÍ MINH MỘT SỐ CHUẨN MỰC ĐẠO ĐỨC TRONG TƯ TƯỞNG HỒ CHÍ MINH"
                                 data-ll-status="loaded">
                        </a>
                        <div class="md:pl-40 md:ml-2 not-italic">
                            <h3>
                                <a href="#" rel="nofollow"
                                   class="text-xl text-primary hover:text-secondary block mb-2 break-words">
                                    THẢO LUẬN TƯ TƯỞNG HỒ CHÍ MINH MỘT SỐ CHUẨN MỰC ĐẠO ĐỨC TRONG TƯ TƯỞNG HỒ CHÍ
                                    MINH
                                </a>
                            </h3>
                            <div class="break-word clear-both md:clear-none" id="doc-content-0">
                                Thảo luận Tư Tưởng Hồ Chí Minh Một số chuẩn mực đạo đức trong Tư tưởng Hồ Chí Minh
                                <br>Môn: Tư tưởng Hồ Chí Minh<br>
                                Giảng viên hướng dẫn: Ts. Bùi Hồng Vạn
                                <br>Lớp học phần: 2071HCMI0111<br>
                                Nhóm: 3<br>
                                Đề tài 1: Phân tích cơ sở khách quan hình thành, phát triển Tư tưởng Hồ Chí Minh và
                                chỉ ra tiền đề lý luận đóng vai[r]
                                <div id="voting-6924908" class="hidden">
                                    <p>
                                        <a href="" class="text-primary hover:text-secondary" rel="dofollow">Xem Thêm "
                                            <i>TƯ TƯỞNG HỒ CHÍ MINH: THẢO LUẬN: TƯ TƯỞNG HỒ CHÍ MINH PPS</i> "
                                        </a>
                                    </p>
                                    <p>
                                        <a href="#" class="text-primary hover:text-secondary" rel="dofollow">Xem Thêm "
                                            <i>chuẩn mực đạo đức trong tư tưởng hồ chí minh</i> "
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <p class="text-sm py-2 uppercase text-right">
                                <!--                                <img src="https://5pdf.net/svg/docx.svg"-->
                                <!--                                     class="w-4 h-4 mb-1 ml-2 webkit-inline-box lazy loaded" width="24" height="24"-->
                                <!--                                     data-ll-status="loaded"> -->
                                20
                                <a class="text-primary hover:text-secondary ml-2" rel="nofollow" href="#"
                                   title="THẢO LUẬN TƯ TƯỞNG HỒ CHÍ MINH MỘT SỐ CHUẨN MỰC ĐẠO ĐỨC TRONG TƯ TƯỞNG HỒ CHÍ MINH">
                                    Đọc thêm
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-3 sm:px-3">
            <div class="mt-4 lg:pl-2">
                <div class="bg-white py-3 lg:p-0">
                    <div class="p-3">
                        <h2 class="border-b-4 border-primary inline-block text-2xl uppercase">
                            Cùng chủ đề
                        </h2>
                    </div>
                    <div id="related_subjects" class="pb-2 px-3">
                        <ul class="list-disc pl-4 text-primary cursor-pointer break-words">
                            <li class="hover:text-secondary pb-2">
                                <a href="#">
                                    <b>THE OLD MAN AND THE SEA REVIEWS NEW YORK TIMES</b>
                                    <span class="text-sm">(+10,000 tài liệu)</span>
                                </a>
                            </li>
                            <li class="hover:text-secondary pb-2">
                                <a href="#">
                                    <b>THE OLD MAN AND THE SEA</b>
                                    <span class="text-sm">(+10,000 tài liệu)</span>
                                </a>
                            </li>
                            <li class="hover:text-secondary pb-2">
                                <a href="#">
                                    <b>THE OLD MAN AND THE SEA 1958</b>
                                    <span class="text-sm">(+10,000 tài liệu)</span>
                                </a>
                            </li>
                            <li class="hover:text-secondary pb-2">
                                <a href="#">
                                    <b>THE OLD MAN AND THE SEA SYMBOLISM</b>
                                    <span class="text-sm">(+10,000 tài liệu)</span>
                                </a>
                            </li>
                            <li class="hover:text-secondary pb-2">
                                <a href="#">
                                    <b>THE OLD MAN AND THE SEA QUOTES</b>
                                    <span class="text-sm">(+10,000 tài liệu)</span>
                                </a>
                            </li>
                            <li class="hover:text-secondary pb-2">
                                <a href="#">
                                    <b>THE OLD MAN AND THE SEA PDF</b>
                                    <span class="text-sm">(+10,000 tài liệu)</span>
                                </a>
                            </li>
                            <li class="hover:text-secondary pb-2">
                                <a href="#">
                                    <b>"THE OLD MAN AND THE SEA" NOVEL</b>
                                    <span class="text-sm">(+10,000 tài liệu)</span>
                                </a>
                            </li>
                            <li class="hover:text-secondary pb-2"><a
                                        href="#">
                                    <b>THE OLD MAN AND THE SEA SPARKNOTES</b>
                                    <span class="text-sm">(+10,000 tài liệu)</span>
                                </a>
                            </li>
                            <li class="hover:text-secondary pb-2">
                                <a href="#">
                                    <b>THE OLD MAN AND THE SEA 1999 DOWNLOAD</b>
                                    <span class="text-sm">(+10,000 tài liệu)</span>
                                </a>
                            </li>
                            <li class="hover:text-secondary pb-2">
                                <a href="#">
                                    <b>THE OLD MAN AND THE SEA FULL SUMMARY</b>
                                    <span class="text-sm">(+10,000 tài liệu)</span>
                                </a>
                            </li>
                            <li class="hover:text-secondary pb-2">
                                <a href="#">
                                    <b>THE OLD MAN AND THE SEA SPARKNOTES QUIZ</b>
                                    <span class="text-sm">(+10,000 tài liệu)</span>
                                </a>
                            </li>
                            <li class="hover:text-secondary pb-2">
                                <a href="#">
                                    <b>THE OLD MAN AND THE SEA READING QUIZ</b>
                                    <span class="text-sm">(+10,000 tài liệu)</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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