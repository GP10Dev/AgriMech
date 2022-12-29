function list(id){
    let cls = "dropdown "+id;
    let obj = document.getElementsByClassName(cls);
    obj[0].style.display = 'block';
}
function hide(id){
    let cls = "dropdown "+id;
    let obj = document.getElementsByClassName(cls);
    obj[0].style.display = 'none';
}