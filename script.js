
import skils from './data/skil.json' assert {type: 'json'};
import portofolio from './data/portofolio.json' assert {type: 'json'};
$(function(){
    loadSkils()
    loadPortofolio()
})
const modalDetailPortofolio = new bootstrap.Modal(document.getElementById('modalDetailPortofolio'), {
    keyboard: false
})

function showDetailPortofolio(id) {
    const data = portofolio
    const porto = data.filter(rows => {
        return rows.id == id
    })[0]
    
    if(porto){
        $('.project_detail_image img').attr('src',porto.bg)
        let tools = ``
        porto.tools.forEach((key)=>{
            tools += `<li><a href="javascript:;">${key}</a></li>`
        })
        const htmlInformation = `<div class="project_name">
                <h3 class="mb-4">${porto.name}</h3>
            </div>
            <p class="project_description">
                ${porto.description}
                <br>
                <b>Role : ${porto.role}</b>
                <ul>
                    ${tools}
                </ul>
                <b>Year : ${porto.year}</b>
            </p>`
        $('#modalDetailPortofolio .project_detail_information').html(htmlInformation)
        modalDetailPortofolio.toggle()
    }    
}

function loadSkils(){
    let htmls = ``
    skils.forEach((item)=>{
        htmls += `<div class="item swiper-slide">
            <div class="center-item text-center">
                <div class="image_preview">
                    <img src="${item.icon}" alt="">
                </div>
                <span>${item.name}</span>
            </div>
        </div>`;
    })
    $('.skils_list_wrappper').html(htmls)
    loadSwipper()
}

function loadPortofolio(){
    let htmls = ``
    portofolio.forEach((item)=>{
        htmls += ` <div class="col-sm-4">
            <div class="portofolio_item">
                <div class="image">
                    <img src="${item.bg}" alt="">
                    <div class="overlay details" data-id="${item.id}">
                        <a href="javascript:;" class="badge text-white bg-primary">Detail</a>
                    </div>
                </div>
                <p class="project_name">${item.name}</p>
            </div>
        </div>`
    })
    $('.portofolio_content').html(htmls)
    $('.portofolio_content .portofolio_item .details').on('click',function(){
        const id = $(this).data('id')
        showDetailPortofolio(id)
    })
}
function loadSwipper(){
    new Swiper('.swiperSkils', {
        slidesPerView: 8,
        spaceBetween: 20,
        // slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            // nextEl: ".arrow-right",
            // prevEl: ".arrow-left",
            hiddenClass: ".swiper-button-hidden",
            nextEl: ".swiper_button_next",
            prevEl: ".swiper_button_prev",
        },
        scrollbar: {
            el: '.swiper-scrollbar',
            hide: true
        },

        breakpoints: {
            // when window width is <= 499px
            1324: {
                slidesPerView: 8,
                spaceBetweenSlides: 22
            },
            1224: {
                slidesPerView: 7,
                spaceBetweenSlides: 22
            },
            768: {
                slidesPerView: 4,
                spaceBetweenSlides: 22
            },
            425: {
                slidesPerView: 4,
                spaceBetweenSlides: 22
            },
            375: {
                slidesPerView: 3,
                spaceBetweenSlides: 22
            },
            320: {
                slidesPerView: 2,
                spaceBetweenSlides: 22
            },
            // when window width is <= 999px
        }
    });
}