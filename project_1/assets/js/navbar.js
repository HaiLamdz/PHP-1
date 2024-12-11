let slideindex = 0;

// viết hàm chuyển slide
function slide(){
    // gọi đến class chứa ảnh
    let slideImg = document.getElementsByClassName('imgstyle')
    // ẩn tòa bộ các ảnh 
    for (let i = 0; i < slideImg.length; i++) {
        slideImg[i].style.display = 'none'
        
    }



    // nếu slideindex > 2, thì sẽ quay lại slide đầu tiên
    if(slideindex >= slideImg.length){
        slideindex = 0
    }
    // nếu slideindex là số âm, thì sẽ quay lại slide cuối cùng
    if(slideindex < 0){
        slideindex = slideImg.length - 1
    }
    // hiển thị slide thứ slideindex
    slideImg[slideindex].style.display = 'block'

}
slide();

// viết hàm chuyển slide
function chuyenanh(n){
    slide(slideindex += n)
}

// KHỞI TẠO BIẾN ĐỂ CHẠY AUTO 
let autoImg;
function auto(){
    slide();
    slideindex++;
    // gọi lại hàm auto sau 1 giây 
    autoImg = setTimeout(auto, 5000)
}
auto();
// dừng auto 
function stop(){
    clearInterval(autoImg)
}