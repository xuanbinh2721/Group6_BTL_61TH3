let txtfruit = document.getElementById('txtfruit');
let btnshowfruit = document.getElementById('btnshowfruit');
let titlefruit = document.getElementById('titlefuit');
let imagefruit = document.getElementById('imgfruit')

btnChange.addEventListener('click',hamThaydoi);
btnAdd.addEventListener('click',hamThem);

function hamThaydoi(){
    doanVan.textContent='Noi dung moi';
    doanVan.style.color='red';
    doanVan.style.backgroundColor='yellow';
}
function hamThem(){
    //tao 1 thanh phan can them
    let tieude = document.createElement('h2');
    tieude.textContent = 'Them 1 the h2';
    //xac dinh vi tri can ghep
    vungchua.appendChild(tieude);
}