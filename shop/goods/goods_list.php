<!-- 전체카테고리 > 채소 의 goodsList입니다. --------------------------------------------------------->
<link rel="stylesheet" href="../../CSS/common.css">
<link rel="stylesheet" href="../../CSS/goods_list.css">
<!-- 이자리에 쪼개진 header내용 담은 php파일 include -->

<main id="main">
    <section id="content">
    <div class="page_aticle">
        <div id="lnbMenu" class="lnb_menu">
            <div id="bnrCategory" class="bnt_category">
                <div class="thumb">
                    <img src="../../img/goods_list/vege_bnr.webp" alt="카테고리 배너">
                </div>
            </div>
            <div class="inner_lnb">
                <h3 class="tit">채소</h3>
                <ul class="list on">
                    <li><a href="#">전체보기</a></li>
                    <li><a href="#">친환경</a></li>
                    <li><a href="#">고구마·감자·당근</a></li>
                    <li><a href="#">시금치·쌈채소·나물</a></li>
                    <li><a href="#">브로콜리·파프리카·양배추</a></li>
                    <li><a href="#">양파·대파·마늘·배추</a></li>
                    <li><a href="#">오이·호박·고추</a></li>
                    <li><a href="#">냉동·이색·간편채소</a></li>
                    <li><a href="#">콩나물·버섯</a></li>
                </ul>
            </div>
        </div>
        <div id="goodsList" class="page_section section_goodslist">
            <div class="list_ability">
                <div class="sort_menu">
                    <div>
                        <p class="count"><span class="inner_count">총 120개</span></p>
                        <div class="select_type">
                            <a href="#" class="name_select">추천순</a> <!--display:none-->
                            <ul class="list">
                                <li class="item_recommend">
                                    <a class="on">추천순</a>
                                    <div class="recommend">
                                        <div id="layerRecommend" class="layer_recommend">
                                            <p class="desc">
                                                "검색어 적합성과 소비자 인기도(판매량,판매금액,"
                                                <br>"조회수 등)를 종합적으로 고려한 순서입니다."
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li><a>신상품순</a></li>
                                <li><a>인기상품순</a></li>
                                <li><a>혜택순</a></li>
                                <li><a>낮은 가격순</a></li>
                                <li><a>높은 가격순</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list_goods">
                <div class="inner_listgoods">
                    <ul class="list">
                        <!--상품리스트 안에서 반복되는 li 구조 시작-------------------------------------------->
                        <li class="item">
                            <div class="thumb">
                                <a href="" class="img"><img src="" alt=""></a>
                                <div class="group_btn">
                                    <button type="button" class="btn btn_cart">
                                        <span class="screen_out"><!--알 수 없는 숫자--></span>
                                    </button>
                                </div>
                            </div>
                            <a class="info">
                                <span class="name">상품명</span>
                                <span class="cost"><span class="price">~~~~원</span></span>
                                <span class="desc">상품설명</span>
                                <span class="tag"></span>
                            </a>
                        </li>
                        <!--상품리스트 안에서 반복되는 li 구조 끝-------------------------------------------->
                    </ul>
                </div>
            </div>
            <div class="layout-pagination">
                <div class="pagediv">
                    <a href="#" class="layout-pagination-button layout-pagination-first-page">맨 처음 페이지로 가기</a>
                    <a href="#" class="layout-pagination-button layout-pagination-prev-page">이전 페이지로 가기</a>
                    <!-- span > a 구조가 페이지 넘버마다 반복되는데 현재페이지는 자동으로 strong처리됨
                        한 페이지당 최대 10개의 페이지 넘버가 존재 -->
                    <span><a class="layout-pagination-button layout-pagination-number">1</a></span>
                    <span><a class="layout-pagination-button layout-pagination-number">2</a></span>
                    <span><a class="layout-pagination-button layout-pagination-number">3</a></span>
                    <span><a class="layout-pagination-button layout-pagination-number">4</a></span>
                    <span><a class="layout-pagination-button layout-pagination-number">5</a></span>
                    <a href="#" class="layout-pagination-button layout-pagination-first-page">다음 페이지로 가기</a>
                    <a href="#" class="layout-pagination-button layout-pagination-prev-page">맨 끝 페이지로 가기</a>
                </div>
            </div>
        </div>
    </div>
<!-- 이자리에 쪼개진 footer내용 담은 php파일 include -->

    </section>
</main>
