$(function(){
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
})
const listOfPortofolio = $('#listOfPortofolio').val()
const modalDetailPortofolio = new bootstrap.Modal(document.getElementById('modalDetailPortofolio'), {
    keyboard: false
})

function showDetailPortofolio(id) {
    const data = JSON.parse(listOfPortofolio)
    const porto = data.filter(rows => {
        return rows.id == id
    })[0]
    
    if(porto){
        $('.project_detail_image img').attr('src',porto.bg)
        let tools = ``
        for(let[i,key] of porto.tools.entries()){
            tools += `<li><a href="javascript:;">${key}</a></li>`
        }
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